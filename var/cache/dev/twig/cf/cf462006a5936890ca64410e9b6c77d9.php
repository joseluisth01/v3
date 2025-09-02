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

/* main/slider.html.twig */
class __TwigTemplate_339d67ba9b5b8823159e1f60cdd26f58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/slider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/slider.html.twig"));

        // line 1
        echo "<div class=\"reveal-viewport\" style=\"height: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 1, $this->source); })()), "sliderHeight", [], "any", false, false, false, 1), "html", null, true);
        echo "px;\">
\t<div class=\"reveal\">
\t\t<div class=\"slides\" id=\"reveal-slides\"></div>
\t</div>
</div>

<template id=\"reveal-desktop\">
    ";
        // line 8
        $context["listaImg"] = ((array_key_exists("bannerImg", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["bannerImg"]) || array_key_exists("bannerImg", $context) ? $context["bannerImg"] : (function () { throw new RuntimeError('Variable "bannerImg" does not exist.', 8, $this->source); })()), "desktop", [], "array", false, false, false, 8)) : ((isset($context["sliderImg"]) || array_key_exists("sliderImg", $context) ? $context["sliderImg"] : (function () { throw new RuntimeError('Variable "sliderImg" does not exist.', 8, $this->source); })())));
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaImg"]) || array_key_exists("listaImg", $context) ? $context["listaImg"] : (function () { throw new RuntimeError('Variable "listaImg" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 10
            echo "        <section data-background-image=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10)), "html", null, true);
            echo "\" class=\"d-flex align-items-stretch justify-content-center h-100\">
            ";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 11) != "") && (twig_get_attribute($this->env, $this->source, $context["image"], "url_type", [], "any", false, false, false, 11) != ""))) {
                // line 12
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "url_type", [], "any", false, false, false, 12) == "A")) {
                    // line 13
                    echo "                    ";
                    $context["urlBanner"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 13)]);
                    // line 14
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["image"], "url_type", [], "any", false, false, false, 14) == "M")) {
                    // line 15
                    echo "                    ";
                    $context["urlBanner"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("marca-grid", ["webUrl" => twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 15)]);
                    // line 16
                    echo "                ";
                } else {
                    // line 17
                    echo "                    ";
                    $context["urlBanner"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 17)]);
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "                <div class=\"d-block w-100 d-flex flex-column justify-content-center\">
                    <p class=\"tituloslider titulosliderprincipal\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "text", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                    <div class=\"d-flex justify-content-center gap-3\">
                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["urlBanner"]) || array_key_exists("urlBanner", $context) ? $context["urlBanner"] : (function () { throw new RuntimeError('Variable "urlBanner" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\" class=\"btnsliderprincipal\">VER PRODUCTO</a>
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            ";
            } else {
                // line 27
                echo "                <div class=\"d-flex flex-column justify-content-center\">
                    <p class=\"tituloslider titulosliderprincipal\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "text", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            ";
            }
            // line 34
            echo "        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</template>
<style>
.tituloslider {
    color: ";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 39), "slider_text_color", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 39), "slider_text_color", [], "any", false, false, false, 39), "#FFFFFF")) : ("#FFFFFF")), "html", null, true);
        echo " !important;
}
</style>

";
        // line 43
        if (array_key_exists("bannerImg", $context)) {
            // line 44
            echo "    <template id=\"reveal-mobile\">
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["bannerImg"]) || array_key_exists("bannerImg", $context) ? $context["bannerImg"] : (function () { throw new RuntimeError('Variable "bannerImg" does not exist.', 45, $this->source); })()), "mobile", [], "array", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "            <section data-background-image=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 46)), "html", null, true);
                echo "\" class=\"d-flex align-items-stretch justify-content-center\">
                <div class=\"d-flex flex-column justify-content-center\">
                    <p class=\"titulosliderprincipal\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "text", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            </section>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </template>
";
        }
        // line 57
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Función para abrir el catálogo
    window.openCatalogMenu = function() {
        // Buscar el enlace del catálogo en el header
        const catalogLink = document.querySelector('.enlacenavheader[data-toggle=\"dropdown\"]');
        
        if (catalogLink) {
            // Detener cualquier evento de reveal.js
            event.stopPropagation();
            
            // Simular click en el enlace del catálogo
            catalogLink.click();
            
            // Agregar clase show al submenu2
            const submenu = document.querySelector('.submenu2');
            if (submenu) {
                submenu.classList.add('show');
                submenu.style.display = 'block';
                
                // Agregar evento click al documento para cerrar el menú
                setTimeout(() => {
                    document.addEventListener('click', closeCatalogMenu);
                }, 100);
            }
        }
    };

    // Función para cerrar el catálogo
    function closeCatalogMenu(event) {
        const submenu = document.querySelector('.submenu2');
        const catalogButton = event.target.closest('.btnsliderprincipal');
        
        if (submenu && !submenu.contains(event.target) && 
            !catalogButton && 
            !event.target.classList.contains('enlacenavheader')) {
            
            submenu.classList.remove('show');
            submenu.style.display = 'none';
            submenu.style.marginTop = '0';
            
            document.removeEventListener('click', closeCatalogMenu);
        }
    }

    // Agregar listeners a todos los botones del catálogo
    document.querySelectorAll('.btnsliderprincipal').forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.textContent.trim() === 'VER CATÁLOGO') {
                e.preventDefault();
                e.stopPropagation();
                openCatalogMenu();
            }
        });
    });
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  164 => 55,  151 => 48,  145 => 46,  141 => 45,  138 => 44,  136 => 43,  129 => 39,  124 => 36,  117 => 34,  108 => 28,  105 => 27,  97 => 22,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  66 => 11,  61 => 10,  56 => 9,  54 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"reveal-viewport\" style=\"height: {{ config.sliderHeight }}px;\">
\t<div class=\"reveal\">
\t\t<div class=\"slides\" id=\"reveal-slides\"></div>
\t</div>
</div>

