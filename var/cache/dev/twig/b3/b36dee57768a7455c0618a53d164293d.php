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

/* tools/breadcrumb.html.twig */
class __TwigTemplate_0594a86fa6554dbd37ae7b39eddbf191 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/breadcrumb.html.twig"));

        // line 1
        echo "<nav aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb d-flex justify-content-start\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) || array_key_exists("breadcrumb", $context) ? $context["breadcrumb"] : (function () { throw new RuntimeError('Variable "breadcrumb" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "param", [], "any", false, false, false, 4)) {
                // line 5
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                <li class=\"breadcrumb-item text-dark\" aria-current=\"page\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 6), "html", null, true);
                    echo "</li>
            ";
                } else {
                    // line 8
                    echo "                <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["item"], "ruta", [], "any", false, false, false, 8), ["param" => twig_get_attribute($this->env, $this->source, $context["item"], "param", [], "any", false, false, false, 8)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 8), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 10
                echo "        ";
            } else {
                // line 11
                echo "            <li class=\"breadcrumb-item\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["item"], "ruta", [], "any", false, false, false, 11));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 11), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </ol>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tools/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 13,  74 => 11,  71 => 10,  63 => 8,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb d-flex justify-content-start\">
    {% for item in breadcrumb %}
        {% if item.param %}
            {% if item.active %}
                <li class=\"breadcrumb-item text-dark\" aria-current=\"page\">{{item.nombre}}</li>
            {% else %}
                <li class=\"breadcrumb-item\"><a href=\"{{ url(item.ruta, {param: item.param}) }}\">{{item.nombre}}</a></li>
            {% endif %}
        {% else %}
            <li class=\"breadcrumb-item\"><a href=\"{{ url(item.ruta) }}\">{{item.nombre}}</a></li>
        {% endif %}
    {% endfor %}
  </ol>
</nav>
", "tools/breadcrumb.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\tools\\breadcrumb.html.twig");
    }
}
