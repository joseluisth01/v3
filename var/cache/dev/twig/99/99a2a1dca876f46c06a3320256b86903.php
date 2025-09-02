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

/* password_reset/nueva-clave.html.twig */
class __TwigTemplate_d21e8db68f534c112ea60324e51affa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/nueva-clave.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "password_reset/nueva-clave.html.twig"));

        $this->parent = $this->loadTemplate("password_reset/base.html.twig", "password_reset/nueva-clave.html.twig", 1);
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
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de clave de acceso</div>
        <div class=\"card\">
          <div class=\"card-body\">
            <p class=\"my-4\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
            <form id=\"form-password-change\" method=\"post\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("password-change");
        echo "\">
              <div class=\" form-group\">
                <label for=\"password\">Nueva contraseña</label>
                <div class=\"input-group\">
                  <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required autofocus>
                  <div class=\"input-group-append\">
                    <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0 btn-show-hide\" data-target=\"password\">
                      <i class=\"mdi mdi-eye-outline\"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class=\" form-group\">
                <label for=\"password2\">Repita la contraseña</label>
                <div class=\"input-group\">
                  <input type=\"password\" name=\"password2\" id=\"password2\" class=\"form-control\" required>
                  <div class=\"input-group-append\">
                    <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0 btn-show-hide\" data-target=\"password2\">
                      <i class=\"mdi mdi-eye-outline\"></i>
                    </button>
                  </div>
                </div>

              </div>
              <div class=\"text-center mt-3\">
                <button class=\"btn btn-primary px-3 my-0\" type=\"submit\">Cambiar clave de acceso</button>
              </div>
              <input type=\"hidden\" name=\"codigo\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["codigo"]) || array_key_exists("codigo", $context) ? $context["codigo"] : (function () { throw new RuntimeError('Variable "codigo" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
              <input type=\"hidden\" name=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\">
              <input type=\"hidden\" name=\"cif\" id=\"cif\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["cif"]) || array_key_exists("cif", $context) ? $context["cif"] : (function () { throw new RuntimeError('Variable "cif" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\">
              <input type=\"hidden\" name=\"token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("reset-password"), "html", null, true);
        echo "\">
              <input type=\"hidden\" name=\"_current_sess_id\" value=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "getId", [], "any", false, false, false, 44), "html", null, true);
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

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "  <script>
    \$( function() {
      \$( '.btn-show-hide' ).on( 'click', function() {
        let self = \$( this ),
          idTarget = self.data( 'target' ),
          target = \$( '#' + idTarget ),
          icon = self.children( 'i.mdi' );

        if ( target.attr( 'type' ) == 'text' ) {
          target.attr( 'type', 'password' );
          icon.removeClass( 'mdi-eye-off-outline' ).addClass( 'mdi-eye-outline' );
        } else {
          target.attr( 'type', 'text' );
          icon.removeClass( 'mdi-eye-outline' ).addClass( 'mdi-eye-off-outline' );
        } target.focus();
      } );

      \$( '#form-password-change' ).on( 'submit', function() {
        let p1 = \$( '#password' ).val(),
          p2 = \$( '#password2' ).val()
        if ( p1 !== p2 ) {
          T.modalOk( 'Las claves no coinciden;Compruebe que ha introducido las claves correctamente.', 'Cambio clave de acceso' );
          return false;
        }
        if ( p1.toUpperCase() == \$( '#cif' ).val() ) {
          T.modalOk( 'No puede utilizar su NIF como clave;Introduzca otra clave para acceder.', 'Cambio clave de acceso' );
          return false;
        }
        return true;
      } );
    } );
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "password_reset/nueva-clave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  157 => 52,  139 => 44,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  93 => 13,  89 => 12,  75 => 7,  69 => 3,  59 => 2,  36 => 1,);
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
        <div class=\"h2 text-center my-3 font-weight-bold\">Cambio de clave de acceso</div>
        <div class=\"card\">
          <div class=\"card-body\">
            <p class=\"my-4\">{{ nombre }}</p>
            <form id=\"form-password-change\" method=\"post\" action=\"{{ url('password-change') }}\">
              <div class=\" form-group\">
                <label for=\"password\">Nueva contraseña</label>
                <div class=\"input-group\">
                  <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required autofocus>
                  <div class=\"input-group-append\">
                    <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0 btn-show-hide\" data-target=\"password\">
                      <i class=\"mdi mdi-eye-outline\"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class=\" form-group\">
                <label for=\"password2\">Repita la contraseña</label>
                <div class=\"input-group\">
                  <input type=\"password\" name=\"password2\" id=\"password2\" class=\"form-control\" required>
                  <div class=\"input-group-append\">
                    <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0 btn-show-hide\" data-target=\"password2\">
                      <i class=\"mdi mdi-eye-outline\"></i>
                    </button>
                  </div>
                </div>

              </div>
              <div class=\"text-center mt-3\">
                <button class=\"btn btn-primary px-3 my-0\" type=\"submit\">Cambiar clave de acceso</button>
              </div>
              <input type=\"hidden\" name=\"codigo\" value=\"{{ codigo }}\">
              <input type=\"hidden\" name=\"email\" value=\"{{ email }}\">
              <input type=\"hidden\" name=\"cif\" id=\"cif\" value=\"{{ cif }}\">
              <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('reset-password') }}\">
              <input type=\"hidden\" name=\"_current_sess_id\" value={{ app.session.getId }}>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
{% block javascripts %}
  <script>
    \$( function() {
      \$( '.btn-show-hide' ).on( 'click', function() {
        let self = \$( this ),
          idTarget = self.data( 'target' ),
          target = \$( '#' + idTarget ),
          icon = self.children( 'i.mdi' );

        if ( target.attr( 'type' ) == 'text' ) {
          target.attr( 'type', 'password' );
          icon.removeClass( 'mdi-eye-off-outline' ).addClass( 'mdi-eye-outline' );
        } else {
          target.attr( 'type', 'text' );
          icon.removeClass( 'mdi-eye-outline' ).addClass( 'mdi-eye-off-outline' );
        } target.focus();
      } );

      \$( '#form-password-change' ).on( 'submit', function() {
        let p1 = \$( '#password' ).val(),
          p2 = \$( '#password2' ).val()
        if ( p1 !== p2 ) {
          T.modalOk( 'Las claves no coinciden;Compruebe que ha introducido las claves correctamente.', 'Cambio clave de acceso' );
          return false;
        }
        if ( p1.toUpperCase() == \$( '#cif' ).val() ) {
          T.modalOk( 'No puede utilizar su NIF como clave;Introduzca otra clave para acceder.', 'Cambio clave de acceso' );
          return false;
        }
        return true;
      } );
    } );
  </script>
{% endblock %}
", "password_reset/nueva-clave.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\password_reset\\nueva-clave.html.twig");
    }
}
