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

/* main/newsletter.html.twig */
class __TwigTemplate_c094c49d8ddbc0838dc81ee3653cf693 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/newsletter.html.twig"));

        // line 1
        echo "<div style=\"width:80%; margin:0 auto\">
    <div class=\"pre-footer-subscribe-box\">
        <h2 class=\"titulonewsletter\">INSCRÍBETE EN NUESTRA NEWSLETTER Y RECIBE LAS MEJORES PROMOCIONES, DESCUENTOS, OFERTAS...</h2>
        <div class=\"input-group d-flex flex-column flex-md-row\">
            <div class=\"col mb-2\">
                <input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" id=\"newsletter_nombre\">
            </div>
            <div class=\"col mb-2\">
                <input type=\"text\" placeholder=\"Email\" class=\"form-control\" id=\"newsletter_email\">
            </div>
            <div class=\"col-auto\">
                <button class=\"btn btn-primary w-100\" data-toggle=\"modal\" id=\"btn-suscripcion\" disabled>INSCRIBIRME AHORA</button>
            </div>
        </div>
        <div class=\"mt-5 text-center\">
            <input type=\"checkbox\" id=\"privacy_policy_checkbox\">
            <label class=\"privacy_policy_checkbox\" for=\"privacy_policy_checkbox\">Acepto el uso de mis datos personales explicado en la <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos-privacidad");
        echo "\">Política de Privacidad</a></label>
        </div>
    </div>
</div>

<script>
    // Seleccionar elementos
    const btnSuscripcion = document.getElementById('btn-suscripcion');
    const privacyPolicyCheckbox = document.getElementById('privacy_policy_checkbox');

    // Escuchar cambios en el checkbox
    privacyPolicyCheckbox.addEventListener('change', function() {
        btnSuscripcion.disabled = !this.checked;
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"width:80%; margin:0 auto\">
    <div class=\"pre-footer-subscribe-box\">
        <h2 class=\"titulonewsletter\">INSCRÍBETE EN NUESTRA NEWSLETTER Y RECIBE LAS MEJORES PROMOCIONES, DESCUENTOS, OFERTAS...</h2>
        <div class=\"input-group d-flex flex-column flex-md-row\">
            <div class=\"col mb-2\">
                <input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" id=\"newsletter_nombre\">
            </div>
            <div class=\"col mb-2\">
                <input type=\"text\" placeholder=\"Email\" class=\"form-control\" id=\"newsletter_email\">
            </div>
            <div class=\"col-auto\">
                <button class=\"btn btn-primary w-100\" data-toggle=\"modal\" id=\"btn-suscripcion\" disabled>INSCRIBIRME AHORA</button>
            </div>
        </div>
        <div class=\"mt-5 text-center\">
            <input type=\"checkbox\" id=\"privacy_policy_checkbox\">
            <label class=\"privacy_policy_checkbox\" for=\"privacy_policy_checkbox\">Acepto el uso de mis datos personales explicado en la <a href=\"{{ path('textos-privacidad') }}\">Política de Privacidad</a></label>
        </div>
    </div>
</div>

<script>
    // Seleccionar elementos
    const btnSuscripcion = document.getElementById('btn-suscripcion');
    const privacyPolicyCheckbox = document.getElementById('privacy_policy_checkbox');

    // Escuchar cambios en el checkbox
    privacyPolicyCheckbox.addEventListener('change', function() {
        btnSuscripcion.disabled = !this.checked;
    });
</script>
", "main/newsletter.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\newsletter.html.twig");
    }
}
