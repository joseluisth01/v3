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

/* articulo/articulo-valoracion.html.twig */
class __TwigTemplate_03787abc96f3528b85f0c8b93d31b384 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/articulo-valoracion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articulo/articulo-valoracion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articulo/articulo-valoracion.html.twig", 1);
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
        echo "  <main id=\"wrapper-rating\" class=\"container\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["weburl"]) || array_key_exists("weburl", $context) ? $context["weburl"] : (function () { throw new RuntimeError('Variable "weburl" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"font-lg text-center border border-dark mb-2 py-1\">Valoración producto</div>
    <div class=\"d-flex justify-content-around align-items-center\">
      <div>
        <div class=\"h3 font-weight-bold\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
        <div class=\"font-lg\">";
        // line 8
        echo $this->extensions['App\Twig\AppExtension']->formatPriceNotZero(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 8, $this->source); })()), "precio_iva", [], "any", false, false, false, 8));
        echo "</div>
      </div>
      <div>
        <img class=\"d-block d-md-none\" width=\"75\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 11, $this->source); })()), "imagen", [], "any", false, false, false, 11)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), "html", null, true);
        echo "\"/>
        <img class=\"d-none d-md-block\" width=\"120\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 12, $this->source); })()), "imagen", [], "any", false, false, false, 12)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "\"/>
      </div>
    </div>
    <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("art-valoracion-save");
        echo "\" method=\"POST\">
      <input type=\"hidden\" id=\"rating-referencia\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 16, $this->source); })()), "referencia", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/>
      <div class=\"d-flex flex-row flex-wrap\">
        <label class=\"align-self-center pr-2 pb-3 mb-0\">Valoración:</label>
        <div class=\"form-group rating rating-input\">
          <input type=\"radio\" name=\"rating\" value=\"5\" id=\"5\"/><label for=\"5\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"4\" id=\"4\"/><label for=\"4\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"3\" id=\"3\"/><label for=\"3\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"2\" id=\"2\"/><label for=\"2\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"1\" id=\"1\"/><label for=\"1\">&#x2606;</label>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12  col-md-6 form-group\">
          <label for=\"rating-alias\">Su nombre o seudónimo</label>
          <input type=\"text\" class=\"form-control\" id=\"rating-alias\" required>
          <small class=\"form-text text-muted\">Este nombre se mostrará en las valoraciones del artículo.</small>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 form-group\">
          <label for=\"rating-opinion\">Su opinión</label>
          <textarea class=\"form-control\" id=\"rating-opinion\" rows=\"4\" required></textarea>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 col-md-6 form-group\">
          <label for=\"rating-pros\">Ventajas (opcional)</label>
          <textarea class=\"form-control\" id=\"rating-pros\" rows=\"3\"></textarea>
        </div>
        <div class=\"col-12 col-md-6 form-group\">
          <label for=\"rating-contras\">Desventajas (opcional)</label>
          <textarea class=\"form-control\" id=\"rating-contras\" rows=\"3\"></textarea>
        </div>
      </div>
    </div>
  </form>
  <div class=\"mb-3 d-flex justify-content-around\">
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 53, $this->source); })()), "url", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-danger px-4\">
      <i class=\"mdi mdi-close-thick mr-2\"></i>Volver
    </a>
    <button type=\"button\" id=\"btn-save-rating\" class=\"btn btn-success px-3\">
      <i class=\"mdi mdi-send mr-2\"></i>Enviar opinión
    </button>
  </div>
