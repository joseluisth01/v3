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

/* admin/valoraciones.html.twig */
class __TwigTemplate_7b1ed56c9d6df626d978588ae4511f56 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/valoraciones.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/valoraciones.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/valoraciones.html.twig", 1);
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
        echo "  <div id=\"app-val\">
    <div class=\"d-flex justify-content-between mb-3\">
      <h4>OPINIONES / VALORACIONES</h4>
      <div>
        <select v-model=\"estado\" @change=\"leeValoraciones\" class=\"form-control\">
          <option value=\"-2\">Todas</option>
          <option value=\"0\">Sin valorar</option>
          <option value=\"1\">Aprobadas</option>
          <option value=\"-1\">Rechazadas</option>
        </select>
      </div>
    </div>
    <ul class=\"list-group\">
      <li v-for=\"(item, index) in valoraciones\" :key=\"item.id\" class=\"list-group-item\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"d-flex justify-content-between\">
              <h1 class=\" d-inline text-warning mr-2\" v-html=\" item.valoracion\"></h1>
              <div class=\"d-flex align-items-center\">
                <span class=\"font-sm mr-3\">Estado:</span>
                <i class=\"font-lg mdi\" :class=\"[item.estado > 0 ? 'mdi-thumb-up text-success' : (item.estado < 0 ? 'mdi-thumb-down text-danger': 'mdi-help-circle-outline')]\"></i>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col\">
                <div v-if=\"item.validacion_usuario != ''\" class=\"border border-dark mb-1 px-2 d-flex justify-content-between\">
                  <div class=\"d-inline-block\">
                    <span class=\"font-weight-bold mr-2\">Validado por:</span>\${item.validacion_usuario}
                  </div>
                  <span class=\"ml-3\">\${item.validacion_fecha}</span>
                </div>
                <div>
                  <span class=\"font-weight-bold mr-2\">\${ item.referencia }</span>
                  \${ item.articulo }
                </div>
                <div>
                  <span class=\"font-weight-bold mr-4\">\${ item.fecha }</span>
                  <span v-if=\"item.intervalo != ''\">{\${ item.intervalo })</span>
                </div>
                <div class=\"d-flex flex-wrap\">
                  <span class=\"font-weight-bold mr-2\">\${ item.cliente }</span>
                  <span class=\"mr-md-3\">(\${ item.cli_alias })</span>
                  <span v-if=\"item.verificado\" class=\"text-success font-weight-bold\">&check; Compra verificada</span>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Opinión</div>
                  <div>\${ item.opinion }</div>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Ventajas</div>
                  <div>\${ item.pros }</div>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Desventajas</div>
                  <div>\${ item.contras }</div>
                </div>
              </div>
              <div class=\"col-auto\">
                <img width=\"60\" :src=\"'../' +item.imagen\" :alt=\"item.articulo\">
              </div>
            </div>
          </div>
          <div class=\"col-auto\">
            <button class=\"btn btn-block btn-success\" @click=\"aprobar(item.id, index)\">
              <i class=\"mdi mdi-check mr-2\"></i>Aprobar
            </button>
            <button class=\"btn btn-block btn-danger\" @click=\"rechazar(item.id, index)\">
              <i class=\"mdi mdi-close-circle-outline mr-2\"></i>Rechazar
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "  <script>
    new Vue( {
      delimiters: [
        '\${', '}'
      ],
      el: '#app-val',
      data() {
        return { valoraciones: [], orden: 'new', estado: 0 };
      },
      created() {
        this.leeValoraciones();
      },
      methods: {
        path() {
          return T.path.apply( null, arguments );
        },
        leeValoraciones() {
          let self = this;
          \$.get( T.path( 'art-valoracion/list', this.estado, this.orden ), function( datos ) {
            self.valoraciones = datos;
          } );
        },
        aprobar( id, index ) {
          \$.post( this.path( 'admin/valoraciones/aprueba', id ), null, () => this.valoraciones[ index ].estado = 1 );
        },
        rechazar( id, index ) {
          \$.post( this.path( 'admin/valoraciones/rechaza', id ), null, () => this.valoraciones[ index ].estado = -1 );

        }
      }
    } );
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/valoraciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 79,  153 => 78,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block body %}
  <div id=\"app-val\">
    <div class=\"d-flex justify-content-between mb-3\">
      <h4>OPINIONES / VALORACIONES</h4>
      <div>
        <select v-model=\"estado\" @change=\"leeValoraciones\" class=\"form-control\">
          <option value=\"-2\">Todas</option>
          <option value=\"0\">Sin valorar</option>
          <option value=\"1\">Aprobadas</option>
          <option value=\"-1\">Rechazadas</option>
        </select>
      </div>
    </div>
    <ul class=\"list-group\">
      <li v-for=\"(item, index) in valoraciones\" :key=\"item.id\" class=\"list-group-item\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"d-flex justify-content-between\">
              <h1 class=\" d-inline text-warning mr-2\" v-html=\" item.valoracion\"></h1>
              <div class=\"d-flex align-items-center\">
                <span class=\"font-sm mr-3\">Estado:</span>
                <i class=\"font-lg mdi\" :class=\"[item.estado > 0 ? 'mdi-thumb-up text-success' : (item.estado < 0 ? 'mdi-thumb-down text-danger': 'mdi-help-circle-outline')]\"></i>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col\">
                <div v-if=\"item.validacion_usuario != ''\" class=\"border border-dark mb-1 px-2 d-flex justify-content-between\">
                  <div class=\"d-inline-block\">
                    <span class=\"font-weight-bold mr-2\">Validado por:</span>\${item.validacion_usuario}
                  </div>
                  <span class=\"ml-3\">\${item.validacion_fecha}</span>
                </div>
                <div>
                  <span class=\"font-weight-bold mr-2\">\${ item.referencia }</span>
                  \${ item.articulo }
                </div>
                <div>
                  <span class=\"font-weight-bold mr-4\">\${ item.fecha }</span>
                  <span v-if=\"item.intervalo != ''\">{\${ item.intervalo })</span>
                </div>
                <div class=\"d-flex flex-wrap\">
                  <span class=\"font-weight-bold mr-2\">\${ item.cliente }</span>
                  <span class=\"mr-md-3\">(\${ item.cli_alias })</span>
                  <span v-if=\"item.verificado\" class=\"text-success font-weight-bold\">&check; Compra verificada</span>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Opinión</div>
                  <div>\${ item.opinion }</div>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Ventajas</div>
                  <div>\${ item.pros }</div>
                </div>
                <div>
                  <div class=\"font-weight-bold font-sm\">Desventajas</div>
                  <div>\${ item.contras }</div>
                </div>
              </div>
              <div class=\"col-auto\">
                <img width=\"60\" :src=\"'../' +item.imagen\" :alt=\"item.articulo\">
              </div>
            </div>
          </div>
          <div class=\"col-auto\">
            <button class=\"btn btn-block btn-success\" @click=\"aprobar(item.id, index)\">
              <i class=\"mdi mdi-check mr-2\"></i>Aprobar
            </button>
            <button class=\"btn btn-block btn-danger\" @click=\"rechazar(item.id, index)\">
              <i class=\"mdi mdi-close-circle-outline mr-2\"></i>Rechazar
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
{% endblock %}
{% block javascripts %}
  <script>
    new Vue( {
      delimiters: [
        '\${', '}'
      ],
      el: '#app-val',
      data() {
        return { valoraciones: [], orden: 'new', estado: 0 };
      },
      created() {
        this.leeValoraciones();
      },
      methods: {
        path() {
          return T.path.apply( null, arguments );
        },
        leeValoraciones() {
          let self = this;
          \$.get( T.path( 'art-valoracion/list', this.estado, this.orden ), function( datos ) {
            self.valoraciones = datos;
          } );
        },
        aprobar( id, index ) {
          \$.post( this.path( 'admin/valoraciones/aprueba', id ), null, () => this.valoraciones[ index ].estado = 1 );
        },
        rechazar( id, index ) {
          \$.post( this.path( 'admin/valoraciones/rechaza', id ), null, () => this.valoraciones[ index ].estado = -1 );

        }
      }
    } );
  </script>
{% endblock %}
", "admin/valoraciones.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\valoraciones.html.twig");
    }
}
