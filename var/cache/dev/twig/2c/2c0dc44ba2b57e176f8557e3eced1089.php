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

/* admin/config/configuracion.html.twig */
class __TwigTemplate_3d87ee972a9c82b327f92214535e58f9 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/configuracion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/configuracion.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/config/configuracion.html.twig", 1);
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
        echo "<div class=\"card hoverable\" style=\"position:sticky; top:70px;\">
    <form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-save");
        echo "\" enctype=\"multipart/form-data\" method=\"POST\">
        <div style=\"position:sticky; top:70px; z-index:99; background-color: #fff; padding-bottom:2px; border-bottom: 1px solid #ddd\">
            <div class=\"card-content d-flex justify-content-between py-2\">
                <span class=\"card-title\">Configuración</span>
                <button type=\"submit\" class=\"btn btn-success\">
                    <i class=\"mdi mdi-content-save mr-3\"></i>Grabar
                </button>
            </div><br>
            <div class=\"card-tabs\">
                <ul class=\"tabs tabs-fixed-width\">
                    <li class=\"tab\"><a class=\"active\" href=\"#tab-general\">General</a></li>
                    <li class=\"tab\"><a href=\"#tab-web\">PÁGINA WEB</a></li>
                    <li class=\"tab\"><a href=\"#tab-empresa\">Empresa</a></li>
                    <li class=\"tab\"><a href=\"#tab-redes\">Redes Sociales</a></li>
                    <li class=\"tab\"><a href=\"#tab-email\">Email</a></li>
                    <li class=\"tab\"><a href=\"#tab-redsys\">REDSYS</a></li>
                    <li class=\"tab\"><a href=\"#tab-imagenes\">IMÁGENES</a></li>
                    <li class=\"tab\"><a href=\"#tab-admin\">SUPER ADMIN</a></li>
                </ul>
            </div>
        </div>
        <div class=\"card-content grey lighten-4\">
            <div id=\"tab-general\">
                ";
        // line 27
        $this->loadTemplate("admin/config/config-general.html.twig", "admin/config/configuracion.html.twig", 27)->display($context);
        // line 28
        echo "            </div>
            <div id=\"tab-web\">
                ";
        // line 30
        $this->loadTemplate("admin/config/config-web.html.twig", "admin/config/configuracion.html.twig", 30)->display($context);
        // line 31
        echo "            </div>
            <div id=\"tab-empresa\">
                ";
        // line 33
        $this->loadTemplate("admin/config/config-empresa.html.twig", "admin/config/configuracion.html.twig", 33)->display($context);
        // line 34
        echo "            </div>
            <div id=\"tab-redes\">
                ";
        // line 36
        $this->loadTemplate("admin/config/config-redes.html.twig", "admin/config/configuracion.html.twig", 36)->display($context);
        // line 37
        echo "            </div>
            <div id=\"tab-email\">
                ";
        // line 39
        $this->loadTemplate("admin/config/config-email.html.twig", "admin/config/configuracion.html.twig", 39)->display($context);
        // line 40
        echo "            </div>
            <div id=\"tab-redsys\">
                ";
        // line 42
        $this->loadTemplate("admin/config/config-redsys.html.twig", "admin/config/configuracion.html.twig", 42)->display($context);
        // line 43
        echo "            </div>
            <div id=\"tab-imagenes\">
                ";
        // line 45
        $this->loadTemplate("admin/config/config-imagenes.html.twig", "admin/config/configuracion.html.twig", 45)->display($context);
        // line 46
        echo "            </div>
        </div>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin/configuracion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/configuracion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  150 => 51,  136 => 46,  134 => 45,  130 => 43,  128 => 42,  124 => 40,  122 => 39,  118 => 37,  116 => 36,  112 => 34,  110 => 33,  106 => 31,  104 => 30,  100 => 28,  98 => 27,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block body %}
<div class=\"card hoverable\" style=\"position:sticky; top:70px;\">
    <form action=\"{{path('admin-save')}}\" enctype=\"multipart/form-data\" method=\"POST\">
        <div style=\"position:sticky; top:70px; z-index:99; background-color: #fff; padding-bottom:2px; border-bottom: 1px solid #ddd\">
            <div class=\"card-content d-flex justify-content-between py-2\">
                <span class=\"card-title\">Configuración</span>
                <button type=\"submit\" class=\"btn btn-success\">
                    <i class=\"mdi mdi-content-save mr-3\"></i>Grabar
                </button>
            </div><br>
            <div class=\"card-tabs\">
                <ul class=\"tabs tabs-fixed-width\">
                    <li class=\"tab\"><a class=\"active\" href=\"#tab-general\">General</a></li>
                    <li class=\"tab\"><a href=\"#tab-web\">PÁGINA WEB</a></li>
                    <li class=\"tab\"><a href=\"#tab-empresa\">Empresa</a></li>
                    <li class=\"tab\"><a href=\"#tab-redes\">Redes Sociales</a></li>
                    <li class=\"tab\"><a href=\"#tab-email\">Email</a></li>
                    <li class=\"tab\"><a href=\"#tab-redsys\">REDSYS</a></li>
                    <li class=\"tab\"><a href=\"#tab-imagenes\">IMÁGENES</a></li>
                    <li class=\"tab\"><a href=\"#tab-admin\">SUPER ADMIN</a></li>
                </ul>
            </div>
        </div>
        <div class=\"card-content grey lighten-4\">
            <div id=\"tab-general\">
                {% include 'admin/config/config-general.html.twig' %}
            </div>
            <div id=\"tab-web\">
                {% include 'admin/config/config-web.html.twig' %}
            </div>
            <div id=\"tab-empresa\">
                {% include 'admin/config/config-empresa.html.twig' %}
            </div>
            <div id=\"tab-redes\">
                {% include 'admin/config/config-redes.html.twig' %}
            </div>
            <div id=\"tab-email\">
                {% include 'admin/config/config-email.html.twig' %}
            </div>
            <div id=\"tab-redsys\">
                {% include 'admin/config/config-redsys.html.twig' %}
            </div>
            <div id=\"tab-imagenes\">
                {% include 'admin/config/config-imagenes.html.twig' %}
            </div>
        </div>
    </form>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/admin/configuracion.js') }}\"></script>
{% endblock %}", "admin/config/configuracion.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\configuracion.html.twig");
    }
}
