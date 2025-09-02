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

/* cobros/cobro-error.html.twig */
class __TwigTemplate_5731218340bc14ae0c7ee0ab20bf76f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobros/cobro-error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobros/cobro-error.html.twig"));

        // line 1
        echo "<div class=\"modal-header\">
    <h4 class=\"modal-title\" id=\"redsys-title\"><i class=\"mdi mdi-credit-card-outline mr-2\"></i>Pago con tarjeta de crédito</h4>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
<div class=\"modal-body px-4\">
    <h4 class=\"text-danger\">ERROR: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["msgError"]) || array_key_exists("msgError", $context) ? $context["msgError"] : (function () { throw new RuntimeError('Variable "msgError" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h4>
    <h6 class=\"p-3\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h6>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cobros/cobro-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header\">
    <h4 class=\"modal-title\" id=\"redsys-title\"><i class=\"mdi mdi-credit-card-outline mr-2\"></i>Pago con tarjeta de crédito</h4>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
<div class=\"modal-body px-4\">
    <h4 class=\"text-danger\">ERROR: {{ msgError }}</h4>
    <h6 class=\"p-3\">{{ documento  }}</h6>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
</div>
", "cobros/cobro-error.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\cobros\\cobro-error.html.twig");
    }
}
