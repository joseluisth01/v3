<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class ArticulosPrecios extends \App\Library\SqlOrm
{
    /** @var string */
    public $referencia;
    /** @var int */
    public $tarifa;
    /** @var float */
    public $precio;
    /** @var float */
    public $precio_iva;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['referencia', 'tarifa', 'precio', 'precio_iva'];
        $this->fieldTypes = ['string', 'int', 'float', 'float'];
        $this->fieldLengths = [30, 0, 0, 0];
        $this->defaultValues = ['', 0, 0.0, 0.0];
        $this->numFields = 4;
        $this->tableName = 'articulos_precios';
        $this->pkFields = ['referencia', 'tarifa'];
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
        $sql = 'SELECT exists(SELECT 1 FROM articulos_precios WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('referencia', $this->referencia, 'string', 30);
        $param[] = new SqlParam('tarifa', $this->tarifa, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function listaPrecios(string $referencia, int $cliente, int $tarifa, int $tarifaEspDto): array
    {
        $sql = "SELECT
                tar.codigo,
                tar.nombre,
                coalesce(pre.precio, 0) AS precio,
                coalesce(pre.precio_iva, 0) AS precio_iva,
                0 AS dto_cli,
                '' AS precio_txt
            FROM tarifas_nombres tar
            LEFT JOIN articulos_precios pre ON pre.tarifa = tar.codigo AND pre.referencia = :referencia
            ORDER BY tar.codigo";

        $param[] = new SqlParam('referencia', $referencia, 'string', 30);

        $precioCliente = 0;
        $dtoCliente = 0;
        if (!empty($cliente)) {
            $info = self::precioCliente($referencia, $cliente);
            $precioCliente = (float) $info['precio'];
            $dtoCliente = (float) $info['descuento'];
        } else if ($tarifaEspDto != 0) {
            $info = self::precioArticulo($referencia, $tarifa, $tarifaEspDto);
            $precioCliente = (float) $info['precio'];
            $dtoCliente = (float) $info['descuento'];
        }

        $data = Sql::selectAll($sql, $param);
        foreach ($data as &$row) {
            $row['codigo'] = (int) $row['codigo'];
            if ($precioCliente != 0 && $row['codigo'] == $tarifa) {
                $iva = self::ivaArticulo($referencia);
                $row['precio'] = $precioCliente;
                $row['precio_iva'] = round($precioCliente * (1 + $iva / 100), 2);
            } else {
                $row['precio'] = (float) $row['precio'];
                $row['precio_iva'] = (float) $row['precio_iva'];
            }

            if ($dtoCliente != 0 && $row['codigo'] == $tarifa) {
                $row['dto_cli'] = $dtoCliente;
            }

            $row['precio_txt'] = Tools::floatFormat($row['precio_iva']).' €';
        }

        return $data;
    }

    private static function ivaArticulo(string $referencia): float
    {
        $sql = 'SELECT iva.iva
            FROM articulos art
            LEFT JOIN tipos_iva iva ON iva.codigo = art.tipoiva
            WHERE art.referencia = :referencia';
        $param = [new SqlParam('referencia', $referencia, 'string')];

        return (float) Sql::selectEscalar($sql, $param);
    }

    public static function precio(string $referencia, string $talla, string $color, int $cliente, int $tarifa, int $tarifaEspDto): array
    {
        $descuento = 0.0;
        $precio = self::precioTC($referencia, $talla, $color);
        if (empty($precio)) {
            if (!empty($cliente)) {
                $info = self::precioCliente($referencia, $cliente);
                $precio = (float) $info['precio'];
                $descuento = (float) $info['descuento'];
            } else {
                $info = self::precioArticulo($referencia, $tarifa, $tarifaEspDto);
                $precio = (float) $info['precio'];
                $descuento = (float) $info['descuento'];
            }
        }


        if (empty($precio)) {
            $sql = 'SELECT
                pre.precio,
                coalesce(nullif(sub.dto_web, 0), fam.dto_web) AS descuento
            FROM articulos_precios pre
            LEFT JOIN articulos art ON art.referencia = pre.referencia
            LEFT JOIN familias fam ON fam.codigo = art.familia
            LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
            WHERE pre.referencia = :referencia AND pre.tarifa = :tarifa';
            $param = [new SqlParam('referencia', $referencia, 'string'), new SqlParam('tarifa', $tarifa, 'int')];
            $row = Sql::select($sql, $param);
            $precio = (float) $row['precio'];
            $descuento = (float) $row['descuento'];
        }

        return [$precio, $descuento];
    }

    public static function precioArticulo(string $referencia, int $tarifa, int $tarifaDtoEsp): array
    {
        $param = [
            new SqlParam('referencia', $referencia, 'string'),
            new SqlParam('tarifa', $tarifa, 'int'),
            new SqlParam('tarifa_dto_esp', $tarifaDtoEsp, 'int'),
        ];

        return Sql::select('SELECT * FROM precio_web(:referencia, :tarifa, :tarifa_dto_esp)', $param);
    }


    public static function precioCliente(string $referencia, int $cliente): array
    {
        $param = [new SqlParam('referencia', $referencia, 'string'), new SqlParam('cliente', $cliente, 'int')];

        return Sql::select('SELECT * FROM precio_articulo(:referencia, :cliente)', $param);
    }


    public static function precioTC(string $referencia, string $talla, string $color): float
    {
        if (empty($referencia) || empty($talla) || empty($color)) {
            return 0.0;
        }
        $param = [
            new SqlParam('referencia', $referencia, 'string'),
            new SqlParam('talla', $talla, 'string'),
            new SqlParam('color', $color, 'string'),
        ];

        $sql = 'SELECT
            cb.precio * (1 - coalesce(nullif(sub.dto_web, 0), fam.dto_web) / 100.0) AS precio
        FROM articulos_codbarras cb
        LEFT JOIN articulos art ON art.referencia = cb.referencia
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        WHERE cb.referencia = :referencia AND cb.talla = :talla AND cb.color = :color';

        return (float) Sql::selectEscalar($sql, $param);
    }
}
