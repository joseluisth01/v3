<?php

namespace App\Entity;

use App\Library\Sql;

class ClientesLlamadas extends \App\Library\SqlOrm
{
    /**
     * Identificador del registro.
     *
     * @var int
     */
    public $id;
    /**
     * Código del cliente al que pertenece el registro.
     *
     * @var int
     */
    public $cliente;
    /**
     * Identificador de la línea.
     *
     * @var int
     */
    public $id_linea;
    /**
     * Fecha de la llamada.
     *
     * @var \DateTime|null
     */
    public $fecha;
    /**
     * Número de teléfono origen.
     *
     * @var string
     */
    public $telefono_origen;
    /**
     * Provincia origen de la llamada.
     *
     * @var int
     */
    public $provincia_origen;
    /**
     * Distrito origen de la llamada.
     *
     * @var int
     */
    public $distrito_origen;
    /**
     * Franja horaria en la que se realiza la llamada.
     *
     * @var string
     */
    public $franja_horaria;
    /**
     * Número de segundos que dura la llamada.
     *
     * @var int
     */
    public $segundos;
    /**
     * Número de teléfono destino.
     *
     * @var string
     */
    public $telefono_destino;
    /**
     * Provincia destino de la llamada.
     *
     * @var int
     */
    public $provincia_destino;
    /**
     * Distrito destino de la llamada.
     *
     * @var int
     */
    public $distrito_destino;
    /**
     * País de destino de la llamada.
     *
     * @var string
     */
    public $pais_destino;
    /**
     * Clasificación comercial de PTV de la llamada.
     *
     * @var string
     */
    public $cuenta_ptv;
    /**
     * Código del tipo de llamada.
     *
     * @var int
     */
    public $tipo_llamada;
    /**
     * Texto del tipo de llamada que hemos recogido de la hoja de cálculo.
     *
     * @var string
     */
    public $tipo_llamada_original;
    /**
     * Zona detarificación de la llamada.
     *
     * @var string
     */
    public $zona_tarificacion;
    /**
     * Tipo de red de tránsito de la llamada.
     *
     * @var string
     */
    public $tipo_red;
    /**
     * Importe original del establecimiento de llamada.
     *
     * @var float
     */
    public $importe_original_establecimiento;
    /**
     * Importe original del consumo realizado.
     *
     * @var float
     */
    public $importe_original_consumo;
    /**
     * Importe original del descuento realizado.
     *
     * @var float
     */
    public $importe_original_descuento;
    /**
     * Importe original de la llamada.
     *
     * @var float
     */
    public $importe_original_llamada;
    /**
     * Importe de establecimiento.
     *
     * @var float
     */
    public $importe_establecimiento;
    /**
     * Importe de la llamada.
     *
     * @var float
     */
    public $importe_llamada;
    /**
     * Indica que la llamada no se cobra porque pertenece a un bono.
     *
     * @var bool
     */
    public $bonificada;
    /**
     * Identificador de la factura en la que hemos facturado la llamada.
     *
     * @var int
     */
    public $id_factura;
    /**
     * Identificador de la línea de la factura en la que hemos facturado la llamada.
     *
     * @var int
     */
    public $id_linea_factura;
    /**
     * Identificador del contrato al que pertenece la llamada.
     *
     * @var int
     */
    public $id_contrato;
    /** @var string */
    public $proveedor;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'cliente', 'id_linea', 'fecha', 'telefono_origen', 'provincia_origen', 'distrito_origen', 'franja_horaria', 'segundos', 'telefono_destino', 'provincia_destino', 'distrito_destino', 'pais_destino', 'cuenta_ptv', 'tipo_llamada', 'tipo_llamada_original', 'zona_tarificacion', 'tipo_red', 'importe_original_establecimiento', 'importe_original_consumo', 'importe_original_descuento', 'importe_original_llamada', 'importe_establecimiento', 'importe_llamada', 'bonificada', 'id_factura', 'id_linea_factura', 'id_contrato', 'proveedor'];
        $this->fieldTypes = ['int', 'int', 'int', 'time', 'string', 'int', 'int', 'string', 'int', 'string', 'int', 'int', 'string', 'string', 'int', 'string', 'string', 'string', 'float', 'float', 'float', 'float', 'float', 'float', 'bool', 'int', 'int', 'int', 'string'];
        $this->fieldLengths = [0, 0, 0, 0, 15, 0, 0, 20, 0, 15, 0, 0, 30, 70, 0, 70, 70, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1];
        $this->defaultValues = [0, 0, 0, null, '', 0, 0, '', 0, '', 0, 0, '', '', 0, '', '', '', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, false, 0, 0, 0, 'P'];
        $this->numFields = 29;
        $this->tableName = 'clientes_llamadas';
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
    public static function facturaTieneLlamadas(int $idFactura): bool
    {
        if ($idFactura === 0) {
            return false;
        }

        return (bool) Sql::selectEscalar("SELECT exists(SELECT id FROM clientes_llamadas WHERE id_factura = $idFactura)");
    }

    public static function listaContratosFactura(int $idFactura): array
    {
        $sql = "SELECT id, telefono, concepto
            FROM contratos
            WHERE id IN (SELECT distinct(id_contrato) FROM ventas_lineas WHERE idcab = $idFactura AND id_contrato != 0)
                AND exists(SELECT id FROM clientes_llamadas WHERE id_contrato = contratos.id)
            ORDER BY telefono, concepto";

        return Sql::selectAll($sql);
    }

    public static function datosContrato(int $idContrato): object
    {
        return Sql::selectObject("SELECT telefono, concepto FROM contratos WHERE id = $idContrato");
    }

    public static function listaLLamadas(int $idFactura, int $idContrato, bool $facturables): array
    {
        //cl.franja_horaria AS franja,
        $filtroFac = $facturables ? ' AND clt.facturable AND importe_establecimiento+importe_llamada != 0' : '';
        $sql = "SELECT
            to_char(date(cl.fecha), 'DD-MM-YY') as fecha,
            to_char(cl.fecha, 'HH24:MI') AS hora,
            cl.telefono_origen AS origen,
            cl.telefono_destino AS destino,
            case when cl.segundos > 3600 then
                to_char(cl.segundos * interval '1 sec', 'HH:MI:SS')
            else
                to_char(cl.segundos * interval '1 sec', 'MI:SS')
            end AS duracion,
            cl.tipo_llamada_original AS tipo,
            cl.importe_establecimiento AS establecimiento,
            cl.importe_llamada AS importe
            FROM clientes_llamadas cl
            LEFT JOIN clientes_llamadas_tipos clt ON cl.tipo_llamada = clt.codigo
            WHERE cl.id_factura = $idFactura AND cl.id_contrato = $idContrato $filtroFac
            ORDER BY cl.fecha, cl.id";

        return Sql::selectAll($sql);
    }
}
