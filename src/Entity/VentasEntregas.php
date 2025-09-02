<?php

namespace App\Entity;

use App\Library\Sql;

class VentasEntregas extends \App\Library\SqlOrm
{
    /** @var int */
    public $id;
    /** @var int */
    public $idcab;
    /** @var int */
    public $idregistro;
    /** @var int */
    public $cliente;
    /** @var \DateTime */
    public $fecha;
    /** @var float */
    public $importe;
    /** @var int */
    public $usuario;
    /** @var \DateTime */
    public $hora;
    /** @var int */
    public $idvencimiento;
    /** @var int */
    public $cajabanco;
    /** @var int */
    public $codigo_cb;
    /**
     * Identificador del documento que hemos utilizado como vale descuento en el cobro.
     *
     * @var int
     */
    public $id_vale_dto_aplicado;
    /** @var \DateTime|null */
    public $fecha_conta;
    /** @var \DateTime|null */
    public $fecha_pre_conta;
    /** @var int */
    public $usuario_conta;
    /** @var int */
    public $usuario_pre_conta;
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
    public $id_conta;
    /** @var int */
    public $idpedido;
    /** @var string */
    public $documento;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'idcab', 'idregistro', 'cliente', 'fecha', 'importe', 'usuario', 'hora', 'idvencimiento', 'cajabanco', 'codigo_cb', 'id_vale_dto_aplicado', 'fecha_conta', 'fecha_pre_conta', 'usuario_conta', 'usuario_pre_conta', 'terminal', 'turno', 'reg_banco_negativo', 'id_conta', 'idpedido', 'documento'];
        $this->fieldTypes = ['int', 'int', 'int', 'int', '\DateTime', 'float', 'int', 'time', 'int', 'int', 'int', 'int', '\DateTime', '\DateTime', 'int', 'int', 'int', 'int', 'bool', 'int', 'int', 'string'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, 0, 'now', 0.0, 0, 'now', 0, 0, 0, 0, null, null, 0, 0, 0, 0, false, 0, 0, ''];
        $this->numFields = 22;
        $this->tableName = 'ventas_entregas';
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
    public static function pedidoCobrado(int $idCab): bool
    {
        return (bool) Sql::selectEscalar("SELECT exists(SELECT id FROM ventas_entregas WHERE idcab = $idCab)");
    }
}
