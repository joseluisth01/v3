<?php

namespace App\Entity;

class WebCobros extends \App\Library\SqlOrm
{
    /** @var int */
    public $id;
    /** @var int */
    public $usuario;
    /**
     * (U)suario, (C)liente
     *
     * @var string
     */
    public $usuario_tipo;
    /** @var int */
    public $idcab;
    /** @var bool */
    public $cobrado;
    /** @var \DateTime */
    public $fecha;
    /** @var \DateTime|null */
    public $hora_solicitud;
    /** @var \DateTime|null */
    public $hora_respuesta;
    /** @var int */
    public $idvencimiento;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'usuario', 'usuario_tipo', 'idcab', 'cobrado', 'fecha', 'hora_solicitud', 'hora_respuesta', 'idvencimiento'];
        $this->fieldTypes = ['int', 'int', 'string', 'int', 'bool', '\DateTime', 'time', 'time', 'int'];
        $this->fieldLengths = [0, 0, 1, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 'U', 0, false, 'now', null, null, 0];
        $this->numFields = 9;
        $this->tableName = 'web_cobros';
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
}
