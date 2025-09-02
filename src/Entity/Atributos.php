<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class Atributos extends \App\Library\SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var string */
    public $web_url;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'web_url'];
        $this->fieldTypes = ['int', 'string', 'string'];
        $this->fieldLengths = [0, 0, 0];
        $this->defaultValues = [0, '', ''];
        $this->numFields = 3;
        $this->tableName = 'atributos';
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
        $sql = 'SELECT exists(SELECT 1 FROM atributos WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function listaAtributosFiltro(string $filtroSql, string $filtroSqlCount, bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        if (!empty($filtroSql) && strpos(strtoupper(trim($filtroSql)), 'AND') !== 0) {
            $filtroSql = ' AND '.$filtroSql;
        }

        if (!empty($filtroSqlCount) && strpos(strtoupper(trim($filtroSqlCount)), 'AND') !== 0) {
            $filtroSqlCount = ' AND '.$filtroSqlCount;
        }

        $sql = "WITH art AS (
            SELECT art.referencia, art.familia, art.subfamilia
            FROM articulos art
            LEFT JOIN familias fam ON fam.codigo = art.familia
            LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
            WHERE fam.$campoMostrarWeb = 1 AND coalesce(sub.$campoMostrarWeb,1) = 1
                AND $filtroArtMostrarWeb AND art.obsoleto = 0
                $filtroSql
        ),
        cod AS (
            SELECT codigo FROM atributos_articulos WHERE referencia IN (SELECT referencia FROM art)
            UNION
            SELECT codigo FROM atributos_familias WHERE familia IN (SELECT familia FROM art)
            UNION
            SELECT codigo FROM atributos_subfamilias WHERE subfamilia IN (SELECT subfamilia FROM art)
        ),
        grp_attr AS (
            SELECT
                cod.codigo,
                (SELECT min(grupo) FROM atributos_grupos_attr WHERE codigo = cod.codigo) AS grupo
            FROM cod
        ),
        num_art AS (
            SELECT
                attr.codigo,
                count(attr.*) as num_art
            FROM articulos art
            LEFT JOIN atributos_articulos attr ON attr.activo AND attr.referencia = art.referencia
            WHERE true $filtroSqlCount
            GROUP BY attr.codigo
        )
        SELECT
            attr.codigo,
            attr.nombre,
            attr.web_url,
            num_art.num_art,
            grp.nombre AS grupo
        FROM cod
        LEFT JOIN num_art ON num_art.codigo = cod.codigo
        LEFT JOIN atributos attr ON attr.codigo = cod.codigo
        LEFT JOIN grp_attr ON grp_attr.codigo = cod.codigo
        LEFT JOIN atributos_grupos grp ON grp.codigo = grp_attr.grupo
        WHERE coalesce(num_art.num_art, 0) > 0
        ORDER BY grp.nombre, attr.nombre";

        return Sql::selectAll($sql);
    }
}
