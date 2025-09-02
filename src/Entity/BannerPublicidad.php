<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\Tools;

class BannerPublicidad extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var \DateTime|null */
    public $desde;
    /** @var \DateTime|null */
    public $hasta;
    /** @var string */
    public $md5;
    /** @var int|null */
    public $imagen;
    /** @var bool */
    public $activo;
    /** @var string */
    public $nombre;
    /** @var bool */
    public $cacheweb;
    /** @var bool */
    public $version_movil;
    /** @var string */
    public $texto_web;
    /** @var string */
    public $referencia;
    /** @var int */
    public $marca;
    /** @var int */
    public $familia;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'desde', 'hasta', 'md5', 'imagen', 'activo', 'nombre', 'cacheweb', 'version_movil', 'texto_web', 'referencia', 'marca', 'familia'];
        $this->fieldTypes = ['int', '\DateTime', '\DateTime', 'string', 'int', 'bool', 'string', 'bool', 'bool', 'string', 'string', 'int', 'int'];
        $this->fieldLengths = [0, 0, 0, 32, 0, 0, 150, 0, 0, 0, 30, 0, 0];
        $this->defaultValues = [0, null, null, null, null, false, '', false, false, '', '', 0, 0];
        $this->numFields = 13;
        $this->tableName = 'banner_publicidad';
        $this->pkFields = ['codigo'];
        $this->numPkFields = 1;
        $this->autoIncrementField = 'codigo';
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        return $this->codigo == 0;
    }

    // -- END generated code --
    public static function lista(bool $soloDesktop = false): array
    {
        $sql = "SELECT
                ban.codigo,
                ban.imagen,
                ban.cacheweb,
                ban.texto_web AS texto,
                ban.version_movil AS mobile,
                ban.referencia != '' AS es_referencia,
                ban.marca != 0 AS es_marca,
                ban.familia != 0 AS es_familia,
                case
                    when ban.referencia != '' then 'A'
                    when ban.marca != 0 then 'M'
                    when ban.familia != 0 then 'F'
                    else ''
                end AS url_type,
                coalesce(art.web_url, mar.web_url, fam.web_url, '') AS url
            FROM banner_publicidad ban
            LEFT JOIN articulos_marcas mar ON mar.codigo = ban.marca
            LEFT JOIN familias fam ON fam.codigo = ban.familia
            LEFT JOIN articulos art ON art.referencia = ban.referencia
            WHERE ban.activo
            AND (ban.desde IS NULL OR ban.desde <= CURRENT_DATE)
            AND (ban.hasta IS NULL OR ban.hasta >= CURRENT_DATE)
            ORDER BY ban.codigo";

        $items = [
            'desktop' => [],
            'mobile' => [],
        ];

        //$destino = 'desktop';
        foreach (Sql::selectAll($sql) as $row) {
            $imagen = self::getImage($row);
            //if (!$soloDesktop) {
                $destino = Tools::toBool($row['mobile']) ? 'mobile' : 'desktop';
            //}
            $items[$destino][] = [
                'path' => $imagen,
                'text' => $row['texto'],
                'url' => $row['url'],
                'url_type' => $row['url_type'],
            ];
        }

        return $items;
    }

    private static function getImage(array $row): string
    {
        $codigo = Tools::toInt($row['codigo']);
        $imagen = Tools::toInt($row['imagen']);
        $cacheweb = Tools::toBool($row['cacheweb']);

        $ruta = "images/cache/banner-$codigo.jpg";
        if (!$cacheweb) {
            Sql::blobRead($ruta, $imagen);
            Sql::execute("UPDATE banner_publicidad SET cacheweb = true WHERE codigo = $codigo");
        } elseif (!file_exists($ruta)) {
            Sql::blobRead($ruta, $imagen);
        }

        return $ruta;
    }
}
