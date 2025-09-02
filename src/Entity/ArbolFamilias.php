<?php

namespace App\Entity;

use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\SqlParam;

class ArbolFamilias
{
    public static function familias(bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'mostrarweb2 = true' : 'mostrarweb = 1';

        $sql = "WITH fam AS (
         SELECT
           f.codigo AS fam_codigo,
           s.codigo AS sub_codigo,
           f.nombre AS fam_nombre,
           s.nombre AS sub_nombre,
           f.web_url AS fam_weburl,
           s.web_url AS sub_weburl,
           coalesce(nullif(cast(substring(f.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS fam_posicion,
           coalesce(nullif(cast(substring(s.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS sub_posicion
         FROM familias f
         LEFT JOIN subfamilias s ON s.familia = f.codigo AND s.$campoMostrarWeb = 1
         WHERE f.$campoMostrarWeb = 1
         AND exists(SELECT referencia FROM articulos WHERE familia = f.codigo AND subfamilia = s.codigo AND obsoleto = 0 AND $filtroArtMostrarWeb)
        ),
        art AS (
         SELECT familia, count(*) AS num_art
         FROM articulos
         WHERE familia IN (SELECT fam_codigo FROM fam) AND obsoleto = 0 AND $filtroArtMostrarWeb
         GROUP BY familia
        )
        SELECT fam.*, art.num_art
        FROM fam
        LEFT JOIN art ON art.familia = fam.fam_codigo
        ORDER BY fam.fam_posicion, fam.sub_posicion, fam.fam_nombre, fam.sub_nombre";

        $data = Sql::selectAll($sql);
        $arbol = [];
        $last = -1;
        foreach ($data as $row) {
            $fam = $row['fam_codigo'];
            if ($fam != $last) {
                $last = $fam;
                $arbol[$fam] = [
                    'nombre' => $row['fam_nombre'],
                    'url' => $row['fam_weburl'],
                    'sub' => [],
                    'num_art' => $row['num_art'],
                ];
            }
            $sub = $row['sub_codigo'];
            if (!empty($sub)) {
                if (!array_key_exists($sub, $arbol[$fam]['sub'])) {
                    $arbol[$fam]['sub'][$sub]['nombre'] = $row['sub_nombre'];
                    $arbol[$fam]['sub'][$sub]['url'] = $row['sub_weburl'];
                }
            }
        }

        return $arbol;
    }

    /**
     * Devuelve una tabla completa con la relacion de categorias, familias y subfamilias.
     */
    public static function arbolCompleto(bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $catMostrarWeb = $mostrarWeb2 ? 'mostrar_web2' : 'mostrar_web';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'mostrarweb2 = true' : 'mostrarweb = 1';

        $sql = "WITH cat AS (
         SELECT
           c.codigo AS cat_codigo,
           f.codigo AS fam_codigo,
           s.codigo AS sub_codigo,
           c.nombre AS cat_nombre,
           f.nombre AS fam_nombre,
           s.nombre AS sub_nombre,
           c.web_url AS cat_weburl,
           f.web_url AS fam_weburl,
           s.web_url AS sub_weburl,
           coalesce(ci.imagen, 0) AS cat_imagen,
           coalesce(fi.imagen, 0) AS fam_imagen,
           coalesce(si.imagen, 0) AS sub_imagen,
           ci.cacheweb AS cat_cacheweb,
           fi.cacheweb AS fam_cacheweb,
           si.cacheweb AS sub_cacheweb,
           '' AS cat_url_imagen,
           '' AS fam_url_imagen,
           '' AS sub_url_imagen,
           coalesce(nullif(c.posicionweb, 0), 999999) AS cat_posicion,
           coalesce(nullif(cast(substring(f.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS fam_posicion,
           coalesce(nullif(cast(substring(s.posicionweb, '([\d]{1,4})') AS integer), 0), 99999) AS sub_posicion
         FROM familias_categorias c
         LEFT JOIN familias_categorias_enlace e ON e.categoria = c.codigo
         LEFT JOIN familias f ON f.codigo = e.familia
         LEFT JOIN subfamilias s ON s.familia = f.codigo AND s.$campoMostrarWeb = 1
         LEFT JOIN familias_categorias_imagenes ci ON ci.codigo = c.codigo
         LEFT JOIN familias_imagenes fi ON fi.codigo = f.codigo
         LEFT JOIN subfamilias_imagenes si ON si.codigo = s.codigo
         WHERE c.$catMostrarWeb = true AND f.$campoMostrarWeb = 1 AND s.$campoMostrarWeb = 1
           AND exists(SELECT referencia FROM articulos WHERE familia = f.codigo AND subfamilia = s.codigo AND obsoleto = 0 AND $filtroArtMostrarWeb)
        ),
        art AS (
         SELECT familia, count(*) AS num_art
         FROM articulos
         WHERE familia IN (SELECT fam_codigo FROM cat) AND obsoleto = 0 AND $filtroArtMostrarWeb
         GROUP BY familia
        ),
        art2 AS (
         SELECT cat.cat_codigo, sum(art.num_art) AS num_art
         FROM (SELECT distinct cat_codigo, fam_codigo FROM cat) AS cat
         LEFT JOIN art ON art.familia = cat.fam_codigo
         GROUP BY cat.cat_codigo
        )
         SELECT cat.*, art2.num_art, art.num_art AS num_art_fam
         FROM cat
         LEFT JOIN art ON art.familia = cat.fam_codigo
         LEFT JOIN art2 ON art2.cat_codigo = cat.cat_codigo
         ORDER BY cat.cat_posicion, cat.cat_nombre, cat.fam_posicion, cat.sub_posicion, cat.fam_nombre,cat.sub_nombre";

        $data = Sql::selectAll($sql);
        $arbol = [];
        $last = -1;
        foreach ($data as $row) {
            $cat = $row['cat_codigo'];
            $fam = $row['fam_codigo'];
            if ($cat != $last) {
                $last = $cat;
                $arbol[$cat] = [
                    'nombre' => $row['cat_nombre'],
                    'url' => $row['cat_weburl'],
                    'url_imagen' => self::imagenCategoria($row),
                    'fam' => [],
                    'num_art' => $row['num_art'],
                ];
            }
            if (!array_key_exists($fam, $arbol[$cat]['fam'])) {
                $arbol[$cat]['fam'][$fam]['nombre'] = $row['fam_nombre'];
                $arbol[$cat]['fam'][$fam]['url'] = $row['fam_weburl'];
                $arbol[$cat]['fam'][$fam]['url_imagen'] = self::imagenFamilia($row);
                $arbol[$cat]['fam'][$fam]['num_art'] = $row['num_art_fam'];
                $arbol[$cat]['fam'][$fam]['sub'] = [];
            }
            $sub = $row['sub_codigo'];
            if (!empty($sub)) {
                $arbol[$cat]['fam'][$fam]['sub'][$sub]['nombre'] = $row['sub_nombre'];
                $arbol[$cat]['fam'][$fam]['sub'][$sub]['url'] = $row['sub_weburl'];
                $arbol[$cat]['fam'][$fam]['sub'][$sub]['url_imagen'] = self::imagenSubfamilia($row);
            }
        }

        return $arbol;
    }

    private static function imagenCategoria($row): string
    {
        $ruta = ImagesHelper::rutaImagenCategoria($row['cat_nombre']);
        $cacheWeb = (bool) $row['cat_cacheweb'];
        $fileExists = \file_exists($ruta);
        if (!empty($row['cat_imagen']) && (!$cacheWeb || !$fileExists)) {
            ImagesHelper::grabaImagenCategoria($row['cat_nombre'], (int) $row['cat_imagen']);
            Sql::execute('UPDATE familias_categorias_imagenes SET cacheweb = true WHERE codigo ='.(int) $row['cat_codigo']);
            $fileExists = true;
        }

        return $fileExists ? $ruta : '';
    }

    private static function imagenFamilia($row): string
    {
        return ImagesHelper::imagenFamilia((int) $row['fam_codigo'], $row['fam_nombre'], (int) $row['fam_imagen'], (bool) $row['fam_cacheweb']);
    }

    private static function imagenSubfamilia($row): string
    {
        return ImagesHelper::imagenSubfamilia((int) $row['sub_codigo'], $row['sub_nombre'], (int) $row['sub_imagen'], (bool) $row['sub_cacheweb']);
    }

    public static function arbolArticulo(string $webUrl)
    {
        $sql = 'SELECT
                f.nombre AS fam_nombre,
                s.nombre AS sub_nombre,
                a.nombre AS art_nombre,
                f.web_url AS fam_url,
                s.web_url AS sub_url,
                a.web_url AS art_url
            FROM articulos a
            LEFT JOIN familias f ON f.codigo = a.familia
            LEFT JOIN subfamilias s ON s.codigo = a.subfamilia
            WHERE a.web_url = :web_url';
        $param[] = new SqlParam('web_url', $webUrl, 'string');

        return Sql::select($sql, $param);
    }

    public static function arbolSubfamilia(string $webUrl)
    {
        $sql = 'SELECT
                f.nombre AS fam_nombre,
                s.nombre AS sub_nombre,
                f.web_url AS fam_url,
                s.web_url AS sub_url
            FROM subfamilias s
            LEFT JOIN familias f ON f.codigo = s.familia
            WHERE s.web_url = :web_url';
        $param[] = new SqlParam('web_url', $webUrl, 'string');

        return Sql::select($sql, $param);
    }

    public static function arbolFamilia(string $webUrl)
    {
        $sql = 'SELECT
                f.nombre AS fam_nombre,
                f.web_url AS fam_url
            FROM familias f
            WHERE f.web_url = :web_url';
        $param[] = new SqlParam('web_url', $webUrl, 'string');

        return Sql::select($sql, $param);
    }
}
