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

/* base.html.twig */
class __TwigTemplate_fda6cba2dc5c3a82f07aea3630e20a3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"robots\" content=\"index, follow, all\">
\t\t<meta name=\"googlebot\" content=\"index,follow, all\">
\t\t<meta name=\"author\" content=\"CDC S.L.\">
\t\t";
        // line 10
        if (array_key_exists("config", $context)) {
            // line 11
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "headerMetadata", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["cfg"]) {
                // line 12
                echo "\t\t\t\t<meta name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cfg"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cfg"], "content", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cfg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t<meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "nombreWeb", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
\t\t\t<meta property=\"og:description\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "headerMetaDescription", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t<meta property=\"og:type\" content=\"website\">
\t\t";
        }
        // line 18
        echo "\t\t<title>
\t\t\t";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "\t\t</title>
\t\t";
        // line 23
        if (array_key_exists("cleanUrl", $context)) {
            // line 24
            echo "\t\t\t<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["cleanUrl"]) || array_key_exists("cleanUrl", $context) ? $context["cleanUrl"] : (function () { throw new RuntimeError('Variable "cleanUrl" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\">
\t\t";
        } else {
            // line 26
            echo "\t\t\t<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "uri", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t\t";
        }
        // line 28
        echo "\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\" crossorigin>
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fancybox/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/touchspin/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("css/temas/" . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "estilo", [], "any", false, false, false, 34)) . ".css")), "html", null, true);
        echo "\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/popper.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validate/additional-methods.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fancybox/jquery.fancybox.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/touchspin/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/slide-menu/slide-menu.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/dayjs.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/utc.min.js"), "html", null, true);
        echo "\"></script>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back_ios\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios\"/>
\t\t";
        // line 52
        echo "\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">

\t\t";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "environment", [], "any", false, false, false, 54) == "dev")) {
            // line 55
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.js"), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // line 57
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.min.js"), "html", null, true);
            echo "\"></script>
\t\t";
        }
        // line 59
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tools.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "\" defer></script>
\t\t";
        // line 61
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "
\t\t<style>:root
\t\t{
\t\t\t--theme-main-color: ";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 65), "estilo", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 65), "estilo", [], "any", false, false, false, 65), "#04569B")) : ("#04569B")), "html", null, true);
        echo "
\t\t\t;
\t\t\t--theme-secondary-color: ";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 67), "color_secundario", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 67), "color_secundario", [], "any", false, false, false, 67), "#FF5733")) : ("#FF5733")), "html", null, true);
        echo "
\t\t\t;
\t\t\t--theme-tercer-color: ";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 69), "color_tercero", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 69), "color_tercero", [], "any", false, false, false, 69), "#E99712")) : ("#E99712")), "html", null, true);
        echo "
\t\t\t;
\t\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme2.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme3.css"), "html", null, true);
        echo "\">
";
        // line 77
        echo "\t";
        // line 78
        echo "\t<!-- Valor de config.data.estilo: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 78, $this->source); })()), "data", [], "any", false, false, false, 78), "estilo", [], "any", false, false, false, 78), "html", null, true);
        echo " -->
</head>
<body>
\t<a href=\"#\" id=\"scroll\" style=\"display: none;\" title=\"Subir\">
\t\t<span></span>
\t</a>
\t";
        // line 84
        $this->loadTemplate("header/header.html.twig", "base.html.twig", 84)->display($context);
        // line 85
        echo "\t";
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "\t";
        $this->loadTemplate("footer/footer.html.twig", "base.html.twig", 86)->display($context);
        // line 87
        echo "\t";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "cookies", [], "any", false, false, false, 87), "get", [0 => "v3web_cookies"], "method", false, false, false, 87))) {
            // line 88
            echo "\t\t<div class=\"cookie-info container-fluid\">
\t\t\t<div class=\"row align-items-cente w-100\">
\t\t\t\t<div class=\"col-12 col-lg-6 divtextocookie\">
\t\t\t\t\t<div>Utilizamos cookies para ofrecerte la mejor experiencia en nuestra web.</div>
\t\t\t\t\t<div>Puedes aprender más sobre qué cookies utilizamos o desactivarlas en los ajustes.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-6 d-flex justify-content-around divbotonescookies\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"btn-cookies-accept\">Aceptar todas</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"btn-cookies-reject\">Rechazar cookies</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" id=\"btn-cookies-config\">Personalizar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 102
        echo "
\t<script>
\t\tT.urlBase = \"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\";
\t</script>
\t";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "\t";
        // line 108
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "analytics", [], "any", false, false, false, 108) != "")) {
            // line 109
            echo "\t\t<script>
\t\t\tlet GA_MEASUREMENT_ID = \"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 110, $this->source); })()), "analytics", [], "any", false, false, false, 110), "html", null, true);
            echo "\";
\t\t</script>
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 112, $this->source); })()), "analytics", [], "any", false, false, false, 112), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/analytics.js"), "html", null, true);
            echo "\" defer></script>
