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

/* header/header.html.twig */
class __TwigTemplate_ad728d72b5d4d451cc9ddddcc8ad8cf7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.html.twig"));

        // line 1
        echo "<div style=\"background-color: #C3C3C4; width:100%\" class=\"prepre-header\">
\t<div class=\"pre-header d-tablet\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "empresa", [], "any", false, false, false, 4), "telefono", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"tel:";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "empresa", [], "any", false, false, false, 6), "telefonoUri", [], "any", false, false, false, 6), "html", null, true);
            echo "\" class=\"mr-4\">
\t\t\t\t\t\t<i class=\"mdi mdi-phone mdi-18px mr-1\"></i>
\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "empresa", [], "any", false, false, false, 8), "telefono", [], "any", false, false, false, 8), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 11
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "empresa", [], "any", false, false, false, 11), "whatsapp", [], "any", false, false, false, 11)) {
            // line 12
            echo "\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"https://wa.me/34";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "empresa", [], "any", false, false, false, 13), "whatsapp", [], "any", false, false, false, 13), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-18px mr-1\"></i>
\t\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "empresa", [], "any", false, false, false, 15), "whatsapp", [], "any", false, false, false, 15), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 18
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "empresa", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"mailto:";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "empresa", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"mr-4\">
\t\t\t\t\t\t<i class=\"mdi mdi-email mdi-18px mr-1\"></i>
\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "empresa", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t</div>
\t\t<div class=\"horarioresponsive\">
\t\t\t<i class=\"mdi mdi-clock mdi-18px mr-1\"></i>
\t\t\t<span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "empresa", [], "any", false, false, false, 29), "horario", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
\t\t</div>

\t</div>
</div>


";
        // line 37
        $this->loadTemplate("header/header.mobile.html.twig", "header/header.html.twig", 37)->display($context);
        // line 38
        echo "<div class=\"container2\">
\t<header class=\"d-tablet\" id=\"header-main\">

