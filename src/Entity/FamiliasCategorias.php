<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class FamiliasCategorias extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var string */
    public $web_url;
    /** @var bool */
    public $mostrar_web;
    /** @var bool */
    public $mostrar_web2;
    /** @var int */
    public $posicionweb;
    /** @var string */
    public $web_title;
    /** @var string */
    public $web_meta_description;
    /** @var string */
    public $web_description;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'web_url', 'mostrar_web', 'mostrar_web2', 'posicionweb', 'web_title', 'web_meta_description', 'web_description'];
        $this->fieldTypes = ['int', 'string', 'string', 'bool', 'bool', 'int', 'string', 'string', 'string'];
        $this->fieldLengths = [0, 100, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, '', '', false, false, 0, '', '', ''];
        $this->numFields = 9;
        $this->tableName = 'familias_categorias';
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
        $sql = 'SELECT exists(SELECT 1 FROM familias_categorias WHERE ' . $this->sqlPKCondition() . ')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);
        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function findByUrl(string $webUrl): bool
    {
        return $this->select('web_url = :weburl', [new SqlParam('weburl', $webUrl, 'string')]);
    }

    public static function listaFamilias(int $categoria, bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';

        $sql = "SELECT
            distinct f.codigo,
            f.nombre,
            f.web_url,
            i.imagen,
            i.cacheweb,
            coalesce(nullif(cast(substring(f.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS posicion
        FROM familias_categorias_enlace e
        LEFT JOIN familias f ON f.codigo = e.familia
        LEFT JOIN familias_imagenes i ON i.codigo = f.codigo
        LEFT JOIN subfamilias s ON s.familia = f.codigo AND s.$campoMostrarWeb = 1
        WHERE e.categoria = $categoria AND f.$campoMostrarWeb = 1
        ORDER BY posicion, f.nombre";

        $datos = [];
        foreach (Sql::selectAll($sql) as $row) {
            $datos[] = [
                'nombre' => $row['nombre'],
                'url' => $row['web_url'],
                'url_imagen' => ImagesHelper::imagenFamilia((int) $row['codigo'], $row['nombre'], (int) $row['imagen'], (bool) $row['cacheweb']),
            ];
        }

        return $datos;
    }
}
