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

/* admin/config/config-web.html.twig */
class __TwigTemplate_34d3517268306b19ad093bc538c78012 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-web.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-web.html.twig"));

        // line 1
        echo "<h4 style=\"text-align:center !important\">CONFIGURACIONES PRINCIPALES</h4><br>
<div class=\"form-group row\">
\t<div class=\"col col-md-4\">
\t\t<label for=\"estilo\">Color principal (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"estilo\" id=\"estilo\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "estilo", [], "any", false, false, false, 5), "html", null, true);
        echo "\" placeholder=\"#04569B\">
\t</div>
\t<div class=\"col col-md-4\">
\t\t<label for=\"color_secundario\">Color secundario (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"color_secundario\" id=\"color_secundario\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 9), "color_secundario", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 9), "color_secundario", [], "any", false, false, false, 9), "#FF5733")) : ("#FF5733")), "html", null, true);
        echo "\" placeholder=\"#FF5733\">
\t</div>
\t<div class=\"col col-md-4\">
\t\t<label for=\"color_secundario\">Color tercero (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"color_tercero\" id=\"color_tercero\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 13), "color_tercero", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 13), "color_tercero", [], "any", false, false, false, 13), "#E99712")) : ("#E99712")), "html", null, true);
        echo "\" placeholder=\"#E99712\">
\t</div>
\t<div class=\"col\">
\t\t<label for=\"imagen_logo\">Logo de la empresa</label>
\t\t<select class=\"custom-select\" name=\"imagen_logo\" id=\"imagen_logo\">
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 19
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "codigo", [], "any", false, false, false, 19), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["img"], "codigo", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "data", [], "any", false, false, false, 19), "imagen_logo", [], "any", false, false, false, 19))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "nombre", [], "any", false, false, false, 19), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</select>
\t</div>
</div><br>

<h4>SLIDER PRINCIPAL</h4>
<div class=\"form-group row\">
\t<div class=\"col-12 col-md-4\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider\" id=\"slider\" ";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, false, 29), "slider", [], "any", false, false, false, 29)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"slider\">Mostrar slider</label>
\t\t</div>
\t</div>
\t<div class=\"col col-md-auto row mt-4 mt-md-0\">
\t\t<label class=\"col-auto\" for=\"slider_height\">Altura slider</label>
\t\t<input type=\"text\" class=\"col-3 col-sm-2 form-control text-right\" style=\"margin-top:-.5rem\" name=\"slider_height\" id=\"slider_height\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "data", [], "any", false, false, false, 35), "slider_height", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
\t\t<div class=\"col-auto\">(px)</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider_size_auto\" id=\"slider_size_auto\" ";
        // line 42
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "data", [], "any", false, false, false, 42), "slider_size_auto", [], "any", false, false, false, 42)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"slider_size_auto\">Ajuste automático imágenes slider</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"slider_text_color\">Color de las letras del slider (Código hexadecimal)</label>
        <input type=\"text\" class=\"form-control\" name=\"slider_text_color\" id=\"slider_text_color\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 50), "slider_text_color", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 50), "slider_text_color", [], "any", false, false, false, 50), "#FFFFFF")) : ("#FFFFFF")), "html", null, true);
        echo "\" placeholder=\"#FFFFFF\">
    </div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider_banner\" id=\"slider_banner\" ";
        // line 56
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "data", [], "any", false, false, false, 56), "slider_banner", [], "any", false, false, false, 56)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"slider_banner\">Slider utiliza configuración V3 Banner</label>
\t\t</div>
\t</div>
</div><br>

<h4>FOOTER</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_footer\" id=\"mostrar_footer\" ";
        // line 66
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, false, 66), "mostrar_footer", [], "any", false, false, false, 66)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_footer\">Mostrar pie de página</label>
\t\t</div>
\t</div>
</div><br>

<h4>FORMULARIO DE CONTACTO</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar formulario de contacto</label>
            <div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-content\">
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/marcas/formulariopro.png"), "html", null, true);
        echo "\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
            <p class=\"paquetepro\" style=\"margin-left: 10px;\">(Uso exclusivo del paquete PRO)</p>
        </div>
    </div>
</div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex;\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
\t\t\t<label class=\"custom-control-label\" for=\"\">Mostrar ubicación exacta de Google Maps</label>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
\t\t</div><br>
\t\t<input type=\"text\" class=\"form-control inputbloq\" name=\"estilo\" id=\"estilo\" value=\"\" placeholder=\"Introducir URL de Google Maps\" disabled>
\t</div>
</div>
<br>

