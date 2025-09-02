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

/* gestion/carritos.html.twig */
class __TwigTemplate_367966f1f8f30deacbfd66dae24a70ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "gestion/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/carritos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/carritos.html.twig"));

        $this->parent = $this->loadTemplate("gestion/base.html.twig", "gestion/carritos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
    .collapsible-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .collapsible-body {
        padding: .5rem 1rem 1rem 1rem;
    }

    .collapsible-body,
    .collapsible-header:focus {
        background-color: white;
    }

    tr>td:nth-child(3),
    tr>th:nth-child(3) {
        text-align: right;
    }

    td,
    th {
        padding-top: .5rem;
        padding-bottom: .5rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "<ul class=\"collapsible popout\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carritos"]) || array_key_exists("carritos", $context) ? $context["carritos"] : (function () { throw new RuntimeError('Variable "carritos" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 34
            echo "    <li id=\"carrito-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "session_id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
        <div class=\"collapsible-header\">
            ";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cart"], "nombre", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["cart"], "nombre", [], "any", false, false, false, 36), "Sin cliente")) : ("Sin cliente")), "html", null, true);
            echo "
            <div>
                <span title=\"Fecha de la última actualización\">
                    <i class=\"mdi mdi-calendar-today mdi-18px mr-0\"></i>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "fecha", [], "any", false, false, false, 39), "html", null, true);
            echo "
                </span>
                <i class=\"mdi mdi-chevron-right mdi-18px mx-0\"></i>
                <span title=\"Listado de artículos del carrito\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "items", [], "any", false, false, false, 42), "html", null, true);
            echo " artículos</span>
                <i class=\"mdi mdi-chevron-right mdi-18px mx-0\"></i>
                <span title=\"Importe total de la compra\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "total", [], "any", false, false, false, 44), "html", null, true);
            echo " €</span>
            </div>
        </div>
        <div class=\"collapsible-body\">
            ";
            // line 48
            $context["btnDisable"] = (((twig_get_attribute($this->env, $this->source, $context["cart"], "cliente", [], "any", false, false, false, 48) == 0)) ? ("disabled") : (""));
            // line 49
            echo "            ";
            $context["colorBtnPedido"] = (((twig_get_attribute($this->env, $this->source, $context["cart"], "cliente", [], "any", false, false, false, 49) == 0)) ? ("btn-secondary") : ("btn-success"));
            // line 50
            echo "            ";
            $context["colorBtnEmail"] = (((twig_get_attribute($this->env, $this->source, $context["cart"], "cliente", [], "any", false, false, false, 50) == 0)) ? ("btn-secondary") : ("btn-primary"));
            // line 51
            echo "            <div class=\"d-flex justify-content-around\" data-cli=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cliente", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-email=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "email", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-session=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "session_id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
                <button class=\"btn btn-pedido ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["colorBtnPedido"]) || array_key_exists("colorBtnPedido", $context) ? $context["colorBtnPedido"] : (function () { throw new RuntimeError('Variable "colorBtnPedido" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" title=\"Pasar el carrito a pedido\" ";
            echo twig_escape_filter($this->env, (isset($context["btnDisable"]) || array_key_exists("btnDisable", $context) ? $context["btnDisable"] : (function () { throw new RuntimeError('Variable "btnDisable" does not exist.', 52, $this->source); })()), "html", null, true);
            echo ">
                    <i class=\"mdi mdi-cart-arrow-right mdi-24px mr-2\"></i>Pasar a pedido
                </button>
                <button class=\"btn btn-email ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["colorBtnEmail"]) || array_key_exists("colorBtnEmail", $context) ? $context["colorBtnEmail"] : (function () { throw new RuntimeError('Variable "colorBtnEmail" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\" title=\"Enviar un recordatorio por email al cliente\" ";
            echo twig_escape_filter($this->env, (isset($context["btnDisable"]) || array_key_exists("btnDisable", $context) ? $context["btnDisable"] : (function () { throw new RuntimeError('Variable "btnDisable" does not exist.', 55, $this->source); })()), "html", null, true);
            echo ">
                    <i class=\"mdi mdi-email-send mdi-24px mr-2\"></i>Enviar recordatorio
                </button>
                <button class=\"btn btn-danger btn-borrar\" title=\"Borrar todo el carrito\">
                    <i class=\"mdi mdi-cart-off mdi-24px mr-2\"></i>Eliminar carrito
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Nombre</th>
                        <th>Uds</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cart"], "lineas", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["lin"]) {
                // line 72
                echo "                    <tr>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "referencia", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "nombre", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </tbody>
            </table>
        </div>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</ul>

