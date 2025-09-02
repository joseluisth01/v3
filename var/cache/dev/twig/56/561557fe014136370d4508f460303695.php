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

/* seleccion/clientes-full.html.twig */
class __TwigTemplate_23ba15cf3dde6a8662b571d7fe89599c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seleccion/clientes-full.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seleccion/clientes-full.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seleccion/clientes-full.html.twig", 1);
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
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1 class=\"font-weight-normal container\" style=\"margin-top:60px\"><i class=\"mdi mdi-account mr-2\"></i>Selección cliente</h1>
<main class=\"container bg-white seleccioncliente\">
\t<div class=\"row mx-0\">
\t\t<div class=\"form-group col-12 col-md\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli-sel-filter\" autofocus placeholder=\"Nombre cliente\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border\" id=\"cli-sel-btn-clear\">
\t\t\t\t\t\t<i class=\"mdi mdi-close-circle\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-auto\">
\t\t\t<button type=\"button\" id=\"cli-sel-btn-search\" class=\"btn btn-primary btn-block\"><span class=\"mdi mdi-magnify mr-3\"></span>Buscar</a>
\t\t</div>
\t</div>
\t<div class=\"row p-2 mx-0\">
\t\t<table id=\"cli-sel-table\" class=\"table table-striped display w-100\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Código</th>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t</table>
\t</div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/seleccion/clientes.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function() {
\t\$(function() {
\t\tSEL_CLI.fnSelReg = function (codigo, nombre) {
\t\t\tlet postData = { codigo: codigo, verif: T.primeNumber(codigo), act: ";
        // line 43
        echo (((isset($context["actualiza_carrito"]) || array_key_exists("actualiza_carrito", $context) ? $context["actualiza_carrito"] : (function () { throw new RuntimeError('Variable "actualiza_carrito" does not exist.', 43, $this->source); })())) ? (1) : (0));
        echo " };
\t\t\t\$.post(T.path('cliente/seleccion'), postData, function(resp) {
\t\t\t\tif (!T.stringEmpty(resp)) {
\t\t\t\t\twindow.location = resp;
\t\t\t\t} else {
\t\t\t\t\twindow.location = T.path();
\t\t\t\t}
\t\t\t});
\t\t};
\t\tSEL_CLI.init();
\t});
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seleccion/clientes-full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  146 => 38,  136 => 37,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('vendor/datatables/datatables.min.css') }}\">
<script src=\"{{ asset('vendor/datatables/datatables.min.js') }}\"></script>
{% endblock %}
{% block body %}
<h1 class=\"font-weight-normal container\" style=\"margin-top:60px\"><i class=\"mdi mdi-account mr-2\"></i>Selección cliente</h1>
<main class=\"container bg-white seleccioncliente\">
\t<div class=\"row mx-0\">
\t\t<div class=\"form-group col-12 col-md\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli-sel-filter\" autofocus placeholder=\"Nombre cliente\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border\" id=\"cli-sel-btn-clear\">
\t\t\t\t\t\t<i class=\"mdi mdi-close-circle\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-auto\">
\t\t\t<button type=\"button\" id=\"cli-sel-btn-search\" class=\"btn btn-primary btn-block\"><span class=\"mdi mdi-magnify mr-3\"></span>Buscar</a>
\t\t</div>
\t</div>
\t<div class=\"row p-2 mx-0\">
\t\t<table id=\"cli-sel-table\" class=\"table table-striped display w-100\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Código</th>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t</table>
\t</div>
</main>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/seleccion/clientes.js') }}\"></script>
<script>
\$(function() {
\t\$(function() {
\t\tSEL_CLI.fnSelReg = function (codigo, nombre) {
\t\t\tlet postData = { codigo: codigo, verif: T.primeNumber(codigo), act: {{ actualiza_carrito ? 1: 0 }} };
\t\t\t\$.post(T.path('cliente/seleccion'), postData, function(resp) {
\t\t\t\tif (!T.stringEmpty(resp)) {
\t\t\t\t\twindow.location = resp;
\t\t\t\t} else {
\t\t\t\t\twindow.location = T.path();
\t\t\t\t}
\t\t\t});
\t\t};
\t\tSEL_CLI.init();
\t});
});
</script>
{% endblock %}", "seleccion/clientes-full.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\seleccion\\clientes-full.html.twig");
    }
}
