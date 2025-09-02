<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class ArticulosImagenes extends \App\Library\SqlOrm
{
    /** @var string */
    public $referencia;
    /** @var int */
    public $orden;
    /** @var int */
    public $imagen;
    /** @var string */
    public $descripcion;
    /** @var int */
    public $imagentmb;
    /** @var bool */
    public $cacheweb;
    /** @var string */
    public $valor_md5;
    /** @var string */
    public $color_imagen;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['referencia', 'orden', 'imagen', 'descripcion', 'imagentmb', 'cacheweb', 'valor_md5', 'color_imagen'];
        $this->fieldTypes = ['string', 'int', 'int', 'string', 'int', 'bool', 'string', 'string'];
        $this->fieldLengths = [30, 0, 0, 50, 0, 0, 32, 10];
        $this->defaultValues = ['', 0, 0, '', 0, false, '', ''];
        $this->numFields = 8;
        $this->tableName = 'articulos_imagenes';
        $this->pkFields = ['referencia', 'orden'];
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
        $sql = 'SELECT exists(SELECT 1 FROM articulos_imagenes WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('referencia', $this->referencia, 'string', 30);
        $param[] = new SqlParam('orden', $this->orden, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function getImage(string $referencia, int $resolucion, int $orden): string
    {
        $reg = new self();
        if ($reg->selectPK($referencia, $orden)) {
            $ruta = ImagesHelper::rutaImagenArt($reg, $resolucion);
            if (!$reg->cacheweb) {
                ImagesHelper::grabaImagenesArt($reg);
                $reg->cacheweb = true;
                $reg->update();
            } elseif (!file_exists($ruta)) {
                ImagesHelper::grabaImagenesArt($reg);
            }
        } else {
            $ruta = "images/default/no-image-$resolucion.webp";
        }

        return $ruta;
    }

    public static function lista(string $referencia): array
    {
        $lista = [];
        $param[] = new SqlParam('referencia', $referencia, 'string');
        $sql = "SELECT
                    '' AS codbarras,
                    img.orden,
                    '' AS talla,
                    '' AS color,
                    coalesce(nullif(img.descripcion, ''), art.nombre) AS imagen_txt
                FROM articulos_imagenes img
                LEFT JOIN articulos art ON art.referencia = img.referencia
                WHERE img.referencia = :referencia
            UNION ALL
                SELECT
                    min(cb.codbarras) AS codbarras,
                    99 AS orden,
                    '' AS talla,
                    cb.color,
                    min(coalesce(nullif(cb.descripcion, ''), art.nombre)) AS imagen_txt
                FROM articulos_codbarras cb
                LEFT JOIN articulos art ON art.referencia = cb.referencia
                WHERE cb.referencia = :referencia AND cb.color != '' AND cb.imagen != 0
                GROUP BY cb.color
            ORDER BY orden";

        foreach (Sql::selectAll($sql, $param) as $row) {
            $orden = (int) $row['orden'];
            if ($orden < 99) {
                $lista[] = [
                    'large' => self::getImage($referencia, 1000, $orden),
                    'small' => self::getImage($referencia, 120, $orden),
                    'talla' => '',
                    'color' => '',
                    'codbarras' => '',
                    'imagen_txt' => $row['imagen_txt'],
                ];
            } else {
                $codBarras = $row['codbarras'];
                $lista[] = [
                    'large' => ArticulosCodbarras::getImage($codBarras, 1000),
                    'small' => ArticulosCodbarras::getImage($codBarras, 120),
                    'talla' => $row['talla'],
                    'color' => $row['color'],
                    'codbarras' => $codBarras,
                    'imagen_txt' => $row['imagen_txt'],
                ];
            }
        }

        return $lista;
    }
}
