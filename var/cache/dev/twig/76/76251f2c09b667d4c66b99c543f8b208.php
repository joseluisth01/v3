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

/* articulo/articulo.html.twig */
class __TwigTemplate_1cecbfd9bc44af034adce71dfeba1b82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/articulo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/articulo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articulo/articulo.html.twig", 1);
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
        echo "\t<style>
\t\ttable.table-ref-pn-cba > tbody > tr > td:last-child {
\t\t\tfont-weight: bold;
\t\t\tpadding-left: 5px;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<main id=\"articulo\" data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["weburl"]) || array_key_exists("weburl", $context) ? $context["weburl"] : (function () { throw new RuntimeError('Variable "weburl" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
\t\t<div class=\"row\" style=\"width:90%; margin:0 auto\">
<div class=\"col-sm-8 galeriaarticulo\">
\t\t\t\t<div class=\"mb-1\" style=\"overflow-x:auto\">
\t\t\t\t\t<div class=\"product-other-images\" :style=\"{ width: (10 + imagenes.length * 70) + 'px' }\">
\t\t\t\t\t\t<a v-for=\"img in imagenes\" :href=\"path(img.large)\" data-fancybox=\"gallery\" data-rel=\"photos-lib\">
\t\t\t\t\t\t\t<img :alt=\"img.imagen_txt\" :src=\"path(img.small)\" class=\"miniatura\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-main-image text-center\">
\t\t\t\t\t<img class=\"img-fluid\" id=\"imagen_articulo\" :src=\"imagenPrincipal\" :alt=\"imagenTxt\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 infoarticulo\">
\t\t\t\t<h1 class=\"nombrearticulo2\">\${ art.nombre }</h1>
\t\t\t\t<table class=\"table-ref-pn-cba mt-2\">
\t\t\t\t\t<tbody class=\"d-flex\" style=\"gap:20px\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ref.</td>
\t\t\t\t\t\t\t<td>\${ art.referencia }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr v-if=\"art.part_number != ''\">
\t\t\t\t\t\t\t<td>P.N:</td>
\t\t\t\t\t\t\t<td>\${ art.part_number }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr v-if=\"art.codbarras != ''\">
\t\t\t\t\t\t\t<td>Cod.</td>
\t\t\t\t\t\t\t<td>\${ art.codbarras }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "stockUnificar", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/estrellas.png"), "html", null, true);
            echo "\" alt=\"1\">
\t\t\t\t\t<div v-if=\"art.stock_remoto\">
\t\t\t\t\t\t<span class=\"font-weight-bold text-white bg-success px-3\">
\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "stockRemoto", [], "any", false, false, false, 49), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div v-else v-html=\"iconStockArticulo\" class=\"availability\"></div>
\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-4\">
\t\t\t\t\t\t<img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/estrellas.png"), "html", null, true);
            echo "\" alt=\"1\">
\t\t\t\t\t\t<div v-html=\"iconStockArticulo\" class=\"availability\"></div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t<div class=\"mt-5 d-flex justify-content-end align-items-center\" style=\"text-align:right;\" v-if=\"descuento > 0\">
\t\t\t\t\t<span style=\"margin-right:5px\" class=\"dtoarticulo\">DESCUENTO:</span>
\t\t\t\t\t";
        // line 65
        echo "\t\t\t\t\t<span class=\"porcentajedto font-weight-bold\">\${descuento}%</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"price-availability-block my-2\">
