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

/* varios/recursos.html.twig */
class __TwigTemplate_5870d4b07ab8df234649ff5c0843344a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/recursos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/recursos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/recursos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recursos - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main>
        <section class=\"mt-5\">
            <h1 class=\"quienes-somos-title\">Recursos</h1>
            <br><br>
            ";
        // line 10
        if (twig_test_empty((isset($context["recursos"]) || array_key_exists("recursos", $context) ? $context["recursos"] : (function () { throw new RuntimeError('Variable "recursos" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "                <p class=\"text-center\">No hay recursos disponibles.</p>
            ";
        } else {
            // line 13
            echo "                <div class=\"gridrecursos\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) || array_key_exists("recursos", $context) ? $context["recursos"] : (function () { throw new RuntimeError('Variable "recursos" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
                // line 15
                echo "                        <div class=\"mb-4\">
                            <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["recurso"], "archivo", [], "any", false, false, false, 16)), "html", null, true);
                echo "\" target=\"_blank\">
                                <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["recurso"], "imagen", [], "any", false, false, false, 17)), "html", null, true);
                echo "\" 
                                     class=\"img-fluid imgrecurso\" 
                                     alt=\"Recurso ";
                // line 19
                if ((isset($context["son_recursos_default"]) || array_key_exists("son_recursos_default", $context) ? $context["son_recursos_default"] : (function () { throw new RuntimeError('Variable "son_recursos_default" does not exist.', 19, $this->source); })())) {
                    echo "por defecto ";
                }
                echo "#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recurso"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\"
                                     onerror=\"this.src='";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default/no-image.webp"), "html", null, true);
                echo "'\">
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
            ";
        }
        // line 26
        echo "        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/recursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 26,  138 => 24,  128 => 20,  120 => 19,  115 => 17,  111 => 16,  108 => 15,  104 => 14,  101 => 13,  97 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recursos - {{ config.title }}{% endblock %}

{% block body %}
    <main>
        <section class=\"mt-5\">
            <h1 class=\"quienes-somos-title\">Recursos</h1>
            <br><br>
            {% if recursos is empty %}
                <p class=\"text-center\">No hay recursos disponibles.</p>
            {% else %}
                <div class=\"gridrecursos\">
                    {% for recurso in recursos %}
                        <div class=\"mb-4\">
                            <a href=\"{{ asset(recurso.archivo) }}\" target=\"_blank\">
                                <img src=\"{{ asset(recurso.imagen) }}\" 
                                     class=\"img-fluid imgrecurso\" 
                                     alt=\"Recurso {% if son_recursos_default %}por defecto {% endif %}#{{ recurso.id }}\"
                                     onerror=\"this.src='{{ asset('images/default/no-image.webp') }}'\">
                            </a>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </section>
    </main>
{% endblock %}", "varios/recursos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\recursos.html.twig");
    }
}
