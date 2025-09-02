<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Entity\Familias;
use App\Helper\AtributosHelper;
use App\Helper\PaginationHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FamiliaGridController extends BaseController
{
    /**
     * @Route("/familia-grid/{param}", name="familia-grid", requirements={"param"=".+"})
     */
    public function index(string $param): Response
    {
        $mostrarWeb2 = $this->config->mostrarWeb2();

        $attr = new AtributosHelper();
        $attr->parseParam($param);
        $attr->setFiltroSqlFamilia();

        $fam = new Familias();
        $fam->findByUrl($attr->webUrl);

        $this->metaAlt = $fam->web_meta_description;
        $this->titleAlt = $fam->web_title;

        $param = ArticulosParamHelper::createFromAttr($attr, $this->config, $this->cliente(), 'disponible DESC, precio_iva ASC, nombre');

        $cleanUrl = $this->generateUrl('familia', ['param' => $attr->webUrl], UrlGeneratorInterface::ABSOLUTE_URL);
        $currentUrl = $this->generateUrl('familia-grid', ['param' => $attr->getCurrentUrl()], UrlGeneratorInterface::ABSOLUTE_URL);
        $pagination = new PaginationHelper($currentUrl, $attr->filtroSqlCount, $mostrarWeb2);

        $data = [
            'routeName' => 'familia-grid',
            'cleanUrl' => $cleanUrl,
            'fam' => $fam,
            'lista_subfamilias' => Familias::listaSubfamilias($fam->codigo, $mostrarWeb2, $param->filtroSql),
            'articulos' => Articulos::lista($param),
            'attributes' => $this->config->mostrarAtributos() ? $attr->getAttr($mostrarWeb2) : [],
            'attrChecked' => $attr->existsChecked,
            'pagination' => $pagination->getItems($attr->page, $attr->itemsPage),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('varios/familia-grid.html.twig', $data);
    }
}
