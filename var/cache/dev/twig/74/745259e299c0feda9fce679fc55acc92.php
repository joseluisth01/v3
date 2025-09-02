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

/* tools/index-tools.html.twig */
class __TwigTemplate_25b2a4e64848f3e303e4eeabe4a1554d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/index-tools.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/index-tools.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tools/index-tools.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "V3 Web - Tools
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-auto mt-2\">Tablas</div>
            <div class=\"col-auto\">
                <select name=\"table\" id=\"table\" class=\"form-control no-box-shadow\" autofocus>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablas"]) || array_key_exists("tablas", $context) ? $context["tablas"] : (function () { throw new RuntimeError('Variable "tablas" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tabla"]) {
            // line 12
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["tabla"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tabla"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabla'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </select>
            </div>
            <div class=\"col-auto\">
                <button type=\"button\" id=\"btn-procesar\" class=\"btn btn-primary\">Procesar<i class=\"mdi mdi-arrow-right-drop-circle-outline ml-3\"></i>
                </button>
            </div>
        </div>    </div>
    <div class=\"card-body\">
        <textarea class=\"form-control text-monospace\" name=\"content\" id=\"content\" rows=\"20\" style=\"font-size:.9rem\"></textarea>
    </div>
</div>
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
        echo "<script>
    \$(function () {
        let tableField = \$('#table'),
            textField = \$('#content');
        \$('#btn-procesar').on('click', function () {
            let tableName = tableField.val();
            \$.get('tools/get-php/' + tableName, function (data) {
                textField.val(data);
                tableField.focus();
            });
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tools/index-tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  134 => 26,  113 => 14,  102 => 12,  98 => 11,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}V3 Web - Tools
{% endblock %}
{% block body %}
<div class=\"card\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-auto mt-2\">Tablas</div>
            <div class=\"col-auto\">
                <select name=\"table\" id=\"table\" class=\"form-control no-box-shadow\" autofocus>
                    {%for tabla in tablas %}
                    <option value=\"{{ tabla }}\">{{ tabla }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-auto\">
                <button type=\"button\" id=\"btn-procesar\" class=\"btn btn-primary\">Procesar<i class=\"mdi mdi-arrow-right-drop-circle-outline ml-3\"></i>
                </button>
            </div>
        </div>    </div>
    <div class=\"card-body\">
        <textarea class=\"form-control text-monospace\" name=\"content\" id=\"content\" rows=\"20\" style=\"font-size:.9rem\"></textarea>
    </div>
</div>
{% endblock %}
{% block javascripts %}
<script>
    \$(function () {
        let tableField = \$('#table'),
            textField = \$('#content');
        \$('#btn-procesar').on('click', function () {
            let tableName = tableField.val();
            \$.get('tools/get-php/' + tableName, function (data) {
                textField.val(data);
                tableField.focus();
            });
        });
    });
</script>
{% endblock %}", "tools/index-tools.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\tools\\index-tools.html.twig");
    }
}
