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

/* documentos/documentos-tabla.html.twig */
class __TwigTemplate_67f3842b0d6adab51141dc175703566f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-tabla.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-tabla.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentos/documentos-tabla.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/datatables.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datepicker/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datepicker/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div style=\"width:80%; margin:0 auto; padding-top:40px;\">
    <div class=\"row justify-content-between\">
        <h1 class=\"col mb-0 font-weight-normal\" id=\"title\">
            <i class=\"mdi ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["iconTitle"]) || array_key_exists("iconTitle", $context) ? $context["iconTitle"] : (function () { throw new RuntimeError('Variable "iconTitle" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " mr-2\"></i>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "
        </h1>
        <h1 class=\"col mb-0 font-weight-normal text-nowrap\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "getClientName", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
    </div>
</div>
<main class=\"container-fluid bg-white documentopedidos\" style=\"width:80%; margin:0 auto; padding-top:40px;\">
    <form class=\"form-horizontal mt-2 mb-3\" id=\"form-tabla-docs\">
        <div class=\"form-group row\">
            <div class=\"col-md-6\">
                <input type=\"text\" class=\"form-control no-box-shadow\" id=\"documento\" value=\"";
        // line 22
        (((twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "documento", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "documento", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "documento", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
        echo "\" autofocus placeholder=\"Número ";
        echo twig_escape_filter($this->env, (isset($context["nombreDoc"]) || array_key_exists("nombreDoc", $context) ? $context["nombreDoc"] : (function () { throw new RuntimeError('Variable "nombreDoc" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-6 mt-3 mt-md-0 d-flex\">
                <div class=\"input-group date mr-5\">
                    <div class=\"input-group-prepend input-group-addon\">
                        <i class=\"input-group-text mdi mdi-calendar-month\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control no-box-shadow\" id=\"fecha_desde\" value=\"";
        // line 29
        (((twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_desde", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_desde", [], "any", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_desde", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"Inicio\">
                </div>
                <div class=\"input-group date\">
                    <div class=\"input-group-prepend input-group-addon\">
                        <i class=\"input-group-text mdi mdi-calendar-month\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control no-box-shadow\" id=\"fecha_hasta\" value=\"";
        // line 35
        (((twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_hasta", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_hasta", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "fecha_hasta", [], "any", false, false, false, 35), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"Fin\">
                </div>
            </div>
        </div>
        <div class=\"form-group d-flex justify-content-around\">
            <button type=\"button\" id=\"btn-pedidos\" class=\"btn btn-doc ";
        // line 40
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 40, $this->source); })()), "tipo_doc", [], "any", false, false, false, 40) == "P")) ? ("btn-success") : ("btn-dark"));
        echo "\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard mr-3\"></i>Pedidos</button>
            <button type=\"button\" id=\"btn-albaranes\" class=\"btn btn-doc ";
        // line 41
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 41, $this->source); })()), "tipo_doc", [], "any", false, false, false, 41) == "A")) ? ("btn-success") : ("btn-dark"));
        echo "\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard-text mr-3\"></i>Albaranes</button>
            <button type=\"button\" id=\"btn-facturas\" class=\"btn btn-doc ";
        // line 42
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 42, $this->source); })()), "tipo_doc", [], "any", false, false, false, 42) == "F")) ? ("btn-success") : ("btn-dark"));
        echo "\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard-check mr-3\"></i>Facturas</button>
        </div>
        <div class=\"form-row justify-content-center mt-4 pl-0\">
            <div class=\"col-12 col-sm-6\">
                <button type=\"button\" id=\"btn-search\" class=\"btn btn-primary btn-block\"><i style=\"color:white !important\" class=\"mdi mdi-magnify mr-3\"></i>Buscar</button>
            </div>
            <div class=\"col-12 col-sm-6\">
                <button type=\"button\" id=\"btn-clear\" class=\"btn btn-secondary btn-block\"><i class=\"mdi mdi-close-circle-outline mr-3\"></i>Limpiar filtros</button>
            </div>
        </div><br>
        <input type=\"hidden\" id=\"tipo_doc\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 52, $this->source); })()), "tipo_doc", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
        <input type=\"hidden\" id=\"redsys\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "data", [], "any", false, false, false, 53), "redsys_activar", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
    </form><br><br>
    <div class=\"\" style=\"max-width: 100vw;\">
        <table id=\"tabla-docs\" class=\"table table-bordered table-striped nowrap w-100\">
            <thead>
                <tr>
                    <th></th>
                    <th>Fecha</th>
                    <th>Serie</th>
                    <th>Número</th>
                    <th>Importe</th>
                    <th>IVA</th>
                    <th>Recargo</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Cobro</th>
                    <th><span class=\"d-lg-none\">Consultar</span></th>
                    <th><span class=\"d-lg-none\">Descargar</span></th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</main>
