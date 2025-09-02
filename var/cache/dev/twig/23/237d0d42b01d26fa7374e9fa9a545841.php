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

/* main/art-alta-rotacion.html.twig */
class __TwigTemplate_a4836746bf9fea5c676c984f393e478a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/art-alta-rotacion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/art-alta-rotacion.html.twig"));

        // line 2
        echo "<div class=\"sidebar-products\">
  <div class=\"title\">Novedades y Artículos más Solicitados</div>
  <div class=\"repetidornovedades\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["altarotacion"]) || array_key_exists("altarotacion", $context) ? $context["altarotacion"] : (function () { throw new RuntimeError('Variable "altarotacion" does not exist.', 5, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 6
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, $context["art"], "dto_fam", [], "any", false, false, false, 6) > 0) && (twig_get_attribute($this->env, $this->source, $context["art"], "precio_iva", [], "any", false, false, false, 6) != 0))) {
                // line 7
                echo "        <div class=\"item\">
          <a class=\"text-dark\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 8)]), "html", null, true);
                echo "\">
            <div class=\"imgproductosnovedades\">
              <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["art"], "imagen", [], "any", false, false, false, 10)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "imagen_txt", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
            </div>
            <div class=\"divcaracproductos\">
              <div class=\"name\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "nombre", [], "any", false, false, false, 13), "html", null, true);
                echo "</div>
              <div class=\"divsmall small text-dark\">
                <s>";
                // line 15
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["art"], "precio_iva_sin_dto", [], "any", false, false, false, 15));
                echo "</s>
                <div class=\"text-dark font-weight-bold small descuento\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "dto_fam", [], "any", false, false, false, 16), "html", null, true);
                echo "%&nbsp;DTO</div>
                <p class=\"preciofinal\">";
                // line 17
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["art"], "precio_iva", [], "any", false, false, false, 17));
                echo "</p>
              </div>

              <!-- Disponibilidad -->
              <div class=\"d-flex align-items-center justify-content-center full-height flex-row mb-2\">
                ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, $context["art"], "stock", [], "any", false, false, false, 22) > 0)) {
                    // line 23
                    echo "                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\">
                    <title>package-variant-closed-check</title>
                    <path d=\"M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px\">Disponible</p>
                ";
                } else {
                    // line 29
                    echo "                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\" style=\"fill: #dc3545;\">
                    <title>package-variant-closed-remove</title>
                    <path d=\"M21.41 11.58L20 10.17L18.59 11.58L20 13L21.41 11.58M13 10.17L11.58 11.58L13 13L14.41 11.58L13 10.17M16.71 10.17L15.29 11.58L16.71 13L18.12 11.58L16.71 10.17M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L20.5 17.4C20.8 17.2 21 16.9 21 16.5V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M19 15.9L13 19.3V12.6L19 9.2V15.9Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px; \">Sin stock</p>
                ";
                }
                // line 35
                echo "              </div>

              <!-- Contador de unidades y botón de añadir al carrito -->
              <div class=\"d-flex justify-content-between align-items-center\">
                ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["art"], "tallas_colores", [], "any", true, true, false, 39)) {
                    // line 40
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 40)]), "html", null, true);
                    echo "\" class=\"btnanadircarrito\">
                    ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->source, $context["art"], "stock", [], "any", false, false, false, 41) > 0)) {
                        // line 42
                        echo "                      AÑADIR AL CARRITO
                    ";
                    } else {
                        // line 44
                        echo "                      VER DETALLES
                    ";
                    }
                    // line 46
                    echo "                  </a>
                ";
                } else {
                    // line 48
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["art"], "stock", [], "any", false, false, false, 48) > 0)) {
                        // line 49
                        echo "                    <a href=\"#\" class=\"btnanadircarrito add-item-cart\" data-url=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" data-ref=\"";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, $context["art"], "referencia", [], "any", false, false, false, 49)), "html", null, true);
                        echo "\">AÑADIR AL CARRITO</a>
                  ";
                    } else {
                        // line 51
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 51)]), "html", null, true);
                        echo "\" class=\"btnanadircarrito\" style=\"background-color: #6c757d;\">VER DETALLE</a>
                  ";
                    }
                    // line 53
                    echo "                ";
                }
                // line 54
                echo "              </div>
            </div>
          </a>
        </div>
      ";
            } else {
                // line 59
                echo "        <div class=\"item\">
          <a class=\"text-dark\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\">
            <div class=\"imgproductosnovedades\">
              <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["art"], "imagen", [], "any", false, false, false, 62)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "nombre", [], "any", false, false, false, 62), "html", null, true);
                echo "\">
            </div>
            <div class=\"divcaracproductos\">
              <div class=\"name\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "nombre", [], "any", false, false, false, 65), "html", null, true);
                echo "</div>
              <div class=\"preciofinal2\">
                ";
                // line 67
                echo $this->extensions['App\Twig\AppExtension']->formatPriceNotZero(twig_get_attribute($this->env, $this->source, $context["art"], "precio_iva", [], "any", false, false, false, 67));
                echo "
              </div>

              <!-- Disponibilidad -->
              <div class=\"d-flex align-items-center justify-content-center full-height flex-row mb-2\">
                ";
                // line 72
                if ((twig_get_attribute($this->env, $this->source, $context["art"], "stock", [], "any", false, false, false, 72) > 0)) {
                    // line 73
                    echo "                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\">
                    <title>package-variant-closed-check</title>
                    <path d=\"M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px\">Disponible</p>
                ";
                } else {
                    // line 79
                    echo "                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"icononodisponible\" style=\"color: #dc3545; fill:red\">
                    <title>package-variant-closed-remove</title>
                    <path d=\"M21.41 11.58L20 10.17L18.59 11.58L20 13L21.41 11.58M13 10.17L11.58 11.58L13 13L14.41 11.58L13 10.17M16.71 10.17L15.29 11.58L16.71 13L18.12 11.58L16.71 10.17M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L20.5 17.4C20.8 17.2 21 16.9 21 16.5V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M19 15.9L13 19.3V12.6L19 9.2V15.9Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px;\">Sin stock</p>
                ";
                }
                // line 85
                echo "              </div>

              <!-- Contador de unidades y botón de añadir al carrito -->
              <div class=\"d-flex justify-content-between align-items-center\">
                ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["art"], "stock", [], "any", false, false, false, 89) > 0)) {
                    // line 90
                    echo "                  <a href=\"#\" class=\"btnanadircarrito add-item-cart\" data-url=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 90), "html", null, true);
                    echo "\" data-ref=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, $context["art"], "referencia", [], "any", false, false, false, 90)), "html", null, true);
                    echo "\">AÑADIR AL CARRITO</a>
                ";
                } else {
                    // line 92
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["art"], "url", [], "any", false, false, false, 92)]), "html", null, true);
                    echo "\" class=\"btnanadircarrito\" style=\"background-color: #6c757d;\">VER DETALLES</a>
                ";
                }
                // line 94
                echo "              </div>
            </div>
          </a>
        </div>
      ";
            }
            // line 99
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "  </div>
<a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promociones");
        echo "\" class=\"btnvermasarticulos\">VER MÁS ARTÍCULOS</a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/art-alta-rotacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 101,  246 => 100,  240 => 99,  233 => 94,  227 => 92,  219 => 90,  217 => 89,  211 => 85,  203 => 79,  195 => 73,  193 => 72,  185 => 67,  180 => 65,  172 => 62,  167 => 60,  164 => 59,  157 => 54,  154 => 53,  148 => 51,  140 => 49,  137 => 48,  133 => 46,  129 => 44,  125 => 42,  123 => 41,  118 => 40,  116 => 39,  110 => 35,  102 => 29,  94 => 23,  92 => 22,  84 => 17,  80 => 16,  76 => 15,  71 => 13,  63 => 10,  58 => 8,  55 => 7,  52 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# art-alta-rotacion.html.twig modificado #}
