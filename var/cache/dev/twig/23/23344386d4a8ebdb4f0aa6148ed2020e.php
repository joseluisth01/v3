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

/* carrito/carrito.html.twig */
class __TwigTemplate_4744ccaf5a2b7743d3508ea1d0ae3051 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carrito/carrito.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<main class=\"container-fluid bg-white maincarrito\" style=\"min-height: 58.2vh;\">
\t\t<div class=\"containercarrito\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t<h1 class=\"font-weight-normal\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-cart mr-2\"></i>Carrito</h1>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"col-12 col-md-6 text-center text-lg-right\">
\t\t\t\t\t\t\t<h6 class=\"\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "getClientName", [], "any", false, false, false, 14), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 19
        if (twig_test_empty((isset($context["lineas"]) || array_key_exists("lineas", $context) ? $context["lineas"] : (function () { throw new RuntimeError('Variable "lineas" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "\t\t\t\t<div class=\"text-center mt-3 mb-5\">
\t\t\t\t\t<h1 class=\"px-3 py-5 my-3\">No tiene artículos en el carrito</h1>
\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
            echo "\" class=\"btn btn-primary px-3 mb-5\">
\t\t\t\t\t\t<i class=\"iconblanco mdi mdi-undo-variant mr-3\"></i>Volver
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t<div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
\t\t\t\t\t<div class=\"col-auto col-lg-1 d-none d-lg-table-cell\" style=\"width:75px !important;\"></div>
\t\t\t\t\t<div class=\"col\">Descripción</div>
\t\t\t\t\t<div class=\"col-auto col-lg-2\">Cantidad</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">Precio</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">Total</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\"></div>
\t\t\t\t</div>
\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lineas"]) || array_key_exists("lineas", $context) ? $context["lineas"] : (function () { throw new RuntimeError('Variable "lineas" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lin"]) {
                // line 36
                echo "\t\t\t\t\t<div class=\"row border-bottom py-2\">
\t\t\t\t\t\t<div class=\"col-auto col-lg-1 d-none d-lg-table-cell\" style=\"width:75px !important;\">
\t\t\t\t\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["lin"], "url", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img height=\"75\" src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["lin"], "imagen", [], "any", false, false, false, 39)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "nombre", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "referencia", [], "any", false, false, false, 43), "html", null, true);
                echo "
\t\t\t\t\t\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["lin"], "url", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "nombre", [], "any", false, false, false, 45), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 47
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["lin"], "talla", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t<b>Talla:
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "talla", [], "any", false, false, false, 50), "html", null, true);
                    echo "&nbsp;&nbsp;&nbsp;<b>Color:
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "color", [], "any", false, false, false, 52), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["lin"], "web_alerta", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "web_alerta", [], "any", false, false, false, 55), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto col-lg-2 d-flex flex-column\">
\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 60), "html", null, true);
                echo "\" class=\"product-quantity form-control input-sm\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\" data-actual=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "actual", [], "any", false, false, false, 60), "html", null, true);
                echo "\" data-ctso=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "control_stock", [], "any", false, false, false, 60), "html", null, true);
                echo "\" id=\"input-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-lg-none\">
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">Precio:
\t\t\t\t\t\t\t\t\t";
                // line 64
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 64));
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">Total:
\t\t\t\t\t\t\t\t\t";
                // line 66
                echo $this->extensions['App\Twig\AppExtension']->formatPrice((twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 66) * twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 66)));
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-delete\" data-id=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-trash-can-outline\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t";
                // line 75
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 75));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t";
                // line 78
                echo $this->extensions['App\Twig\AppExtension']->formatPrice((twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 78) * twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 78)));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-delete\" data-id=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"iconblanco mdi mdi-trash-can-outline\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t<div class=\"row mx-0\">
\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t<div class=\"col-md-6 px-0 text-right\">
\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"recoger_en_tienda\" name=\"recoger_en_tienda\" ";
            // line 91
            echo (((isset($context["recoger_en_tienda"]) || array_key_exists("recoger_en_tienda", $context) ? $context["recoger_en_tienda"] : (function () { throw new RuntimeError('Variable "recoger_en_tienda" does not exist.', 91, $this->source); })())) ? ("checked") : (""));
            echo ">
\t\t\t\t\t\t\t<label class=\"custom-control-label pt-1\" for=\"recoger_en_tienda\">Quiero recoger en tienda</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-borderless font-weight-bold text-right cart-total\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Base Imponible</td>
\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">";
            // line 98
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 98, $this->source); })()), "base", [], "any", false, false, false, 98));
            echo "</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 101, $this->source); })()), "iva", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>IVA
\t\t\t\t\t\t\t\t\t\t\t";
                // line 104
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "iva", [], "any", false, false, false, 104), 2, ",", "."), "html", null, true);
                echo "%</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">";
                // line 105
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["item"], "importe", [], "any", false, false, false, 105));
                echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Total artículos</td>
