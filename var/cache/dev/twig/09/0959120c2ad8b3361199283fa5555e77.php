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

/* security/login.html.twig */
class __TwigTemplate_0df8cd395764402671e72e23d4e2cc9c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "  <main style=\"min-height: 60vh; margin-top:80px !important\">
    <div class=\"h1 font-weight-normal \">Bienvenido, por favor, identifíquese</div>
    <div class=\"\" style=\"border-bottom: 1px solid #aaa;\"></div>
    <div class=\"login-form my-5\">
      <div class=\"row justify-content-space-between mx-0 rowrow\" style=\"justify-content: space-between;\">
        <div class=\"col-auto\" style=\"width:50%\">
          ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "altaClientesWeb", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <div class=\"h2 font-weight-bold\">Clientes Registrados</div>
          ";
        }
        // line 12
        echo "          <div class=\"card\">
            <div class=\"card-body\">
              <form method=\"post\">
                ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                  <div class=\"alert alert-danger\">Usuario o clave incorrectos</div>
                ";
        }
        // line 18
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                  <div class=\"mb-3\">
                    <p>Está conectado como
                      <span class=\"font-weight-bold\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                    </p>
                    <a class=\"btn btn-dark\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                      <i class=\"mdi mdi-logout mr-2\"></i>Desconectar
                    </a>
                  </div>
                ";
        }
        // line 28
        echo "                <div class=\"input-group form-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"mdi mdi-account\"></i>
                    </span>
                  </div>
                  <input type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->placeholderLogin(), "html", null, true);
        echo "\" required autofocus>

                </div>
                <div class=\"input-group form-group mb-0\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"mdi mdi-key\"></i>
                    </span>
                  </div>
                  <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Contraseña\" required>
                </div>
                <div class=\"text-right mb-4\">
                  <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("password-reset");
        echo "\">Ha olvidado su contraseña?</a>
                </div>
                <div class=\"text-center\">
                  <button class=\"btn btn-primary px-3 pb-2 my-0\" type=\"submit\">
                    <i class=\"mdi mdi-login-variant mdi-24px mr-3\"></i>Entrar
                  </button>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_current_sess_id\" value=";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54), "html", null, true);
        echo ">
              </form>
            </div>
          </div>
        </div>
        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "altaClientesWeb", [], "any", false, false, false, 59)) {
            // line 60
            echo "          <div class=\"col-auto mt-5 mt-lg-0 px-1 \" style=\"width:50%\">
            <div class=\"h2 font-weight-bold\">Clientes Nuevos</div>
            <p class=\"lead\">Si es la primera vez que compra en nuestra tienda, regístrese.</p>
            <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-registro");
            echo "\" class=\"btn btn-dark px-3 pb-2\" type=\"button\" id=\"registrar\">
              <i class=\"mdi mdi-file-document-edit-outline mdi-24px mr-3\"></i>Registrarme ahora
            </a>
          </div>
        ";
        }
        // line 68
        echo "      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 68,  167 => 63,  162 => 60,  160 => 59,  152 => 54,  148 => 53,  138 => 46,  121 => 34,  113 => 28,  105 => 23,  100 => 21,  96 => 19,  93 => 18,  89 => 16,  87 => 15,  82 => 12,  78 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main style=\"min-height: 60vh; margin-top:80px !important\">
    <div class=\"h1 font-weight-normal \">Bienvenido, por favor, identifíquese</div>
    <div class=\"\" style=\"border-bottom: 1px solid #aaa;\"></div>
    <div class=\"login-form my-5\">
      <div class=\"row justify-content-space-between mx-0 rowrow\" style=\"justify-content: space-between;\">
        <div class=\"col-auto\" style=\"width:50%\">
          {%  if config.altaClientesWeb %}
            <div class=\"h2 font-weight-bold\">Clientes Registrados</div>
          {% endif %}
          <div class=\"card\">
            <div class=\"card-body\">
              <form method=\"post\">
                {% if error %}
                  <div class=\"alert alert-danger\">Usuario o clave incorrectos</div>
                {% endif %}
                {% if app.user %}
                  <div class=\"mb-3\">
                    <p>Está conectado como
                      <span class=\"font-weight-bold\">{{ app.user.username }}</span>
                    </p>
                    <a class=\"btn btn-dark\" href=\"{{ path('app_logout') }}\">
                      <i class=\"mdi mdi-logout mr-2\"></i>Desconectar
                    </a>
                  </div>
                {% endif %}
                <div class=\"input-group form-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"mdi mdi-account\"></i>
                    </span>
                  </div>
                  <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" placeholder=\"{{ placeholderLogin() }}\" required autofocus>

                </div>
                <div class=\"input-group form-group mb-0\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"mdi mdi-key\"></i>
                    </span>
                  </div>
                  <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Contraseña\" required>
                </div>
                <div class=\"text-right mb-4\">
                  <a href=\"{{url('password-reset')}}\">Ha olvidado su contraseña?</a>
                </div>
                <div class=\"text-center\">
                  <button class=\"btn btn-primary px-3 pb-2 my-0\" type=\"submit\">
                    <i class=\"mdi mdi-login-variant mdi-24px mr-3\"></i>Entrar
                  </button>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <input type=\"hidden\" name=\"_current_sess_id\" value={{ app.session.getId }}>
              </form>
            </div>
          </div>
        </div>
        {% if config.altaClientesWeb %}
          <div class=\"col-auto mt-5 mt-lg-0 px-1 \" style=\"width:50%\">
            <div class=\"h2 font-weight-bold\">Clientes Nuevos</div>
            <p class=\"lead\">Si es la primera vez que compra en nuestra tienda, regístrese.</p>
            <a href=\"{{ url('cliente-registro') }}\" class=\"btn btn-dark px-3 pb-2\" type=\"button\" id=\"registrar\">
              <i class=\"mdi mdi-file-document-edit-outline mdi-24px mr-3\"></i>Registrarme ahora
            </a>
          </div>
        {% endif %}
      </div>
    </div>
  </main>
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\security\\login.html.twig");
    }
}
