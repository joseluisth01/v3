<?php

// https://stackoverflow.com/questions/41467280/symfony-twig-and-xml-document-is-empty-error

namespace App\Controller;

use App\Entity\ArbolFamilias;
use App\Entity\WebTextos;
use App\Entity\Articulos;
use App\Service\ConfigService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SitemapController extends AbstractController
{
    /**
     * @Route("/robots.txt", name="robots-txt")
     */
    public function robots(ConfigService $config): Response
    {
        $url = $this->generateUrl('sitemap-xml', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $content = <<<EOD
        User-agent: *

        Disallow: /cart/*
        Disallow: /cliente/*
        Disallow: /login*
        Disallow: /password*
        Disallow: /search?q=*

        ## Sitemap files ##
        sitemap: $url
        EOD;

        return new Response(
            $content,
            Response::HTTP_OK,
            ['content-type' => 'text/plain']
        );
    }

    /**
     * @Route("/sitemap.xml", name="sitemap-xml")
     */
    public function sitemap(ConfigService $config): Response
    {
        $urls=[];

        if ($config->mostrarCategorias()) {
            foreach (ArbolFamilias::arbolCompleto($config->mostrarWeb2()) as $cat) {
                $urls[] = $this->generateUrl('categoria-grid', ['webUrl' => $cat['url']], UrlGeneratorInterface::ABSOLUTE_URL);
                foreach ($cat['fam'] as $fam) {
                    $urls[] = $this->generateUrl('familia-grid', ['param' => $fam['url']], UrlGeneratorInterface::ABSOLUTE_URL);
                    foreach ($fam['sub'] as $sub) {
                        $urls[] = $this->generateUrl('subfamilia', ['param' => $sub['url']], UrlGeneratorInterface::ABSOLUTE_URL);
                    }
                }
            }
        } else {
            foreach (ArbolFamilias::familias($config->mostrarWeb2()) as $fam) {
                $urls[] = $this->generateUrl('familia-grid', ['param' => $fam['url']], UrlGeneratorInterface::ABSOLUTE_URL);
                foreach ($fam['sub'] as $sub) {
                    $urls[] = $this->generateUrl('subfamilia', ['param' => $sub['url']], UrlGeneratorInterface::ABSOLUTE_URL);
                }
            }
        }

        foreach (Articulos::listaUrl($config->mostrarWeb2()) as $art) {
            $urls[] = $this->generateUrl('articulo', ['weburl' => $art['url']], UrlGeneratorInterface::ABSOLUTE_URL);
        }

        foreach (WebTextos::listaNombres() as $text) {
            $urls[] = $this->generateUrl('textos', ['item' => $text['web_url']], UrlGeneratorInterface::ABSOLUTE_URL);
        }

        $response = $this->render("tools/sitemap.xml.twig", ['urls' => $urls]);
        $response->headers->add(array('Content-Type' => 'application/xml'));
        return $response;
    }
}
