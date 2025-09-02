<?php

namespace App\Controller;

use App\Entity\FamiliasCategorias;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriaGridController extends BaseController
{
    /**
     * @Route("/categoria-grid/{webUrl}", name="categoria-grid")
     */
    public function index(string $webUrl): Response
    {
        $cat = new FamiliasCategorias();
        $cat->findByUrl($webUrl);
        $this->metaAlt = $cat->web_meta_description;
        $this->titleAlt = $cat->web_title;

        $data = [
            'cat' => $cat,
            'lista_familias' => FamiliasCategorias::listaFamilias($cat->codigo, $this->config->mostrarWeb2()),
        ];

        $this->addTextosWeb = true;
        $this->addCategorias = true;

        return $this->render('varios/categoria-grid.html.twig', $data);
    }
}