\t";
        }
        // line 115
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            echo "\t\t";
            $context["msg"] = twig_split_filter($this->env, $context["message"], "#", 2);
            // line 117
            echo "\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
";
            // line 119
            if ((twig_length_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 119, $this->source); })())) == 2)) {
                // line 120
                echo "T.modalOk('";
                echo twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 120, $this->source); })()), 0, [], "array", false, false, false, 120);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 120, $this->source); })()), 1, [], "array", false, false, false, 120), "html", null, true);
                echo "');
";
            } else {
                // line 122
                echo "T.modalOk('";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "');";
            }
            // line 123
            echo "});
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "flashes", [0 => "newcli"], "method", false, false, false, 126), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["cli_code"]) {
            // line 127
            echo "\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\$.get('";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cliente-registro-confirmacion2", ["codigo" => $context["cli_code"]]), "html", null, true);
            echo "');
});
\t\t</script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli_code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t<!-- Bootstrap JS -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

</body></html></body></html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 20
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 106,  437 => 85,  419 => 61,  406 => 20,  396 => 19,  382 => 133,  372 => 129,  368 => 127,  363 => 126,  355 => 123,  350 => 122,  342 => 120,  340 => 119,  336 => 117,  333 => 116,  328 => 115,  323 => 113,  319 => 112,  314 => 110,  311 => 109,  308 => 108,  306 => 107,  304 => 106,  299 => 104,  295 => 102,  279 => 88,  276 => 87,  273 => 86,  270 => 85,  268 => 84,  258 => 78,  256 => 77,  252 => 75,  248 => 74,  244 => 73,  237 => 69,  232 => 67,  227 => 65,  222 => 62,  220 => 61,  214 => 60,  207 => 59,  201 => 57,  195 => 55,  193 => 54,  187 => 52,  179 => 46,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 28,  103 => 26,  97 => 24,  95 => 23,  92 => 22,  90 => 19,  87 => 18,  81 => 15,  76 => 14,  65 => 12,  60 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"robots\" content=\"index, follow, all\">
\t\t<meta name=\"googlebot\" content=\"index,follow, all\">
\t\t<meta name=\"author\" content=\"CDC S.L.\">
\t\t{% if config is defined %}
\t\t\t{% for cfg in config.headerMetadata %}
\t\t\t\t<meta name=\"{{ cfg.name }}\" content=\"{{ cfg.content }}\">
\t\t\t{% endfor %}
\t\t\t<meta property=\"og:site_name\" content=\"{{ config.nombreWeb }}\">
\t\t\t<meta property=\"og:description\" content=\"{{config.headerMetaDescription }}\">
\t\t\t<meta property=\"og:type\" content=\"website\">
\t\t{% endif %}
\t\t<title>
\t\t\t{% block title %}
\t\t\t\t{{ config.title }}
\t\t\t{% endblock %}
\t\t</title>
\t\t{% if cleanUrl is defined %}
\t\t\t<link rel=\"canonical\" href=\"{{ cleanUrl }}\">
\t\t{% else %}
\t\t\t<link rel=\"canonical\" href=\"{{ app.request.uri }}\">
\t\t{% endif %}
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\" crossorigin>
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('vendor/bootstrap/bootstrap.min.css') }}\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('vendor/fancybox/jquery.fancybox.min.css') }}\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('vendor/touchspin/jquery.bootstrap-touchspin.min.css') }}\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('css/main.css') }}?v={{ 'now'|date('Ymd') }}\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('css/temas/' ~ config.estilo ~ '.css') }}\">
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">
\t\t<script src=\"{{ asset('vendor/jquery/jquery-3.5.1.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/bootstrap/popper.min.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/bootstrap/bootstrap.min.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/jquery-validate/jquery.validate.min.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/jquery-validate/additional-methods.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/touchspin/jquery.bootstrap-touchspin.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/slide-menu/slide-menu.js') }}\" defer></script>
\t\t<script src=\"{{ asset('vendor/dayjs/dayjs.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/dayjs/utc.min.js') }}\"></script>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back_ios\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios\"/>
\t\t{# base.html.twig #}
\t\t<link rel=\"preload stylesheet\" as=\"style\" href=\"{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}\">

\t\t{% if (app.environment == 'dev') %}
\t\t\t<script src=\"{{ asset('vendor/vue/vue.js') }}\"></script>
\t\t{% else %}
\t\t\t<script src=\"{{ asset('vendor/vue/vue.min.js') }}\"></script>
\t\t{% endif %}
\t\t<script src=\"{{ asset('js/tools.js') }}?v={{ 'now'|date('Ymd') }}\"></script>
\t\t<script src=\"{{ asset('js/main.js') }}?v={{ 'now'|date('Ymd') }}\" defer></script>
\t\t{% block stylesheets %}{% endblock %}

\t\t<style>:root
\t\t{
\t\t\t--theme-main-color: {{config.data.estilo|default('#04569B')}}
\t\t\t;
\t\t\t--theme-secondary-color: {{config.data.color_secundario|default('#FF5733')}}
\t\t\t;
\t\t\t--theme-tercer-color: {{config.data.color_tercero|default('#E99712')}}
\t\t\t;
\t\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme2.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme3.css') }}\">
{# Temporalmente, muestra el valor de config.data.estilo #}
\t{# Elimina esto después de verificar #}
\t<!-- Valor de config.data.estilo: {{ config.data.estilo }} -->
</head>
<body>
\t<a href=\"#\" id=\"scroll\" style=\"display: none;\" title=\"Subir\">
\t\t<span></span>
\t</a>
\t{% include 'header/header.html.twig' %}
\t{% block body %}{% endblock %}
\t{% include 'footer/footer.html.twig' %}
\t{%if app.request.cookies.get('v3web_cookies') is empty %}
\t\t<div class=\"cookie-info container-fluid\">
\t\t\t<div class=\"row align-items-cente w-100\">
\t\t\t\t<div class=\"col-12 col-lg-6 divtextocookie\">
\t\t\t\t\t<div>Utilizamos cookies para ofrecerte la mejor experiencia en nuestra web.</div>
\t\t\t\t\t<div>Puedes aprender más sobre qué cookies utilizamos o desactivarlas en los ajustes.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-6 d-flex justify-content-around divbotonescookies\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"btn-cookies-accept\">Aceptar todas</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"btn-cookies-reject\">Rechazar cookies</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" id=\"btn-cookies-config\">Personalizar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}

\t<script>
\t\tT.urlBase = \"{{ url('home') }}\";
\t</script>
\t{% block javascripts %}{% endblock %}
\t{# <!-- Global site tag (gtag.js) - Google Analytics --> #}
\t{% if config.analytics != '' %}
\t\t<script>
\t\t\tlet GA_MEASUREMENT_ID = \"{{ config.analytics }}\";
\t\t</script>
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id={{ config.analytics }}\"></script>
\t\t<script src=\"{{ asset('js/analytics.js') }}\" defer></script>
\t{% endif %}
\t{% for message in app.flashes('success') %}
\t\t{% set msg = message|split('#', 2) %}
\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
{% if msg|length == 2 %}
T.modalOk('{{ msg[0]|raw }}', '{{ msg[1] }}');
{% else %}
T.modalOk('{{ message }}');{% endif %}
});
\t\t</script>
\t{% endfor %}
\t{% for cli_code in app.flashes('newcli')|slice(0,1) %}
\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\$.get('{{ url('cliente-registro-confirmacion2', { codigo: cli_code }) }}');
});
\t\t</script>
\t{% endfor %}
\t<!-- Bootstrap JS -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

</body></html></body></html></body></html>
", "base.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\base.html.twig");
    }
}
