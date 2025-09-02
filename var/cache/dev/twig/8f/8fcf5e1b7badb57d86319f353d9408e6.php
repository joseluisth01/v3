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

/* cliente/cliente-registro.html.twig */
class __TwigTemplate_3ae9577db7486dfeeb4a4cbe0e0f45e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/cliente-registro.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/cliente-registro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/cliente-registro.html.twig", 1);
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
        echo "<h1 class=\"font-weight-normal container py-1\">Registro nuevo cliente</h1>
<main class=\"container-fluid bg-white\">
    ";
        // line 5
        if (array_key_exists("msgError", $context)) {
            // line 6
            echo "    <h4 class=\"alert alert-danger text-center\" role=\"alert\">";
            echo (isset($context["msgError"]) || array_key_exists("msgError", $context) ? $context["msgError"] : (function () { throw new RuntimeError('Variable "msgError" does not exist.', 6, $this->source); })());
            echo "</h4>
    ";
        }
        // line 8
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-registro-grabar");
        echo "\" method=\"POST\" class=\"row justify-content-center mb-3\" id=\"form-registro\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("client-new"), "html", null, true);
        echo "\">
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "validarCIF", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <input type=\"hidden\" id=\"_cn_token\" value=\"166819\">
        ";
        }
        // line 13
        echo "        <div class=\"col col-md-10 col-lg-8 col-xl-6\">
            <div class=\"row my-2\">
                <label class=\"col-auto py-1\">Tipo de persona</label>
                <div class=\"col d-flex\">
                    <div class=\"custom-control custom-radio custom-control-inline\">
                        <input type=\"radio\" id=\"tipo-f\" name=\"tipofiscal\" class=\"custom-control-input\" value=\"F\" checked>
                        <label class=\"custom-control-label py-1\" for=\"tipo-f\">Física</label>
                    </div>
                    <div class=\"custom-control custom-radio custom-control-inline ml-3\">
                        <input type=\"radio\" id=\"tipo-j\" name=\"tipofiscal\" class=\"custom-control-input\" value=\"J\">
                        <label class=\"custom-control-label py-1\" for=\"tipo-j\">Jurídica</label>
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" autofocus>
            </div>
            <div class=\"row\" id=\"row-apellidos\">
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido1\">Apellido1</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido1\" id=\"apellido1\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido2\">Apellido2</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido2\" id=\"apellido2\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"cif\" id=\"label-cif\">NIF</label>
                    <input type=\"text\" class=\"form-control\" name=\"cif\" id=\"cif\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\">
            </div>

            <div class=\"form-group\">
                <label for=\"localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-4\">
                    <label for=\"cpostal\">C.Postal</label>
                    <input type=\"text\" class=\"form-control\" name=\"cpostal\" id=\"cpostal\">
                </div>
                <div class=\"col\">
                    <label for=\"provincia\">Provincia</label>
                    <select class=\"form-control\" name=\"provincia\" id=\"provincia\">
                        <option value=\"0\">&nbsp;</option>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) || array_key_exists("provincias", $context) ? $context["provincias"] : (function () { throw new RuntimeError('Variable "provincias" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 66
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "codigo", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre", [], "any", false, false, false, 66), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </select>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"telefono\">Teléfono</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono\" name=\"telefono\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"clave\">Clave</label>
                    <input type=\"password\" class=\"form-control\" id=\"clave\" name=\"clave\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"clave2\">Repita la clave</label>
                    <input type=\"password\" class=\"form-control\" id=\"clave2\" name=\"clave2\">
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col\">
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad\">
                        <label class=\"custom-control-label pt-1\" for=\"politica_privacidad\">
                            He leído y acepto la <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos-privacidad");
        echo "\">política de privacidad</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"form-group mt-2\">
                <p>Le enviaremos un email para que confirme su registro</p>
            </div>
            <div class=\"row my-3 justify-content-around\">
                <div class=\"col-6 col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success btn-block pb-2\">
                        <i class=\"mdi mdi-content-save-outline mdi-24px mr-3\"></i>Registrar
                    </button>
                </div>
                <div class=\"col-6 col-md-4 m-1 m-sm-0\">
                    <button type=\"button\" class=\"btn btn-danger btn-block pb-2\" onclick=\"javascript:history.back()\">
                        <i class=\"mdi mdi-undo-variant mdi-24px mr-3\"></i>Volver
                    </button>
                </div>
            </div>
        </div>
    </form>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cliente-registro.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cliente/cliente-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 121,  229 => 120,  195 => 96,  165 => 68,  154 => 66,  150 => 65,  96 => 13,  92 => 11,  90 => 10,  86 => 9,  81 => 8,  75 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h1 class=\"font-weight-normal container py-1\">Registro nuevo cliente</h1>
