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

/* articulo/art-minificha-2.html.twig */
class __TwigTemplate_e21fa8bf0e6d692bd50ddad1c56b66c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/art-minificha-2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/art-minificha-2.html.twig"));

        // line 1
        echo "<div class=\"product-item\" itemscope itemtype=\"https://schema.org/Product\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" class=\"text-dark\">
    <div class=\"pi-img-wrapper\">
      <img itemprop=\"image\" class=\"px-2 img-fluid\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 4, $this->source); })()), "imagen", [], "any", false, false, false, 4)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 4, $this->source); })()), "imagen_txt", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    </div>
    <div itemprop=\"name\" class=\"nombrearticulo h6 mb-0\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
        echo "</div>
  </a>

  ";
        // line 9
        if (((twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 9, $this->source); })()), "dto_fam", [], "any", false, false, false, 9) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 9, $this->source); })()), "precio_iva", [], "any", false, false, false, 9) != 0))) {
            // line 10
            echo "    <!-- Descuento y precios con descuento -->
    <div class=\"d-md-flex justify-content-between align-items-center\">
      <div class=\"text-secondary text-right\">
        <s>";
            // line 13
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 13, $this->source); })()), "precio_iva_sin_dto", [], "any", false, false, false, 13));
            echo "</s>
      </div>
      <div class=\"text-dark font-weight-bold text-right descuento\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 15, $this->source); })()), "dto_fam", [], "any", false, false, false, 15), "html", null, true);
            echo "%&nbsp;DTO.</div>
      <div class=\"pi-price font-lg text-right preciofinal2\">";
            // line 16
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 16, $this->source); })()), "precio_iva", [], "any", false, false, false, 16));
            echo "</div>
    </div>
  ";
        } else {
            // line 19
            echo "    <!-- Precio sin descuento -->
    <div class=\"d-md-flex justify-content-between align-items-center columnmovil\">
      <div class=\"text-dark font-weight-bold text-right descuento\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 21, $this->source); })()), "dto_fam", [], "any", false, false, false, 21), "html", null, true);
            echo "%&nbsp;DTO.</div>
      <div class=\"pi-price font-lg text-right preciofinal2\">";
            // line 22
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 22, $this->source); })()), "precio_iva", [], "any", false, false, false, 22));
            echo "</div>
    </div>
  ";
        }
        // line 25
        echo "
  <!-- Contador de producto y añadir al carrito -->
  <div class=\"\" itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
    <div class=\"px-0 pi-price d-flex justify-content-between align-items-center\">
      ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 29, $this->source); })()), "stock_remoto", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "stockUnificar", [], "any", false, false, false, 29))) {
            // line 30
            echo "        <small itemprop=\"availability\" href=\"https://schema.org/InStock\" class=\"text-white bg-success p-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "stockRemoto", [], "any", false, false, false, 30), "html", null, true);
            echo "</small>
      ";
        } else {
            // line 32
            echo "        <span class=\"text-nowrap d-flex justify-content-center align-items-center ml-1\">
          ";
            // line 33
            echo $this->extensions['App\Twig\AppExtension']->getBatteryStock(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "stock", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "virtual", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 33, $this->source); })()), "control_stock", [], "any", false, false, false, 33), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()));
            echo "
        </span>
        <!-- Contador de unidades (Producto) -->
        <div class=\"product-quantity mr-1 d-none d-md-block\">
          <input type=\"text\" class=\"form-control input-sm\" value=\"1\" aria-label=\"Unidades\" readonly data-ref=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 37, $this->source); })()), "referencia", [], "any", false, false, false, 37)), "html", null, true);
            echo "\">
        </div>
      ";
        }
        // line 40
        echo "    </div>

    <div class=\"d-flex justify-content-end\">
      ";
        // line 43
        if (((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "bloqueoVentaSinStock", [], "any", false, false, false, 43) && twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 43, $this->source); })()), "control_stock", [], "any", false, false, false, 43)) && ($this->extensions['App\Twig\AppExtension']->getStock(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 43, $this->source); })()), "stock", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 43, $this->source); })()), "virtual", [], "any", false, false, false, 43)) <= 0))) {
            // line 44
            echo "        <button style=\"width:100%\" type=\"button\" class=\"btn-default btnanadircarritodisabled mt-3\" disabled>AÑADIR AL CARRITO</button>
      ";
        } else {
            // line 46
            echo "        <button style=\"width:100%\" type=\"button\" class=\"btn-default add-item-cart btnanadircarrito mt-3\" data-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 46, $this->source); })()), "url", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-tc=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 46, $this->source); })()), "tallas_colores", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-ref=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toHex(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 46, $this->source); })()), "referencia", [], "any", false, false, false, 46)), "html", null, true);
            echo "\">AÑADIR AL CARRITO</button>
      ";
        }
        // line 48
        echo "    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articulo/art-minificha-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  141 => 46,  137 => 44,  135 => 43,  130 => 40,  124 => 37,  117 => 33,  114 => 32,  108 => 30,  106 => 29,  100 => 25,  94 => 22,  90 => 21,  86 => 19,  80 => 16,  76 => 15,  71 => 13,  66 => 10,  64 => 9,  58 => 6,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-item\" itemscope itemtype=\"https://schema.org/Product\">
  <a href=\"{{ url('articulo', {weburl: art.url}) }}\" class=\"text-dark\">
    <div class=\"pi-img-wrapper\">
      <img itemprop=\"image\" class=\"px-2 img-fluid\" src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.imagen_txt }}\">
    </div>
    <div itemprop=\"name\" class=\"nombrearticulo h6 mb-0\">{{art.nombre}}</div>
  </a>

  {% if art.dto_fam > 0 and art.precio_iva != 0 %}
    <!-- Descuento y precios con descuento -->
    <div class=\"d-md-flex justify-content-between align-items-center\">
      <div class=\"text-secondary text-right\">
        <s>{{ art.precio_iva_sin_dto | price }}</s>
      </div>
      <div class=\"text-dark font-weight-bold text-right descuento\">{{ art.dto_fam }}%&nbsp;DTO.</div>
      <div class=\"pi-price font-lg text-right preciofinal2\">{{ art.precio_iva | price }}</div>
    </div>
  {% else %}
    <!-- Precio sin descuento -->
    <div class=\"d-md-flex justify-content-between align-items-center columnmovil\">
      <div class=\"text-dark font-weight-bold text-right descuento\">{{ art.dto_fam }}%&nbsp;DTO.</div>
      <div class=\"pi-price font-lg text-right preciofinal2\">{{ art.precio_iva | price }}</div>
    </div>
  {% endif %}

  <!-- Contador de producto y añadir al carrito -->
  <div class=\"\" itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
    <div class=\"px-0 pi-price d-flex justify-content-between align-items-center\">
      {% if art.stock_remoto and config.stockUnificar %}
        <small itemprop=\"availability\" href=\"https://schema.org/InStock\" class=\"text-white bg-success p-1\">{{ config.stockRemoto }}</small>
      {% else %}
        <span class=\"text-nowrap d-flex justify-content-center align-items-center ml-1\">
          {{ batteryStock(art.stock, art.virtual, art.control_stock, config)|raw }}
        </span>
        <!-- Contador de unidades (Producto) -->
        <div class=\"product-quantity mr-1 d-none d-md-block\">
          <input type=\"text\" class=\"form-control input-sm\" value=\"1\" aria-label=\"Unidades\" readonly data-ref=\"{{art.referencia|toHex}}\">
        </div>
      {% endif %}
    </div>

    <div class=\"d-flex justify-content-end\">
      {% if config.bloqueoVentaSinStock and art.control_stock and getStock(art.stock, art.virtual) <= 0 %}
        <button style=\"width:100%\" type=\"button\" class=\"btn-default btnanadircarritodisabled mt-3\" disabled>AÑADIR AL CARRITO</button>
      {% else %}
        <button style=\"width:100%\" type=\"button\" class=\"btn-default add-item-cart btnanadircarrito mt-3\" data-url=\"{{art.url}}\" data-tc=\"{{art.tallas_colores}}\" data-ref=\"{{art.referencia|toHex}}\">AÑADIR AL CARRITO</button>
      {% endif %}
    </div>
  </div>
</div>
", "articulo/art-minificha-2.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\articulo\\art-minificha-2.html.twig");
    }
}
