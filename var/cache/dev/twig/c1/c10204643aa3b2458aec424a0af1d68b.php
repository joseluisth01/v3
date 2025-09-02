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

/* seleccion/clientes.html.twig */
class __TwigTemplate_87fe42a0af649ab7014a3a396c8cd370 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seleccion/clientes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seleccion/clientes.html.twig"));

        // line 1
        echo "<style>
#cli-sel-table_info,
#cli-sel-table_paginate ul.pagination li a {
\tfont-size: .9rem;
}
</style>

<div class=\"modal fade\" id=\"modal-sel-cli\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"cli-sel-title\" style=\"z-index:1055\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header py-2\">
\t\t\t\t<h4 class=\"modal-title\" id=\"cli-sel-title\"><i class=\"mdi mdi-account mr-2\"></i>Selección cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-12 col-md\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli-sel-filter\" autofocus placeholder=\"Nombre cliente\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border\" id=\"cli-sel-btn-clear\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-close-circle\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-auto\">
\t\t\t\t\t\t<button type=\"button\" id=\"cli-sel-btn-search\" class=\"btn btn-primary btn-block\"><span class=\"mdi mdi-magnify mr-3\"></span>Buscar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t\t<table id=\"cli-sel-table\" class=\"table table-striped display w-100\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Código</th>
\t\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t</table>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/seleccion/clientes.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "seleccion/clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
#cli-sel-table_info,
#cli-sel-table_paginate ul.pagination li a {
\tfont-size: .9rem;
}
</style>

<div class=\"modal fade\" id=\"modal-sel-cli\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"cli-sel-title\" style=\"z-index:1055\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header py-2\">
\t\t\t\t<h4 class=\"modal-title\" id=\"cli-sel-title\"><i class=\"mdi mdi-account mr-2\"></i>Selección cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-12 col-md\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli-sel-filter\" autofocus placeholder=\"Nombre cliente\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border\" id=\"cli-sel-btn-clear\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-close-circle\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-auto\">
\t\t\t\t\t\t<button type=\"button\" id=\"cli-sel-btn-search\" class=\"btn btn-primary btn-block\"><span class=\"mdi mdi-magnify mr-3\"></span>Buscar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t\t<table id=\"cli-sel-table\" class=\"table table-striped display w-100\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Código</th>
\t\t\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t</table>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"{{ asset('js/seleccion/clientes.js') }}\"></script>", "seleccion/clientes.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\seleccion\\clientes.html.twig");
    }
}
