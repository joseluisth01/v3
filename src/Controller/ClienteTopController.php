<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Helper\PaginationHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/** @Route("/cliente-top", name="cliente-top") */
class ClienteTopController extends BaseController
{
    /**
     * @Route("/{page<\d+>?1}/{itemsPage<\d+>?12}", name="")
     */
    public function index(int $page, int $itemsPage): Response
    {
        $cliente = $this->cliente();
        if ($cliente == 0) {
            $this->redirectToRoute('home');
        }

        $currentUrl = $this->generateUrl('cliente-top', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $filtroSql = "AND art.referencia IN (
            SELECT distinct lin.referencia
            FROM ventas_lineas lin
            LEFT JOIN articulos art ON art.referencia = lin.referencia
            WHERE lin.referencia != ''
                AND lin.cli_codigo = $cliente
                AND case when art.tipo_unidad = 0 then lin.unidades else lin.gramos end > 0
                AND lin.tipodoc = 8)";

        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $param->filtroSql = $filtroSql;
        $param->orderBy = 'nombre';
        $param->page = $page;
        $param->limit = $itemsPage;

        $pag = new PaginationHelper($currentUrl, $filtroSql, $param->mostrarWeb2);

        $datos = [
            'pagination' => $pag->getItems($page, $itemsPage),
            'articulos' => Articulos::lista($param),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('cliente/cliente-top.html.twig', $datos);
    }
}