<div class=\"sidebar-products\">
  <div class=\"title\">Novedades y Artículos más Solicitados</div>
  <div class=\"repetidornovedades\">
    {% for art in altarotacion|slice(0, 4) %}
      {% if art.dto_fam > 0 and art.precio_iva != 0 %}
        <div class=\"item\">
          <a class=\"text-dark\" href=\"{{ url('articulo', { weburl: art.url }) }}\">
            <div class=\"imgproductosnovedades\">
              <img src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.imagen_txt }}\">
            </div>
            <div class=\"divcaracproductos\">
              <div class=\"name\">{{ art.nombre }}</div>
              <div class=\"divsmall small text-dark\">
                <s>{{ art.precio_iva_sin_dto | price }}</s>
                <div class=\"text-dark font-weight-bold small descuento\">{{ art.dto_fam }}%&nbsp;DTO</div>
                <p class=\"preciofinal\">{{ art.precio_iva | price }}</p>
              </div>

              <!-- Disponibilidad -->
              <div class=\"d-flex align-items-center justify-content-center full-height flex-row mb-2\">
                {% if art.stock > 0 %}
                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\">
                    <title>package-variant-closed-check</title>
                    <path d=\"M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px\">Disponible</p>
                {% else %}
                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\" style=\"fill: #dc3545;\">
                    <title>package-variant-closed-remove</title>
                    <path d=\"M21.41 11.58L20 10.17L18.59 11.58L20 13L21.41 11.58M13 10.17L11.58 11.58L13 13L14.41 11.58L13 10.17M16.71 10.17L15.29 11.58L16.71 13L18.12 11.58L16.71 10.17M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L20.5 17.4C20.8 17.2 21 16.9 21 16.5V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M19 15.9L13 19.3V12.6L19 9.2V15.9Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px; \">Sin stock</p>
                {% endif %}
              </div>

              <!-- Contador de unidades y botón de añadir al carrito -->
              <div class=\"d-flex justify-content-between align-items-center\">
                {% if art.tallas_colores is defined %}
                  <a href=\"{{ url('articulo', { weburl: art.url }) }}\" class=\"btnanadircarrito\">
                    {% if art.stock > 0 %}
                      AÑADIR AL CARRITO
                    {% else %}
                      VER DETALLES
                    {% endif %}
                  </a>
                {% else %}
                  {% if art.stock > 0 %}
                    <a href=\"#\" class=\"btnanadircarrito add-item-cart\" data-url=\"{{ art.url }}\" data-ref=\"{{ art.referencia|toHex }}\">AÑADIR AL CARRITO</a>
                  {% else %}
                    <a href=\"{{ url('articulo', { weburl: art.url }) }}\" class=\"btnanadircarrito\" style=\"background-color: #6c757d;\">VER DETALLE</a>
                  {% endif %}
                {% endif %}
              </div>
            </div>
          </a>
        </div>
      {% else %}
        <div class=\"item\">
          <a class=\"text-dark\" href=\"{{ url('articulo', { weburl: art.url }) }}\">
            <div class=\"imgproductosnovedades\">
              <img src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.nombre }}\">
            </div>
            <div class=\"divcaracproductos\">
              <div class=\"name\">{{ art.nombre }}</div>
              <div class=\"preciofinal2\">
                {{ art.precio_iva | pricenz }}
              </div>

              <!-- Disponibilidad -->
              <div class=\"d-flex align-items-center justify-content-center full-height flex-row mb-2\">
                {% if art.stock > 0 %}
                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"iconodisponible\">
                    <title>package-variant-closed-check</title>
                    <path d=\"M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px\">Disponible</p>
                {% else %}
                  <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"20px\" class=\"icononodisponible\" style=\"color: #dc3545; fill:red\">
                    <title>package-variant-closed-remove</title>
                    <path d=\"M21.41 11.58L20 10.17L18.59 11.58L20 13L21.41 11.58M13 10.17L11.58 11.58L13 13L14.41 11.58L13 10.17M16.71 10.17L15.29 11.58L16.71 13L18.12 11.58L16.71 10.17M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L20.5 17.4C20.8 17.2 21 16.9 21 16.5V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M19 15.9L13 19.3V12.6L19 9.2V15.9Z\"/>
                  </svg>
                  <p class=\"disponible\" style=\"margin-bottom:0px !important; margin-left:5px;\">Sin stock</p>
                {% endif %}
              </div>

              <!-- Contador de unidades y botón de añadir al carrito -->
              <div class=\"d-flex justify-content-between align-items-center\">
                {% if art.stock > 0 %}
                  <a href=\"#\" class=\"btnanadircarrito add-item-cart\" data-url=\"{{ art.url }}\" data-ref=\"{{ art.referencia|toHex }}\">AÑADIR AL CARRITO</a>
                {% else %}
                  <a href=\"{{ url('articulo', { weburl: art.url }) }}\" class=\"btnanadircarrito\" style=\"background-color: #6c757d;\">VER DETALLES</a>
                {% endif %}
              </div>
            </div>
          </a>
        </div>
      {% endif %}
    {% endfor %}
  </div>
<a href=\"{{ path('promociones') }}\" class=\"btnvermasarticulos\">VER MÁS ARTÍCULOS</a>
</div>", "main/art-alta-rotacion.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\art-alta-rotacion.html.twig");
    }
}
