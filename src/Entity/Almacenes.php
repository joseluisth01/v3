<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class Almacenes extends \App\Library\SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var int */
    public $situacion_serie;
    /** @var int */
    public $responsable;
    /** @var int */
    public $traspasos_tpv;
    /** @var int */
    public $calculo_pmp;
    /** @var int */
    public $control_stock;
    /** @var bool */
    public $estransito;
    /** @var bool */
    public $excluye_calculo_stock;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'situacion_serie', 'responsable', 'traspasos_tpv', 'calculo_pmp', 'control_stock', 'estransito', 'excluye_calculo_stock'];
        $this->fieldTypes = ['int', 'string', 'int', 'int', 'int', 'int', 'int', 'bool', 'bool'];
        $this->fieldLengths = [0, 40, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, '', 0, 0, 1, 1, 1, false, false];
        $this->numFields = 9;
        $this->tableName = 'almacenes';
        $this->pkFields = ['codigo'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = true;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM almacenes WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);
        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function lista(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM almacenes ORDER BY nombre');
    }
}
