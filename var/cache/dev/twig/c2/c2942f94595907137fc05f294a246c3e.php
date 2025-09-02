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

/* main/main.html.twig */
class __TwigTemplate_af6b1ed1f9d8cc7f146a19bba600469e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/main.html.twig", 1);
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
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })()), "slider", [], "any", false, false, false, 3)) {
            // line 4
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/revealjs/reveal.css"), "html", null, true);
            echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/revealjs/theme/white.css"), "html", null, true);
            echo "\">
\t\t";
            // line 6
            if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "sliderSizeAuto", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t<style>
\t\t\t\tdiv.slide-background > div.slide-background-content {
\t\t\t\t\tbackground-size: contain;
\t\t\t\t}
\t\t\t</style>
\t\t";
            }
            // line 13
            echo "\t\t<style>
\t\t\t@media(max-width: 767px) {
\t\t\t\tdiv.slide-background > div.slide-background-content {
\t\t\t\t\tbackground-size: 100% 100%;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t";
        }
        // line 21
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "mostrarMarcas", [], "any", false, false, false, 21)) {
            // line 22
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-carousel/jcarousel.responsive.css"), "html", null, true);
            echo "\">
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "slider", [], "any", false, false, false, 26)) {
            // line 27
            echo "\t\t";
            $this->loadTemplate("main/slider.html.twig", "main/main.html.twig", 27)->display($context);
            // line 28
            echo "\t";
        }
        // line 29
        echo "\t<main class=\"principal\">
\t\t";
        // line 30
        if ((array_key_exists("h1Items", $context) &&  !twig_test_empty((isset($context["h1Items"]) || array_key_exists("h1Items", $context) ? $context["h1Items"] : (function () { throw new RuntimeError('Variable "h1Items" does not exist.', 30, $this->source); })())))) {
            // line 31
            echo "\t\t\t<div class=\"d-none\">";
            echo (isset($context["h1Items"]) || array_key_exists("h1Items", $context) ? $context["h1Items"] : (function () { throw new RuntimeError('Variable "h1Items" does not exist.', 31, $this->source); })());
            echo "</div>
\t\t";
        }
        // line 33
        echo "\t\t<aside class=\"sidebar d-none d-md-block\">
\t\t\t";
        // line 34
        $this->loadTemplate("main/art-alta-rotacion.html.twig", "main/main.html.twig", 34)->display($context);
        // line 35
        echo "\t\t</aside>