<div class=\"modal fade\" id=\"modal-email\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-email-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-email-title\">Email recordatorio cliente</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"form-dlg-send-email\">
                    <div class=\"form-group\">
                        <label>Dirección de correo</label>
                        <input type=\"text\" class=\"form-control\" name=\"email\" id=\"dlg-send-email\" placeholder=\"Introduzca el email del cliente\">
                    </div>
                    <div class=\"form-group\">
                        <label>Asunto</label>
                        <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"dlg-send-subject\" value=\"¡Gracias por visitarnos!\" />
                    </div>
                    <div class=\"form-group\">
                        <label>Texto</label>
                        <textarea rows=\"5\" class=\"form-control\" name=\"body\" id=\"dlg-send-body\" placeholder=\"Texto del correo...\">¡Hola!
Tienes algunos artículos en tu carrito esperando a que vuelvas a por ellos!
Si te siguen interesando puedes entrar en tu cuenta y terminar el pedido.
¡Gracias!</textarea>
                    </div>
                    <input type=\"hidden\" id=\"dlg-send-cli\">
                </form>
            </div>
            <div class=\"modal-footer p-2\">
                <button type=\"button\" class=\"btn btn-secondary mr-3\" data-dismiss=\"modal\">
                    <i class=\"mdi mdi-close mr-2\"></i>Cerrar
                </button>
                <button type=\"button\" class=\"btn btn-success btn-send\" id=\"btn-dlg-send\">
                    <i class=\"mdi mdi-send mr-2\"></i>Enviar
                </button>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "<script>
    \$(function () {
        function grabaPedido() {
            let parent = \$(this).parent();
            T.modalYesNo('¿Deseas convertir el carrito en un pedido?', 'Confirmación', function () {
                T.loading('Grabando pedido...');
                let cli = parent.data('cli'),
                    session = parent.data('session'),
                    postData = { 'cliente': cli, 'verif': T.primeNumber(cli) };
                \$.post('";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion-pedido-grabar");
        echo "', postData, function (resp) {
                    T.loadingHide();
                    \$('#carrito-' + session).remove();
                    T.modalOk(resp.msg, 'Pasar carrito a pedido');
                });
            });
        }

        function borraCarrito(cli) {
            let parent = \$(this).parent();
            T.modalYesNo('¿Deseas borrar el carrito?', 'Confirmación', function () {
                let cli = parent.data('cli'),
                    session = parent.data('session'),
                    postData = {
                        'session_id': session,
                        'cliente': cli,
                        'verif': T.primeNumber(cli)
                    };
                T.loading('Borrando carrito...');
                \$.post('";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion-carrito-borra");
        echo "', postData, function (resp) {
                    T.loadingHide();
                    \$('#carrito-' + session).remove();
                    T.modalOk(resp, 'Borrar carrito');
                });
            });
        }

        function emailShow() {
            let parent = \$(this).parent();
            \$('#dlg-send-cli').val(parent.data('cli'));
            \$('#dlg-send-email').val(parent.data('email'));
            \$('#modal-email').modal('show');
        }

        function emailEnvia() {
            if (\$('#form-dlg-send-email').valid()) {
                let cli = \$('#dlg-send-cli').toInt(),
                    postData = {
                        'cliente': cli,
                        'verif': T.primeNumber(cli),
                        'email': \$('#dlg-send-email').val(),
                        'subject': \$('#dlg-send-subject').val(),
                        'body': \$('#dlg-send-body').html().replace(/\\n/g, '<br>')
                    };
                T.loading('Enviando email...');
                \$.post('";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion-carrito-email");
        echo "', postData, function (resp) {
                    T.loadingHide();
                    \$('#modal-email').modal('hide');
                    T.modalOk(resp, 'Email recordatorio');
                });
            }
        }

        \$('.btn-pedido').on('click', grabaPedido);
        \$('.btn-borrar').on('click', borraCarrito);
        \$('.btn-email').on('click', emailShow);

        //-- Email
        \$('#modal-email').on('shown.bs.modal', () => \$('#dlg-send-email').focus());
        \$('#form-dlg-send-email').validate({
            rules: {
                email: { required: true, email: true },
                subject: 'required',
                body: 'required',
            },
        });
        \$('#btn-dlg-send').on('click', emailEnvia);

        // -- Collapsible
        \$('.collapsible').collapsible();

    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/carritos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 182,  330 => 156,  308 => 137,  297 => 128,  287 => 127,  234 => 83,  224 => 78,  215 => 75,  211 => 74,  207 => 73,  204 => 72,  200 => 71,  179 => 55,  171 => 52,  162 => 51,  159 => 50,  156 => 49,  154 => 48,  147 => 44,  142 => 42,  136 => 39,  130 => 36,  124 => 34,  120 => 33,  117 => 32,  107 => 31,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'gestion/base.html.twig' %}
{% block stylesheets %}
<style>
    .collapsible-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .collapsible-body {
        padding: .5rem 1rem 1rem 1rem;
    }

    .collapsible-body,
    .collapsible-header:focus {
        background-color: white;
    }

    tr>td:nth-child(3),
    tr>th:nth-child(3) {
        text-align: right;
    }

    td,
    th {
        padding-top: .5rem;
        padding-bottom: .5rem;
    }