\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"logoheader\">
\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "logo", [], "any", false, false, false, 42)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "nombreWeb", [], "any", false, false, false, 42), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "nombreWeb", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
\t\t</a>
\t\t<div class=\"search\">
\t\t\t<form class=\"input-group\" action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("search");
        echo "\" method=\"GET\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"text\" class=\"inputsearchheader form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar en la tienda...\" value=\"";
        // line 46
        (((array_key_exists("textSearch", $context) &&  !(null === (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 46, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 46, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"submit\" class=\"botonbuscarheader btn btn-light text-dark btn-outline-secondary no-box-shadow\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/buscador.svg"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Buscar\" title=\"Buscar\"></button>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t";
        // line 53
        echo "\t\t\t<div class=\"d-flex align-items-center ml-3\">
\t\t\t\t";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
            echo "\" class=\"nav-item mr-3\">
\t\t\t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carrito.svg"), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"Carrito\" title=\"Carrito\">
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo "\" class=\"nav-item\">
\t\t\t\t\t\t<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/login.svg"), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"Login\" title=\"Login\">
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 62
            echo "
\t\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
            echo "\" class=\"nav-item mr-3\">
\t\t\t\t\t\t<img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carrito.svg"), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"Carrito\" title=\"Carrito\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t<span data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t\t\t<img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/login.svg"), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"Gestion\" title=\"Gestion\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "isAdmin", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
                echo "\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\tADMINISTRACIÓN
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion");
            echo "\">
\t\t\t\t\t\t\t\t\tGESTIÓN
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-seleccion");
            echo "\">
\t\t\t\t\t\t\t\t\tSELECCIONAR CLIENTE
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\tCERRAR SESIÓN
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 96
        echo "\t\t\t</div>
\t\t</div>

\t</header>
</div>

<div class=\"theme-bg menuinferior\" style=\"box-shadow: 0px 2px 8px 0px #000000CC;\">
\t<button id=\"menu-toggle\" class=\"menu-toggle d-none\" style=\"margin:0 auto\">
\t\t<i style=\"color:white !important\" class=\"mdi mdi-menu mdi-24px \"></i>
\t</button>

\t<form class=\"input-group\" action=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("search");
        echo "\" method=\"GET\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"text\" class=\"inputsearchheader form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar en la tienda...\" value=\"";
        // line 108
        (((array_key_exists("textSearch", $context) &&  !(null === (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 108, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["textSearch"]) || array_key_exists("textSearch", $context) ? $context["textSearch"] : (function () { throw new RuntimeError('Variable "textSearch" does not exist.', 108, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"submit\" class=\"botonbuscarheader btn btn-light text-dark btn-outline-secondary no-box-shadow\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/buscador.svg"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Buscar\" title=\"Buscar\"></button>
\t\t\t\t</div>
\t</form>

\t<nav id=\"nav-main\" class=\"main-nav d-tablet header-navigation d-flex justify-content-between flex-grow-1 px-5\">
\t\t<div>
\t\t\t<a href=\"#\" class=\"nav-item enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class=\"mdi mdi-format-list-text mr-2\"></i>CATÁLOGO
\t\t\t</a>
\t\t\t";
        // line 119
        if (array_key_exists("categorias", $context)) {
            // line 120
            echo "\t\t\t\t";
            $this->loadTemplate("main/categorias.html.twig", "header/header.html.twig", 120)->display($context);
            // line 121
            echo "\t\t\t";
        } elseif (array_key_exists("familias", $context)) {
            // line 122
            echo "\t\t\t\t";
            $this->loadTemplate("main/familias.html.twig", "header/header.html.twig", 122)->display($context);
            // line 123
            echo "\t\t\t";
        }
        // line 124
        echo "\t\t</div>
\t\t";
        // line 125
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 125, $this->source); })()), "data", [], "any", false, false, false, 125), "promocionesboolean", [], "any", false, false, false, 125)) {
            // line 126
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promociones");
            echo "\" class=\"enlacenavheader\">PROMOCIONES</a>
\t\t\t</span>
\t\t";
        }
        // line 130
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), "data", [], "any", false, false, false, 130), "quienessomosboolean", [], "any", false, false, false, 130)) {
            // line 131
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quienessomos");
            echo "\" class=\"enlacenavheader\">QUIENES SOMOS</a>
\t\t\t</span>
\t\t";
        }
        // line 135
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 135, $this->source); })()), "data", [], "any", false, false, false, 135), "recursosboolean", [], "any", false, false, false, 135)) {
            // line 136
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recursos");
            echo "\" class=\"enlacenavheader\">RECURSOS</a>
\t\t\t</span>
\t\t";
        }
        // line 140
        echo "\t\t";
        if ((array_key_exists("cms", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 140, $this->source); })()), "data", [], "any", false, false, false, 140), "mostrar_info_cms_nav", [], "any", false, false, false, 140))) {
            // line 141
            echo "\t\t\t<div class=\"nav-item\">
\t\t\t\t<span data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\tINFORMACIÓN
\t\t\t\t</span>
\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 147
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos", ["item" => twig_get_attribute($this->env, $this->source, $context["item"], "web_url", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\t";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 150), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 154, $this->source); })()), "formularioRecogida", [], "any", false, false, false, 154)) {
                // line 155
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"";
                // line 156
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("recogida");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\tFORMULARIO RECOGIDA
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 165
        echo "\t</nav>
\t<div id=\"dropdown-menu\" class=\"dropdown-menu d-none\">
\t\t<div>
\t\t\t<a href=\"#\" class=\"nav-item enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\tCATÁLOGO
\t\t\t</a>
\t\t\t";
        // line 171
        if (array_key_exists("categorias", $context)) {
            // line 172
            echo "\t\t\t\t<ul class=\"dropdown-menu submenu2 mobile-menu\" style=\"display: none;\">
\t\t\t\t\t";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 174
                echo "\t\t\t\t\t\t";
                $context["categoria_id"] = twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "url", [], "any", false, false, false, 174), "-"), 0, [], "array", false, false, false, 174);
                // line 175
                echo "\t\t\t\t\t\t<li class=\"has-submenu py-1 item-menu-cat\" data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["categoria_id"]) || array_key_exists("categoria_id", $context) ? $context["categoria_id"] : (function () { throw new RuntimeError('Variable "categoria_id" does not exist.', 175, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("categoria-grid", ["webUrl" => twig_get_attribute($this->env, $this->source, $context["categoria"], "url", [], "any", false, false, false, 177)]), "html", null, true);
                echo "\" class=\"dropdown-item flex-grow-1 d-flex align-items-center\" style=\"height: 35px;\">
\t\t\t\t\t\t\t\t\t<span>";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nombre", [], "any", false, false, false, 178), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"btn-toggle-submenu btn btn-sm mr-2\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-";
                // line 184
                echo twig_escape_filter($this->env, (isset($context["categoria_id"]) || array_key_exists("categoria_id", $context) ? $context["categoria_id"] : (function () { throw new RuntimeError('Variable "categoria_id" does not exist.', 184, $this->source); })()), "html", null, true);
                echo "\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"fam-items\">
