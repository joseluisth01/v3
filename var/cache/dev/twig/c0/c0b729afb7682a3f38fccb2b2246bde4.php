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

/* tools/pagination.html.twig */
class __TwigTemplate_3641db91b64b16a1e76920929118fe81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/pagination.html.twig"));

        // line 1
        echo "<style>
\t.container-pagination {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tjustify-content: center;
\t}

\t.container-pagination > .pagination {
\t\tmargin-bottom: 0.5rem;
\t}

\t.container-pagination>.pagination:nth-child(2) {
\t\tmargin-left: -1px;
\t\tmargin-right: -1px;
\t}

\t.container-pagination > .separator {
\t\twidth: 100% !important;

\t}

\t@media(min-width: 768px) {
\t\t.container-pagination > .separator {
\t\t\tdisplay: none;
\t\t}
\t}
</style>


<div class=\"container-pagination\">
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()), "items", [], "any", false, false, false, 31));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32) == 1)) {
                // line 33
                echo "\t\t\t<ul class=\"pagination\">
\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["loop"], "index", [], "any", false, false, false, 34) == (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 34) - 1))) {
                // line 35
                echo "\t\t\t</ul>
\t\t\t<div class=\"separator\"></div>
\t\t\t<ul class=\"pagination\">
\t\t\t";
            }
            // line 39
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "separator", [], "any", false, false, false, 39)) {
                // line 40
                echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">...</span>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t<li class=\"page-item ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 45
                $context["linkColor"] = (((twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 45) == "disabled")) ? ("") : ((((twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 45) == "active")) ? ("theme-bg") : ("theme-color"))));
                // line 46
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 46), "html", null, true);
                echo "\" class=\"page-link ";
                echo twig_escape_filter($this->env, (isset($context["linkColor"]) || array_key_exists("linkColor", $context) ? $context["linkColor"] : (function () { throw new RuntimeError('Variable "linkColor" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 48
                echo "\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 48);
                echo "
\t\t\t\t\t\t";
                // line 50
                echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 53
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) == 2)) {
                // line 54
                echo "\t\t\t</ul>
\t\t\t<div class=\"separator\"></div>
\t\t\t<ul class=\"pagination\">
\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 57
$context["loop"], "index", [], "any", false, false, false, 57) == twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 57))) {
                // line 58
                echo "\t\t\t</ul>
\t\t";
            }
            // line 60
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tools/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  153 => 60,  149 => 58,  147 => 57,  142 => 54,  139 => 53,  134 => 50,  129 => 48,  122 => 46,  120 => 45,  115 => 44,  109 => 40,  106 => 39,  100 => 35,  98 => 34,  95 => 33,  92 => 32,  75 => 31,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t.container-pagination {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tjustify-content: center;
\t}

\t.container-pagination > .pagination {
\t\tmargin-bottom: 0.5rem;
\t}

\t.container-pagination>.pagination:nth-child(2) {
\t\tmargin-left: -1px;
\t\tmargin-right: -1px;
\t}

\t.container-pagination > .separator {
\t\twidth: 100% !important;

\t}

\t@media(min-width: 768px) {
\t\t.container-pagination > .separator {
\t\t\tdisplay: none;
\t\t}
\t}
</style>


<div class=\"container-pagination\">
\t{% for item in pagination.items %}
\t\t{% if loop.index == 1 %}
\t\t\t<ul class=\"pagination\">
\t\t{% elseif loop.index == loop.length - 1 %}
\t\t\t</ul>
\t\t\t<div class=\"separator\"></div>
\t\t\t<ul class=\"pagination\">
\t\t\t{% endif %}
\t\t\t{% if item.separator %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">...</span>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item {{item.class}}\">
\t\t\t\t\t{% set linkColor = item.class == 'disabled' ? '' : (item.class == 'active' ? 'theme-bg' : 'theme-color') %}
\t\t\t\t\t<a href=\"{{ item.url }}\" class=\"page-link {{ linkColor }}\">
\t\t\t\t\t\t{% autoescape false %}
\t\t\t\t\t\t\t{{ item.text }}
\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{% if loop.index == 2 %}
\t\t\t</ul>
\t\t\t<div class=\"separator\"></div>
\t\t\t<ul class=\"pagination\">
\t\t{% elseif loop.index == loop.length %}
\t\t\t</ul>
\t\t{% endif %}
\t{% endfor %}
</div>
", "tools/pagination.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\tools\\pagination.html.twig");
    }
}
