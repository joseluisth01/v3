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

/* main/categorias.html.twig */
class __TwigTemplate_9b05aee56aad859290e2592ee1bda09e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/categorias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/categorias.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu submenu2\" style=\"top:10px !important;\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 3
            echo "    <li class=\"has-submenu py-1 item-menu-cat\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
      ";
            // line 4
            $context["urlCat"] = (((twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 4) == "")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("categoria-grid", ["webUrl" => twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 4)])));
            // line 5
            echo "      <p style=\"\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["urlCat"]) || array_key_exists("urlCat", $context) ? $context["urlCat"] : (function () { throw new RuntimeError('Variable "urlCat" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-item d-flex align-items-center\" style=\"height:35px;\">
        
        <span>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nombre", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
      </a></p>
      <div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
        <div class=\"fam-items\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "fam", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
                // line 12
                echo "            <div>
              <a class=\"title\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 13), "html", null, true);
                echo "</a>
              <ul class=\"mt-2\">
                ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 16
                    echo "                  ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 16))) {
                        // line 17
                        echo "                    <li class=\"service-box-v1\">
                      <a href=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 18)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 18), "html", null, true);
                        echo "</a>
                    </li>
                  ";
                    }
                    // line 21
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "              </ul>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
      </div>
    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/categorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 29,  132 => 25,  124 => 22,  118 => 21,  110 => 18,  107 => 17,  104 => 16,  100 => 15,  93 => 13,  90 => 12,  86 => 11,  81 => 9,  76 => 7,  70 => 5,  68 => 4,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"dropdown-menu submenu2\" style=\"top:10px !important;\">
  {% for cat in categorias %}
    <li class=\"has-submenu py-1 item-menu-cat\" data-id=\"{{ loop.index }}\">
      {% set urlCat = cat.url == '' ? '#' : url('categoria-grid', {webUrl: cat.url}) %}
      <p style=\"\"><a href=\"{{ urlCat }}\" class=\"dropdown-item d-flex align-items-center\" style=\"height:35px;\">
        
        <span>{{ cat.nombre }}</span>
      </a></p>
      <div class=\"menu-cat dropdown-menu wrapper-fam-items submenu3\" id=\"wrapper-fam-items-{{ loop.index }}\">
        <div class=\"fam-items\">
          {% for fam in cat.fam %}
            <div>
              <a class=\"title\" href=\"{{ url('familia-grid', {param: fam.url}) }}\">{{ fam.nombre }}</a>
              <ul class=\"mt-2\">
                {% for sub in fam.sub %}
                  {% if sub.nombre is not empty %}
                    <li class=\"service-box-v1\">
                      <a href=\"{{ url('subfamilia', {param: sub.url}) }}\">{{ sub.nombre }}</a>
                    </li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>
          {% endfor %}
        </div>
      </div>
    </li>
  {% endfor %}
</ul>
", "main/categorias.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\categorias.html.twig");
    }
}
