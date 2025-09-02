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

/* carrito/carrito-add-ok.html.twig */
class __TwigTemplate_7b63e1bd806160f4b6e056494c40be18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito-add-ok.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito/carrito-add-ok.html.twig"));

        // line 1
        echo "<div class=\"modal-header\">
    <h5 class=\"modal-title text-success\" id=\"carrito-add-ok-title\">
        <i class=\"mdi mdi-check mr-2\"></i>Producto añadido a su carrito
    </h5>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
<div class=\"modal-body\">
    <div class=\"container-fluid\">
        <div class=\"row font-weight-bold mb-2\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </div>
        <div class=\"row\">
            <div class=\"col-6\">
                <img width=\"120\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 16, $this->source); })()), "imagen", [], "any", false, false, false, 16)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-6 d-flex flex-column justify-content-center align-items-center\">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Precio: </b></td>
                            <td class=\"pl-2\">";
        // line 23
        echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 23, $this->source); })()), "precio", [], "any", false, false, false, 23));
        echo "</td>
                        </tr>
                        <tr>
                            <td><b>Cantidad: </b></td>
                            <td class=\"pl-2\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 27, $this->source); })()), "unidades", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 29, $this->source); })()), "talla", [], "any", false, false, false, 29))) {
            // line 30
            echo "                        <tr class=\"mt-2\">
                            <td><b>Talla: </b></td>
                            <td class=\"pl-2\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 32, $this->source); })()), "talla", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td><b>Color: </b></td>
                            <td class=\"pl-2\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 36, $this->source); })()), "color", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        // line 39
        echo "                    </tbody>
                </table>
                ";
        // line 41
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 41, $this->source); })()), "web_alerta", [], "any", false, false, false, 41))) {
            // line 42
            echo "                <small class=\"text-danger mt-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 42, $this->source); })()), "web_alerta", [], "any", false, false, false, 42), "html", null, true);
            echo "</small>
                ";
        }
        // line 44
        echo "            </div>
        </div>
        <div class=\"row my-2\">
            Tiene <b class=\"px-1\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tot"]) || array_key_exists("tot", $context) ? $context["tot"] : (function () { throw new RuntimeError('Variable "tot" does not exist.', 47, $this->source); })()), "unidades", [], "any", false, false, false, 47), "html", null, true);
        echo "</b> ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["tot"]) || array_key_exists("tot", $context) ? $context["tot"] : (function () { throw new RuntimeError('Variable "tot" does not exist.', 47, $this->source); })()), "unidades", [], "any", false, false, false, 47) === 1)) ? ("artículo") : ("artículos"));
        echo " en su carrito
        </div>
        ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 49, $this->source); })()), "euros", [], "any", false, false, false, 49) > 0)) {
            // line 50
            echo "        <div class=\"row d-flex justify-content-between\">
            <div><b class=\"pr-2\">Total artículos:</b> ";
            // line 51
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["tot"]) || array_key_exists("tot", $context) ? $context["tot"] : (function () { throw new RuntimeError('Variable "tot" does not exist.', 51, $this->source); })()), "total", [], "any", false, false, false, 51));
            echo "</div>
            <div><b>Portes:</b> ";
            // line 52
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 52, $this->source); })()), "euros_mas_iva", [], "any", false, false, false, 52));
            echo "</div>
            <div><b class=\"pr-2\">Total carrito:</b> ";
            // line 53
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["tot"]) || array_key_exists("tot", $context) ? $context["tot"] : (function () { throw new RuntimeError('Variable "tot" does not exist.', 53, $this->source); })()), "total_con_portes", [], "any", false, false, false, 53));
            echo "</div>
        </div>
        ";
        } else {
            // line 56
            echo "        <div class=\"row\">
            <b class=\"pr-2\">Total carrito:</b> ";
            // line 57
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["tot"]) || array_key_exists("tot", $context) ? $context["tot"] : (function () { throw new RuntimeError('Variable "tot" does not exist.', 57, $this->source); })()), "total", [], "any", false, false, false, 57));
            echo "
        </div>
        ";
        }
        // line 60
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 60, $this->source); })()), "gratis", [], "any", false, false, false, 60) > 0)) {
            // line 61
            echo "        <div class=\"row mt-3\">
            <small><b>Portes gratis a partir de ";
            // line 62
            echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 62, $this->source); })()), "gratis", [], "any", false, false, false, 62));
            echo ".</b></small>
        </div>
        ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 64, $this->source); })()), "falta", [], "any", false, false, false, 64) > 0)) {
                // line 65
                echo "        <div class=\"row\">
            ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 66, $this->source); })()), "falta", [], "any", false, false, false, 66) == 1)) {
                    // line 67
                    echo "            <small>Le falta ";
                    echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 67, $this->source); })()), "falta", [], "any", false, false, false, 67));
                    echo " para que su envío sea gratuito.</small>
            ";
                } else {
                    // line 69
                    echo "            <small>Le faltan ";
                    echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["portes"]) || array_key_exists("portes", $context) ? $context["portes"] : (function () { throw new RuntimeError('Variable "portes" does not exist.', 69, $this->source); })()), "falta", [], "any", false, false, false, 69));
                    echo " para que su envío sea gratuito.</small>
            ";
                }
                // line 71
                echo "        </div>
        ";
            }
            // line 73
            echo "        ";
        }
        // line 74
        echo "    </div>
