<?php

namespace App\Helper;

use App\Entity\Articulos;
use App\Entity\Clientes;
use App\Entity\Empresa;
use App\Entity\Sat;
use App\Entity\SatLineas;
use App\Entity\SatParteActuacion;
use App\Entity\VentasLineas;
use App\Library\Sql;
use App\Service\ConfigService;

class SatHelper
{
    /* @var int */
    private $idPedido;

    /* @var Sat */
    private $sat;

    /* @var SatParteActuacion */
    private $act;

    /* @var Articulos */
    private $art;

    /* @var Clientes */
    private $cli;

    /* @var VentasLineas */
    private $lPed;

    /* @var ConfigService */
    private $config;

    /* @var array */
    private $ensamblado;

    public function __construct(int $idPedido, Clientes $cli, ConfigService $config)
    {
        $this->idPedido = $idPedido;
        $this->cli = $cli;
        $this->config = $config;
    }

    public function creaParteSat()
    {
        $ensamblados = $this->leeEnsamblados();
        if (empty($ensamblados)) {
            return;
        }

        $this->sat = new Sat();
        $this->act = new SatParteActuacion();
        $this->art = new Articulos();
        $this->lPed = new VentasLineas();

        $primerSat = true;

        foreach ($ensamblados as $asm) {
            $this->ensamblado = $asm;
            $this->grabaSat($primerSat);
            $primerSat = false;
        }
    }

    private function grabaSat($primerParte)
    {
        $this->lPed->selectPK($this->ensamblado['id_linea_pedido']);

        $this->sat->clearFields();
        $this->sat->rellenaDatosCliente($this->cli);
        $this->sat->serie = $this->config->satSerie();
        $this->sat->fecha_inicio = date('Y-m-d');
        $this->sat->referencia = $this->ensamblado['referencia'];
        $this->sat->nombre_articulo = $this->ensamblado['nombre'];
        $this->sat->marca = $this->ensamblado['marca'];
        $this->sat->modelo = $this->ensamblado['modelo'];
        $this->sat->asunto = $this->ensamblado['asunto'];
        $this->sat->descripcion = $this->ensamblado['descripcion'];
        $this->sat->insert();

        $this->grabaActuacion($primerParte);

        $this->sat->grabaEstadistica();
        VentasLineas::actualizaWebIdSat($this->lPed->id, $this->sat->id);
    }

    private function grabaActuacion($primerParte)
    {
        $this->act->clearFields();
        $this->act->idsat = $this->sat->id;
        $this->act->fechainicio = date('Y-m-d');
        $this->act->asunto = $this->ensamblado['asunto'];
        $this->act->descripcion = $this->sat->descripcion;
        $this->act->insert();

        $this->grabaLineaPrincipal();
        if ($primerParte) {
            $this->grabaLineaPortes();
        }

        foreach ($this->leeLineas() as $lin) {
            $this->grabaLinea($lin);
        }

        SatLineas::actualizaCampoOrden($this->act->id);
        $this->act->actualizaTotales();
    }

    private function leeLineas(): array
    {
        $codigo = (int) $this->ensamblado['codigo'];
        $sql = "SELECT referencia, unidades FROM ensamblados_detalle WHERE codigo = $codigo ORDER BY id";

        return Sql::selectAll($sql);
    }

    private function grabaLineaPortes()
    {
        $portes = (float) $this->ensamblado['portes'];
        if ($portes != 0) {
            $lSat = new SatLineas();
            $lSat->idsat = $this->act->idsat;
            $lSat->idactuacion = $this->act->id;
            $lSat->pmd = 'P';
            $lSat->referencia = '';
            $lSat->descripcion = 'GASTOS DE ENVÍO';
            $lSat->unidades = 1;
            $lSat->precio = $portes;
            $lSat->piva = Empresa::ivaPortes();
            $lSat->prec = 0; // Los portes no llevan recargo << recalcula_pedido_web()
            $lSat->concargo = $portes;
            $lSat->almacen = $this->config->satAlmacen();
            $lSat->coste = $portes;
            $lSat->insert();
        }
    }

    private function grabaLineaPrincipal()
    {
        $lSat = new SatLineas();
        $lSat->idsat = $this->act->idsat;
        $lSat->idactuacion = $this->act->id;
        $lSat->pmd = 'P';
        $lSat->referencia = '';
        $lSat->descripcion = $this->lPed->descripcion;
        $lSat->unidades = $this->lPed->unidades;
        $lSat->precio = $this->lPed->precio;
        $lSat->piva = $this->lPed->piva;
        $lSat->prec = $this->lPed->prec;
        $lSat->concargo = $this->lPed->importe;
        $lSat->almacen = $this->config->satAlmacen();
        $lSat->insert();
    }

    private function grabaLinea($lin)
    {
        $this->art->selectPK($lin['referencia']);
        $iva = $this->art->porcentajesIva();
        //[$precio] = ArticulosPrecios::precio($this->art->referencia, '', '', $this->cli->codigo, $this->tarifa);
        //$lSat->precio = $precio;
        //$lSat->sincargo = $lSat->unidades * $lSat->precio;
        $lSat = new SatLineas();
        $lSat->idsat = $this->act->idsat;
        $lSat->idactuacion = $this->act->id;
        $lSat->pmd = 'P';
        $lSat->referencia = $this->art->referencia;
        $lSat->descripcion = $this->art->nombre;
        $lSat->unidades = $this->lPed->unidades * $lin['unidades'];
        $lSat->piva = $iva['iva'];
        $lSat->prec = $this->cli->recargo != 0 ? $iva['recargo'] : 0;
        $lSat->almacen = $this->config->satAlmacen();
        $lSat->descuenta_almacen = $this->art->sinstock == 0;
        $lSat->pmp = $this->art->pmp;
        $lSat->coste = $this->art->pmp;
        $lSat->insert();
    }

    private function leeEnsamblados(): array
    {
        $sql = "SELECT
            lin.id AS id_linea_pedido,
            asm.codigo,
            asm.nombre AS asunto,
            asm.descripcion,
            art.referencia AS referencia,
            art.nombre AS nombre,
            art.marca,
            art.modelo,
            cab.portes
        FROM ventas_lineas lin
        LEFT JOIN ventas_cabeceras cab ON cab.id = lin.idcab
        LEFT JOIN articulos art ON art.referencia = lin.referencia
        LEFT JOIN articulos_marcas mar ON mar.codigo = art.marca
        LEFT JOIN ensamblados asm ON asm.codigo = art.ensamblado
        WHERE lin.idcab = $this->idPedido AND art.ensamblado != 0
        ORDER BY lin.orden, lin.id";

        return Sql::selectAll($sql);
    }
}
