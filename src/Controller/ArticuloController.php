<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosCodbarras;
use App\Entity\ArticulosDocumentos;
use App\Entity\ArticulosImagenes;
use App\Entity\ArticulosParamHelper;
use App\Entity\WebValoraciones;
use App\Helper\ArticulosHelper;
use App\Entity\Empresa;
use App\Library\DataTables;
use App\Library\Sql;
use App\Library\SqlFilter;
use App\Twig\AppExtension;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/articulo", name="articulo") */
class ArticuloController extends BaseController
{
    /**
     * @Route("/url/{weburl}", name="")
     */
    public function index(string $weburl): Response
    {
        $this->addTextosWeb = true;
        $this->addCategorias = true;

        $art = Articulos::getMetaByUrl($weburl);
        if (!empty($art)) {
            $this->metaAlt = $art['web_meta_description'];
            $this->titleAlt = $art['web_title'];
        }

        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $art = Articulos::getByUrl($weburl, $param);

        $datos = [
            'art' => $art,
            'emp_nombre' => Empresa::leeNombre(),
            'weburl' => $weburl,
            'breadcrumb' => ArticulosHelper::breadcrumbArticulo($weburl),
            'landing' => Articulos::landing($param), // Agrega la variable landing
        ];

        return $this->render('articulo/articulo.html.twig', $datos);
    }

    /**
     * @Route("/get/{weburl}", name="-get")
     */
    public function getArticulo(string $weburl): JsonResponse
    {
        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $art = Articulos::getByUrl($weburl, $param);
        $referencia = $art['referencia'];
        $almacen = $this->config->almacen();
        $stockAlmDisp = $this->config->stockAlmDisp();

        if ($art['tallas_colores']) {
            $tallas = Articulos::listaTallas($referencia);
            $colores = Articulos::listaColores($referencia);
            $stocktc = Articulos::listaStockTC($referencia, $almacen, $stockAlmDisp);
            $preciostc = ArticulosCodbarras::listaPreciosTC($referencia);
        } else {
            $tallas = [];
            $colores = [];
            $stocktc = [];
            $preciostc = [];
        }

        $twig = new AppExtension($this->config);

        $stocktcud = [];

        foreach ($stocktc as &$item) {
            $item['icon'] = $twig->getBatteryStock($item['stock'], 0, $art['control_stock']);
        }

        $datos = [
            'art' => $art,
            'txtPrecioCero' => $this->config->txtPrecioCero(),
            'tallas' => $tallas,
            'colores' => $colores,
            'preciostc' => $preciostc,
            'stocktc' => $stocktc,
            'imagenes' => ArticulosImagenes::lista($referencia),
            'icon_stock' => $twig->getBatteryStock($art['stock'], $art['virtual'], $art['control_stock']),
            'bloqueo_stock' => $this->config->bloqueoVentaSinStock(),
            'control_stock' => $art['control_stock'],
        ];

        return new JsonResponse($datos);
    }

    /**
     * @Route("/documento/{weburl}", name="-documento")
     */
    public function documento(string $weburl): Response
    {
        $doc = ArticulosDocumentos::getFileByUrl($weburl);
        $tempFile = sys_get_temp_dir().'/'.$doc['documento'];
        Sql::blobRead($tempFile, $doc['objeto']);

        $response = new BinaryFileResponse($tempFile);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $doc['documento']);
        $response->deleteFileAfterSend(true);

        return $response;
    }

    /**
     * @Route("/lista", name="-lista")
     */
    public function lista(Request $request): JsonResponse
    {
        $almacen = (int) $request->request->get('almacen');
        $tarifa = $this->tarifa();

        if ($this->config->stockAlmDisp()) {
            $campoAlmacen = 'greatest((SELECT round(sum(s.actual - s.pservir)) FROM almacenes_stock s LEFT JOIN almacenes a ON a.codigo = s.almacen WHERE s.referencia = art.referencia AND a.control_stock = 1), 0)';
        } else {
            $campoAlmacen = 'greatest(round(coalesce(sto.actual - sto.pservir,0)), 0)';
        }

        $referencia = Articulos::buscaReferencia($request->request->get('nombre'));

        $filtroSql = 'art.obsoleto = 0';
        if (!empty($referencia)) {
            $filtroSql .= SqlFilter::text('art.referencia', $referencia);
        } else {
            SqlFilter::$request = $request;
            $filtroSql .= SqlFilter::likePost('art.referencia||art.nombre||art.nombre2web', 'nombre');
        }
        $filtroSql .= ' ORDER BY stock DESC, precio ASC';

        $sql = "SELECT
                '' AS imagen,
                art.referencia,
                art.nombre,
                coalesce(pre.precio, 0) AS precio,
                $campoAlmacen AS stock,
                art.sinstock = 0 AS control_stock
            FROM articulos art
            LEFT JOIN articulos_precios pre ON pre.referencia = art.referencia AND pre.tarifa = $tarifa
            LEFT JOIN almacenes_stock sto ON sto.referencia = art.referencia AND sto.almacen = $almacen";

        $sqlCount = 'SELECT count(*) FROM articulos art';

        $fnPostRead = function (&$rows) {
            $cliente = $this->cliente();
            $hasClient = !empty($cliente);

            foreach ($rows as &$row) {
                $row['imagen'] = ArticulosImagenes::getImage($row['referencia'], 120, 1);
                if ($hasClient) {
                    $row['precio'] = (float) Sql::selectEscalar("SELECT precio FROM precio_articulo('{$row['referencia']}', $cliente)");
                }
            }
        };

        return DataTables::getData($request, $sql, $sqlCount, $filtroSql, '', $fnPostRead);
    }
}
