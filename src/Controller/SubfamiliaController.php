<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Entity\Subfamilias;
use App\Helper\ArticulosHelper;
use App\Helper\AtributosHelper;
use App\Helper\PaginationHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SubfamiliaController extends BaseController
{
    /**
     * @Route("/subfamilia/{param}", name="subfamilia", requirements={"param"=".+"})
     */
    public function index(string $param): Response
    {
        $attr = new AtributosHelper();
        $attr->parseParam($param);
        $attr->setFiltroSqlSubfamilia();

        $mostrarWeb2 = $this->config->mostrarWeb2();

        $sub = new Subfamilias();
        $sub->findByUrl($attr->webUrl);
        $this->metaAlt = $sub->web_meta_description;
        $this->titleAlt = $sub->web_title;

        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $param->filtroSql = $attr->filtroSqlCount;
        $param->orderBy = 'disponible DESC, precio_iva ASC, nombre';
        $param->page = $attr->page;
        $param->limit = $attr->itemsPage;

        $cleanUrl = $this->generateUrl('subfamilia', ['param' => $attr->webUrl], UrlGeneratorInterface::ABSOLUTE_URL);
        $currentUrl = $this->generateUrl('subfamilia', ['param' => $attr->getCurrentUrl()], UrlGeneratorInterface::ABSOLUTE_URL);
        $pagination = new PaginationHelper($currentUrl, $attr->filtroSqlCount, $mostrarWeb2);

        $datos = [
            'routeName' => 'subfamilia',
            'sub' => $sub,
            'cleanUrl' => $cleanUrl,
            'attributes' => $this->config->mostrarAtributos() ? $attr->getAttr($mostrarWeb2) : [],
            'attrChecked' => $attr->existsChecked,
            'breadcrumb' => ArticulosHelper::breadcrumbSubfamilia($attr->webUrl),
            'pagination' => $pagination->getItems($attr->page, $attr->itemsPage),
            'articulos' => Articulos::lista($param),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('varios/subfamilia.html.twig', $datos);
    }
}
