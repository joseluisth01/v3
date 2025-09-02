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

/* varios/categoria-grid.html.twig */
class __TwigTemplate_8019fce615d6a45a497949024de9f6ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/categoria-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/categoria-grid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/categoria-grid.html.twig", 1);
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
        echo "  <main>
    ";
        // line 4
        if (twig_test_empty((isset($context["lista_familias"]) || array_key_exists("lista_familias", $context) ? $context["lista_familias"] : (function () { throw new RuntimeError('Variable "lista_familias" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "      <div class=\"text-center py-5\">
        <h1 class=\"text-center cat-name-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
            echo "</h1>
        <div class=\"h1\">La categoría no tiene familias</div>
      </div>
    ";
        } else {
            // line 10
            echo "      <div class=\"text-center\">
        <h1 class=\"cat-name-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
      </div>
      <div class=\"familias-grid-container\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_familias"]) || array_key_exists("lista_familias", $context) ? $context["lista_familias"] : (function () { throw new RuntimeError('Variable "lista_familias" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
                // line 15
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\">
            <div style=\"background: url('";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["fam"], "url_imagen", [], "any", false, false, false, 16)), "html", null, true);
                echo "') no-repeat center\">
              <h2 class=\"name theme-bg\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 17), "html", null, true);
                echo "</h2>
            </div>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </div>
";
            // line 25
            echo "    ";
        }
        // line 26
        echo "  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/categoria-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  118 => 25,  115 => 21,  105 => 17,  101 => 16,  96 => 15,  92 => 14,  86 => 11,  83 => 10,  76 => 6,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main>
    {% if lista_familias is empty %}
      <div class=\"text-center py-5\">
        <h1 class=\"text-center cat-name-title\">{{ cat.nombre }}</h1>
        <div class=\"h1\">La categoría no tiene familias</div>
      </div>
    {% else %}
      <div class=\"text-center\">
        <h1 class=\"cat-name-title\">{{ cat.nombre }}</h1>
      </div>
      <div class=\"familias-grid-container\">
        {% for fam in lista_familias %}
          <a href=\"{{ url('familia-grid', {param: fam.url}) }}\">
            <div style=\"background: url('{{ asset(fam.url_imagen) }}') no-repeat center\">
              <h2 class=\"name theme-bg\">{{ fam.nombre }}</h2>
            </div>
          </a>
        {% endfor %}
      </div>
{#       <div class=\"description\">
        {{ cat.web_description | raw}}
      </div> #}
    {% endif %}
  </main>
{% endblock %}
", "varios/categoria-grid.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\categoria-grid.html.twig");
    }
}
