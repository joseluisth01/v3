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

/* admin/config/config-quienes-somos.html.twig */
class __TwigTemplate_8db6585cefac85824ffc66564fe537a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-quienes-somos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-quienes-somos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config/config-quienes-somos.html.twig", 1);
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

        echo "Configuración Quiénes Somos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css\" rel=\"stylesheet\">
    ";
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .quienes-somos-container {
            padding: 20px;
        }
        .quienes-somos-form {
            max-width: 90%;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {
            \$('.summernote').summernote({
                lang: 'es-ES'
            });
        });
    </script>
\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-es-ES.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <br><br><br>
    <div class=\"quienes-somos-container\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 40
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        <h2 class=\"quienes-somos-title\">Editar Página \"Quiénes Somos\"</h2>

        <form id=\"config-somos-form\" class=\"quienes-somos-form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-config-somos-add");
        echo "\">
            <!-- Título -->
            <div class=\"form-group\">
                <label for=\"somos_titulo\">Título</label>
                <input type=\"text\" id=\"somos_titulo\" name=\"somos_titulo\" class=\"form-control\" placeholder=\"Título de la sección\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\" required>
            </div>
            <!-- Texto -->
            <div class=\"form-group\">
                <label for=\"somos_texto\">Texto</label>
                <textarea id=\"somos_texto\" name=\"somos_texto\" class=\"form-control summernote\" required>";
        // line 58
        echo (isset($context["texto"]) || array_key_exists("texto", $context) ? $context["texto"] : (function () { throw new RuntimeError('Variable "texto" does not exist.', 58, $this->source); })());
        echo "</textarea>
            </div>
            <!-- Imagen -->
            <div class=\"form-group\">
                <label for=\"somos_imagen\">Imagen</label>
                <input type=\"file\" id=\"somos_imagen\" name=\"somos_imagen\" class=\"form-control\" accept=\"image/*\">
            </div>
            <!-- Botón Submit -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-success\">
                    <i class=\"mdi mdi-content-save mr-3\"></i>Guardar
                </button>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-quienes-somos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 58,  205 => 53,  198 => 49,  193 => 46,  186 => 44,  177 => 42,  173 => 41,  168 => 40,  164 => 39,  160 => 37,  150 => 36,  127 => 23,  117 => 22,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Configuración Quiénes Somos{% endblock %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css\" rel=\"stylesheet\">
    {{ parent() }}
    <style>
        .quienes-somos-container {
            padding: 20px;
        }
        .quienes-somos-form {
            max-width: 90%;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function() {
            \$('.summernote').summernote({
                lang: 'es-ES'
            });
        });
    </script>
\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-es-ES.min.js\"></script>
{% endblock %}

{% block body %}
    <br><br><br>
    <div class=\"quienes-somos-container\">
        {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        {% endfor %}

        <h2 class=\"quienes-somos-title\">Editar Página \"Quiénes Somos\"</h2>

        <form id=\"config-somos-form\" class=\"quienes-somos-form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"{{ path('admin-config-somos-add') }}\">
            <!-- Título -->
            <div class=\"form-group\">
                <label for=\"somos_titulo\">Título</label>
                <input type=\"text\" id=\"somos_titulo\" name=\"somos_titulo\" class=\"form-control\" placeholder=\"Título de la sección\" value=\"{{ titulo }}\" required>
            </div>
            <!-- Texto -->
            <div class=\"form-group\">
                <label for=\"somos_texto\">Texto</label>
                <textarea id=\"somos_texto\" name=\"somos_texto\" class=\"form-control summernote\" required>{{ texto|raw }}</textarea>
            </div>
            <!-- Imagen -->
            <div class=\"form-group\">
                <label for=\"somos_imagen\">Imagen</label>
                <input type=\"file\" id=\"somos_imagen\" name=\"somos_imagen\" class=\"form-control\" accept=\"image/*\">
            </div>
            <!-- Botón Submit -->
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-success\">
                    <i class=\"mdi mdi-content-save mr-3\"></i>Guardar
                </button>
            </div>
        </form>
    </div>
{% endblock %}


", "admin/config/config-quienes-somos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-quienes-somos.html.twig");
    }
}
