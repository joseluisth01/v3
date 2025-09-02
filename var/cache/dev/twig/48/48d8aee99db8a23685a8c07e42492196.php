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

/* admin/config/config-empresa.html.twig */
class __TwigTemplate_9a416850813d6546cbdb45bbe049b289 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-empresa.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-empresa.html.twig"));

        // line 1
        echo "<style>
  h4{
    text-align:center;
    margin-top:50px;
    margin-bottom:20px;
    text-transform:uppercase;
  }
</style>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"razon_social\">Razón Social</label>
    <input type=\"text\" class=\"form-control\" name=\"razon_social\" id=\"razon_social\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "data", [], "any", false, false, false, 12), "razon_social", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"cif\">CIF</label>
    <input type=\"text\" class=\"form-control\" name=\"cif\" id=\"cif\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "data", [], "any", false, false, false, 18), "cif", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"direccion\">Dirección</label>
    <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "data", [], "any", false, false, false, 24), "direccion", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"localidad\">Localidad</label>
    <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "data", [], "any", false, false, false, 30), "localidad", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"codigo_postal\">Código postal</label>
    <input type=\"text\" class=\"form-control\" name=\"codigo_postal\" id=\"codigo_postal\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "data", [], "any", false, false, false, 37), "codigo_postal", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
  </div>
  <div class=\"col\">
    <label for=\"provincia\">Provincia</label>
    <input type=\"text\" class=\"form-control\" name=\"provincia\" id=\"provincia\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "data", [], "any", false, false, false, 41), "provincia", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"telefono\">Teléfono</label>
    <input type=\"text\" class=\"form-control\" name=\"telefono\" id=\"telefono\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "data", [], "any", false, false, false, 47), "telefono", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
  </div>
  <div class=\"col\">
    <label for=\"email\">Email</label>
    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "data", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"horario\">Horario de atención</label>
    <input type=\"text\" class=\"form-control\" name=\"horario\" id=\"horario\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "data", [], "any", false, false, false, 57), "horario", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
  </div>
</div>


<h4>DIRECCIONES EMAIL NOTIFICACIONES</h4>
<div class=\"form-group row\">
  <div class=\"col col-md-4\">
    <label for=\"email_cliente_nuevo\">Nuevo cliente</label>
    <input type=\"text\" class=\"form-control\" name=\"email_cliente_nuevo\" id=\"email_cliente_nuevo\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, false, 66), "email_cliente_nuevo", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
  </div>
  <div class=\"col col-md-4\">
    <label for=\"email_pedidos\">Nuevo pedido</label>
    <input type=\"text\" class=\"form-control\" name=\"email_pedidos\" id=\"email_pedidos\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "email_pedidos", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
  </div>
  <div class=\"col col-md-4\">
    <label for=\"email_copia_pedidos\">Copia pedido cliente</label>
    <input type=\"text\" class=\"form-control\" name=\"email_copia_pedidos\" id=\"email_copia_pedidos\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "data", [], "any", false, false, false, 74), "email_copia_pedidos", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"email_recogida\">Solicitud recogida de clientes</label>
    <input type=\"text\" class=\"form-control\" name=\"email_recogida\" id=\"email_recogida\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "email_recogida", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
  </div>
</div>
<hr>
<h4>SAT</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"sat_url\">URL SAT V3</label>
    <input type=\"text\" class=\"form-control\" name=\"sat_url\" id=\"sat_url\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "data", [], "any", false, false, false, 88), "sat_url", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
  </div>
</div>
<hr>
<h4>BLOG</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"blog_url\">URL BLOG</label>
    <input type=\"text\" class=\"form-control\" name=\"blog_url\" id=\"blog_url\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 96, $this->source); })()), "data", [], "any", false, false, false, 96), "blog_url", [], "any", false, false, false, 96), "html", null, true);
        echo "\">
  </div>
