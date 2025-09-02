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

/* admin/config/manage-opinions.html.twig */
class __TwigTemplate_d519315a63df06922ff950360dfa380d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/manage-opinions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/manage-opinions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config/manage-opinions.html.twig", 1);
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

        echo "Configuración Opiniones - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<br>
<div class=\"container-gestion-opiniones\">
    <h2>Gestión de Opiniones</h2>

    <!-- Botón de Salir -->
    <div class=\"btn-container-gestion-opiniones\">
        <button type=\"button\" class=\"btn btn-secondary-gestion-opiniones\" onclick=\"window.history.back();\">Salir</button>
    </div>

    <!-- Tabla de opiniones -->
    <table class=\"table-gestion-opiniones\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estrellas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opiniones"]) || array_key_exists("opiniones", $context) ? $context["opiniones"] : (function () { throw new RuntimeError('Variable "opiniones" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["opinion"], "rating", [], "any", false, false, false, 29)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                            ⭐
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </td>
                    <td>
                        <form method=\"post\" action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminmanage-opinions");
            echo "\">
                            <input type=\"hidden\" name=\"opinion_id\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                            <button type=\"submit\" class=\"btn btn-danger-gestion-opiniones\" onclick=\"return confirm('¿Seguro que deseas eliminar esta opinión?')\">Eliminar</button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <h4>AGREGAR NUEVA OPINIÓN</h4>
    <div class=\"form-group-gestion-opiniones row-gestion-opiniones\">
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_nombre\" class=\"label-gestion-opiniones\">Nombre</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_nombre\" id=\"opinion_nombre\" placeholder=\"Nombre del usuario\">
        </div>
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_tiempo\" class=\"label-gestion-opiniones\">Tiempo</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_tiempo\" id=\"opinion_tiempo\" placeholder=\"Ejemplo: hace 3 meses\">
        </div>
    </div>
    <div class=\"form-group-gestion-opiniones row-gestion-opiniones\">
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_rating\" class=\"label-gestion-opiniones\">Calificación</label>
            <input type=\"number\" class=\"input-gestion-opiniones\" name=\"opinion_rating\" id=\"opinion_rating\" min=\"1\" max=\"5\" placeholder=\"1 a 5\">
        </div>
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_avatar\" class=\"label-gestion-opiniones\">Avatar (letra)</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_avatar\" id=\"opinion_avatar\" maxlength=\"1\" placeholder=\"Ejemplo: N\">
        </div>
    </div>
    <div class=\"form-group-gestion-opiniones\">
        <label for=\"opinion_texto\" class=\"label-gestion-opiniones\">Texto de la opinión</label>
        <textarea class=\"textarea-gestion-opiniones\" name=\"opinion_texto\" id=\"opinion_texto\" rows=\"4\" placeholder=\"Escribe la opinión aquí\"></textarea>
    </div>
    <div class=\"form-group-gestion-opiniones\">
        <button type=\"button\" id=\"agregar_opinion_btn\" class=\"btn btn-primary-gestion-opiniones\">Agregar Opinión</button>
    </div>

    <script>
document.getElementById('agregar_opinion_btn').addEventListener('click', async () => {
    const nombre = document.querySelector('.input-gestion-opiniones#opinion_nombre').value;
    const tiempo = document.querySelector('.input-gestion-opiniones#opinion_tiempo').value;
    const rating = document.querySelector('.input-gestion-opiniones#opinion_rating').value;
    const avatar = document.querySelector('.input-gestion-opiniones#opinion_avatar').value;
    const texto = document.querySelector('.textarea-gestion-opiniones#opinion_texto').value;

    try {
        const response = await fetch('/v3/admin/add-opinion', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ nombre, tiempo, rating, avatar, texto }),
        });

        // Log para verificar el estado de la respuesta
        console.log('Estado de la respuesta:', response.status);

        if (response.ok) {
            const data = await response.json();

            location.reload(); // Recargar la página para reflejar los cambios
        } else {
            const errorData = await response.json();
            console.error('Error al agregar la opinión:', errorData);
            alert('Hubo un error al agregar la opinión: ' + (errorData.error || 'Desconocido'));
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
        alert('Hubo un error al conectar con el servidor.');
    }
});

</script>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/manage-opinions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 41,  141 => 35,  137 => 34,  133 => 32,  126 => 30,  122 => 29,  117 => 27,  114 => 26,  110 => 25,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Configuración Opiniones - {{ config.title }}{% endblock %}