\t\t\t\t\t\t\t\t\t";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["categoria"], "fam", [], "any", false, false, false, 186));
                foreach ($context['_seq'] as $context["_key"] => $context["familia"]) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"";
                    // line 188
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["familia"], "url", [], "any", false, false, false, 188)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["familia"], "nombre", [], "any", false, false, false, 188), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["familia"], "sub", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["subfamilia"]) {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"service-box-v1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 192
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["subfamilia"], "url", [], "any", false, false, false, 192)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subfamilia"], "nombre", [], "any", false, false, false, 192), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subfamilia'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "\t\t\t\t</ul>
\t\t\t";
        } elseif (        // line 203
array_key_exists("familias", $context)) {
            // line 204
            echo "\t\t\t\t<ul class=\"dropdown-menu submenu2 mobile-menu\" style=\"display: none;\">
\t\t\t\t\t";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["familias"]) || array_key_exists("familias", $context) ? $context["familias"] : (function () { throw new RuntimeError('Variable "familias" does not exist.', 205, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["familia"]) {
                // line 206
                echo "\t\t\t\t\t\t";
                $context["familia_id"] = twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["familia"], "url", [], "any", false, false, false, 206), "-"), 0, [], "array", false, false, false, 206);
                // line 207
                echo "\t\t\t\t\t\t<li class=\"has-submenu py-1 item-menu-cat\" data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["familia_id"]) || array_key_exists("familia_id", $context) ? $context["familia_id"] : (function () { throw new RuntimeError('Variable "familia_id" does not exist.', 207, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["familia"], "url", [], "any", false, false, false, 209)]), "html", null, true);
                echo "\" class=\"dropdown-item flex-grow-1 d-flex align-items-center\" style=\"height: 35px;\">
\t\t\t\t\t\t\t\t\t<span>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["familia"], "nombre", [], "any", false, false, false, 210), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"btn-toggle-submenu btn btn-sm mr-2\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["familia_id"]) || array_key_exists("familia_id", $context) ? $context["familia_id"] : (function () { throw new RuntimeError('Variable "familia_id" does not exist.', 216, $this->source); })()), "html", null, true);
                echo "\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"fam-items\">
\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["familia"], "sub", [], "any", false, false, false, 219));
                foreach ($context['_seq'] as $context["_key"] => $context["subfamilia"]) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"service-box-v1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 221
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["subfamilia"], "url", [], "any", false, false, false, 221)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subfamilia"], "nombre", [], "any", false, false, false, 221), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subfamilia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 231
        echo "\t\t</div>
\t\t";
        // line 232
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 232, $this->source); })()), "data", [], "any", false, false, false, 232), "promocionesboolean", [], "any", false, false, false, 232)) {
            // line 233
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 234
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promociones");
            echo "\" class=\"enlacenavheader\">PROMOCIONES</a>
\t\t\t</span>
\t\t";
        }
        // line 237
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 237, $this->source); })()), "data", [], "any", false, false, false, 237), "quienessomosboolean", [], "any", false, false, false, 237)) {
            // line 238
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 239
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quienessomos");
            echo "\" class=\"enlacenavheader\">QUIENES SOMOS</a>
\t\t\t</span>
\t\t";
        }
        // line 242
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 242, $this->source); })()), "data", [], "any", false, false, false, 242), "recursosboolean", [], "any", false, false, false, 242)) {
            // line 243
            echo "\t\t\t<span>
\t\t\t\t<a href=\"";
            // line 244
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recursos");
            echo "\" class=\"enlacenavheader\">RECURSOS</a>
\t\t\t</span>
\t\t";
        }
        // line 247
        echo "\t\t";
        if ((array_key_exists("cms", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 247, $this->source); })()), "data", [], "any", false, false, false, 247), "mostrar_info_cms_nav", [], "any", false, false, false, 247))) {
            // line 248
            echo "\t\t\t<div class=\"nav-item\" style=\"text-align:center\">
\t\t\t\t<span class=\"enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\tINFORMACIÓN
\t\t\t\t</span>
\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 253, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 254
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos", ["item" => twig_get_attribute($this->env, $this->source, $context["item"], "web_url", [], "any", false, false, false, 255)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\t";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 257), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 261, $this->source); })()), "formularioRecogida", [], "any", false, false, false, 261)) {
                // line 262
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"";
                // line 263
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("recogida");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\tFORMULARIO RECOGIDA
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 272
        echo "\t</div>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function () { // Menu móvil hamburguesa
const menuToggle = document.getElementById(\"menu-toggle\");
const dropdownMenu = document.getElementById(\"dropdown-menu\");

menuToggle.addEventListener(\"click\", function () {
dropdownMenu.classList.toggle(\"active\");
// No mostramos automáticamente el submenú de catálogo
});

// Manejadores para el botón del catálogo - uno para desktop y otro para móvil
const desktopCatalogLink = document.querySelector('#nav-main .enlacenavheader[data-toggle=\"dropdown\"]');
const desktopSubmenu = document.querySelector('#nav-main .submenu2');

const mobileCatalogLink = document.querySelector('#dropdown-menu .enlacenavheader[data-toggle=\"dropdown\"]');
const mobileSubmenu = document.querySelector('#dropdown-menu .submenu2');

// Manejador para versión desktop
if (desktopCatalogLink && desktopSubmenu) {
desktopCatalogLink.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();

if (desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.remove('show');
desktopSubmenu.style.display = 'none';
} else {
desktopSubmenu.classList.add('show');
desktopSubmenu.style.display = 'block';
desktopSubmenu.style.marginTop = '34px';
}
});
}

// Manejador para versión móvil
if (mobileCatalogLink && mobileSubmenu) {
mobileCatalogLink.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();
console.log(\"Mobile catalog click\");

if (mobileSubmenu.classList.contains('show')) {
mobileSubmenu.classList.remove('show');
mobileSubmenu.style.display = 'none';
} else {
mobileSubmenu.classList.add('show');
mobileSubmenu.style.display = 'block !important';
}
});
}

