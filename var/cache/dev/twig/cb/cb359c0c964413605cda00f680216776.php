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

/* admin/form-recogida.html.twig */
class __TwigTemplate_7e4c754a179e1711840fb2197ee2d65a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form-recogida.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form-recogida.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/form-recogida.html.twig", 1);
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
        echo "  <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-form-rec-save");
        echo "\" method=\"POST\">
    <div class=\"card-content d-flex justify-content-between py-2\">
      <h4>FORMULARIO DE RECOGIDA DE DISPOSITIVOS</h4>
      <button type=\"submit\" class=\"btn btn-success\">
        <i class=\"mdi mdi-content-save mr-3\"></i>Grabar
      </button>
    </div>
    <div class=\"card-content\">
      <div class=\"form-group\">
        <label for=\"texto-cabecera\">Cabecera</label>
        <textarea name=\"cabecera\" id=\"texto-cabecera\" class=\"form-control summernote\">
          ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cabecera"]) || array_key_exists("cabecera", $context) ? $context["cabecera"] : (function () { throw new RuntimeError('Variable "cabecera" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "
        </textarea>
      </div>
      <div class=\"form-group\">
        <label for=\"texto-pie\">Pie</label>
        <textarea name=\"pie\" id=\"texto-pie\" class=\"form-control summernote\">
          ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["pie"]) || array_key_exists("pie", $context) ? $context["pie"] : (function () { throw new RuntimeError('Variable "pie" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "
        </textarea>
      </div>
    </div>
  </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "  <script>
    \$( function() {
      \$( '.summernote' ).summernote( { lang: 'es-ES', minHeight: 150 } );
    } );
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/form-recogida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  109 => 26,  93 => 20,  84 => 14,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block body %}
  <form action=\"{{path('admin-form-rec-save')}}\" method=\"POST\">
    <div class=\"card-content d-flex justify-content-between py-2\">
      <h4>FORMULARIO DE RECOGIDA DE DISPOSITIVOS</h4>
      <button type=\"submit\" class=\"btn btn-success\">
        <i class=\"mdi mdi-content-save mr-3\"></i>Grabar
      </button>
    </div>
    <div class=\"card-content\">
      <div class=\"form-group\">
        <label for=\"texto-cabecera\">Cabecera</label>
        <textarea name=\"cabecera\" id=\"texto-cabecera\" class=\"form-control summernote\">
          {{ cabecera }}
        </textarea>
      </div>
      <div class=\"form-group\">
        <label for=\"texto-pie\">Pie</label>
        <textarea name=\"pie\" id=\"texto-pie\" class=\"form-control summernote\">
          {{ pie }}
        </textarea>
      </div>
    </div>
  </form>
{% endblock %}
{% block javascripts %}
  <script>
    \$( function() {
      \$( '.summernote' ).summernote( { lang: 'es-ES', minHeight: 150 } );
    } );
  </script>
{% endblock %}
", "admin/form-recogida.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\form-recogida.html.twig");
    }
}
