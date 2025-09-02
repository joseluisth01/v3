<?php

namespace App\Helper;

use App\Entity\Articulos;
use App\Entity\ArticulosCodbarras;
use App\Entity\ArticulosImagenes;
use App\Library\Sql;

class ImagesHelper
{
    public const PATH_CACHE = 'images/cache/';

    public const PATH_MARCAS = 'images/marcas/';
    public const PATH_CATEGORIAS = 'images/categorias/';
    public const PATH_FAMILIAS = 'images/familias/';
    public const PATH_SUBFAMILIAS = 'images/subfamilias/';

    public static bool $imageWebP = false;

    public static function rutaImagenArt(ArticulosImagenes $reg, int $res): string
    {
        $nombre = self::normalizeArt($reg->referencia, $reg->orden);
        $ext = self::$imageWebP ? 'webp' : 'jpg';

        return self::PATH_CACHE."$nombre-$res.$ext";
    }

    public static function rutaImagenCB(ArticulosCodbarras $reg, int $res): string
    {
        $nombre = self::normalizeArt($reg->referencia, $reg->codbarras);
        $ext = self::$imageWebP ? 'webp' : 'jpg';

        return self::PATH_CACHE."$nombre-$res.$ext";
    }

    public static function grabaImagenesArt(ArticulosImagenes $reg)
    {
        $nombre = self::normalizeArt($reg->referencia, $reg->orden);
        self::grabaImagenes($nombre, $reg->imagen);
    }

    public static function grabaImagenesCB(ArticulosCodbarras $reg)
    {
        $nombre = self::normalizeArt($reg->referencia, $reg->codbarras);
        self::grabaImagenes($nombre, $reg->imagen);
    }

    public static function rutaImagenMarca(string $marca): string
    {
        return self::PATH_MARCAS.self::normalize($marca).'.webp';
    }

    public static function rutaImagenMarcaSmall(string $marca): string
    {
        return self::PATH_MARCAS.self::normalize("$marca-small").'.webp';
    }

    public static function grabaImagenMarca(string $marca, int $imagen)
    {
        if ($imagen != 0) {
            $nombre = self::normalize($marca);
            $fileTemp = self::PATH_MARCAS."$nombre.png";
            if (Sql::blobRead($fileTemp, $imagen)) {
                self::resize($fileTemp, self::rutaImagenMarca($marca), 100, true);
                self::resize($fileTemp, self::rutaImagenMarcaSmall($marca), 24, true);
                unlink($fileTemp);
            }
        }
    }

    public static function imagenMarca(int $codigo, string $nombre, int $imagen, bool $cacheWeb): string
    {
        if (empty($imagen)) {
            return 'images/default/no-image-75.webp';
        }

        return self::getImagenMarca(false, $codigo, $nombre, $imagen, $cacheWeb);
    }

    public static function imagenMarcaSmall(int $codigo, string $nombre, int $imagen, bool $cacheWeb): string
    {
        if (empty($imagen)) {
            return 'images/default/no-image-75.webp';
        }

        return self::getImagenMarca(true, $codigo, $nombre, $imagen, $cacheWeb);
    }

    private static function getImagenMarca(bool $small, int $codigo, string $nombre, int $imagen, bool $cacheWeb): string
    {
        if ($small) {
            $ruta = self::rutaImagenMarcaSmall($nombre);
        } else {
            $ruta = self::rutaImagenMarca($nombre);
        }

        $fileExists = \file_exists($ruta);
        if (!$cacheWeb || !$fileExists) {
            self::grabaImagenMarca($nombre, $imagen);
            Sql::execute("UPDATE marcas_imagenes SET cacheweb = true WHERE codigo = $codigo");
            $fileExists = true;
        }

        return $fileExists ? $ruta : '';
    }

    public static function rutaImagenCategoria(string $categoria): string
    {
        return  self::PATH_CATEGORIAS.self::normalize($categoria).'.webp';
    }

    public static function grabaImagenCategoria(string $categoria, int $imagen)
    {
        if ($imagen != 0) {
            $nombre = self::normalize($categoria);
            $fileTemp = self::PATH_CATEGORIAS."$nombre.png";
            if (Sql::blobRead($fileTemp, $imagen)) {
                self::resize($fileTemp, self::rutaImagenCategoria($categoria), 24, true);
                unlink($fileTemp);
            }
        }
    }

    public static function rutaImagenFamilia(string $familia): string
    {
        return self::PATH_FAMILIAS.self::normalize($familia).'.webp';
    }

    public static function grabaImagenFamilia(string $familia, int $imagen)
    {
        if ($imagen != 0) {
            $nombre = self::normalize($familia);
            $fileTemp = self::PATH_FAMILIAS."$nombre.png";
            if (Sql::blobRead($fileTemp, $imagen)) {
                self::resize($fileTemp, self::rutaImagenFamilia($familia), 250);
                unlink($fileTemp);
            }
        }
    }