\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">";
            // line 110
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 110, $this->source); })()), "total", [], "any", false, false, false, 110));
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Portes</td>
\t\t\t\t\t\t\t\t\t<td class=\"border-top border-dark font-weight-normal\">";
            // line 114
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 114, $this->source); })()), "euros_mas_iva", [], "any", false, false, false, 114));
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Total Pedido</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 118
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 118, $this->source); })()), "total_con_portes", [], "any", false, false, false, 118));
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
            // line 122
            if (((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 122, $this->source); })()), "gratis", [], "any", false, false, false, 122) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 122, $this->source); })()), "falta", [], "any", false, false, false, 122) > 0))) {
                // line 123
                echo "\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t";
                // line 124
                if (((twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 124, $this->source); })()), "portes", [], "any", false, false, false, 124) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 124, $this->source); })()), "falta", [], "any", false, false, false, 124) == 1))) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\tLe falta
\t\t\t\t\t\t\t\t\t";
                    // line 126
                    echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 126, $this->source); })()), "falta", [], "any", false, false, false, 126));
                    echo "
\t\t\t\t\t\t\t\t\tpara que su envío sea gratuito.
\t\t\t\t\t\t\t\t";
                } else {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\tLe faltan
\t\t\t\t\t\t\t\t\t";
                    // line 130
                    echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 130, $this->source); })()), "falta", [], "any", false, false, false, 130));
                    echo "
\t\t\t\t\t\t\t\t\tpara que su envío sea gratuito.
\t\t\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 mb-2 d-flex justify-content-between flex-column flex-sm-row\">
\t\t\t\t\t<button class=\"btn btn-danger mx-3 mx-sm-0 mb-3 mb-sm-0\" id=\"btn-delete-cart\">
\t\t\t\t\t\tBorrar pedido<i class=\"iconblanco mdi mdi-trash-can-outline ml-3\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"btn btn-success mx-3 mx-sm-0 \" id=\"btn-end-cart\">
\t\t\t\t\t\tFinalizar pedido<i class=\"iconblanco mdi mdi-check ml-3\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 146
        echo "\t\t</div>

\t</main>
\t";
        // line 149
        $this->loadTemplate("carrito/carrito-fin-modal.html.twig", "carrito/carrito.html.twig", 149)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "\t<script>
\t\tlet cartCfg = {
uId: ";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "getId", [], "any", false, false, false, 154), "html", null, true);
        echo ",
cId: ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "getClient", [], "any", false, false, false, 155), "html", null, true);
        echo ",
rSys: ";
        // line 156
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "redsys_activar", [], "any", false, false, false, 156)) ? ("true") : ("false"));
        echo ",
pSelect: ";
        // line 157
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "portesSelect", [], "any", false, false, false, 157)) ? ("true") : ("false"));
        echo ",
ret: ";
        // line 158
        echo (((isset($context["recoger_en_tienda"]) || array_key_exists("recoger_en_tienda", $context) ? $context["recoger_en_tienda"] : (function () { throw new RuntimeError('Variable "recoger_en_tienda" does not exist.', 158, $this->source); })())) ? ("true") : ("false"));
        echo "
};
\t</script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carrito.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "carrito/carrito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 161,  397 => 158,  393 => 157,  389 => 156,  385 => 155,  381 => 154,  377 => 152,  367 => 151,  357 => 149,  352 => 146,  339 => 135,  335 => 133,  329 => 130,  326 => 129,  320 => 126,  317 => 125,  315 => 124,  312 => 123,  310 => 122,  303 => 118,  296 => 114,  289 => 110,  285 => 108,  276 => 105,  272 => 104,  268 => 102,  264 => 101,  258 => 98,  248 => 91,  242 => 87,  230 => 81,  224 => 78,  218 => 75,  208 => 68,  203 => 66,  198 => 64,  183 => 60,  178 => 57,  172 => 55,  169 => 54,  164 => 52,  159 => 50,  155 => 48,  153 => 47,  148 => 45,  144 => 44,  140 => 43,  131 => 39,  127 => 38,  123 => 36,  119 => 35,  109 => 27,  101 => 22,  97 => 20,  95 => 19,  91 => 17,  85 => 14,  82 => 13,  80 => 12,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

