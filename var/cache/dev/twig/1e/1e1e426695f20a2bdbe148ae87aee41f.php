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

/* varios/form-recogida.html.twig */
class __TwigTemplate_90b5fce570ae20891c3f9bb3e95f8cfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/form-recogida.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/form-recogida.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/form-recogida.html.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/fileinput.min.css"), "html", null, true);
        echo "\">
  <style>
    #form-recogida label {
      font-weight: bold;
    }

    #form-recogida label.required:after {
      content: \"*\";
      font-size: 1.2em;
      color: red;
      padding-left: 0.3em;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "  <main class=\"container-fluid bg-white\">
    ";
        // line 19
        if (array_key_exists("msgError", $context)) {
            // line 20
            echo "      <h4 class=\"alert alert-danger text-center\" role=\"alert\">";
            echo (isset($context["msgError"]) || array_key_exists("msgError", $context) ? $context["msgError"] : (function () { throw new RuntimeError('Variable "msgError" does not exist.', 20, $this->source); })());
            echo "</h4>
    ";
        }
        // line 22
        echo "    <section style=\"margin-top:60px; text-align:center; margin-bottom:20px;\">
      ";
        // line 23
        echo (isset($context["cabecera"]) || array_key_exists("cabecera", $context) ? $context["cabecera"] : (function () { throw new RuntimeError('Variable "cabecera" does not exist.', 23, $this->source); })());
        echo "
    </section>
    <section>
      <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("recogida-save");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" id=\"form-recogida\" class=\"container mb-2\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("send-article"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
          <label for=\"nombre\" class=\"required\">Nombre y Apellidos</label>
          <input type=\"text\" name=\"nombre\" id=\"nombre\" class=\"form-control\" placeholder=\"Nombre\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"telefono\" class=\"required\">Número de Teléfono</label>
          <input type=\"tel\" name=\"telefono\" id=\"telefono\" class=\"form-control\" placeholder=\"Poner número teléfono\" required aria-required=\"true\" pattern=\"[0-9()#&amp;+*-=.]+\" title=\"Solo se aceptan números y caracteres de teléfono (#,-,*,etc).\">
        </div>
        <div class=\"form-group\">
          <label for=\"direccion\" class=\"required\">Dirección Calle</label>
          <input type=\"text\" name=\"direccion\" id=\"direccion\" class=\"form-control\" placeholder=\"Calle\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"localidad\" class=\"required\">Localidad</label>
          <input type=\"text\" name=\"localidad\" id=\"localidad\" class=\"form-control\" placeholder=\"Localidad\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <div class=\"row\">
            <div class=\"col col-md-4\">
              <label for=\"cpostal\" class=\"required\">Código Postal</label>
              <input type=\"text\" name=\"cpostal\" id=\"cpostal\" class=\"form-control\" placeholder=\"Código postal\" required aria-required=\"true\" maxlength=\"20\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"email\" class=\"required\">Email</label>
          <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email (necesario por favor)\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"dispositivo\" class=\"required\">Dispositivo</label>
          <input type=\"text\" name=\"dispositivo\" id=\"dispositivo\" class=\"form-control\" placeholder=\"Dispositivo o Articulo que solicitas su recogida\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"numserie\">Número de Serie</label>
          <input type=\"text\" name=\"numserie\" id=\"numserie\" class=\"form-control\" placeholder=\"Si lo proporcionas, mejor \">
        </div>
        <div class=\"form-group\">
          <label for=\"desbloqueo\">Código Desbloqueo</label>
          <input type=\"text\" name=\"desbloqueo\" id=\"desbloqueo\" class=\"form-control\" placeholder=\"Código Desbloqueo o secuencia patrón (solo para comprobar correcto funcionamiento posterior)\">
        </div>
        <div class=\"form-group\">
          <label for=\"averia\" class=\"required\">Avería</label>
          <textarea name=\"averia\" id=\"averia\" rows=\"5\" class=\"form-control\" placeholder=\"Cuéntanos la avería de tu dispositivo\" required aria-required=\"true\"></textarea>
        </div>
        <div class=\"form-group\">
          <label for=\"imagen\">Si necesitas enviarnos alguna imagen descriptiva, hazlo aquí</label>
          <input type=\"file\" name=\"imagenes[]\" id=\"imagen\" class=\"form-control\" multiple>
        </div>
        <div class=\"d-flex justify-content-center py-3\">
          <button type=\"submit\" class=\"btn btn-success w-50\" style=\"margin-bottom:80px; margin-top:20px; border-radius:5px !important; display:flex; align-items:center; justify-content:center;\">
            <span class=\"mdi mdi-send mdi-24px mr-2\"></span>Enviar
          </button>
        </div>
      </form>
    </section>
    <section>
      ";
        // line 84
        echo (isset($context["pie"]) || array_key_exists("pie", $context) ? $context["pie"] : (function () { throw new RuntimeError('Variable "pie" does not exist.', 84, $this->source); })());
        echo "
    </section>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/fileinput.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/theme.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/locales/es.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$.fn.fileinput.defaults.language = 'es';
    \$.fn.fileinput.defaults.maxFileSize = T.maxFileSizeUpload;
  </script>
  <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/recogida.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/form-recogida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 96,  222 => 91,  218 => 90,  213 => 89,  203 => 88,  189 => 84,  129 => 27,  125 => 26,  119 => 23,  116 => 22,  110 => 20,  108 => 19,  105 => 18,  95 => 17,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendor/fileinput/fileinput.min.css') }}\">
  <style>
    #form-recogida label {
      font-weight: bold;
    }

    #form-recogida label.required:after {
      content: \"*\";
      font-size: 1.2em;
      color: red;
      padding-left: 0.3em;
    }
  </style>
{% endblock %}
{% block body %}
  <main class=\"container-fluid bg-white\">
    {% if msgError is defined %}
      <h4 class=\"alert alert-danger text-center\" role=\"alert\">{{ msgError | raw }}</h4>
    {% endif %}
    <section style=\"margin-top:60px; text-align:center; margin-bottom:20px;\">
      {{ cabecera | raw }}
    </section>
    <section>
      <form action=\"{{ url('recogida-save') }}\" enctype=\"multipart/form-data\" method=\"post\" id=\"form-recogida\" class=\"container mb-2\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('send-article') }}\">
        <div class=\"form-group\">
          <label for=\"nombre\" class=\"required\">Nombre y Apellidos</label>
          <input type=\"text\" name=\"nombre\" id=\"nombre\" class=\"form-control\" placeholder=\"Nombre\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"telefono\" class=\"required\">Número de Teléfono</label>
          <input type=\"tel\" name=\"telefono\" id=\"telefono\" class=\"form-control\" placeholder=\"Poner número teléfono\" required aria-required=\"true\" pattern=\"[0-9()#&amp;+*-=.]+\" title=\"Solo se aceptan números y caracteres de teléfono (#,-,*,etc).\">
        </div>
        <div class=\"form-group\">
          <label for=\"direccion\" class=\"required\">Dirección Calle</label>
          <input type=\"text\" name=\"direccion\" id=\"direccion\" class=\"form-control\" placeholder=\"Calle\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"localidad\" class=\"required\">Localidad</label>
          <input type=\"text\" name=\"localidad\" id=\"localidad\" class=\"form-control\" placeholder=\"Localidad\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <div class=\"row\">
            <div class=\"col col-md-4\">
              <label for=\"cpostal\" class=\"required\">Código Postal</label>
              <input type=\"text\" name=\"cpostal\" id=\"cpostal\" class=\"form-control\" placeholder=\"Código postal\" required aria-required=\"true\" maxlength=\"20\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"email\" class=\"required\">Email</label>
          <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email (necesario por favor)\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"dispositivo\" class=\"required\">Dispositivo</label>
          <input type=\"text\" name=\"dispositivo\" id=\"dispositivo\" class=\"form-control\" placeholder=\"Dispositivo o Articulo que solicitas su recogida\" required aria-required=\"true\">
        </div>
        <div class=\"form-group\">
          <label for=\"numserie\">Número de Serie</label>
          <input type=\"text\" name=\"numserie\" id=\"numserie\" class=\"form-control\" placeholder=\"Si lo proporcionas, mejor \">
        </div>
        <div class=\"form-group\">
          <label for=\"desbloqueo\">Código Desbloqueo</label>
          <input type=\"text\" name=\"desbloqueo\" id=\"desbloqueo\" class=\"form-control\" placeholder=\"Código Desbloqueo o secuencia patrón (solo para comprobar correcto funcionamiento posterior)\">
        </div>
        <div class=\"form-group\">
          <label for=\"averia\" class=\"required\">Avería</label>
          <textarea name=\"averia\" id=\"averia\" rows=\"5\" class=\"form-control\" placeholder=\"Cuéntanos la avería de tu dispositivo\" required aria-required=\"true\"></textarea>
        </div>
        <div class=\"form-group\">
          <label for=\"imagen\">Si necesitas enviarnos alguna imagen descriptiva, hazlo aquí</label>
          <input type=\"file\" name=\"imagenes[]\" id=\"imagen\" class=\"form-control\" multiple>
        </div>
        <div class=\"d-flex justify-content-center py-3\">
          <button type=\"submit\" class=\"btn btn-success w-50\" style=\"margin-bottom:80px; margin-top:20px; border-radius:5px !important; display:flex; align-items:center; justify-content:center;\">
            <span class=\"mdi mdi-send mdi-24px mr-2\"></span>Enviar
          </button>
        </div>
      </form>
    </section>
    <section>
      {{ pie | raw }}
    </section>
  </main>
{% endblock %}
{% block javascripts %}
  <script src=\"{{ asset('vendor/fileinput/fileinput.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/fileinput/theme.js') }}\"></script>
  <script src=\"{{ asset('vendor/fileinput/locales/es.js') }}\"></script>
  <script>
    \$.fn.fileinput.defaults.language = 'es';
    \$.fn.fileinput.defaults.maxFileSize = T.maxFileSizeUpload;
  </script>
  <script src=\"{{ asset('js/recogida.js') }}\"></script>
{% endblock %}
", "varios/form-recogida.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\form-recogida.html.twig");
    }
}