<h4>NEWSLETTER</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_newsletter\" id=\"mostrar_newsletter\" ";
        // line 105
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "data", [], "any", false, false, false, 105), "mostrar_newsletter", [], "any", false, false, false, 105)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_newsletter\">Mostrar suscripción a Newsletter</label>
\t\t</div>
\t</div>
</div><br>

<h4>BANNER MARCAS CON LAS QUE TRABAJAMOS</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_marcas\" id=\"mostrar_marcas\" ";
        // line 115
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 115, $this->source); })()), "data", [], "any", false, false, false, 115), "mostrar_marcas", [], "any", false, false, false, 115)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_marcas\">Mostrar marcas en página principal</label>
\t\t\t
\t\t</div>
\t</div>
</div><br>

<h4>BANNER GARANTÍAS</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex;\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar banner de garantías</label>
\t\t\t<div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-contentgarantias\">
                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/marcas/bannergarantias.png"), "html", null, true);
        echo "\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
        </div>
    </div>
</div><br>

<h4>BANNER DE CONTACTO LATERAL</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex;\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar banner de contacto</label>
\t\t\t<div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-contentbannerlateral\">
                    <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/marcas/bannerlateral.png"), "html", null, true);
        echo "\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
        </div>
\t\t
    </div>
</div><br>


<h4>BANNER OPINIONES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_opiniones\" id=\"mostrar_opiniones\" ";
        // line 162
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 162, $this->source); })()), "data", [], "any", false, false, false, 162), "mostrar_opiniones", [], "any", false, false, false, 162)) ? ("checked") : (""));
        echo ">
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_opiniones\">Mostrar opiniones</label>
\t\t\t<a style=\"margin-left:20px\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminmanage-opinions");
        echo "\">Gestionar Opiniones</a><br>
\t\t</div>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex;\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
\t\t\t<label class=\"custom-control-label\" for=\"\">Conectar banner de opiniones con ficha de google actualizada</label>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
\t\t</div><br>
\t\t<input type=\"text\" class=\"form-control inputbloq\" name=\"estilo\" id=\"estilo\" value=\"\" placeholder=\"Introducir nombre exacto del negocio o el ID de la ficha de negocio\" disabled>
\t</div>
</div>

<br><br>
<h4>KIT DIGITAL</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"kit_digital\" id=\"kit_digital\" ";
        // line 185
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 185, $this->source); })()), "data", [], "any", false, false, false, 185), "kit_digital", [], "any", false, false, false, 185)) ? ("checked") : (""));
        echo ">
      <label class=\"custom-control-label\" for=\"kit_digital\">Mostrar logotipos kit digital</label>
    </div>
  </div>
</div>
<br>
<h4>PÁGINA QUIÉNES SOMOS</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"quienessomosboolean\" id=\"quienessomosboolean\" ";
        // line 195
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 195, $this->source); })()), "data", [], "any", false, false, false, 195), "quienessomosboolean", [], "any", false, false, false, 195)) ? ("checked") : (""));
        echo ">
      <label class=\"custom-control-label\" for=\"quienessomosboolean\">Mostrar página \"Quienes Somos\"</label>
\t  <a style=\"margin-left:20px\" href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminconfig-quienes-somos");
        echo "\">Gestionar Contenido</a><br>
    </div>
  </div>
</div>

<br>
<h4>PÁGINA RECURSOS</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"recursosboolean\" id=\"recursosboolean\" ";
        // line 207
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 207, $this->source); })()), "data", [], "any", false, false, false, 207), "recursosboolean", [], "any", false, false, false, 207)) ? ("checked") : (""));
        echo ">
      <label class=\"custom-control-label\" for=\"recursosboolean\">Mostrar página \"Recursos\"</label>
\t  <a style=\"margin-left:20px\" href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-recursos");
        echo "\">Gestionar Contenido</a><br>
    </div>
  </div>
</div><br>

<h4>PÁGINA PROMOCIONES</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"promocionesboolean\" id=\"promocionesboolean\" ";
        // line 218
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 218, $this->source); })()), "data", [], "any", false, false, false, 218), "promocionesboolean", [], "any", false, false, false, 218)) ? ("checked") : (""));
        echo ">
      <label class=\"custom-control-label\" for=\"promocionesboolean\">Mostrar página \"Promociones\"</label>
\t  <a style=\"margin-left:20px\" href=\"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config-promociones");
        echo "\">Gestionar Contenido</a><br>
    </div>
  </div>
