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

/* tools/atributos.html.twig */
class __TwigTemplate_661fe18c9a28faee01c2ba9cad9f5d3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/atributos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/atributos.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 1, $this->source); })()), "data", [], "any", false, false, false, 1), "mostrar_atributos", [], "any", false, false, false, 1)) {
            // line 2
            echo "  <section class=\"attr-container\">
    ";
            // line 3
            if ((isset($context["attrChecked"]) || array_key_exists("attrChecked", $context) ? $context["attrChecked"] : (function () { throw new RuntimeError('Variable "attrChecked" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "      <a href=\"";
                echo (isset($context["cleanUrl"]) || array_key_exists("cleanUrl", $context) ? $context["cleanUrl"] : (function () { throw new RuntimeError('Variable "cleanUrl" does not exist.', 4, $this->source); })());
                echo "\" class=\"btn btn-sm btn-primary w-100 text-white mb-2\">
        <i class=\"mdi mdi-autorenew mr-2\"></i>Limpiar filtros
      </a>
    ";
            }
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 8, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
                // line 9
                echo "      <div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#list";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"list";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
        <span>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "title", [], "any", false, false, false, 10), "html", null, true);
                echo "</span>
        <i class=\"mdi mdi-chevron-up\"></i>
        <i class=\"mdi mdi-chevron-down\"></i>
      </div>
      <div class=\"collapse show\" role=\"tabpanel\" id=\"list";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
        <ul class=\"list-group\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attr"], "rows", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 17
                    echo "            <li class=\"list-group-item data\">
              ";
                    // line 18
                    if (((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 18, $this->source); })()) == "search")) {
                        // line 19
                        echo "                ";
                        $context["row_url"] = $this->extensions['App\Twig\AppExtension']->urlDecode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 19, $this->source); })()), ["q" => twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, false, 19)]));
                        // line 20
                        echo "              ";
                    } else {
                        // line 21
                        echo "                ";
                        $context["row_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 21, $this->source); })()), ["param" => twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, false, 21)]);
                        // line 22
                        echo "              ";
                    }
                    // line 23
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["row_url"]) || array_key_exists("row_url", $context) ? $context["row_url"] : (function () { throw new RuntimeError('Variable "row_url" does not exist.', 23, $this->source); })()), "html", null, true);
                    echo "\">
                <div class=\"item\">
                  <div>
                    ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["row"], "checked", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "                      <i class=\"mdi mdi-checkbox-outline mdi-24px\"></i>
                    ";
                    } else {
                        // line 29
                        echo "                      <i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
                    ";
                    }
                    // line 31
                    echo "                  </div>
                  <div class=\"tipoatributo\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nombre", [], "any", false, false, false, 32), "html", null, true);
                    echo "</div>
                  <div class=\"badge theme.bg\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "num_art", [], "any", false, false, false, 33), "html", null, true);
                    echo "</div>
                </div>
              </a>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        </ul>
      </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  </section>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tools/atributos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 41,  151 => 38,  140 => 33,  136 => 32,  133 => 31,  129 => 29,  125 => 27,  123 => 26,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  104 => 19,  102 => 18,  99 => 17,  95 => 16,  90 => 14,  83 => 10,  76 => 9,  58 => 8,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if config.data.mostrar_atributos %}
  <section class=\"attr-container\">
    {% if attrChecked %}
      <a href=\"{{ cleanUrl | raw }}\" class=\"btn btn-sm btn-primary w-100 text-white mb-2\">
        <i class=\"mdi mdi-autorenew mr-2\"></i>Limpiar filtros
      </a>
    {% endif %}
    {% for attr in attributes %}
      <div class=\"title titatributos\" data-toggle=\"collapse\" data-target=\"#list{{ loop.index }}\" aria-expanded=\"false\" aria-controls=\"list{{ loop.index }}\">
        <span>{{ attr.title }}</span>
        <i class=\"mdi mdi-chevron-up\"></i>
        <i class=\"mdi mdi-chevron-down\"></i>
      </div>
      <div class=\"collapse show\" role=\"tabpanel\" id=\"list{{ loop.index }}\">
        <ul class=\"list-group\">
          {% for row in attr.rows %}
            <li class=\"list-group-item data\">
              {% if routeName == 'search' %}
                {% set row_url = url(routeName, {'q': row.url }) | url_decode  %}
              {% else %}
                {% set row_url = url(routeName, {'param': row.url})  %}
              {% endif %}
              <a href=\"{{ row_url }}\">
                <div class=\"item\">
                  <div>
                    {% if row.checked %}
                      <i class=\"mdi mdi-checkbox-outline mdi-24px\"></i>
                    {% else %}
                      <i class=\"mdi mdi-checkbox-blank-outline mdi-24px\"></i>
                    {% endif %}
                  </div>
                  <div class=\"tipoatributo\">{{ row.nombre }}</div>
                  <div class=\"badge theme.bg\">{{ row.num_art }}</div>
                </div>
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>
    {% endfor %}
  </section>
{% endif %}
", "tools/atributos.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\tools\\atributos.html.twig");
    }
}
