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

/* documentos/documentos-view-doc.html.twig */
class __TwigTemplate_737849246d1e87e6b64c0664e1c1d2da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view-doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentos/documentos-view-doc.html.twig"));

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
<div class=\"row cabecera mb-3 text-nowrap\">
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>Fecha:</b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 17, $this->source); })()), "fecha", [], "any", false, false, false, 17), "d-m-Y"), "html", null, true);
        echo "
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "nombreDoc", [], "any", false, false, false, 20), "html", null, true);
        echo " Nº:</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "serie", [], "any", false, false, false, 20), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 20, $this->source); })()), "numero", [], "any", false, false, false, 20), "html", null, true);
        echo "
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>Transporte:</b> ";
        // line 23
        echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 23, $this->source); })()), "portes", [], "any", false, false, false, 23));
        echo "
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0 text-lg-center\">
        <b class=\"d-none d-md-inline\">Forma de pago:</b>
        <b class=\"d-md-none\">F. Pago:</b>
        ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 28, $this->source); })()), "fpago", [], "any", false, false, false, 28), "html", null, true);
        echo "
    </div>
    ";
        // line 30
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 30, $this->source); })()), "pedido_cobro_ident", [], "any", false, false, false, 30))) {
            // line 31
            echo "    <div class=\"col-12 col-md mt-1 mt-md-0 text-lg-center\">
        <b>ID Pago:</b> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 32, $this->source); })()), "pedido_cobro_ident", [], "any", false, false, false, 32), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 35
        echo "</div>
<div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
    <div class=\"col-2 d-none d-lg-table-cell\">Referencia</div>
    <div class=\"col\">
        <span class=\"d-lg-none\">Líneas de detalle</span>
        <span class=\"d-none d-lg-inline\">Descripción</span>
    </div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Unidades</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Precio</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Total</div>
</div>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineas"]) || array_key_exists("lineas", $context) ? $context["lineas"] : (function () { throw new RuntimeError('Variable "lineas" does not exist.', 46, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lin"]) {
            // line 47
            echo "<div class=\"row pt-2\">
    <div class=\"col-2 d-none d-lg-table-cell\">
        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "referencia", [], "any", false, false, false, 49), "html", null, true);
            echo "
    </div>
    ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["lin"], "linea_cabecera", [], "any", false, false, false, 51) != 0)) {
                // line 52
                echo "    <div class=\"col\"><i><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "descripcion", [], "any", false, false, false, 52), "html", null, true);
                echo "</b></i></div>
    ";
            } else {
                // line 54
                echo "    <div class=\"col\">
        ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "descripcion", [], "any", false, false, false, 55), "html", null, true);
                echo "
    </div>
    <div class=\"col-auto col-lg-2\">
        <span class=\"d-none d-lg-inline text-right\">";
                // line 58
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 58), 0, ",", "."), "html", null, true);
                echo "</span>
        <div class=\"d-lg-none\">
            <table>
                <tr>
                    <td>Unidades:</td>
                    <td class=\"text-right\">";
                // line 63
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 63), 0, ",", "."), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td class=\"text-right\">";
                // line 67
                echo $this->extensions['App\Twig\AppExtension']->formatPrice((((twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 67) != 0)) ? ((twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 67) / twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 67))) : (twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 67))));
                echo "</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td class=\"text-right\">";
                // line 71
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 71));
                echo "</td>
                </tr>
            </table>
        </div>
    </div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">";
                // line 76
                echo $this->extensions['App\Twig\AppExtension']->formatPrice((((twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 76) != 0)) ? ((twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 76) / twig_get_attribute($this->env, $this->source, $context["lin"], "unidades", [], "any", false, false, false, 76))) : (twig_get_attribute($this->env, $this->source, $context["lin"], "precio", [], "any", false, false, false, 76))));
                echo "</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">";
                // line 77
                echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["lin"], "importe", [], "any", false, false, false, 77));
                echo "</div>
    ";
            }
            // line 79
            echo "</div>
";
            // line 80
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["lin"], "numeros_serie", [], "any", false, false, false, 80))) {
                // line 81
                echo "<div class=\"row observaciones\">
    <div class=\"col col-lg-4 offset-lg-2\"><i>Nº Serie: ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lin"], "numeros_serie", [], "any", false, false, false, 82), "html", null, true);
                echo "</i></div>
