<?php

namespace App\Entity;

use App\Library\SqlOrm;
use App\Library\Tools;
use App\Library\Sql;
use App\Library\SqlParam;

class WebRecogidaTextos extends SqlOrm
{
    /** @var string */
    public $cabecera;
    /** @var string */
    public $pie;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['cabecera', 'pie'];
        $this->fieldTypes = ['string', 'string'];
        $this->fieldLengths = [0, 0];
        $this->defaultValues = ['', ''];
        $this->numFields = 2;
        $this->tableName = 'web_recogida_textos';
        $this->pkFields = [''];
        $this->numPkFields = 0;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM web_recogida_textos)';
        return !Tools::toBool($this->selectEscalar($sql));
    }

    // -- END generated code --
    public function read()
    {
        $this->select('true LIMIT 1');
    }

    public static function saveText(string $cabecera, string $pie)
    {
        $param = [
            new SqlParam('cabecera', $cabecera, 'string'),
            new SqlParam('pie', $pie, 'string')
        ];

        if (Tools::toBool(Sql::selectEscalar('SELECT exists(SELECT 1 FROM web_recogida_textos)'))) {
            $sql = 'UPDATE web_recogida_textos SET cabecera = :cabecera, pie = :pie';
        } else {
            $sql = 'INSERT INTO web_recogida_textos (cabecera, pie) VALUES (:cabecera, :pie)';
        }

        Sql::execute($sql, $param);
    }
}
