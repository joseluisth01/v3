<?php

namespace App\Entity;

use App\Helper\AtributosHelper;
use App\Service\ConfigService;

class ArticulosParamHelper
{
    /** @var ConfigService */
    public $config;

    /** @var int */
    public $tarifa;
    /** @var int */
    public $tarifaEspDto;
    /** @var int */
    public $cliente;
    /** @var int */
    public $almacen;
    /** @var bool */
    public $stockAlmDisp;
    /** @var bool */
    public $mostrarWeb2;
    /** @var string */
    public $filtroSql;
    /** @var string */
    public $orderBy;
    /** @var int */
    public $page;
    /** @var int */
    public $limit;
    /** @var bool */
    public $parseHtml;

    public function __construct(ConfigService $config, int $cliente)
    {
        $this->config = $config;
        $this->cliente = $cliente;
        $this->tarifa = $config->tarifa();
        $this->tarifaEspDto = $config->tarifaEspDto();
        $this->almacen = $config->almacen();
        $this->stockAlmDisp = $config->stockAlmDisp();
        $this->mostrarWeb2 = $config->mostrarWeb2();
        $this->parseHtml = $config->parseHtmlDesc();
    }

    public function campoStockAlmacen(): string
    {
        return self::getCampoStockAlmacen($this->stockAlmDisp);
    }

    public static function getCampoStockAlmacen($stockAlmDisp)
    {
        if ($stockAlmDisp) {
            return 'coalesce((SELECT round(sum(s.actual - s.pservir))
                FROM almacenes_stock s
                LEFT JOIN almacenes a ON a.codigo = s.almacen
                WHERE s.referencia = art.referencia AND a.control_stock = 1), 0)';
        }

        return 'round(coalesce(sto.actual - sto.pservir,0))';
    }

    public function campoPrecio(): string
    {
        if (empty($this->cliente)) {
            if (empty($this->tarifaEspDto)) {
                return 'pre.precio';
            }
            else {
                return "(SELECT precio FROM precio_web(art.referencia, $this->tarifa, $this->tarifaEspDto))";
            }
        }

        return "(SELECT precio FROM precio_articulo(art.referencia, $this->cliente))";
    }

    public function campoDescuento(): string
    {
        if (empty($this->cliente)) {
            if (empty($this->tarifaEspDto)) {
                return '0';
            }
            else {
                return "(SELECT descuento FROM precio_web(art.referencia, $this->tarifa, $this->tarifaEspDto))";
            }
        }

        return "(SELECT descuento FROM precio_articulo(art.referencia, $this->cliente))";
    }

    public static function createFromAttr(AtributosHelper $attr, $config, $cliente, $orderBy): ArticulosParamHelper
    {
        $param = new ArticulosParamHelper($config, $cliente);
        $param->filtroSql = $attr->filtroSqlCount;
        $param->orderBy = $orderBy;
        $param->page = $attr->page;
        $param->limit = $attr->itemsPage;

        return $param;
    }
}