\t<main class=\"container-fluid bg-white maincarrito\" style=\"min-height: 58.2vh;\">
\t\t<div class=\"containercarrito\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t<h1 class=\"font-weight-normal\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-cart mr-2\"></i>Carrito</h1>
\t\t\t\t\t</div>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"col-12 col-md-6 text-center text-lg-right\">
\t\t\t\t\t\t\t<h6 class=\"\">{{ app.user.getClientName }}</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if lineas is empty %}
\t\t\t\t<div class=\"text-center mt-3 mb-5\">
\t\t\t\t\t<h1 class=\"px-3 py-5 my-3\">No tiene artículos en el carrito</h1>
\t\t\t\t\t<a href=\"{{ url('home') }}\" class=\"btn btn-primary px-3 mb-5\">
\t\t\t\t\t\t<i class=\"iconblanco mdi mdi-undo-variant mr-3\"></i>Volver
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
\t\t\t\t\t<div class=\"col-auto col-lg-1 d-none d-lg-table-cell\" style=\"width:75px !important;\"></div>
\t\t\t\t\t<div class=\"col\">Descripción</div>
\t\t\t\t\t<div class=\"col-auto col-lg-2\">Cantidad</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">Precio</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">Total</div>
\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\"></div>
\t\t\t\t</div>
\t\t\t\t{% for lin in lineas %}
\t\t\t\t\t<div class=\"row border-bottom py-2\">
\t\t\t\t\t\t<div class=\"col-auto col-lg-1 d-none d-lg-table-cell\" style=\"width:75px !important;\">
\t\t\t\t\t\t\t<a href=\"{{ url('articulo', {weburl: lin.url}) }}\">
\t\t\t\t\t\t\t\t<img height=\"75\" src=\"{{ asset(lin.imagen) }}\" alt=\"{{ lin.nombre }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t{{ lin.referencia }}
\t\t\t\t\t\t\t<a href=\"{{ url('articulo', {weburl: lin.url}) }}\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">{{ lin.nombre }}</h6>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if lin.talla is not empty %}
\t\t\t\t\t\t\t\t<b>Talla:
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t{{ lin.talla }}&nbsp;&nbsp;&nbsp;<b>Color:
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t{{ lin.color }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if lin.web_alerta is not empty %}
\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ lin.web_alerta }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-auto col-lg-2 d-flex flex-column\">
\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{ lin.unidades }}\" class=\"product-quantity form-control input-sm\" data-id=\"{{ lin.id }}\" data-actual=\"{{lin.actual}}\" data-ctso=\"{{lin.control_stock}}\" id=\"input-{{ lin.id }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-lg-none\">
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">Precio:
\t\t\t\t\t\t\t\t\t{{ lin.precio | price }}</div>
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">Total:
\t\t\t\t\t\t\t\t\t{{ (lin.unidades * lin.precio) | price }}</div>
\t\t\t\t\t\t\t\t<div class=\"d-lg-none mt-3\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-delete\" data-id=\"{{ lin.id }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-trash-can-outline\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t{{ lin.precio | price }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t{{ (lin.unidades * lin.precio) | price }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-lg-1 d-none d-lg-table-cell\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-delete\" data-id=\"{{ lin.id }}\">
\t\t\t\t\t\t\t\t<i class=\"iconblanco mdi mdi-trash-can-outline\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"row mx-0\">
\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t<div class=\"col-md-6 px-0 text-right\">
\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" id=\"recoger_en_tienda\" name=\"recoger_en_tienda\" {{ recoger_en_tienda ? 'checked' : '' }}>
\t\t\t\t\t\t\t<label class=\"custom-control-label pt-1\" for=\"recoger_en_tienda\">Quiero recoger en tienda</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-borderless font-weight-bold text-right cart-total\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Base Imponible</td>
\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">{{ total.base | price }}</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t{% for item in total.iva %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>IVA
\t\t\t\t\t\t\t\t\t\t\t{{ item.iva|number_format(2, ',', '.') }}%</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">{{ item.importe | price }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Total artículos</td>
\t\t\t\t\t\t\t\t\t<td class=\"font-weight-normal\">{{ total.total | price }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Portes</td>
\t\t\t\t\t\t\t\t\t<td class=\"border-top border-dark font-weight-normal\">{{ portes.euros_mas_iva | price }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Total Pedido</td>
\t\t\t\t\t\t\t\t\t<td>{{ total.total_con_portes | price }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t{% if portes.gratis > 0 and portes.falta > 0 %}
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t{% if total.portes > 0 and portes.falta == 1 %}
\t\t\t\t\t\t\t\t\tLe falta
\t\t\t\t\t\t\t\t\t{{ portes.falta | price }}
\t\t\t\t\t\t\t\t\tpara que su envío sea gratuito.
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tLe faltan
\t\t\t\t\t\t\t\t\t{{ portes.falta | price }}
\t\t\t\t\t\t\t\t\tpara que su envío sea gratuito.
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 mb-2 d-flex justify-content-between flex-column flex-sm-row\">
\t\t\t\t\t<button class=\"btn btn-danger mx-3 mx-sm-0 mb-3 mb-sm-0\" id=\"btn-delete-cart\">
\t\t\t\t\t\tBorrar pedido<i class=\"iconblanco mdi mdi-trash-can-outline ml-3\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"btn btn-success mx-3 mx-sm-0 \" id=\"btn-end-cart\">
\t\t\t\t\t\tFinalizar pedido<i class=\"iconblanco mdi mdi-check ml-3\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t</main>
\t{% include 'carrito/carrito-fin-modal.html.twig' %}
{% endblock %}
{% block javascripts %}
\t<script>
\t\tlet cartCfg = {
uId: {{ user.getId }},
cId: {{ user.getClient }},
rSys: {{ config.data.redsys_activar ? 'true' : 'false' }},
pSelect: {{ config.portesSelect ? 'true' : 'false' }},
ret: {{ recoger_en_tienda ? 'true' : 'false' }}
};
\t</script>
\t<script src=\"{{ asset('js/carrito.js') }}\"></script>
{% endblock %}
", "carrito/carrito.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\carrito\\carrito.html.twig");
    }
}
