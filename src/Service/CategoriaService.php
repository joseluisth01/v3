<?php

namespace App\Service;

use App\Entity\ArbolFamilias;
use App\Service\ConfigService;

class CategoriaService
{
    private $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function obtenerCategorias()
    {
        // Obtener categorías o familias según configuración
        if ($this->config->mostrarCategorias()) {
            return ArbolFamilias::arbolCompleto($this->config->mostrarWeb2());
        } else {
            return ArbolFamilias::familias($this->config->mostrarWeb2());
        }
    }
}