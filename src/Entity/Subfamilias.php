<?php

namespace App\Entity;

use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class Subfamilias extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var int */
    public $familia;
    /** @var int */
    public $tarifa;
    /** @var int */
    public $mostrarweb;
    /** @var int */
    public $mostrartpv;
    /** @var string */
    public $posicionweb;
    /** @var int */
    public $posiciontpv;
    /** @var string */
    public $cta_contable_ventas;
    /** @var string */
    public $cta_contable_compras;
    /** @var string */
    public $cta_contable_gastos;
    /** @var string */
    public $cta_contable_inversion;
    /** @var int */
    public $canon_digital;
    /** @var int */
    public $tipo_comision;
    /** @var int */
    public $mostrarweb2;
    /** @var int */
    public $caracteristica;
    /** @var float */
    public $dto_web;
    /** @var string */
    public $web_url;
    /** @var string */
    public $web_title;
    /** @var string */
    public $web_meta_description;
    /** @var int */
    public $sd_codigo;
    /** @var string */
    public $web_description;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'familia', 'tarifa', 'mostrarweb', 'mostrartpv', 'posicionweb', 'posiciontpv', 'cta_contable_ventas', 'cta_contable_compras', 'cta_contable_gastos', 'cta_contable_inversion', 'canon_digital', 'tipo_comision', 'mostrarweb2', 'caracteristica', 'dto_web', 'web_url', 'web_title', 'web_meta_description', 'sd_codigo', 'web_description'];
        $this->fieldTypes = ['int', 'string', 'int', 'int', 'int', 'int', 'string', 'int', 'string', 'string', 'string', 'string', 'int', 'int', 'int', 'int', 'float', 'string', 'string', 'string', 'int', 'string'];
        $this->fieldLengths = [0, 60, 0, 0, 0, 0, 10, 0, 12, 12, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, '', 0, 0, 0, 0, '', 0, '', '', '', '', 0, 0, 0, 0, 0, '', '', '', 0, ''];
        $this->numFields = 22;
        $this->tableName = 'subfamilias';
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
        $sql = 'SELECT exists(SELECT 1 FROM subfamilias WHERE ' . $this->sqlPKCondition() . ')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);
        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function findByUrl(string $webUrl): bool
    {
        return $this->select('web_url = :weburl', [new SqlParam('weburl', $webUrl, 'string')]);
    }
}
