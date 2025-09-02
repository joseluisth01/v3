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

/* main/familias.html.twig */
class __TwigTemplate_116ca996c6b5b502b8b0da804db8f37a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/familias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/familias.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\">
  <li class=\"menu-cat\" id=\"fam-menu-container\">
    <div class=\"fam-items\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familias"]) || array_key_exists("familias", $context) ? $context["familias"] : (function () { throw new RuntimeError('Variable "familias" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fam"]) {
            // line 5
            echo "        <div>
          <a class=\"title\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("familia-grid", ["param" => twig_get_attribute($this->env, $this->source, $context["fam"], "url", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "nombre", [], "any", false, false, false, 6), "html", null, true);
            echo "
            (";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fam"], "num_art", [], "any", false, false, false, 7), "html", null, true);
            echo ")</a>
          <ul class=\"list-unstyled mt-2\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fam"], "sub", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 10
                echo "              ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                <li class=\"service-box-v1\">
                  <a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subfamilia", ["param" => twig_get_attribute($this->env, $this->source, $context["sub"], "url", [], "any", false, false, false, 12)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "nombre", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a>
                </li>
              ";
                }
                // line 15
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "          </ul>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
  </li>
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/familias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  90 => 16,  84 => 15,  76 => 12,  73 => 11,  70 => 10,  66 => 9,  61 => 7,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"dropdown-menu\">
  <li class=\"menu-cat\" id=\"fam-menu-container\">
    <div class=\"fam-items\">
      {% for fam in familias %}
        <div>
          <a class=\"title\" href=\"{{ url('familia-grid', {param: fam.url}) }}\">{{ fam.nombre }}
            ({{ fam.num_art }})</a>
          <ul class=\"list-unstyled mt-2\">
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
  </li>
</ul>
", "main/familias.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\familias.html.twig");
    }
}
