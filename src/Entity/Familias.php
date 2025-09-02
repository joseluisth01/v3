<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class Familias extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
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
    /** @var bool */
    public $dto_estacion_servicio;
    /** @var float */
    public $cer;
    /** @var bool */
    public $descarga_ws;
    /** @var bool */
    public $aplicapuntos;
    /** @var float */
    public $eurosgastados;
    /** @var float */
    public $puntos;
    /** @var int */
    public $caracteristica;
    /** @var int */
    public $categoria;
    /** @var float */
    public $dto_web;
    /** @var string */
    public $web_url;
    /** @var bool */
    public $tipo2;
    /** @var bool */
    public $canon_solo_compras;
    /** @var string */
    public $web_title;
    /** @var string */
    public $web_meta_description;
    /** @var int */
    public $sd_codigo;
    /** @var float */
    public $limite_dto;
    /** @var string */
    public $web_description;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'tarifa', 'mostrarweb', 'mostrartpv', 'posicionweb', 'posiciontpv', 'cta_contable_ventas', 'cta_contable_compras', 'cta_contable_gastos', 'cta_contable_inversion', 'canon_digital', 'tipo_comision', 'mostrarweb2', 'dto_estacion_servicio', 'cer', 'descarga_ws', 'aplicapuntos', 'eurosgastados', 'puntos', 'caracteristica', 'categoria', 'dto_web', 'web_url', 'tipo2', 'canon_solo_compras', 'web_title', 'web_meta_description', 'sd_codigo', 'limite_dto', 'web_description'];
        $this->fieldTypes = ['int', 'string', 'int', 'int', 'int', 'string', 'int', 'string', 'string', 'string', 'string', 'int', 'int', 'int', 'bool', 'float', 'bool', 'bool', 'float', 'float', 'int', 'int', 'float', 'string', 'bool', 'bool', 'string', 'string', 'int', 'float', 'string'];
        $this->fieldLengths = [0, 60, 0, 0, 0, 10, 0, 12, 12, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, '', 0, 0, 0, '', 0, '', '', '', '', 0, 0, 0, false, 0, false, false, 0, 0, 0, 0, 0, '', false, false, '', '', 0, 0, ''];
        $this->numFields = 31;
        $this->tableName = 'familias';
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
        $sql = 'SELECT exists(SELECT 1 FROM familias WHERE ' . $this->sqlPKCondition() . ')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);
        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function findByUrl(string $webUrl): bool
    {
        return $this->select('web_url = :weburl', [new SqlParam('weburl', $webUrl, 'string')]);
    }

    public static function listaSubfamilias(int $familia, bool $mostrarWeb2, string $filtroSql): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';

        if (!empty($filtroSql) && strpos(strtoupper(trim($filtroSql)), 'AND') !== 0) {
            $filtroSql = ' AND '.$filtroSql;
        }

        $sql = "SELECT
            distinct sub.codigo,
            sub.nombre,
            sub.web_url,
            img.imagen,
            img.cacheweb,
            coalesce(nullif(cast(substring(sub.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS posicion
        FROM subfamilias sub
        LEFT JOIN subfamilias_imagenes img ON img.codigo = sub.codigo
        LEFT JOIN articulos art ON art.subfamilia = sub.codigo
        WHERE sub.familia = $familia AND sub.$campoMostrarWeb = 1 $filtroSql
        ORDER BY posicion, sub.nombre";

        $datos = [];
        foreach (Sql::selectAll($sql) as $row) {
            $datos[] = [
                'nombre' => $row['nombre'],
                'url' => $row['web_url'],
                'url_imagen' => ImagesHelper::imagenSubfamilia((int) $row['codigo'], $row['nombre'], (int) $row['imagen'], (bool) $row['cacheweb']),
            ];
        }

        return $datos;
    }
}
