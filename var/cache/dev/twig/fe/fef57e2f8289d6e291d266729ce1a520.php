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

/* varios/subfamilia.html.twig */
class __TwigTemplate_9e5bef52281f62b4de6f0874c912c47a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/subfamilia.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/subfamilia.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/subfamilia.html.twig", 1);
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
        $this->loadTemplate("tools/breadcrumb.html.twig", "varios/subfamilia.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"d-flex justify-content-center align-items-center mt-5\">
      <h1 class=\"fam-name-title\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sub"]) || array_key_exists("sub", $context) ? $context["sub"] : (function () { throw new RuntimeError('Variable "sub" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 8
        if (twig_test_empty((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "      <div class=\"d-flex justify-content-center align-items-center py-5 my-5\">
        <div class=\"h1\">No hay artículos que coincidan con su filtro</div>
      </div>
    ";
        } else {
            // line 13
            echo "      <div class=\" d-flex flex-wrap flex-md-nowrap justify-content-center\">
        ";
            // line 14
            $this->loadTemplate("tools/atributos.html.twig", "varios/subfamilia.html.twig", 14)->display($context);
            // line 15
            echo "        <div class=\"w-100\">
          <div class=\"product-list-container\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 17, $this->source); })()));
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
                // line 18
                echo "              ";
                $this->loadTemplate("articulo/art-minificha.html.twig", "varios/subfamilia.html.twig", 18)->display($context);
                // line 19
                echo "            ";
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
            // line 20
            echo "          </div>
        </div>
      </div>
      <div class=\"description\">
        ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, (isset($context["sub"]) || array_key_exists("sub", $context) ? $context["sub"] : (function () { throw new RuntimeError('Variable "sub" does not exist.', 24, $this->source); })()), "web_description", [], "any", false, false, false, 24);
            echo "
      </div>
    ";
        }
        // line 27
        echo "    ";
        $this->loadTemplate("tools/pagination.html.twig", "varios/subfamilia.html.twig", 27)->display($context);
        // line 28
        echo "  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/subfamilia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 28,  144 => 27,  138 => 24,  132 => 20,  118 => 19,  115 => 18,  98 => 17,  94 => 15,  92 => 14,  89 => 13,  83 => 9,  81 => 8,  76 => 6,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main>
    {% include 'tools/breadcrumb.html.twig' %}
    <div class=\"d-flex justify-content-center align-items-center mt-5\">
      <h1 class=\"fam-name-title\">{{ sub.nombre }}</h1>
    </div>
    {% if articulos is empty %}
      <div class=\"d-flex justify-content-center align-items-center py-5 my-5\">
        <div class=\"h1\">No hay artículos que coincidan con su filtro</div>
      </div>
    {% else %}
      <div class=\" d-flex flex-wrap flex-md-nowrap justify-content-center\">
        {% include 'tools/atributos.html.twig' %}
        <div class=\"w-100\">
          <div class=\"product-list-container\">
            {% for art in articulos %}
              {% include 'articulo/art-minificha.html.twig' %}
            {% endfor %}
          </div>
        </div>
      </div>
      <div class=\"description\">
        {{ sub.web_description | raw}}
      </div>
    {% endif %}
    {% include 'tools/pagination.html.twig' %}
  </main>
{% endblock %}
", "varios/subfamilia.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\subfamilia.html.twig");
    }
}