// Función para abrir el catálogo desde el slider
window.openCatalogMenu = function () {
if (window.innerWidth >= 768) { // Desktop
if (desktopSubmenu && ! desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.add('show');
desktopSubmenu.style.display = 'block';
desktopSubmenu.style.marginTop = '34px';
}
} else { // Mobile
if (mobileSubmenu && ! mobileSubmenu.classList.contains('show')) {
dropdownMenu.classList.add('active');
mobileSubmenu.classList.add('show');
mobileSubmenu.style.display = 'block';
}
}
};

// Cerrar al hacer clic fuera (desktop)
document.addEventListener('click', function (event) {
if (desktopSubmenu) {
const isClickInsideMenu = desktopSubmenu.contains(event.target);
const isClickOnCatalogLink = desktopCatalogLink && desktopCatalogLink.contains(event.target);
const isClickOnCatalogButton = event.target.classList.contains('btnsliderprincipal');

if (! isClickInsideMenu && ! isClickOnCatalogLink && ! isClickOnCatalogButton && desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.remove('show');
desktopSubmenu.style.display = 'none';
}
}
});

// Evitar que se cierre al hacer clic dentro del menú (desktop)
if (desktopSubmenu) {
desktopSubmenu.addEventListener('click', function (e) {
e.stopPropagation();
});
}

// Manejo de botones de expansión en móvil
const toggleButtons = document.querySelectorAll('.btn-toggle-submenu');
toggleButtons.forEach(button => {
button.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();

const menuItem = this.closest('.has-submenu');
const submenu = menuItem.querySelector('.submenu3');

// Cerrar otros submenús abiertos
menuItem.closest('ul').querySelectorAll('.submenu3.show').forEach(menu => {
if (menu !== submenu) {
menu.classList.remove('show');
menu.style.display = 'none';
menu.closest('.has-submenu').querySelector('.btn-toggle-submenu i').classList.replace('mdi-chevron-up', 'mdi-chevron-down');
}
});

// Toggle actual submenú
if (submenu.classList.contains('show')) {
submenu.classList.remove('show');
submenu.style.display = 'none';
this.querySelector('i').classList.replace('mdi-chevron-up', 'mdi-chevron-down');
} else {
submenu.classList.add('show');
submenu.style.display = 'block';
this.querySelector('i').classList.replace('mdi-chevron-down', 'mdi-chevron-up');
}
});
});
});
\t</script>

