<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class ArticulosCodbarras extends \App\Library\SqlOrm
{
    /** @var string */
    public $referencia;
    /** @var string */
    public $codbarras;
    /** @var float */
    public $unidades;
    /** @var float */
    public $gramos;
    /** @var string */
    public $talla;
    /** @var string */
    public $color;
    /** @var float */
    public $precio;
    /** @var bool */
    public $envase;
    /** @var string */
    public $descripcion;
    /** @var int */
    public $logistica;
    /** @var float */
    public $precio_iva;
    /** @var int */
    public $cliente;
    /** @var string */
    public $ean14;
    /** @var int */
    public $etiqueta;
    /** @var bool */
    public $ean14_independiente;
    /** @var int */
    public $imagen;
    /** @var bool */
    public $predeterminado;
    /** @var bool */
    public $cacheweb;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['referencia', 'codbarras', 'unidades', 'gramos', 'talla', 'color', 'precio', 'envase', 'descripcion', 'logistica', 'precio_iva', 'cliente', 'ean14', 'etiqueta', 'ean14_independiente', 'imagen', 'predeterminado', 'cacheweb'];
        $this->fieldTypes = ['string', 'string', 'float', 'float', 'string', 'string', 'float', 'bool', 'string', 'int', 'float', 'int', 'string', 'int', 'bool', 'int', 'bool', 'bool'];
        $this->fieldLengths = [30, 50, 0, 0, 4, 4, 0, 0, 20, 0, 0, 0, 14, 0, 0, 0, 0, 0];
        $this->defaultValues = ['', '', 1.0, 0.0, '', '', 0.0, false, '', 0, 0.0, 0, '', 0, false, 0, false, false];
        $this->numFields = 18;
        $this->tableName = 'articulos_codbarras';
        $this->pkFields = ['codbarras'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM articulos_codbarras WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codbarras', $this->codbarras, 'string', 50);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function getImage($codBarras, int $resolucion): string
    {
        $reg = new self();
        if ($reg->selectPK($codBarras)) {
            if ($reg->imagen != 0) {
                $ruta = ImagesHelper::rutaImagenCB($reg, $resolucion);
                if (!$reg->cacheweb) {
                    ImagesHelper::grabaImagenesCB($reg);
                    $reg->cacheweb = true;
                    $reg->update();
                } elseif (!file_exists($ruta)) {
                    ImagesHelper::grabaImagenesCB($reg);
                }
            } else {
                $ruta = ArticulosImagenes::getImage($reg->referencia, $resolucion, 1);
            }
        } else {
            $ruta = "images/default/no-image-$resolucion.webp";
        }

        return $ruta;
    }

    public static function listaPreciosTC(string $referencia): array
    {
        $sql = "SELECT
                cb.codbarras,
                cb.talla,
                cb.color,
                cb.precio,
                cb.precio_iva * (1 - coalesce(nullif(sub.dto_web, 0), fam.dto_web) / 100.0) AS precio_iva,
                cb.precio_iva AS precio_iva_sin_dto,
                coalesce(nullif(sub.dto_web, 0), fam.dto_web, 0) AS dto_fam,
                '' AS precio_sin_dto_txt,
                '' AS precio_txt,
                '' AS imagen,
                art.nombre AS imagen_txt
            FROM articulos_codbarras cb
            LEFT JOIN articulos art ON art.referencia = cb.referencia
            LEFT JOIN familias fam ON fam.codigo = art.familia
            LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
            WHERE cb.referencia = :referencia AND cb.talla != '' AND cb.color != ''";

        $param[] = new SqlParam('referencia', $referencia, 'string');

        $data = Sql::selectAll($sql, $param);
        foreach ($data as &$row) {
            $row['precio'] = (float) $row['precio'];
            $row['precio_iva'] = (float) $row['precio_iva'];
            $row['precio_iva_sin_dto'] = (float) $row['precio_iva_sin_dto'];
            $row['dto_fam'] = (float) $row['dto_fam'];
            $row['precio_sin_dto_txt'] = Tools::floatFormat($row['precio_iva_sin_dto']).' €';
            $row['precio_txt'] = Tools::floatFormat($row['precio_iva']).' €';
            $row['imagen'] = self::getImage($row['codbarras'], 1000);
        }

        return $data;
    }
}
