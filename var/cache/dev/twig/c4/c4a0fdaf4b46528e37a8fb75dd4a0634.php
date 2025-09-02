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

/* admin/config/config-imagenes.html.twig */
class __TwigTemplate_c25e2710d211e5fdb2bb36fc368ae74c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-imagenes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config/config-imagenes.html.twig"));

        // line 1
        echo "<div class=\"text-center px-5\" id=\"app-images\">
    <h1 class=\"mt-2 text-center display-4\">Actualización caché imágenes</h1>
    <div class=\"lead mt-5 text-danger\">
        Este proceso es lento y puede crear una sobrecarga en el servidor
    </div>
    <div class=\"mb-5\">
        Si recarga la página o cierra el navegador el proceso se detendrá
    </div>

    <button type=\"button\" v-show=\"!enProceso\" class=\"btn btn-primary\" @click=\"start\">
        <div class=\"lead\">
            <i class=\"mdi mdi-play mr-3\"></i>Iniciar proceso
        </div>
    </button>
    <div v-show=\"finalizado\" class=\"lead mt-5 py-2 bg-success text-white\">
        Revisión de imágenes finalizada
    </div>
    <div v-show=\"enProceso\">
        <div class=\"text-center lead\">
            <i class=\"mdi mdi-loading mdi-spin mdi-24px mr-3\"></i>Comprobando imágenes...
        </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th></th>
                    <th>Total</th>
                    <th>Actual</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Artículos</td>
                    <td>\${totalArt}</td>
                    <td width=\"100\">\${artActual}</td>
                    <td width=\"100\">\${porcentArt} %</td>
                </tr>
                <tr>
                    <td>Cod. Barras</td>
                    <td>\${totalCB}</td>
                    <td width=\"100\">\${cbActual}</td>
                    <td width=\"100\">\${porcentCB} %</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/config/config-imagenes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-center px-5\" id=\"app-images\">
    <h1 class=\"mt-2 text-center display-4\">Actualización caché imágenes</h1>
    <div class=\"lead mt-5 text-danger\">
        Este proceso es lento y puede crear una sobrecarga en el servidor
    </div>
    <div class=\"mb-5\">
        Si recarga la página o cierra el navegador el proceso se detendrá
    </div>

    <button type=\"button\" v-show=\"!enProceso\" class=\"btn btn-primary\" @click=\"start\">
        <div class=\"lead\">
            <i class=\"mdi mdi-play mr-3\"></i>Iniciar proceso
        </div>
    </button>
    <div v-show=\"finalizado\" class=\"lead mt-5 py-2 bg-success text-white\">
        Revisión de imágenes finalizada
    </div>
    <div v-show=\"enProceso\">
        <div class=\"text-center lead\">
            <i class=\"mdi mdi-loading mdi-spin mdi-24px mr-3\"></i>Comprobando imágenes...
        </div>
        <table class=\"table\">
            <thead>
                <tr>
                    <th></th>
                    <th>Total</th>
                    <th>Actual</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Artículos</td>
                    <td>\${totalArt}</td>
                    <td width=\"100\">\${artActual}</td>
                    <td width=\"100\">\${porcentArt} %</td>
                </tr>
                <tr>
                    <td>Cod. Barras</td>
                    <td>\${totalCB}</td>
                    <td width=\"100\">\${cbActual}</td>
                    <td width=\"100\">\${porcentCB} %</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
", "admin/config/config-imagenes.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\config\\config-imagenes.html.twig");
    }
}
