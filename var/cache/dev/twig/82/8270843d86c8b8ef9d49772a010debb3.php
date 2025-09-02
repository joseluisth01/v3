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

/* header/header.mobile.html.twig */
class __TwigTemplate_515d020dbf87d2b099890650623c585f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.mobile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.mobile.html.twig"));

        // line 2
        echo "<header class=\"d-mobile\">
  <div class=\"content theme-bg\">
    <button class=\"btn slide-menu__control\" data-target=\"mobile-menu\" data-action=\"toggle\" aria-label=\"Menú\">
      <i class=\"mdi mdi-menu mdi-24px\"></i>
    </button>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">
      <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AppExtension']->getLogoSmall(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "logo", [], "any", false, false, false, 8))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "nombreWeb", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "nombreWeb", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    </a>
    <div>
      <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
        echo "\" class=\"btn\" id=\"carrito\" aria-label=\"Ir al carrito\">
        <i class=\"mdi mdi-cart mdi-24px\"></i>
      </a>
      ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14))) {
            // line 15
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo "\" class=\"btn ml-3\" aria-label=\"Login\">
          <i class=\"mdi mdi-account mdi-24px\"></i>
        </a>
      ";
        }
        // line 19
        echo "    </div>
  </div>
  <div class=\"search\">
    <form class=\"input-group\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("search");
        echo "\" method=\"GET\" accept-charset=\"utf-8\">
      <input type=\"text\" class=\"form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar...\" value=\"";
        // line 23
        (((array_key_exists("textSearch", $context) &&  !(null === (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 23, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 23, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
      <div class=\"input-group-append\">
        <button class=\"btn btn-light text-dark btn-outline-secondary no-box-shadow\" type=\"submit\">Buscar</button>
      </div>
    </form>
  </div>
</header>
<nav class=\"slide-menu theme-bg\" id=\"mobile-menu\">
  <div class=\"controls\">
    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"btn slide-menu__control logo\">
      <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AppExtension']->getLogoSmall(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "logo", [], "any", false, false, false, 33))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "nombreWeb", [], "any", false, false, false, 33), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "nombreWeb", [], "any", false, false, false, 33), "html", null, true);
        echo "\" style=\"max-width:100%;max-height:100%;\">
    </a>
    <button type=\"button\" class=\"btn slide-menu__control\" data-action=\"close\">Cerrar</button>
  </div>
  <ul>
    <li>
      <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">
        <i class=\"mdi mdi-home mr-2\"></i>Inicio</a>
    </li>
    ";
        // line 42
        if (array_key_exists("categorias", $context)) {
            // line 43
            echo "      <li>
        <a href=\"#\">PRODUCTOS</a>
        <ul>
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 47
                echo "            <li>
              <a href=\"#\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nombre", [], "any", false, false, false, 48), "html", null, true);
                echo "
                (";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "num_art", [], "any", false, false, false, 49), "html", null, true);
                echo ")</a>
              <ul>
                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "fam", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
                    // line 52
                    echo "                  <li>
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia", ["param" => twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 53)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 53), "html", null, true);
                    echo "
                      (";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "num_art", [], "any", false, false, false, 54), "html", null, true);
                    echo ")</a>
                    ";
                    // line 55
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 55))) {
                        // line 56
                        echo "                      <ul>
                        ";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 57));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                            // line 58
                            echo "                          ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 58))) {
                                // line 59
                                echo "                            <li>
                              <a href=\"";
                                // line 60
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 60)]), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 60), "html", null, true);
                                echo "</a>
                            </li>
                          ";
                            }
                            // line 63
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                      </ul>
                    ";
                    }
                    // line 66
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "              </ul>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </ul>
      </li>
    ";
        } elseif (        // line 73
array_key_exists("familias", $context)) {
            // line 74
            echo "      <li>
        <a href=\"#\">PRODUCTOS</a>
        <ul>
          ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["familias"]) || array_key_exists("familias", $context) ? $context["familias"] : (function () { throw new RuntimeError('Variable "familias" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
                // line 78
                echo "            <li>
              <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia", ["param" => twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 79), "html", null, true);
                echo "
                (";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "num_art", [], "any", false, false, false, 80), "html", null, true);
                echo ")</a>
              ";
                // line 81
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "                <ul>
                  ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 84
                        echo "                    <li>
                      <a href=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 85)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 85), "html", null, true);
                        echo "</a>
                    </li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                </ul>
              ";
                }
                // line 90
                echo "            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        </ul>
      </li>
    ";
        }
        // line 95
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })()), "data", [], "any", false, false, false, 95), "blog_url", [], "any", false, false, false, 95))) {
            // line 96
            echo "      <li>
        <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "data", [], "any", false, false, false, 97), "blog_url", [], "any", false, false, false, 97), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">
          <i class=\"mdi mdi-post-outline mr-2\"></i>BLOG</a>
      </li>
    ";
        }
        // line 101
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 101, $this->source); })()), "data", [], "any", false, false, false, 101), "sat_url", [], "any", false, false, false, 101))) {
            // line 102
            echo "      <li>
        <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "data", [], "any", false, false, false, 103), "sat_url", [], "any", false, false, false, 103), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">
          <i class=\"mdi mdi-tools mr-2\"></i>SAT</a>
      </li>
    ";
        }
        // line 107
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            // line 108
            echo "      ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "isClient", [], "any", false, false, false, 108))) {
                // line 109
                echo "        <li>
          <a href=\"";
                // line 110
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
                echo "\">
            <i class=\"mdi mdi-cart mr-1\"></i>CARRITO ACTUAL</a>
        </li>
        <li>
          <a href=\"";
                // line 114
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion");
                echo "\">
            <i class=\"mdi mdi-text-box-multiple-outline mr-1\"></i>VENTAS</a>
        </li>
        <li>
          <a href=\"";
                // line 118
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion-carritos-lista");
                echo "\">
            <i class=\"mdi mdi-cart-arrow-right mr-1\"></i>CARRITOS ACTIVOS</a>
        </li>
      ";
            } else {
                // line 122
                echo "        <li>
          <a href=\"";
                // line 123
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
                echo "\">
            <i class=\"mdi mdi-cart mr-1\"></i>CARRITO</a>
        </li>
      ";
            }
            // line 127
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "getClient", [], "any", false, false, false, 127) != 0)) {
                // line 128
                echo "        <li>
          <a href=\"";
                // line 129
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 2]);
                echo "\">
            <i class=\"mdi mdi-clipboard-outline mr-1\"></i>PEDIDOS</a>
        </li>
        <li>
          <a href=\"";
                // line 133
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 4]);
                echo "\">
            <i class=\"mdi mdi-clipboard-text-outline mr-1\"></i>ALBARANES</a>
        </li>
        <li>
          <a href=\"";
                // line 137
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 8]);
                echo "\">
            <i class=\"mdi mdi-clipboard-check-outline mr-1\"></i>FACTURAS</a>
        </li>
        <li>
          <a href=\"";
                // line 141
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-top");
                echo "\">
            <i class=\"mdi mdi-chart-bar-stacked mr-1\"></i>TOP COMPRAS</a>
        </li>
      ";
            }
            // line 145
            echo "      ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "isClient", [], "any", false, false, false, 145))) {
                // line 146
                echo "        <li>
          <a href=\"";
                // line 147
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-seleccion");
                echo "\">
            <i class=\"mdi mdi-account-search mr-1\"></i>SELECCIONAR CLIENTE</a>
        </li>
      ";
            }
            // line 151
            echo "      <li>
        <a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\">
          <i class=\"mdi mdi-logout mr-2\"></i>CERRAR SESIÓN</a>
      </li>
    ";
        }
        // line 156
        echo "  </ul>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header/header.mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 156,  395 => 152,  392 => 151,  385 => 147,  382 => 146,  379 => 145,  372 => 141,  365 => 137,  358 => 133,  351 => 129,  348 => 128,  345 => 127,  338 => 123,  335 => 122,  328 => 118,  321 => 114,  314 => 110,  311 => 109,  308 => 108,  305 => 107,  298 => 103,  295 => 102,  292 => 101,  285 => 97,  282 => 96,  279 => 95,  274 => 92,  267 => 90,  263 => 88,  252 => 85,  249 => 84,  245 => 83,  242 => 82,  240 => 81,  236 => 80,  230 => 79,  227 => 78,  223 => 77,  218 => 74,  216 => 73,  212 => 71,  204 => 68,  197 => 66,  193 => 64,  187 => 63,  179 => 60,  176 => 59,  173 => 58,  169 => 57,  166 => 56,  164 => 55,  160 => 54,  154 => 53,  151 => 52,  147 => 51,  142 => 49,  138 => 48,  135 => 47,  131 => 46,  126 => 43,  124 => 42,  118 => 39,  105 => 33,  101 => 32,  89 => 23,  85 => 22,  80 => 19,  72 => 15,  70 => 14,  64 => 11,  54 => 8,  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# https://github.com/grubersjoe/slide-menu #}
