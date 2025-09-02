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

/* footer/footer-newsletter.html.twig */
class __TwigTemplate_9f8983ca12e5c7a569f5e9a7c4af7f92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer-newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer-newsletter.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-suscripcion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-suscripcion-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-suscripcion-title\">Suscripción</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body text-justify\">
        En aplicación de la LSSI,
        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "empresa", [], "any", false, false, false, 12), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo ", con CIF
        ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "empresa", [], "any", false, false, false, 13), "cif", [], "any", false, false, false, 13), "html", null, true);
        echo "
        no enviará comunicaciones publicitarias o promocionales por correo electrónico u otro medio de comunicación electrónica equivalente que
                previamente no hubieran sido solicitadas o expresamente autorizadas por los destinatarios de las mismas.
        <br>
        En el caso de usuarios con los que exista una relación contractual previa,
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "empresa", [], "any", false, false, false, 18), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "
        sí está autorizado al envío de comunicaciones comerciales referentes a productos o servicios de
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "empresa", [], "any", false, false, false, 20), "nombre", [], "any", false, false, false, 20), "html", null, true);
        echo "
        que sean similares a los que inicialmente fueron objeto de contratación con el cliente.
        <br>
        En todo caso, el usuario, tras acreditar su identidad, podrá solicitar que no se le haga llegar más información comercial a
                través de los canales de Atención al Cliente.
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary mr-2\" data-dismiss=\"modal\">
          <i class=\"mdi mdi-close mr-2\"></i>Rechazar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"btn-suscripcion-ok\">
          <i class=\"mdi mdi-check mr-2\"></i>Aceptar</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer/footer-newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modal-suscripcion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-suscripcion-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-suscripcion-title\">Suscripción</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body text-justify\">
        En aplicación de la LSSI,
        {{ config.empresa.nombre }}, con CIF
        {{ config.empresa.cif }}
        no enviará comunicaciones publicitarias o promocionales por correo electrónico u otro medio de comunicación electrónica equivalente que
                previamente no hubieran sido solicitadas o expresamente autorizadas por los destinatarios de las mismas.
        <br>
        En el caso de usuarios con los que exista una relación contractual previa,
        {{ config.empresa.nombre }}
        sí está autorizado al envío de comunicaciones comerciales referentes a productos o servicios de
        {{ config.empresa.nombre }}
        que sean similares a los que inicialmente fueron objeto de contratación con el cliente.
        <br>
        En todo caso, el usuario, tras acreditar su identidad, podrá solicitar que no se le haga llegar más información comercial a
                través de los canales de Atención al Cliente.
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary mr-2\" data-dismiss=\"modal\">
          <i class=\"mdi mdi-close mr-2\"></i>Rechazar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"btn-suscripcion-ok\">
          <i class=\"mdi mdi-check mr-2\"></i>Aceptar</button>
      </div>
    </div>
  </div>
</div>
", "footer/footer-newsletter.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\footer\\footer-newsletter.html.twig");
    }
}
