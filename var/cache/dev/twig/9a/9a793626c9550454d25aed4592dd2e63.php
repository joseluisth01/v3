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

/* gestion/venta.html.twig */
class __TwigTemplate_d57d28ed914678ac92eeb1b17fde986c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/venta.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/venta.html.twig"));

        $this->parent = $this->loadTemplate("gestion/base.html.twig", "gestion/venta.html.twig", 1);
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
        echo "  <style>
    table,
    .detalle {
      font-size: 0.8rem;

    }
    div.detalle div.row > div {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    div.row.header {
      border-bottom: 1px solid black;
      padding-bottom: 1em;
      font-weight: bold
    }

    #venta table td {
      cursor: default;
    }

    .va-sub {
      vertical-align: sub;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "  <div class=\"p-1 bg-white\" id=\"venta\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6\">
        <label for=\"almacen\">Almacén</label>
        <select name=\"almacen\" id=\"almacen\" class=\"form-control\" v-model=\"almacen\">
          <option value=\"0\"></option>
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alm"]) {
            // line 38
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 38), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "getAlmacen", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, $context["alm"], "codigo", [], "any", false, false, false, 38))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alm"], "nombre", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </select>
      </div>
      <div class=\"col-12 col-lg-6\">
        <div class=\"d-flex justify-content-between\">
          <label class=\"pt-2 pt-md-0\" for=\"cli_nombre\">Cliente</label>
          <div class=\"d-md-none d-flex justify-content-right\">
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteSeleccion\">
              <i class=\"mdi mdi-magnify mdi-24px\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteEdicion\">
              <i class=\"mdi mdi-account-edit-outline mdi-24px\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteNuevo\">
              <i class=\"mdi mdi-account-plus-outline mdi-24px\"></i>
            </button>
          </div>
        </div>
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli_nombre\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "getClientName", [], "any", false, false, false, 58), "html", null, true);
        echo "\" v-model=\"cliNombre\" readonly>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0\" @click=\"clienteSeleccion\">
              <i class=\"mdi mdi-magnify mdi-24px\"></i>
            </button>
          </div>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0\" @click=\"clienteEdicion\">
              <i class=\"mdi mdi-account-edit-outline mdi-24px\"></i>
            </button>
          </div>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteNuevo\">
              <i class=\"mdi mdi-account-plus-outline mdi-24px\"></i>
            </button>
          </div>
        </div>
        <input type=\"hidden\" id=\"cli_codigo\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "getClient", [], "any", false, false, false, 75), "html", null, true);
        echo "\" v-model=\"cliCodigo\">
      </div>
    </div>
    <div class=\"row my-2\">
      <div class=\"col-6 col-lg-3 text-center\">
        <button class=\"btn btn-success btn-block\" :disabled=\"sinCliente\" @click=\"articuloSeleccion\">
          <i class=\"mdi mdi-cart-plus mdi-24px mr-2 va-sub\"></i>Añadir artículo</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center order-lg-4\">
        <button class=\"btn btn-danger btn-block\" :disabled=\"sinLineas\" @click=\"carritoBorra\">
          <i class=\"mdi mdi-close-circle mdi-24px mr-2 va-sub\"></i>Borrar pedido</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center mt-1 mt-lg-0\">
        <button class=\"btn btn-primary btn-block\" :disabled=\"sinCliente\" @click=\"grabaPedido\">
          <i class=\"mdi mdi-clipboard mdi-24px mr-2 va-sub\"></i>Grabar pedido</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center mt-1 mt-lg-0\">
        <button class=\"btn btn-primary btn-block\" :disabled=\"sinCliente\" @click=\"grabaAlbaran\">
          <i class=\"mdi mdi-clipboard-text mdi-24px mr-2 va-sub\"></i>Grabar albarán</button>
      </div>
    </div>
    <div class=\"mt-2 detalle container-fluid\">
      <div class=\"row header\">
        <div class=\"col-auto d-none d-lg-inline-block\">
          <div style=\"min-width: 75px\"></div>
        </div>
        <div class=\"col\">Artículo</div>
        <div class=\"col-12 d-lg-none\"></div>
        <div class=\"d-none d-md-inline-block col-md-2 d-lg-none\"></div>
        <div class=\"col-4 col-md-3 col-lg-2 text-right\">Cantidad</div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">Precio</div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">Total</div>
        <div class=\"col-auto\">
          <div style=\"min-width: 1.75em\"></div>
        </div>
      </div>
      <div class=\"row border-bottom pb-2 pb-lg-0\" v-for=\"(lin, index) in lineas\" :key=\"lin.id\">
        <div class=\"col-auto d-none d-lg-table-cell\">
          <img height=\"75\" :src=\"url(lin.imagen)\" :alt=\"lin.nombre\">
        </div>
        <div class=\"col d-flex flex-column justify-content-center\">
          <div>\${lin.referencia}</div>
          <h6 class=\"mb-0\">\${lin.nombre}</h6>
          <div v-show=\"lin.talla != null\">
            <b>Talla:</b>\${lin.talla}&nbsp;&nbsp;&nbsp;<b>Color:</b>\${lin.color}
          </div>
        </div>
        <div class=\"col-12 d-lg-none\"></div>
        <div class=\"d-none d-md-inline-block col-md-2 d-lg-none\"></div>
        <div class=\"col-4 col-md-3 col-lg-2 text-right\">
          <div class=\"product-quantity\">
            <input type=\"text\" class=\"product-quantity form-control input-sm\" v-model=\"lin.unidades\" @change=\"lineaActualizaUd(index)\" :data-id=\"lin.id\">
          </div>
        </div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">
          \${numToString(lin.precio)}
        </div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">
          \${numToString(lin.unidades * lin.precio)}
        </div>
        <div class=\"col-auto px-2\">
          <button class=\"btn btn-primary btn-sm\" data-id=\"lin.id\" @click=\"lineaBorra(index)\">
            <i class=\"mdi mdi-trash-can-outline mdi-18px\"></i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"row mx-0\">
      <div class=\"col-md-6\"></div>
      <div class=\"col-md-6 px-0 text-right\">
        <table class=\"table table-borderless font-weight-bold text-right cart-total\">
          <tbody>
            <tr>
              <td>Base Imponible:</td>
              <td>\${numToString(total.base)} €</td>
            </tr>
            <tr v-for=\"item in total.iva\">
              <td>IVA \${numToString(item.iva)}%</td>
              <td>\${numToString(item.importe)} €</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>\${numToString(total.total)} €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  ";
        // line 164
        $this->loadTemplate("seleccion/clientes.html.twig", "gestion/venta.html.twig", 164)->display($context);
        // line 165
        echo "  ";
        $this->loadTemplate("seleccion/articulos.html.twig", "gestion/venta.html.twig", 165)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cliente-edicion.js"), "html", null, true);
        echo "\"></script>
  <script type=\"module\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/venta.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/venta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 169,  296 => 168,  286 => 167,  275 => 165,  273 => 164,  181 => 75,  161 => 58,  141 => 40,  128 => 38,  124 => 37,  116 => 31,  106 => 30,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'gestion/base.html.twig' %}
{% block stylesheets %}
  <style>
    table,
    .detalle {
      font-size: 0.8rem;

    }
    div.detalle div.row > div {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    div.row.header {
      border-bottom: 1px solid black;
      padding-bottom: 1em;
      font-weight: bold
    }

    #venta table td {
      cursor: default;
    }

    .va-sub {
      vertical-align: sub;
    }
  </style>
{% endblock %}
{% block body %}
  <div class=\"p-1 bg-white\" id=\"venta\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-6\">
        <label for=\"almacen\">Almacén</label>
        <select name=\"almacen\" id=\"almacen\" class=\"form-control\" v-model=\"almacen\">
          <option value=\"0\"></option>
          {% for alm in almacenes %}
            <option value=\"{{ alm.codigo }}\" {{ app.user.getAlmacen==alm.codigo ? 'selected' :'' }}>{{ alm.nombre }}</option>
          {% endfor %}
        </select>
      </div>
      <div class=\"col-12 col-lg-6\">
        <div class=\"d-flex justify-content-between\">
          <label class=\"pt-2 pt-md-0\" for=\"cli_nombre\">Cliente</label>
          <div class=\"d-md-none d-flex justify-content-right\">
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteSeleccion\">
              <i class=\"mdi mdi-magnify mdi-24px\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteEdicion\">
              <i class=\"mdi mdi-account-edit-outline mdi-24px\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteNuevo\">
              <i class=\"mdi mdi-account-plus-outline mdi-24px\"></i>
            </button>
          </div>
        </div>
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control no-box-shadow\" id=\"cli_nombre\" value=\"{{ app.user.getClientName }}\" v-model=\"cliNombre\" readonly>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0\" @click=\"clienteSeleccion\">
              <i class=\"mdi mdi-magnify mdi-24px\"></i>
            </button>
          </div>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border-left-0 border py-0\" @click=\"clienteEdicion\">
              <i class=\"mdi mdi-account-edit-outline mdi-24px\"></i>
            </button>
          </div>
          <div class=\"input-group-append d-none d-md-inline-block\">
            <button type=\"button\" class=\"btn btn-outline-secondary border py-0\" @click=\"clienteNuevo\">
              <i class=\"mdi mdi-account-plus-outline mdi-24px\"></i>
            </button>
          </div>
        </div>
        <input type=\"hidden\" id=\"cli_codigo\" value=\"{{app.user.getClient}}\" v-model=\"cliCodigo\">
      </div>
    </div>
    <div class=\"row my-2\">
      <div class=\"col-6 col-lg-3 text-center\">
        <button class=\"btn btn-success btn-block\" :disabled=\"sinCliente\" @click=\"articuloSeleccion\">
          <i class=\"mdi mdi-cart-plus mdi-24px mr-2 va-sub\"></i>Añadir artículo</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center order-lg-4\">
        <button class=\"btn btn-danger btn-block\" :disabled=\"sinLineas\" @click=\"carritoBorra\">
          <i class=\"mdi mdi-close-circle mdi-24px mr-2 va-sub\"></i>Borrar pedido</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center mt-1 mt-lg-0\">
        <button class=\"btn btn-primary btn-block\" :disabled=\"sinCliente\" @click=\"grabaPedido\">
          <i class=\"mdi mdi-clipboard mdi-24px mr-2 va-sub\"></i>Grabar pedido</button>
      </div>
      <div class=\"col-6 col-lg-3 text-center mt-1 mt-lg-0\">
        <button class=\"btn btn-primary btn-block\" :disabled=\"sinCliente\" @click=\"grabaAlbaran\">
          <i class=\"mdi mdi-clipboard-text mdi-24px mr-2 va-sub\"></i>Grabar albarán</button>
      </div>
    </div>
    <div class=\"mt-2 detalle container-fluid\">
      <div class=\"row header\">
        <div class=\"col-auto d-none d-lg-inline-block\">
          <div style=\"min-width: 75px\"></div>
        </div>
        <div class=\"col\">Artículo</div>
        <div class=\"col-12 d-lg-none\"></div>
        <div class=\"d-none d-md-inline-block col-md-2 d-lg-none\"></div>
        <div class=\"col-4 col-md-3 col-lg-2 text-right\">Cantidad</div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">Precio</div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">Total</div>
        <div class=\"col-auto\">
          <div style=\"min-width: 1.75em\"></div>
        </div>
      </div>
      <div class=\"row border-bottom pb-2 pb-lg-0\" v-for=\"(lin, index) in lineas\" :key=\"lin.id\">
        <div class=\"col-auto d-none d-lg-table-cell\">
          <img height=\"75\" :src=\"url(lin.imagen)\" :alt=\"lin.nombre\">
        </div>
        <div class=\"col d-flex flex-column justify-content-center\">
          <div>\${lin.referencia}</div>
          <h6 class=\"mb-0\">\${lin.nombre}</h6>
          <div v-show=\"lin.talla != null\">
            <b>Talla:</b>\${lin.talla}&nbsp;&nbsp;&nbsp;<b>Color:</b>\${lin.color}
          </div>
        </div>
        <div class=\"col-12 d-lg-none\"></div>
        <div class=\"d-none d-md-inline-block col-md-2 d-lg-none\"></div>
        <div class=\"col-4 col-md-3 col-lg-2 text-right\">
          <div class=\"product-quantity\">
            <input type=\"text\" class=\"product-quantity form-control input-sm\" v-model=\"lin.unidades\" @change=\"lineaActualizaUd(index)\" :data-id=\"lin.id\">
          </div>
        </div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">
          \${numToString(lin.precio)}
        </div>
        <div class=\"col-3 col-md-3 col-lg-1 text-right\">
          \${numToString(lin.unidades * lin.precio)}
        </div>
        <div class=\"col-auto px-2\">
          <button class=\"btn btn-primary btn-sm\" data-id=\"lin.id\" @click=\"lineaBorra(index)\">
            <i class=\"mdi mdi-trash-can-outline mdi-18px\"></i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"row mx-0\">
      <div class=\"col-md-6\"></div>
      <div class=\"col-md-6 px-0 text-right\">
        <table class=\"table table-borderless font-weight-bold text-right cart-total\">
          <tbody>
            <tr>
              <td>Base Imponible:</td>
              <td>\${numToString(total.base)} €</td>
            </tr>
            <tr v-for=\"item in total.iva\">
              <td>IVA \${numToString(item.iva)}%</td>
              <td>\${numToString(item.importe)} €</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>\${numToString(total.total)} €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {% include 'seleccion/clientes.html.twig' %}
  {% include 'seleccion/articulos.html.twig' %}
{% endblock %}
{% block javascripts %}
  <script src=\"{{ asset('js/cliente-edicion.js') }}\"></script>
  <script type=\"module\" src=\"{{ asset('js/venta.js') }}\"></script>
{% endblock %}
", "gestion/venta.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\gestion\\venta.html.twig");
    }
}