<template id=\"reveal-desktop\">
    {% set listaImg = bannerImg is defined ? bannerImg['desktop'] : sliderImg %}
    {% for image in listaImg %}
        <section data-background-image=\"{{asset(image.path)}}\" class=\"d-flex align-items-stretch justify-content-center h-100\">
            {% if image.url != '' and image.url_type != '' %}
                {% if image.url_type == 'A' %}
                    {% set urlBanner = url('articulo', {weburl: image.url}) %}
                {% elseif image.url_type == 'M' %}
                    {% set urlBanner = url('marca-grid', {webUrl: image.url}) %}
                {% else %}
                    {% set urlBanner = url('familia-grid', {param: image.url}) %}
                {% endif %}
                <div class=\"d-block w-100 d-flex flex-column justify-content-center\">
                    <p class=\"tituloslider titulosliderprincipal\">{{image.text}}</p>
                    <div class=\"d-flex justify-content-center gap-3\">
                        <a href=\"{{ urlBanner }}\" class=\"btnsliderprincipal\">VER PRODUCTO</a>
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            {% else %}
                <div class=\"d-flex flex-column justify-content-center\">
                    <p class=\"tituloslider titulosliderprincipal\">{{image.text}}</p>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            {% endif %}
        </section>
    {% endfor %}
</template>
<style>
.tituloslider {
    color: {{ config.data.slider_text_color|default('#FFFFFF') }} !important;
}
</style>

{% if bannerImg is defined %}
    <template id=\"reveal-mobile\">
        {% for image in bannerImg['mobile'] %}
            <section data-background-image=\"{{asset(image.path)}}\" class=\"d-flex align-items-stretch justify-content-center\">
                <div class=\"d-flex flex-column justify-content-center\">
                    <p class=\"titulosliderprincipal\">{{image.text}}</p>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"button\" class=\"btnsliderprincipal\" onclick=\"openCatalogMenu()\">VER CATÁLOGO</button>
                    </div>
                </div>
            </section>
        {% endfor %}
    </template>
{% endif %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Función para abrir el catálogo
    window.openCatalogMenu = function() {
        // Buscar el enlace del catálogo en el header
        const catalogLink = document.querySelector('.enlacenavheader[data-toggle=\"dropdown\"]');
        
        if (catalogLink) {
            // Detener cualquier evento de reveal.js
            event.stopPropagation();
            
            // Simular click en el enlace del catálogo
            catalogLink.click();
            
            // Agregar clase show al submenu2
            const submenu = document.querySelector('.submenu2');
            if (submenu) {
                submenu.classList.add('show');
                submenu.style.display = 'block';
                
                // Agregar evento click al documento para cerrar el menú
                setTimeout(() => {
                    document.addEventListener('click', closeCatalogMenu);
                }, 100);
            }
        }
    };

    // Función para cerrar el catálogo
    function closeCatalogMenu(event) {
        const submenu = document.querySelector('.submenu2');
        const catalogButton = event.target.closest('.btnsliderprincipal');
        
        if (submenu && !submenu.contains(event.target) && 
            !catalogButton && 
            !event.target.classList.contains('enlacenavheader')) {
            
            submenu.classList.remove('show');
            submenu.style.display = 'none';
            submenu.style.marginTop = '0';
            
            document.removeEventListener('click', closeCatalogMenu);
        }
    }

    // Agregar listeners a todos los botones del catálogo
    document.querySelectorAll('.btnsliderprincipal').forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.textContent.trim() === 'VER CATÁLOGO') {
                e.preventDefault();
                e.stopPropagation();
                openCatalogMenu();
            }
        });
    });
});
</script>", "main/slider.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\slider.html.twig");
    }
}
