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

/* articulo/art-minificha.html.twig */
class __TwigTemplate_37d7b2a21aa7ecb70bd1c2cd0f3d4cb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/art-minificha.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/art-minificha.html.twig"));

        // line 1
        echo "<div class=\"product-item\" itemscope itemtype=\"https://schema.org/Product\">
\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" class=\"text-dark\">
\t\t<div class=\"pi-img-wrapper\">
\t\t\t<img itemprop=\"image\" class=\"px-2 img-fluid\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 4, $this->source); })()), "imagen", [], "any", false, false, false, 4)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 4, $this->source); })()), "imagen_txt", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
\t\t</div>
\t\t";
        // line 6
        if ((array_key_exists("h1Items", $context) &&  !twig_test_empty((isset($context["h1Items"]) || array_key_exists("h1Items", $context) ? $context["h1Items"] : (function () { throw new RuntimeError('Variable "h1Items" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "\t\t\t<p class=\"nombrearticulo\" itemprop=\"name\" class=\"h6 mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<p class=\"nombrearticulo\" itemprop=\"name\" class=\"h6 mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 11
        echo "\t</a>
\t";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 12, $this->source); })()), "dto_fam", [], "any", false, false, false, 12) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 12, $this->source); })()), "precio_iva", [], "any", false, false, false, 12) != 0))) {
            // line 13
            echo "\t\t<div class=\"d-md-flex justify-content-between align-items-center\" >
\t\t\t<div class=\"text-secondary text-right\">
\t\t\t\t<s>";
            // line 15
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 15, $this->source); })()), "precio_iva_sin_dto", [], "any", false, false, false, 15));
            echo "</s>
\t\t\t</div>
\t\t\t<div class=\"text-dark font-weight-bold text-right descuento\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 17, $this->source); })()), "dto_fam", [], "any", false, false, false, 17), "html", null, true);
            echo "%&nbsp;DTO.</div>
\t\t\t<div class=\"pi-price font-lg text-right preciofinal2\">";
            // line 18
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 18, $this->source); })()), "precio_iva", [], "any", false, false, false, 18));
            echo "</div>
\t\t</div>
\t";
        } else {
            // line 21
            echo "\t\t<div class=\"d-flex justify-content-end\">
\t\t\t<div class=\"pi-price font-lg\">
\t\t\t\t";
            // line 23
            echo $this->extensions['App\Twig\AppExtension']->formatPriceNotZero(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 23, $this->source); })()), "precio_iva", [], "any", false, false, false, 23));
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 27
        echo "\t<div class=\" mt-1\" itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
\t\t<div class=\"px-0 pi-price d-flex justify-content-between align-items-center\">
\t\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 29, $this->source); })()), "stock_remoto", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "stockUnificar", [], "any", false, false, false, 29))) {
            // line 30
            echo "\t\t\t\t<small itemprop=\"availability\" href=\"https://schema.org/InStock\" class=\"text-white bg-success p-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "stockRemoto", [], "any", false, false, false, 30), "html", null, true);
            echo "</small>
\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t<span class=\"text-nowrap d-flex justify-content-center align-items-center ml-1\">
\t\t\t\t\t";
            // line 33
            echo $this->extensions['App\Twig\AppExtension']->getBatteryStock(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "stock", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "virtual", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "control_stock", [], "any", false, false, false, 33), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()));
            echo "
