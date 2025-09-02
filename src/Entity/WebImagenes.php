<?php

namespace App\Entity;

use App\Library\Sql;

class WebImagenes extends \App\Library\SqlOrm
{
    /** @var int */
    public $id;
    /** @var bool */
    public $slider;
    /** @var int */
    public $orden;
    /** @var int */
    public $imagen;
    /** @var string */
    public $descripcion;
    /** @var bool */
    public $cacheweb;
    /** @var string */
    public $valor_md5;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'slider', 'orden', 'imagen', 'descripcion', 'cacheweb', 'valor_md5'];
        $this->fieldTypes = ['int', 'bool', 'int', 'int', 'string', 'bool', 'string'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 0, 32];
        $this->defaultValues = [0, false, 0, 0, null, false, ''];
        $this->numFields = 7;
        $this->tableName = 'web_imagenes';
        $this->pkFields = ['id'];
        $this->numPkFields = 1;
        $this->autoIncrementField = 'id';
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        return $this->id == 0;
    }

    // -- END generated code --
    private function getImage(int $orden, bool $slider = true): array
    {
        $slider = $slider ? 'true' : 'false';
        if ($this->select("orden = $orden AND slider = $slider LIMIT 1")) {
            if ($slider) {
                $ruta = "images/cache/slider-$this->imagen.jpg";
            } else {
                $ruta = "images/cache/footer-$this->imagen.jpg";
            }
            if (!$this->cacheweb) {
                Sql::blobRead($ruta, $this->imagen);
                $this->cacheweb = true;
                $this->update();
            } elseif (!file_exists($ruta)) {
                Sql::blobRead($ruta, $this->imagen);
            }
        } else {
            $ruta = $slider ? 'images/default/no-image-1000.webp' : '';
        }

        return [
            'path' => $ruta,
            'text' => $this->descripcion,
            'url' => '',
            'url_type' => '',
        ];
    }

    public static function getFooterImages(): array
    {
        $data = [];
        $reg = new self();
        for ($i = 1; $i <= 4; ++$i) {
            $item = $reg->getImage($i, false);
            if (!empty($item['path'])) {
                $data[] = $item;
            }
        }

        return $data;
    }

    public static function getSliderImages(): array
    {
        $data = [];
        $reg = new self();
        for ($i = 1; $i <= 3; ++$i) {
            $data[] = $reg->getImage($i);
        }

        return $data;
    }
}
