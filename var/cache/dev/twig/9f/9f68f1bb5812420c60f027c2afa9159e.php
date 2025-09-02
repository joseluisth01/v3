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

/* varios/familia-grid.html.twig */
class __TwigTemplate_93d7b27a118c0f255952e3d1068918bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/familia-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/familia-grid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/familia-grid.html.twig", 1);
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
        echo "\t<main>
\t\t";
        // line 4
        if (twig_test_empty((isset($context["lista_subfamilias"]) || array_key_exists("lista_subfamilias", $context) ? $context["lista_subfamilias"] : (function () { throw new RuntimeError('Variable "lista_subfamilias" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "\t\t\t<div class=\"text-center py-5\">
\t\t\t\t<h1 class=\"text-center fam-name-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fam"]) || array_key_exists("fam", $context) ? $context["fam"] : (function () { throw new RuntimeError('Variable "fam" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
            echo "</h1>
\t\t\t\t<div class=\"h1 mt-5\">La familia no tiene subfamilias</div>
\t\t\t</div>
\t\t";
        } else {
            // line 10
            echo "\t\t\t<div class=\"d-flex flex-wrap flex-md-nowrap justify-content-center\" style=\" margin-top:70px\">
\t\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "mostrar_atributos", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t\t\t<section class=\"attr-container\">

\t\t\t\t\t\t";
                // line 14
                if ((isset($context["attrChecked"]) || array_key_exists("attrChecked", $context) ? $context["attrChecked"] : (function () { throw new RuntimeError('Variable "attrChecked" does not exist.', 14, $this->source); })())) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["cleanUrl"]) || array_key_exists("cleanUrl", $context) ? $context["cleanUrl"] : (function () { throw new RuntimeError('Variable "cleanUrl" does not exist.', 15, $this->source); })());
                    echo "\" class=\"btn btn-sm btn-primary w-100 text-white mb-2\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-autorenew mr-2\"></i>Limpiar filtros
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 19
                echo "
\t\t\t\t\t\t";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 20, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#list";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"list";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<span>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "title", [], "any", false, false, false, 22), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show\" role=\"tabpanel\" id=\"list";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attr"], "rows", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item data\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 30
                        if (((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 30, $this->source); })()) == "search")) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_url"] = $this->extensions['App\Twig\AppExtension']->urlDecode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 31, $this->source); })()), ["q" => twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, false, 31)]));
                            // line 32
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 33, $this->source); })()), ["param" => twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, false, 33)]);
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["row_url"]) || array_key_exists("row_url", $context) ? $context["row_url"] : (function () { throw new RuntimeError('Variable "row_url" does not exist.', 35, $this->source); })()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        if (twig_get_attribute($this->env, $this->source, $context["row"], "checked", [], "any", false, false, false, 38)) {
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 41
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tipoatributo\">";
                        // line 44
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nombre", [], "any", false, false, false, 44), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge theme.bg\">";
                        // line 45
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "num_art", [], "any", false, false, false, 45), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t\t";
                if ( !twig_test_empty((isset($context["lista_subfamilias"]) || array_key_exists("lista_subfamilias", $context) ? $context["lista_subfamilias"] : (function () { throw new RuntimeError('Variable "lista_subfamilias" does not exist.', 55, $this->source); })()))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#subfamiliasList\" aria-expanded=\"false\" aria-controls=\"subfamiliasList\">
\t\t\t\t\t\t\t\t<span>Subfamilias</span>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show\" role=\"tabpanel\" id=\"subfamiliasList\">
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["lista_subfamilias"]) || array_key_exists("lista_subfamilias", $context) ? $context["lista_subfamilias"] : (function () { throw new RuntimeError('Variable "lista_subfamilias" does not exist.', 63, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item data\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 65)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tipoatributo\">";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 70), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 78
                echo "
\t\t\t\t\t</section>
\t\t\t\t";
            }
            // line 81
            echo "
\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h1 class=\"fam-name-title mb-0\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fam"]) || array_key_exists("fam", $context) ? $context["fam"] : (function () { throw new RuntimeError('Variable "fam" does not exist.', 84, $this->source); })()), "nombre", [], "any", false, false, false, 84), "html", null, true);
            echo "</h1>
\t\t\t\t\t</div>
";
            // line 96
            echo "\t\t\t\t\t<div class=\"product-list-container-2\">