</div>
";
            }
            // line 85
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["lin"], "observaciones", [], "any", false, false, false, 85))) {
                // line 86
                echo "<div class=\"row observaciones\">
    <div class=\"col col-lg-5 offset-lg-2\"><small>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["lin"], "observaciones", [], "any", false, false, false, 87);
                echo "</small></div>
</div>
";
            }
            // line 90
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 90)) {
                // line 91
                echo "<hr>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "<div class=\"row\">
    <div class=\"col-md-6\"></div>
    <div class=\"col-md-6 px-0 text-right\">
        <table class=\"table table-borderless font-weight-bold text-right border-top border-dark totales\">
            <tbody>
                <tr>
                    <td>Base Imponible:</td>
                    <td>";
        // line 101
        echo $this->extensions['App\Twig\AppExtension']->formatPrice(((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 101, $this->source); })()), "baseimpo1", [], "any", false, false, false, 101) + twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 101, $this->source); })()), "baseimpo2", [], "any", false, false, false, 101)) + twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 101, $this->source); })()), "baseimpo3", [], "any", false, false, false, 101)));
        echo "</td>
                </tr>
                <tr>
                    <td>Gastos de envío:</td>
                    <td>";
        // line 105
        echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 105, $this->source); })()), "portes", [], "any", false, false, false, 105));
        echo "</td>
                </tr>
                ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 107, $this->source); })()), "iva1", [], "any", false, false, false, 107) != 0)) {
            // line 108
            echo "                <tr>
                    <td>IVA ";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 109, $this->source); })()), "piva1", [], "any", false, false, false, 109), 2, ",", "."), "html", null, true);
            echo "%</td>
                    <td>";
            // line 110
            echo $this->extensions['App\Twig\AppExtension']->formatPrice((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 110, $this->source); })()), "iva1", [], "any", false, false, false, 110) + twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 110, $this->source); })()), "rec1", [], "any", false, false, false, 110)));
            echo "</td>
                </tr>
                ";
        }
        // line 113
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 113, $this->source); })()), "iva2", [], "any", false, false, false, 113) != 0)) {
            // line 114
            echo "                <tr>
                    <td>IVA ";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 115, $this->source); })()), "piva2", [], "any", false, false, false, 115), 2, ",", "."), "html", null, true);
            echo "%</td>
                    <td>";
            // line 116
            echo $this->extensions['App\Twig\AppExtension']->formatPrice((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 116, $this->source); })()), "iva2", [], "any", false, false, false, 116) + twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 116, $this->source); })()), "rec2", [], "any", false, false, false, 116)));
            echo "</td>
                </tr>
                ";
        }
        // line 119
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 119, $this->source); })()), "iva3", [], "any", false, false, false, 119) != 0)) {
            // line 120
            echo "                <tr>
                    <td>IVA ";
            // line 121
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 121, $this->source); })()), "piva3", [], "any", false, false, false, 121), 2, ",", "."), "html", null, true);
            echo "%</td>
                    <td>";
            // line 122
            echo $this->extensions['App\Twig\AppExtension']->formatPrice((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 122, $this->source); })()), "iva3", [], "any", false, false, false, 122) + twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 122, $this->source); })()), "rec3", [], "any", false, false, false, 122)));
            echo "</td>
                </tr>
                ";
        }
        // line 125
        echo "                <tr>
                    <td>Total</td>
                    <td>";
        // line 127
        echo $this->extensions['App\Twig\AppExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 127, $this->source); })()), "total", [], "any", false, false, false, 127));
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
";
        // line 133
        $context["obs"] = (((twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 133, $this->source); })()), "tipodoc", [], "any", false, false, false, 133) == 2)) ? (twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 133, $this->source); })()), "observaciones_pedido", [], "any", false, false, false, 133)) : (twig_get_attribute($this->env, $this->source, (isset($context["cab"]) || array_key_exists("cab", $context) ? $context["cab"] : (function () { throw new RuntimeError('Variable "cab" does not exist.', 133, $this->source); })()), "observaciones", [], "any", false, false, false, 133)));
        // line 134
        if ( !twig_test_empty((isset($context["obs"]) || array_key_exists("obs", $context) ? $context["obs"] : (function () { throw new RuntimeError('Variable "obs" does not exist.', 134, $this->source); })()))) {
            // line 135
            echo "<div class=\"border border-dark p-2\">
    <div class=\"font-weight-bold\">Observaciones:</div>
    <div>";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["obs"]) || array_key_exists("obs", $context) ? $context["obs"] : (function () { throw new RuntimeError('Variable "obs" does not exist.', 137, $this->source); })()), "html", null, true);
            echo "</div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "documentos/documentos-view-doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 137,  355 => 135,  353 => 134,  351 => 133,  342 => 127,  338 => 125,  332 => 122,  328 => 121,  325 => 120,  322 => 119,  316 => 116,  312 => 115,  309 => 114,  306 => 113,  300 => 110,  296 => 109,  293 => 108,  291 => 107,  286 => 105,  279 => 101,  270 => 94,  254 => 91,  252 => 90,  246 => 87,  243 => 86,  241 => 85,  235 => 82,  232 => 81,  230 => 80,  227 => 79,  222 => 77,  218 => 76,  210 => 71,  203 => 67,  196 => 63,  188 => 58,  182 => 55,  179 => 54,  173 => 52,  171 => 51,  166 => 49,  162 => 47,  145 => 46,  132 => 35,  126 => 32,  123 => 31,  121 => 30,  116 => 28,  108 => 23,  98 => 20,  92 => 17,  87 => 14,  77 => 11,  73 => 10,  69 => 9,  66 => 8,  64 => 7,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
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
<div class=\"row cabecera mb-3 text-nowrap\">
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>Fecha:</b> {{ cab.fecha|date('d-m-Y') }}
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>{{ cab.nombreDoc}} Nº:</b> {{ cab.serie }}-{{ cab.numero }}
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0\">
        <b>Transporte:</b> {{ cab.portes|price }}
    </div>
    <div class=\"col-12 col-md mt-1 mt-md-0 text-lg-center\">
        <b class=\"d-none d-md-inline\">Forma de pago:</b>
        <b class=\"d-md-none\">F. Pago:</b>
        {{ cab.fpago }}
    </div>
    {% if cab.pedido_cobro_ident is not empty %}
    <div class=\"col-12 col-md mt-1 mt-md-0 text-lg-center\">
        <b>ID Pago:</b> {{ cab.pedido_cobro_ident }}
    </div>
    {% endif %}
</div>
<div class=\"row cart-table border-bottom border-dark font-weight-bold pb-2\">
    <div class=\"col-2 d-none d-lg-table-cell\">Referencia</div>
    <div class=\"col\">
        <span class=\"d-lg-none\">Líneas de detalle</span>
        <span class=\"d-none d-lg-inline\">Descripción</span>
    </div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Unidades</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Precio</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">Total</div>
</div>
{% for lin in lineas %}
<div class=\"row pt-2\">
    <div class=\"col-2 d-none d-lg-table-cell\">
        {{ lin.referencia }}
    </div>
    {% if lin.linea_cabecera != 0 %}
    <div class=\"col\"><i><b>{{ lin.descripcion }}</b></i></div>
    {% else %}
    <div class=\"col\">
        {{ lin.descripcion }}
    </div>
    <div class=\"col-auto col-lg-2\">
        <span class=\"d-none d-lg-inline text-right\">{{ lin.unidades|number_format(0, ',', '.') }}</span>
        <div class=\"d-lg-none\">
            <table>
                <tr>
                    <td>Unidades:</td>
                    <td class=\"text-right\">{{ lin.unidades|number_format(0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td class=\"text-right\">{{ ( lin.unidades != 0 ? (lin.importe/lin.unidades) : lin.precio)|price }}</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td class=\"text-right\">{{ lin.importe|price }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">{{( lin.unidades != 0 ? (lin.importe/lin.unidades) : lin.precio)|price }}</div>
    <div class=\"col-2 d-none d-lg-table-cell text-right\">{{ lin.importe|price }}</div>
    {% endif %}
</div>
{% if lin.numeros_serie is not empty %}
<div class=\"row observaciones\">
    <div class=\"col col-lg-4 offset-lg-2\"><i>Nº Serie: {{ lin.numeros_serie }}</i></div>
</div>
{% endif %}
{% if lin.observaciones is not empty %}
<div class=\"row observaciones\">
    <div class=\"col col-lg-5 offset-lg-2\"><small>{{ lin.observaciones | raw }}</small></div>
</div>
{% endif %}
{% if not loop.last %}
<hr>
{% endif %}
{% endfor %}
<div class=\"row\">
    <div class=\"col-md-6\"></div>
    <div class=\"col-md-6 px-0 text-right\">
        <table class=\"table table-borderless font-weight-bold text-right border-top border-dark totales\">
            <tbody>
                <tr>
                    <td>Base Imponible:</td>
                    <td>{{ (cab.baseimpo1+cab.baseimpo2+cab.baseimpo3)|price }}</td>
                </tr>
                <tr>
                    <td>Gastos de envío:</td>
                    <td>{{ cab.portes|price }}</td>
                </tr>
                {% if cab.iva1 != 0 %}
                <tr>
                    <td>IVA {{ cab.piva1|number_format(2, ',', '.') }}%</td>
                    <td>{{(cab.iva1+cab.rec1)|price }}</td>
                </tr>
                {% endif %}
                {% if cab.iva2 != 0 %}
                <tr>
                    <td>IVA {{ cab.piva2|number_format(2, ',', '.') }}%</td>
                    <td>{{ (cab.iva2+cab.rec2)|price }}</td>
                </tr>
                {% endif %}
                {% if cab.iva3 != 0 %}
                <tr>
                    <td>IVA {{ cab.piva3|number_format(2, ',', '.') }}%</td>
                    <td>{{ (cab.iva3+cab.rec3)|price }}</td>
                </tr>
                {% endif %}
                <tr>
                    <td>Total</td>
                    <td>{{ cab.total|price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
{% set obs = cab.tipodoc == 2 ? cab.observaciones_pedido : cab.observaciones %}
{% if obs is not empty %}
<div class=\"border border-dark p-2\">
    <div class=\"font-weight-bold\">Observaciones:</div>
    <div>{{ obs }}</div>
</div>
{% endif %}", "documentos/documentos-view-doc.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\documentos\\documentos-view-doc.html.twig");
    }
}
