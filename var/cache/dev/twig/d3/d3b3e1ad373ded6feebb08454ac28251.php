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

/* varios/marca-grid.html.twig */
class __TwigTemplate_1a1b4ff2d8de31d2de56c67c4a99c77f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/marca-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/marca-grid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/marca-grid.html.twig", 1);
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
    .mar-name-title {
      font-size: 2.5rem;
      font-weight: bold;
      color: var(--theme-main-color);
      text-shadow: 1px 0 1px #ccc, 0 1px 1px #eee, 2px 1px 1px #ccc, 1px 2px 1px #eee, 3px 2px 1px #ccc, 2px 3px 1px #eee, 4px 3px 1px #ccc, 3px 4px 1px #eee, 5px 4px 1px #ccc, 4px 5px 1px #eee;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <main>
    ";
        // line 14
        if (twig_test_empty((isset($context["lista_familias"]) || array_key_exists("lista_familias", $context) ? $context["lista_familias"] : (function () { throw new RuntimeError('Variable "lista_familias" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "      <div class=\"text-center py-5\">
        <div class=\"text-center mar-name-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["marca"]) || array_key_exists("marca", $context) ? $context["marca"] : (function () { throw new RuntimeError('Variable "marca" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
        <h1>La marca no tiene familias</h1>
      </div>
    ";
        } else {
            // line 20
            echo "      <div class=\"text-center\">
        <span class=\"mar-name-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["marca"]) || array_key_exists("marca", $context) ? $context["marca"] : (function () { throw new RuntimeError('Variable "marca" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
      </div>
      <div class=\"familias-grid-container\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_familias"]) || array_key_exists("lista_familias", $context) ? $context["lista_familias"] : (function () { throw new RuntimeError('Variable "lista_familias" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
                // line 25
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => ((twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 25) . "/_") . twig_get_attribute($this->env, $this->source, (isset($context["marca"]) || array_key_exists("marca", $context) ? $context["marca"] : (function () { throw new RuntimeError('Variable "marca" does not exist.', 25, $this->source); })()), "web_url", [], "any", false, false, false, 25))]), "html", null, true);
                echo "\">
            <div style=\"background: url('";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["fam"], "url_imagen", [], "any", false, false, false, 26)), "html", null, true);
                echo "') no-repeat center\">
              <div class=\"name theme-bg font-weight-bold\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 27), "html", null, true);
                echo "</div>
            </div>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
      <div class=\"product-list-container-2\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 33, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
                // line 34
                echo "          ";
                $this->loadTemplate("articulo/art-minificha-2.html.twig", "varios/marca-grid.html.twig", 34)->display($context);
                // line 35
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </div>

    ";
        }
        // line 39
        echo "  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/marca-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 39,  182 => 36,  168 => 35,  165 => 34,  148 => 33,  144 => 31,  134 => 27,  130 => 26,  125 => 25,  121 => 24,  115 => 21,  112 => 20,  105 => 16,  102 => 15,  100 => 14,  97 => 13,  87 => 12,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
  <style>
    .mar-name-title {
      font-size: 2.5rem;
      font-weight: bold;
      color: var(--theme-main-color);
      text-shadow: 1px 0 1px #ccc, 0 1px 1px #eee, 2px 1px 1px #ccc, 1px 2px 1px #eee, 3px 2px 1px #ccc, 2px 3px 1px #eee, 4px 3px 1px #ccc, 3px 4px 1px #eee, 5px 4px 1px #ccc, 4px 5px 1px #eee;
    }
  </style>
{% endblock %}
{% block body %}
  <main>
    {% if lista_familias is empty %}
      <div class=\"text-center py-5\">
        <div class=\"text-center mar-name-title\">{{ marca.nombre }}</div>
        <h1>La marca no tiene familias</h1>
      </div>
    {% else %}
      <div class=\"text-center\">
        <span class=\"mar-name-title\">{{ marca.nombre }}</span>
      </div>
      <div class=\"familias-grid-container\">
        {% for fam in lista_familias %}
          <a href=\"{{ url('familia-grid', {param: fam.url ~ '/_' ~ marca.web_url}) }}\">
            <div style=\"background: url('{{ asset(fam.url_imagen) }}') no-repeat center\">
              <div class=\"name theme-bg font-weight-bold\">{{ fam.nombre }}</div>
            </div>
          </a>
        {% endfor %}
      </div>
      <div class=\"product-list-container-2\">
        {% for art in articulos %}
          {% include 'articulo/art-minificha-2.html.twig' %}
        {% endfor %}
      </div>

    {% endif %}
  </main>
{% endblock %}
", "varios/marca-grid.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\marca-grid.html.twig");
    }
}