</style>
{% endblock %}
{% block body %}
<ul class=\"collapsible popout\">
    {% for cart in carritos %}
    <li id=\"carrito-{{cart.session_id}}\">
        <div class=\"collapsible-header\">
            {{cart.nombre | default('Sin cliente')}}
            <div>
                <span title=\"Fecha de la última actualización\">
                    <i class=\"mdi mdi-calendar-today mdi-18px mr-0\"></i>{{cart.fecha}}
                </span>
                <i class=\"mdi mdi-chevron-right mdi-18px mx-0\"></i>
                <span title=\"Listado de artículos del carrito\">{{cart.items}} artículos</span>
                <i class=\"mdi mdi-chevron-right mdi-18px mx-0\"></i>
                <span title=\"Importe total de la compra\">{{cart.total}} €</span>
            </div>
        </div>
        <div class=\"collapsible-body\">
            {% set btnDisable = cart.cliente == 0 ? 'disabled' : '' %}
            {% set colorBtnPedido = cart.cliente == 0 ? 'btn-secondary' : 'btn-success' %}
            {% set colorBtnEmail = cart.cliente == 0 ? 'btn-secondary' : 'btn-primary' %}
            <div class=\"d-flex justify-content-around\" data-cli=\"{{cart.cliente}}\" data-email=\"{{cart.email}}\" data-session=\"{{cart.session_id}}\">
                <button class=\"btn btn-pedido {{ colorBtnPedido }}\" title=\"Pasar el carrito a pedido\" {{ btnDisable }}>
                    <i class=\"mdi mdi-cart-arrow-right mdi-24px mr-2\"></i>Pasar a pedido
                </button>
                <button class=\"btn btn-email {{ colorBtnEmail }}\" title=\"Enviar un recordatorio por email al cliente\" {{ btnDisable }}>
                    <i class=\"mdi mdi-email-send mdi-24px mr-2\"></i>Enviar recordatorio
                </button>
                <button class=\"btn btn-danger btn-borrar\" title=\"Borrar todo el carrito\">
                    <i class=\"mdi mdi-cart-off mdi-24px mr-2\"></i>Eliminar carrito
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Nombre</th>
                        <th>Uds</th>
                    </tr>
                </thead>
                <tbody>
                    {% for lin in cart.lineas %}
                    <tr>
                        <td>{{lin.referencia}}</td>
                        <td>{{lin.nombre}}</td>
                        <td>{{lin.unidades}}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </li>
    {% endfor %}
</ul>

