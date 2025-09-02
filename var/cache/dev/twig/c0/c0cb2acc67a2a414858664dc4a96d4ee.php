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

/* gestion/cliente-edicion.html.twig */
class __TwigTemplate_237bd694118fa3ac79b6edf67a11f501 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/cliente-edicion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/cliente-edicion.html.twig"));

        // line 1
        echo "<div class=\"modal-header py-2\">
    <h4 class=\"modal-title\" id=\"cli-edit-title\"><i class=\"mdi mdi-account-edit mr-2\"></i>Cliente ";
        // line 2
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 2, $this->source); })()), "codigo", [], "any", false, false, false, 2) == 0)) ? ("Nuevo") : (""));
        echo "</h4>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
<div class=\"modal-body\">
    <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-save");
        echo "\" method=\"POST\" id=\"cli-edit-form\">
        <div class=\"row\">
            ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 8, $this->source); })()), "codigo", [], "any", false, false, false, 8))) {
            // line 9
            echo "            <div class=\"col-3\">
                <label for=\"cli-edit-codigo\">Código</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"codigo\" id=\"cli-edit-codigo\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 11, $this->source); })()), "codigo", [], "any", false, false, false, 11), "html", null, true);
            echo "\" readonly>
            </div>
            <div class=\"col-1 d-none d-md-block\"></div>
            ";
        }
        // line 15
        echo "            <div class=\"col-6 col-md-4\">
                <label for=\"cli-edit-tipofiscal\">Tipo persona</label>
                <select class=\"form-control form-control-sm\" name=\"tipofiscal\" id=\"cli-edit-tipofiscal\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 17, $this->source); })()), "tipofiscal", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                    <option value=\"F\">Física</option>
                    <option value=\"J\">Jurídica</option>
                </select>
            </div>
            <div class=\"col-1 d-none d-md-block\"></div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-cif\">CIF</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"cif\" id=\"cli-edit-cif\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 25, $this->source); })()), "cif", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"nombre\" id=\"cli-edit-nombre\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-md-6\">
                <label for=\"cli-edit-apellido1\">Apellidos</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"apellido1\" id=\"cli-edit-apellido1\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 37, $this->source); })()), "apellido1", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-12 col-md-6\">
                <label class=\"d-none d-md-block\" for=\"cli-edit-apellido2\">&nbsp;</label>
                <input type=\"text\" class=\"form-control form-control-sm mt-2 mt-md-0\" name=\"apellido2\" id=\"cli-edit-apellido2\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 41, $this->source); })()), "apellido2", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"direccion\" id=\"cli-edit-direccion\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 47, $this->source); })()), "direccion", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"localidad\" id=\"cli-edit-localidad\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 53, $this->source); })()), "localidad", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4 col-md-3\">
                <label for=\"cli-edit-cpostal\">C.Postal</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"cpostal\" id=\"cli-edit-cpostal\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 59, $this->source); })()), "cpostal", [], "any", false, false, false, 59), "html", null, true);
        echo "\" @blur=\"cPostalBlur\">
            </div>
            <div class=\"col-8 col-md-9\">
                <label for=\"cli-edit-provincia\">Provincia</label>
                <select class=\"form-control form-control-sm\" name=\"provincia\" id=\"cli-edit-provincia\">
                    <option value=\"0\"></option>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) || array_key_exists("provincias", $context) ? $context["provincias"] : (function () { throw new RuntimeError('Variable "provincias" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 66
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "codigo", [], "any", false, false, false, 66), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 66, $this->source); })()), "provincia", [], "any", false, false, false, 66) == twig_get_attribute($this->env, $this->source, $context["pro"], "codigo", [], "any", false, false, false, 66))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre", [], "any", false, false, false, 66), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono1\">Teléfono 1</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono1\" id=\"cli-edit-telefono1\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 74, $this->source); })()), "telefono1", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono2\">Teléfono 2</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono2\" id=\"cli-edit-telefono2\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 78, $this->source); })()), "telefono2", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono3\">Móvil</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono3\" id=\"cli-edit-telefono3\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 82, $this->source); })()), "telefono3", [], "any", false, false, false, 82), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono4\">Fax</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono4\" id=\"cli-edit-telefono4\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 86, $this->source); })()), "telefono4", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-email\">Email</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"email\" id=\"cli-edit-email\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 92, $this->source); })()), "email", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-tipo\">Tipo</label>
                <select class=\"form-control form-control-sm\" name=\"tipo\" id=\"cli-edit-tipo\">
                    <option value=\"0\"></option>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposCli"]) || array_key_exists("tiposCli", $context) ? $context["tiposCli"] : (function () { throw new RuntimeError('Variable "tiposCli" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 101
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo"], "codigo", [], "any", false, false, false, 101), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 101, $this->source); })()), "tipo", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, $context["tipo"], "codigo", [], "any", false, false, false, 101))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo"], "nombre", [], "any", false, false, false, 101), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-fpago\">Forma de Pago</label>
                <select class=\"form-control form-control-sm\" name=\"fpago\" id=\"cli-edit-fpago\">
                <option value=\"0\"></option>
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formasPago"]) || array_key_exists("formasPago", $context) ? $context["formasPago"] : (function () { throw new RuntimeError('Variable "formasPago" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fpago"]) {
            // line 112
            echo "                <option value=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fpago"], "codigo", [], "any", false, false, false, 112), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 112, $this->source); })()), "fpago", [], "any", false, false, false, 112) == twig_get_attribute($this->env, $this->source, $context["fpago"], "codigo", [], "any", false, false, false, 112))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fpago"], "nombre", [], "any", false, false, false, 112), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fpago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-tarifabase\">Tarifa</label>
                <select class=\"form-control form-control-sm\" name=\"tarifabase\" id=\"cli-edit-tarifabase\">
                    <option value=\"0\"></option>
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifas"]) || array_key_exists("tarifas", $context) ? $context["tarifas"] : (function () { throw new RuntimeError('Variable "tarifas" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
            // line 123
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tar"], "codigo", [], "any", false, false, false, 123), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 123, $this->source); })()), "tarifabase", [], "any", false, false, false, 123) == twig_get_attribute($this->env, $this->source, $context["tar"], "codigo", [], "any", false, false, false, 123))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tar"], "nombre", [], "any", false, false, false, 123), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-observaciones\">Observaciones</label>
                <textarea name=\"observaciones\" id=\"cli-edit-observaciones\" rows=\"3\" class=\"form-control form-control-sm\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 131, $this->source); })()), "observaciones", [], "any", false, false, false, 131), "html", null, true);
        echo "</textarea>
            </div>
        </div>
    </form>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-success\" id=\"btn-cli-edit-ok\"><span class=\"mdi mdi-check mr-2\"></span>Grabar</button>
    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cancelar</button>