<header class=\"d-mobile\">
  <div class=\"content theme-bg\">
    <button class=\"btn slide-menu__control\" data-target=\"mobile-menu\" data-action=\"toggle\" aria-label=\"Menú\">
      <i class=\"mdi mdi-menu mdi-24px\"></i>
    </button>
    <a href=\"{{url('home')}}\">
      <img src=\"{{ asset(logoMobile(config.logo)) }}\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\">
    </a>
    <div>
      <a href=\"{{ url('cart-view') }}\" class=\"btn\" id=\"carrito\" aria-label=\"Ir al carrito\">
        <i class=\"mdi mdi-cart mdi-24px\"></i>
      </a>
      {% if app.user is empty %}
        <a href=\"{{ url('app_login') }}\" class=\"btn ml-3\" aria-label=\"Login\">
          <i class=\"mdi mdi-account mdi-24px\"></i>
        </a>
      {% endif %}
    </div>
  </div>
  <div class=\"search\">
    <form class=\"input-group\" action=\"{{url('search')}}\" method=\"GET\" accept-charset=\"utf-8\">
      <input type=\"text\" class=\"form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar...\" value=\"{{textSearch ?? ''}}\">
      <div class=\"input-group-append\">
        <button class=\"btn btn-light text-dark btn-outline-secondary no-box-shadow\" type=\"submit\">Buscar</button>
      </div>
    </form>
  </div>