</div><br>







";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-web.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 220,  341 => 218,  329 => 209,  324 => 207,  311 => 197,  306 => 195,  293 => 185,  269 => 164,  264 => 162,  247 => 148,  227 => 131,  208 => 115,  195 => 105,  168 => 81,  150 => 66,  137 => 56,  128 => 50,  117 => 42,  107 => 35,  98 => 29,  88 => 21,  75 => 19,  71 => 18,  63 => 13,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 style=\"text-align:center !important\">CONFIGURACIONES PRINCIPALES</h4><br>
<div class=\"form-group row\">
\t<div class=\"col col-md-4\">
\t\t<label for=\"estilo\">Color principal (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"estilo\" id=\"estilo\" value=\"{{ config.data.estilo }}\" placeholder=\"#04569B\">
\t</div>
\t<div class=\"col col-md-4\">
\t\t<label for=\"color_secundario\">Color secundario (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"color_secundario\" id=\"color_secundario\" value=\"{{ config.data.color_secundario|default('#FF5733') }}\" placeholder=\"#FF5733\">
\t</div>
\t<div class=\"col col-md-4\">
\t\t<label for=\"color_secundario\">Color tercero (Código hexadecimal)</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"color_tercero\" id=\"color_tercero\" value=\"{{ config.data.color_tercero|default('#E99712') }}\" placeholder=\"#E99712\">
\t</div>
\t<div class=\"col\">
\t\t<label for=\"imagen_logo\">Logo de la empresa</label>
\t\t<select class=\"custom-select\" name=\"imagen_logo\" id=\"imagen_logo\">
\t\t\t{% for img in imagenes %}
\t\t\t\t<option value=\"{{ img.codigo }}\" {{ img.codigo==config.data.imagen_logo ? 'selected' : '' }}>{{ img.nombre }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div><br>

<h4>SLIDER PRINCIPAL</h4>
<div class=\"form-group row\">
\t<div class=\"col-12 col-md-4\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider\" id=\"slider\" {{ config.data.slider ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"slider\">Mostrar slider</label>
\t\t</div>
\t</div>
\t<div class=\"col col-md-auto row mt-4 mt-md-0\">
\t\t<label class=\"col-auto\" for=\"slider_height\">Altura slider</label>
\t\t<input type=\"text\" class=\"col-3 col-sm-2 form-control text-right\" style=\"margin-top:-.5rem\" name=\"slider_height\" id=\"slider_height\" value=\"{{ config.data.slider_height }}\">
\t\t<div class=\"col-auto\">(px)</div>
\t</div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider_size_auto\" id=\"slider_size_auto\" {{ config.data.slider_size_auto ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"slider_size_auto\">Ajuste automático imágenes slider</label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"slider_text_color\">Color de las letras del slider (Código hexadecimal)</label>
        <input type=\"text\" class=\"form-control\" name=\"slider_text_color\" id=\"slider_text_color\" value=\"{{ config.data.slider_text_color|default('#FFFFFF') }}\" placeholder=\"#FFFFFF\">
    </div>
</div>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"slider_banner\" id=\"slider_banner\" {{ config.data.slider_banner ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"slider_banner\">Slider utiliza configuración V3 Banner</label>
\t\t</div>
\t</div>
</div><br>

<h4>FOOTER</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_footer\" id=\"mostrar_footer\" {{ config.data.mostrar_footer ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_footer\">Mostrar pie de página</label>
\t\t</div>
\t</div>
</div><br>

<h4>FORMULARIO DE CONTACTO</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar formulario de contacto</label>
            <div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-content\">
                    <img src=\"{{ asset('images/marcas/formulariopro.png') }}\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
            <p class=\"paquetepro\" style=\"margin-left: 10px;\">(Uso exclusivo del paquete PRO)</p>
        </div>
    </div>
</div>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex;\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
\t\t\t<label class=\"custom-control-label\" for=\"\">Mostrar ubicación exacta de Google Maps</label>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
\t\t</div><br>
\t\t<input type=\"text\" class=\"form-control inputbloq\" name=\"estilo\" id=\"estilo\" value=\"\" placeholder=\"Introducir URL de Google Maps\" disabled>
\t</div>
</div>
<br>

<h4>NEWSLETTER</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_newsletter\" id=\"mostrar_newsletter\" {{ config.data.mostrar_newsletter ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_newsletter\">Mostrar suscripción a Newsletter</label>
\t\t</div>
\t</div>
</div><br>

