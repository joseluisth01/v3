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

/* documentos/documentos-view.html.twig */
class __TwigTemplate_9e3af3976e3490da02f7111a0c69558a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentos/documentos-view.html.twig", 1);
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
        echo "  <main class=\"container-fluid\">
    <h1 class=\"font-weight-normal\">Consulta de
      ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 5, $this->source); })()), "nombreDoc", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
    <div class=\"row justify-content-around my-2 text-nowrap mx-0\">
      <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos-print", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary px-3\">
          <i class=\"mdi mdi-file-pdf-outline mr-3\"></i>Descargar PDF
        </a>
      </div>
      ";
        // line 12
        if ((isset($context["llamadas"]) || array_key_exists("llamadas", $context) ? $context["llamadas"] : (function () { throw new RuntimeError('Variable "llamadas" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
          <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos-llamadas", ["factura" => twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-primary px-3\">
            <i class=\"mdi mdi-file-phone-outline mr-3\"></i>Consultar llamadas
          </a>
        </div>
      ";
        }
        // line 19
        echo "      ";
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 19, $this->source); })()), "tipodoc", [], "any", false, false, false, 19) == 2) &&  !(isset($context["cobrado"]) || array_key_exists("cobrado", $context) ? $context["cobrado"] : (function () { throw new RuntimeError('Variable "cobrado" does not exist.', 19, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "redsysActivo", [], "any", false, false, false, 19))) {
            // line 20
            echo "        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
          <button type=\"button\" id=\"btn-cobro\" class=\"btn btn-block btn-primary px-3\">
            <i class=\"mdi mdi-credit-card-outline mr-3\"></i>Realizar pago
          </button>
        </div>
      ";
        }
        // line 26
        echo "      <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 27, $this->source); })()), "tipodoc", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary px-3\">
          <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
        </a>
      </div>
    </div>
    <div class=\"document-view my-2 p-3\">
      ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 33, $this->source); })()), "tipodoc", [], "any", false, false, false, 33) == 8)) {
            // line 34
            echo "        <ul class=\"nav nav-pills\">
          <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link font-weight-bold ";
            // line 36
            echo (((isset($context["esCobro"]) || array_key_exists("esCobro", $context) ? $context["esCobro"] : (function () { throw new RuntimeError('Variable "esCobro" does not exist.', 36, $this->source); })())) ? ("") : ("active"));
            echo "\" id=\"documento-tab\" data-toggle=\"tab\" href=\"#tab-documento\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Factura</a>
          </li>
          <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link font-weight-bold ";
            // line 39
            echo (((isset($context["esCobro"]) || array_key_exists("esCobro", $context) ? $context["esCobro"] : (function () { throw new RuntimeError('Variable "esCobro" does not exist.', 39, $this->source); })())) ? ("active") : (""));
            echo "\" id=\"vencimientos-tab\" data-toggle=\"tab\" href=\"#tab-vencimientos\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recibos</a>
          </li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane show ";
            // line 43
            echo (((isset($context["esCobro"]) || array_key_exists("esCobro", $context) ? $context["esCobro"] : (function () { throw new RuntimeError('Variable "esCobro" does not exist.', 43, $this->source); })())) ? ("") : ("active"));
            echo " p-3\" id=\"tab-documento\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            ";
            // line 44
            $this->loadTemplate("documentos/documentos-view-doc.html.twig", "documentos/documentos-view.html.twig", 44)->display($context);
            // line 45
            echo "          </div>
          <div class=\"tab-pane p-3 ";
            // line 46
            echo (((isset($context["esCobro"]) || array_key_exists("esCobro", $context) ? $context["esCobro"] : (function () { throw new RuntimeError('Variable "esCobro" does not exist.', 46, $this->source); })())) ? ("active") : (""));
            echo "\" id=\"tab-vencimientos\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            ";
            // line 47
            $this->loadTemplate("documentos/documentos-view-rec.html.twig", "documentos/documentos-view.html.twig", 47)->display($context);
            // line 48
            echo "          </div>
        </div>
      </div>
    ";
        } else {
            // line 52
            echo "      ";
            $this->loadTemplate("documentos/documentos-view-doc.html.twig", "documentos/documentos-view.html.twig", 52)->display($context);
            // line 53
            echo "    ";
        }
        // line 54
        echo "  </div>