\t\t\t\t\t\t<div class=\"price\" style=\"text-align:right\">
\t\t\t\t\t\t\t<div class=\"mt-3 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"product-quantity product-quantityart\">
\t\t\t\t\t\t\t\t\t<input id=\"unidades\" type=\"text\" v-model=\"unidades\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center pagoresponsive\" >
\t\t\t\t\t\t\t\t\t<span style=\"margin-right:5px\" class=\"dtoarticulo\">TOTAL A PAGAR:</span>
\t\t\t\t\t\t\t\t\t<strong class=\"totalapagar\" v-html=\"precioArticulo\"></strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-inline\" v-if=\"precioArticulo != txtPrecioCero\">
\t\t\t\t\t\t\t\t<span class=\"ml-2\" v-if=\"art.lpi > 0\">( IVA y canon incluidos )</span>
\t\t\t\t\t\t\t\t<span class=\"ml-2\" v-else>( IVA incluido )</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-1\" v-show=\"listaTallas.length > 0\">
\t\t\t\t\t<label for=\"talla\" class=\"col-2 col-form-label\">Talla</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<select id=\"talla\" class=\"form-control form-control-sm\" v-model=\"talla\">
\t\t\t\t\t\t\t<option v-for=\"talla in listaTallas\" :key=\"talla.codigo\" :value=\"talla.codigo\">
\t\t\t\t\t\t\t\t\${talla.nombre}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row my-1\" v-show=\"listaColores.length > 0\">
\t\t\t\t\t<label for=\"color\" class=\"col-2 col-form-label\">Color</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<select id=\"color\" class=\"form-control form-control-sm\" v-model=\"color\">
\t\t\t\t\t\t\t<option v-for=\"color in listaColores\" :key=\"color.codigo\" :value=\"color.codigo\">
\t\t\t\t\t\t\t\t\${color.nombre}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-page-cart\" v-if=\"!art.control_stock || !bloqueo_stock || bloqueo_stock && (stockArticulo > 0 || (art.stock_remoto && ";
        // line 108
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "stockUnificar", [], "any", false, false, false, 108)) ? ("true") : ("false"));
        echo "))\">

\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add2cart\" @click=\"addToCart\">AÑADIR AL CARRITO</button>
\t\t\t\t\t<div v-if=\"art.web_alerta != ''\" class=\"text-danger mt-3\">\${art.web_alerta}</div>

\t\t\t\t</div>
\t\t\t\t<div v-else>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary add2cart\" disabled>AÑADIR AL CARRITO</button>
\t\t\t\t\t<div v-if=\"art.web_alerta != ''\" class=\"text-danger mt-3\">\${art.web_alerta}</div>

\t\t\t\t</div>

\t\t\t\t";
        // line 126
        echo "\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"product-page-content\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#tab-descripcion\" class=\"nav-link active border-0\" data-toggle=\"tab\" aria-controls=\"tab-descripcion\">Descripción</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" v-if=\"art.caracteristicas != ''\">
\t\t\t\t\t\t\t<a href=\"#tab-especificaciones\" class=\"nav-link border-0\" data-toggle=\"tab\" aria-controls=\"tab-especificaciones\">Especificaciones</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 136
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 136, $this->source); })()), "valoraciones", [], "any", false, false, false, 136)) {
            // line 137
            echo "
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#tab-valoraciones\" class=\"nav-link border-0\" data-toggle=\"tab\" aria-controls=\"tab-valoraciones\">Opiniones</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-descripcion\" v-html=\"art.nombre2web\"></div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-especificaciones\" v-if=\"art.caracteristicas != ''\" v-html=\"art.caracteristicas\"></div>
\t\t\t\t\t\t";
        // line 146
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 146, $this->source); })()), "valoraciones", [], "any", false, false, false, 146)) {
            // line 147
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-valoraciones\">
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<select v-model=\"ratingOrder\" @change=\"loadRating\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"best\">Mejores valoraciones</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\">Más nuevas</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"old\">Más antiguas</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 156
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "getClient", [], "any", false, false, false, 156) != 0))) {
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("art-valoracion-new", ["weburl" => twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 159, $this->source); })()), "url", [], "any", false, false, false, 159)]), "html", null, true);
                echo "\" class=\"btn btn-primary mb-1\">Enviar opinión</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t<li v-for=\"item in valoraciones\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-lg text-warning\" v-html=\"item.valoracion\"></span>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.fecha }</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span v-if=\"item.intervalo != ''\">(\${ item.intervalo })</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t<span v-text=\"item.cli_alias\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span v-if=\"item.verificado\" class=\"ml-3 text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t&check; Compra verificada
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>\${ item.opinion}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"my-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">Ventajas:</span>
\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.pros }</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">Desventajas:</span>
\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.contras }</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 191
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<br><br><br>
\t\t\t\t\t";
        // line 193
        $context["landing"] = ((array_key_exists("landing", $context)) ? ((isset($context["landing"]) || array_key_exists("landing", $context) ? $context["landing"] : (function () { throw new RuntimeError('Variable "landing" does not exist.', 193, $this->source); })())) : ([]));
        // line 194
        echo "\t\t\t\t\t<div class=\"divarticulosvarios\" style=\"width:80%; margin:0 auto\">