<h4>BANNER MARCAS CON LAS QUE TRABAJAMOS</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_marcas\" id=\"mostrar_marcas\" {{ config.data.mostrar_marcas ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_marcas\">Mostrar marcas en página principal</label>
\t\t\t
\t\t</div>
\t</div>
</div><br>

<h4>BANNER GARANTÍAS</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex;\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar banner de garantías</label>
\t\t\t<div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-contentgarantias\">
                    <img src=\"{{ asset('images/marcas/bannergarantias.png') }}\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
        </div>
    </div>
</div><br>

<h4>BANNER DE CONTACTO LATERAL</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\" style=\"display:flex;\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
            <label class=\"custom-control-label\" for=\"\">Mostrar banner de contacto</label>
\t\t\t<div class=\"tooltip-container\">
                <i class=\"fas fa-info-circle info-icon\"></i>
                <div class=\"tooltip-contentbannerlateral\">
                    <img src=\"{{ asset('images/marcas/bannerlateral.png') }}\" alt=\"Versión PRO del formulario\" style=\"width: 100%; height: auto;\">
                </div>
            </div>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
        </div>
\t\t
    </div>
</div><br>


<h4>BANNER OPINIONES</h4>
<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"mostrar_opiniones\" id=\"mostrar_opiniones\" {{ config.data.mostrar_opiniones ? 'checked' : '' }}>
\t\t\t<label class=\"custom-control-label\" for=\"mostrar_opiniones\">Mostrar opiniones</label>
\t\t\t<a style=\"margin-left:20px\" href=\"{{ path('adminmanage-opinions') }}\">Gestionar Opiniones</a><br>
\t\t</div>
\t</div>
</div>

<div class=\"form-group row\">
\t<div class=\"col\">
\t\t<div class=\"custom-control custom-switch\" style=\"display:flex;\">
\t\t\t<input type=\"checkbox\" class=\"custom-control-input\" name=\"\" id=\"\" disabled>
\t\t\t<label class=\"custom-control-label\" for=\"\">Conectar banner de opiniones con ficha de google actualizada</label>
\t\t\t<p class=\"paquetepro\">(Uso exclusivo del paquete PRO)</p>
\t\t</div><br>
\t\t<input type=\"text\" class=\"form-control inputbloq\" name=\"estilo\" id=\"estilo\" value=\"\" placeholder=\"Introducir nombre exacto del negocio o el ID de la ficha de negocio\" disabled>
\t</div>
</div>

<br><br>
<h4>KIT DIGITAL</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"kit_digital\" id=\"kit_digital\" {{ config.data.kit_digital ? 'checked' : '' }}>
      <label class=\"custom-control-label\" for=\"kit_digital\">Mostrar logotipos kit digital</label>
    </div>
  </div>
</div>
<br>
<h4>PÁGINA QUIÉNES SOMOS</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"quienessomosboolean\" id=\"quienessomosboolean\" {{ config.data.quienessomosboolean ? 'checked' : '' }}>
      <label class=\"custom-control-label\" for=\"quienessomosboolean\">Mostrar página \"Quienes Somos\"</label>
\t  <a style=\"margin-left:20px\" href=\"{{ path('adminconfig-quienes-somos') }}\">Gestionar Contenido</a><br>
    </div>
  </div>
</div>

<br>
<h4>PÁGINA RECURSOS</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"recursosboolean\" id=\"recursosboolean\" {{ config.data.recursosboolean ? 'checked' : '' }}>
      <label class=\"custom-control-label\" for=\"recursosboolean\">Mostrar página \"Recursos\"</label>
\t  <a style=\"margin-left:20px\" href=\"{{ path('config-recursos') }}\">Gestionar Contenido</a><br>
    </div>
  </div>
</div><br>

<h4>PÁGINA PROMOCIONES</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <div class=\"custom-control custom-switch\" style=\"display:flex; align-items:center\">
      <input type=\"checkbox\" class=\"custom-control-input\" name=\"promocionesboolean\" id=\"promocionesboolean\" {{ config.data.promocionesboolean ? 'checked' : '' }}>
      <label class=\"custom-control-label\" for=\"promocionesboolean\">Mostrar página \"Promociones\"</label>
\t  <a style=\"margin-left:20px\" href=\"{{ path('config-promociones') }}\">Gestionar Contenido</a><br>
    </div>
  </div>
</div><br>







", "admin/config/config-web.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-web.html.twig");
    }
}
