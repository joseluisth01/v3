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

/* admin/config/config-email.html.twig */
class __TwigTemplate_810b25a8694329f8375ccaf36c99f7de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-email.html.twig"));

        // line 1
        echo "<style>
  h4{
    text-align:center;
    margin-top:20px;
    margin-bottom:20px;
    text-transform:uppercase;
  }
</style>
<h4>Configuración servidor SMTP</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_host\">Dirección del servidor</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_host\" id=\"smtp_host\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "data", [], "any", false, false, false, 13), "smtp_host", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_port\">Puerto</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_port\" id=\"smtp_port\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "data", [], "any", false, false, false, 19), "smtp_port", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
    </div>
    <div class=\"col\">
        <label>&nbsp;</label>
        <div class=\"custom-control custom-switch mt-1\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"smtp_ssl\" id=\"smtp_ssl\" ";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "data", [], "any", false, false, false, 24), "smtp_ssl", [], "any", false, false, false, 24)) ? ("checked") : (""));
        echo ">
            <label class=\"custom-control-label\" for=\"smtp_ssl\">SSL</label>
        </div>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_mail\">Email remitente</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_mail\" id=\"smtp_mail\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32), "smtp_mail", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
    </div>
    <div class=\"col\">
        <label for=\"smtp_name\">Nombre remitente</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_name\" id=\"smtp_name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "data", [], "any", false, false, false, 36), "smtp_name", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"smtp_auth\" id=\"smtp_auth\" ";
        // line 42
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "data", [], "any", false, false, false, 42), "smtp_auth", [], "any", false, false, false, 42)) ? ("checked") : (""));
        echo ">
            <label class=\"custom-control-label\" for=\"smtp_auth\">Autenticación</label>
        </div>
    </div>
</div>
<div id=\"email-autenticacion\">
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"smtp_user\">Usuario</label>
            <input type=\"text\" class=\"form-control\" name=\"smtp_user\" id=\"smtp_user\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "data", [], "any", false, false, false, 51), "smtp_user", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <label for=\"smtp_pwd\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" name=\"smtp_pwd\" id=\"smtp_pwd\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })()), "data", [], "any", false, false, false, 55), "smtp_pwd", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  113 => 51,  101 => 42,  92 => 36,  85 => 32,  74 => 24,  66 => 19,  57 => 13,  43 => 1,);
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
<h4>Configuración servidor SMTP</h4>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_host\">Dirección del servidor</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_host\" id=\"smtp_host\" value=\"{{config.data.smtp_host}}\">
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_port\">Puerto</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_port\" id=\"smtp_port\" value=\"{{config.data.smtp_port}}\">
    </div>
    <div class=\"col\">
        <label>&nbsp;</label>
        <div class=\"custom-control custom-switch mt-1\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"smtp_ssl\" id=\"smtp_ssl\" {{ config.data.smtp_ssl ? 'checked' : '' }}>
            <label class=\"custom-control-label\" for=\"smtp_ssl\">SSL</label>
        </div>
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <label for=\"smtp_mail\">Email remitente</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_mail\" id=\"smtp_mail\" value=\"{{config.data.smtp_mail}}\">
    </div>
    <div class=\"col\">
        <label for=\"smtp_name\">Nombre remitente</label>
        <input type=\"text\" class=\"form-control\" name=\"smtp_name\" id=\"smtp_name\" value=\"{{config.data.smtp_name}}\">
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col\">
        <div class=\"custom-control custom-switch\">
            <input type=\"checkbox\" class=\"custom-control-input\" name=\"smtp_auth\" id=\"smtp_auth\" {{ config.data.smtp_auth ? 'checked' : '' }}>
            <label class=\"custom-control-label\" for=\"smtp_auth\">Autenticación</label>
        </div>
    </div>
</div>
<div id=\"email-autenticacion\">
    <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"smtp_user\">Usuario</label>
            <input type=\"text\" class=\"form-control\" name=\"smtp_user\" id=\"smtp_user\" value=\"{{config.data.smtp_user}}\">
        </div>
        <div class=\"col\">
            <label for=\"smtp_pwd\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" name=\"smtp_pwd\" id=\"smtp_pwd\" value=\"{{config.data.smtp_pwd}}\">
        </div>
    </div>
</div>", "admin/config/config-email.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-email.html.twig");
    }
}
