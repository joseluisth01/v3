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

/* cliente/cliente-actualizacion.html.twig */
class __TwigTemplate_4ed5e159e5a50ad4af9d441298ece1d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/cliente-actualizacion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/cliente-actualizacion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/cliente-actualizacion.html.twig", 1);
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
        echo "<h1 class=\"font-weight-normal container py-1 text-center\">
    <i class=\"mdi mdi-card-account-details-outline mr-3\"></i>
    Datos de cliente
</h1>
";
        // line 7
        if ( !twig_test_empty((isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "<div class=\"alert alert-success text-center mb-0\" role=\"alert\">
    <h1>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "</h1>
</div>
";
        }
        // line 12
        echo "<main class=\"container-fluid bg-white py-2\">
    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-actualizar");
        echo "\" method=\"POST\" class=\"row justify-content-center mb-3\" id=\"form-edit-cli\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("client-update"), "html", null, true);
        echo "\">
        <div class=\"col col-md-10 col-lg-8 col-xl-6\">
            <div class=\"form-group\">
                <label for=\"nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), "html", null, true);
        echo "\" autofocus>
            </div>
            <div class=\"row\" id=\"row-apellidos\">
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido1\">Apellido1</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido1\" id=\"apellido1\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 23, $this->source); })()), "apellido1", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido2\">Apellido2</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido2\" id=\"apellido2\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 27, $this->source); })()), "apellido2", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"cif\">";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 32, $this->source); })()), "tipofiscal", [], "any", false, false, false, 32) == "F")) ? ("NIF") : ("CIF"));
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"cif\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 33, $this->source); })()), "cif", [], "any", false, false, false, 33), "html", null, true);
        echo "\" readonly>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 38, $this->source); })()), "direccion", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
            </div>
            <div class=\" form-group\">
                <label for=\"localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 42, $this->source); })()), "localidad", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            </div>
            <div class=\" row\">
                <div class=\"form-group col-4\">
                    <label for=\"cpostal\">C.Postal</label>
                    <input type=\"text\" class=\"form-control\" name=\"cpostal\" id=\"cpostal\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 47, $this->source); })()), "cpostal", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                </div>
                <div class=\" col\">
                    <label for=\"provincia\">Provincia</label>
                    <select class=\"form-control\" name=\"provincia\" id=\"provincia\">
                        <option value=\"0\">&nbsp;</option>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) || array_key_exists("provincias", $context) ? $context["provincias"] : (function () { throw new RuntimeError('Variable "provincias" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 54
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "codigo", [], "any", false, false, false, 54), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["pro"], "codigo", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 54, $this->source); })()), "provincia", [], "any", false, false, false, 54))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre", [], "any", false, false, false, 54), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </select>
                </div>
            </div>
            <div class=\" form-group\">
                <label for=\"email\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"telefono1\">Teléfono 1</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono1\" name=\"telefono1\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 66, $this->source); })()), "telefono1", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                </div>
                <div class=\" form-group col-md-6\">
                    <label for=\"telefono2\">Teléfono 2</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono2\" name=\"telefono2\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 70, $this->source); })()), "telefono2", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row my-3 justify-content-around\">
                <div class=\"col-6 col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success btn-block\">
                        <i class=\"mdi mdi-content-save-outline mr-3\"></i>Grabar
                    </button>
                </div>
                <div class=\"col-6 col-md-4 m-1 m-sm-0\">
                    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"btn btn-danger btn-block\">
                        <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
                    </a>
                </div>
            </div>
        </div>
    </form>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "<script>