</div>
<hr>
<h4>Geolocalización</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"latitud\">Latitud</label>
    <input type=\"text\" class=\"form-control\" name=\"latitud\" id=\"latitud\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 104, $this->source); })()), "data", [], "any", false, false, false, 104), "latitud", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
  </div>
  <div class=\"col\">
    <label for=\"longitud\">Longitud</label>
    <input type=\"text\" class=\"form-control\" name=\"longitud\" id=\"longitud\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "data", [], "any", false, false, false, 108), "longitud", [], "any", false, false, false, 108), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"georegion\">GeoRegion</label>
    <select class=\"custom-select\" name=\"georegion\" id=\"georegion\">
      ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["georegiones"]) || array_key_exists("georegiones", $context) ? $context["georegiones"] : (function () { throw new RuntimeError('Variable "georegiones" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["codigo"] => $context["nombre"]) {
            // line 116
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["codigo"], "html", null, true);
            echo "\" ";
            echo ((($context["codigo"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 116, $this->source); })()), "data", [], "any", false, false, false, 116), "georegion", [], "any", false, false, false, 116))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['codigo'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    </select>
  </div>
</div>
<hr>
<h4>Google Analytics</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"analytics\">Identificador</label>
    <input type=\"text\" class=\"form-control\" name=\"analytics\" id=\"analytics\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 126, $this->source); })()), "data", [], "any", false, false, false, 126), "analytics", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
  </div>
</div>
<h4>Google Maps</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"google_maps\">URL</label>
    <input type=\"text\" class=\"form-control\" name=\"google_maps\" id=\"google_maps\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 133, $this->source); })()), "data", [], "any", false, false, false, 133), "google_maps", [], "any", false, false, false, 133), "html", null, true);
        echo "\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"gmaps-img\">Imagen</label>
    <input type=\"file\" class=\"form-control form-control-sm\" name=\"gmaps_img\" id=\"gmaps-img\">
    <div id=\"msg-gmaps-img\"></div>
    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gmaps.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Imagen Google Maps\">
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-empresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 141,  247 => 133,  237 => 126,  227 => 118,  214 => 116,  210 => 115,  200 => 108,  193 => 104,  182 => 96,  171 => 88,  160 => 80,  151 => 74,  144 => 70,  137 => 66,  125 => 57,  116 => 51,  109 => 47,  100 => 41,  93 => 37,  83 => 30,  74 => 24,  65 => 18,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  h4{
    text-align:center;
    margin-top:50px;
    margin-bottom:20px;
    text-transform:uppercase;
  }
</style>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"razon_social\">Razón Social</label>
    <input type=\"text\" class=\"form-control\" name=\"razon_social\" id=\"razon_social\" value=\"{{config.data.razon_social}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"cif\">CIF</label>
    <input type=\"text\" class=\"form-control\" name=\"cif\" id=\"cif\" value=\"{{config.data.cif}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"direccion\">Dirección</label>
    <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"{{config.data.direccion}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"localidad\">Localidad</label>
    <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\" value=\"{{config.data.localidad}}\">
  </div>
</div>

<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"codigo_postal\">Código postal</label>
    <input type=\"text\" class=\"form-control\" name=\"codigo_postal\" id=\"codigo_postal\" value=\"{{config.data.codigo_postal}}\">
  </div>
  <div class=\"col\">
    <label for=\"provincia\">Provincia</label>
    <input type=\"text\" class=\"form-control\" name=\"provincia\" id=\"provincia\" value=\"{{config.data.provincia}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"telefono\">Teléfono</label>
    <input type=\"text\" class=\"form-control\" name=\"telefono\" id=\"telefono\" value=\"{{config.data.telefono}}\">
  </div>
  <div class=\"col\">
    <label for=\"email\">Email</label>
    <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"{{config.data.email}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"horario\">Horario de atención</label>
    <input type=\"text\" class=\"form-control\" name=\"horario\" id=\"horario\" value=\"{{config.data.horario}}\">
  </div>
</div>


<h4>DIRECCIONES EMAIL NOTIFICACIONES</h4>
<div class=\"form-group row\">
  <div class=\"col col-md-4\">
    <label for=\"email_cliente_nuevo\">Nuevo cliente</label>
    <input type=\"text\" class=\"form-control\" name=\"email_cliente_nuevo\" id=\"email_cliente_nuevo\" value=\"{{config.data.email_cliente_nuevo}}\">
  </div>
  <div class=\"col col-md-4\">
    <label for=\"email_pedidos\">Nuevo pedido</label>
    <input type=\"text\" class=\"form-control\" name=\"email_pedidos\" id=\"email_pedidos\" value=\"{{config.data.email_pedidos}}\">
  </div>
  <div class=\"col col-md-4\">
    <label for=\"email_copia_pedidos\">Copia pedido cliente</label>
    <input type=\"text\" class=\"form-control\" name=\"email_copia_pedidos\" id=\"email_copia_pedidos\" value=\"{{config.data.email_copia_pedidos}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"email_recogida\">Solicitud recogida de clientes</label>
    <input type=\"text\" class=\"form-control\" name=\"email_recogida\" id=\"email_recogida\" value=\"{{config.data.email_recogida}}\">
  </div>
</div>
<hr>
<h4>SAT</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"sat_url\">URL SAT V3</label>
    <input type=\"text\" class=\"form-control\" name=\"sat_url\" id=\"sat_url\" value=\"{{config.data.sat_url}}\">
  </div>
</div>
<hr>
<h4>BLOG</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"blog_url\">URL BLOG</label>
    <input type=\"text\" class=\"form-control\" name=\"blog_url\" id=\"blog_url\" value=\"{{config.data.blog_url}}\">
  </div>
</div>
<hr>
<h4>Geolocalización</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"latitud\">Latitud</label>
    <input type=\"text\" class=\"form-control\" name=\"latitud\" id=\"latitud\" value=\"{{config.data.latitud}}\">
  </div>
  <div class=\"col\">
    <label for=\"longitud\">Longitud</label>
    <input type=\"text\" class=\"form-control\" name=\"longitud\" id=\"longitud\" value=\"{{config.data.longitud}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"georegion\">GeoRegion</label>
    <select class=\"custom-select\" name=\"georegion\" id=\"georegion\">
      {% for codigo, nombre in georegiones %}
        <option value=\"{{codigo}}\" {{ codigo == config.data.georegion ? 'selected' : '' }}>{{ nombre }}</option>
      {% endfor %}
    </select>
  </div>
</div>
<hr>
<h4>Google Analytics</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"analytics\">Identificador</label>
    <input type=\"text\" class=\"form-control\" name=\"analytics\" id=\"analytics\" value=\"{{config.data.analytics}}\">
  </div>
</div>
<h4>Google Maps</h4>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"google_maps\">URL</label>
    <input type=\"text\" class=\"form-control\" name=\"google_maps\" id=\"google_maps\" value=\"{{config.data.google_maps}}\">
  </div>
</div>
<div class=\"form-group row\">
  <div class=\"col\">
    <label for=\"gmaps-img\">Imagen</label>
    <input type=\"file\" class=\"form-control form-control-sm\" name=\"gmaps_img\" id=\"gmaps-img\">
    <div id=\"msg-gmaps-img\"></div>
    <img src=\"{{ asset('images/gmaps.jpg') }}\" class=\"img-fluid\" alt=\"Imagen Google Maps\">
  </div>
</div>
", "admin/config/config-empresa.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-empresa.html.twig");
    }
}