\t<style>
\t\t/* Estilos para el menú móvil */
\t\t@media(max-width: 767.98px) {
\t\t\t.mobile-menu {
\t\t\t\tdisplay: none !important;
\t\t\t\tposition: static !important;
\t\t\t\tmargin: 0 !important;
\t\t\t\tpadding: 0.5rem 0 !important;
\t\t\t\ttransform: none !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmax-height: 80vh !important;
\t\t\t\toverflow-y: auto !important;
\t\t\t}

\t\t\t.mobile-menu.show {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t#dropdown-menu .submenu3.show {
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t.submenu2 {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tbox-shadow: 0 0 5px 0 #00000000;
\t\t\t\tbackground-color: #dcdcdc99;
\t\t\t}

\t\t\t.has-submenu .d-flex {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-toggle-submenu {
\t\t\t\tpadding: 0.25rem 0.5rem;
\t\t\t\tbackground: none;
\t\t\t\tborder: none;
\t\t\t\tcolor: white;
\t\t\t}

\t\t\t.btn-toggle-submenu:focus {
\t\t\t\toutline: none;
\t\t\t}

\t\t\t.submenu3.show {
\t\t\t\tposition: static !important;
\t\t\t\ttransform: none !important;
\t\t\t\twidth: 100%;
\t\t\t\tmargin-left: 1rem;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\t\t\tpadding: 10px !important;
\t\t\t}

\t\t\t.submenu3 .fam-items .title {
\t\t\t\tfont-size: 18px !important;
\t\t\t}

\t\t\t.mobile-menu .has-submenu {
\t\t\t\tborder-bottom: 1px solid rgba(255, 255, 255, 0.2);
\t\t\t}

\t\t\t.mobile-menu .has-submenu:last-child {
\t\t\t\tborder-bottom: none;
\t\t\t}

\t\t\t.dropdown-menu.active {
\t\t\t\tdisplay: block !important;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: inherit;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 0;
\t\t\t\tpadding: 1rem;
\t\t\t}

\t\t\t#dropdown-menu span,
\t\t\t#dropdown-menu a.enlacenavheader {
\t\t\t\tdisplay: block;
\t\t\t\tpadding: 0.5rem 0;
\t\t\t\tcolor: white;
\t\t\t\tborder-bottom: 1px solid rgba(255, 255, 255, 0.2);
\t\t\t}

\t\t\t.fam-items {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t.fam-items > div {
\t\t\t\tpadding: 0.5rem 0;
\t\t\t}

\t\t\t.service-box-v1 a {
\t\t\t\tcolor: rgba(255, 255, 255, 0.8) !important;
\t\t\t}

\t\t\t.title {
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: white !important;
\t\t\t}
\t\t}
\t</style>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 272,  625 => 269,  616 => 263,  613 => 262,  610 => 261,  600 => 257,  595 => 255,  592 => 254,  588 => 253,  581 => 248,  578 => 247,  572 => 244,  569 => 243,  566 => 242,  560 => 239,  557 => 238,  554 => 237,  548 => 234,  545 => 233,  543 => 232,  540 => 231,  536 => 229,  526 => 224,  515 => 221,  512 => 220,  508 => 219,  502 => 216,  493 => 210,  489 => 209,  483 => 207,  480 => 206,  476 => 205,  473 => 204,  471 => 203,  468 => 202,  459 => 198,  451 => 195,  440 => 192,  437 => 191,  433 => 190,  426 => 188,  423 => 187,  419 => 186,  414 => 184,  405 => 178,  401 => 177,  395 => 175,  392 => 174,  388 => 173,  385 => 172,  383 => 171,  375 => 165,  370 => 162,  361 => 156,  358 => 155,  355 => 154,  345 => 150,  340 => 148,  337 => 147,  333 => 146,  326 => 141,  323 => 140,  317 => 137,  314 => 136,  311 => 135,  305 => 132,  302 => 131,  299 => 130,  293 => 127,  290 => 126,  288 => 125,  285 => 124,  282 => 123,  279 => 122,  276 => 121,  273 => 120,  271 => 119,  259 => 110,  254 => 108,  250 => 107,  237 => 96,  227 => 89,  219 => 84,  211 => 79,  207 => 77,  199 => 73,  197 => 72,  190 => 68,  183 => 64,  179 => 63,  176 => 62,  170 => 59,  166 => 58,  161 => 56,  156 => 55,  154 => 54,  151 => 53,  144 => 48,  139 => 46,  135 => 45,  125 => 42,  121 => 41,  116 => 38,  114 => 37,  104 => 29,  98 => 25,  92 => 22,  87 => 20,  84 => 19,  81 => 18,  75 => 15,  70 => 13,  67 => 12,  64 => 11,  58 => 8,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"background-color: #C3C3C4; width:100%\" class=\"prepre-header\">
\t<div class=\"pre-header d-tablet\">
\t\t<div class=\"row\">
\t\t\t{% if config.empresa.telefono %}
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"tel:{{ config.empresa.telefonoUri }}\" class=\"mr-4\">
\t\t\t\t\t\t<i class=\"mdi mdi-phone mdi-18px mr-1\"></i>
\t\t\t\t\t\t{{ config.empresa.telefono }}</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if config.empresa.whatsapp %}
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"https://wa.me/34{{ config.empresa.whatsapp }}\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-18px mr-1\"></i>
\t\t\t\t\t\t{{ config.empresa.whatsapp }}</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if config.empresa.email %}
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"mailto:{{ config.empresa.email }}\" class=\"mr-4\">
\t\t\t\t\t\t<i class=\"mdi mdi-email mdi-18px mr-1\"></i>
\t\t\t\t\t\t{{ config.empresa.email }}</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t\t<div class=\"horarioresponsive\">
\t\t\t<i class=\"mdi mdi-clock mdi-18px mr-1\"></i>
\t\t\t<span>{{ config.empresa.horario }}</span>
\t\t</div>

\t</div>
</div>


{# MOBILE #}
{% include 'header/header.mobile.html.twig' %}
<div class=\"container2\">
\t<header class=\"d-tablet\" id=\"header-main\">

\t\t<a href=\"{{ url('home') }}\" class=\"logoheader\">
\t\t\t<img src=\"{{ asset(config.logo) }}\" title=\"{{ config.nombreWeb }}\" alt=\"{{ config.nombreWeb }}\">
\t\t</a>
\t\t<div class=\"search\">
\t\t\t<form class=\"input-group\" action=\"{{ url('search') }}\" method=\"GET\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"text\" class=\"inputsearchheader form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar en la tienda...\" value=\"{{ textSearch ?? '' }}\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"submit\" class=\"botonbuscarheader btn btn-light text-dark btn-outline-secondary no-box-shadow\"><img src=\"{{ asset('images/buscador.svg') }}\" width=\"20\" height=\"20\" alt=\"Buscar\" title=\"Buscar\"></button>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t{# Login y Carrito movidos al lado del buscador #}
\t\t\t<div class=\"d-flex align-items-center ml-3\">
\t\t\t\t{% if not app.user %}
\t\t\t\t\t<a href=\"{{ url('cart-view') }}\" class=\"nav-item mr-3\">
\t\t\t\t\t\t<img src=\"{{ asset('images/carrito.svg') }}\" width=\"40\" height=\"40\" alt=\"Carrito\" title=\"Carrito\">
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ url('app_login') }}\" class=\"nav-item\">
\t\t\t\t\t\t<img src=\"{{ asset('images/login.svg') }}\" width=\"40\" height=\"40\" alt=\"Login\" title=\"Login\">
\t\t\t\t\t</a>
\t\t\t\t{% else %}

