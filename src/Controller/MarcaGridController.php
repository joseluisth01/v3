<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosMarcas;
use App\Entity\ArticulosParamHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarcaGridController extends BaseController
{
    /**
     * @Route("/marca-grid/{webUrl}", name="marca-grid")
     */
    public function index(string $webUrl): Response
    {
        $marca = new ArticulosMarcas();
        $marca->findByUrl($webUrl);

        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $param->filtroSql = "art.marca = $marca->codigo";
        $param->orderBy = 'random()';
        $param->page = 1;
        $param->limit = 12;

        $data = [
            'marca' => $marca,
            'articulos' => Articulos::lista($param),
            'lista_familias' => ArticulosMarcas::listaFamilias($marca->codigo, $this->config->mostrarWeb2()),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('varios/marca-grid.html.twig', $data);
    }
}