<div class=\"d-none\" id=\"dt_search\">";
        // line 77
        (((array_key_exists("dtSearch", $context) &&  !(null === (isset($context["dtSearch"]) || array_key_exists("dtSearch", $context) ? $context["dtSearch"] : (function () { throw new RuntimeError('Variable "dtSearch" does not exist.', 77, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["dtSearch"]) || array_key_exists("dtSearch", $context) ? $context["dtSearch"] : (function () { throw new RuntimeError('Variable "dtSearch" does not exist.', 77, $this->source); })()), "html", null, true))) : (print ("{}")));
        echo "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/documentos-tabla.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentos/documentos-tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 81,  225 => 80,  212 => 77,  185 => 53,  181 => 52,  168 => 42,  164 => 41,  160 => 40,  152 => 35,  143 => 29,  131 => 22,  121 => 15,  114 => 13,  109 => 10,  99 => 9,  87 => 7,  83 => 6,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('vendor/datatables/datatables.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('vendor/datepicker/bootstrap-datepicker3.min.css') }}\">
<script src=\"{{ asset('vendor/datatables/datatables.min.js') }}\"></script>
<script src=\"{{ asset('vendor/datepicker/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('vendor/datepicker/bootstrap-datepicker.es.min.js') }}\"></script>
{% endblock %}
{% block body %}
<div style=\"width:80%; margin:0 auto; padding-top:40px;\">
    <div class=\"row justify-content-between\">
        <h1 class=\"col mb-0 font-weight-normal\" id=\"title\">
            <i class=\"mdi {{ iconTitle }} mr-2\"></i>{{ title }}
        </h1>
        <h1 class=\"col mb-0 font-weight-normal text-nowrap\">{{app.user.getClientName}}</h1>
    </div>
</div>
<main class=\"container-fluid bg-white documentopedidos\" style=\"width:80%; margin:0 auto; padding-top:40px;\">
    <form class=\"form-horizontal mt-2 mb-3\" id=\"form-tabla-docs\">
        <div class=\"form-group row\">
            <div class=\"col-md-6\">
                <input type=\"text\" class=\"form-control no-box-shadow\" id=\"documento\" value=\"{{ search.documento ?? '' }}\" autofocus placeholder=\"Número {{ nombreDoc }}\">
            </div>
            <div class=\"col-md-6 mt-3 mt-md-0 d-flex\">
                <div class=\"input-group date mr-5\">
                    <div class=\"input-group-prepend input-group-addon\">
                        <i class=\"input-group-text mdi mdi-calendar-month\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control no-box-shadow\" id=\"fecha_desde\" value=\"{{ search.fecha_desde ?? '' }}\" placeholder=\"Inicio\">
                </div>
                <div class=\"input-group date\">
                    <div class=\"input-group-prepend input-group-addon\">
                        <i class=\"input-group-text mdi mdi-calendar-month\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control no-box-shadow\" id=\"fecha_hasta\" value=\"{{ search.fecha_hasta ?? '' }}\" placeholder=\"Fin\">
                </div>
            </div>
        </div>
        <div class=\"form-group d-flex justify-content-around\">
            <button type=\"button\" id=\"btn-pedidos\" class=\"btn btn-doc {{ search.tipo_doc == 'P' ? 'btn-success': 'btn-dark' }}\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard mr-3\"></i>Pedidos</button>
            <button type=\"button\" id=\"btn-albaranes\" class=\"btn btn-doc {{ search.tipo_doc == 'A' ? 'btn-success': 'btn-dark' }}\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard-text mr-3\"></i>Albaranes</button>
            <button type=\"button\" id=\"btn-facturas\" class=\"btn btn-doc {{ search.tipo_doc == 'F' ? 'btn-success': 'btn-dark' }}\"><i style=\"color:white !important\" class=\"mdi mdi-clipboard-check mr-3\"></i>Facturas</button>
        </div>
        <div class=\"form-row justify-content-center mt-4 pl-0\">
            <div class=\"col-12 col-sm-6\">
                <button type=\"button\" id=\"btn-search\" class=\"btn btn-primary btn-block\"><i style=\"color:white !important\" class=\"mdi mdi-magnify mr-3\"></i>Buscar</button>
            </div>
            <div class=\"col-12 col-sm-6\">
                <button type=\"button\" id=\"btn-clear\" class=\"btn btn-secondary btn-block\"><i class=\"mdi mdi-close-circle-outline mr-3\"></i>Limpiar filtros</button>
            </div>
        </div><br>
        <input type=\"hidden\" id=\"tipo_doc\" value=\"{{ search.tipo_doc }}\">
        <input type=\"hidden\" id=\"redsys\" value=\"{{ config.data.redsys_activar }}\">
    </form><br><br>
    <div class=\"\" style=\"max-width: 100vw;\">
        <table id=\"tabla-docs\" class=\"table table-bordered table-striped nowrap w-100\">
            <thead>
                <tr>
                    <th></th>
                    <th>Fecha</th>
                    <th>Serie</th>
                    <th>Número</th>
                    <th>Importe</th>
                    <th>IVA</th>
                    <th>Recargo</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Cobro</th>
                    <th><span class=\"d-lg-none\">Consultar</span></th>
                    <th><span class=\"d-lg-none\">Descargar</span></th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</main>
<div class=\"d-none\" id=\"dt_search\">{{ dtSearch ?? '{}'}}</div>

{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/documentos-tabla.js') }}\"></script>
{% endblock %}", "documentos/documentos-tabla.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\documentos\\documentos-tabla.html.twig");
    }
}
