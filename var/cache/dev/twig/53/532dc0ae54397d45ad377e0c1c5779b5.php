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

/* admin/config/config-recursos.html.twig */
class __TwigTemplate_9128d02b1b960dd97f1a01995f602a1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-recursos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-recursos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config/config-recursos.html.twig", 1);
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

        echo "Configuración Recursos";
        
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
        echo "<br><br><br>
<div class=\"quienes-somos-containerrr\">
    <h2 class=\"quienes-somos-title\">Configuración Recursos</h2>

    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminconfig-recursos-add");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <strong><label for=\"imagen\">Imagen:</label></strong>
            <input type=\"file\" id=\"imagen\" name=\"imagen\" class=\"form-control\" accept=\"image/*\" required>
        </div>

        <div class=\"form-group\">
            <strong><label for=\"archivo\">Archivo del catálogo:</label></strong>
            <input type=\"file\" id=\"archivo\" name=\"archivo\" class=\"form-control\" accept=\".pdf,.doc,.docx,.xls,.xlsx\" required>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
    </form>

    <hr class=\"my-4\">
    <br>

    <h2 class=\"mb-4 quienes-somos-title\">Recursos Disponibles</h2>
    ";
        // line 28
        if (twig_test_empty((isset($context["recursos"]) || array_key_exists("recursos", $context) ? $context["recursos"] : (function () { throw new RuntimeError('Variable "recursos" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "        <p class=\"text-center\">No hay recursos personalizados. Se están mostrando los recursos por defecto en la página principal.</p>
    ";
        } else {
            // line 31
            echo "        <div class=\"row\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) || array_key_exists("recursos", $context) ? $context["recursos"] : (function () { throw new RuntimeError('Variable "recursos" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
                // line 33
                echo "                <div class=\"col-md-4 mb-4 tarjetaconfig\">
                    <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["recurso"], "imagen", [], "any", false, false, false, 34)), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"Imagen del recurso\"
                         onerror=\"this.src='";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default/no-image.webp"), "html", null, true);
                echo "'\">
                    <div class=\"card-body text-center\">
                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["recurso"], "archivo", [], "any", false, false, false, 37)), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info mb-2\">Ver Archivo</a>
                        <form action=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-recursos");
                echo "\" method=\"POST\" onsubmit=\"return confirm('¿Estás seguro de que deseas eliminar este recurso?');\">
                            <input type=\"hidden\" name=\"id\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recurso"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-danger-gestion-opiniones\">Eliminar</button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-recursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  160 => 45,  148 => 39,  144 => 38,  140 => 37,  135 => 35,  131 => 34,  128 => 33,  124 => 32,  121 => 31,  117 => 29,  115 => 28,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Configuración Recursos{% endblock %}

{% block body %}
<br><br><br>
<div class=\"quienes-somos-containerrr\">
    <h2 class=\"quienes-somos-title\">Configuración Recursos</h2>

    <form action=\"{{ path('adminconfig-recursos-add') }}\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <strong><label for=\"imagen\">Imagen:</label></strong>
            <input type=\"file\" id=\"imagen\" name=\"imagen\" class=\"form-control\" accept=\"image/*\" required>
        </div>

        <div class=\"form-group\">
            <strong><label for=\"archivo\">Archivo del catálogo:</label></strong>
            <input type=\"file\" id=\"archivo\" name=\"archivo\" class=\"form-control\" accept=\".pdf,.doc,.docx,.xls,.xlsx\" required>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
    </form>

    <hr class=\"my-4\">
    <br>

    <h2 class=\"mb-4 quienes-somos-title\">Recursos Disponibles</h2>
    {% if recursos is empty %}
        <p class=\"text-center\">No hay recursos personalizados. Se están mostrando los recursos por defecto en la página principal.</p>
    {% else %}
        <div class=\"row\">
            {% for recurso in recursos %}
                <div class=\"col-md-4 mb-4 tarjetaconfig\">
                    <img src=\"{{ asset(recurso.imagen) }}\" class=\"card-img-top\" alt=\"Imagen del recurso\"
                         onerror=\"this.src='{{ asset('images/default/no-image.webp') }}'\">
                    <div class=\"card-body text-center\">
                        <a href=\"{{ asset(recurso.archivo) }}\" target=\"_blank\" class=\"btn btn-info mb-2\">Ver Archivo</a>
                        <form action=\"{{ path('config-recursos') }}\" method=\"POST\" onsubmit=\"return confirm('¿Estás seguro de que deseas eliminar este recurso?');\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ recurso.id }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-danger-gestion-opiniones\">Eliminar</button>
                        </form>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}", "admin/config/config-recursos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-recursos.html.twig");
    }
}