\t\t\t\t\t\t<h2 class=\"titulogeneral\">Quizás También te Interesen estos Productos</h2>
\t\t\t\t\t\t<div class=\"product-list-container\">
\t\t\t\t\t\t\t";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["landing"]) || array_key_exists("landing", $context) ? $context["landing"] : (function () { throw new RuntimeError('Variable "landing" does not exist.', 197, $this->source); })()), 0, 4));
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
            // line 198
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("articulo/art-minificha.html.twig", "articulo/articulo.html.twig", 198)->display($context);
            // line 199
            echo "\t\t\t\t\t\t\t";
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
        // line 200
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\" class=\"btnvermasarticulos mb-5\">IR A LA TIENDA ONLINE</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@context\": \"https://schema.org/\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@type\": \"Product\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"name\": \"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 214, $this->source); })()), "nombre", [], "any", false, false, false, 214), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"image\": \"";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 215, $this->source); })()), "imagen", [], "any", false, false, false, 215), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"sku\": \"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 216, $this->source); })()), "referencia", [], "any", false, false, false, 216), "html", null, true);
        echo "\",
\t\t";
        // line 217
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 217, $this->source); })()), "part_number", [], "any", false, false, false, 217))) {
            // line 218
            echo "\t\t\t\"mpn\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 218, $this->source); })()), "part_number", [], "any", false, false, false, 218), "html", null, true);
            echo "\",
\t\t";
        }
        // line 220
        echo "\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 220, $this->source); })()), "codbarras", [], "any", false, false, false, 220))) {
            // line 221
            echo "\t\t\t\"gtin\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 221, $this->source); })()), "codbarras", [], "any", false, false, false, 221), "html", null, true);
            echo "\",
\t\t";
        }
        // line 223
        echo "\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 223, $this->source); })()), "marca", [], "any", false, false, false, 223))) {
            // line 224
            echo "\t\t\t\"brand\": { \"@type\": \"Brand\", \"name\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 224, $this->source); })()), "marca", [], "any", false, false, false, 224), "html", null, true);
            echo "\" },
\t\t";
        }
        // line 226
        echo "\t\t\"description\": \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 226, $this->source); })()), "nombre2web", [], "any", false, false, false, 226), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"offers\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"@type\": \"Offer\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"url\": \"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "uri", [], "any", false, false, false, 229), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"priceCurrency\": \"EUR\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"price\": \"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 231, $this->source); })()), "precio_iva", [], "any", false, false, false, 231), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"priceValidUntil\": \"";
        // line 232
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y-m-d"), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"availability\": \"https://schema.org/InStock\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"seller\": { \"@type\": \"Organization\", \"name\": \"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["emp_nombre"]) || array_key_exists("emp_nombre", $context) ? $context["emp_nombre"] : (function () { throw new RuntimeError('Variable "emp_nombre" does not exist.', 234, $this->source); })()), "html", null, true);
        echo "\" }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t</script>
\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/articulo.js"), "html", null, true);
        echo "\"></script>

\t<!-- Script para cambiar la imagen principal al hacer clic en la miniatura -->
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Obtener todas las miniaturas
\t\t\tconst miniaturas = document.querySelectorAll('.miniatura');
\t\t\tconst imagenPrincipal = document.getElementById('imagen_articulo');

\t\t\t// Función para cambiar la imagen principal
\t\t\tfunction cambiarImagen(event) {
\t\t\t\tevent.preventDefault();  // Prevenir el comportamiento por defecto del enlace
\t\t\t\tconst nuevaImagen = event.target.src.replace('small', 'large'); // Cambiar a la versión grande de la imagen
\t\t\t\timagenPrincipal.src = nuevaImagen; // Actualizar la imagen principal
\t\t\t}