\t\t\t\t\t<a href=\"{{ url('cart-view') }}\" class=\"nav-item mr-3\">
\t\t\t\t\t\t<img src=\"{{ asset('images/carrito.svg') }}\" width=\"40\" height=\"40\" alt=\"Carrito\" title=\"Carrito\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t<span data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/login.svg') }}\" width=\"40\" height=\"40\" alt=\"Gestion\" title=\"Gestion\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% if app.user.isAdmin %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ url('admin') }}\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\tADMINISTRACIÓN
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"{{ url('gestion') }}\">
\t\t\t\t\t\t\t\t\tGESTIÓN
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"{{ url('cliente-seleccion') }}\">
\t\t\t\t\t\t\t\t\tSELECCIONAR CLIENTE
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item py-2\" href=\"{{ url('app_logout') }}\">
\t\t\t\t\t\t\t\t\tCERRAR SESIÓN
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>

\t</header>
</div>

<div class=\"theme-bg menuinferior\" style=\"box-shadow: 0px 2px 8px 0px #000000CC;\">
\t<button id=\"menu-toggle\" class=\"menu-toggle d-none\" style=\"margin:0 auto\">
\t\t<i style=\"color:white !important\" class=\"mdi mdi-menu mdi-24px \"></i>
\t</button>

\t<form class=\"input-group\" action=\"{{ url('search') }}\" method=\"GET\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"text\" class=\"inputsearchheader form-control no-box-shadow text-dark\" name=\"q\" placeholder=\"Buscar en la tienda...\" value=\"{{ textSearch ?? '' }}\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"submit\" class=\"botonbuscarheader btn btn-light text-dark btn-outline-secondary no-box-shadow\"><img src=\"{{ asset('images/buscador.svg') }}\" width=\"20\" height=\"20\" alt=\"Buscar\" title=\"Buscar\"></button>
\t\t\t\t</div>
\t</form>

