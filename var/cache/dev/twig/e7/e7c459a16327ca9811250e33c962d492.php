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

/* documentos/documentos-view-rec.html.twig */
class __TwigTemplate_ecec4e712ce5386306b8e02f843f0c0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view-rec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view-rec.html.twig"));

        // line 1
        echo "<div class=\"row mb-3\">
    <div class=\"col-md-6\">
        <div class=\"font-weight-bolder\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 3, $this->source); })()), "cli_nombre", [], "any", false, false, false, 3), "html", null, true);
        echo "</div>
        <div>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 4, $this->source); })()), "cli_direccion", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
        <div>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 5, $this->source); })()), "cli_localidad", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 5, $this->source); })()), "cli_cpostal", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 5, $this->source); })()), "cli_provincia", [], "any", false, false, false, 5), "html", null, true);
        echo "</div>
    </div>
    ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 7, $this->source); })()), "cli_fin_nombre", [], "any", false, false, false, 7))) {
            // line 8
            echo "    <div class=\"col-md-6\">
        <div class=\"font-weight-bolder\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 9, $this->source); })()), "cli_fin_nombre", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
        <div>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 10, $this->source); })()), "cli_fin_direccion", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
        <div>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 11, $this->source); })()), "cli_fin_localidad", [], "any", false, false, false, 11), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 11, $this->source); })()), "cli_fin_cpostal", [], "any", false, false, false, 11), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 11, $this->source); })()), "cli_fin_provincia", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        // line 14
        echo "</div>
<div class=\"row cabecera mb-3\">
    <div class=\"col-auto\">
        <b>Fecha:</b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 17, $this->source); })()), "fecha", [], "any", false, false, false, 17), "d-m-Y"), "html", null, true);
        echo "
    </div>
    <div class=\"col-auto\">
        <b>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "nombreDoc", [], "any", false, false, false, 20), "html", null, true);
        echo " número:</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "serie", [], "any", false, false, false, 20), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "numero", [], "any", false, false, false, 20), "html", null, true);
        echo "
    </div>
    <div class=\"col-auto\">
        <b>Forma de pago:</b> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 23, $this->source); })()), "fpago", [], "any", false, false, false, 23), "html", null, true);
        echo "
    </div>
</div>
<table class=\"table table-bordered table-striped nowrap\">
    <thead class=\"border-bottom\">
        <th>Fecha</th>
        <th>Fecha Pago</th>
        <th class=\"text-right\">Importe</th>
        <th></th>
    </thead>
    <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vencimientos"]) || array_key_exists("vencimientos", $context) ? $context["vencimientos"] : (function () { throw new RuntimeError('Variable "vencimientos" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vto"]) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vto"], "fecha", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vto"], "fechacobro", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vto"], "importe", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
            <td class=\"text-center\">
                ";
            // line 40
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["vto"], "fechacobro", [], "any", false, false, false, 40))) {
                // line 41
                echo "                <button type=\"button\" class=\"btn btn-primary btn-pago\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vto"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\">
                    <i class=\"mdi mdi-credit-card-outline mr-3\"></i>Pagar
                </button>
                ";
            }
            // line 45
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </tbody>
</table>
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "<script>
    \$('button.btn-pago').on('click', function () {
        let id = \$(this).data('id');
        T.modal({ url: T.path('vencimiento/cobro', id), id: 'cobro-modal' });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentos/documentos-view-rec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 51,  165 => 50,  161 => 48,  153 => 45,  145 => 41,  143 => 40,  138 => 38,  134 => 37,  130 => 36,  127 => 35,  123 => 34,  109 => 23,  99 => 20,  93 => 17,  88 => 14,  78 => 11,  74 => 10,  70 => 9,  67 => 8,  65 => 7,  56 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mb-3\">
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
<div class=\"row cabecera mb-3\">
    <div class=\"col-auto\">
        <b>Fecha:</b> {{ cab.fecha|date('d-m-Y') }}
    </div>
    <div class=\"col-auto\">
        <b>{{ cab.nombreDoc}} número:</b> {{ cab.serie }}-{{ cab.numero }}
    </div>
    <div class=\"col-auto\">
        <b>Forma de pago:</b> {{ cab.fpago }}
    </div>
</div>
<table class=\"table table-bordered table-striped nowrap\">
    <thead class=\"border-bottom\">
        <th>Fecha</th>
        <th>Fecha Pago</th>
        <th class=\"text-right\">Importe</th>
        <th></th>
    </thead>
    <tbody>
        {% for vto in vencimientos %}
        <tr>
            <td>{{ vto.fecha }}</td>
            <td>{{ vto.fechacobro }}</td>
            <td class=\"text-right\">{{ vto.importe}}</td>
            <td class=\"text-center\">
                {% if vto.fechacobro is empty %}
                <button type=\"button\" class=\"btn btn-primary btn-pago\" data-id=\"{{ vto.id }}\">
                    <i class=\"mdi mdi-credit-card-outline mr-3\"></i>Pagar
                </button>
                {% endif %}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
{% block javascripts %}
<script>
    \$('button.btn-pago').on('click', function () {
        let id = \$(this).data('id');
        T.modal({ url: T.path('vencimiento/cobro', id), id: 'cobro-modal' });
    });
</script>
{% endblock %}", "documentos/documentos-view-rec.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\documentos\\documentos-view-rec.html.twig");
    }
}