</div>
<div class=\"modal-footer d-flex justify-content-between\">
    <button class=\"btnseguircomprando btn btn-primary\" data-dismiss=\"modal\"><i class=\"mdi mdi-check mr-2\"></i>
        Continuar<span class=\"d-none d-sm-inline\"> comprando</span>
    </button>
    <a class=\"btn btn-success\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart-view");
        echo "\"><i class=\"mdi mdi-cart mr-2\"></i> Ir al carrito</a>
</div>

<script>
    // Asegurarnos de que el modal se cierra correctamente
    \$(document).ready(function() {
        // Botón para continuar comprando
        \$('.btnseguircomprando').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });

        // Botón de la \"X\" para cerrar
        \$('.close', '#modal-cart-add-ok').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });

        // Si el botón de \"Ir al carrito\" también debe cerrar el modal
        \$('.btn-success', '#modal-cart-add-ok').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "carrito/carrito-add-ok.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  195 => 74,  192 => 73,  188 => 71,  182 => 69,  176 => 67,  174 => 66,  171 => 65,  169 => 64,  164 => 62,  161 => 61,  158 => 60,  152 => 57,  149 => 56,  143 => 53,  139 => 52,  135 => 51,  132 => 50,  130 => 49,  123 => 47,  118 => 44,  112 => 42,  110 => 41,  106 => 39,  100 => 36,  93 => 32,  89 => 30,  87 => 29,  82 => 27,  75 => 23,  63 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header\">
    <h5 class=\"modal-title text-success\" id=\"carrito-add-ok-title\">
        <i class=\"mdi mdi-check mr-2\"></i>Producto añadido a su carrito
    </h5>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
<div class=\"modal-body\">
    <div class=\"container-fluid\">
        <div class=\"row font-weight-bold mb-2\">
            {{ art.nombre }}
        </div>
        <div class=\"row\">
            <div class=\"col-6\">
                <img width=\"120\" src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.nombre }}\">
            </div>
            <div class=\"col-6 d-flex flex-column justify-content-center align-items-center\">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Precio: </b></td>
                            <td class=\"pl-2\">{{ art.precio|price }}</td>
                        </tr>
                        <tr>
                            <td><b>Cantidad: </b></td>
                            <td class=\"pl-2\">{{ art.unidades }}</td>
                        </tr>
                        {% if art.talla is not empty %}
                        <tr class=\"mt-2\">
                            <td><b>Talla: </b></td>
                            <td class=\"pl-2\">{{ art.talla }}</td>
                        </tr>
                        <tr>
                            <td><b>Color: </b></td>
                            <td class=\"pl-2\">{{ art.color }}</td>
                        </tr>
                        {% endif %}
                    </tbody>
                </table>
                {% if art.web_alerta is not empty %}
                <small class=\"text-danger mt-2\">{{ art.web_alerta }}</small>
                {% endif %}
            </div>
        </div>
        <div class=\"row my-2\">
            Tiene <b class=\"px-1\">{{ tot.unidades }}</b> {{ tot.unidades is same as(1) ? 'artículo' : 'artículos' }} en su carrito
        </div>
        {% if portes.euros > 0 %}
        <div class=\"row d-flex justify-content-between\">
            <div><b class=\"pr-2\">Total artículos:</b> {{ tot.total | price }}</div>
            <div><b>Portes:</b> {{ portes.euros_mas_iva | price }}</div>
            <div><b class=\"pr-2\">Total carrito:</b> {{ tot.total_con_portes | price }}</div>
        </div>
        {% else %}
        <div class=\"row\">
            <b class=\"pr-2\">Total carrito:</b> {{ tot.total | price }}
        </div>
        {% endif %}
        {% if portes.gratis > 0 %}
        <div class=\"row mt-3\">
            <small><b>Portes gratis a partir de {{ portes.gratis | price }}.</b></small>
        </div>
        {% if portes.falta > 0 %}
        <div class=\"row\">
            {% if portes.falta == 1 %}
            <small>Le falta {{ portes.falta | price }} para que su envío sea gratuito.</small>
            {% else %}
            <small>Le faltan {{ portes.falta | price }} para que su envío sea gratuito.</small>
            {% endif %}
        </div>
        {% endif %}
        {% endif %}
    </div>
</div>
<div class=\"modal-footer d-flex justify-content-between\">
    <button class=\"btnseguircomprando btn btn-primary\" data-dismiss=\"modal\"><i class=\"mdi mdi-check mr-2\"></i>
        Continuar<span class=\"d-none d-sm-inline\"> comprando</span>
    </button>
    <a class=\"btn btn-success\" href=\"{{ url('cart-view') }}\"><i class=\"mdi mdi-cart mr-2\"></i> Ir al carrito</a>
</div>

<script>
    // Asegurarnos de que el modal se cierra correctamente
    \$(document).ready(function() {
        // Botón para continuar comprando
        \$('.btnseguircomprando').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });

        // Botón de la \"X\" para cerrar
        \$('.close', '#modal-cart-add-ok').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });

        // Si el botón de \"Ir al carrito\" también debe cerrar el modal
        \$('.btn-success', '#modal-cart-add-ok').on('click', function() {
            \$('#modal-cart-add-ok').modal('hide'); // Cierra el modal
        });
    });
</script>
", "carrito/carrito-add-ok.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\carrito\\carrito-add-ok.html.twig");
    }
}
