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

/* password_reset/solicitud-cambio.html.twig */
class __TwigTemplate_26f1494c4159468275afb8898da05e56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/solicitud-cambio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/solicitud-cambio.html.twig"));

        $this->parent = $this->loadTemplate("password_reset/base.html.twig", "password_reset/solicitud-cambio.html.twig", 1);
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
        echo "  ";
        if ((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div class=\"text-center alert alert-danger mt-3 mx-5\">";
            echo (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 4, $this->source); })());
            echo "</div>
  ";
        }
        // line 6
        echo "  <div class=\"login-form my-5\">
    <div class=\"row justify-content-center\">
      <div class=\"col-auto ml-5\">
        <div class=\"text-center\">
          <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "logo", [], "any", false, false, false, 10)), "html", null, true);
        echo "\" width=\"250\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "nombreWeb", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "nombreWeb", [], "any", false, false, false, 10), "html", null, true);
        echo "\"></a>
        </div>
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de contraseña</div>
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"mb-4\">Introduzca su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña.</div>
            <form method=\"post\">
              <div class=\" form-group\">
                <input type=\"email\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Correo electrónico\" required autofocus>
              </div>
              <div class=\"text-center mt-3\">
                <button class=\"btn btn-primary px-3 my-0\" type=\"submit\">Enviar enlace por correo</button>
              </div>
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reset-password"), "html", null, true);
        echo "\">
              <input type=\"hidden\" name=\"_current_sess_id\" value=";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "getId", [], "any", false, false, false, 24), "html", null, true);
        echo ">
            </form>
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
        return "password_reset/solicitud-cambio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  108 => 23,  100 => 18,  83 => 10,  77 => 6,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'password_reset/base.html.twig' %}
{% block body %}
  {% if mensaje %}
    <div class=\"text-center alert alert-danger mt-3 mx-5\">{{ mensaje | raw }}</div>
  {% endif %}
  <div class=\"login-form my-5\">
    <div class=\"row justify-content-center\">
      <div class=\"col-auto ml-5\">
        <div class=\"text-center\">
          <a href=\"{{url('home')}}\"><img src=\"{{ asset(config.logo) }}\" width=\"250\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\"></a>
        </div>
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de contraseña</div>
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"mb-4\">Introduzca su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña.</div>
            <form method=\"post\">
              <div class=\" form-group\">
                <input type=\"email\" value=\"{{ email }}\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Correo electrónico\" required autofocus>
              </div>
              <div class=\"text-center mt-3\">
                <button class=\"btn btn-primary px-3 my-0\" type=\"submit\">Enviar enlace por correo</button>
              </div>
              <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('reset-password') }}\">
              <input type=\"hidden\" name=\"_current_sess_id\" value={{ app.session.getId }}>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "password_reset/solicitud-cambio.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\password_reset\\solicitud-cambio.html.twig");
    }
}