{% block body %}
<br>
<div class=\"container-gestion-opiniones\">
    <h2>Gestión de Opiniones</h2>

    <!-- Botón de Salir -->
    <div class=\"btn-container-gestion-opiniones\">
        <button type=\"button\" class=\"btn btn-secondary-gestion-opiniones\" onclick=\"window.history.back();\">Salir</button>
    </div>

    <!-- Tabla de opiniones -->
    <table class=\"table-gestion-opiniones\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estrellas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for opinion in opiniones %}
                <tr>
                    <td>{{ opinion.nombre }}</td>
                    <td>
                        {% for i in 1..opinion.rating %}
                            ⭐
                        {% endfor %}
                    </td>
                    <td>
                        <form method=\"post\" action=\"{{ path('adminmanage-opinions') }}\">
                            <input type=\"hidden\" name=\"opinion_id\" value=\"{{ opinion.id }}\">
                            <button type=\"submit\" class=\"btn btn-danger-gestion-opiniones\" onclick=\"return confirm('¿Seguro que deseas eliminar esta opinión?')\">Eliminar</button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h4>AGREGAR NUEVA OPINIÓN</h4>
    <div class=\"form-group-gestion-opiniones row-gestion-opiniones\">
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_nombre\" class=\"label-gestion-opiniones\">Nombre</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_nombre\" id=\"opinion_nombre\" placeholder=\"Nombre del usuario\">
        </div>
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_tiempo\" class=\"label-gestion-opiniones\">Tiempo</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_tiempo\" id=\"opinion_tiempo\" placeholder=\"Ejemplo: hace 3 meses\">
        </div>
    </div>
    <div class=\"form-group-gestion-opiniones row-gestion-opiniones\">
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_rating\" class=\"label-gestion-opiniones\">Calificación</label>
            <input type=\"number\" class=\"input-gestion-opiniones\" name=\"opinion_rating\" id=\"opinion_rating\" min=\"1\" max=\"5\" placeholder=\"1 a 5\">
        </div>
        <div class=\"col-md-6-gestion-opiniones\">
            <label for=\"opinion_avatar\" class=\"label-gestion-opiniones\">Avatar (letra)</label>
            <input type=\"text\" class=\"input-gestion-opiniones\" name=\"opinion_avatar\" id=\"opinion_avatar\" maxlength=\"1\" placeholder=\"Ejemplo: N\">
        </div>
    </div>
    <div class=\"form-group-gestion-opiniones\">
        <label for=\"opinion_texto\" class=\"label-gestion-opiniones\">Texto de la opinión</label>
        <textarea class=\"textarea-gestion-opiniones\" name=\"opinion_texto\" id=\"opinion_texto\" rows=\"4\" placeholder=\"Escribe la opinión aquí\"></textarea>
    </div>
    <div class=\"form-group-gestion-opiniones\">
        <button type=\"button\" id=\"agregar_opinion_btn\" class=\"btn btn-primary-gestion-opiniones\">Agregar Opinión</button>
    </div>

    <script>
document.getElementById('agregar_opinion_btn').addEventListener('click', async () => {
    const nombre = document.querySelector('.input-gestion-opiniones#opinion_nombre').value;
    const tiempo = document.querySelector('.input-gestion-opiniones#opinion_tiempo').value;
    const rating = document.querySelector('.input-gestion-opiniones#opinion_rating').value;
    const avatar = document.querySelector('.input-gestion-opiniones#opinion_avatar').value;
    const texto = document.querySelector('.textarea-gestion-opiniones#opinion_texto').value;

    try {
        const response = await fetch('/v3/admin/add-opinion', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ nombre, tiempo, rating, avatar, texto }),
        });

        // Log para verificar el estado de la respuesta
        console.log('Estado de la respuesta:', response.status);

        if (response.ok) {
            const data = await response.json();

            location.reload(); // Recargar la página para reflejar los cambios
        } else {
            const errorData = await response.json();
            console.error('Error al agregar la opinión:', errorData);
            alert('Hubo un error al agregar la opinión: ' + (errorData.error || 'Desconocido'));
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
        alert('Hubo un error al conectar con el servidor.');
    }
});

</script>
</div>

{% endblock %}



", "admin/config/manage-opinions.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\manage-opinions.html.twig");
    }
}
