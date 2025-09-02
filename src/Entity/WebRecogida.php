<?php

namespace App\Entity;

use App\Library\SqlOrm;

class WebRecogida extends SqlOrm
{
    /** @var int */
    public $id;
    /** @var \DateTime */
    public $fecha;
    /** @var string */
    public $nombre;
    /** @var string */
    public $telefono;
    /** @var string */
    public $direccion;
    /** @var string */
    public $localidad;
    /** @var string */
    public $cpostal;
    /** @var string */
    public $email;
    /** @var string */
    public $dispositivo;
    /** @var string */
    public $numserie;
    /** @var string */
    public $desbloqueo;
    /** @var string */
    public $averia;
    /** @var \DateTime */
    public $created_at;
    /** @var \DateTime */
    public $modified_at;
    /** @var int */
    public $modified_by;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'fecha', 'nombre', 'telefono', 'direccion', 'localidad', 'cpostal', 'email', 'dispositivo', 'numserie', 'desbloqueo', 'averia', 'created_at', 'modified_at', 'modified_by'];
        $this->fieldTypes = ['int', '\DateTime', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'time', 'time', 'int'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 'CURRENT_DATE', '', '', '', '', '', '', '', '', '', '', 'now', 'now', 0];
        $this->numFields = 15;
        $this->tableName = 'web_recogida';
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
