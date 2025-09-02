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

/* admin/config/config-general.html.twig */
class __TwigTemplate_aa21c5ed781c91d72f4db8538955b809 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-general.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-general.html.twig"));

        // line 4
        echo "<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"nombre_web\">Nombre de la web</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"nombre_web\" id=\"nombre_web\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7), "nombre_web", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"meta_tags_description\">Descripción</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"meta_tags_description\" id=\"meta_tags_description\" class=\"materialize-textarea\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "data", [], "any", false, false, false, 13), "meta_tags_description", [], "any", false, false, false, 13), "html", null, true);
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"meta_tags_keywords\">Palabras clave</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"meta_tags_keywords\" id=\"meta_tags_keywords\" class=\"materialize-textarea\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "data", [], "any", false, false, false, 19), "meta_tags_keywords", [], "any", false, false, false, 19), "html", null, true);
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"footertxt\">Texto \"Acerca de\"</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"footertxt\" id=\"footertxt\" class=\"materialize-textarea\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "data", [], "any", false, false, false, 25), "footertxt", [], "any", false, false, false, 25), "html", null, true);
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"cookiestxt\">Texto de aviso de cookies</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"cookiestxt\" id=\"cookiestxt\" class=\"materialize-textarea\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "data", [], "any", false, false, false, 31), "cookiestxt", [], "any", false, false, false, 31), "html", null, true);
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"main_h1_text\">Texto elemento H1 página inicial</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"main_h1_text\" id=\"main_h1_text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "data", [], "any", false, false, false, 37), "main_h1_text", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
\t</div>
</div>


<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<label for=\"mobile-img\">Logo pequeño</label>
\t\t\t<div class=\"small pt-1\">(Para cabecera, móviles y barra de navegación)</div>
\t\t</div>
\t\t<input type=\"file\" class=\"form-control form-control-sm\" name=\"img_mobile\" id=\"mobile-img\">
\t\t<div id=\"msg-mobile-img\"></div>
\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoSmall"]) || array_key_exists("logoSmall", $context) ? $context["logoSmall"] : (function () { throw new RuntimeError('Variable "logoSmall" does not exist.', 50, $this->source); })())), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Logo pequeño\">
\t</div>
</div>
<br><br>

<h4 style=\"text-align:center\">MÁS FUNCIONALIDADES</h4><br>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"parseHtmlDesc\" id=\"parseHtmlDesc\" ";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "data", [], "any", false, false, false, 59), "parseHtmlDesc", [], "any", false, false, false, 59)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"parseHtmlDesc\">Limpiar HTML de la descripción de los artículos</label>
\t\t</div>
\t</div>
</div>
";
        // line 76
        echo "

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_categorias\" id=\"mostrar_categorias\" ";
        // line 81
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "data", [], "any", false, false, false, 81), "mostrar_categorias", [], "any", false, false, false, 81)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_categorias\">Mostrar categorías en vez de familias</label>
\t\t</div>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_atributos\" id=\"mostrar_atributos\" ";
        // line 90
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 90, $this->source); })()), "data", [], "any", false, false, false, 90), "mostrar_atributos", [], "any", false, false, false, 90)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_atributos\">Mostrar filtro Marcas - Atributos</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_info_cms_nav\" id=\"mostrar_info_cms_nav\" ";
        // line 98
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "data", [], "any", false, false, false, 98), "mostrar_info_cms_nav", [], "any", false, false, false, 98)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_info_cms_nav\">Mostrar botón
\t\t\t\t<span class=\"font-weight-bold\">Información</span>
\t\t\t\ten barra de navegación</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"puntos_fuertes\" id=\"puntos_fuertes\" ";
        // line 108
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "data", [], "any", false, false, false, 108), "puntos_fuertes", [], "any", false, false, false, 108)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"puntos_fuertes\">Mostrar puntos fuertes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"validar_cif_registro\" id=\"validar_cif_registro\" ";
        // line 116
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 116, $this->source); })()), "data", [], "any", false, false, false, 116), "validar_cif_registro", [], "any", false, false, false, 116)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"validar_cif_registro\">Validar CIF / NIF en alta nuevos clientes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"cliente_acceso_email\" id=\"cliente_acceso_email\" ";
        // line 124
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 124, $this->source); })()), "data", [], "any", false, false, false, 124), "cliente_acceso_email", [], "any", false, false, false, 124)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"cliente_acceso_email\">Clientes sólo acceden con email (NIF deshabilitado)</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"alta_clientes_web\" id=\"alta_clientes_web\" ";
        // line 132
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 132, $this->source); })()), "data", [], "any", false, false, false, 132), "alta_clientes_web", [], "any", false, false, false, 132)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"alta_clientes_web\">Los clientes se pueden registrar en la web</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"imagenes_webp\" id=\"imagenes_webp\" ";
        // line 140
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 140, $this->source); })()), "data", [], "any", false, false, false, 140), "imagenes_webp", [], "any", false, false, false, 140)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"imagenes_webp\">Formato de imágenes WebP</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"valoraciones\" id=\"valoraciones\" ";
        // line 148
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 148, $this->source); })()), "data", [], "any", false, false, false, 148), "valoraciones", [], "any", false, false, false, 148)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"valoraciones\">Opiniones de artículos</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"formulario_recogida\" id=\"formulario_recogida\" ";
        // line 156
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "formulario_recogida", [], "any", false, false, false, 156)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"formulario_recogida\">Formulario recogida dispositivos</label>
\t\t</div>
\t</div>
</div>

