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

/* documentos/documentos-llamadas.html.twig */
class __TwigTemplate_b2a02f6be09d7e937a92f215356e69e1 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-llamadas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-llamadas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentos/documentos-llamadas.html.twig", 1);
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
        echo "<main class=\"container-fluid\">
    <h1 class=\"font-weight-normal\"><i class=\"mdi mdi-file-phone-outline mr-3\"></i>Llamadas factura ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 4, $this->source); })()), "serie", [], "any", false, false, false, 4), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 4, $this->source); })()), "numero", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <div class=\"row justify-content-around my-2 text-nowrap mx-0\">
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos-print-llamadas", ["factura" => twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "contrato" => (isset($context["actual"]) || array_key_exists("actual", $context) ? $context["actual"] : (function () { throw new RuntimeError('Variable "actual" does not exist.', 7, $this->source); })()), "facturables" => (isset($context["facturables"]) || array_key_exists("facturables", $context) ? $context["facturables"] : (function () { throw new RuntimeError('Variable "facturables" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary px-3\">
                <i class=\"mdi mdi-file-pdf-outline mr-3\"></i>Descargar PDF
            </a>
        </div>
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos-view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary px-3\">
                <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around\" style=\"font-size: 1.1rem;\">
        <div class=\"col-auto row\">
            <label class=\"col-auto col-form-label\" for=\"contrato\">Contrato</label>
            <div class=\"col-auto\">
                <select name=\"contrato\" id=\"contrato\" class=\"form-control\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratos"]) || array_key_exists("contratos", $context) ? $context["contratos"] : (function () { throw new RuntimeError('Variable "contratos" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["con"]) {
            // line 23
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["con"], "id", [], "any", false, false, false, 23) == (isset($context["actual"]) || array_key_exists("actual", $context) ? $context["actual"] : (function () { throw new RuntimeError('Variable "actual" does not exist.', 23, $this->source); })()))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "telefono", [], "any", false, false, false, 23), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "concepto", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['con'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </select>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"custom-control custom-switch mt-2\">
                <input type=\"checkbox\" class=\"custom-control-input\" name=\"facturables\" id=\"facturables\" ";
        // line 30
        echo ((((isset($context["facturables"]) || array_key_exists("facturables", $context) ? $context["facturables"] : (function () { throw new RuntimeError('Variable "facturables" does not exist.', 30, $this->source); })()) != 0)) ? (" checked") : (""));
        echo ">
                <label class=\"custom-control-label\" for=\"facturables\">Sólo llamadas facturables</label>
            </div>
        </div>
    </div>
    <div class=\"document-view my-2 p-3\">
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                <div class=\"font-weight-bolder\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 38, $this->source); })()), "cli_nombre", [], "any", false, false, false, 38), "html", null, true);
        echo "</div>
                <div>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 39, $this->source); })()), "cli_direccion", [], "any", false, false, false, 39), "html", null, true);
        echo "</div>
                <div>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 40, $this->source); })()), "cli_localidad", [], "any", false, false, false, 40), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 40, $this->source); })()), "cli_cpostal", [], "any", false, false, false, 40), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 40, $this->source); })()), "cli_provincia", [], "any", false, false, false, 40), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 42
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 42, $this->source); })()), "cli_fin_nombre", [], "any", false, false, false, 42))) {
            // line 43
            echo "            <div class=\"col-md-6\">
                <div class=\"font-weight-bolder\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 44, $this->source); })()), "cli_fin_nombre", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                <div>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 45, $this->source); })()), "cli_fin_direccion", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
                <div>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 46, $this->source); })()), "cli_fin_localidad", [], "any", false, false, false, 46), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 46, $this->source); })()), "cli_fin_cpostal", [], "any", false, false, false, 46), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 46, $this->source); })()), "cli_fin_provincia", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        // line 49
        echo "        </div>
        <div class=\"row cabecera mb-3 text-nowrap\">
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b>Fecha:</b> ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 52, $this->source); })()), "fecha", [], "any", false, false, false, 52), "d-m-Y"), "html", null, true);
        echo "
            </div>
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 55, $this->source); })()), "nombreDoc", [], "any", false, false, false, 55), "html", null, true);
        echo " Nº.:</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 55, $this->source); })()), "serie", [], "any", false, false, false, 55), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 55, $this->source); })()), "numero", [], "any", false, false, false, 55), "html", null, true);
        echo "
            </div>
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b class=\"d-none d-md-inline\">Forma de pago:</b>
                <b class=\"d-md-nonr\">F. Pago:</b>
                ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 60, $this->source); })()), "fpago", [], "any", false, false, false, 60), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
            <div class=\"col-3 col-md-2 col-lg-1 pr-0\">Fecha</div>
            <div class=\"col-2 d-none d-md-table-cell px-0\">Hora</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">Origen</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">Destino</div>
            <div class=\"col col-md-2 col-lg-1 text-right\">Duración</div>
            <div class=\"col d-none d-lg-table-cell\">Tipo</div>
            <div class=\"col-2 d-none d-lg-table-cell text-right\">Establecimiento</div>
            <div class=\"col col-lg-1 d-none d-md-table-cell text-right\">Importe</div>
        </div>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["llamadas"]) || array_key_exists("llamadas", $context) ? $context["llamadas"] : (function () { throw new RuntimeError('Variable "llamadas" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lin"]) {
            // line 74
            echo "        <div class=\"row pt-1\">
            <div class=\"col-3 col-md-2 col-lg-1 pr-0\">
                <div>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "fecha", [], "any", false, false, false, 76), "html", null, true);
            echo "</div>
                <div class=\"d-md-none\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "hora", [], "any", false, false, false, 77), "html", null, true);
            echo "</div>
            </div>
            <div class=\"col-2 d-none d-md-table-cell px-0\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "hora", [], "any", false, false, false, 79), "html", null, true);
            echo "</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "origen", [], "any", false, false, false, 80), "html", null, true);
            echo "</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "destino", [], "any", false, false, false, 81), "html", null, true);
            echo "</div>
            <div class=\"col col-md-2 col-lg-1 text-right\">
                <div>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "duracion", [], "any", false, false, false, 83), "html", null, true);
            echo "</div>
                <div class=\"d-md-none\">";
            // line 84
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 84));
            echo "</div>
            </div>
            <div class=\"col d-none d-lg-table-cell\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "tipo", [], "any", false, false, false, 86), "html", null, true);
            echo "</div>
            <div class=\"col-2 d-none d-lg-table-cell text-right\">";
            // line 87
            echo (((twig_get_attribute($this->env, $this->source, $context["lin"], "establecimiento", [], "any", false, false, false, 87) == 0)) ? ("") : ($this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "establecimiento", [], "any", false, false, false, 87))));
            echo "</div>
            <div class=\"col col-lg-1 d-none d-md-table-cell text-right\">";
            // line 88
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 88));
            echo "</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "<input type=\"hidden\" id=\"factura\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
