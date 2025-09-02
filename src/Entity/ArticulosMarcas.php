<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class ArticulosMarcas extends \App\Library\SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var int */
    public $tarifa;
    /** @var int */
    public $mostrarweb;
    /** @var string */
    public $codigo_concesionario;
    /** @var int */
    public $tipo_comision;
    /** @var int */
    public $mostrarweb2;
    /** @var string */
    public $web_url;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'tarifa', 'mostrarweb', 'codigo_concesionario', 'tipo_comision', 'mostrarweb2', 'web_url'];
        $this->fieldTypes = ['int', 'string', 'int', 'int', 'string', 'int', 'int', 'string'];
        $this->fieldLengths = [0, 60, 0, 0, 40, 0, 0, 0];
        $this->defaultValues = [0, '', 0, 0, '', 0, 0, ''];
        $this->numFields = 8;
        $this->tableName = 'articulos_marcas';
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
        $sql = 'SELECT exists(SELECT 1 FROM articulos_marcas WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function findByUrl(string $webUrl): bool
    {
        return $this->select('web_url = :weburl', [new SqlParam('weburl', $webUrl, 'string')]);
    }

    public static function listaMarcasFiltro(string $filtroSqlCount, bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        if (!empty($filtroSqlCount) && strpos(strtoupper(trim($filtroSqlCount)), 'AND') !== 0) {
            $filtroSqlCount = ' AND '.$filtroSqlCount;
        }

        $sql = "WITH mar AS (
            SELECT
                mar.codigo,
                mar.nombre,
                mar.web_url,
                count(*) AS num_art,
                coalesce(img.imagen, 0) AS imagen,
                img.cacheweb
            FROM articulos art
            LEFT JOIN articulos_marcas mar ON mar.codigo = art.marca
            LEFT JOIN marcas_imagenes img ON img.codigo = mar.codigo
            WHERE $filtroArtMostrarWeb AND art.obsoleto = 0 AND art.marca > 0 AND mar.codigo IS NOT NULL $filtroSqlCount
            GROUP BY mar.codigo, mar.nombre, mar.web_url, img.imagen, img.cacheweb
        )
        SELECT
            mar.codigo,
            mar.nombre,
            mar.web_url,
            '' AS url,
            '' as checked,
            mar.num_art,
            mar.imagen,
            '' AS url_imagen,
            mar.cacheweb
        FROM mar
        ORDER BY mar.nombre";

        $datos = Sql::selectAll($sql);
        foreach ($datos as &$row) {
            $row['url_imagen'] = ImagesHelper::imagenMarcaSmall((int) $row['codigo'], $row['nombre'], (int) $row['imagen'], (bool) $row['cacheweb']);
        }

        return $datos;
    }

    public static function lista($mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';

        $sql = "SELECT
                mar.codigo,
                mar.nombre,
                mar.web_url AS url,
                '' AS url_imagen,
                coalesce(img.imagen, 0) AS imagen,
                img.cacheweb
            FROM articulos_marcas mar
            LEFT JOIN marcas_imagenes img ON img.codigo = mar.codigo
            WHERE mar.$campoMostrarWeb = 1
            ORDER BY mar.codigo";

        $datos = Sql::selectAll($sql);
        foreach ($datos as &$row) {
            $row['url_imagen'] = ImagesHelper::imagenMarca((int) $row['codigo'], $row['nombre'], (int) $row['imagen'], (bool) $row['cacheweb']);
        }

        return $datos;
    }

    public static function listaFamilias(int $marca, bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'mostrarweb2 = true' : 'mostrarweb = 1';

        $sql = "SELECT
            distinct f.codigo,
            f.nombre,
            f.web_url,
            i.imagen,
            i.cacheweb,
            coalesce(nullif(cast(substring(f.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS posicion
        FROM familias f
        LEFT JOIN familias_imagenes i ON i.codigo = f.codigo
        LEFT JOIN subfamilias s ON s.familia = f.codigo AND s.$campoMostrarWeb = 1
        WHERE f.codigo IN (SELECT distinct familia FROM articulos WHERE marca = $marca AND obsoleto = 0 AND $filtroArtMostrarWeb)
            AND f.$campoMostrarWeb = 1
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