\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 97, $this->source); })()));
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
                // line 98
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("articulo/art-minificha-2.html.twig", "varios/familia-grid.html.twig", 98)->display($context);
                // line 99
                echo "\t\t\t\t\t\t";
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
            // line 100
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 104
            echo "\t\t\t\t\t";
            $this->loadTemplate("tools/pagination.html.twig", "varios/familia-grid.html.twig", 104)->display($context);
            // line 105
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 108
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/familia-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 108,  317 => 105,  314 => 104,  311 => 100,  297 => 99,  294 => 98,  277 => 97,  274 => 96,  269 => 84,  264 => 81,  259 => 78,  254 => 75,  243 => 70,  235 => 65,  232 => 64,  228 => 63,  219 => 56,  216 => 55,  213 => 53,  197 => 50,  186 => 45,  182 => 44,  179 => 43,  175 => 41,  171 => 39,  169 => 38,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  150 => 31,  148 => 30,  145 => 29,  141 => 28,  136 => 26,  129 => 22,  122 => 21,  105 => 20,  102 => 19,  94 => 15,  92 => 14,  88 => 12,  86 => 11,  83 => 10,  76 => 6,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<main>
\t\t{% if lista_subfamilias is empty %}
\t\t\t<div class=\"text-center py-5\">
\t\t\t\t<h1 class=\"text-center fam-name-title\">{{ fam.nombre }}</h1>
\t\t\t\t<div class=\"h1 mt-5\">La familia no tiene subfamilias</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"d-flex flex-wrap flex-md-nowrap justify-content-center\" style=\" margin-top:70px\">
\t\t\t\t{% if config.data.mostrar_atributos %}
\t\t\t\t\t<section class=\"attr-container\">

\t\t\t\t\t\t{% if attrChecked %}
\t\t\t\t\t\t\t<a href=\"{{ cleanUrl | raw }}\" class=\"btn btn-sm btn-primary w-100 text-white mb-2\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-autorenew mr-2\"></i>Limpiar filtros
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% for attr in attributes %}
\t\t\t\t\t\t\t<div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#list{{ loop.index }}\" aria-expanded=\"false\" aria-controls=\"list{{ loop.index }}\">
\t\t\t\t\t\t\t\t<span>{{ attr.title }}</span>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show\" role=\"tabpanel\" id=\"list{{ loop.index }}\">
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t{% for row in attr.rows %}
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item data\">
\t\t\t\t\t\t\t\t\t\t\t{% if routeName == 'search' %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set row_url = url(routeName, {'q': row.url }) | url_decode %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set row_url = url(routeName, {'param': row.url}) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ row_url }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if row.checked %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tipoatributo\">{{ row.nombre }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge theme.bg\">{{ row.num_art }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{# Agregar la sección de subfamilias como un filtro más #}
\t\t\t\t\t\t{% if lista_subfamilias is not empty %}
\t\t\t\t\t\t\t<div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#subfamiliasList\" aria-expanded=\"false\" aria-controls=\"subfamiliasList\">
\t\t\t\t\t\t\t\t<span>Subfamilias</span>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse show\" role=\"tabpanel\" id=\"subfamiliasList\">
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t{% for sub in lista_subfamilias %}
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item data\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('subfamilia', {param: sub.url}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tipoatributo\">{{ sub.nombre }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</section>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h1 class=\"fam-name-title mb-0\">{{ fam.nombre }}</h1>
\t\t\t\t\t</div>
{# \t\t\t\t\t<div class=\"subfamilias-grid-container\">
\t\t\t\t\t\t{% for sub in lista_subfamilias %}
\t\t\t\t\t\t\t<a href=\"{{ url('subfamilia', {param: sub.url}) }}\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<img width=\"120\" height=\"120\" class=\"rounded-circle border theme-border\" src=\"{{ asset(sub.url_imagen) }}\" alt=\"{{ sub.nombre }}\">
\t\t\t\t\t\t\t\t\t<h2 class=\"name\">{{ sub.nombre }}</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div> #}
\t\t\t\t\t<div class=\"product-list-container-2\">
\t\t\t\t\t\t{% for art in articulos %}
\t\t\t\t\t\t\t{% include 'articulo/art-minificha-2.html.twig' %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t{#           <div class=\"description\">
\t\t\t\t\t            {{ fam.web_description | raw}}
\t\t\t\t\t          </div> #}
\t\t\t\t\t{% include 'tools/pagination.html.twig' %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t</main>
{% endblock %}
", "varios/familia-grid.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\familia-grid.html.twig");
    }
}