<main class=\"container-fluid bg-white\">
    {% if msgError is defined %}
    <h4 class=\"alert alert-danger text-center\" role=\"alert\">{{ msgError | raw }}</h4>
    {% endif %}
    <form action=\"{{ url('cliente-registro-grabar') }}\" method=\"POST\" class=\"row justify-content-center mb-3\" id=\"form-registro\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('client-new') }}\">
        {% if config.validarCIF %}
        <input type=\"hidden\" id=\"_cn_token\" value=\"166819\">
        {% endif %}
        <div class=\"col col-md-10 col-lg-8 col-xl-6\">
            <div class=\"row my-2\">
                <label class=\"col-auto py-1\">Tipo de persona</label>
                <div class=\"col d-flex\">
                    <div class=\"custom-control custom-radio custom-control-inline\">
                        <input type=\"radio\" id=\"tipo-f\" name=\"tipofiscal\" class=\"custom-control-input\" value=\"F\" checked>
                        <label class=\"custom-control-label py-1\" for=\"tipo-f\">Física</label>
                    </div>
                    <div class=\"custom-control custom-radio custom-control-inline ml-3\">
                        <input type=\"radio\" id=\"tipo-j\" name=\"tipofiscal\" class=\"custom-control-input\" value=\"J\">
                        <label class=\"custom-control-label py-1\" for=\"tipo-j\">Jurídica</label>
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"nombre\">Nombre</label>
                <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" autofocus>
            </div>
            <div class=\"row\" id=\"row-apellidos\">
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido1\">Apellido1</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido1\" id=\"apellido1\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"apellido2\">Apellido2</label>
                    <input type=\"text\" class=\"form-control\" name=\"apellido2\" id=\"apellido2\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"cif\" id=\"label-cif\">NIF</label>
                    <input type=\"text\" class=\"form-control\" name=\"cif\" id=\"cif\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"direccion\">Dirección</label>
                <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\">
            </div>

            <div class=\"form-group\">
                <label for=\"localidad\">Localidad</label>
                <input type=\"text\" class=\"form-control\" name=\"localidad\" id=\"localidad\">
            </div>
            <div class=\"row\">
                <div class=\"form-group col-4\">
                    <label for=\"cpostal\">C.Postal</label>
                    <input type=\"text\" class=\"form-control\" name=\"cpostal\" id=\"cpostal\">
                </div>
                <div class=\"col\">
                    <label for=\"provincia\">Provincia</label>
                    <select class=\"form-control\" name=\"provincia\" id=\"provincia\">
                        <option value=\"0\">&nbsp;</option>
                        {% for pro in provincias %}
                        <option value=\"{{pro.codigo}}\">{{pro.nombre}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"telefono\">Teléfono</label>
                    <input type=\"text\" class=\"form-control\" id=\"telefono\" name=\"telefono\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"clave\">Clave</label>
                    <input type=\"password\" class=\"form-control\" id=\"clave\" name=\"clave\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"clave2\">Repita la clave</label>
                    <input type=\"password\" class=\"form-control\" id=\"clave2\" name=\"clave2\">
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col\">
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad\">
                        <label class=\"custom-control-label pt-1\" for=\"politica_privacidad\">
                            He leído y acepto la <a href=\"{{ url('textos-privacidad') }}\">política de privacidad</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"form-group mt-2\">
                <p>Le enviaremos un email para que confirme su registro</p>
            </div>
            <div class=\"row my-3 justify-content-around\">
                <div class=\"col-6 col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success btn-block pb-2\">
                        <i class=\"mdi mdi-content-save-outline mdi-24px mr-3\"></i>Registrar
                    </button>
                </div>
                <div class=\"col-6 col-md-4 m-1 m-sm-0\">
                    <button type=\"button\" class=\"btn btn-danger btn-block pb-2\" onclick=\"javascript:history.back()\">
                        <i class=\"mdi mdi-undo-variant mdi-24px mr-3\"></i>Volver
                    </button>
                </div>
            </div>
        </div>
    </form>
</main>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/cliente-registro.js') }}\"></script>
{% endblock %}", "cliente/cliente-registro.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\cliente\\cliente-registro.html.twig");
    }
}