\t<nav id=\"nav-main\" class=\"main-nav d-tablet header-navigation d-flex justify-content-between flex-grow-1 px-5\">
\t\t<div>
\t\t\t<a href=\"#\" class=\"nav-item enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class=\"mdi mdi-format-list-text mr-2\"></i>CATÁLOGO
\t\t\t</a>
\t\t\t{% if categorias is defined %}
\t\t\t\t{% include 'main/categorias.html.twig' %}
\t\t\t{% elseif familias is defined %}
\t\t\t\t{% include 'main/familias.html.twig' %}
\t\t\t{% endif %}
\t\t</div>
\t\t{% if config.data.promocionesboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('promociones') }}\" class=\"enlacenavheader\">PROMOCIONES</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if config.data.quienessomosboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('quienessomos') }}\" class=\"enlacenavheader\">QUIENES SOMOS</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if config.data.recursosboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('recursos') }}\" class=\"enlacenavheader\">RECURSOS</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if cms is defined and config.data.mostrar_info_cms_nav %}
\t\t\t<div class=\"nav-item\">
\t\t\t\t<span data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\tINFORMACIÓN
\t\t\t\t</span>
\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t{% for item in cms %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"{{ url('textos', { item: item.web_url})}}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\t{{item.nombre}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if config.formularioRecogida %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"{{ url('recogida')}}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\tFORMULARIO RECOGIDA
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endif %}
\t</nav>
\t<div id=\"dropdown-menu\" class=\"dropdown-menu d-none\">
\t\t<div>
\t\t\t<a href=\"#\" class=\"nav-item enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\tCATÁLOGO
\t\t\t</a>
\t\t\t{% if categorias is defined %}
\t\t\t\t<ul class=\"dropdown-menu submenu2 mobile-menu\" style=\"display: none;\">
\t\t\t\t\t{% for categoria in categorias %}
\t\t\t\t\t\t{% set categoria_id = categoria.url|split('-')[0] %}
\t\t\t\t\t\t<li class=\"has-submenu py-1 item-menu-cat\" data-id=\"{{ categoria_id }}\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ url('categoria-grid', { 'webUrl': categoria.url }) }}\" class=\"dropdown-item flex-grow-1 d-flex align-items-center\" style=\"height: 35px;\">
\t\t\t\t\t\t\t\t\t<span>{{ categoria.nombre }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"btn-toggle-submenu btn btn-sm mr-2\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-{{ categoria_id }}\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"fam-items\">
\t\t\t\t\t\t\t\t\t{% for familia in categoria.fam %}
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"title\" href=\"{{ url('familia-grid', { 'param': familia.url }) }}\">{{ familia.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for subfamilia in familia.sub %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"service-box-v1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('subfamilia', { 'param': subfamilia.url }) }}\">{{ subfamilia.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% elseif familias is defined %}
\t\t\t\t<ul class=\"dropdown-menu submenu2 mobile-menu\" style=\"display: none;\">
\t\t\t\t\t{% for familia in familias %}
\t\t\t\t\t\t{% set familia_id = familia.url|split('-')[0] %}
\t\t\t\t\t\t<li class=\"has-submenu py-1 item-menu-cat\" data-id=\"{{ familia_id }}\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ url('familia-grid', { 'param': familia.url }) }}\" class=\"dropdown-item flex-grow-1 d-flex align-items-center\" style=\"height: 35px;\">
\t\t\t\t\t\t\t\t\t<span>{{ familia.nombre }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"btn-toggle-submenu btn btn-sm mr-2\" type=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-{{ familia_id }}\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"fam-items\">
\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t{% for subfamilia in familia.sub %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"service-box-v1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('subfamilia', { 'param': subfamilia.url }) }}\">{{ subfamilia.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t</div>
\t\t{% if config.data.promocionesboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('promociones') }}\" class=\"enlacenavheader\">PROMOCIONES</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if config.data.quienessomosboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('quienessomos') }}\" class=\"enlacenavheader\">QUIENES SOMOS</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if config.data.recursosboolean %}
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('recursos') }}\" class=\"enlacenavheader\">RECURSOS</a>
\t\t\t</span>
\t\t{% endif %}
\t\t{% if cms is defined and config.data.mostrar_info_cms_nav %}
\t\t\t<div class=\"nav-item\" style=\"text-align:center\">
\t\t\t\t<span class=\"enlacenavheader\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\tINFORMACIÓN
\t\t\t\t</span>
\t\t\t\t<ul class=\"dropdown-menu container w-auto mt-1\">
\t\t\t\t\t{% for item in cms %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"{{ url('textos', { item: item.web_url})}}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\t{{item.nombre}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if config.formularioRecogida %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item py-3\" href=\"{{ url('recogida')}}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-text-box-outline mr-1\"></i>
\t\t\t\t\t\t\t\tFORMULARIO RECOGIDA
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endif %}
\t</div>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function () { // Menu móvil hamburguesa
const menuToggle = document.getElementById(\"menu-toggle\");
const dropdownMenu = document.getElementById(\"dropdown-menu\");

menuToggle.addEventListener(\"click\", function () {
dropdownMenu.classList.toggle(\"active\");
// No mostramos automáticamente el submenú de catálogo
});

// Manejadores para el botón del catálogo - uno para desktop y otro para móvil
const desktopCatalogLink = document.querySelector('#nav-main .enlacenavheader[data-toggle=\"dropdown\"]');
const desktopSubmenu = document.querySelector('#nav-main .submenu2');

const mobileCatalogLink = document.querySelector('#dropdown-menu .enlacenavheader[data-toggle=\"dropdown\"]');
const mobileSubmenu = document.querySelector('#dropdown-menu .submenu2');

// Manejador para versión desktop
if (desktopCatalogLink && desktopSubmenu) {
desktopCatalogLink.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();

if (desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.remove('show');
desktopSubmenu.style.display = 'none';
} else {
desktopSubmenu.classList.add('show');
desktopSubmenu.style.display = 'block';
desktopSubmenu.style.marginTop = '34px';
}
});
}

// Manejador para versión móvil
if (mobileCatalogLink && mobileSubmenu) {
mobileCatalogLink.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();
console.log(\"Mobile catalog click\");

if (mobileSubmenu.classList.contains('show')) {
mobileSubmenu.classList.remove('show');
mobileSubmenu.style.display = 'none';
} else {
mobileSubmenu.classList.add('show');
mobileSubmenu.style.display = 'block !important';
}
});
}

// Función para abrir el catálogo desde el slider
window.openCatalogMenu = function () {
if (window.innerWidth >= 768) { // Desktop
if (desktopSubmenu && ! desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.add('show');
desktopSubmenu.style.display = 'block';
desktopSubmenu.style.marginTop = '34px';
}
} else { // Mobile
if (mobileSubmenu && ! mobileSubmenu.classList.contains('show')) {
dropdownMenu.classList.add('active');
mobileSubmenu.classList.add('show');
mobileSubmenu.style.display = 'block';
}
}
};

