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

/* admin/config/configmarcas.html.twig */
class __TwigTemplate_86965148568a67cec352e11b7a9f4121 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/configmarcas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/configmarcas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config/configmarcas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configurar Marcas";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br><br>
    <div class=\"container-gestion-opiniones\">
        <h2 class=\"config-marcas-title\">Subir Marcas Nuevas</h2>

        <!-- Formulario de subida de imágenes -->
        <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminconfig-marcas-add");
        echo "\" class=\"config-marcas-form\">
            <div class=\"form-group\">
                <label for=\"marca_imagen\" class=\"config-marcas-label\">Seleccionar Imagen</label>
                <input type=\"file\" id=\"marca_imagen\" name=\"marca_imagen\" accept=\"image/*\" required class=\"config-marcas-input\">
            </div>

            <button type=\"submit\" class=\"btn config-marcas-btn btn-primary-gestion-opiniones\">Subir Imagen</button>
        </form>

        <!-- Mensajes Flash -->
        <div class=\"config-marcas-flash-messages\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "                <div class=\"alert alert-success config-marcas-alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                <div class=\"alert alert-danger config-marcas-alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <br>
        <!-- Mostrar las imágenes existentes -->
        <h2 class=\"config-marcas-subtitle\">Imágenes Subidas</h2>
        <div class=\"config-marcas-gallery\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 34
            echo "                <div class=\"config-marcas-card\">
                    <div style=\"\">
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["imagen"], "imagen", [], "any", false, false, false, 36)), "html", null, true);
            echo "\" alt=\"Marca\" class=\"config-marcas-image\">
                    </div>
                    <form method=\"POST\" action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("configmarcas-delete", ["id" => twig_get_attribute($this->env, $this->source, $context["imagen"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"config-marcas-delete-form\">
                        <button type=\"submit\" class=\"btn btn-danger-gestion-opiniones \">Eliminar</button>
                    </form>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                <p class=\"config-marcas-empty\">No hay imágenes disponibles.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            
        </div>
        <br><br>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/configmarcas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 45,  167 => 43,  157 => 38,  152 => 36,  148 => 34,  143 => 33,  136 => 28,  127 => 26,  122 => 25,  113 => 23,  109 => 22,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Configurar Marcas{% endblock %}

{% block body %}
<br><br>
    <div class=\"container-gestion-opiniones\">
        <h2 class=\"config-marcas-title\">Subir Marcas Nuevas</h2>

        <!-- Formulario de subida de imágenes -->
        <form method=\"POST\" enctype=\"multipart/form-data\" action=\"{{ path('adminconfig-marcas-add') }}\" class=\"config-marcas-form\">
            <div class=\"form-group\">
                <label for=\"marca_imagen\" class=\"config-marcas-label\">Seleccionar Imagen</label>
                <input type=\"file\" id=\"marca_imagen\" name=\"marca_imagen\" accept=\"image/*\" required class=\"config-marcas-input\">
            </div>

            <button type=\"submit\" class=\"btn config-marcas-btn btn-primary-gestion-opiniones\">Subir Imagen</button>
        </form>

        <!-- Mensajes Flash -->
        <div class=\"config-marcas-flash-messages\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success config-marcas-alert\">{{ message }}</div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger config-marcas-alert\">{{ message }}</div>
            {% endfor %}
        </div>
        <br>
        <!-- Mostrar las imágenes existentes -->
        <h2 class=\"config-marcas-subtitle\">Imágenes Subidas</h2>
        <div class=\"config-marcas-gallery\">
            {% for imagen in imagenes %}
                <div class=\"config-marcas-card\">
                    <div style=\"\">
                    <img src=\"{{ asset(imagen.imagen) }}\" alt=\"Marca\" class=\"config-marcas-image\">
                    </div>
                    <form method=\"POST\" action=\"{{ path('configmarcas-delete', { id: imagen.id }) }}\" class=\"config-marcas-delete-form\">
                        <button type=\"submit\" class=\"btn btn-danger-gestion-opiniones \">Eliminar</button>
                    </form>
                </div>
            {% else %}
                <p class=\"config-marcas-empty\">No hay imágenes disponibles.</p>
            {% endfor %}
            
        </div>
        <br><br>
    </div>
{% endblock %}
", "admin/config/configmarcas.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\configmarcas.html.twig");
    }
}
