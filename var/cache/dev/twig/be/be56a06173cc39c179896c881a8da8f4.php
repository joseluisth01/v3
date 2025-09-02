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

/* gestion/articulo-add.html.twig */
class __TwigTemplate_1e8304197441b52c99f873a5b8a5a411 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/articulo-add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/articulo-add.html.twig"));

        $this->parent = $this->loadTemplate("gestion/base.html.twig", "gestion/articulo-add.html.twig", 1);
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
    #add-art span.badge {
      font-size: 1rem;
    }
    #add-art .product-quantity,
    #add-art .product-quantity .input-group {
      margin-right: 5px;
    }
    table.table-ref-pn-cba {
      width: auto;
      font-size: 1rem;
    }
    table.table-ref-pn-cba > tbody > tr {
      border: 0;
    }
    table.table-ref-pn-cba > tbody > tr > td {
      padding: 0;
    }
    table.table-ref-pn-cba>tbody>tr>td:last-child {
      font-weight: bold;
      padding-left: 5px;
    }
    div.u-venta,
    div.canon {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 5px;
      font-size: 0.90em;
      background-color: lightgrey;
    }
    div.canon {
      justify-content: space-around;
    }
    div.u-venta > div > span,
    div.canon > div > span {
      margin-left: 0.5rem;
      font-weight: bold;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "  <main id=\"add-art\" class=\"p-1 bg-white\" data-ref=";
        echo twig_escape_filter($this->env, (isset($context["referencia"]) || array_key_exists("referencia", $context) ? $context["referencia"] : (function () { throw new RuntimeError('Variable "referencia" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " data-alm=\"";
        echo twig_escape_filter($this->env, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\">
    <h3 class=\"modal-title border border-dark text-center mb-2\" id=\"art-add-title\">Añadir artículo</h3>
    <div class=\"row\">
      <div class=\"col-auto\">
        <img width=\"150\" class=\"img-fluid img-thumbnail\" :src=\"articuloImagen\" :alt=\"art.imagen_txt\">
      </div>
      <div class=\"col\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between mb-2\">
          <div class=\"font-weight-bold\">\${art.referencia}</div>
          <div v-if=\"articuloControlStock\">
            <span class=\"font-weight-bold mr-1\">Stock:</span>
            <span class=\"px-2 badge\" :class=\"stockClass\">\${stockArticulo} Uds</span>
          </div>
          <div v-else class=\"text-danger border border-danger px-4\">
            Sin control de stock
          </div>
        </div>
        <div>\${art.nombre}</div>
        <div class=\"price-availability-block border-0\">
          <div class=\"price\">
            <strong>\${precioArticuloTxt}</strong>
            + IVA &nbsp; &nbsp; &nbsp; (\${precioIvaTxt})
          </div>
        </div>
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
          <div class=\"mb-2\">
            <div v-if=\"art.part_number != ''\">
              <span>Part&nbsp;Number:</span>
              <span class=\"font-weight-bold\">\${art.part_number}</span>
            </div>
            <div v-if=\"art.codbarras != ''\">
              <span>Cod.&nbsp;Barras:</span>
              <span class=\"font-weight-bold\">\${art.codbarras}</span>
            </div>
          </div>
          <a v-if=\"articuloUrl != ''\" class=\"btn btn-primary btn-sm\" target=\"_blank\" rel=\"noreferrer\" :href=\"articuloUrl\">
            Ver&nbsp;en&nbsp;la&nbsp;web<i class=\"mdi mdi-open-in-new ml-3\"></i>
          </a>
          <div v-else class=\"btn btn-secondary btn-sm\">No está disponible en la web</div>
        </div>
      </div>
    </div>
    <div class=\"mt-2\" v-if=\"uVenta.fecha != ''\">Última venta</div>
    <div class=\"u-venta\" v-if=\"uVenta.fecha != ''\">
      <div class=\"px-1\">
        Fecha:<span>\${ uVenta.fecha}</span>
      </div>
      <div class=\"px-1\">
        Unidades:<span>\${ uVenta.unidades}</span>
      </div>
      <div class=\"px-1\">
        Precio:<span>\${ uVenta.precio}</span>
      </div>
      <div class=\"px-1\">
        Descuento:<span>\${ uVenta.dto}</span>
      </div>
    </div>
    <div class=\"row mt-2\">
      <div class=\"col-12 col-md-6\">
        <div class=\"row\" v-show=\"listaTallas.length > 0\">
          <div class=\"col-auto pt-1\">
            <label for=\"talla\">Talla</label>
          </div>
          <div class=\"col\">
            <select id=\"talla\" class=\"form-control form-control-sm\" v-model=\"talla\" @change=\"calculaPrecio\">
              <option v-for=\"talla in listaTallas\" :key=\"talla.codigo\" :value=\"talla.codigo\">\${talla.nombre}</option>
            </select>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-md-6\">
        <div class=\"row\" v-show=\"listaColores.length > 0\">
          <div class=\"col-auto pt-1\">
            <label for=\"color\">Color</label>
          </div>
          <div class=\"col\">
            <select id=\"color\" class=\"form-control form-control-sm\" v-model=\"color\" @change=\"calculaPrecio\">
              <option v-for=\"color in listaColores\" :key=\"color.codigo\" :value=\"color.codigo\">\${color.nombre}</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class=\"mt-2 row justify-content-between\">
      <div class=\"col-12 col-md-4\">
        <div v-show=\"precioTC == 0\">
          <label for=\"tarifa\" class=\"mb-0\">Tarifa</label>
          <select id=\"tarifa\" class=\"form-control\" v-model=\"tarifa\" @change=\"calculaPrecio\">
            <option v-for=\"tar in listaTarifas\" :key=\"tar.codigo\" :value=\"tar.codigo\">
              \${tar.precio_txt}&nbsp;&nbsp;&nbsp;&nbsp;(\${tar.nombre})
            </option>
          </select>
        </div>
      </div>
      <div class=\"col-6 col-sm-4 col-md-2\">
        <label for=\"descuento\" class=\"mb-0\">% Dto</label>
        <input type=\"text\" class=\"form-control text-right\" id=\"descuento\" v-model=\"descuento\" @input=\"calculaPrecio\">
      </div>
      <div class=\"col-6 col-sm-4 col-md-2\">
        <label for=\"precio\" class=\"mb-0\">Precio</label>
        <input type=\"text\" class=\"form-control text-right\" id=\"precio\" v-model=\"precio\" @input=\"calculaDescuento\">
      </div>
      <div class=\"col-12 col-sm-4 col-md-2\">
        <label for=\"product-quantity\" class=\"mb-0\">Unidades</label>
        <div class=\"product-quantity\">
          <input id=\"product-quantity\" type=\"text\" v-model=\"unidades\" class=\"form-control text-right mr-4\">
        </div>
      </div>
    </div>
    <div class=\"mt-2 canon\" v-if=\"art.lpi != 0\">
      <div>
        Precio+Canon:
        <span>\${precioCanonTxt}</span>
      </div>
      <div>
        Precio+Canon+IVA:
        <span>\${precioCanonIvaTxt}</span>
      </div>
    </div>
    <div class=\"mt-3 d-flex justify-content-end\">
      <div>
        <button type=\"button\" class=\"btn btn-primary add2cart mr-2\" @click=\"grabaNuevaLinea\">
          <i class=\"mdi mdi-content-save mr-2\"></i>Grabar línea
        </button>
        <button type=\"button\" class=\"btn btn-danger\" @click=\"close\">
          <i class=\"mdi mdi-close mr-2\"></i>Cancelar
        </button>
      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 177
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/articulo-add.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/articulo-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 177,  274 => 176,  130 => 45,  120 => 44,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'gestion/base.html.twig' %}
{% block stylesheets %}
  <style>
    #add-art span.badge {
      font-size: 1rem;
    }
    #add-art .product-quantity,
    #add-art .product-quantity .input-group {
      margin-right: 5px;
    }
    table.table-ref-pn-cba {
      width: auto;
      font-size: 1rem;
    }
    table.table-ref-pn-cba > tbody > tr {
      border: 0;
    }
    table.table-ref-pn-cba > tbody > tr > td {
      padding: 0;
    }
    table.table-ref-pn-cba>tbody>tr>td:last-child {
      font-weight: bold;
      padding-left: 5px;
    }
    div.u-venta,
    div.canon {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 5px;
      font-size: 0.90em;
      background-color: lightgrey;
    }
    div.canon {
      justify-content: space-around;
    }
    div.u-venta > div > span,
    div.canon > div > span {
      margin-left: 0.5rem;
      font-weight: bold;
    }
  </style>
{% endblock %}
{% block body %}
  <main id=\"add-art\" class=\"p-1 bg-white\" data-ref={{ referencia }} data-alm=\"{{ almacen }}\">
    <h3 class=\"modal-title border border-dark text-center mb-2\" id=\"art-add-title\">Añadir artículo</h3>
    <div class=\"row\">
      <div class=\"col-auto\">
        <img width=\"150\" class=\"img-fluid img-thumbnail\" :src=\"articuloImagen\" :alt=\"art.imagen_txt\">
      </div>
      <div class=\"col\">
        <div class=\"d-flex flex-column flex-md-row justify-content-between mb-2\">
          <div class=\"font-weight-bold\">\${art.referencia}</div>
          <div v-if=\"articuloControlStock\">
            <span class=\"font-weight-bold mr-1\">Stock:</span>
            <span class=\"px-2 badge\" :class=\"stockClass\">\${stockArticulo} Uds</span>
          </div>
          <div v-else class=\"text-danger border border-danger px-4\">
            Sin control de stock
          </div>
        </div>
        <div>\${art.nombre}</div>
        <div class=\"price-availability-block border-0\">
          <div class=\"price\">
            <strong>\${precioArticuloTxt}</strong>
            + IVA &nbsp; &nbsp; &nbsp; (\${precioIvaTxt})
          </div>
        </div>
        <div class=\"d-flex flex-column flex-md-row justify-content-between\">
          <div class=\"mb-2\">
            <div v-if=\"art.part_number != ''\">
              <span>Part&nbsp;Number:</span>
              <span class=\"font-weight-bold\">\${art.part_number}</span>
            </div>
            <div v-if=\"art.codbarras != ''\">
              <span>Cod.&nbsp;Barras:</span>
              <span class=\"font-weight-bold\">\${art.codbarras}</span>
            </div>
          </div>
          <a v-if=\"articuloUrl != ''\" class=\"btn btn-primary btn-sm\" target=\"_blank\" rel=\"noreferrer\" :href=\"articuloUrl\">
            Ver&nbsp;en&nbsp;la&nbsp;web<i class=\"mdi mdi-open-in-new ml-3\"></i>
          </a>
          <div v-else class=\"btn btn-secondary btn-sm\">No está disponible en la web</div>
        </div>
      </div>
    </div>
    <div class=\"mt-2\" v-if=\"uVenta.fecha != ''\">Última venta</div>
    <div class=\"u-venta\" v-if=\"uVenta.fecha != ''\">
      <div class=\"px-1\">
        Fecha:<span>\${ uVenta.fecha}</span>
      </div>
      <div class=\"px-1\">
        Unidades:<span>\${ uVenta.unidades}</span>
      </div>
      <div class=\"px-1\">
        Precio:<span>\${ uVenta.precio}</span>
      </div>
      <div class=\"px-1\">
        Descuento:<span>\${ uVenta.dto}</span>
      </div>
    </div>
    <div class=\"row mt-2\">
      <div class=\"col-12 col-md-6\">
        <div class=\"row\" v-show=\"listaTallas.length > 0\">
          <div class=\"col-auto pt-1\">
            <label for=\"talla\">Talla</label>
          </div>
          <div class=\"col\">
            <select id=\"talla\" class=\"form-control form-control-sm\" v-model=\"talla\" @change=\"calculaPrecio\">
              <option v-for=\"talla in listaTallas\" :key=\"talla.codigo\" :value=\"talla.codigo\">\${talla.nombre}</option>
            </select>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-md-6\">
        <div class=\"row\" v-show=\"listaColores.length > 0\">
          <div class=\"col-auto pt-1\">
            <label for=\"color\">Color</label>
          </div>
          <div class=\"col\">
            <select id=\"color\" class=\"form-control form-control-sm\" v-model=\"color\" @change=\"calculaPrecio\">
              <option v-for=\"color in listaColores\" :key=\"color.codigo\" :value=\"color.codigo\">\${color.nombre}</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class=\"mt-2 row justify-content-between\">
      <div class=\"col-12 col-md-4\">
        <div v-show=\"precioTC == 0\">
          <label for=\"tarifa\" class=\"mb-0\">Tarifa</label>
          <select id=\"tarifa\" class=\"form-control\" v-model=\"tarifa\" @change=\"calculaPrecio\">
            <option v-for=\"tar in listaTarifas\" :key=\"tar.codigo\" :value=\"tar.codigo\">
              \${tar.precio_txt}&nbsp;&nbsp;&nbsp;&nbsp;(\${tar.nombre})
            </option>
          </select>
        </div>
      </div>
      <div class=\"col-6 col-sm-4 col-md-2\">
        <label for=\"descuento\" class=\"mb-0\">% Dto</label>
        <input type=\"text\" class=\"form-control text-right\" id=\"descuento\" v-model=\"descuento\" @input=\"calculaPrecio\">
      </div>
      <div class=\"col-6 col-sm-4 col-md-2\">
        <label for=\"precio\" class=\"mb-0\">Precio</label>
        <input type=\"text\" class=\"form-control text-right\" id=\"precio\" v-model=\"precio\" @input=\"calculaDescuento\">
      </div>
      <div class=\"col-12 col-sm-4 col-md-2\">
        <label for=\"product-quantity\" class=\"mb-0\">Unidades</label>
        <div class=\"product-quantity\">
          <input id=\"product-quantity\" type=\"text\" v-model=\"unidades\" class=\"form-control text-right mr-4\">
        </div>
      </div>
    </div>
    <div class=\"mt-2 canon\" v-if=\"art.lpi != 0\">
      <div>
        Precio+Canon:
        <span>\${precioCanonTxt}</span>
      </div>
      <div>
        Precio+Canon+IVA:
        <span>\${precioCanonIvaTxt}</span>
      </div>
    </div>
    <div class=\"mt-3 d-flex justify-content-end\">
      <div>
        <button type=\"button\" class=\"btn btn-primary add2cart mr-2\" @click=\"grabaNuevaLinea\">
          <i class=\"mdi mdi-content-save mr-2\"></i>Grabar línea
        </button>
        <button type=\"button\" class=\"btn btn-danger\" @click=\"close\">
          <i class=\"mdi mdi-close mr-2\"></i>Cancelar
        </button>
      </div>
    </div>
  </main>
{% endblock %}
{% block javascripts %}
  <script src=\"{{ asset('js/articulo-add.js') }}\"></script>
{% endblock %}
", "gestion/articulo-add.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\gestion\\articulo-add.html.twig");
    }
}