</header>
<nav class=\"slide-menu theme-bg\" id=\"mobile-menu\">
  <div class=\"controls\">
    <a href=\"{{url('home')}}\" class=\"btn slide-menu__control logo\">
      <img src=\"{{ asset(logoMobile(config.logo)) }}\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\" style=\"max-width:100%;max-height:100%;\">
    </a>
    <button type=\"button\" class=\"btn slide-menu__control\" data-action=\"close\">Cerrar</button>
  </div>
  <ul>
    <li>
      <a href=\"{{ url('home') }}\">
        <i class=\"mdi mdi-home mr-2\"></i>Inicio</a>
    </li>
    {% if categorias is defined %}
      <li>
        <a href=\"#\">PRODUCTOS</a>
        <ul>
          {% for cat in categorias %}
            <li>
              <a href=\"#\">{{ cat.nombre }}
                ({{ cat.num_art }})</a>
              <ul>
                {% for fam in cat.fam %}
                  <li>
                    <a href=\"{{ url('familia', {param: fam.url}) }}\">{{ fam.nombre }}
                      ({{fam.num_art}})</a>
                    {% if fam.sub is not empty %}
                      <ul>
                        {% for sub in fam.sub %}
                          {% if sub.nombre is not empty %}
                            <li>
                              <a href=\"{{ url('subfamilia', {param: sub.url}) }}\">{{ sub.nombre }}</a>
                            </li>
                          {% endif %}
                        {% endfor %}
                      </ul>
                    {% endif %}
                  </li>
                {% endfor %}
              </ul>
            </li>
          {% endfor %}
        </ul>
      </li>
    {% elseif familias is defined %}
      <li>
        <a href=\"#\">PRODUCTOS</a>
        <ul>
          {% for fam in familias %}
            <li>
              <a href=\"{{ url('familia', {param: fam.url}) }}\">{{ fam.nombre }}
                ({{ fam.num_art }})</a>
              {% if fam.sub is not empty %}
                <ul>
                  {% for sub in fam.sub %}
                    <li>
                      <a href=\"{{ url('subfamilia', {param: sub.url}) }}\">{{ sub.nombre }}</a>
                    </li>
                  {% endfor %}
                </ul>
              {% endif %}
            </li>
          {% endfor %}
        </ul>
      </li>
    {% endif %}
    {% if config.data.blog_url is not empty %}
      <li>
        <a href=\"{{ config.data.blog_url }}\" target=\"_blank\" rel=\"noreferrer\">
          <i class=\"mdi mdi-post-outline mr-2\"></i>BLOG</a>
      </li>
    {% endif %}
    {% if config.data.sat_url is not empty %}
      <li>
        <a href=\"{{ config.data.sat_url }}\" target=\"_blank\" rel=\"noreferrer\">
          <i class=\"mdi mdi-tools mr-2\"></i>SAT</a>
      </li>
    {% endif %}
    {% if app.user %}
      {% if app.user.isClient is empty %}
        <li>
          <a href=\"{{url('cart-view')}}\">
            <i class=\"mdi mdi-cart mr-1\"></i>CARRITO ACTUAL</a>
        </li>
        <li>
          <a href=\"{{ url('gestion') }}\">
            <i class=\"mdi mdi-text-box-multiple-outline mr-1\"></i>VENTAS</a>
        </li>
        <li>
          <a href=\"{{ url('gestion-carritos-lista') }}\">
            <i class=\"mdi mdi-cart-arrow-right mr-1\"></i>CARRITOS ACTIVOS</a>
        </li>
      {% else %}
        <li>
          <a href=\"{{url('cart-view')}}\">
            <i class=\"mdi mdi-cart mr-1\"></i>CARRITO</a>
        </li>
      {% endif %}
      {% if app.user.getClient != 0 %}
        <li>
          <a href=\"{{url('documentos',{'tipo': 2})}}\">
            <i class=\"mdi mdi-clipboard-outline mr-1\"></i>PEDIDOS</a>
        </li>
        <li>
          <a href=\"{{url('documentos',{'tipo': 4})}}\">
            <i class=\"mdi mdi-clipboard-text-outline mr-1\"></i>ALBARANES</a>
        </li>
        <li>
          <a href=\"{{url('documentos',{'tipo': 8})}}\">
            <i class=\"mdi mdi-clipboard-check-outline mr-1\"></i>FACTURAS</a>
        </li>
        <li>
          <a href=\"{{url('cliente-top')}}\">
            <i class=\"mdi mdi-chart-bar-stacked mr-1\"></i>TOP COMPRAS</a>
        </li>
      {% endif %}
      {% if app.user.isClient is empty %}
        <li>
          <a href=\"{{url('cliente-seleccion')}}\">
            <i class=\"mdi mdi-account-search mr-1\"></i>SELECCIONAR CLIENTE</a>
        </li>
      {% endif %}
      <li>
        <a href=\"{{ url('app_logout') }}\">
          <i class=\"mdi mdi-logout mr-2\"></i>CERRAR SESIÓN</a>
      </li>
    {% endif %}
  </ul>
</nav>
", "header/header.mobile.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\header\\header.mobile.html.twig");
    }
}
