<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosMarcas;
use App\Entity\ArticulosParamHelper;
use App\Entity\BannerPublicidad;
use App\Entity\WebImagenes;
use App\Library\Sql;
use App\Library\SqlParam;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $data = [
            'altarotacion' => Articulos::altaRotacion($param),
            'landing' => Articulos::landing($param),
            'opiniones' => $this->fetchOpiniones(), // Asegura que las opiniones se incluyen
        ];

        if ($this->config->slider()) {
            if ($this->config->sliderBanner()) {
                $data['bannerImg'] = BannerPublicidad::lista($this->config->sliderSizeAuto());
            } else {
                $data['sliderImg'] = WebImagenes::getSliderImages();
            }
        }

        if ($this->config->mostrarMarcas()) {
            $data['lista_marcas'] = ArticulosMarcas::lista($this->config->mostrarWeb2());
        }

        // Obtener imágenes de marcas desde la base de datos
        $data['images'] = $this->fetchMarcasImagesFromDB();

        $this->addTextosWeb = true;
        $this->addCategorias = true;
        $this->addH1Items = true;

        return $this->render('main/main.html.twig', $data);
    }


    /**
     * Obtener las imágenes de marcas desde la base de datos.
     */
    private function getBrandImages(): array
    {
        // Obtener la conexión a la base de datos
        $conn = $this->getDoctrine()->getConnection();

        // Consulta SQL para obtener las imágenes
        $sql = "SELECT imagen FROM config_marcas";
        $results = $conn->fetchAllAssociative($sql);

        // Mapear los resultados para convertir rutas relativas
        return array_map(function ($row) {
            return $row['imagen']; // Se asume que 'imagen' contiene la ruta relativa (ej. uploads/marcas/imagen.jpg)
        }, $results);
    }

    
    /**
     * Obtener las imágenes de marcas desde la base de datos.
     */
    private function fetchMarcasImagesFromDB(): array
    {
        // Obtener la conexión a la base de datos
        $conn = $this->getDoctrine()->getConnection();

        // Consulta SQL para obtener las imágenes
        $sql = "SELECT imagen FROM config_marcas";
        $results = $conn->fetchAllAssociative($sql);

        // Mapear los resultados para convertir rutas relativas
        return array_map(function ($row) {
            return $row['imagen']; // Se asume que 'imagen' contiene la ruta relativa (ej. uploads/marcas/marca1.jpg)
        }, $results);
    }



    /**
     * @Route("/suscribe", name="suscribe-newsletter", methods={"POST"})
     */
    public function suscripcion(Request $request): Response
    {
        $nombre = $request->request->get('nombre');
        $email = $request->request->get('email');

        $sql = 'SELECT exists(SELECT 1 FROM newsletter WHERE email = :email)';
        $existe = (bool) Sql::selectEscalar($sql, [new SqlParam('email', $email, 'string')]);

        if (!$existe) {
            Sql::execute(
                'INSERT INTO newsletter (nombre,email) VALUES (:nombre, :email)',
                [new SqlParam('nombre', $nombre, 'string'), new SqlParam('email', $email, 'string')]
            );
            $msg = 'Suscripción realizada correctamente;';
        } else {
            $msg = 'La cuenta de email ya está registrada;';
        }

        return new Response($msg);
    }
}