// Cerrar al hacer clic fuera (desktop)
document.addEventListener('click', function (event) {
if (desktopSubmenu) {
const isClickInsideMenu = desktopSubmenu.contains(event.target);
const isClickOnCatalogLink = desktopCatalogLink && desktopCatalogLink.contains(event.target);
const isClickOnCatalogButton = event.target.classList.contains('btnsliderprincipal');

if (! isClickInsideMenu && ! isClickOnCatalogLink && ! isClickOnCatalogButton && desktopSubmenu.classList.contains('show')) {
desktopSubmenu.classList.remove('show');
desktopSubmenu.style.display = 'none';
}
}
});

// Evitar que se cierre al hacer clic dentro del menú (desktop)
if (desktopSubmenu) {
desktopSubmenu.addEventListener('click', function (e) {
e.stopPropagation();
});
}

// Manejo de botones de expansión en móvil
const toggleButtons = document.querySelectorAll('.btn-toggle-submenu');
toggleButtons.forEach(button => {
button.addEventListener('click', function (e) {
e.preventDefault();
e.stopPropagation();

const menuItem = this.closest('.has-submenu');
const submenu = menuItem.querySelector('.submenu3');

// Cerrar otros submenús abiertos
menuItem.closest('ul').querySelectorAll('.submenu3.show').forEach(menu => {
if (menu !== submenu) {
menu.classList.remove('show');
menu.style.display = 'none';
menu.closest('.has-submenu').querySelector('.btn-toggle-submenu i').classList.replace('mdi-chevron-up', 'mdi-chevron-down');
}
});

// Toggle actual submenú
if (submenu.classList.contains('show')) {
submenu.classList.remove('show');
submenu.style.display = 'none';
this.querySelector('i').classList.replace('mdi-chevron-up', 'mdi-chevron-down');
} else {
submenu.classList.add('show');
submenu.style.display = 'block';
this.querySelector('i').classList.replace('mdi-chevron-down', 'mdi-chevron-up');
}
});
});
});
\t</script>

\t<style>
\t\t/* Estilos para el menú móvil */
\t\t@media(max-width: 767.98px) {
\t\t\t.mobile-menu {
\t\t\t\tdisplay: none !important;
\t\t\t\tposition: static !important;
\t\t\t\tmargin: 0 !important;
\t\t\t\tpadding: 0.5rem 0 !important;
\t\t\t\ttransform: none !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmax-height: 80vh !important;
\t\t\t\toverflow-y: auto !important;
\t\t\t}

\t\t\t.mobile-menu.show {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t#dropdown-menu .submenu3.show {
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t.submenu2 {
\t\t\t\tmargin-bottom: 30px !important;
\t\t\t\tbox-shadow: 0 0 5px 0 #00000000;
\t\t\t\tbackground-color: #dcdcdc99;
\t\t\t}

\t\t\t.has-submenu .d-flex {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-toggle-submenu {
\t\t\t\tpadding: 0.25rem 0.5rem;
\t\t\t\tbackground: none;
\t\t\t\tborder: none;
\t\t\t\tcolor: white;
\t\t\t}

\t\t\t.btn-toggle-submenu:focus {
\t\t\t\toutline: none;
\t\t\t}

\t\t\t.submenu3.show {
\t\t\t\tposition: static !important;
\t\t\t\ttransform: none !important;
\t\t\t\twidth: 100%;
\t\t\t\tmargin-left: 1rem;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\t\t\tpadding: 10px !important;
\t\t\t}

\t\t\t.submenu3 .fam-items .title {
\t\t\t\tfont-size: 18px !important;
\t\t\t}

\t\t\t.mobile-menu .has-submenu {
\t\t\t\tborder-bottom: 1px solid rgba(255, 255, 255, 0.2);
\t\t\t}

\t\t\t.mobile-menu .has-submenu:last-child {
\t\t\t\tborder-bottom: none;
\t\t\t}

\t\t\t.dropdown-menu.active {
\t\t\t\tdisplay: block !important;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: inherit;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: none;
\t\t\t\tmargin-top: 0;
\t\t\t\tpadding: 1rem;
\t\t\t}

\t\t\t#dropdown-menu span,
\t\t\t#dropdown-menu a.enlacenavheader {
\t\t\t\tdisplay: block;
\t\t\t\tpadding: 0.5rem 0;
\t\t\t\tcolor: white;
\t\t\t\tborder-bottom: 1px solid rgba(255, 255, 255, 0.2);
\t\t\t}

\t\t\t.fam-items {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t.fam-items > div {
\t\t\t\tpadding: 0.5rem 0;
\t\t\t}

\t\t\t.service-box-v1 a {
\t\t\t\tcolor: rgba(255, 255, 255, 0.8) !important;
\t\t\t}

\t\t\t.title {
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: white !important;
\t\t\t}
\t\t}
\t</style>
</div>", "header/header.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\header\\header.html.twig");
    }
}
