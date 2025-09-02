<?php

namespace App\Entity;

use App\Helper\WebTextosHelper;
use App\Library\Sql;
use App\Library\SqlOrm;

class WebTextos extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var string */
    public $texto;
    /** @var bool */
    public $mostrar;
    /** @var string */
    public $web_url;
    /** @var bool */
    public $politica_privacidad;
    /** @var bool */
    public $politica_cookies;
    /** @var bool */
    public $condiciones_compra;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'texto', 'mostrar', 'web_url', 'politica_privacidad', 'politica_cookies', 'condiciones_compra'];
        $this->fieldTypes = ['int', 'string', 'string', 'bool', 'string', 'bool', 'bool', 'bool'];
        $this->fieldLengths = [0, 100, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, '', '', false, '', false, false, false];
        $this->numFields = 8;
        $this->tableName = 'web_textos';
        $this->pkFields = ['codigo'];
        $this->numPkFields = 1;
        $this->autoIncrementField = 'codigo';
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        return $this->codigo == 0;
    }

    // -- END generated code --

    public function findByUrl(string $url): bool
    {
        return $this->select("web_url = '" . Sql::parseText($url) . "'");
    }

    public function findPrivacidad(): bool
    {
        $ok = $this->select('politica_privacidad = true AND mostrar = true LIMIT 1');
        if (!$ok) {
            $ok = $this->select('politica_privacidad = true LIMIT 1');
        }
        return $ok;
    }

    public function findCookies(): bool
    {
        $ok = $this->select('politica_cookies = true AND mostrar = true LIMIT 1');
        if (!$ok) {
            $ok = $this->select('politica_cookies = true LIMIT 1');
        }
        return $ok;
    }

    public function findCondicionesCompra(): bool
    {
        $ok = $this->select('condiciones_compra = true AND mostrar = true LIMIT 1');
        if (!$ok) {
            $ok = $this->select('condiciones_compra = true LIMIT 1');
        }
        return $ok;
    }


    public static function listaNombres(): array
    {
        return Sql::selectAll('SELECT codigo, nombre, web_url FROM web_textos WHERE mostrar = true');
    }

    public static function listAll(): array
    {
        return Sql::selectAll('SELECT * FROM web_textos ORDER BY nombre');
    }

    public static function createTextosDefault()
    {
        Sql::executeMultiple(WebTextosHelper::textosDefault());
    }
}