<div class=\"modal fade\" id=\"modal-email\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-email-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-email-title\">Email recordatorio cliente</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"form-dlg-send-email\">
                    <div class=\"form-group\">
                        <label>Dirección de correo</label>
                        <input type=\"text\" class=\"form-control\" name=\"email\" id=\"dlg-send-email\" placeholder=\"Introduzca el email del cliente\">
                    </div>
                    <div class=\"form-group\">
                        <label>Asunto</label>
                        <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"dlg-send-subject\" value=\"¡Gracias por visitarnos!\" />
                    </div>
                    <div class=\"form-group\">
                        <label>Texto</label>
                        <textarea rows=\"5\" class=\"form-control\" name=\"body\" id=\"dlg-send-body\" placeholder=\"Texto del correo...\">¡Hola!
Tienes algunos artículos en tu carrito esperando a que vuelvas a por ellos!
Si te siguen interesando puedes entrar en tu cuenta y terminar el pedido.
¡Gracias!</textarea>
                    </div>
                    <input type=\"hidden\" id=\"dlg-send-cli\">
                </form>
            </div>
            <div class=\"modal-footer p-2\">
                <button type=\"button\" class=\"btn btn-secondary mr-3\" data-dismiss=\"modal\">
                    <i class=\"mdi mdi-close mr-2\"></i>Cerrar
                </button>
                <button type=\"button\" class=\"btn btn-success btn-send\" id=\"btn-dlg-send\">
                    <i class=\"mdi mdi-send mr-2\"></i>Enviar
                </button>
            </div>
        </div>
    </div>
</div>

{% endblock %}
{% block javascripts %}
<script>
    \$(function () {
        function grabaPedido() {
            let parent = \$(this).parent();
            T.modalYesNo('¿Deseas convertir el carrito en un pedido?', 'Confirmación', function () {
                T.loading('Grabando pedido...');
                let cli = parent.data('cli'),
                    session = parent.data('session'),
                    postData = { 'cliente': cli, 'verif': T.primeNumber(cli) };
                \$.post('{{url(\"gestion-pedido-grabar\")}}', postData, function (resp) {
                    T.loadingHide();
                    \$('#carrito-' + session).remove();
                    T.modalOk(resp.msg, 'Pasar carrito a pedido');
                });
            });
        }

        function borraCarrito(cli) {
            let parent = \$(this).parent();
            T.modalYesNo('¿Deseas borrar el carrito?', 'Confirmación', function () {
                let cli = parent.data('cli'),
                    session = parent.data('session'),
                    postData = {
                        'session_id': session,
                        'cliente': cli,
                        'verif': T.primeNumber(cli)
                    };
                T.loading('Borrando carrito...');
                \$.post('{{url(\"gestion-carrito-borra\")}}', postData, function (resp) {
                    T.loadingHide();
                    \$('#carrito-' + session).remove();
                    T.modalOk(resp, 'Borrar carrito');
                });
            });
        }

        function emailShow() {
            let parent = \$(this).parent();
            \$('#dlg-send-cli').val(parent.data('cli'));
            \$('#dlg-send-email').val(parent.data('email'));
            \$('#modal-email').modal('show');
        }

        function emailEnvia() {
            if (\$('#form-dlg-send-email').valid()) {
                let cli = \$('#dlg-send-cli').toInt(),
                    postData = {
                        'cliente': cli,
                        'verif': T.primeNumber(cli),
                        'email': \$('#dlg-send-email').val(),
                        'subject': \$('#dlg-send-subject').val(),
                        'body': \$('#dlg-send-body').html().replace(/\\n/g, '<br>')
                    };
                T.loading('Enviando email...');
                \$.post('{{url(\"gestion-carrito-email\")}}', postData, function (resp) {
                    T.loadingHide();
                    \$('#modal-email').modal('hide');
                    T.modalOk(resp, 'Email recordatorio');
                });
            }
        }

        \$('.btn-pedido').on('click', grabaPedido);
        \$('.btn-borrar').on('click', borraCarrito);
        \$('.btn-email').on('click', emailShow);

        //-- Email
        \$('#modal-email').on('shown.bs.modal', () => \$('#dlg-send-email').focus());
        \$('#form-dlg-send-email').validate({
            rules: {
                email: { required: true, email: true },
                subject: 'required',
                body: 'required',
            },
        });
        \$('#btn-dlg-send').on('click', emailEnvia);

        // -- Collapsible
        \$('.collapsible').collapsible();

    });
</script>
{% endblock %}", "gestion/carritos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\gestion\\carritos.html.twig");
    }
}