</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "<script>
  \$( '#btn-save-rating' ).on( 'click', function() {
    let valor = \$( 'input[name=\"rating\"]:checked' ).val();
    if ( ! valor ) {
      T.modalOk( 'Debe valorar su opinión (1-5)', 'Verificación' );
      return;
    }
    if ( \$( '#rating-alias' ).isEmpty() ) {
      T.modalOk( 'Debe introducir su nombre o alias', 'Verificación' );
      return;
    }
    if ( \$( '#rating-opinion' ).isEmpty() ) {
      T.modalOk( 'Debe introducir su opinión', 'Verificación' );
      return;
    }

    let postData = {
      referencia: '";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 78, $this->source); })()), "referencia", [], "any", false, false, false, 78), "html", null, true);
        echo "',
      valoracion: valor,
      opinion: \$( '#rating-opinion' ).val(),
      alias: \$( '#rating-alias' ).val(),
      pros: \$( '#rating-pros' ).val(),
      contras: \$( '#rating-contras' ).val()
    };
    \$.post( T.path( 'art-valoracion/save' ), postData, function() {
      document.location.href =\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("articulo", ["weburl" => twig_get_attribute($this->env, $this->source, (isset($context["art"]) || array_key_exists("art", $context) ? $context["art"] : (function () { throw new RuntimeError('Variable "art" does not exist.', 86, $this->source); })()), "url", [], "any", false, false, false, 86)]), "html", null, true);
        echo "\";
    } );
  } );
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articulo/articulo-valoracion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 86,  192 => 78,  173 => 61,  163 => 60,  145 => 53,  105 => 16,  101 => 15,  93 => 12,  87 => 11,  81 => 8,  77 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main id=\"wrapper-rating\" class=\"container\" data-url=\"{{ weburl }}\">
    <div class=\"font-lg text-center border border-dark mb-2 py-1\">Valoración producto</div>
    <div class=\"d-flex justify-content-around align-items-center\">
      <div>
        <div class=\"h3 font-weight-bold\">{{ art.nombre }}</div>
        <div class=\"font-lg\">{{ art.precio_iva | pricenz }}</div>
      </div>
      <div>
        <img class=\"d-block d-md-none\" width=\"75\" src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.nombre }}\"/>
        <img class=\"d-none d-md-block\" width=\"120\" src=\"{{ asset(art.imagen) }}\" alt=\"{{ art.nombre }}\"/>
      </div>
    </div>
    <form action=\"{{ url('art-valoracion-save') }}\" method=\"POST\">
      <input type=\"hidden\" id=\"rating-referencia\" value=\"{{ art.referencia }}\"/>
      <div class=\"d-flex flex-row flex-wrap\">
        <label class=\"align-self-center pr-2 pb-3 mb-0\">Valoración:</label>
        <div class=\"form-group rating rating-input\">
          <input type=\"radio\" name=\"rating\" value=\"5\" id=\"5\"/><label for=\"5\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"4\" id=\"4\"/><label for=\"4\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"3\" id=\"3\"/><label for=\"3\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"2\" id=\"2\"/><label for=\"2\">&#x2606;</label>
          <input type=\"radio\" name=\"rating\" value=\"1\" id=\"1\"/><label for=\"1\">&#x2606;</label>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12  col-md-6 form-group\">
          <label for=\"rating-alias\">Su nombre o seudónimo</label>
          <input type=\"text\" class=\"form-control\" id=\"rating-alias\" required>
          <small class=\"form-text text-muted\">Este nombre se mostrará en las valoraciones del artículo.</small>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 form-group\">
          <label for=\"rating-opinion\">Su opinión</label>
          <textarea class=\"form-control\" id=\"rating-opinion\" rows=\"4\" required></textarea>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 col-md-6 form-group\">
          <label for=\"rating-pros\">Ventajas (opcional)</label>
          <textarea class=\"form-control\" id=\"rating-pros\" rows=\"3\"></textarea>
        </div>
        <div class=\"col-12 col-md-6 form-group\">
          <label for=\"rating-contras\">Desventajas (opcional)</label>
          <textarea class=\"form-control\" id=\"rating-contras\" rows=\"3\"></textarea>
        </div>
      </div>
    </div>
  </form>
  <div class=\"mb-3 d-flex justify-content-around\">
    <a href=\"{{ url('articulo', {weburl: art.url}) }}\" class=\"btn btn-danger px-4\">
      <i class=\"mdi mdi-close-thick mr-2\"></i>Volver
    </a>
    <button type=\"button\" id=\"btn-save-rating\" class=\"btn btn-success px-3\">
      <i class=\"mdi mdi-send mr-2\"></i>Enviar opinión
    </button>
  </div>
</main>{% endblock %}{% block javascripts %}
<script>
  \$( '#btn-save-rating' ).on( 'click', function() {
    let valor = \$( 'input[name=\"rating\"]:checked' ).val();
    if ( ! valor ) {
      T.modalOk( 'Debe valorar su opinión (1-5)', 'Verificación' );
      return;
    }
    if ( \$( '#rating-alias' ).isEmpty() ) {
      T.modalOk( 'Debe introducir su nombre o alias', 'Verificación' );
      return;
    }
    if ( \$( '#rating-opinion' ).isEmpty() ) {
      T.modalOk( 'Debe introducir su opinión', 'Verificación' );
      return;
    }

    let postData = {
      referencia: '{{ art.referencia }}',
      valoracion: valor,
      opinion: \$( '#rating-opinion' ).val(),
      alias: \$( '#rating-alias' ).val(),
      pros: \$( '#rating-pros' ).val(),
      contras: \$( '#rating-contras' ).val()
    };
    \$.post( T.path( 'art-valoracion/save' ), postData, function() {
      document.location.href =\"{{ url('articulo', {weburl: art.url}) }}\";
    } );
  } );
</script>{% endblock %}
", "articulo/articulo-valoracion.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\articulo\\articulo-valoracion.html.twig");
    }
}
