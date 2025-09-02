<?php

namespace App\Entity;

use App\Library\SqlOrm;

class WebRecogidaImagenes extends SqlOrm
{
    /** @var int */
    public $id;
    /** @var int */
    public $id_cab;
    /** @var int */
    public $imagen;
    /** @var string */
    public $nombre;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'id_cab', 'imagen', 'nombre'];
        $this->fieldTypes = ['int', 'int', 'int', 'string'];
        $this->fieldLengths = [0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, ''];
        $this->numFields = 4;
        $this->tableName = 'web_recogida_imagenes';
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
