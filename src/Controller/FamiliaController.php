<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Entity\Familias;
use App\Helper\ArticulosHelper;
use App\Helper\AtributosHelper;
use App\Helper\PaginationHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FamiliaController extends BaseController
{
    /**
     * @Route("/familia/{param}", name="familia", requirements={"param"=".+"})
     */
    public function index(string $param): Response
    {
        $attr = new AtributosHelper();
        $attr->parseParam($param);
        $attr->setFiltroSqlFamilia();

        $mostrarWeb2 = $this->config->mostrarWeb2();

        $fam = new Familias();
        $fam->findByUrl($attr->webUrl);
        $this->metaAlt = $fam->web_meta_description;
        $this->titleAlt = $fam->web_title;


        $param = ArticulosParamHelper::createFromAttr($attr, $this->config, $this->cliente(), 'disponible DESC, precio_iva ASC, nombre');

        $cleanUrl = $this->generateUrl('familia', ['param' => $attr->webUrl], UrlGeneratorInterface::ABSOLUTE_URL);
        $currentUrl = $this->generateUrl('familia', ['param' => $attr->getCurrentUrl()], UrlGeneratorInterface::ABSOLUTE_URL);
        $pagination = new PaginationHelper($currentUrl, $attr->filtroSqlCount, $mostrarWeb2);

        $data = [
            'routeName' => 'familia',
            'fam' => $fam,
            'cleanUrl' => $cleanUrl,
            'attributes' => $this->config->mostrarAtributos() ? $attr->getAttr($mostrarWeb2) : [],
            'attrChecked' => $attr->existsChecked,
            'breadcrumb' => ArticulosHelper::breadcrumbFamilia($attr->webUrl),
            'pagination' => $pagination->getItems($attr->page, $attr->itemsPage),
            'articulos' => Articulos::lista($param),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('varios/familia.html.twig', $data);
    }
}
