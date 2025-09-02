<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;

class VentasCabeceras extends SqlOrm
{
    /**
     * Identificador del documento
     * @var int
     */
    public $id;
    /**
     * Tipo de documento 1->presupuesto 2->pedido 4->albarán 8->factura 16->rma 32->sat
     * @var int
     */
    public $tipodoc;
    /**
     * Serie del documento
     * @var string
     */
    public $serie;
    /**
     * Número del documento
     * @var int
     */
    public $numero;
    /**
     * Fecha del documento
     * @var \DateTime
     */
    public $fecha;
    /**
     * Fecha de finalización del documento (el pedido se sirve por completo, un albarán se factura, etc)
     * @var \DateTime|null
     */
    public $fechafin;
    /**
     * Fecha prevista de entrega en los pedidos
     * @var \DateTime|null
     */
    public $fechaentrega;
    /** @var \DateTime|null */
    public $fecha_pre_conta;
    /**
     * Fecha de contabilización
     * @var \DateTime|null
     */
    public $fecha_conta;
    /** @var int */
    public $usuario_pre_conta;
    /** @var int */
    public $usuario_conta;
    /**
     * Código del cliente
     * @var int
     */
    public $cli_codigo;
    /**
     * Nombre del cliente
     * @var string
     */
    public $cli_nombre;
    /**
     * CIF del cliente
     * @var string
     */
    public $cli_cif;
    /**
     * Dirección del cliente
     * @var string
     */
    public $cli_direccion;
    /**
     * Localidad del cliente
     * @var string
     */
    public $cli_localidad;
    /**
     * Código postal del cliente
     * @var string
     */
    public $cli_cpostal;
    /**
     * Provincia del cliente
     * @var int
     */
    public $cli_provincia;
    /**
     * Delegación del cliente. Si tiene valor, la utilizaremos para mostrar la dirección de envío.
     * @var int
     */
    public $cli_delegacion;
    /**
     * Referencia del documento del cliente
     * @var string
     */
    public $cli_referencia;
    /** @var int */
    public $cli_banco;
    /** @var int */
    public $interlocutor;
    /**
     * Forma de pago
     * @var int
     */
    public $fpago;
    /**
     * Agente comercial que realiza la venta
     * @var int
     */
    public $agente;
    /**
     * Tarifa que aplicamos en este documento (se extrae del cliente)
     * @var int
     */
    public $tarifa;
    /**
     * Ruta del cliente
     * @var int
     */
    public $ruta;
    /**
     * Indica si el presupuesto es una factura proforma
     * @var int
     */
    public $fraproforma;
    /**
     * Indica si el albarán es de depósito
     * @var int
     */
    public $albdeposito;
    /**
     * Suma de la primera base imponible
     * @var float
     */
    public $suma1;
    /**
     * Suma de la segunda base imponible
     * @var float
     */
    public $suma2;
    /**
     * Suma de la tercera base imponible
     * @var float
     */
    public $suma3;
    /**
     * Porcentaje de descuento por pronto pago (descuento del pie)
     * @var float
     */
    public $pdtopp;
    /**
     * Primera base imponible
     * @var float
     */
    public $baseimpo1;
    /**
     * Segunda base imponible
     * @var float
     */
    public $baseimpo2;
    /**
     * Tercera base imponible
     * @var float
     */
    public $baseimpo3;
    /**
     * Primer tipo de IVA
     * @var float
     */
    public $piva1;
    /**
     * Segundo tipo de IVA
     * @var float
     */
    public $piva2;
    /**
     * Tercer tipo de IVA
     * @var float
     */
    public $piva3;
    /**
     * Primer porcentaje de recargo de equivalencia
     * @var float
     */
    public $prec1;
    /**
     * Segundo porcentaje de recargo de equivalencia
     * @var float
     */
    public $prec2;
    /**
     * Tercer porcentaje de recargo de equivalencia
     * @var float
     */
    public $prec3;
    /**
     * Primer importe de IVA
     * @var float
     */
    public $iva1;
    /**
     * Segundo importe de IVA
     * @var float
     */
    public $iva2;
    /**
     * Tercer importe de IVA
     * @var float
     */
    public $iva3;
    /**
     * Primer importe de recargo de equivalencia
     * @var float
     */
    public $rec1;
    /**
     * Segundo importe de recargo de equivalencia
     * @var float
     */
    public $rec2;
    /**
     * Tercer importe de recargo de equivalencia
     * @var float
     */
    public $rec3;
    /**
     * Porcentaje de IRPF
     * @var float
     */
    public $pirpf;
    /**
     * Importe de IRPF
     * @var float
     */
    public $irpf;
    /**
     * Porcentaje de recargo financiero
     * @var float
     */
    public $precfin;
    /**
     * Importe del recargo financiero
     * @var float
     */
    public $recfin;
    /**
     * Importe de los portes externos a la venta
     * @var float
     */
    public $portes;
    /**
     * Importe total del documento
     * @var float
     */
    public $total;
    /**
     * Valor de portes que no se le repercuten al cliente
     * @var float
     */
    public $costeportes;
    /**
     * Importe que nos cuesta financiar la operación
     * @var float
     */
    public $costefinanc;
    /**
     * Importe de otros costes que no se le repercuten al cliente
     * @var float
     */
    public $costeotros;
    /**
     * ÃƒÆ’Ã…Â¡ltimo usuario que ha modificado el documento
     * @var int
     */
    public $usuario;
    /**
     * Fecha y hora de modificación del documento
     * @var \DateTime
     */
    public $horamodi;
    /**
     * Descripción del documento (por defecto será la descripción de la línea de mayor valor)
     * @var string
     */
    public $descripcion;
    /** @var string */
    public $observaciones;
    /** @var float */
    public $pdtopp_imp;
    /** @var float */
    public $precfin_imp;
    /** @var float */
    public $recfin_imp;
    /** @var string */
    public $comentario;
    /**
     * Numero del terminal TPV que realiza la venta (cualquier valor !=0 indica que es un ticket)
     * @var int
     */
    public $esticket;
    /**
     * Texto que indica el motivo por el que el pedido se ha finalizado
     * @var string
     */
    public $motivo_finalizacion;
    /**
     * Fecha en la que se ha forzado la finalizacion de un pedido
     * @var \DateTime|null
     */
    public $fecha_finalizacion;
    /**
     * Usuario que ha forzado la finalizacion de un pedido
     * @var int
     */
    public $usuario_finalizacion;
    /** @var float */
    public $importe_entregado_ticket;
    /**
     * Fecha en la que utilizamos el ticket como vale descuento para cobrar otro ticket
     * @var \DateTime|null
     */
    public $vale_dto_aplicado;
    /** @var int */
    public $cliente_final;
    /**
     * Identificador del documento en el que hemos utilizado el vale descuento
     * @var int
     */
    public $id_vale_dto_aplicado;
    /** @var bool */
    public $cli_modificado;
    /** @var string */
    public $cli_observaciones;
    /** @var string */
    public $cli_telefono;
    /** @var bool */
    public $comisionado;
    /**
     * Fecha que utilizamos para calcular los tipos de IVA efectivos de la factura
     * @var \DateTime|null
     */
    public $fecha_valor_iva;
    /**
     * Indica si el pedido proviene de la web
     * @var string
     */
    public $pedido_web;
    /**
     * Número de terminal que realiza la venta (TPV)
     * @var int
     */
    public $terminal;
    /**
     * Turno de caja al que corresponde el albarán o factura
     * @var int
     */
    public $turno;
    /**
     * Indica si el documento lo ha creado el TPV y utiliza una serie auxiliar
     * @var bool
     */
    public $tpv_serie_aux;
    /**
     * Numero de campaña a la que pertenece el documento
     * @var int
     */
    public $campania;
    /** @var string */
    public $bloque;
    /** @var string */
    public $portal;
    /** @var string */
    public $escalera;
    /** @var string */
    public $piso;
    /** @var string */
    public $letra;
    /** @var string */
    public $urbanizacion;
    /** @var string */
    public $edificio;
    /** @var string */
    public $barrio;
    /** @var int */
    public $cod_municipio;
    /** @var string */
    public $puerta;
    /** @var string */
    public $numero_calle;
    /** @var string */
    public $direccion_corta;
    /** @var int */
    public $municipio;
    /** @var string */
    public $tipovia;
    /** @var int */
    public $repartidor;
    /** @var bool */
    public $lunes;
    /** @var bool */
    public $mastes;
    /** @var bool */
    public $miercoles;
    /** @var bool */
    public $jueves;
    /** @var bool */
    public $viernes;
    /** @var bool */
    public $sabado;
    /** @var bool */
    public $domingo;
    /** @var bool */
    public $normal;
    /** @var bool */
    public $alta;
    /** @var bool */
    public $baja;
    /** @var bool */
    public $horafija;
    /** @var bool */
    public $urgente;
    /** @var bool */
    public $reclamacion;
    /** @var \DateTime|null */
    public $fechaincidencia;
    /** @var int */
    public $remesa_ruta;
    /** @var int */
    public $camion_ruta;
    /** @var \DateTime|null */
    public $fechafija;
    /** @var string */
    public $horaentrega;
    /** @var string */
    public $poliza;
    /** @var bool */
    public $quita_recargo_equivalencia;
    /** @var bool */
    public $unoporuno;
    /** @var bool */
    public $gasaltapreciocero;
    /** @var string */
    public $cli_movil;
    /** @var int */
    public $cod_vehiculo;
    /** @var string */
    public $nombre_vehiculo;
    /** @var int */
    public $conductor;
    /** @var string */
    public $nombre_conductor;
    /** @var int */
    public $remolque;
    /** @var int */
    public $agencia;
    /** @var int */
    public $id_conta;
    /** @var \DateTime|null */
    public $ws_autorizacion;
    /** @var float */
    public $totalpendiente;
    /** @var int */
    public $facturae_fiscal;
    /** @var int */
    public $facturae_receptor;
    /** @var int */
    public $facturae_pagador;
    /** @var int */
    public $facturae_comprador;
    /** @var int */
    public $facturae_banco;
    /** @var bool */
    public $factura_puntos_regalo;
    /** @var int */
    public $delegacion;
    /** @var int */
    public $forma_reparto;
    /** @var int */
    public $incoterms;
    /** @var int */
    public $bnp_texto;
    /** @var int */
    public $imagen_firma;
    /** @var string */
    public $huella_firma;
    /** @var \DateTime|null */
    public $hora_firma;
    /** @var bool */
    public $pedido_confirmado;
    /** @var int */
    public $pedido_cobro_banco;
    /** @var string */
    public $pedido_cobro_ident;
    /** @var string */
    public $pedido_por;
    /** @var bool */
    public $tbai_registrado;
    /** @var int */
    public $rectificada_id;
    /** @var bool */
    public $recoger_en_tienda;
    /** @var int */
    public $adelanto;
    /** @var int */
    public $adelanto_ajuste;
    /** @var string */
    public $nota_interna;
    /** @var bool */
    public $comentario_avisar;
    /** @var string */
    public $observaciones_pedido;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'tipodoc', 'serie', 'numero', 'fecha', 'fechafin', 'fechaentrega', 'fecha_pre_conta', 'fecha_conta', 'usuario_pre_conta', 'usuario_conta', 'cli_codigo', 'cli_nombre', 'cli_cif', 'cli_direccion', 'cli_localidad', 'cli_cpostal', 'cli_provincia', 'cli_delegacion', 'cli_referencia', 'cli_banco', 'interlocutor', 'fpago', 'agente', 'tarifa', 'ruta', 'fraproforma', 'albdeposito', 'suma1', 'suma2', 'suma3', 'pdtopp', 'baseimpo1', 'baseimpo2', 'baseimpo3', 'piva1', 'piva2', 'piva3', 'prec1', 'prec2', 'prec3', 'iva1', 'iva2', 'iva3', 'rec1', 'rec2', 'rec3', 'pirpf', 'irpf', 'precfin', 'recfin', 'portes', 'total', 'costeportes', 'costefinanc', 'costeotros', 'usuario', 'horamodi', 'descripcion', 'observaciones', 'pdtopp_imp', 'precfin_imp', 'recfin_imp', 'comentario', 'esticket', 'motivo_finalizacion', 'fecha_finalizacion', 'usuario_finalizacion', 'importe_entregado_ticket', 'vale_dto_aplicado', 'cliente_final', 'id_vale_dto_aplicado', 'cli_modificado', 'cli_observaciones', 'cli_telefono', 'comisionado', 'fecha_valor_iva', 'pedido_web', 'terminal', 'turno', 'tpv_serie_aux', 'campania', 'bloque', 'portal', 'escalera', 'piso', 'letra', 'urbanizacion', 'edificio', 'barrio', 'cod_municipio', 'puerta', 'numero_calle', 'direccion_corta', 'municipio', 'tipovia', 'repartidor', 'lunes', 'mastes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo', 'normal', 'alta', 'baja', 'horafija', 'urgente', 'reclamacion', 'fechaincidencia', 'remesa_ruta', 'camion_ruta', 'fechafija', 'horaentrega', 'poliza', 'quita_recargo_equivalencia', 'unoporuno', 'gasaltapreciocero', 'cli_movil', 'cod_vehiculo', 'nombre_vehiculo', 'conductor', 'nombre_conductor', 'remolque', 'agencia', 'id_conta', 'ws_autorizacion', 'totalpendiente', 'facturae_fiscal', 'facturae_receptor', 'facturae_pagador', 'facturae_comprador', 'facturae_banco', 'factura_puntos_regalo', 'delegacion', 'forma_reparto', 'incoterms', 'bnp_texto', 'imagen_firma', 'huella_firma', 'hora_firma', 'pedido_confirmado', 'pedido_cobro_banco', 'pedido_cobro_ident', 'pedido_por', 'tbai_registrado', 'rectificada_id', 'recoger_en_tienda', 'adelanto', 'adelanto_ajuste', 'nota_interna', 'comentario_avisar', 'observaciones_pedido'];
        $this->fieldTypes = ['int', 'int', 'string', 'int', '\DateTime', '\DateTime', '\DateTime', '\DateTime', '\DateTime', 'int', 'int', 'int', 'string', 'string', 'string', 'string', 'string', 'int', 'int', 'string', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'time', 'string', 'string', 'float', 'float', 'float', 'string', 'int', 'string', 'time', 'int', 'float', '\DateTime', 'int', 'int', 'bool', 'string', 'string', 'bool', '\DateTime', 'string', 'int', 'int', 'bool', 'int', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'string', 'string', 'string', 'int', 'string', 'int', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', '\DateTime', 'int', 'int', '\DateTime', 'string', 'string', 'bool', 'bool', 'bool', 'string', 'int', 'string', 'int', 'string', 'int', 'int', 'int', 'time', 'float', 'int', 'int', 'int', 'int', 'int', 'bool', 'int', 'int', 'int', 'int', 'int', 'string', 'time', 'bool', 'int', 'string', 'string', 'bool', 'int', 'bool', 'int', 'int', 'string', 'bool', 'string'];
        $this->fieldLengths = [0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 15, 80, 70, 20, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 20, 0, 0, 5, 0, 0, 0, 0, 30, 30, 30, 30, 30, 50, 50, 50, 0, 30, 30, 80, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 50, 0, 0, 0, 20, 0, 100, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, '', 0, 'now', null, null, null, null, 0, 0, 0, '', '', '', '', '0', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'now', '', '', 0.0, 0.0, 0.0, '', 0, '', null, 0, 0.0, null, 0, 0, false, '', '', false, null, '', 0, 0, false, 0, '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, false, false, false, false, false, false, false, false, false, false, false, false, false, null, 0, 0, null, '', '', false, false, false, '', 0, '', 0, '', 0, 0, 0, null, 0, 0, 0, 0, 0, 0, false, 0, 0, 0, 0, 0, '', null, false, 0, '0', '', false, 0, false, 0, 0, '', false, ''];
        $this->numFields = 154;
        $this->tableName = 'ventas_cabeceras';
        $this->pkFields = ['id'];
        $this->numPkFields = 1;
        $this->autoIncrementField = 'id';
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        return $this->id == 0;
    }

    // -- END generated code --

    /** @var string */
    public $nombreDoc;

    /* @var string */
    public $cli_fin_nombre;
    /* @var string */
    public $cli_fin_direccion;
    /* @var string */
    public $cli_fin_localidad;
    /* @var string */
    public $cli_fin_cpostal;
    /* @var string */
    public $cli_fin_provincia;

    public static function leeSerieNumero(int $idCab): string
    {
        return Sql::selectString("SELECT serie||'-'||numero FROM ventas_cabeceras WHERE id = $idCab");
    }

    public static function leeNumero(int $idCab): int
    {
        return (int)Sql::selectEscalar("SELECT numero FROM ventas_cabeceras WHERE id = $idCab");
    }

    public static function serieVisibleWeb(int $idCab): bool
    {
        return (bool)Sql::selectEscalar("SELECT mostrarweb FROM series WHERE serie = (SELECT serie FROM ventas_cabeceras WHERE id = $idCab)");
    }

    public static function leeDocumento(int $idCab): VentasCabeceras
    {
        $cab = new self($idCab);
        $cab->cli_provincia = Sql::selectString("SELECT nombre FROM provincias WHERE codigo = $cab->cli_provincia");
        $cab->leeClienteFinal();
        $cab->fpago = Sql::selectString("SELECT nombre FROM formaspago WHERE codigo = $cab->fpago");
        $cab->nombreDocumento();

        $sqlBanco = "SELECT nombre || ' ' || replace(rtrim(regexp_replace(iban||cuenta, '(.{4})', '\\1 ', 'g')), ' ', '-') FROM bancos_cuentas WHERE escuentadocumento LIMIT 1";
        $cab->ctaIngreso = Sql::selectString($sqlBanco);

        $sqlVtos = "SELECT
                string_agg(
                  to_char(fecha, 'dd-MM-yyyy') || ': ' ||
                  trim(to_char(importe, '9G999G990D99')) || ' €' ||
                  case when situacion = 1 then ' (P)' else '' end,
                '; ')
            FROM vencimientos
            WHERE tipo = 0 AND idcab = $idCab";
        $cab->vencimientos = Sql::selectString($sqlVtos);

        return $cab;
    }

    public function nombreDocumento(): string
    {
        if ($this->tipodoc == 2) {
            $this->nombreDoc = 'Pedido';
        } elseif ($this->tipodoc == 4) {
            $this->nombreDoc = 'Albarán';
        } elseif ($this->tipodoc == 8) {
            $this->nombreDoc = 'Factura';
        } else {
            $this->nombreDoc = 'Presupuesto';
        }

        return $this->nombreDoc;
    }

    private function leeClienteFinal()
    {
        $this->cli_fin_nombre = '';
        $this->cli_fin_direccion = '';
        $this->cli_fin_localidad = '';
        $this->cli_fin_cpostal = '';
        $this->cli_fin_provincia = '';

        if ($this->cliente_final === 0) {
            return;
        }

        $sql = "SELECT
            cli.nombre,
            cli.direccion,
            cli.localidad,
            cli.cpostal,
            pro.nombre AS provincia
            FROM clientes_finales cli
            LEFT JOIN provincias pro ON pro.codigo = cli.provincia
            WHERE cli.codigo = $this->cliente_final";
        $cli = Sql::select($sql);

        $this->cli_fin_nombre = $cli['nombre'];
        $this->cli_fin_direccion = $cli['direccion'];
        $this->cli_fin_localidad = $cli['localidad'];
        $this->cli_fin_cpostal = $cli['cpostal'];
        $this->cli_fin_provincia = $cli['provincia'];
    }

    public function confirmaPedido(): bool
    {
        $this->pedido_confirmado = true;
        return $this->update();
    }
}