</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 56, $this->source); })()), "tipodoc", [], "any", false, false, false, 56) == 2) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 56, $this->source); })()), "pedido_cobro_ident", [], "any", false, false, false, 56))) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "redsysActivo", [], "any", false, false, false, 56))) {
            // line 57
            echo "  <script>
    \$(function () {
      \$('#btn-cobro').on('click', function () {
        T.modal({
          url: T.path('documentos/cobro', ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "),
          id: 'cobro-modal'
        });
      });
    });
  </script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentos/documentos-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  191 => 57,  189 => 56,  179 => 55,  168 => 54,  165 => 53,  162 => 52,  156 => 48,  154 => 47,  150 => 46,  147 => 45,  145 => 44,  141 => 43,  134 => 39,  128 => 36,  124 => 34,  122 => 33,  113 => 27,  110 => 26,  102 => 20,  99 => 19,  91 => 14,  88 => 13,  86 => 12,  79 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main class=\"container-fluid\">
    <h1 class=\"font-weight-normal\">Consulta de
      {{ cab.nombreDoc }}</h1>
    <div class=\"row justify-content-around my-2 text-nowrap mx-0\">
      <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
        <a href=\"{{ url('documentos-print', {id: cab.id}) }}\" class=\"btn btn-block btn-primary px-3\">
          <i class=\"mdi mdi-file-pdf-outline mr-3\"></i>Descargar PDF
        </a>
      </div>
      {% if llamadas %}
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
          <a href=\"{{ url('documentos-llamadas', {factura: cab.id}) }}\" class=\"btn btn-block btn-primary px-3\">
            <i class=\"mdi mdi-file-phone-outline mr-3\"></i>Consultar llamadas
          </a>
        </div>
      {% endif %}
      {% if cab.tipodoc == 2 and not cobrado and config.redsysActivo %}
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
          <button type=\"button\" id=\"btn-cobro\" class=\"btn btn-block btn-primary px-3\">
            <i class=\"mdi mdi-credit-card-outline mr-3\"></i>Realizar pago
          </button>
        </div>
      {% endif %}
      <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
        <a href=\"{{ url('documentos', {tipo: cab.tipodoc}) }}\" class=\"btn btn-block btn-primary px-3\">
          <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
        </a>
      </div>
    </div>
    <div class=\"document-view my-2 p-3\">
      {% if cab.tipodoc == 8 %}
        <ul class=\"nav nav-pills\">
          <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link font-weight-bold {{ esCobro ? '' : 'active'}}\" id=\"documento-tab\" data-toggle=\"tab\" href=\"#tab-documento\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Factura</a>
          </li>
          <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link font-weight-bold {{ esCobro ? 'active' : ''}}\" id=\"vencimientos-tab\" data-toggle=\"tab\" href=\"#tab-vencimientos\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recibos</a>
          </li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane show {{ esCobro ? '' : 'active'}} p-3\" id=\"tab-documento\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            {%include 'documentos/documentos-view-doc.html.twig' %}
          </div>
          <div class=\"tab-pane p-3 {{ esCobro ? 'active' : ''}}\" id=\"tab-vencimientos\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            {%include 'documentos/documentos-view-rec.html.twig' %}
          </div>
        </div>
      </div>
    {%else %}
      {%include 'documentos/documentos-view-doc.html.twig' %}
    {% endif %}
  </div>
</main>{% endblock %}{% block javascripts %}
{% if cab.tipodoc == 2 and cab.pedido_cobro_ident is empty and config.redsysActivo %}
  <script>
    \$(function () {
      \$('#btn-cobro').on('click', function () {
        T.modal({
          url: T.path('documentos/cobro', {{ cab.id }}),
          id: 'cobro-modal'
        });
      });
    });
  </script>
{% endif %}{% endblock %}
", "documentos/documentos-view.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\documentos\\documentos-view.html.twig");
    }
}
