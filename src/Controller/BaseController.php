<?php

namespace App\Controller;

use App\Entity\ArbolFamilias;
use App\Entity\WebTextos;
use App\Helper\ImagesHelper;
use App\Security\User;
use App\Service\ConfigService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Security;
use App\Entity\ArticulosMarcas;

//https://symfony.com/blog/new-in-symfony-5-3-session-service-deprecation

class BaseController extends AbstractController
{
    /** @var User */
    public $user;
    /** @var ConfigService */
    public $config;
    /** @var SessionInterface */
    public $session;

    protected $addTextosWeb = false;
    protected $addCategorias = false;
    protected $addH1Items = false;

    protected $titleAlt = null;
    protected $metaAlt = null;


    public function __construct(Security $security, ConfigService $config, RequestStack $requestStack)
    {
        $this->config = $config;
        $this->user = $security->getUser() ?? new User();
        $this->session = $requestStack->getSession();

        ImagesHelper::$imageWebP = $this->config->imageWebP();
    }



    protected function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $parameters['user'] = $this->user;
        $parameters['config'] = $this->config;
        
        // Siempre añadir categorías o familias independientemente de $addCategorias
        if (!isset($parameters['categorias']) && !isset($parameters['familias'])) {
            if ($this->config->mostrarCategorias()) {
                $parameters['categorias'] = ArbolFamilias::arbolCompleto($this->config->mostrarWeb2());
            } else {
                $parameters['familias'] = ArbolFamilias::familias($this->config->mostrarWeb2());
            }
        }
        
        // El resto del método sigue igual
        if ($this->addTextosWeb) {
            $this->addTextosWebToArray($parameters);
        }
        if ($this->addCategorias) {
            // Ya no necesitamos añadirlas aquí si ya están definidas
            if (!isset($parameters['categorias']) && !isset($parameters['familias'])) {
                $this->addCategoriasToArray($parameters);
            }
            if ($this->addH1Items) {
                $parameters['h1Items'] = $this->createItemsH1($parameters);
            }
        }
        
        if ($this->titleAlt != null && $this->titleAlt != '') {
            $this->config->data['title'] = $this->titleAlt;
        }
        if ($this->metaAlt != null && $this->metaAlt != '') {
            $this->config->data['meta_tags_description'] = $this->metaAlt;
        }
        
        return parent::render($view, $parameters, $response);
    }

    protected function tarifa(): int
    {
        $tarifa = $this->config->tarifa();
        if (!empty($this->user)) {
            if ($this->user->getTarifa() > 0) {
                $tarifa = $this->user->getTarifa();
            }
        }

        return $tarifa;
    }

    protected function fetchOpiniones(): array
    {
        try {
            // Obtén la conexión a la base de datos
            $conn = $this->getDoctrine()->getConnection();
    
            // Consulta para obtener las opiniones
            $sql = "SELECT nombre, tiempo, rating, texto, avatar FROM opiniones";
            $stmt = $conn->executeQuery($sql);
    
            // Devuelve el resultado como un array asociativo
            return $stmt->fetchAllAssociative();
    
        } catch (\Exception $e) {
            // Devuelve un array vacío si ocurre un error, y opcionalmente loguea el error
            error_log('Error fetching opiniones: ' . $e->getMessage());
            return [];
        }
    }
    


    protected function tarifaEspDto(): int
    {
        return $this->config->tarifaEspDto();
    }

    protected function agente(): int
    {
        $agente = $this->config->agente();
        if (!empty($this->user) && !empty($this->user->getAgente())) {
            $agente = $this->user->getAgente();
        }

        return $agente;
    }

    protected function cliente(): int
    {
        return  empty($this->user) ? 0 : $this->user->getClient();
    }

    protected function addTextosWebToArray(array &$array)
    {
        $array['cms'] = WebTextos::listaNombres();
    }

    protected function addCategoriasToArray(array &$array)
    {
        if ($this->config->mostrarCategorias()) {
            $array['categorias'] = ArbolFamilias::arbolCompleto($this->config->mostrarWeb2());
        } else {
            $array['familias'] = ArbolFamilias::familias($this->config->mostrarWeb2());
        }
    }

    private function createItemsH1(array &$parameters): string
    {
        $h1Text = $this->config->mainH1Text();
        if (empty($h1Text)) {
            return '';
        }

        $items = ["<h1>$h1Text</h1>"];

        if ($this->config->mostrarCategorias()) {
            foreach ($parameters['categorias'] as $cat) {
                $items[] = "<h2>{$cat['nombre']}</h2>";
                foreach ($cat['fam'] as $fam) {
                    $items[] = "<h3>{$fam['nombre']}</h3>";
                    foreach ($fam['sub'] as $sub) {
                        $items[] = "<h4>{$sub['nombre']}</h4>";
                    }
                }
            }
        } else {
            foreach ($parameters['familias'] as $fam) {
                $items[] = "<h2>{$fam['nombre']}</h2>";
                foreach ($fam['sub'] as $sub) {
                    $items[] = "<h3>{$sub['nombre']}</h3>";
                }
            }
        }

        return implode('', $items);
    }
}