<br><br>
<h4 style=\"text-align:center\">STOCK - ALMACÉN</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"stock_unificar\" id=\"stock_unificar\" ";
        // line 167
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 167, $this->source); })()), "data", [], "any", false, false, false, 167), "stock_unificar", [], "any", false, false, false, 167)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"stock_unificar\">Unificar stock virtual</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_unidades\" id=\"mostrar_unidades\" ";
        // line 175
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 175, $this->source); })()), "data", [], "any", false, false, false, 175), "mostrar_unidades", [], "any", false, false, false, 175)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_unidades\">Mostrar unidades en stock</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"stock_alm_disp\" id=\"stock_alm_disp\" ";
        // line 183
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 183, $this->source); })()), "data", [], "any", false, false, false, 183), "stock_alm_disp", [], "any", false, false, false, 183)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"stock_alm_disp\">Calcular stock almacenes disponibles</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"stock_remoto\" class=\"col-auto col-form-label\">Texto stock remoto</label>
\t<div class=\"col\">
\t\t<input type=\"text\" class=\"form-control\" name=\"stock_remoto\" id=\"stock_remoto\" type=\"text\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 191, $this->source); })()), "data", [], "any", false, false, false, 191), "stock_remoto", [], "any", false, false, false, 191), "html", null, true);
        echo "\">
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"txt_precio_cero\" class=\"col-auto col-form-label\">Texto precio cero</label>
\t<div class=\"col\">
\t\t<input type=\"text\" class=\"form-control\" name=\"txt_precio_cero\" id=\"txt_precio_cero\" type=\"text\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 197, $this->source); })()), "data", [], "any", false, false, false, 197), "txt_precio_cero", [], "any", false, false, false, 197), "html", null, true);
        echo "\">
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"almacen\" class=\"col-auto col-form-label\">Almacén</label>
\t<div class=\"col\">
\t\t<select class=\"custom-select\" name=\"almacen\" id=\"almacen\">
\t\t\t";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alm"]) {
            // line 205
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 205), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 205) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 205, $this->source); })()), "data", [], "any", false, false, false, 205), "almacen", [], "any", false, false, false, 205))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "nombre", [], "any", false, false, false, 205), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "\t\t</select>
\t</div>
</div>
<br><br>


