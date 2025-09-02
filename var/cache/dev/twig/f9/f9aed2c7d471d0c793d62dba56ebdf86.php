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

/* password_reset/email-enviado.html.twig */
class __TwigTemplate_26ac12cecd04c54e240b4bc4d585bf26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "password_reset/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/email-enviado.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/email-enviado.html.twig"));

        $this->parent = $this->loadTemplate("password_reset/base.html.twig", "password_reset/email-enviado.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"login-form my-5\">
    <div class=\"row justify-content-center\">
      <div class=\"col-auto ml-5\">
        <div class=\"text-center\">
          <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "logo", [], "any", false, false, false, 7)), "html", null, true);
        echo "\" width=\"250\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "nombreWeb", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "nombreWeb", [], "any", false, false, false, 7), "html", null, true);
        echo "\"></a>
        </div>
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de contraseña</div>
        <div class=\"card\">
          <div class=\"card-body text-center\">
            <p>Le hemos enviado un email con instrucciones para restablecer su contraseña</p>
            <p>Si no aparece en unos minutos, revise su carpeta de correo no deseado</p>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        echo "\" class=\"mt-3 btn btn-primary px-3 my-0\">Volver a la página de acceso</a>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "password_reset/email-enviado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'password_reset/base.html.twig' %}
{% block body %}
  <div class=\"login-form my-5\">
    <div class=\"row justify-content-center\">
      <div class=\"col-auto ml-5\">
        <div class=\"text-center\">
          <a href=\"{{url('home')}}\"><img src=\"{{ asset(config.logo) }}\" width=\"250\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\"></a>
        </div>
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de contraseña</div>
        <div class=\"card\">
          <div class=\"card-body text-center\">
            <p>Le hemos enviado un email con instrucciones para restablecer su contraseña</p>
            <p>Si no aparece en unos minutos, revise su carpeta de correo no deseado</p>
            <a href=\"{{ url('app_login') }}\" class=\"mt-3 btn btn-primary px-3 my-0\">Volver a la página de acceso</a>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "password_reset/email-enviado.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\password_reset\\email-enviado.html.twig");
    }
}
