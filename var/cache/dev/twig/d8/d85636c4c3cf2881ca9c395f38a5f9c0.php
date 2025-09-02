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

/* admin/config/config-promociones.html.twig */
class __TwigTemplate_3df335ac9eb96c737c47d6b1834c0d83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-promociones.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-promociones.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config/config-promociones.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configuración Promociones";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-5\">

    <h2 class=\"mb-4 text-center quienes-somos-title\">Configuración Página \"Promociones\"</h2>

    <!-- Formulario de búsqueda -->
    <form method=\"POST\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-promociones");
        echo "\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Buscar artículos por nombre\" required>
            <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
        </div>
    </form>

    <!-- Resultados de búsqueda -->
    ";
        // line 19
        if ( !twig_test_empty((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "        <h4>Resultados de la búsqueda:</h4>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 31
                echo "                    <tr>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "referencia", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                        <td>
                            <form method=\"POST\" action=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-promociones");
                echo "\">
                                <input type=\"hidden\" name=\"referencia\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "referencia", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                                <input type=\"hidden\" name=\"nombre\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Añadir a Promociones</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 46
            echo "        <p>No se encontraron artículos.</p>
    ";
        }
        // line 48
        echo "
    <hr class=\"my-4\">

    <!-- Lista de artículos en promociones -->
    <h4>Artículos en Promociones:</h4>
    ";
        // line 53
        if ( !twig_test_empty((isset($context["promociones"]) || array_key_exists("promociones", $context) ? $context["promociones"] : (function () { throw new RuntimeError('Variable "promociones" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Fecha de Inclusión</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promociones"]) || array_key_exists("promociones", $context) ? $context["promociones"] : (function () { throw new RuntimeError('Variable "promociones" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 65
                echo "                    <tr>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "referencia", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "nombre", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                        <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "fecha_creacion", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <form method=\"POST\" action=\"";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-promociones");
                echo "\">
                                <input type=\"hidden\" name=\"delete_id\" value=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm btn-danger-gestion-opiniones\" onclick=\"return confirm('¿Estás seguro de eliminar este artículo de las promociones?')\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 80
            echo "        <p>No hay artículos en promociones.</p>
    ";
        }
        // line 82
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-promociones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 82,  227 => 80,  222 => 77,  210 => 71,  206 => 70,  201 => 68,  197 => 67,  193 => 66,  190 => 65,  186 => 64,  174 => 54,  172 => 53,  165 => 48,  161 => 46,  156 => 43,  144 => 37,  140 => 36,  136 => 35,  131 => 33,  127 => 32,  124 => 31,  120 => 30,  108 => 20,  106 => 19,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Configuración Promociones{% endblock %}

{% block body %}
<div class=\"container mt-5\">

    <h2 class=\"mb-4 text-center quienes-somos-title\">Configuración Página \"Promociones\"</h2>

    <!-- Formulario de búsqueda -->
    <form method=\"POST\" action=\"{{ path('config-promociones') }}\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Buscar artículos por nombre\" required>
            <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
        </div>
    </form>

    <!-- Resultados de búsqueda -->
    {% if articulos is not empty %}
        <h4>Resultados de la búsqueda:</h4>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                {% for articulo in articulos %}
                    <tr>
                        <td>{{ articulo.referencia }}</td>
                        <td>{{ articulo.nombre }}</td>
                        <td>
                            <form method=\"POST\" action=\"{{ path('config-promociones') }}\">
                                <input type=\"hidden\" name=\"referencia\" value=\"{{ articulo.referencia }}\">
                                <input type=\"hidden\" name=\"nombre\" value=\"{{ articulo.nombre }}\">
                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Añadir a Promociones</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No se encontraron artículos.</p>
    {% endif %}

    <hr class=\"my-4\">

    <!-- Lista de artículos en promociones -->
    <h4>Artículos en Promociones:</h4>
    {% if promociones is not empty %}
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Fecha de Inclusión</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                {% for promo in promociones %}
                    <tr>
                        <td>{{ promo.referencia }}</td>
                        <td>{{ promo.nombre }}</td>
                        <td>{{ promo.fecha_creacion|date('d/m/Y') }}</td>
                        <td>
                            <form method=\"POST\" action=\"{{ path('config-promociones') }}\">
                                <input type=\"hidden\" name=\"delete_id\" value=\"{{ promo.id }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm btn-danger-gestion-opiniones\" onclick=\"return confirm('¿Estás seguro de eliminar este artículo de las promociones?')\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No hay artículos en promociones.</p>
    {% endif %}
</div>
{% endblock %}
", "admin/config/config-promociones.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-promociones.html.twig");
    }
}