\$(function () {
    function getEmail() {
        return \$('#email').val();
    }
    \$('#form-edit-cli').validate({
        rules: {
            nombre: 'required',
            direccion: 'required',
            localidad: 'required',
            cpostal: { required: true, seleccionaProvincia: '#provincia' },
            provincia: { selectNumeric: true },
            email: {
                    required: true,
                    email: true,
                    remote: {
                        url: T.path('cliente/existe-otro'),
                        type: 'post',
                        data: {
                            codigo: ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new RuntimeError('Variable "cli" does not exist.', 109, $this->source); })()), "codigo", [], "any", false, false, false, 109), "html", null, true);
        echo ",
                            email: getEmail
                        },
                    },
                },
        },
        messages: {
                email: {
                    remote: 'El email pertenece a otro cliente.',
                },
            },
    });

    \$('#form-edit-cli').on('submit', function () {
        if (!\$(this).valid()) {
            return false;
        }
        T.loading('Actualizando información...');
        return true;
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cliente/cliente-actualizacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 109,  240 => 90,  230 => 89,  211 => 80,  198 => 70,  191 => 66,  183 => 61,  176 => 56,  163 => 54,  159 => 53,  150 => 47,  142 => 42,  135 => 38,  127 => 33,  123 => 32,  115 => 27,  108 => 23,  100 => 18,  93 => 14,  89 => 13,  86 => 12,  80 => 9,  77 => 8,  75 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h1 class=\"font-weight-normal container py-1 text-center\">
    <i class=\"mdi mdi-card-account-details-outline mr-3\"></i>
    Datos de cliente
</h1>
{% if mensaje is not empty %}
<div class=\"alert alert-success text-center mb-0\" role=\"alert\">
    <h1>{{ mensaje }}</h1>
</div>
{% endif %}
<main class=\"container-fluid bg-white py-2\">
    <form action=\"{{ url('cliente-actualizar') }}\" method=\"POST\" class=\"row justify-content-center mb-3\" id=\"form-edit-cli\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('client-update') }}\">
        <div class=\"col col-md-10 col-lg-8 col-xl-6\">
            <div class=\"form-group\">
                <label for=\"nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" value=\"{{ cli.nombre }}\" autofocus>
            </div>
            <div class=\"row\" id=\"row-apellidos\">
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido1\">Apellido1</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido1\" id=\"apellido1\" value=\"{{ cli.apellido1 }}\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido2\">Apellido2</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido2\" id=\"apellido2\" value=\"{{ cli.apellido2 }}\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"cif\">{{ cli.tipofiscal == 'F' ? 'NIF': 'CIF' }}</label>
                    <input type=\"text\" class=\"form-control\" id=\"cif\" value=\"{{ cli.cif }}\" readonly>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"{{ cli.direccion }}\">
            </div>
            <div class=\" form-group\">
                <label for=\"localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\" value=\"{{ cli.localidad }}\">
            </div>
            <div class=\" row\">
                <div class=\"form-group col-4\">
                    <label for=\"cpostal\">C.Postal</label>
                    <input type=\"text\" class=\"form-control\" name=\"cpostal\" id=\"cpostal\" value=\"{{ cli.cpostal }}\">
                </div>
                <div class=\" col\">
                    <label for=\"provincia\">Provincia</label>
                    <select class=\"form-control\" name=\"provincia\" id=\"provincia\">
                        <option value=\"0\">&nbsp;</option>
                        {% for pro in provincias %}
                        <option value=\"{{pro.codigo}}\" {{ pro.codigo==cli.provincia ? 'selected' : '' }}>{{pro.nombre}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\" form-group\">
                <label for=\"email\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ cli.email }}\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"telefono1\">Teléfono 1</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono1\" name=\"telefono1\" value=\"{{ cli.telefono1 }}\">
                </div>
                <div class=\" form-group col-md-6\">
                    <label for=\"telefono2\">Teléfono 2</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono2\" name=\"telefono2\" value=\"{{ cli.telefono2 }}\">
                </div>
            </div>
            <div class=\"row my-3 justify-content-around\">
                <div class=\"col-6 col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success btn-block\">
                        <i class=\"mdi mdi-content-save-outline mr-3\"></i>Grabar
                    </button>
                </div>
                <div class=\"col-6 col-md-4 m-1 m-sm-0\">
                    <a href=\"{{ url('home') }}\" class=\"btn btn-danger btn-block\">
                        <i class=\"mdi mdi-undo-variant mr-3\"></i>Volver
                    </a>
                </div>
            </div>
        </div>
    </form>
</main>
{% endblock %}
{% block javascripts %}
<script>
\$(function () {
    function getEmail() {
        return \$('#email').val();
    }
    \$('#form-edit-cli').validate({
        rules: {
            nombre: 'required',
            direccion: 'required',
            localidad: 'required',
            cpostal: { required: true, seleccionaProvincia: '#provincia' },
            provincia: { selectNumeric: true },
            email: {
                    required: true,
                    email: true,
                    remote: {
                        url: T.path('cliente/existe-otro'),
                        type: 'post',
                        data: {
                            codigo: {{ cli.codigo }},
                            email: getEmail
                        },
                    },
                },
        },
        messages: {
                email: {
                    remote: 'El email pertenece a otro cliente.',
                },
            },
    });

    \$('#form-edit-cli').on('submit', function () {
        if (!\$(this).valid()) {
            return false;
        }
        T.loading('Actualizando información...');
        return true;
    });
});
</script>
{% endblock %}", "cliente/cliente-actualizacion.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\cliente\\cliente-actualizacion.html.twig");
    }
}
