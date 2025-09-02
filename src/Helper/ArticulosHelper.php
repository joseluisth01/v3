<?php

namespace App\Helper;

use App\Entity\ArbolFamilias;

class ArticulosHelper
{
    public static function breadcrumbArticulo($webUrl): array
    {
        $row = ArbolFamilias::arbolArticulo($webUrl);
        $datos = [['nombre' => 'inicio', 'ruta' => 'home', 'param' => '']];
        if ($row) {
            self::addItem($datos, 'familia', $row['fam_nombre'], $row['fam_url']);
            self::addItem($datos, 'subfamilia', $row['sub_nombre'] ?? '', $row['sub_url'] ?? '');
            self::addItem($datos, 'articulo', $row['art_nombre'], $row['art_url'], true);
        }

        return $datos;
    }

    public static function breadcrumbSubfamilia($webUrl): array
    {
        $row = ArbolFamilias::arbolSubfamilia($webUrl);
        $datos = [['nombre' => 'inicio', 'ruta' => 'home', 'param' => '']];
        if ($row) {
            self::addItem($datos, 'familia', $row['fam_nombre'], $row['fam_url']);
            self::addItem($datos, 'subfamilia', $row['sub_nombre'], $row['sub_url'], true);
        }

        return $datos;
    }

    

    public static function breadcrumbFamilia($webUrl): array
    {
        $row = ArbolFamilias::arbolFamilia($webUrl);
        $datos = [['nombre' => 'inicio', 'ruta' => 'home', 'param' => '']];
        if ($row) {
            self::addItem($datos, 'familia', $row['fam_nombre'], $row['fam_url'], true);
        }

        return $datos;
    }

    private static function addItem(&$array, string $ruta, string $nombre, string $url, bool $active = false)
    {
        if (!empty($nombre) && !empty($url)) {
            $array[] = ['nombre' => $nombre, 'ruta' => $ruta, 'param' => $url, 'active' => $active];
        }
    }
}
