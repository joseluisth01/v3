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

/* admin/config/config-redes.html.twig */
class __TwigTemplate_56f3dbab7f2012285012eeb59c281123 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-redes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-redes.html.twig"));

        // line 1
        echo "<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_facebook\">Facebook</label>
        <input type=\"text\" class=\"form-control\" name=\"red_facebook\" id=\"red_facebook\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "red_facebook", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        <small>Tu dirección del perfil de Facebook</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_youtube\">YouTube</label>
        <input type=\"text\" class=\"form-control\" name=\"red_youtube\" id=\"red_youtube\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "red_youtube", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        <small>Dirección del perfil de YouTube</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_linkedin\">Linkedin</label>
        <input type=\"text\" class=\"form-control\" name=\"red_linkedin\" id=\"red_linkedin\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "data", [], "any", false, false, false, 18), "red_linkedin", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        <small>Dirección del perfil de Linkedin</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col-6\">
        <label for=\"red_twitter\">Twitter</label>
        <input type=\"text\" class=\"form-control\" name=\"red_twitter\" id=\"red_twitter\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "data", [], "any", false, false, false, 25), "red_twitter", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
        <small>Tu usuario de Twitter</small>
    </div>
    <div class=\"col-6\">
        <label for=\"red_skype\">Skype</label>
        <input type=\"text\" class=\"form-control\" name=\"red_skype\" id=\"red_skype\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "data", [], "any", false, false, false, 30), "red_skype", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
        <small>Tu usuario de Skype</small>
    </div>
    </div>
<div class=\"form-group row\">
    <div class=\"col-6\">
        <label for=\"red_whatsapp\">WhatsApp</label>
        <input type=\"text\" class=\"form-control\" name=\"red_whatsapp\" id=\"red_whatsapp\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "data", [], "any", false, false, false, 37), "red_whatsapp", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
        <small>Número de teléfono sólo para WhatsApp</small>
    </div>
    <div class=\"col-6\">
        <label for=\"red_instagram\">Instagram</label>
        <input type=\"text\" class=\"form-control\" name=\"red_instagram\" id=\"red_instagram\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "data", [], "any", false, false, false, 42), "red_instagram", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
        <small>Tu usuario de Instagram</small>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-redes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  96 => 37,  86 => 30,  78 => 25,  68 => 18,  58 => 11,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_facebook\">Facebook</label>
        <input type=\"text\" class=\"form-control\" name=\"red_facebook\" id=\"red_facebook\" value=\"{{config.data.red_facebook}}\">
        <small>Tu dirección del perfil de Facebook</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_youtube\">YouTube</label>
        <input type=\"text\" class=\"form-control\" name=\"red_youtube\" id=\"red_youtube\" value=\"{{config.data.red_youtube}}\">
        <small>Dirección del perfil de YouTube</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"red_linkedin\">Linkedin</label>
        <input type=\"text\" class=\"form-control\" name=\"red_linkedin\" id=\"red_linkedin\" value=\"{{config.data.red_linkedin}}\">
        <small>Dirección del perfil de Linkedin</small>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col-6\">
        <label for=\"red_twitter\">Twitter</label>
        <input type=\"text\" class=\"form-control\" name=\"red_twitter\" id=\"red_twitter\" value=\"{{config.data.red_twitter}}\">
        <small>Tu usuario de Twitter</small>
    </div>
    <div class=\"col-6\">
        <label for=\"red_skype\">Skype</label>
        <input type=\"text\" class=\"form-control\" name=\"red_skype\" id=\"red_skype\" value=\"{{config.data.red_skype}}\">
        <small>Tu usuario de Skype</small>
    </div>
    </div>
<div class=\"form-group row\">
    <div class=\"col-6\">
        <label for=\"red_whatsapp\">WhatsApp</label>
        <input type=\"text\" class=\"form-control\" name=\"red_whatsapp\" id=\"red_whatsapp\" value=\"{{config.data.red_whatsapp}}\">
        <small>Número de teléfono sólo para WhatsApp</small>
    </div>
    <div class=\"col-6\">
        <label for=\"red_instagram\">Instagram</label>
        <input type=\"text\" class=\"form-control\" name=\"red_instagram\" id=\"red_instagram\" value=\"{{config.data.red_instagram}}\">
        <small>Tu usuario de Instagram</small>
    </div>
</div>", "admin/config/config-redes.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-redes.html.twig");
    }
}
