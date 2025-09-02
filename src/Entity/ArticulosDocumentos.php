<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;

class ArticulosDocumentos extends \App\Library\SqlOrm
{
    /** @var int */
    public $id;
    /** @var string */
    public $referencia;
    /** @var int */
    public $orden;
    /** @var string */
    public $descripcion;
    /** @var string */
    public $documento;
    /** @var int */
    public $objeto;
    /** @var string */
    public $valor_md5;
    /** @var bool */
    public $actual;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'referencia', 'orden', 'descripcion', 'documento', 'objeto', 'valor_md5', 'actual'];
        $this->fieldTypes = ['int', 'string', 'int', 'string', 'string', 'int', 'string', 'bool'];
        $this->fieldLengths = [0, 30, 0, 128, 128, 0, 32, 0];
        $this->defaultValues = [0, '', 0, '', '', 0, '', false];
        $this->numFields = 8;
        $this->tableName = 'articulos_documentos';
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
    public static function getFileByUrl(string $weburl): array
    {
        $sql = 'SELECT documento, objeto
            FROM articulos_documentos
            WHERE actual AND referencia = (SELECT referencia FROM articulos WHERE web_url = :web_url LIMIT 1)';
        $param[] = new SqlParam('web_url', $weburl, 'string');

        return Sql::select($sql, $param);
    }
}
