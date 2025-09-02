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

/* main/garantias.html.twig */
class __TwigTemplate_591137d652f782624457f7e11133a983 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/garantias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/garantias.html.twig"));

        // line 1
        echo "<div class=\"garantias-container\">
    <div class=\"garantia-item\" id=\"asesoramiento\">
        <div class=\"garantia-icon\">
             <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garantias/garantia5.gif"), "html", null, true);
        echo "\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Asesoramiento Personalizado</h3>
        <p class=\"garantia-description\">
            Recibe una atención exclusiva a tu medida. Estamos aquí para ayudarte a tomar la mejor decisión.
        </p>
    </div>
    
    <div class=\"garantia-item\" id=\"calidad-stock\">
        <div class=\"garantia-icon\">
             <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garantias/garantia4.gif"), "html", null, true);
        echo "\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Calidad y Amplio Stock</h3>
        <p class=\"garantia-description\">
            Goza de multitud de opciones donde elegir, los mejores productos al alcance a un solo click de ser tuyo.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"servicio-tecnico\">
        <div class=\"garantia-icon\">
             <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garantias/garantia3.gif"), "html", null, true);
        echo "\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Servicio Técnico a Medida</h3>
        <p class=\"garantia-description\">
            Disfruta de soluciones rápidas y profesionales para mantener tus productos en perfecto estado.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"envios-gratuitos\">
        <div class=\"garantia-icon\">
             <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garantias/garantia2.gif"), "html", null, true);
        echo "\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Envíos Gratuitos a Partir de 100€</h3>
        <p class=\"garantia-description\">
            Optimiza tu compra ahorrándote los costes de envío con un gasto total por compra de 100€ o superior.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"pagos-seguros\">
        <div class=\"garantia-icon\">
             <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garantias/garantia1.gif"), "html", null, true);
        echo "\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Pagos Online Seguros</h3>
        <p class=\"garantia-description\">
            Compra con confianza. Tus datos están protegidos por los más altos estándares de seguridad.
        </p>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/garantias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  87 => 34,  74 => 24,  61 => 14,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"garantias-container\">
    <div class=\"garantia-item\" id=\"asesoramiento\">
        <div class=\"garantia-icon\">
             <img src=\"{{ asset('images/garantias/garantia5.gif') }}\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Asesoramiento Personalizado</h3>
        <p class=\"garantia-description\">
            Recibe una atención exclusiva a tu medida. Estamos aquí para ayudarte a tomar la mejor decisión.
        </p>
    </div>
    
    <div class=\"garantia-item\" id=\"calidad-stock\">
        <div class=\"garantia-icon\">
             <img src=\"{{ asset('images/garantias/garantia4.gif') }}\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Calidad y Amplio Stock</h3>
        <p class=\"garantia-description\">
            Goza de multitud de opciones donde elegir, los mejores productos al alcance a un solo click de ser tuyo.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"servicio-tecnico\">
        <div class=\"garantia-icon\">
             <img src=\"{{ asset('images/garantias/garantia3.gif') }}\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Servicio Técnico a Medida</h3>
        <p class=\"garantia-description\">
            Disfruta de soluciones rápidas y profesionales para mantener tus productos en perfecto estado.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"envios-gratuitos\">
        <div class=\"garantia-icon\">
             <img src=\"{{ asset('images/garantias/garantia2.gif') }}\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Envíos Gratuitos a Partir de 100€</h3>
        <p class=\"garantia-description\">
            Optimiza tu compra ahorrándote los costes de envío con un gasto total por compra de 100€ o superior.
        </p>
    </div>

    <div class=\"garantia-item\" id=\"pagos-seguros\">
        <div class=\"garantia-icon\">
             <img src=\"{{ asset('images/garantias/garantia1.gif') }}\" alt=\"Asesoramiento Personalizado\">
        </div>
        <h3 class=\"garantia-title\">Pagos Online Seguros</h3>
        <p class=\"garantia-description\">
            Compra con confianza. Tus datos están protegidos por los más altos estándares de seguridad.
        </p>
    </div>
</div>
", "main/garantias.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\garantias.html.twig");
    }
}