<h4 style=\"text-align:center\">PORTES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"portes_select\" id=\"portes_select\" ";
        // line 217
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 217, $this->source); })()), "data", [], "any", false, false, false, 217), "portes_select", [], "any", false, false, false, 217)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"portes_select\">Mostrar desplegable selección portes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col-12 col-sm-6\">
\t\t<label for=\"portes_gratis\">Importe mínimo portes gratis</label>
\t\t<input type=\"text\" class=\"form-control text-right\" name=\"portes_gratis\" id=\"portes_gratis\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 225, $this->source); })()), "data", [], "any", false, false, false, 225), "portes_gratis", [], "any", false, false, false, 225), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<label for=\"portes_euros\">Precio portes</label>
\t\t\t<small>(IVA incluido)</small>
\t\t</div>
\t\t<input type=\"text\" class=\"form-control text-right\" name=\"portes_euros\" id=\"portes_euros\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 232, $this->source); })()), "html", null, true);
        echo "\">
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">VENTAS</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"bloqueo_venta_sin_stock\" id=\"bloqueo_venta_sin_stock\" ";
        // line 241
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 241, $this->source); })()), "data", [], "any", false, false, false, 241), "bloqueo_venta_sin_stock", [], "any", false, false, false, 241)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"bloqueo_venta_sin_stock\">Bloquear venta si no hay stock</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"serie_ventas\">Serie de venta</label>
\t\t<select class=\"custom-select\" name=\"serie_ventas\" id=\"serie_ventas\">
\t\t\t";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 250, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 251
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["serie"], "html", null, true);
            echo "\" ";
            echo ((($context["serie"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 251, $this->source); })()), "data", [], "any", false, false, false, 251), "serie_ventas", [], "any", false, false, false, 251))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["serie"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"tarifa\">Tarifa de precios</label>
\t\t<select class=\"custom-select\" name=\"tarifa\" id=\"tarifa\">
\t\t\t";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifas"]) || array_key_exists("tarifas", $context) ? $context["tarifas"] : (function () { throw new RuntimeError('Variable "tarifas" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
            // line 261
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tar"], "codigo", [], "any", false, false, false, 261), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["tar"], "codigo", [], "any", false, false, false, 261) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 261, $this->source); })()), "data", [], "any", false, false, false, 261), "tarifa", [], "any", false, false, false, 261))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tar"], "nombre", [], "any", false, false, false, 261), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "\t\t</select>
\t</div>
\t<div class=\"col\">
\t\t<label for=\"tarifa_esp_dto\">Tarifa Especial Descuentos</label>
\t\t<select class=\"custom-select\" name=\"tarifa_esp_dto\" id=\"tarifa_esp_dto\">
\t\t\t";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifasEspDto"]) || array_key_exists("tarifasEspDto", $context) ? $context["tarifasEspDto"] : (function () { throw new RuntimeError('Variable "tarifasEspDto" does not exist.', 268, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tarE"]) {
            // line 269
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarE"], "codigo", [], "any", false, false, false, 269), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["tarE"], "codigo", [], "any", false, false, false, 269) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 269, $this->source); })()), "data", [], "any", false, false, false, 269), "tarifa_esp_dto", [], "any", false, false, false, 269))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarE"], "nombre", [], "any", false, false, false, 269), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "\t\t</select>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"agente\">Agente web</label>
\t\t<select class=\"custom-select\" name=\"agente\" id=\"agente\">
\t\t\t";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agentes"]) || array_key_exists("agentes", $context) ? $context["agentes"] : (function () { throw new RuntimeError('Variable "agentes" does not exist.', 279, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
            // line 280
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "codigo", [], "any", false, false, false, 280), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["age"], "codigo", [], "any", false, false, false, 280) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 280, $this->source); })()), "data", [], "any", false, false, false, 280), "agente", [], "any", false, false, false, 280))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "nombre", [], "any", false, false, false, 280), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"banco\">Banco</label>
\t\t<select class=\"custom-select\" name=\"banco\" id=\"banco\">
\t\t\t";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bancos"]) || array_key_exists("bancos", $context) ? $context["bancos"] : (function () { throw new RuntimeError('Variable "bancos" does not exist.', 289, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ban"]) {
            // line 290
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ban"], "codigo", [], "any", false, false, false, 290), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["ban"], "codigo", [], "any", false, false, false, 290) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 290, $this->source); })()), "data", [], "any", false, false, false, 290), "banco", [], "any", false, false, false, 290))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ban"], "nombre", [], "any", false, false, false, 290), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ban'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col \">
\t\t<label for=\"formapago\">Forma de pago</label>
\t\t<select class=\"custom-select\" name=\"formapago\" id=\"formapago\">
\t\t\t";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formaspago"]) || array_key_exists("formaspago", $context) ? $context["formaspago"] : (function () { throw new RuntimeError('Variable "formaspago" does not exist.', 299, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            // line 300
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fp"], "codigo", [], "any", false, false, false, 300), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["fp"], "codigo", [], "any", false, false, false, 300) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 300, $this->source); })()), "data", [], "any", false, false, false, 300), "formapago", [], "any", false, false, false, 300))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fp"], "nombre", [], "any", false, false, false, 300), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "\t\t</select>
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">SAT</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"sat_serie\">Serie partes de SAT</label>
\t\t<select class=\"custom-select\" name=\"sat_serie\" id=\"sat_serie\">
\t\t\t";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seriesSAT"]) || array_key_exists("seriesSAT", $context) ? $context["seriesSAT"] : (function () { throw new RuntimeError('Variable "seriesSAT" does not exist.', 312, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 313
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["serie"], "html", null, true);
            echo "\" ";
            echo ((($context["serie"] == twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 313, $this->source); })()), "satSerie", [], "any", false, false, false, 313))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["serie"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"sat_almacen\">Almacén</label>
\t\t<select class=\"custom-select\" name=\"sat_almacen\" id=\"sat_almacen\">
\t\t\t";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 322, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alm"]) {
            // line 323
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 323), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 323) == twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 323, $this->source); })()), "satAlmacen", [], "any", false, false, false, 323))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "nombre", [], "any", false, false, false, 323), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "\t\t</select>
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">ALTA DE CLIENTES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"cpostal_filtro\">Códigos postales no admitidos</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"cpostal_filtro\" id=\"cpostal_filtro\" value=\"";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 334, $this->source); })()), "data", [], "any", false, false, false, 334), "cpostal_filtro", [], "any", false, false, false, 334), "html", null, true);
        echo "\">
