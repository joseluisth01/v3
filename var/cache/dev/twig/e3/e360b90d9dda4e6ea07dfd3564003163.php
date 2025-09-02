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

/* admin/config/config-redsys.html.twig */
class __TwigTemplate_52b0b41030589239fec05e9cf9f283a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-redsys.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-redsys.html.twig"));

        // line 1
        echo "<style>
  h4{
    text-align:center;
    margin-top:20px;
    margin-bottom:20px;
    text-transform:uppercase;
  }
</style>

<h4>Configuración REDSYS</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"redsys_activar\" id=\"redsys_activar\" ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14), "redsys_activar", [], "any", false, false, false, 14)) ? ("checked") : (""));
        echo ">
            <label class=\"custom-control-label\" for=\"redsys_activar\">Activar TPV Virtual</label>
        </div>
    </div>
</div>
<div id=\"pasarela-redsys\">
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"redsys_url\">URL TPV Virtual</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_url\" id=\"redsys_url\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23), "redsys_url", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"Ds_Merchant_MerchantName\">Nombre del comercio</label>
            <input type=\"text\" class=\"form-control\" name=\"Ds_Merchant_MerchantName\" id=\"Ds_Merchant_MerchantName\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "data", [], "any", false, false, false, 30), "Ds_Merchant_MerchantName", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <label for=\"Ds_Merchant_MerchantCode\">Número del comercio (FUC)</label>
            <input type=\"text\" class=\"form-control\" name=\"Ds_Merchant_MerchantCode\" id=\"Ds_Merchant_MerchantCode\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "Ds_Merchant_MerchantCode", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"Ds_Merchant_Terminal\">Número de terminal</label>
            <input type=\"text\" class=\"form-control text-right\" name=\"Ds_Merchant_Terminal\" id=\"Ds_Merchant_Terminal\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "data", [], "any", false, false, false, 40), "Ds_Merchant_Terminal", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <label for=\"Ds_Merchant_Currency\">Moneda del terminal</label>
            <input type=\"text\" class=\"form-control text-right\" name=\"Ds_Merchant_Currency\" id=\"Ds_Merchant_Currency\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "data", [], "any", false, false, false, 44), "Ds_Merchant_Currency", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"redsys_clave_encriptacion\">Clave de encriptación</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_clave_encriptacion\" id=\"redsys_clave_encriptacion\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "data", [], "any", false, false, false, 50), "redsys_clave_encriptacion", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <label for=\"redsys_tipo_cifrado\">Tipo de cifrado</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_tipo_cifrado\" id=\"redsys_tipo_cifrado\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "data", [], "any", false, false, false, 54), "redsys_tipo_cifrado", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-redsys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  112 => 50,  103 => 44,  96 => 40,  87 => 34,  80 => 30,  70 => 23,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  h4{
    text-align:center;
    margin-top:20px;
    margin-bottom:20px;
    text-transform:uppercase;
  }
</style>

<h4>Configuración REDSYS</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"redsys_activar\" id=\"redsys_activar\" {{ config.data.redsys_activar ? 'checked' : '' }}>
            <label class=\"custom-control-label\" for=\"redsys_activar\">Activar TPV Virtual</label>
        </div>
    </div>
</div>
<div id=\"pasarela-redsys\">
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"redsys_url\">URL TPV Virtual</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_url\" id=\"redsys_url\" value=\"{{config.data.redsys_url}}\">
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"Ds_Merchant_MerchantName\">Nombre del comercio</label>
            <input type=\"text\" class=\"form-control\" name=\"Ds_Merchant_MerchantName\" id=\"Ds_Merchant_MerchantName\" value=\"{{config.data.Ds_Merchant_MerchantName}}\">
        </div>
        <div class=\"col\">
            <label for=\"Ds_Merchant_MerchantCode\">Número del comercio (FUC)</label>
            <input type=\"text\" class=\"form-control\" name=\"Ds_Merchant_MerchantCode\" id=\"Ds_Merchant_MerchantCode\" value=\"{{config.data.Ds_Merchant_MerchantCode}}\">
        </div>
    </div>
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"Ds_Merchant_Terminal\">Número de terminal</label>
            <input type=\"text\" class=\"form-control text-right\" name=\"Ds_Merchant_Terminal\" id=\"Ds_Merchant_Terminal\" value=\"{{config.data.Ds_Merchant_Terminal}}\">
        </div>
        <div class=\"col\">
            <label for=\"Ds_Merchant_Currency\">Moneda del terminal</label>
            <input type=\"text\" class=\"form-control text-right\" name=\"Ds_Merchant_Currency\" id=\"Ds_Merchant_Currency\" value=\"{{config.data.Ds_Merchant_Currency}}\">
        </div>
    </div>
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"redsys_clave_encriptacion\">Clave de encriptación</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_clave_encriptacion\" id=\"redsys_clave_encriptacion\" value=\"{{config.data.redsys_clave_encriptacion}}\">
        </div>
        <div class=\"col\">
            <label for=\"redsys_tipo_cifrado\">Tipo de cifrado</label>
            <input type=\"text\" class=\"form-control\" name=\"redsys_tipo_cifrado\" id=\"redsys_tipo_cifrado\" value=\"{{config.data.redsys_tipo_cifrado}}\">
        </div>
    </div>
</div>", "admin/config/config-redsys.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-redsys.html.twig");
    }
}
