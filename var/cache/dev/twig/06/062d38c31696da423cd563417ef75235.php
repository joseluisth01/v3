<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/slidermarcas.html.twig */
class __TwigTemplate_fd449cdca8b931f0af08e23400ae97bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/slidermarcas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/slidermarcas.html.twig"));

        // line 1
        echo "<h2 class=\"titulogeneral\">Trabajamos con las Mejores Marcas</h2>
";
        // line 2
        $context["images"] = $this->extensions['App\Twig\BrandImagesExtension']->getBrandImages();
        // line 3
        echo "<div id=\"carouselMarcas\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <div class=\"d-flex justify-content-center gridfotosmarcas\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 7, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 8
            echo "                    <div class=\"col-3 single-item\">
                        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["image"]), "html", null, true);
            echo "\" class=\"d-block\" alt=\"Marca ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                    </div>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 12
            echo "                    <p>No hay imágenes disponibles en este momento.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
        </div>
    </div>
    <!-- Control Izquierda -->
    <button class=\"carousel-control-prev\" type=\"button\" id=\"prevBtn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M24.5,0.932L10,15.532L24.5,30.132L28.8,25.732L16.2,15.532L28.8,5.332Z\"></path>
        </svg>
    </button>
    <!-- Control Derecha -->
    <button class=\"carousel-control-next\" type=\"button\" id=\"nextBtn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M15.5,0.932L30,15.532L15.5,30.132L11.2,25.732L23.8,15.532L11.2,5.332Z\"></path>
        </svg>
    </button>
</div>

<style>
    /* Personaliza el color de las flechas */
    button svg path {
        fill: gray; /* Cambia el color de las flechas */
    }

    /* Hover para cambiar de color */
    button:hover svg path {
        fill: darkgray; /* Cambia el color cuando se pasa el mouse */
    }

    /* Ajusta el tamaño del botón para que no sea muy grande */
    button {
        background: none;
        border: none;
        cursor: pointer;
        outline: none;
    }

    /* Posición de las flechas */
    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        transform: translateY(-50%);
    }
</style>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const items = document.querySelectorAll(\"#carouselMarcas .single-item\");
        const totalItems = items.length;
        let currentIndex = 0;

        const updateCarousel = () => {
            items.forEach((item, index) => {
                if (index >= currentIndex && index < currentIndex + 4) {
                    item.style.display = \"block\";
                } else {
                    item.style.display = \"none\";
                }
            });
        };

        document.querySelector(\"#nextBtn\").addEventListener(\"click\", function () {
            if (currentIndex + 4 < totalItems) {
                currentIndex += 1;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });

        document.querySelector(\"#prevBtn\").addEventListener(\"click\", function () {
            if (currentIndex > 0) {
                currentIndex -= 1;
            } else {
                currentIndex = totalItems - 4;
            }
            updateCarousel();
        });

        const startAutoSlide = () => {
            return setInterval(() => {
                if (currentIndex + 4 < totalItems) {
                    currentIndex += 1;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }, 3000);
        };

        let autoSlideInterval = startAutoSlide();

        document.querySelector(\"#carouselMarcas\").addEventListener(\"mouseenter\", () => {
            clearInterval(autoSlideInterval);
        });

        document.querySelector(\"#carouselMarcas\").addEventListener(\"mouseleave\", () => {
            autoSlideInterval = startAutoSlide();
        });

        updateCarousel();
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/slidermarcas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 14,  93 => 12,  75 => 9,  72 => 8,  54 => 7,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"titulogeneral\">Trabajamos con las Mejores Marcas</h2>
{% set images = get_brand_images() %}
<div id=\"carouselMarcas\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <div class=\"d-flex justify-content-center gridfotosmarcas\">
                {% for image in images %}
                    <div class=\"col-3 single-item\">
                        <img src=\"{{ asset(image) }}\" class=\"d-block\" alt=\"Marca {{ loop.index }}\">
                    </div>
                {% else %}
                    <p>No hay imágenes disponibles en este momento.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Control Izquierda -->
    <button class=\"carousel-control-prev\" type=\"button\" id=\"prevBtn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M24.5,0.932L10,15.532L24.5,30.132L28.8,25.732L16.2,15.532L28.8,5.332Z\"></path>
        </svg>
    </button>
    <!-- Control Derecha -->
    <button class=\"carousel-control-next\" type=\"button\" id=\"nextBtn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M15.5,0.932L30,15.532L15.5,30.132L11.2,25.732L23.8,15.532L11.2,5.332Z\"></path>
        </svg>
    </button>
</div>

<style>
    /* Personaliza el color de las flechas */
    button svg path {
        fill: gray; /* Cambia el color de las flechas */
    }

    /* Hover para cambiar de color */
    button:hover svg path {
        fill: darkgray; /* Cambia el color cuando se pasa el mouse */
    }

    /* Ajusta el tamaño del botón para que no sea muy grande */
    button {
        background: none;
        border: none;
        cursor: pointer;
        outline: none;
    }

    /* Posición de las flechas */
    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        transform: translateY(-50%);
    }
</style>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const items = document.querySelectorAll(\"#carouselMarcas .single-item\");
        const totalItems = items.length;
        let currentIndex = 0;

        const updateCarousel = () => {
            items.forEach((item, index) => {
                if (index >= currentIndex && index < currentIndex + 4) {
                    item.style.display = \"block\";
                } else {
                    item.style.display = \"none\";
                }
            });
        };

        document.querySelector(\"#nextBtn\").addEventListener(\"click\", function () {
            if (currentIndex + 4 < totalItems) {
                currentIndex += 1;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });

        document.querySelector(\"#prevBtn\").addEventListener(\"click\", function () {
            if (currentIndex > 0) {
                currentIndex -= 1;
            } else {
                currentIndex = totalItems - 4;
            }
            updateCarousel();
        });

        const startAutoSlide = () => {
            return setInterval(() => {
                if (currentIndex + 4 < totalItems) {
                    currentIndex += 1;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }, 3000);
        };

        let autoSlideInterval = startAutoSlide();

        document.querySelector(\"#carouselMarcas\").addEventListener(\"mouseenter\", () => {
            clearInterval(autoSlideInterval);
        });

        document.querySelector(\"#carouselMarcas\").addEventListener(\"mouseleave\", () => {
            autoSlideInterval = startAutoSlide();
        });

        updateCarousel();
    });
</script>
", "main/slidermarcas.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\slidermarcas.html.twig");
    }
}