\t\t<div>
\t\t\t<small class=\"text-danger\">Inicio códigos postales. Separados por comas. Ej: (28080, 08)</small>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 334,  579 => 325,  566 => 323,  562 => 322,  553 => 315,  540 => 313,  536 => 312,  524 => 302,  511 => 300,  507 => 299,  498 => 292,  485 => 290,  481 => 289,  472 => 282,  459 => 280,  455 => 279,  445 => 271,  432 => 269,  428 => 268,  421 => 263,  408 => 261,  404 => 260,  395 => 253,  382 => 251,  378 => 250,  366 => 241,  354 => 232,  344 => 225,  333 => 217,  321 => 207,  308 => 205,  304 => 204,  294 => 197,  285 => 191,  274 => 183,  263 => 175,  252 => 167,  238 => 156,  227 => 148,  216 => 140,  205 => 132,  194 => 124,  183 => 116,  172 => 108,  159 => 98,  148 => 90,  136 => 81,  129 => 76,  121 => 59,  109 => 50,  93 => 37,  84 => 31,  75 => 25,  66 => 19,  57 => 13,  48 => 7,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# <link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme2.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme3.css') }}\"> #}
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"nombre_web\">Nombre de la web</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"nombre_web\" id=\"nombre_web\" value=\"{{ config.data.nombre_web }}\">
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"meta_tags_description\">Descripción</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"meta_tags_description\" id=\"meta_tags_description\" class=\"materialize-textarea\">{{ config.data.meta_tags_description }}</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"meta_tags_keywords\">Palabras clave</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"meta_tags_keywords\" id=\"meta_tags_keywords\" class=\"materialize-textarea\">{{ config.data.meta_tags_keywords }}</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"footertxt\">Texto \"Acerca de\"</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"footertxt\" id=\"footertxt\" class=\"materialize-textarea\">{{ config.data.footertxt }}</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"cookiestxt\">Texto de aviso de cookies</label>
\t\t<textarea class=\"form-control\" rows=\"2\" name=\"cookiestxt\" id=\"cookiestxt\" class=\"materialize-textarea\">{{ config.data.cookiestxt }}</textarea>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"main_h1_text\">Texto elemento H1 página inicial</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"main_h1_text\" id=\"main_h1_text\" value=\"{{ config.data.main_h1_text }}\">
\t</div>
</div>


<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<label for=\"mobile-img\">Logo pequeño</label>
\t\t\t<div class=\"small pt-1\">(Para cabecera, móviles y barra de navegación)</div>
\t\t</div>
\t\t<input type=\"file\" class=\"form-control form-control-sm\" name=\"img_mobile\" id=\"mobile-img\">
\t\t<div id=\"msg-mobile-img\"></div>
\t\t<img src=\"{{ asset(logoSmall) }}\" class=\"img-fluid\" alt=\"Logo pequeño\">
\t</div>
</div>
<br><br>