\t\t\t\t</span>
\t\t\t\t<div class=\"product-quantity mr-1 d-none d-md-block\">
\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" value=\"1\" aria-label=\"Unidades\" readonly data-ref=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 36, $this->source); })()), "referencia", [], "any", false, false, false, 36)), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t\t<div class=\"px-0\">
\t\t\t<div class=\"ml-2 d-flex justify-content-end align-items-center\">
\t\t\t\t";
        // line 42
        if (((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "bloqueoVentaSinStock", [], "any", false, false, false, 42) && twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 42, $this->source); })()), "control_stock", [], "any", false, false, false, 42)) && ($this->extensions['App\Twig\AppExtension']->getStock(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 42, $this->source); })()), "stock", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 42, $this->source); })()), "virtual", [], "any", false, false, false, 42)) <= 0))) {
            // line 43
            echo "\t\t\t\t\t<button style=\"width:100%\" type=\"button\" class=\"btn-default  btnanadircarritodisabled mt-3\" disabled>AÑADIR AL CARRITO</button>
\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t<button style=\"width:100%\" type=\"button\" class=\"btn-default  add-item-cart btnanadircarrito mt-3\" data-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 45, $this->source); })()), "url", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-tc=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 45, $this->source); })()), "tallas_colores", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-ref=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 45, $this->source); })()), "referencia", [], "any", false, false, false, 45)), "html", null, true);
            echo "\">AÑADIR AL CARRITO</button>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articulo/art-minificha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 47,  145 => 45,  141 => 43,  139 => 42,  134 => 39,  128 => 36,  122 => 33,  119 => 32,  113 => 30,  111 => 29,  107 => 27,  100 => 23,  96 => 21,  90 => 18,  86 => 17,  81 => 15,  77 => 13,  75 => 12,  72 => 11,  66 => 9,  60 => 7,  58 => 6,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-item\" itemscope itemtype=\"https://schema.org/Product\">
\t<a href=\"{{ url('articulo', {weburl: art.url}) }}\" class=\"text-dark\">
\t\t<div class=\"pi-img-wrapper\">
\t\t\t<img itemprop=\"image\" class=\"px-2 img-fluid\" src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.imagen_txt }}\">
\t\t</div>
\t\t{% if h1Items is defined and h1Items is not empty %}
\t\t\t<p class=\"nombrearticulo\" itemprop=\"name\" class=\"h6 mb-0\">{{art.nombre}}</p>
\t\t{% else %}
\t\t\t<p class=\"nombrearticulo\" itemprop=\"name\" class=\"h6 mb-0\">{{art.nombre}}</p>
\t\t{% endif %}
\t</a>
\t{% if art.dto_fam > 0 and art.precio_iva != 0 %}
\t\t<div class=\"d-md-flex justify-content-between align-items-center\" >
\t\t\t<div class=\"text-secondary text-right\">
\t\t\t\t<s>{{ art.precio_iva_sin_dto | price }}</s>
\t\t\t</div>
\t\t\t<div class=\"text-dark font-weight-bold text-right descuento\">{{ art.dto_fam }}%&nbsp;DTO.</div>
\t\t\t<div class=\"pi-price font-lg text-right preciofinal2\">{{ art.precio_iva | price }}</div>
\t\t</div>
\t{% else %}
\t\t<div class=\"d-flex justify-content-end\">
\t\t\t<div class=\"pi-price font-lg\">
\t\t\t\t{{ art.precio_iva | pricenz }}
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t<div class=\" mt-1\" itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
\t\t<div class=\"px-0 pi-price d-flex justify-content-between align-items-center\">
\t\t\t{% if art.stock_remoto and config.stockUnificar %}
\t\t\t\t<small itemprop=\"availability\" href=\"https://schema.org/InStock\" class=\"text-white bg-success p-1\">{{ config.stockRemoto }}</small>
\t\t\t{% else %}
\t\t\t\t<span class=\"text-nowrap d-flex justify-content-center align-items-center ml-1\">
\t\t\t\t\t{{ batteryStock(art.stock, art.virtual, art.control_stock, config)|raw }}
\t\t\t\t</span>
\t\t\t\t<div class=\"product-quantity mr-1 d-none d-md-block\">
\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" value=\"1\" aria-label=\"Unidades\" readonly data-ref=\"{{art.referencia|toHex}}\">
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"px-0\">
\t\t\t<div class=\"ml-2 d-flex justify-content-end align-items-center\">
\t\t\t\t{% if config.bloqueoVentaSinStock and art.control_stock and getStock(art.stock, art.virtual) <= 0 %}
\t\t\t\t\t<button style=\"width:100%\" type=\"button\" class=\"btn-default  btnanadircarritodisabled mt-3\" disabled>AÑADIR AL CARRITO</button>
\t\t\t\t{% else %}
\t\t\t\t\t<button style=\"width:100%\" type=\"button\" class=\"btn-default  add-item-cart btnanadircarrito mt-3\" data-url=\"{{art.url}}\" data-tc=\"{{art.tallas_colores}}\" data-ref=\"{{art.referencia|toHex}}\">AÑADIR AL CARRITO</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "articulo/art-minificha.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\articulo\\art-minificha.html.twig");
    }
}