\t</main>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "mostrarMarcas", [], "any", false, false, false, 61)) {
            // line 62
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-carousel/jquery.jcarousel.min.js"), "html", null, true);
            echo "\"></script>
\t\t<script>
\t\t\t\$(function () {
let jcarousel = \$('.jcarousel');
jcarousel.jcarousel({wrap: 'circular'});

\$('.jcarousel-control-prev').jcarouselControl({target: '-=1'});

\$('.jcarousel-control-next').jcarouselControl({target: '+=1'});

let btnNext = \$('.jcarousel-control-next');
setInterval(() => btnNext.jcarouselControl({target: '+=1'}), 5000);
});
\t\t</script>
\t";
        }
        // line 77
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })()), "slider", [], "any", false, false, false, 77)) {
            // line 78
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/revealjs/reveal.js"), "html", null, true);
            echo "\"></script>
\t\t";
            // line 80
            echo "\t\t<script>
\t\t\t(function () {
Reveal.initialize({
embedded: true,
controlsLayout: 'edges',
autoSlide: 5000,
loop: true,
transitionSpeed: 'slow',
autoSlideStoppable: false,
height: ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "sliderHeight", [], "any", false, false, false, 89), "html", null, true);
            echo "
});";
            // line 90
            if (array_key_exists("bannerImg", $context)) {
                echo "const MAX_MOBILE_PX = 765;
const slides = \$('#reveal-slides');
let actualWidth = \$(window).width(),
actualDesk = actualWidth >= MAX_MOBILE_PX;

if (actualWidth >= MAX_MOBILE_PX) {
slides.html(\$('#reveal-desktop').html());
} else {
slides.html(\$('#reveal-mobile').html());
}

\$(window).on('resize', function () {
let desk = \$(window).width() >= MAX_MOBILE_PX;
if (actualDesk != desk) {
let ident = desk ? '#reveal-desktop' : '#reveal-mobile';
actualWidth = \$(window).width();
actualDesk = actualWidth >= MAX_MOBILE_PX;
slides.empty();
slides.html(\$(ident).html())
Reveal.slide(0);
Reveal.sync();
}
}).trigger('resize');
";
            } else {
                // line 114
                echo "\$('#reveal-slides').html(\$('#reveal-desktop').html());";
            }
            // line 115
            echo "})();
\t\t</script>
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 115,  251 => 114,  224 => 90,  220 => 89,  209 => 80,  204 => 78,  201 => 77,  182 => 62,  179 => 61,  169 => 60,  154 => 35,  152 => 34,  149 => 33,  143 => 31,  141 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  119 => 25,  105 => 22,  102 => 21,  92 => 13,  84 => 7,  82 => 6,  78 => 5,  73 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
\t{% if config.slider %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/revealjs/reveal.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/revealjs/theme/white.css') }}\">
\t\t{% if config.sliderSizeAuto %}
\t\t\t<style>
\t\t\t\tdiv.slide-background > div.slide-background-content {
\t\t\t\t\tbackground-size: contain;
\t\t\t\t}
\t\t\t</style>
\t\t{% endif %}
\t\t<style>
\t\t\t@media(max-width: 767px) {
\t\t\t\tdiv.slide-background > div.slide-background-content {
\t\t\t\t\tbackground-size: 100% 100%;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t{% endif %}
\t{% if config.mostrarMarcas %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-carousel/jcarousel.responsive.css') }}\">
\t{% endif %}
{% endblock %}
{% block body %}
\t{% if config.slider %}
\t\t{% include 'main/slider.html.twig' %}
\t{% endif %}
\t<main class=\"principal\">
\t\t{% if h1Items is defined and h1Items is not empty %}
\t\t\t<div class=\"d-none\">{{ h1Items | raw }}</div>
\t\t{% endif %}
\t\t<aside class=\"sidebar d-none d-md-block\">
\t\t\t{% include 'main/art-alta-rotacion.html.twig' %}
\t\t</aside>



\t</main>
\t{#   {% if config.mostrarMarcas %}
\t\t\t\t\t    <div class=\"container\">
\t\t\t\t\t      <div class=\"jcarousel-wrapper\">
\t\t\t\t\t        <div class=\"jcarousel\">
\t\t\t\t\t          <ul>
\t\t\t\t\t            {% for mar in lista_marcas %}
\t\t\t\t\t              <li>
\t\t\t\t\t                <a href=\"{{ url('marca-grid', {webUrl: mar.url}) }}\">
\t\t\t\t\t                  <img src=\"{{ asset(mar.url_imagen) }}\" alt=\"{{ mar.nombre }}\" width=\"200\" style=\"max-height: 100px\" class=\"img-fluid\">
\t\t\t\t\t                </a>
\t\t\t\t\t              </li>
\t\t\t\t\t              {% endfor%}
\t\t\t\t\t            </ul>
\t\t\t\t\t          </div>
\t\t\t\t\t          <a href=\"#\" class=\"jcarousel-control-prev\">&lsaquo;</a>
\t\t\t\t\t          <a href=\"#\" class=\"jcarousel-control-next\">&rsaquo;</a>
\t\t\t\t\t        </div>
\t\t\t\t\t      </div>
\t\t\t\t\t    {% endif %} #}
{% endblock %}
{% block javascripts %}
\t{% if config.mostrarMarcas %}
\t\t<script src=\"{{ asset('vendor/jquery-carousel/jquery.jcarousel.min.js') }}\"></script>
\t\t<script>
\t\t\t\$(function () {
let jcarousel = \$('.jcarousel');
jcarousel.jcarousel({wrap: 'circular'});

\$('.jcarousel-control-prev').jcarouselControl({target: '-=1'});

\$('.jcarousel-control-next').jcarouselControl({target: '+=1'});

let btnNext = \$('.jcarousel-control-next');
setInterval(() => btnNext.jcarouselControl({target: '+=1'}), 5000);
});
\t\t</script>
\t{% endif %}
\t{% if config.slider %}
\t\t<script src=\"{{ asset('vendor/revealjs/reveal.js') }}\"></script>
\t\t{# https: // stackoverflow.com/questions/19522587/add-remove-slides-from-reveal-js-dynamically #}
\t\t<script>
\t\t\t(function () {
Reveal.initialize({
embedded: true,
controlsLayout: 'edges',
autoSlide: 5000,
loop: true,
transitionSpeed: 'slow',
autoSlideStoppable: false,
height: {{ config.sliderHeight }}
});{% if bannerImg is defined %}const MAX_MOBILE_PX = 765;
const slides = \$('#reveal-slides');
let actualWidth = \$(window).width(),
actualDesk = actualWidth >= MAX_MOBILE_PX;

if (actualWidth >= MAX_MOBILE_PX) {
slides.html(\$('#reveal-desktop').html());
} else {
slides.html(\$('#reveal-mobile').html());
}

\$(window).on('resize', function () {
let desk = \$(window).width() >= MAX_MOBILE_PX;
if (actualDesk != desk) {
let ident = desk ? '#reveal-desktop' : '#reveal-mobile';
actualWidth = \$(window).width();
actualDesk = actualWidth >= MAX_MOBILE_PX;
slides.empty();
slides.html(\$(ident).html())
Reveal.slide(0);
Reveal.sync();
}
}).trigger('resize');
{% else %}
\$('#reveal-slides').html(\$('#reveal-desktop').html());{% endif %}
})();
\t\t</script>
\t{% endif %}
{% endblock %}
", "main/main.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\main.html.twig");
    }
}
