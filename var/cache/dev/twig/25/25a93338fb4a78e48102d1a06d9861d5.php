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

/* varios/promociones.html.twig */
class __TwigTemplate_e349fbb86a08ccac1abd3b2d61ce8cb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/promociones.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "varios/promociones.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "varios/promociones.html.twig", 1);
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

        echo "Promociones - ";
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
        echo "<main>
    <section class=\"container mt-5\" style=\"max-width:100% !important\">
        <h1 class=\"text-center quienes-somos-title\">Promociones</h1>
        <br><br>

        ";
        // line 11
        if ( !twig_test_empty((isset($context["promociones"]) || array_key_exists("promociones", $context) ? $context["promociones"] : (function () { throw new RuntimeError('Variable "promociones" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"row\" style=\"justify-content:center\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promociones"]) || array_key_exists("promociones", $context) ? $context["promociones"] : (function () { throw new RuntimeError('Variable "promociones" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 14
                echo "                    ";
                $context["url_weburl"] = ((twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "referencia", [], "any", false, false, false, 14)), ["/" => "-", "[" => "", "]" => "", "(" => "", ")" => "", " " => "-"]) . "-") . twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source,                 // line 21
$context["promo"], "nombre", [], "any", false, false, false, 21), ["/" => "-", "[" => "", "]" => "", "(" => "", ")" => "", "ñ" => "-", "Ñ" => "-", " " => "-", "," => "", "." => "", ":" => "", ";" => "", "\"" => "", "'" => "", "&" => "", "#" => "", "@" => "", "!" => "", "?" => "", "¿" => "", "¡" => "", "+" => "", "*" => "", "=" => "", "{" => "", "}" => ""])), "-"));
                // line 49
                echo "                    
                    ";
                // line 51
                echo "                    ";
                $context["imagen_filename"] = null;
                // line 52
                echo "                    
                    ";
                // line 54
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["promo"], "imagen", [], "any", true, true, false, 54) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["promo"], "imagen", [], "any", false, false, false, 54)))) {
                    // line 55
                    echo "                        ";
                    $context["imagen_filename"] = twig_get_attribute($this->env, $this->source, $context["promo"], "imagen", [], "any", false, false, false, 55);
                    // line 56
                    echo "                    ";
                } else {
                    // line 57
                    echo "                        ";
                    // line 58
                    echo "                        ";
                    $context["imagen_path_1"] = (("images/cache/" . twig_lower_filter($this->env, ((twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["promo"], "nombre", [], "any", false, false, false, 58), ["ñ" => "-", "Ñ" => "-", " " => "-", "[" => "", "]" => "", "(" => "", ")" => "", "/" => "-", "," => "", "." => ""]) . "-") . twig_get_attribute($this->env, $this->source,                     // line 60
$context["promo"], "referencia", [], "any", false, false, false, 60)))) . "-1-250.webp");
                    // line 61
                    echo "                        
                        ";
                    // line 63
                    echo "                        ";
                    $context["imagen_path_2"] = (("images/cache/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "referencia", [], "any", false, false, false, 63))) . "-1-250.webp");
                    // line 64
                    echo "                        
                        ";
                    // line 66
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["promo"], "referencia", [], "any", false, false, false, 66) == "BT50A/00")) {
                        // line 67
                        echo "                            ";
                        $context["imagen_path_3"] = "images/cache/altavoces-philips-bt50b-portatil-bluetooth-azul-bt50a-00-1-250.webp";
                        // line 68
                        echo "                        ";
                    } else {
                        // line 69
                        echo "                            ";
                        $context["imagen_path_3"] = "";
                        // line 70
                        echo "                        ";
                    }
                    // line 71
                    echo "                        
                        ";
                    // line 73
                    echo "                        ";
                    $context["imagen_path_default"] = "images/default/no-image-250.webp";
                    // line 74
                    echo "                        
                        ";
                    // line 76
                    echo "                        ";
                    $context["imagen_filename"] = (( !twig_test_empty((isset($context["imagen_path_3"]) || array_key_exists("imagen_path_3", $context) ? $context["imagen_path_3"] : (function () { throw new RuntimeError('Variable "imagen_path_3" does not exist.', 76, $this->source); })()))) ? ((isset($context["imagen_path_3"]) || array_key_exists("imagen_path_3", $context) ? $context["imagen_path_3"] : (function () { throw new RuntimeError('Variable "imagen_path_3" does not exist.', 76, $this->source); })())) : ((isset($context["imagen_path_1"]) || array_key_exists("imagen_path_1", $context) ? $context["imagen_path_1"] : (function () { throw new RuntimeError('Variable "imagen_path_1" does not exist.', 76, $this->source); })())));
                    // line 77
                    echo "                    ";
                }
                // line 78
                echo "                    
                    <div class=\"col-md-4 mb-4 itempromociones\">
                        <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articulo", ["weburl" => (isset($context["url_weburl"]) || array_key_exists("url_weburl", $context) ? $context["url_weburl"] : (function () { throw new RuntimeError('Variable "url_weburl" does not exist.', 80, $this->source); })())]), "html", null, true);
                echo "\" class=\"text-decoration-none text-dark\">
                            <div class=\"card h-100 cardpromociones\">
                                <img style=\"height:200px !important; object-fit:contain\" 
                                     src=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagen_filename"]) || array_key_exists("imagen_filename", $context) ? $context["imagen_filename"] : (function () { throw new RuntimeError('Variable "imagen_filename" does not exist.', 83, $this->source); })())), "html", null, true);
                echo "\" 
                                     class=\"card-img-top\" 
                                     alt=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "nombre", [], "any", false, false, false, 85), "html", null, true);
                echo "\"
                                     onerror=\"this.src='";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default/no-image-250.webp"), "html", null, true);
                echo "'\">
                                <div class=\"card-body\">
                                    <h5 style=\"\" class=\"nombrearticulo\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "nombre", [], "any", false, false, false, 88), "html", null, true);
                echo "</h5>
                                    <p class=\"card-text promotions\">
                                        <strong>Ref.</strong> ";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "referencia", [], "any", false, false, false, 90), "html", null, true);
                echo "<br>
                                        <strong>Inicio promoción:</strong> ";
                // line 91
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "fecha_creacion", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true);
                echo "
                                    </p>
                                    <p style=\"text-align:center; margin-bottom:-15px !important\" class=\"totalapagar\">
                                        ";
                // line 94
                (( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "precio", [], "any", false, false, false, 94))) ? (print (twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "precio", [], "any", false, false, false, 94), 2, ".", ",") . " €"), "html", null, true))) : (print ("N/A")));
                echo "
                                    </p>
                                </div>
                                <a class=\"btnanadircarrito\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articulo", ["weburl" => (isset($context["url_weburl"]) || array_key_exists("url_weburl", $context) ? $context["url_weburl"] : (function () { throw new RuntimeError('Variable "url_weburl" does not exist.', 97, $this->source); })())]), "html", null, true);
                echo "\">SABER MÁS</a>
                                <br>
                            </div>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </div>
        ";
        } else {
            // line 105
            echo "            <p class=\"text-center\">No hay promociones disponibles actualmente.</p>
        ";
        }
        // line 107
        echo "    </section>

    <script>
        // Script para detectar y manejar imágenes no encontradas en promociones
