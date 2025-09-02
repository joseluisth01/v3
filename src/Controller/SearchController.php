<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Helper\AttrSearchHelper;
use App\Helper\PaginationHelper;
use App\Library\SqlFilter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SearchController extends BaseController
{
    /**
     * @Route("/search/{page<\d+>?1}/{itemsPage<\d+>?12}", name="search")
     */
    public function index(int $page, int $itemsPage, Request $request): Response
    {
        $text = $request->query->get('q', '');
        $marcas = $request->query->get('m');
        $atributos = $request->query->get('a');

        $attr = new AttrSearchHelper($request);
        $attr->creaFiltroSqlCount($this->creaFiltroSql($text));

        $mostrarWeb2 = $this->config->mostrarWeb2();

        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $param->filtroSql = $attr->filtroSqlCount;
        $param->orderBy = 'disponible DESC, precio_iva ASC, nombre';
        $param->page = $page;
        $param->limit = $itemsPage;

        $cleanUrl = $this->generateUrl('search', ['q' => $text], UrlGeneratorInterface::ABSOLUTE_URL);
        $currentUrl = $this->generateUrl('search', ['q' => $text, 'm' => $marcas, 'a' => $atributos], UrlGeneratorInterface::ABSOLUTE_URL);
        $pagination = new PaginationHelper($currentUrl, $attr->filtroSqlCount, $mostrarWeb2);

        $datos = [
            'routeName' => 'search',
            'cleanUrl' => $cleanUrl,
            'attributes' => $this->config->mostrarAtributos() ? $attr->getAttr($mostrarWeb2) : [],
            'attrChecked' => $attr->existsChecked,
            'textSearch' => $text,
            'pagination' => $pagination->getItems($page, $itemsPage),
            'articulos' => Articulos::lista($param),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('tools/search.html.twig', $datos);
    }

    private function creaFiltroSql(string $text): string
    {
        $mostrarWeb2 = $this->config->mostrarWeb2();
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';
        $filtroSql = "$filtroArtMostrarWeb AND art.obsoleto = 0";

        $referencia = Articulos::buscaReferencia($text);
        if (!empty($referencia)) {
            $filtroSql .= SqlFilter::text('art.referencia', $referencia);
        } else {
            $filtroSql .= SqlFilter::like('art.referencia||art.nombre||art.nombre2web', $text);
        }

        return $filtroSql;
    }
}