</div>
<script>
    \$(CLI.setup);  // Inicializamos la ventana de edición de clientes
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestion/cliente-edicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 131,  292 => 125,  277 => 123,  273 => 122,  263 => 114,  248 => 112,  244 => 111,  234 => 103,  219 => 101,  215 => 100,  204 => 92,  195 => 86,  188 => 82,  181 => 78,  174 => 74,  166 => 68,  151 => 66,  147 => 65,  138 => 59,  129 => 53,  120 => 47,  111 => 41,  104 => 37,  95 => 31,  86 => 25,  75 => 17,  71 => 15,  64 => 11,  60 => 9,  58 => 8,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header py-2\">
    <h4 class=\"modal-title\" id=\"cli-edit-title\"><i class=\"mdi mdi-account-edit mr-2\"></i>Cliente {{cli.codigo == 0 ? 'Nuevo' : ''}}</h4>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
</div>
<div class=\"modal-body\">
    <form action=\"{{ url('cliente-save') }}\" method=\"POST\" id=\"cli-edit-form\">
        <div class=\"row\">
            {% if cli.codigo is not empty %}
            <div class=\"col-3\">
                <label for=\"cli-edit-codigo\">Código</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"codigo\" id=\"cli-edit-codigo\" value=\"{{cli.codigo}}\" readonly>
            </div>
            <div class=\"col-1 d-none d-md-block\"></div>
            {% endif %}
            <div class=\"col-6 col-md-4\">
                <label for=\"cli-edit-tipofiscal\">Tipo persona</label>
                <select class=\"form-control form-control-sm\" name=\"tipofiscal\" id=\"cli-edit-tipofiscal\" value=\"{{cli.tipofiscal}}\">
                    <option value=\"F\">Física</option>
                    <option value=\"J\">Jurídica</option>
                </select>
            </div>
            <div class=\"col-1 d-none d-md-block\"></div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-cif\">CIF</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"cif\" id=\"cli-edit-cif\" value=\"{{cli.cif}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"nombre\" id=\"cli-edit-nombre\" value=\"{{cli.nombre}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-md-6\">
                <label for=\"cli-edit-apellido1\">Apellidos</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"apellido1\" id=\"cli-edit-apellido1\" value=\"{{cli.apellido1}}\">
            </div>
            <div class=\"col-12 col-md-6\">
                <label class=\"d-none d-md-block\" for=\"cli-edit-apellido2\">&nbsp;</label>
                <input type=\"text\" class=\"form-control form-control-sm mt-2 mt-md-0\" name=\"apellido2\" id=\"cli-edit-apellido2\" value=\"{{cli.apellido2}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"direccion\" id=\"cli-edit-direccion\" value=\"{{cli.direccion}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"localidad\" id=\"cli-edit-localidad\" value=\"{{cli.localidad}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4 col-md-3\">
                <label for=\"cli-edit-cpostal\">C.Postal</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"cpostal\" id=\"cli-edit-cpostal\" value=\"{{cli.cpostal}}\" @blur=\"cPostalBlur\">
            </div>
            <div class=\"col-8 col-md-9\">
                <label for=\"cli-edit-provincia\">Provincia</label>
                <select class=\"form-control form-control-sm\" name=\"provincia\" id=\"cli-edit-provincia\">
                    <option value=\"0\"></option>
                    {% for pro in provincias %}
                    <option value=\"{{ pro.codigo }}\" {% if cli.provincia == pro.codigo %} selected {% endif %}>{{ pro.nombre }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono1\">Teléfono 1</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono1\" id=\"cli-edit-telefono1\" value=\"{{cli.telefono1}}\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono2\">Teléfono 2</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono2\" id=\"cli-edit-telefono2\" value=\"{{cli.telefono2}}\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono3\">Móvil</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono3\" id=\"cli-edit-telefono3\" value=\"{{cli.telefono3}}\">
            </div>
            <div class=\"col-6 col-md-3\">
                <label for=\"cli-edit-telefono4\">Fax</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"telefono4\" id=\"cli-edit-telefono4\" value=\"{{cli.telefono4}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-email\">Email</label>
                <input type=\"text\" class=\"form-control form-control-sm\" name=\"email\" id=\"cli-edit-email\" value=\"{{cli.email}}\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-tipo\">Tipo</label>
                <select class=\"form-control form-control-sm\" name=\"tipo\" id=\"cli-edit-tipo\">
                    <option value=\"0\"></option>
                    {% for tipo in tiposCli %}
                    <option value=\"{{ tipo.codigo }}\" {% if cli.tipo == tipo.codigo %} selected {% endif %}>{{ tipo.nombre }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-fpago\">Forma de Pago</label>
                <select class=\"form-control form-control-sm\" name=\"fpago\" id=\"cli-edit-fpago\">
                <option value=\"0\"></option>
                {% for fpago in formasPago %}
                <option value=\" {{ fpago.codigo }}\" {% if cli.fpago == fpago.codigo %} selected {% endif %}>{{ fpago.nombre }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-tarifabase\">Tarifa</label>
                <select class=\"form-control form-control-sm\" name=\"tarifabase\" id=\"cli-edit-tarifabase\">
                    <option value=\"0\"></option>
                    {% for tar in tarifas %}
                    <option value=\"{{ tar.codigo }}\" {% if cli.tarifabase == tar.codigo %} selected {% endif %}>{{ tar.nombre }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <label for=\"cli-edit-observaciones\">Observaciones</label>
                <textarea name=\"observaciones\" id=\"cli-edit-observaciones\" rows=\"3\" class=\"form-control form-control-sm\">{{cli.observaciones}}</textarea>
            </div>
        </div>
    </form>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-success\" id=\"btn-cli-edit-ok\"><span class=\"mdi mdi-check mr-2\"></span>Grabar</button>
    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cancelar</button>
</div>
<script>
    \$(CLI.setup);  // Inicializamos la ventana de edición de clientes
</script>

", "gestion/cliente-edicion.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\gestion\\cliente-edicion.html.twig");
    }
}