document.addEventListener('DOMContentLoaded', function() {
    // Función para verificar si la imagen existe y establecer una ruta alternativa
    function tryLoadImage(img, referencia, nombre) {
        // Función llamada cuando la imagen no se carga correctamente
        img.onerror = function() {
            // Intentar con otras rutas alternativas
            const ref = referencia.toLowerCase().replace('/', '-');
            const name = nombre.toLowerCase()
                .replace(/ñ/g, 'n')
                .replace(/[áàäâ]/g, 'a')
                .replace(/[éèëê]/g, 'e')
                .replace(/[íìïî]/g, 'i')
                .replace(/[óòöô]/g, 'o')
                .replace(/[úùüû]/g, 'u')
                .replace(/[^a-z0-9]/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            
            // Alternativa 1: Imagen con nombre completo del producto seguido de la referencia
            const alt1 = `/v3/images/cache/\${name}-\${ref}-1-250.webp`;
            
            // Alternativa 2: Imagen con solo la referencia
            const alt2 = `/v3/images/cache/\${ref}-1-250.webp`;
            
            // Alternativa 3: Caso especial para el producto \"BT50A/00\"
            const alt3 = (referencia === 'BT50A/00') 
                ? '/v3/images/cache/altavoces-philips-bt50b-portatil-bluetooth-azul-bt50a-00-1-250.webp' 
                : null;
            
            // Imagen por defecto como último recurso
            const defaultImg = '/v3/images/default/no-image-250.webp';
            
            // Intenta cargar la primera alternativa
            const testImg = new Image();
            testImg.onload = function() {
                img.src = alt1;
            };
            testImg.onerror = function() {
                // Si la primera alternativa falla, intenta la segunda
                const testImg2 = new Image();
                testImg2.onload = function() {
                    img.src = alt2;
                };
                testImg2.onerror = function() {
                    // Si la segunda alternativa falla, intenta la tercera si existe
                    if (alt3) {
                        const testImg3 = new Image();
                        testImg3.onload = function() {
                            img.src = alt3;
                        };
                        testImg3.onerror = function() {
                            // Si todo falla, usa la imagen por defecto
                            img.src = defaultImg;
                        };
                        testImg3.src = alt3;
                    } else {
                        // Si no hay tercera alternativa, usa la imagen por defecto
                        img.src = defaultImg;
                    }
                };
                testImg2.src = alt2;
            };
            testImg.src = alt1;
            
            // Importante: evitar recursión infinita
            img.onerror = null;
        };
    }
    
    // Buscar todas las imágenes en las tarjetas de promociones
    const promoCards = document.querySelectorAll('.itempromociones');
    promoCards.forEach(function(card) {
        const img = card.querySelector('img');
        const ref = card.querySelector('.card-text strong + br').previousSibling.textContent.trim().replace('Ref.', '').trim();
        const nombre = card.querySelector('.nombrearticulo').textContent.trim();
        
        if (img) {
            // Aplicar el manejo de errores a cada imagen
            tryLoadImage(img, ref, nombre);
        }
    });
});
    </script>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "varios/promociones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 107,  233 => 105,  229 => 103,  217 => 97,  211 => 94,  205 => 91,  201 => 90,  196 => 88,  191 => 86,  187 => 85,  182 => 83,  176 => 80,  172 => 78,  169 => 77,  166 => 76,  163 => 74,  160 => 73,  157 => 71,  154 => 70,  151 => 69,  148 => 68,  145 => 67,  142 => 66,  139 => 64,  136 => 63,  133 => 61,  131 => 60,  129 => 58,  127 => 57,  124 => 56,  121 => 55,  118 => 54,  115 => 52,  112 => 51,  109 => 49,  107 => 21,  105 => 14,  101 => 13,  98 => 12,  96 => 11,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Promociones - {{ config.title }}{% endblock %}

{% block body %}
<main>
    <section class=\"container mt-5\" style=\"max-width:100% !important\">
        <h1 class=\"text-center quienes-somos-title\">Promociones</h1>
        <br><br>

        {% if promociones is not empty %}
            <div class=\"row\" style=\"justify-content:center\">
                {% for promo in promociones %}
                    {% set url_weburl = (promo.referencia|lower|replace({
                        '/': '-',
                        '[': '',
                        ']': '',
                        '(': '',
                        ')': '',
                        ' ': '-'
                    }) ~ '-' ~ promo.nombre|replace({
                        '/': '-',
                        '[': '',
                        ']': '',
                        '(': '',
                        ')': '',
                        'ñ': '-',
                        'Ñ': '-',
                        ' ': '-',
                        ',': '',
                        '.': '',
                        ':': '',
                        ';': '',
                        '\"': '',
                        \"'\": '',
                        '&': '',
                        '#': '',
                        '@': '',
                        '!': '',
                        '?': '',
                        '¿': '',
                        '¡': '',
                        '+': '',
                        '*': '',
                        '=': '',
                        '{': '',
                        '}': ''
                    })|lower|trim('-')) %}
                    
                    {# Crear ruta de imagen inteligente que verifique múltiples posibilidades #}
                    {% set imagen_filename = null %}
                    
                    {# Verificar si tenemos ya una imagen guardada en el registro de promociones #}
                    {% if promo.imagen is defined and promo.imagen is not empty %}
                        {% set imagen_filename = promo.imagen %}
                    {% else %}
                        {# Intentar con formato de nombre basado en la referencia #}
                        {% set imagen_path_1 = 'images/cache/' ~ (promo.nombre|replace({
                            'ñ': '-', 'Ñ': '-', ' ': '-', '[': '', ']': '', '(': '', ')': '', '/': '-', ',': '', '.': ''
                        }) ~ '-' ~ promo.referencia)|lower ~ '-1-250.webp' %}
                        
                        {# Intentar con formato de nombre basado solo en el nombre del producto #}
                        {% set imagen_path_2 = 'images/cache/' ~ promo.referencia|lower ~ '-1-250.webp' %}
                        
                        {# Si la referencia es \"BT50A/00\", usar la URL específica para este caso #}
                        {% if promo.referencia == 'BT50A/00' %}
                            {% set imagen_path_3 = 'images/cache/altavoces-philips-bt50b-portatil-bluetooth-azul-bt50a-00-1-250.webp' %}
                        {% else %}
                            {% set imagen_path_3 = '' %}
                        {% endif %}
                        
                        {# Usar imagen por defecto #}
                        {% set imagen_path_default = 'images/default/no-image-250.webp' %}
                        
                        {# Seleccionar la imagen de la lista intentando en orden #}
                        {% set imagen_filename = imagen_path_3 is not empty ? imagen_path_3 : (imagen_path_1) %}
                    {% endif %}
                    
                    <div class=\"col-md-4 mb-4 itempromociones\">
                        <a href=\"{{ path('articulo', {'weburl': url_weburl}) }}\" class=\"text-decoration-none text-dark\">
                            <div class=\"card h-100 cardpromociones\">
                                <img style=\"height:200px !important; object-fit:contain\" 
                                     src=\"{{ asset(imagen_filename) }}\" 
                                     class=\"card-img-top\" 
                                     alt=\"{{ promo.nombre }}\"
                                     onerror=\"this.src='{{ asset('images/default/no-image-250.webp') }}'\">
                                <div class=\"card-body\">
                                    <h5 style=\"\" class=\"nombrearticulo\">{{ promo.nombre }}</h5>
                                    <p class=\"card-text promotions\">
                                        <strong>Ref.</strong> {{ promo.referencia }}<br>
                                        <strong>Inicio promoción:</strong> {{ promo.fecha_creacion|date('d/m/Y') }}
                                    </p>
                                    <p style=\"text-align:center; margin-bottom:-15px !important\" class=\"totalapagar\">
                                        {{ promo.precio is not null ? promo.precio|number_format(2, '.', ',') ~ ' €' : 'N/A' }}
                                    </p>
                                </div>
                                <a class=\"btnanadircarrito\" href=\"{{ path('articulo', {'weburl': url_weburl}) }}\">SABER MÁS</a>
                                <br>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-center\">No hay promociones disponibles actualmente.</p>
        {% endif %}
    </section>

    <script>
        // Script para detectar y manejar imágenes no encontradas en promociones
document.addEventListener('DOMContentLoaded', function() {
    // Función para verificar si la imagen existe y establecer una ruta alternativa
    function tryLoadImage(img, referencia, nombre) {
        // Función llamada cuando la imagen no se carga correctamente
        img.onerror = function() {
            // Intentar con otras rutas alternativas
            const ref = referencia.toLowerCase().replace('/', '-');
            const name = nombre.toLowerCase()
                .replace(/ñ/g, 'n')
                .replace(/[áàäâ]/g, 'a')
                .replace(/[éèëê]/g, 'e')
                .replace(/[íìïî]/g, 'i')
                .replace(/[óòöô]/g, 'o')
                .replace(/[úùüû]/g, 'u')
                .replace(/[^a-z0-9]/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            
            // Alternativa 1: Imagen con nombre completo del producto seguido de la referencia
            const alt1 = `/v3/images/cache/\${name}-\${ref}-1-250.webp`;
            
            // Alternativa 2: Imagen con solo la referencia
            const alt2 = `/v3/images/cache/\${ref}-1-250.webp`;
            
            // Alternativa 3: Caso especial para el producto \"BT50A/00\"
            const alt3 = (referencia === 'BT50A/00') 
                ? '/v3/images/cache/altavoces-philips-bt50b-portatil-bluetooth-azul-bt50a-00-1-250.webp' 
                : null;
            
            // Imagen por defecto como último recurso
            const defaultImg = '/v3/images/default/no-image-250.webp';
            
            // Intenta cargar la primera alternativa
            const testImg = new Image();
            testImg.onload = function() {
                img.src = alt1;
            };
            testImg.onerror = function() {
                // Si la primera alternativa falla, intenta la segunda
                const testImg2 = new Image();
                testImg2.onload = function() {
                    img.src = alt2;
                };
                testImg2.onerror = function() {
                    // Si la segunda alternativa falla, intenta la tercera si existe
                    if (alt3) {
                        const testImg3 = new Image();
                        testImg3.onload = function() {
                            img.src = alt3;
                        };
                        testImg3.onerror = function() {
                            // Si todo falla, usa la imagen por defecto
                            img.src = defaultImg;
                        };
                        testImg3.src = alt3;
                    } else {
                        // Si no hay tercera alternativa, usa la imagen por defecto
                        img.src = defaultImg;
                    }
                };
                testImg2.src = alt2;
            };
            testImg.src = alt1;
            
            // Importante: evitar recursión infinita
            img.onerror = null;
        };
    }
    
    // Buscar todas las imágenes en las tarjetas de promociones
    const promoCards = document.querySelectorAll('.itempromociones');
    promoCards.forEach(function(card) {
        const img = card.querySelector('img');
        const ref = card.querySelector('.card-text strong + br').previousSibling.textContent.trim().replace('Ref.', '').trim();
        const nombre = card.querySelector('.nombrearticulo').textContent.trim();
        
        if (img) {
            // Aplicar el manejo de errores a cada imagen
            tryLoadImage(img, ref, nombre);
        }
    });
});
    </script>
</main>
{% endblock %}", "varios/promociones.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\varios\\promociones.html.twig");
    }
}