<script>
    \$(function () {
        function reload() {
            let factura = \$('#factura').toInt(),
                contrato = \$('#contrato').toInt(),
                facturables = \$('#facturables').prop('checked') ? 1 : 0;
            window.location = T.path('documentos/llamadas', factura, contrato, facturables);
        }
        \$('#contrato, #facturables').on('change', reload);
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentos/documentos-llamadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 95,  285 => 94,  273 => 91,  264 => 88,  260 => 87,  256 => 86,  251 => 84,  247 => 83,  242 => 81,  238 => 80,  234 => 79,  229 => 77,  225 => 76,  221 => 74,  217 => 73,  201 => 60,  189 => 55,  183 => 52,  178 => 49,  168 => 46,  164 => 45,  160 => 44,  157 => 43,  155 => 42,  146 => 40,  142 => 39,  138 => 38,  127 => 30,  120 => 25,  105 => 23,  101 => 22,  88 => 12,  80 => 7,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main class=\"container-fluid\">
    <h1 class=\"font-weight-normal\"><i class=\"mdi mdi-file-phone-outline mr-3\"></i>Llamadas factura {{ cab.serie }}-{{ cab.numero }}</h1>
    <div class=\"row justify-content-around my-2 text-nowrap mx-0\">
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
            <a href=\"{{ url('documentos-print-llamadas', {factura: cab.id, contrato:actual, facturables: facturables}) }}\" class=\"btn btn-block btn-primary px-3\">
                <i class=\"mdi mdi-file-pdf-outline mr-3\"></i>Descargar PDF
            </a>
        </div>
        <div class=\"col-12 col-md-auto mb-2 mb-md-0\">
            <a href=\"{{ url('documentos-view', {id: cab.id}) }}\" class=\"btn btn-block btn-primary px-3\">
                <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around\" style=\"font-size: 1.1rem;\">
        <div class=\"col-auto row\">
            <label class=\"col-auto col-form-label\" for=\"contrato\">Contrato</label>
            <div class=\"col-auto\">
                <select name=\"contrato\" id=\"contrato\" class=\"form-control\">
                    {% for con in contratos %}
                    <option value=\"{{ con.id }}\" {{ con.id==actual ? ' selected' : '' }}>{{ con.telefono }} - {{con.concepto}}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"custom-control custom-switch mt-2\">
                <input type=\"checkbox\" class=\"custom-control-input\" name=\"facturables\" id=\"facturables\" {{ facturables !=0 ? ' checked' : '' }}>
                <label class=\"custom-control-label\" for=\"facturables\">Sólo llamadas facturables</label>
            </div>
        </div>
    </div>
    <div class=\"document-view my-2 p-3\">
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                <div class=\"font-weight-bolder\">{{ cab.cli_nombre }}</div>
                <div>{{ cab.cli_direccion }}</div>
                <div>{{ cab.cli_localidad }} - {{ cab.cli_cpostal }} - {{ cab.cli_provincia }}</div>
            </div>
            {% if cab.cli_fin_nombre is not empty %}
            <div class=\"col-md-6\">
                <div class=\"font-weight-bolder\">{{ cab.cli_fin_nombre }}</div>
                <div>{{ cab.cli_fin_direccion }}</div>
                <div>{{ cab.cli_fin_localidad }} - {{ cab.cli_fin_cpostal }} - {{ cab.cli_fin_provincia }}</div>
            </div>
            {% endif %}
        </div>
        <div class=\"row cabecera mb-3 text-nowrap\">
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b>Fecha:</b> {{ cab.fecha|date('d-m-Y') }}
            </div>
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b>{{ cab.nombreDoc}} Nº.:</b> {{ cab.serie }}-{{ cab.numero }}
            </div>
            <div class=\"col-12 col-md mt-1 mt-md-0\">
                <b class=\"d-none d-md-inline\">Forma de pago:</b>
                <b class=\"d-md-nonr\">F. Pago:</b>
                {{ cab.fpago }}
            </div>
        </div>
        <div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
            <div class=\"col-3 col-md-2 col-lg-1 pr-0\">Fecha</div>
            <div class=\"col-2 d-none d-md-table-cell px-0\">Hora</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">Origen</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">Destino</div>
            <div class=\"col col-md-2 col-lg-1 text-right\">Duración</div>
            <div class=\"col d-none d-lg-table-cell\">Tipo</div>
            <div class=\"col-2 d-none d-lg-table-cell text-right\">Establecimiento</div>
            <div class=\"col col-lg-1 d-none d-md-table-cell text-right\">Importe</div>
        </div>
        {% for lin in llamadas %}
        <div class=\"row pt-1\">
            <div class=\"col-3 col-md-2 col-lg-1 pr-0\">
                <div>{{ lin.fecha }}</div>
                <div class=\"d-md-none\">{{ lin.hora }}</div>
            </div>
            <div class=\"col-2 d-none d-md-table-cell px-0\">{{ lin.hora }}</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">{{ lin.origen }}</div>
            <div class=\"col-3 col-sm-2 col-lg-1 px-0\">{{ lin.destino }}</div>
            <div class=\"col col-md-2 col-lg-1 text-right\">
                <div>{{ lin.duracion }}</div>
                <div class=\"d-md-none\">{{ lin.importe | price }}</div>
            </div>
            <div class=\"col d-none d-lg-table-cell\">{{ lin.tipo }}</div>
            <div class=\"col-2 d-none d-lg-table-cell text-right\">{{ lin.establecimiento == 0 ? '' : lin.establecimiento|price }}</div>
            <div class=\"col col-lg-1 d-none d-md-table-cell text-right\">{{ lin.importe|price }}</div>
        </div>
        {% endfor %}
    </div>
</main>
{% endblock %}
{% block javascripts %}
<input type=\"hidden\" id=\"factura\" value=\"{{ cab.id }}\">
<script>
    \$(function () {
        function reload() {
            let factura = \$('#factura').toInt(),
                contrato = \$('#contrato').toInt(),
                facturables = \$('#facturables').prop('checked') ? 1 : 0;
            window.location = T.path('documentos/llamadas', factura, contrato, facturables);
        }
        \$('#contrato, #facturables').on('change', reload);
    });
</script>
{% endblock %}", "documentos/documentos-llamadas.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\documentos\\documentos-llamadas.html.twig");
    }
}
