<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class EmpresaImagenes extends \App\Library\SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var int */
    public $delegacion;
    /** @var string */
    public $nombre;
    /** @var string */
    public $md5;
    /** @var int */
    public $imagen;
    /** @var bool */
    public $cacheweb;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'delegacion', 'nombre', 'md5', 'imagen', 'cacheweb'];
        $this->fieldTypes = ['int', 'int', 'string', 'string', 'int', 'bool'];
        $this->fieldLengths = [0, 0, 80, 32, 0, 0];
        $this->defaultValues = [0, 0, '', '', 0, false];
        $this->numFields = 6;
        $this->tableName = 'empresa_imagenes';
        $this->pkFields = ['codigo', 'delegacion'];
        $this->numPkFields = 2;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM empresa_imagenes WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);
        $param[] = new SqlParam('delegacion', $this->delegacion, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function listaImagenes(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM empresa_imagenes ORDER BY nombre');
    }

    public static function getImage(int $codigo): string
    {
        $reg = new self();
        if ($reg->selectPK($codigo, 0)) {
            $ruta = "images/cache/$reg->nombre";
            if (!$reg->cacheweb) {
                Sql::blobRead($ruta, $reg->imagen);
                $reg->cacheweb = true;
                $reg->update();
            } elseif (!file_exists($ruta)) {
                Sql::blobRead($ruta, $reg->imagen);
            }
        } else {
            $ruta = 'images/default/default-logo.webp';
        }

        return $ruta;
    }
}