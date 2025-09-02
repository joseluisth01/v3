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

/* admin/dashboard.html.twig */
class __TwigTemplate_e4e89eb4550fc0ee31cda53b7b228589 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard.html.twig", 1);
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
        echo "<style>
    svg { width: 100% !important }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"row clearfix\">
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box pink text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-cart\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">CARRITOS ABANDONADOS</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["carritos"]) || array_key_exists("carritos", $context) ? $context["carritos"] : (function () { throw new RuntimeError('Variable "carritos" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" data-speed=\"15\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box cyan text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-clipboard-text\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">PEDIDOS PENDIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box light-green text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-clipboard-check\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">ALBARANES PENDIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["albaranes"]) || array_key_exists("albaranes", $context) ? $context["albaranes"] : (function () { throw new RuntimeError('Variable "albaranes" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box orange text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">CLIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new RuntimeError('Variable "clientes" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">Facturación ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</div>
        <div id=\"month-chart\" style=\"height: 250px\"></div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">Facturación año ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "</div>
        <div id=\"year-chart\" style=\"height: 250px\"></div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">COMPARATIVA IMPORTE MENSUAL (últimos 3 años)</div>
        <div id=\"comp-chart\" style=\"height: 250px\"></div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin/dashboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  187 => 73,  166 => 62,  155 => 56,  145 => 49,  131 => 38,  117 => 27,  103 => 16,  93 => 8,  83 => 7,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block stylesheets %}
<style>
    svg { width: 100% !important }
</style>
{% endblock %}
{% block body %}
<div class=\"row clearfix\">
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box pink text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-cart\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">CARRITOS ABANDONADOS</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"{{carritos}}\" data-speed=\"15\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box cyan text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-clipboard-text\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">PEDIDOS PENDIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"{{pedidos}}\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box light-green text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-clipboard-check\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">ALBARANES PENDIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"{{albaranes}}\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 col-xs-12\">
        <div class=\"info-box orange text-white waves-effect waves-light\">
            <div class=\"icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
            </div>
            <div class=\"content\">
                <div class=\"text\">CLIENTES</div>
                <div class=\"number count-to\" data-from=\"0\" data-to=\"{{clientes}}\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">Facturación {{month}} {{year}}</div>
        <div id=\"month-chart\" style=\"height: 250px\"></div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">Facturación año {{year}}</div>
        <div id=\"year-chart\" style=\"height: 250px\"></div>
    </div>
</div>
<div class=\"card\">
    <div class=\"card-content\">
        <div class=\"card-title\">COMPARATIVA IMPORTE MENSUAL (últimos 3 años)</div>
        <div id=\"comp-chart\" style=\"height: 250px\"></div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/admin/dashboard.js') }}\"></script>
{% endblock %}", "admin/dashboard.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\dashboard.html.twig");
    }
}
