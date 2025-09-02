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

/* carrito/carrito-fin-modal.html.twig */
class __TwigTemplate_75f0c5d6fd307fc1cadc238fb4c31c2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito-fin-modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito-fin-modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-no-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"no-login-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"no-login-title\">Usuario no identificado</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h6>Debe iniciar sesión o registrarse para grabar el pedido</h6>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-danger mr-2\" data-dismiss=\"modal\"><i class=\"iconblanco mdi mdi-close mr-2\"></i>Cancelar</button>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        echo "\" class=\"btn btn-primary\"><i class=\"iconblanco mdi mdi-check mr-2\"></i>Iniciar sesión</a>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modal-no-client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"no-login-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"no-login-title\">Cliente no seleccionado</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h6>Debe seleccionar un cliente para grabar el pedido</h6>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-primary mr-2\" data-dismiss=\"modal\"><i class=\"iconblanco mdi mdi-close mr-2\"></i>Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade fullscreen-modal\" id=\"modal-end-cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"end-cart-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"end-cart-title\">Grabación pedido</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-row\">
                    <label for=\"observaciones\">Comentarios acerca de este pedido</label>
                    <textarea name=\"observaciones\" id=\"observaciones\" rows=\"3\" class=\"form-control\"></textarea>
                </div>
                <div class=\"form-row mt-2\">
                    <label for=\"portes\">Gastos de envío</label>
                </div>
                <div class=\"form-row\">
                    ";
        // line 56
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 56, $this->source); })()), "gratis", [], "any", false, false, false, 56) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 56, $this->source); })()), "gratis", [], "any", false, false, false, 56) < twig_get_attribute($this->env, $this->source, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), "total", [], "any", false, false, false, 56))) || (isset($context["recoger_en_tienda"]) || array_key_exists("recoger_en_tienda", $context) ? $context["recoger_en_tienda"] : (function () { throw new RuntimeError('Variable "recoger_en_tienda" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "                        <input type=\"text\" class=\"col-4 form-control text-right\" value=\"";
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(0);
            echo "\" readonly>
                    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "data", [], "any", false, false, false, 58), "portes_select", [], "any", false, false, false, 58)) {
            // line 59
            echo "                        <select name=\"portes\" id=\"portes\" class=\"form-control\">
                            <option value=\"0\">Recogida en tienda: Gratis</option>
                            <option value=\"1\" selected>Envío: ";
            // line 61
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 61, $this->source); })()), "euros_mas_iva", [], "any", false, false, false, 61));
            echo "</option>
                        </select>
                    ";
        } else {
            // line 64
            echo "                        <input type=\"text\" class=\"col-4 form-control text-right\" value=\"";
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 64, $this->source); })()), "euros_mas_iva", [], "any", false, false, false, 64));
            echo "\" readonly>
                    ";
        }
        // line 66
        echo "                </div>
                <div class=\"form-check form-check-inline mt-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"check_condiciones\">
                    <label class=\"form-check-label\" for=\"check_condiciones\">
                        Acepto los
                        <a target=\"_blank\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos-condiciones-compra");
        echo "\" style=\"text-decoration: underline\">términos y condiciones de compra</a>
                    </label>
                </div>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-danger mr-2\" data-dismiss=\"modal\"><i class=\"mdi mdi-close mr-2\"></i>Cancelar</button>
                <button type=\"button\" id=\"btn-end-cart-ok\" class=\"btn btn-success\"><i class=\"mdi mdi-check mr-2\"></i>Grabar pedido</button>
            </div>
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        // Solución más agresiva para cerrar modales
        \$('[data-dismiss=\"modal\"]').on('click', function() {
            \$('.modal').modal('hide');
            \$('body').removeClass('modal-open');
            \$('.modal-backdrop').remove();
        });
        
        // Lo mismo para los botones específicos
        \$('#modal-no-login .btn-danger, #modal-no-client .btn-primary, #modal-end-cart .btn-danger').on('click', function() {
            \$('.modal').modal('hide');
            \$('body').removeClass('modal-open');
            \$('.modal-backdrop').remove();
        });
        
        \$('#modal-end-cart').on('shown.bs.modal', () => \$('#observaciones', '#modal-end-cart').trigger('focus'));
    });
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "carrito/carrito-fin-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 71,  128 => 66,  122 => 64,  116 => 61,  112 => 59,  110 => 58,  105 => 57,  103 => 56,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modal-no-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"no-login-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"no-login-title\">Usuario no identificado</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h6>Debe iniciar sesión o registrarse para grabar el pedido</h6>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-danger mr-2\" data-dismiss=\"modal\"><i class=\"iconblanco mdi mdi-close mr-2\"></i>Cancelar</button>
                <a href=\"{{ url('app_login') }}\" class=\"btn btn-primary\"><i class=\"iconblanco mdi mdi-check mr-2\"></i>Iniciar sesión</a>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modal-no-client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"no-login-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"no-login-title\">Cliente no seleccionado</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h6>Debe seleccionar un cliente para grabar el pedido</h6>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-primary mr-2\" data-dismiss=\"modal\"><i class=\"iconblanco mdi mdi-close mr-2\"></i>Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade fullscreen-modal\" id=\"modal-end-cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"end-cart-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"end-cart-title\">Grabación pedido</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-row\">
                    <label for=\"observaciones\">Comentarios acerca de este pedido</label>
                    <textarea name=\"observaciones\" id=\"observaciones\" rows=\"3\" class=\"form-control\"></textarea>
                </div>
                <div class=\"form-row mt-2\">
                    <label for=\"portes\">Gastos de envío</label>
                </div>
                <div class=\"form-row\">
                    {% if portes.gratis > 0 and portes.gratis < total.total or recoger_en_tienda %}
                        <input type=\"text\" class=\"col-4 form-control text-right\" value=\"{{ 0|price }}\" readonly>
                    {% elseif config.data.portes_select %}
                        <select name=\"portes\" id=\"portes\" class=\"form-control\">
                            <option value=\"0\">Recogida en tienda: Gratis</option>
                            <option value=\"1\" selected>Envío: {{ portes.euros_mas_iva | price }}</option>
                        </select>
                    {% else %}
                        <input type=\"text\" class=\"col-4 form-control text-right\" value=\"{{ portes.euros_mas_iva|price }}\" readonly>
                    {% endif %}
                </div>
                <div class=\"form-check form-check-inline mt-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"check_condiciones\">
                    <label class=\"form-check-label\" for=\"check_condiciones\">
                        Acepto los
                        <a target=\"_blank\" href=\"{{ url('textos-condiciones-compra') }}\" style=\"text-decoration: underline\">términos y condiciones de compra</a>
                    </label>
                </div>
            </div>
            <div class=\"modal-footer d-flex justify-content-around\">
                <button type=\"button\" class=\"btn btn-danger mr-2\" data-dismiss=\"modal\"><i class=\"mdi mdi-close mr-2\"></i>Cancelar</button>
                <button type=\"button\" id=\"btn-end-cart-ok\" class=\"btn btn-success\"><i class=\"mdi mdi-check mr-2\"></i>Grabar pedido</button>
            </div>
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        // Solución más agresiva para cerrar modales
        \$('[data-dismiss=\"modal\"]').on('click', function() {
            \$('.modal').modal('hide');
            \$('body').removeClass('modal-open');
            \$('.modal-backdrop').remove();
        });
        
        // Lo mismo para los botones específicos
        \$('#modal-no-login .btn-danger, #modal-no-client .btn-primary, #modal-end-cart .btn-danger').on('click', function() {
            \$('.modal').modal('hide');
            \$('body').removeClass('modal-open');
            \$('.modal-backdrop').remove();
        });
        
        \$('#modal-end-cart').on('shown.bs.modal', () => \$('#observaciones', '#modal-end-cart').trigger('focus'));
    });
</script>

", "carrito/carrito-fin-modal.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\carrito\\carrito-fin-modal.html.twig");
    }
}