\t\t\t// Añadir el evento de clic a cada miniatura
\t\t\tminiaturas.forEach(miniatura => {
\t\t\t\tminiatura.addEventListener('click', cambiarImagen);
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articulo/articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 238,  448 => 234,  443 => 232,  439 => 231,  434 => 229,  427 => 226,  421 => 224,  418 => 223,  412 => 221,  409 => 220,  403 => 218,  401 => 217,  397 => 216,  393 => 215,  389 => 214,  383 => 210,  373 => 209,  355 => 200,  341 => 199,  338 => 198,  321 => 197,  316 => 194,  314 => 193,  310 => 191,  279 => 162,  273 => 159,  269 => 157,  267 => 156,  256 => 147,  254 => 146,  248 => 142,  241 => 137,  239 => 136,  227 => 126,  212 => 108,  167 => 65,  163 => 60,  155 => 55,  152 => 54,  144 => 49,  137 => 46,  135 => 45,  99 => 12,  96 => 11,  86 => 10,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
\t<style>
\t\ttable.table-ref-pn-cba > tbody > tr > td:last-child {
\t\t\tfont-weight: bold;
\t\t\tpadding-left: 5px;
\t\t}
\t</style>
{% endblock %}
{% block body %}

\t<main id=\"articulo\" data-url=\"{{ weburl }}\">
\t\t<div class=\"row\" style=\"width:90%; margin:0 auto\">
<div class=\"col-sm-8 galeriaarticulo\">
\t\t\t\t<div class=\"mb-1\" style=\"overflow-x:auto\">
\t\t\t\t\t<div class=\"product-other-images\" :style=\"{ width: (10 + imagenes.length * 70) + 'px' }\">
\t\t\t\t\t\t<a v-for=\"img in imagenes\" :href=\"path(img.large)\" data-fancybox=\"gallery\" data-rel=\"photos-lib\">
\t\t\t\t\t\t\t<img :alt=\"img.imagen_txt\" :src=\"path(img.small)\" class=\"miniatura\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-main-image text-center\">
\t\t\t\t\t<img class=\"img-fluid\" id=\"imagen_articulo\" :src=\"imagenPrincipal\" :alt=\"imagenTxt\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 infoarticulo\">
\t\t\t\t<h1 class=\"nombrearticulo2\">\${ art.nombre }</h1>
\t\t\t\t<table class=\"table-ref-pn-cba mt-2\">
\t\t\t\t\t<tbody class=\"d-flex\" style=\"gap:20px\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ref.</td>
\t\t\t\t\t\t\t<td>\${ art.referencia }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr v-if=\"art.part_number != ''\">
\t\t\t\t\t\t\t<td>P.N:</td>
\t\t\t\t\t\t\t<td>\${ art.part_number }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr v-if=\"art.codbarras != ''\">
\t\t\t\t\t\t\t<td>Cod.</td>
\t\t\t\t\t\t\t<td>\${ art.codbarras }</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t{% if config.stockUnificar %}
\t\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/estrellas.png\") }}\" alt=\"1\">
\t\t\t\t\t<div v-if=\"art.stock_remoto\">
\t\t\t\t\t\t<span class=\"font-weight-bold text-white bg-success px-3\">
\t\t\t\t\t\t\t{{ config.stockRemoto }}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div v-else v-html=\"iconStockArticulo\" class=\"availability\"></div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-4\">
\t\t\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/estrellas.png\") }}\" alt=\"1\">
\t\t\t\t\t\t<div v-html=\"iconStockArticulo\" class=\"availability\"></div>
\t\t\t\t\t</div>

\t\t\t\t{% endif %}
\t\t\t\t<div class=\"mt-5 d-flex justify-content-end align-items-center\" style=\"text-align:right;\" v-if=\"descuento > 0\">
\t\t\t\t\t<span style=\"margin-right:5px\" class=\"dtoarticulo\">DESCUENTO:</span>
\t\t\t\t\t{# \t\t\t\t\t<span class=\"mr-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\${precioSinDto}</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span> #}
\t\t\t\t\t<span class=\"porcentajedto font-weight-bold\">\${descuento}%</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"price-availability-block my-2\">
\t\t\t\t\t\t<div class=\"price\" style=\"text-align:right\">
\t\t\t\t\t\t\t<div class=\"mt-3 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"product-quantity product-quantityart\">
\t\t\t\t\t\t\t\t\t<input id=\"unidades\" type=\"text\" v-model=\"unidades\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center pagoresponsive\" >
\t\t\t\t\t\t\t\t\t<span style=\"margin-right:5px\" class=\"dtoarticulo\">TOTAL A PAGAR:</span>
\t\t\t\t\t\t\t\t\t<strong class=\"totalapagar\" v-html=\"precioArticulo\"></strong>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-inline\" v-if=\"precioArticulo != txtPrecioCero\">
\t\t\t\t\t\t\t\t<span class=\"ml-2\" v-if=\"art.lpi > 0\">( IVA y canon incluidos )</span>
\t\t\t\t\t\t\t\t<span class=\"ml-2\" v-else>( IVA incluido )</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-1\" v-show=\"listaTallas.length > 0\">
\t\t\t\t\t<label for=\"talla\" class=\"col-2 col-form-label\">Talla</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<select id=\"talla\" class=\"form-control form-control-sm\" v-model=\"talla\">
\t\t\t\t\t\t\t<option v-for=\"talla in listaTallas\" :key=\"talla.codigo\" :value=\"talla.codigo\">
\t\t\t\t\t\t\t\t\${talla.nombre}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row my-1\" v-show=\"listaColores.length > 0\">
\t\t\t\t\t<label for=\"color\" class=\"col-2 col-form-label\">Color</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<select id=\"color\" class=\"form-control form-control-sm\" v-model=\"color\">
\t\t\t\t\t\t\t<option v-for=\"color in listaColores\" :key=\"color.codigo\" :value=\"color.codigo\">
\t\t\t\t\t\t\t\t\${color.nombre}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-page-cart\" v-if=\"!art.control_stock || !bloqueo_stock || bloqueo_stock && (stockArticulo > 0 || (art.stock_remoto && {{config.stockUnificar ? 'true': 'false'}}))\">

\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add2cart\" @click=\"addToCart\">AÑADIR AL CARRITO</button>
\t\t\t\t\t<div v-if=\"art.web_alerta != ''\" class=\"text-danger mt-3\">\${art.web_alerta}</div>

\t\t\t\t</div>
\t\t\t\t<div v-else>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary add2cart\" disabled>AÑADIR AL CARRITO</button>
\t\t\t\t\t<div v-if=\"art.web_alerta != ''\" class=\"text-danger mt-3\">\${art.web_alerta}</div>

\t\t\t\t</div>

\t\t\t\t{#         <a v-if=\"art.url_externa != ''\" :href=\"art.url_externa\" target=\"_blank\" rel=\"noreferrer\" class=\"btn btn-primary mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          <i class=\"mdi mdi-open-in-new mr-3\"></i>Enlace externo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <a v-if=\"art.id_documento > 0\" :href=\"urlDocumento\" target=\"_blank\" rel=\"noreferrer\" class=\"btn btn-primary mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          <i class=\"mdi mdi-file-document mr-3\"></i>Documento catálogo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a> #}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"product-page-content\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#tab-descripcion\" class=\"nav-link active border-0\" data-toggle=\"tab\" aria-controls=\"tab-descripcion\">Descripción</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" v-if=\"art.caracteristicas != ''\">
\t\t\t\t\t\t\t<a href=\"#tab-especificaciones\" class=\"nav-link border-0\" data-toggle=\"tab\" aria-controls=\"tab-especificaciones\">Especificaciones</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if config.valoraciones %}

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#tab-valoraciones\" class=\"nav-link border-0\" data-toggle=\"tab\" aria-controls=\"tab-valoraciones\">Opiniones</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-descripcion\" v-html=\"art.nombre2web\"></div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-especificaciones\" v-if=\"art.caracteristicas != ''\" v-html=\"art.caracteristicas\"></div>
\t\t\t\t\t\t{% if config.valoraciones %}
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-valoraciones\">
\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<select v-model=\"ratingOrder\" @change=\"loadRating\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"best\">Mejores valoraciones</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\">Más nuevas</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"old\">Más antiguas</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if app.user is not empty and app.user.getClient != 0 %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('art-valoracion-new', {weburl: art.url}) }}\" class=\"btn btn-primary mb-1\">Enviar opinión</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t<li v-for=\"item in valoraciones\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-lg text-warning\" v-html=\"item.valoracion\"></span>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.fecha }</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span v-if=\"item.intervalo != ''\">(\${ item.intervalo })</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t<span v-text=\"item.cli_alias\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span v-if=\"item.verificado\" class=\"ml-3 text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t&check; Compra verificada
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>\${ item.opinion}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"my-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">Ventajas:</span>
\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.pros }</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">Desventajas:</span>
\t\t\t\t\t\t\t\t\t\t\t<span>\${ item.contras }</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<br><br><br>
\t\t\t\t\t{% set landing = landing is defined ? landing : [] %}
\t\t\t\t\t<div class=\"divarticulosvarios\" style=\"width:80%; margin:0 auto\">
\t\t\t\t\t\t<h2 class=\"titulogeneral\">Quizás También te Interesen estos Productos</h2>
\t\t\t\t\t\t<div class=\"product-list-container\">
\t\t\t\t\t\t\t{% for art in landing|slice(0, 4) %}
\t\t\t\t\t\t\t\t{% include 'articulo/art-minificha.html.twig' %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\" class=\"btnvermasarticulos mb-5\">IR A LA TIENDA ONLINE</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
{% block javascripts %}
\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@context\": \"https://schema.org/\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@type\": \"Product\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"name\": \"{{ art.nombre }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"image\": \"{{ art.imagen }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"sku\": \"{{ art.referencia }}\",
\t\t{% if art.part_number is not empty %}
\t\t\t\"mpn\": \"{{ art.part_number }}\",
\t\t{% endif %}
\t\t{% if art.codbarras is not empty %}
\t\t\t\"gtin\": \"{{ art.codbarras }}\",
\t\t{% endif %}
\t\t{% if art.marca is not empty %}
\t\t\t\"brand\": { \"@type\": \"Brand\", \"name\": \"{{ art.marca }}\" },
\t\t{% endif %}
\t\t\"description\": \"{{ art.nombre2web }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"offers\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"@type\": \"Offer\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"url\": \"{{ app.request.uri }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"priceCurrency\": \"EUR\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"price\": \"{{ art.precio_iva }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"priceValidUntil\": \"{{ \"now\"|date_modify(\"+1 year\")|date(\"Y-m-d\") }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"availability\": \"https://schema.org/InStock\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"seller\": { \"@type\": \"Organization\", \"name\": \"{{ emp_nombre }}\" }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t</script>
\t<script src=\"{{ asset('js/articulo.js') }}\"></script>

\t<!-- Script para cambiar la imagen principal al hacer clic en la miniatura -->
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Obtener todas las miniaturas
\t\t\tconst miniaturas = document.querySelectorAll('.miniatura');
\t\t\tconst imagenPrincipal = document.getElementById('imagen_articulo');

\t\t\t// Función para cambiar la imagen principal
\t\t\tfunction cambiarImagen(event) {
\t\t\t\tevent.preventDefault();  // Prevenir el comportamiento por defecto del enlace
\t\t\t\tconst nuevaImagen = event.target.src.replace('small', 'large'); // Cambiar a la versión grande de la imagen
\t\t\t\timagenPrincipal.src = nuevaImagen; // Actualizar la imagen principal
\t\t\t}

\t\t\t// Añadir el evento de clic a cada miniatura
\t\t\tminiaturas.forEach(miniatura => {
\t\t\t\tminiatura.addEventListener('click', cambiarImagen);
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "articulo/articulo.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\articulo\\articulo.html.twig");
    }
}
