<?php

namespace App\Entity;

use App\Library\Sql;

class Vencimientos extends \App\Library\SqlOrm
{
    /**
     * identificador del registro.
     *
     * @var int
     */
    public $id;
    /**
     * tipo de documento que crea el vencimiento 0 -> ventas 1 -> compras.
     *
     * @var int
     */
    public $tipo;
    /**
     * identificador de la cabecera que genera el documento.
     *
     * @var int
     */
    public $idcab;
    /**
     * fecha prevista de cobro/ pago del vencimiento.
     *
     * @var \DateTime|null
     */
    public $fecha;
    /**
     * fecha en la que cobramos, o enviamos al banco el vencimiento.
     *
     * @var \DateTime|null
     */
    public $fechacobro;
    /**
     * fecha vencimiento + x días de demora configurables en parámetros generales. una vez cobrado el vencimiento, la fecha de riesgo indica el último día en el que el cliente puede devolver el pago.
     *
     * @var \DateTime|null
     */
    public $fechariesgo;
    /**
     * fecha en la que el cliente devuelve el pago.
     *
     * @var \DateTime|null
     */
    public $fechaimpago;
    /**
     * importe que vamos a cobrar / pagar.
     *
     * @var float
     */
    public $importe;
    /**
     * situación en la que se encuentra el vencimiento 0 -> pendiente 1 -> cobrado 2 -> impagado 3 -> aplicado a otro documento.
     *
     * @var int
     */
    public $situacion;
    /**
     * número de asiento de pago/cobro en la caja o banco.
     *
     * @var int
     */
    public $idregistro;
    /**
     * número de vencimiento dentro del grupo de vencimientos de una factura.
     *
     * @var int
     */
    public $numero;
    /**
     * indica si lo cobramos por caja (0) o banco (1).
     *
     * @var int
     */
    public $cajabanco;
    /**
     * código de la caja o el banco por el que cobramos/pagamos el vencimiento.
     *
     * @var int
     */
    public $codigo_cb;
    /**
     * gastos que ocasiona el impago del vencimiento.
     *
     * @var float
     */
    public $gastos;
    /**
     * código del cliente/proveedor.
     *
     * @var int
     */
    public $clipro;
    /**
     * indica si el proveedor es un acreedor (1) o un proveedor (0).
     *
     * @var int
     */
    public $es_acreedor;
    /**
     * identificador del vencimiento que sustituye al actual, ya que este está impagado.
     *
     * @var int
     */
    public $idvtoimpago;
    /**
     * usuario que crea el vencimiento.
     *
     * @var int
     */
    public $usuario;
    /**
     * fecha y hora en la que un usuario crea un vencimiento.
     *
     * @var \DateTime|null
     */
    public $hora;
    /**
     * usuario que modifica el vencimiento a mano.
     *
     * @var int
     */
    public $usumodi;
    /**
     * fecha y hora en la que un usuario modifica un vencimiento a mano.
     *
     * @var \DateTime|null
     */
    public $horamodi;
    /**
     * Identificador de la remesa en la que se ha introducido el vencimiento.
     *
     * @var int
     */
    public $remesa;
    /**
     * Tipo de cobro 0 -> Metálico 1 -> Cheque 2 -> Pagaré 3->Tarjeta 4->Transferencia 5->Remesa 6->Recibo.
     *
     * @var int
     */
    public $tipocobro;
    /** @var string */
    public $documento;
    /**
     * Identificador de la entrega a cuenta de clientes, en caso de que un vencimiento se cobre mediante una entrega a cuenta de un cliente.
     *
     * @var int
     */
    public $identrega;
    /**
     * Identificador de la entrega a cuenta sin documento del cliente.
     *
     * @var int
     */
    public $identrega_sindoc;
    /**
     * Indica si los datos del vencimiento (fecha e importe) los ha establecido el usuario a mano.
     *
     * @var int
     */
    public $vto_manual;
    /**
     * Fecha de entrega del documento.
     *
     * @var \DateTime|null
     */
    public $fecha_entrega_doc;
    /**
     * Fecha en la que se realiza la contabilización del cobro.
     *
     * @var \DateTime|null
     */
    public $fecha_conta_cobro;
    /**
     * Fecha en la que se realiza la pre-contabilización del cobro.
     *
     * @var \DateTime|null
     */
    public $fecha_pre_conta_cobro;
    /**
     * Fecha en la que se realiza la contabilización del documento.
     *
     * @var \DateTime|null
     */
    public $fecha_conta_documento;
    /**
     * Fecha en la que se realiza la pre-contabilización del documento.
     *
     * @var \DateTime|null
     */
    public $fecha_pre_conta_documento;
    /**
     * Usuario que realiza la contabilización del cobro.
     *
     * @var int
     */
    public $usuario_conta_cobro;
    /**
     * Usuario que realiza la pre-contabilización del cobro.
     *
     * @var int
     */
    public $usuario_pre_conta_cobro;
    /**
     * Usuario que realiza la contabilización del documento.
     *
     * @var int
     */
    public $usuario_conta_documento;
    /**
     * Usuario que realiza la pre-contabilización del documento.
     *
     * @var int
     */
    public $usuario_pre_conta_documento;
    /** @var \DateTime|null */
    public $fecha_vencimiento;
    /**
     * Número de terminal que realiza la venta (TPV).
     *
     * @var int
     */
    public $terminal;
    /**
     * Turno de caja al que corresponde el albarán o factura.
     *
     * @var int
     */
    public $turno;
    /**
     * Indica que en el registro de bancos su valor es negativo.
     *
     * @var bool
     */
    public $reg_banco_negativo;
    /** @var int */
    public $escheque;
    /** @var int */
    public $idpagounico;
    /** @var int */
    public $idcartera;
    /** @var int */
    public $id_conta_cobro;
    /** @var int */
    public $id_conta_documento;
    /** @var int */
    public $id_compensacion;
    /** @var bool */
    public $vto_compensado;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'tipo', 'idcab', 'fecha', 'fechacobro', 'fechariesgo', 'fechaimpago', 'importe', 'situacion', 'idregistro', 'numero', 'cajabanco', 'codigo_cb', 'gastos', 'clipro', 'es_acreedor', 'idvtoimpago', 'usuario', 'hora', 'usumodi', 'horamodi', 'remesa', 'tipocobro', 'documento', 'identrega', 'identrega_sindoc', 'vto_manual', 'fecha_entrega_doc', 'fecha_conta_cobro', 'fecha_pre_conta_cobro', 'fecha_conta_documento', 'fecha_pre_conta_documento', 'usuario_conta_cobro', 'usuario_pre_conta_cobro', 'usuario_conta_documento', 'usuario_pre_conta_documento', 'fecha_vencimiento', 'terminal', 'turno', 'reg_banco_negativo', 'escheque', 'idpagounico', 'idcartera', 'id_conta_cobro', 'id_conta_documento', 'id_compensacion', 'vto_compensado'];
        $this->fieldTypes = ['int', 'int', 'int', '\DateTime', '\DateTime', '\DateTime', '\DateTime', 'float', 'int', 'int', 'int', 'int', 'int', 'float', 'int', 'int', 'int', 'int', 'time', 'int', 'time', 'int', 'int', 'string', 'int', 'int', 'int', '\DateTime', '\DateTime', '\DateTime', '\DateTime', '\DateTime', 'int', 'int', 'int', 'int', '\DateTime', 'int', 'int', 'bool', 'int', 'int', 'int', 'int', 'int', 'int', 'bool'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, null, null, null, null, 0, 0, 0, 1, 0, 0, 0.0, 0, 0, 0, 0, null, 0, null, 0, 0, '', 0, 0, 0, null, null, null, null, null, 0, 0, 0, 0, null, 0, 0, false, 0, 0, 0, 0, 0, 0, false];
        $this->numFields = 47;
        $this->tableName = 'vencimientos';
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
    public static function vencimientosFactura(int $idCab)
    {
        $sql = "SELECT
            id,
            to_char(fecha, 'DD-MM-YYYY') AS fecha,
            to_char(fechacobro, 'DD-MM-YYYY') AS fechacobro,
            to_char(importe,'9G999G999D99') AS importe
        FROM vencimientos
        WHERE tipo = 0 AND idcab = $idCab
        ORDER BY fecha, id";

        return Sql::selectAll($sql);
    }
}
