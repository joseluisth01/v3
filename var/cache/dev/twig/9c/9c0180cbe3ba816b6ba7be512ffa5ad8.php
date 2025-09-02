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

/* admin/base.html.twig */
class __TwigTemplate_b9c4e5f1d20eb23de7c148adc1ffd94b extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"robots\" content=\"index, follow, all\">
    <meta name=\"googlebot\" content=\"index,follow, all\">
    <meta name=\"author\" content=\"CDC S.L.\">
    ";
        // line 10
        if (array_key_exists("config", $context)) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "headerMetadata", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["cfg"]) {
                // line 12
                echo "        <meta name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cfg"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cfg"], "content", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cfg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      <meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "nombreWeb", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
      <meta property=\"og:description\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "headerMetaDescription", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
      <meta property=\"og:type\" content=\"website\">
    ";
        }
        // line 18
        echo "    <title>
      ";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "    </title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/fileinput.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/temas/theme3.css"), "html", null, true);
        echo "\"> 
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    <style>
        :root {
            --theme-main-color: ";
        // line 38
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 38), "estilo", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "data", [], "any", false, true, false, 38), "estilo", [], "any", false, false, false, 38), "#04569B")) : ("#04569B")), "html", null, true);
        echo ";
        }
    </style>

    ";
        // line 43
        echo "    ";
        // line 44
        echo "    <!-- Valor de config.data.estilo: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "data", [], "any", false, false, false, 44), "estilo", [], "any", false, false, false, 44), "html", null, true);
        echo " -->


    </head>
    <body>
      ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "      <main>
        <aside id=\"leftsidebar\" class=\"sidebar\">
          <div class=\"user-info\">
            <div class=\"info-container\">
              <div class=\"name\">
                <h4 class=\"font-weight-bold\">Administración</h4>
                <h5 class=\"mt-2\">[
                  ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "getUserIdentifier", [], "any", false, false, false, 65), "html", null, true);
        echo "
                  ]</h5>
              </div>
            </div>

          </div>
          <div class=\"menu\">
            <ul class=\"list\">
              <li>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                  <i class=\"mdi mdi-home mdi-24px mr-2\"></i>
                  <span>Inicio</span>
                </a>
              </li>
              <li class=\"";
        // line 79
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "uri", [], "any", false, false, false, 79) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin"))) ? ("active") : (""));
        echo "\">
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
        echo "\">
                  <i class=\"mdi mdi-monitor-dashboard mdi-24px mr-2\"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class=\"";
        // line 85
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "uri", [], "any", false, false, false, 85) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-config"))) ? ("active") : (""));
        echo "\">
                <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-config");
        echo "\">
                  <i class=\"mdi mdi-cog mdi-24px mr-2\"></i>
                  <span>Configuración</span>
                </a>
              </li>
              <li class=\"";
        // line 91
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-textos"))) ? ("active") : (""));
        echo "\">
                <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-textos");
        echo "\">
                  <i class=\"mdi mdi-bulletin-board mdi-24px mr-2\"></i>
                  <span>CMS</span>
                </a>
              </li>
              ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "valoraciones", [], "any", false, false, false, 97)) {
            // line 98
            echo "                <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "uri", [], "any", false, false, false, 98) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-valoraciones"))) ? ("active") : (""));
            echo "\">
                  <a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-valoraciones");
            echo "\">
                    <i class=\"mdi mdi-book-edit-outline mdi-24px mr-2\"></i>
                    <span>Opiniones</span>
                  </a>
                </li>
              ";
        }
        // line 105
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "formularioRecogida", [], "any", false, false, false, 105)) {
            // line 106
            echo "                <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "uri", [], "any", false, false, false, 106) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-form-rec"))) ? ("active") : (""));
            echo "\">
                  <a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin-form-rec");
            echo "\">
                    <i class=\"mdi mdi-truck-fast-outline mdi-24px mr-2\"></i>
                    <span>Formulario Recogida</span>
                  </a>
                </li>
              ";
        }
        // line 113
        echo "            </ul>
          </div>
        </aside>
        <section class=\"content\"> ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "          </section>
        </main>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/fileinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/theme.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fileinput/locales/es.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/summernote/lang/summernote-es-ES.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/dayjs.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/utc.min.js"), "html", null, true);
        echo "\"></script>
        <script>
          dayjs.extend( window.dayjs_plugin_utc )
        </script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/zz_materialize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/anime.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/cash.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/component.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/collapsible.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 144
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "environment", [], "any", false, false, false, 144) == "dev")) {
            // line 145
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.js"), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // line 147
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.min.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 149
        echo "
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tools.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin/admin.js"), "html", null, true);
        echo "\"></script>
        <script>
          T.urlBase = \"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\";
          \$.fn.fileinput.defaults.language = 'es';
          \$.fn.fileinput.defaults.maxFileSize = T.maxFileSizeUpload;
        </script>
        ";
        // line 157
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 159
            echo "          ";
            $context["msg"] = twig_split_filter($this->env, $context["message"], "#", 2);
            // line 160
            echo "          ";
            if ((twig_length_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 160, $this->source); })())) == 2)) {
                // line 161
                echo "            <script>
              \$( () => T.modalOk( '";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 162, $this->source); })()), 0, [], "array", false, false, false, 162), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 162, $this->source); })()), 1, [], "array", false, false, false, 162), "html", null, true);
                echo "' ) );
            </script>
          ";
            } else {
                // line 165
                echo "            <script>
              \$( () => T.modalOk( '";
                // line 166
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "' ) );
            </script>
          ";
            }
            // line 169
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "      </body>
    </html>
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

        echo "Panel de Control -
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "nombreWeb", [], "any", false, false, false, 20), "html", null, true);
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
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

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "        <nav class=\"navbar theme-bg\">
          <div class=\"d-flex\">
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"ml-5\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "logo", [], "any", false, false, false, 53)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "nombreWeb", [], "any", false, false, false, 53), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "nombreWeb", [], "any", false, false, false, 53), "html", null, true);
        echo "\"></a>
          </div>
          <h5>Administración</h5>
        </nav>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
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

    // line 157
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
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 157,  517 => 116,  496 => 53,  491 => 50,  481 => 49,  463 => 35,  451 => 20,  439 => 19,  427 => 170,  421 => 169,  415 => 166,  412 => 165,  404 => 162,  401 => 161,  398 => 160,  395 => 159,  390 => 158,  388 => 157,  381 => 153,  376 => 151,  372 => 150,  369 => 149,  363 => 147,  357 => 145,  355 => 144,  350 => 142,  346 => 141,  342 => 140,  338 => 139,  333 => 137,  329 => 136,  322 => 132,  318 => 131,  314 => 130,  310 => 129,  306 => 128,  302 => 127,  297 => 125,  293 => 124,  289 => 123,  285 => 122,  281 => 121,  277 => 120,  273 => 119,  269 => 117,  267 => 116,  262 => 113,  253 => 107,  248 => 106,  245 => 105,  236 => 99,  231 => 98,  229 => 97,  221 => 92,  217 => 91,  209 => 86,  205 => 85,  197 => 80,  193 => 79,  185 => 74,  173 => 65,  164 => 58,  162 => 49,  153 => 44,  151 => 43,  144 => 38,  140 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  93 => 22,  91 => 19,  88 => 18,  82 => 15,  77 => 14,  66 => 12,  61 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"robots\" content=\"index, follow, all\">
    <meta name=\"googlebot\" content=\"index,follow, all\">
    <meta name=\"author\" content=\"CDC S.L.\">
    {% if config is defined %}
      {% for cfg in config.headerMetadata %}
        <meta name=\"{{ cfg.name }}\" content=\"{{ cfg.content }}\">
      {% endfor %}
      <meta property=\"og:site_name\" content=\"{{ config.nombreWeb }}\">
      <meta property=\"og:description\" content=\"{{config.headerMetaDescription }}\">
      <meta property=\"og:type\" content=\"website\">
    {% endif %}
    <title>
      {% block title %}Panel de Control -
        {{ config.nombreWeb }}
      {% endblock %}
    </title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/morris/morris.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fileinput/fileinput.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/summernote/summernote-bs4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme2.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/temas/theme3.css') }}\"> 
    {% block stylesheets %}{% endblock %}
    <style>
        :root {
            --theme-main-color: {{ config.data.estilo|default('#04569B') }};
        }
    </style>

    {# Temporalmente, muestra el valor de config.data.estilo #}
    {# Elimina esto después de verificar #}
    <!-- Valor de config.data.estilo: {{ config.data.estilo }} -->


    </head>
    <body>
      {% block header %}
        <nav class=\"navbar theme-bg\">
          <div class=\"d-flex\">
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"ml-5\" href=\"{{url('home')}}\"><img src=\"{{ asset(config.logo) }}\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\"></a>
          </div>
          <h5>Administración</h5>
        </nav>
      {% endblock %}
      <main>
        <aside id=\"leftsidebar\" class=\"sidebar\">
          <div class=\"user-info\">
            <div class=\"info-container\">
              <div class=\"name\">
                <h4 class=\"font-weight-bold\">Administración</h4>
                <h5 class=\"mt-2\">[
                  {{app.user.getUserIdentifier}}
                  ]</h5>
              </div>
            </div>

          </div>
          <div class=\"menu\">
            <ul class=\"list\">
              <li>
                <a href=\"{{path('home')}}\">
                  <i class=\"mdi mdi-home mdi-24px mr-2\"></i>
                  <span>Inicio</span>
                </a>
              </li>
              <li class=\"{{ app.request.uri == url('admin') ? 'active' :'' }}\">
                <a href=\"{{ url('admin') }}\">
                  <i class=\"mdi mdi-monitor-dashboard mdi-24px mr-2\"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class=\"{{ app.request.uri == url('admin-config') ? 'active' :'' }}\">
                <a href=\"{{ url('admin-config') }}\">
                  <i class=\"mdi mdi-cog mdi-24px mr-2\"></i>
                  <span>Configuración</span>
                </a>
              </li>
              <li class=\"{{ app.request.uri == url('admin-textos') ? 'active' :'' }}\">
                <a href=\"{{ url('admin-textos') }}\">
                  <i class=\"mdi mdi-bulletin-board mdi-24px mr-2\"></i>
                  <span>CMS</span>
                </a>
              </li>
              {% if config.valoraciones %}
                <li class=\"{{ app.request.uri == url('admin-valoraciones') ? 'active' :'' }}\">
                  <a href=\"{{ url('admin-valoraciones') }}\">
                    <i class=\"mdi mdi-book-edit-outline mdi-24px mr-2\"></i>
                    <span>Opiniones</span>
                  </a>
                </li>
              {% endif %}
              {% if config.formularioRecogida %}
                <li class=\"{{ app.request.uri == url('admin-form-rec') ? 'active' :'' }}\">
                  <a href=\"{{ url('admin-form-rec') }}\">
                    <i class=\"mdi mdi-truck-fast-outline mdi-24px mr-2\"></i>
                    <span>Formulario Recogida</span>
                  </a>
                </li>
              {% endif %}
            </ul>
          </div>
        </aside>
        <section class=\"content\"> {% block body %}{% endblock %}
          </section>
        </main>
        <script src=\"{{ asset('vendor/jquery/jquery-3.5.1.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/jquery/jquery.countTo.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/popper.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/fileinput/fileinput.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/fileinput/theme.js') }}\"></script>
        <script src=\"{{ asset('vendor/fileinput/locales/es.js') }}\"></script>

        <script src=\"{{ asset('vendor/morris/raphael.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/morris/morris.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/summernote/summernote-bs4.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/summernote/lang/summernote-es-ES.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/dayjs/dayjs.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/dayjs/utc.min.js') }}\"></script>
        <script>
          dayjs.extend( window.dayjs_plugin_utc )
        </script>
        <script src=\"{{ asset('vendor/materialize/zz_materialize.js') }}\"></script>
        <script src=\"{{ asset('vendor/materialize/anime.min.js') }}\"></script>

        <script src=\"{{ asset('vendor/materialize/cash.js') }}\"></script>
        <script src=\"{{ asset('vendor/materialize/component.js') }}\"></script>
        <script src=\"{{ asset('vendor/materialize/collapsible.js') }}\"></script>
        <script src=\"{{ asset('vendor/materialize/tabs.js') }}\"></script>

        {% if (app.environment == 'dev') %}
          <script src=\"{{ asset('vendor/vue/vue.js') }}\"></script>
        {% else %}
          <script src=\"{{ asset('vendor/vue/vue.min.js') }}\"></script>
        {% endif %}

        <script src=\"{{ asset('js/tools.js') }}\"></script>
        <script src=\"{{ asset('js/admin/admin.js') }}\"></script>
        <script>
          T.urlBase = \"{{ url('home') }}\";
          \$.fn.fileinput.defaults.language = 'es';
          \$.fn.fileinput.defaults.maxFileSize = T.maxFileSizeUpload;
        </script>
        {% block javascripts %}{% endblock %}
        {% for message in app.flashes('success') %}
          {% set msg = message|split('#', 2) %}
          {% if msg|length == 2 %}
            <script>
              \$( () => T.modalOk( '{{ msg[0] }}', '{{ msg[1] }}' ) );
            </script>
          {% else %}
            <script>
              \$( () => T.modalOk( '{{ message }}' ) );
            </script>
          {% endif %}
        {% endfor %}
      </body>
    </html>
", "admin/base.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\admin\\base.html.twig");
    }
}
