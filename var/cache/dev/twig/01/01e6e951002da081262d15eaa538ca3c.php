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

/* varios/info-contacto.html.twig */
class __TwigTemplate_a8bc7afb94921e84429f3a47c6be15da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/info-contacto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/info-contacto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/info-contacto.html.twig", 1);
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
        echo "  <style>
    body {
      background-color: #ededed;
    }
    h1 {
      margin-top: 1.2rem;
    }
    .info-direccion > h4 {
      margin-top: 1.2rem;
    }
    .info-direccion > div {
      margin-top: 0.35rem;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "  <main>
    <div class=\"row mx-2 mx-md-5\">
      <h1 class=\"col font-weight-bold\" itemprop=\"legalName\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "empresa", [], "any", false, false, false, 21), "nombre", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row mx-2 mx-md-5 mb-2\">
      <section class=\"col-12 col-md-8\">
        <h1>¿QUIENES SOMOS?</h1>
        <div class=\"py-2 px-5 mb-3\">
          ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "data", [], "any", false, false, false, 27), "footertxt", [], "any", false, false, false, 27), "html", null, true);
        echo "
        </div>
        <h1>¿DONDE ESTAMOS?</h1>
        <div class=\"py-2 px-5 mb-3\">
          <div>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "empresa", [], "any", false, false, false, 31), "direccion", [], "any", false, false, false, 31), "html", null, true);
        echo "</div>
          <div class=\"mb-2\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "empresa", [], "any", false, false, false, 32), "cpostal", [], "any", false, false, false, 32), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "empresa", [], "any", false, false, false, 32), "localidad", [], "any", false, false, false, 32), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "empresa", [], "any", false, false, false, 32), "provincia", [], "any", false, false, false, 32), "html", null, true);
        echo "</div>
          ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "data", [], "any", false, false, false, 33), "google_maps", [], "any", false, false, false, 33))) {
            // line 34
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "google_maps", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\">
              <img class=\"img-fluid w-100\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gmaps.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "empresa", [], "any", false, false, false, 35), "direccion", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
            </a>
          ";
        }
        // line 38
        echo "        </div>
        ";
        // line 39
        if (array_key_exists("cms", $context)) {
            // line 40
            echo "          <h1>INFORMACIÓN</h1>
          <div class=\"py-2 px-5 mb-3\">
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "              <div class=\"mb-3\">
                <i class=\"mdi mdi-chevron-right mdi-18px\"></i>
                <a style=\"font-weight: 500;\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos", ["item" => twig_get_attribute($this->env, $this->source, $context["item"], "web_url", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 45), "html", null, true);
                echo "</a>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </div>
        ";
        }
        // line 50
        echo "      </section>
      <section class=\"col-12 col-md-4 info-direccion\">
        <h4>DIRECCIÓN</h4>
        <address itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/Address\">
          <div itemprop=\"streetAddress\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "empresa", [], "any", false, false, false, 54), "direccion", [], "any", false, false, false, 54), "html", null, true);
        echo "</div>
          <div>
            <span itemprop=\"postalCode\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "empresa", [], "any", false, false, false, 56), "cpostal", [], "any", false, false, false, 56), "html", null, true);
        echo "</span>
            -
            <span itemprop=\"addressLocality\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "empresa", [], "any", false, false, false, 58), "localidad", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>,
            <span itemprop=\"addressRegion\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "empresa", [], "any", false, false, false, 59), "provincia", [], "any", false, false, false, 59), "html", null, true);
        echo "</span>
          </div>
        </address>
        <h4>CONTACTO</h4>
        <div>
          <i class=\"mdi mdi-phone mdi-18px mr-2\"></i>
          <span itemprop=\"telephone\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "empresa", [], "any", false, false, false, 65), "telefono", [], "any", false, false, false, 65), "html", null, true);
        echo "</span>
        </div>
        <div>
          <i class=\"mdi mdi-email mdi-18px mr-2\"></i>
          <span itemprop=\"email\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "empresa", [], "any", false, false, false, 69), "email", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
        </div>
        <h4>HORARIO</h4>
        <div>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "empresa", [], "any", false, false, false, 72), "horario", [], "any", false, false, false, 72), "html", null, true);
        echo "</div>
      </section>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/info-contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 72,  218 => 69,  211 => 65,  202 => 59,  198 => 58,  193 => 56,  188 => 54,  182 => 50,  178 => 48,  167 => 45,  163 => 43,  159 => 42,  155 => 40,  153 => 39,  150 => 38,  142 => 35,  137 => 34,  135 => 33,  127 => 32,  123 => 31,  116 => 27,  107 => 21,  103 => 19,  93 => 18,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
  <style>
    body {
      background-color: #ededed;
    }
    h1 {
      margin-top: 1.2rem;
    }
    .info-direccion > h4 {
      margin-top: 1.2rem;
    }
    .info-direccion > div {
      margin-top: 0.35rem;
    }
  </style>
{% endblock %}
{% block body %}
  <main>
    <div class=\"row mx-2 mx-md-5\">
      <h1 class=\"col font-weight-bold\" itemprop=\"legalName\">{{ config.empresa.nombre }}</h1>
    </div>
    <div class=\"row mx-2 mx-md-5 mb-2\">
      <section class=\"col-12 col-md-8\">
        <h1>¿QUIENES SOMOS?</h1>
        <div class=\"py-2 px-5 mb-3\">
          {{ config.data.footertxt}}
        </div>
        <h1>¿DONDE ESTAMOS?</h1>
        <div class=\"py-2 px-5 mb-3\">
          <div>{{ config.empresa.direccion }}</div>
          <div class=\"mb-2\">{{config.empresa.cpostal}}-{{config.empresa.localidad}},{{config.empresa.provincia}}</div>
          {% if config.data.google_maps is not empty %}
            <a href=\"{{ config.data.google_maps }}\" target=\"_blank\">
              <img class=\"img-fluid w-100\" src=\"{{ asset('images/gmaps.jpg') }}\" alt=\"{{ config.empresa.direccion }}\">
            </a>
          {% endif %}
        </div>
        {% if cms is defined %}
          <h1>INFORMACIÓN</h1>
          <div class=\"py-2 px-5 mb-3\">
            {% for item in cms %}
              <div class=\"mb-3\">
                <i class=\"mdi mdi-chevron-right mdi-18px\"></i>
                <a style=\"font-weight: 500;\" href=\"{{ url('textos', { item: item.web_url})}}\">{{item.nombre}}</a>
              </div>
            {% endfor %}
          </div>
        {% endif %}
      </section>
      <section class=\"col-12 col-md-4 info-direccion\">
        <h4>DIRECCIÓN</h4>
        <address itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/Address\">
          <div itemprop=\"streetAddress\">{{ config.empresa.direccion }}</div>
          <div>
            <span itemprop=\"postalCode\">{{config.empresa.cpostal}}</span>
            -
            <span itemprop=\"addressLocality\">{{config.empresa.localidad}}</span>,
            <span itemprop=\"addressRegion\">{{config.empresa.provincia}}</span>
          </div>
        </address>
        <h4>CONTACTO</h4>
        <div>
          <i class=\"mdi mdi-phone mdi-18px mr-2\"></i>
          <span itemprop=\"telephone\">{{ config.empresa.telefono }}</span>
        </div>
        <div>
          <i class=\"mdi mdi-email mdi-18px mr-2\"></i>
          <span itemprop=\"email\">{{ config.empresa.email }}</span>
        </div>
        <h4>HORARIO</h4>
        <div>{{ config.empresa.horario }}</div>
      </section>
    </div>
  </main>
{% endblock %}
", "varios/info-contacto.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\info-contacto.html.twig");
    }
}