<h4 style=\"text-align:center\">MÁS FUNCIONALIDADES</h4><br>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"parseHtmlDesc\" id=\"parseHtmlDesc\" {{ config.data.parseHtmlDesc ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"parseHtmlDesc\">Limpiar HTML de la descripción de los artículos</label>
\t\t</div>
\t</div>
</div>
{# <div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrarweb2\" id=\"mostrarweb2\" {{ config.data.mostrarweb2 ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrarweb2\">Utilizar campo
\t\t\t\t<span class=\"font-weight-bold font-italic\">
\t\t\t\t\t<u>Mostrar web 2</u>
\t\t\t\t</span>
\t\t\t\tde los artículos</label>
\t\t</div>
\t</div>
</div> #}


<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_categorias\" id=\"mostrar_categorias\" {{ config.data.mostrar_categorias ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_categorias\">Mostrar categorías en vez de familias</label>
\t\t</div>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_atributos\" id=\"mostrar_atributos\" {{ config.data.mostrar_atributos ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_atributos\">Mostrar filtro Marcas - Atributos</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_info_cms_nav\" id=\"mostrar_info_cms_nav\" {{ config.data.mostrar_info_cms_nav ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_info_cms_nav\">Mostrar botón
\t\t\t\t<span class=\"font-weight-bold\">Información</span>
\t\t\t\ten barra de navegación</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"puntos_fuertes\" id=\"puntos_fuertes\" {{ config.data.puntos_fuertes ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"puntos_fuertes\">Mostrar puntos fuertes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"validar_cif_registro\" id=\"validar_cif_registro\" {{ config.data.validar_cif_registro ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"validar_cif_registro\">Validar CIF / NIF en alta nuevos clientes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"cliente_acceso_email\" id=\"cliente_acceso_email\" {{ config.data.cliente_acceso_email ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"cliente_acceso_email\">Clientes sólo acceden con email (NIF deshabilitado)</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"alta_clientes_web\" id=\"alta_clientes_web\" {{ config.data.alta_clientes_web ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"alta_clientes_web\">Los clientes se pueden registrar en la web</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"imagenes_webp\" id=\"imagenes_webp\" {{ config.data.imagenes_webp ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"imagenes_webp\">Formato de imágenes WebP</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"valoraciones\" id=\"valoraciones\" {{ config.data.valoraciones ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"valoraciones\">Opiniones de artículos</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"formulario_recogida\" id=\"formulario_recogida\" {{ config.data.formulario_recogida ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"formulario_recogida\">Formulario recogida dispositivos</label>
\t\t</div>
\t</div>
</div>

<br><br>
<h4 style=\"text-align:center\">STOCK - ALMACÉN</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"stock_unificar\" id=\"stock_unificar\" {{ config.data.stock_unificar ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"stock_unificar\">Unificar stock virtual</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_unidades\" id=\"mostrar_unidades\" {{ config.data.mostrar_unidades ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_unidades\">Mostrar unidades en stock</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"stock_alm_disp\" id=\"stock_alm_disp\" {{ config.data.stock_alm_disp ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"stock_alm_disp\">Calcular stock almacenes disponibles</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"stock_remoto\" class=\"col-auto col-form-label\">Texto stock remoto</label>
\t<div class=\"col\">
\t\t<input type=\"text\" class=\"form-control\" name=\"stock_remoto\" id=\"stock_remoto\" type=\"text\" value=\"{{ config.data.stock_remoto }}\">
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"txt_precio_cero\" class=\"col-auto col-form-label\">Texto precio cero</label>
\t<div class=\"col\">
\t\t<input type=\"text\" class=\"form-control\" name=\"txt_precio_cero\" id=\"txt_precio_cero\" type=\"text\" value=\"{{ config.data.txt_precio_cero }}\">
\t</div>
</div>
<div class=\"form-group row\">
\t<label for=\"almacen\" class=\"col-auto col-form-label\">Almacén</label>
\t<div class=\"col\">
\t\t<select class=\"custom-select\" name=\"almacen\" id=\"almacen\">
\t\t\t{% for alm in almacenes %}
\t\t\t\t<option value=\"{{ alm.codigo }}\" {{ alm.codigo==config.data.almacen ? 'selected' : '' }}>{{ alm.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
<br><br>


<h4 style=\"text-align:center\">PORTES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"portes_select\" id=\"portes_select\" {{ config.data.portes_select ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"portes_select\">Mostrar desplegable selección portes</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col-12 col-sm-6\">
\t\t<label for=\"portes_gratis\">Importe mínimo portes gratis</label>
\t\t<input type=\"text\" class=\"form-control text-right\" name=\"portes_gratis\" id=\"portes_gratis\" value=\"{{ config.data.portes_gratis }}\">
\t</div>
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<label for=\"portes_euros\">Precio portes</label>
\t\t\t<small>(IVA incluido)</small>
\t\t</div>
\t\t<input type=\"text\" class=\"form-control text-right\" name=\"portes_euros\" id=\"portes_euros\" value=\"{{ portes }}\">
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">VENTAS</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"bloqueo_venta_sin_stock\" id=\"bloqueo_venta_sin_stock\" {{ config.data.bloqueo_venta_sin_stock ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"bloqueo_venta_sin_stock\">Bloquear venta si no hay stock</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"serie_ventas\">Serie de venta</label>
\t\t<select class=\"custom-select\" name=\"serie_ventas\" id=\"serie_ventas\">
\t\t\t{% for serie in series %}
\t\t\t\t<option value=\"{{ serie }}\" {{ serie==config.data.serie_ventas ? 'selected' : '' }}>{{ serie }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"tarifa\">Tarifa de precios</label>
\t\t<select class=\"custom-select\" name=\"tarifa\" id=\"tarifa\">
\t\t\t{% for tar in tarifas %}
\t\t\t\t<option value=\"{{ tar.codigo }}\" {{ tar.codigo == config.data.tarifa ? 'selected' : '' }}>{{ tar.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
\t<div class=\"col\">
\t\t<label for=\"tarifa_esp_dto\">Tarifa Especial Descuentos</label>
\t\t<select class=\"custom-select\" name=\"tarifa_esp_dto\" id=\"tarifa_esp_dto\">
\t\t\t{% for tarE in tarifasEspDto %}
\t\t\t\t<option value=\"{{ tarE.codigo }}\" {{ tarE.codigo == config.data.tarifa_esp_dto ? 'selected' : '' }}>{{ tarE.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"agente\">Agente web</label>
\t\t<select class=\"custom-select\" name=\"agente\" id=\"agente\">
\t\t\t{% for age in agentes %}
\t\t\t\t<option value=\"{{ age.codigo }}\" {{ age.codigo==config.data.agente ? 'selected' : '' }}>{{ age.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"banco\">Banco</label>
\t\t<select class=\"custom-select\" name=\"banco\" id=\"banco\">
\t\t\t{% for ban in bancos %}
\t\t\t\t<option value=\"{{ ban.codigo }}\" {{ ban.codigo==config.data.banco ? 'selected' : '' }}>{{ ban.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col \">
\t\t<label for=\"formapago\">Forma de pago</label>
\t\t<select class=\"custom-select\" name=\"formapago\" id=\"formapago\">
\t\t\t{% for fp in formaspago %}
\t\t\t\t<option value=\"{{ fp.codigo }}\" {{ fp.codigo==config.data.formapago ? 'selected' : '' }}>{{ fp.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">SAT</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"sat_serie\">Serie partes de SAT</label>
\t\t<select class=\"custom-select\" name=\"sat_serie\" id=\"sat_serie\">
\t\t\t{% for serie in seriesSAT %}
\t\t\t\t<option value=\"{{ serie }}\" {{ serie==config.satSerie ? 'selected' : '' }}>{{ serie }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"sat_almacen\">Almacén</label>
\t\t<select class=\"custom-select\" name=\"sat_almacen\" id=\"sat_almacen\">
\t\t\t{% for alm in almacenes %}
\t\t\t\t<option value=\"{{ alm.codigo }}\" {{ alm.codigo==config.satAlmacen ? 'selected' : '' }}>{{ alm.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div><br><br>


<h4 style=\"text-align:center\">ALTA DE CLIENTES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<label for=\"cpostal_filtro\">Códigos postales no admitidos</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"cpostal_filtro\" id=\"cpostal_filtro\" value=\"{{ config.data.cpostal_filtro }}\">
\t\t<div>
\t\t\t<small class=\"text-danger\">Inicio códigos postales. Separados por comas. Ej: (28080, 08)</small>
\t\t</div>
\t</div>
</div>
", "admin/config/config-general.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-general.html.twig");
    }
}
