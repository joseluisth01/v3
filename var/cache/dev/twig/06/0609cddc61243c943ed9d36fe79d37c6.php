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

/* admin/textos.html.twig */
class __TwigTemplate_4f2515d4343fac32ffd0d12204557d74 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/textos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/textos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/textos.html.twig", 1);
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
    .collapsible-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .collapsible-body,
    .collapsible-header:focus {
      background-color: white;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div class=\"d-flex justify-content-between mb-3\">
    <h4>CMS</h4>
    <button type=\"button\" class=\"btn btn-primary\" id=\"btn-add\">
      <i class=\"mdi mdi-text-box-plus-outline mr-3\"></i>Nuevo texto
    </button>
  </div>
  <div id=\"target-new-item\"></div>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["textos"]) || array_key_exists("textos", $context) ? $context["textos"] : (function () { throw new RuntimeError('Variable "textos" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "    <ul class=\"collapsible popout\">
      <li>
        <div class=\"collapsible-header\">
          ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "
          <div>
            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["item"], "politica_privacidad", [], "any", false, false, false, 30)) {
                // line 31
                echo "              <div class=\"badge badge-dark mr-1\">Política Privacidad</div>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 32
$context["item"], "politica_cookies", [], "any", false, false, false, 32)) {
                // line 33
                echo "              <div class=\"badge badge-dark mr-1\">Política Cookies</div>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 34
$context["item"], "condiciones_compra", [], "any", false, false, false, 34)) {
                // line 35
                echo "              <div class=\"badge badge-dark mr-1\">Condiciones Compra</div>
            ";
            }
            // line 37
            echo "
            ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["item"], "mostrar", [], "any", false, false, false, 38)) {
                // line 39
                echo "              <div class=\"badge badge-success\">Habilitado</div>
            ";
            } else {
                // line 41
                echo "              <div class=\"badge badge-danger\">Deshabilitado</div>
            ";
            }
            // line 43
            echo "          </div>
        </div>
        <div class=\"collapsible-body\">
          <form action=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-textos-save");
            echo "\" method=\"POST\">
            <div class=\"form-group\">
              <label for=\"nombre-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 48), "html", null, true);
            echo "\">Título</label>
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 49), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre", [], "any", false, false, false, 49), "html", null, true);
            echo "\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"url-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 52), "html", null, true);
            echo "\">URL amigable</label>
              <input type=\"text\" class=\"form-control\" name=\"web_url\" id=\"url-";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 53), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "web_url", [], "any", false, false, false, 53), "html", null, true);
            echo "\" required>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad-";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 58), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "politica_privacidad", [], "any", false, false, false, 58)) ? ("checked") : (""));
            echo ">
                  <label class=\"custom-control-label\" for=\"politica_privacidad-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 59), "html", null, true);
            echo "\">Política de Privacidad</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_cookies\" id=\"politica_cookies-";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 66), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "politica_cookies", [], "any", false, false, false, 66)) ? ("checked") : (""));
            echo ">
                  <label class=\"custom-control-label\" for=\"politica_cookies-";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 67), "html", null, true);
            echo "\">Política de Cookies</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"condiciones_compra\" id=\"condiciones_compra-";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 74), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "condiciones_compra", [], "any", false, false, false, 74)) ? ("checked") : (""));
            echo ">
                  <label class=\"custom-control-label\" for=\"condiciones_compra-";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 75), "html", null, true);
            echo "\">Condiciones de compra</label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"texto-";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 80), "html", null, true);
            echo "\">Texto</label>
              <textarea name=\"texto\" id=\"texto-";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 81), "html", null, true);
            echo "\" class=\"form-control summernote\">
                ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "texto", [], "any", false, false, false, 82), "html", null, true);
            echo "
              </textarea>
            </div>
            <input type=\"hidden\" name=\"codigo\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"mdi mdi-content-save mr-3\"></i>Guardar
              </button>
              ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["item"], "mostrar", [], "any", false, false, false, 90)) {
                // line 91
                echo "                <button type=\"button\" class=\"btn btn-warning mx-3 18px btn-change\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 91), "html", null, true);
                echo "\">
                  <i class=\"mdi mdi-checkbox-marked-outline mr-3\"></i>Desactivar
                </button>
              ";
            } else {
                // line 95
                echo "                <button type=\"button\" class=\"btn btn-primary mx-3 18px btn-change\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 95), "html", null, true);
                echo "\">
                  <i class=\"mdi mdi-checkbox-marked-outline mr-3\"></i>Activar
                </button>
              ";
            }
            // line 99
            echo "              <button type=\"button\" class=\"btn btn-danger btn-delete\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "codigo", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                <i class=\"mdi mdi-text-box-remove mr-3\"></i>Eliminar
              </button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "  <template id=\"template-new-item\">
    <ul class=\"collapsible popout\" id=\"new-item\">
      <li>
        <div class=\"collapsible-header\">[-Nuevo texto-]</div>
        <div class=\"collapsible-body\">
          <form action=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-textos-save");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
              <label for=\"nombre-0\">Título</label>
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre-0\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"url-0\">URL amigable</label>
              <input type=\"text\" class=\"form-control\" name=\"web_url\" id=\"url-0\" value=\"\" required>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad-0\">
                  <label class=\"custom-control-label\" for=\"politica_privacidad-0\">Política de Privacidad</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_cookies\" id=\"politica_cookies-0\">
                  <label class=\"custom-control-label\" for=\"politica_cookies-0\">Política de Cookies</label>
                </div>
              </div>
            </div>
            <input type=\"hidden\" name=\"codigo\" value=\"0\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-success mr-3\">
                <i class=\"mdi mdi-content-save mr-3\"></i>Guardar</button>
              <button type=\"button\" class=\"btn btn-danger btn-delete\" data-id=\"0\">
                <i class=\"mdi mdi-text-box-remove mr-3\"></i>Eliminar</button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </template>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "  <script>
    \$( function() {
      \$( '.collapsible' ).collapsible();
      \$( '.summernote' ).summernote( { lang: 'es-ES' } );

      \$( document ).on( 'submit', 'form', function() {
        T.loading();
        return true;
      } );

      \$( '.btn-change' ).on( 'click', function() {
        let id = \$( this ).data( 'id' ),
          postData = {
            'id': id,
            'verif': T.primeNumber( id )
          };
        T.loading();
        \$.post( T.path( 'admin/textos-change' ), postData, () => location.reload() );
      } );

      \$( document ).on( 'click', '.btn-delete', function() {
        let id = \$( this ).data( 'id' );
        if ( id === 0 ) {
          \$( '#new-item' ).remove();
          \$( '#btn-add' ).prop( 'disabled', false );
          return;
        }

        T.modalYesNo( '¿ Desea borrar el texto ?', 'Textos CMS', function() {
          T.loading();
          let postData = {
            'id': id,
            'verif': T.primeNumber( id )
          };
          \$.post( T.path( 'admin/textos-delete' ), postData, () => location.reload() );
        } );
      } );

      \$( '#btn-add' ).on( 'click', function() {
        \$( '#target-new-item' ).html( \$( '#template-new-item' ).html() );
        \$( '#new-item' ).collapsible().collapsible( 'open' );
        \$( '#btn-add' ).prop( 'disabled', true );
      } )
    } );
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/textos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 152,  347 => 151,  299 => 113,  292 => 108,  276 => 99,  268 => 95,  260 => 91,  258 => 90,  250 => 85,  244 => 82,  240 => 81,  236 => 80,  228 => 75,  222 => 74,  212 => 67,  206 => 66,  196 => 59,  190 => 58,  180 => 53,  176 => 52,  168 => 49,  164 => 48,  159 => 46,  154 => 43,  150 => 41,  146 => 39,  144 => 38,  141 => 37,  137 => 35,  135 => 34,  132 => 33,  130 => 32,  127 => 31,  125 => 30,  120 => 28,  115 => 25,  111 => 24,  102 => 17,  92 => 16,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block stylesheets %}
  <style>
    .collapsible-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .collapsible-body,
    .collapsible-header:focus {
      background-color: white;
    }
  </style>
{% endblock %}
{% block body %}
  <div class=\"d-flex justify-content-between mb-3\">
    <h4>CMS</h4>
    <button type=\"button\" class=\"btn btn-primary\" id=\"btn-add\">
      <i class=\"mdi mdi-text-box-plus-outline mr-3\"></i>Nuevo texto
    </button>
  </div>
  <div id=\"target-new-item\"></div>
  {% for item in textos %}
    <ul class=\"collapsible popout\">
      <li>
        <div class=\"collapsible-header\">
          {{ item.nombre }}
          <div>
            {% if item.politica_privacidad %}
              <div class=\"badge badge-dark mr-1\">Política Privacidad</div>
            {% elseif item.politica_cookies %}
              <div class=\"badge badge-dark mr-1\">Política Cookies</div>
            {% elseif item.condiciones_compra %}
              <div class=\"badge badge-dark mr-1\">Condiciones Compra</div>
            {% endif %}

            {% if item.mostrar %}
              <div class=\"badge badge-success\">Habilitado</div>
            {% else %}
              <div class=\"badge badge-danger\">Deshabilitado</div>
            {% endif %}
          </div>
        </div>
        <div class=\"collapsible-body\">
          <form action=\"{{ url('admin-textos-save') }}\" method=\"POST\">
            <div class=\"form-group\">
              <label for=\"nombre-{{ item.codigo }}\">Título</label>
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre-{{ item.codigo }}\" value=\"{{ item.nombre }}\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"url-{{ item.codigo }}\">URL amigable</label>
              <input type=\"text\" class=\"form-control\" name=\"web_url\" id=\"url-{{ item.codigo }}\" value=\"{{ item.web_url }}\" required>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad-{{ item.codigo }}\" {{ item.politica_privacidad ? 'checked' : '' }}>
                  <label class=\"custom-control-label\" for=\"politica_privacidad-{{ item.codigo }}\">Política de Privacidad</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_cookies\" id=\"politica_cookies-{{ item.codigo }}\" {{ item.politica_cookies ? 'checked' : '' }}>
                  <label class=\"custom-control-label\" for=\"politica_cookies-{{ item.codigo }}\">Política de Cookies</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"condiciones_compra\" id=\"condiciones_compra-{{ item.codigo }}\" {{ item.condiciones_compra ? 'checked' : '' }}>
                  <label class=\"custom-control-label\" for=\"condiciones_compra-{{ item.codigo }}\">Condiciones de compra</label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"texto-{{ item.codigo }}\">Texto</label>
              <textarea name=\"texto\" id=\"texto-{{ item.codigo }}\" class=\"form-control summernote\">
                {{ item.texto }}
              </textarea>
            </div>
            <input type=\"hidden\" name=\"codigo\" value=\"{{ item.codigo }}\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"mdi mdi-content-save mr-3\"></i>Guardar
              </button>
              {% if item.mostrar %}
                <button type=\"button\" class=\"btn btn-warning mx-3 18px btn-change\" data-id=\"{{ item.codigo }}\">
                  <i class=\"mdi mdi-checkbox-marked-outline mr-3\"></i>Desactivar
                </button>
              {% else %}
                <button type=\"button\" class=\"btn btn-primary mx-3 18px btn-change\" data-id=\"{{ item.codigo }}\">
                  <i class=\"mdi mdi-checkbox-marked-outline mr-3\"></i>Activar
                </button>
              {% endif %}
              <button type=\"button\" class=\"btn btn-danger btn-delete\" data-id=\"{{ item.codigo }}\">
                <i class=\"mdi mdi-text-box-remove mr-3\"></i>Eliminar
              </button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  {% endfor %}
  <template id=\"template-new-item\">
    <ul class=\"collapsible popout\" id=\"new-item\">
      <li>
        <div class=\"collapsible-header\">[-Nuevo texto-]</div>
        <div class=\"collapsible-body\">
          <form action=\"{{ path('admin-textos-save') }}\" method=\"POST\">
            <div class=\"form-group\">
              <label for=\"nombre-0\">Título</label>
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre-0\" value=\"\" required>
            </div>
            <div class=\"form-group\">
              <label for=\"url-0\">URL amigable</label>
              <input type=\"text\" class=\"form-control\" name=\"web_url\" id=\"url-0\" value=\"\" required>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_privacidad\" id=\"politica_privacidad-0\">
                  <label class=\"custom-control-label\" for=\"politica_privacidad-0\">Política de Privacidad</label>
                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col\">
                <div class=\"custom-control custom-switch\">
                  <input type=\"checkbox\" class=\"custom-control-input\" name=\"politica_cookies\" id=\"politica_cookies-0\">
                  <label class=\"custom-control-label\" for=\"politica_cookies-0\">Política de Cookies</label>
                </div>
              </div>
            </div>
            <input type=\"hidden\" name=\"codigo\" value=\"0\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-success mr-3\">
                <i class=\"mdi mdi-content-save mr-3\"></i>Guardar</button>
              <button type=\"button\" class=\"btn btn-danger btn-delete\" data-id=\"0\">
                <i class=\"mdi mdi-text-box-remove mr-3\"></i>Eliminar</button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </template>
{% endblock %}
{% block javascripts %}
  <script>
    \$( function() {
      \$( '.collapsible' ).collapsible();
      \$( '.summernote' ).summernote( { lang: 'es-ES' } );

      \$( document ).on( 'submit', 'form', function() {
        T.loading();
        return true;
      } );

      \$( '.btn-change' ).on( 'click', function() {
        let id = \$( this ).data( 'id' ),
          postData = {
            'id': id,
            'verif': T.primeNumber( id )
          };
        T.loading();
        \$.post( T.path( 'admin/textos-change' ), postData, () => location.reload() );
      } );

      \$( document ).on( 'click', '.btn-delete', function() {
        let id = \$( this ).data( 'id' );
        if ( id === 0 ) {
          \$( '#new-item' ).remove();
          \$( '#btn-add' ).prop( 'disabled', false );
          return;
        }

        T.modalYesNo( '¿ Desea borrar el texto ?', 'Textos CMS', function() {
          T.loading();
          let postData = {
            'id': id,
            'verif': T.primeNumber( id )
          };
          \$.post( T.path( 'admin/textos-delete' ), postData, () => location.reload() );
        } );
      } );

      \$( '#btn-add' ).on( 'click', function() {
        \$( '#target-new-item' ).html( \$( '#template-new-item' ).html() );
        \$( '#new-item' ).collapsible().collapsible( 'open' );
        \$( '#btn-add' ).prop( 'disabled', true );
      } )
    } );
  </script>
{% endblock %}
", "admin/textos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\textos.html.twig");
    }
}