    public static function imagenFamilia(int $codigo, string $nombre, int $imagen, bool $cacheWeb): string
    {
        if (empty($imagen)) {
            return 'images/default/no-image-250.webp';
        }

        $ruta = self::rutaImagenFamilia($nombre);
        $fileExists = \file_exists($ruta);
        if (!$cacheWeb || !$fileExists) {
            self::grabaImagenFamilia($nombre, $imagen);
            Sql::execute("UPDATE familias_imagenes SET cacheweb = true WHERE codigo = $codigo");
            $fileExists = true;
        }

        return $fileExists ? $ruta : '';
    }

    public static function rutaImagenSubfamilia(string $subfamilia): string
    {
        return self::PATH_SUBFAMILIAS.self::normalize($subfamilia).'.webp';
    }

    public static function grabaImagenSubfamilia(string $subfamilia, int $imagen)
    {
        if ($imagen != 0) {
            $nombre = self::normalize($subfamilia);
            $fileTemp = self::PATH_SUBFAMILIAS."$nombre.png";
            if (Sql::blobRead($fileTemp, $imagen)) {
                self::resize($fileTemp, self::rutaImagenSubfamilia($subfamilia), 120);
                unlink($fileTemp);
            }
        }
    }

    public static function imagenSubfamilia(int $codigo, string $nombre, int $imagen, bool $cacheWeb): string
    {
        if (empty($imagen)) {
            return 'images/default/no-image-120.webp';
        }

        $ruta = self::rutaImagenSubfamilia($nombre);
        $fileExists = \file_exists($ruta);
        if (!$cacheWeb || !$fileExists) {
            self::grabaImagenSubfamilia($nombre, $imagen);
            Sql::execute("UPDATE subfamilias_imagenes SET cacheweb = true WHERE codigo = $codigo");
            $fileExists = true;
        }

        return $fileExists ? $ruta : '';
    }

    private static function grabaImagenes(string $nombre, int $imagen)
    {
        if ($imagen != 0) {
            $ruta = self::PATH_CACHE.$nombre;
            $fileTemp = "$ruta.png";
            $ext = self::$imageWebP ? 'webp' : 'jpg';
            if (Sql::blobRead($fileTemp, $imagen)) {
                foreach ([120, 250, 1000] as $res) {
                    $destino = "$ruta-$res.$ext";
                    self::resize($fileTemp, $destino, $res, false, self::$imageWebP);
                }
                unlink($fileTemp);
            }
        }
    }

    private static function normalizeArt(string $referencia, $sufijo): string
    {
        return self::normalize(Articulos::leeNombre($referencia).'-'.$referencia, $sufijo);
    }

    public static function normalize(): string
    {
        $items = [];
        foreach (func_get_args() as $text) {
            $text = preg_replace('/[^a-zA-Z0-9s]/', '-', strtolower((string) $text));
            $text = preg_replace('/-{2,}/', '-', $text);
            $text = trim(trim($text, '-'));
            $items[] = $text;
        }

        return implode('-', $items);
    }

    public static function resize(string $input, string $output, int $size, bool $calculateWidth = false, bool $webP = true)
    {
        try {
            $tipoimagen = exif_imagetype($input);
            if ($tipoimagen == '3') {
                $orig = imagecreatefrompng($input);
            } elseif ($tipoimagen == '2') {
                $orig = imagecreatefromjpeg($input);
            } elseif ($tipoimagen == '1') {
                $orig = imagecreatefromgif($input);
            } else {
                return;
            }

            $origWidth = imagesx($orig);
            $origHeight = imagesy($orig);
            if ($calculateWidth) {
                $destHeight = $size;
                $destWidth = null;
            } else {
                $destWidth = $size;
                $destHeight = $size;
            }
            $verticalOffset = 0;
            $horizontalOffset = 0;
            if ($destWidth == null) {
                // height is locked
                $destWidth = $destHeight * $origWidth / $origHeight;
            } else {
                if ($destHeight == null) {
                    // width is locked
                    $destHeight = $destWidth * $origHeight / $origWidth;
                } else {
                    // both dimensions are locked
                    $verticalOffset = $destHeight - ($origHeight * $destWidth) / $origWidth;
                    $horizontalOffset = $destWidth - ($destHeight * $origWidth) / $origHeight;
                    if ($verticalOffset < 0) {
                        $verticalOffset = 0;
                    }
                    if ($horizontalOffset < 0) {
                        $horizontalOffset = 0;
                    }
                }
            }
            $imgTemp = imagecreatetruecolor($destWidth, $destHeight);
            imagesavealpha($imgTemp, true);

            $transparent = imagecolorallocatealpha($imgTemp, 255, 255, 255, 127);
            imagefill($imgTemp, 0, 0, $transparent);
            imagecopyresampled(
                $imgTemp,
                $orig,
                round($horizontalOffset / 2),
                round($verticalOffset / 2),
                0,
                0,
                round($destWidth - $horizontalOffset),
                round($destHeight - $verticalOffset),
                $origWidth,
                $origHeight
            );

            if ($webP) {
                imagewebp($imgTemp, $output);
            } else {
                imagejpeg($imgTemp, $output);
            }
            imagedestroy($imgTemp);
        } catch (\Exception $e) {
        }
    }
}
