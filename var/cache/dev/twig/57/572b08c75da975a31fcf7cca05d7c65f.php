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

/* main/formulario_map.html.twig */
class __TwigTemplate_a3f66c4ddc329d5b9b568934d8827927 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/formulario_map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/formulario_map.html.twig"));

        // line 1
        echo "<div class=\"formulario_map_wrapper position-relative mt-0 mt-md-5 mb-5\">
\t<div class=\"formulario_map_container d-flex justify-content-center align-items-center\">
\t\t<div class=\"formulario_map_content\">
\t\t\t<div class=\"formulario_map_form_wrapper\">
\t\t\t\t<div class=\"formulario_map_form_content\">
\t\t\t\t\t<h2 class=\"formulario_map_title\">¿En qué Podemos Ayudarte?</h2>
\t\t\t\t\t<p class=\"formulario_map_description\">
\t\t\t\t\t\tSi tienes cualquier duda o necesitas asesoramiento, llámanos por teléfono o 
\t\t\t\t\t\trellena los siguientes campos, nos pondremos en contacto a la mayor brevedad posible:
\t\t\t\t\t</p>
\t\t\t\t\t<form class=\"formulario_map_form\">
\t\t\t\t\t\t<div class=\"formulario_map_form_group\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Nombre\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"formulario_map_form_group formulario_map_form_group_row\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Teléfono\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"formulario_map_form_group\">
\t\t\t\t\t\t\t<textarea placeholder=\"Mensaje\" class=\"formulario_map_textarea\" rows=\"4\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"politicasform d-flex justify-content-around align-items-center flex-column flex-md-row\">
\t\t\t\t\t\t\t<div class=\"formulario_map_form_group formulario_map_checkbox_group d-flex align-items-center\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"formulario_map_privacidad\" class=\"formulario_map_checkbox\" required>
\t\t\t\t\t\t\t\t<label for=\"formulario_map_privacidad\" class=\"formulario_map_checkbox_label\">Acepto la <a style=\"color:white\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos-privacidad");
        echo "\">Política de Privacidad</a></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"formulario_map_btn\" id=\"formulario_map_submit\" disabled>ENVIAR AHORA</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<iframe class=\"formulario_map_iframe\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.7212827041863!2d-4.779764964787397!3d37.86751204897616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d21e21d0bb123%3A0x5fc2d9f68d12ea29!2sCalzados%20Maximo%2020.%E2%9C%85%20Tienda%20de%20ropa%20y%20Zapater%C3%ADa%20en%20C%C3%B3rdoba.!5e1!3m2!1ses!2ses!4v1730882542567!5m2!1ses!2ses\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t</div>
\t</div>
</div>
<script>
// Seleccionar el checkbox y el botón
const checkbox = document.getElementById('formulario_map_privacidad');
const submitButton = document.getElementById('formulario_map_submit');

// Escuchar el evento 'change' del checkbox
checkbox.addEventListener('change', function () {
\t// Si el checkbox está marcado, habilitar el botón
\tsubmitButton.disabled = !checkbox.checked;
});

</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/formulario_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"formulario_map_wrapper position-relative mt-0 mt-md-5 mb-5\">
\t<div class=\"formulario_map_container d-flex justify-content-center align-items-center\">
\t\t<div class=\"formulario_map_content\">
\t\t\t<div class=\"formulario_map_form_wrapper\">
\t\t\t\t<div class=\"formulario_map_form_content\">
\t\t\t\t\t<h2 class=\"formulario_map_title\">¿En qué Podemos Ayudarte?</h2>
\t\t\t\t\t<p class=\"formulario_map_description\">
\t\t\t\t\t\tSi tienes cualquier duda o necesitas asesoramiento, llámanos por teléfono o 
\t\t\t\t\t\trellena los siguientes campos, nos pondremos en contacto a la mayor brevedad posible:
\t\t\t\t\t</p>
\t\t\t\t\t<form class=\"formulario_map_form\">
\t\t\t\t\t\t<div class=\"formulario_map_form_group\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Nombre\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"formulario_map_form_group formulario_map_form_group_row\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Teléfono\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\" class=\"formulario_map_input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"formulario_map_form_group\">
\t\t\t\t\t\t\t<textarea placeholder=\"Mensaje\" class=\"formulario_map_textarea\" rows=\"4\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"politicasform d-flex justify-content-around align-items-center flex-column flex-md-row\">
\t\t\t\t\t\t\t<div class=\"formulario_map_form_group formulario_map_checkbox_group d-flex align-items-center\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"formulario_map_privacidad\" class=\"formulario_map_checkbox\" required>
\t\t\t\t\t\t\t\t<label for=\"formulario_map_privacidad\" class=\"formulario_map_checkbox_label\">Acepto la <a style=\"color:white\" href=\"{{ path('textos-privacidad') }}\">Política de Privacidad</a></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"formulario_map_btn\" id=\"formulario_map_submit\" disabled>ENVIAR AHORA</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<iframe class=\"formulario_map_iframe\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.7212827041863!2d-4.779764964787397!3d37.86751204897616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d21e21d0bb123%3A0x5fc2d9f68d12ea29!2sCalzados%20Maximo%2020.%E2%9C%85%20Tienda%20de%20ropa%20y%20Zapater%C3%ADa%20en%20C%C3%B3rdoba.!5e1!3m2!1ses!2ses!4v1730882542567!5m2!1ses!2ses\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t</div>
\t</div>
</div>
<script>
// Seleccionar el checkbox y el botón
const checkbox = document.getElementById('formulario_map_privacidad');
const submitButton = document.getElementById('formulario_map_submit');

// Escuchar el evento 'change' del checkbox
checkbox.addEventListener('change', function () {
\t// Si el checkbox está marcado, habilitar el botón
\tsubmitButton.disabled = !checkbox.checked;
});

</script>
", "main/formulario_map.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\formulario_map.html.twig");
    }
}
