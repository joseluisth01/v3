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

/* gestion/base.html.twig */
class __TwigTemplate_e1538637cb20b942c4380bda9cca1cd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/base.html.twig"));

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
        // line 23
        echo "    </title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/datatables.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/touchspin/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("css/temas/" . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "estilo", [], "any", false, false, false, 31)) . ".css")), "html", null, true);
        echo "\">

    \t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-validate/additional-methods.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/touchspin/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/dayjs.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dayjs/utc.min.js"), "html", null, true);
        echo "\"></script>
    <script>
      dayjs.extend( window.dayjs_plugin_utc )
    </script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/zz_materialize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/anime.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/cash.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/component.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/collapsible.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/materialize/tabs.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "environment", [], "any", false, false, false, 54) == "dev")) {
            // line 55
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 57
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vue/vue.min.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 59
        echo "
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tools.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin/admin.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 63
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
        echo "  </head>
  <body>
    ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "    <main>
      <aside id=\"leftsidebar\" class=\"sidebar\">
        <div class=\"user-info\">
          <div class=\"info-container\">
            <div class=\"name\">
              <h4 class=\"font-weight-bold\">Gestión</h4>
              <h5 class=\"mt-2\">[
                ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "getUserIdentifier", [], "any", false, false, false, 82), "html", null, true);
        echo "
                ]</h5>
            </div>
          </div>
        </div>
        <div class=\"menu\">
          <ul class=\"list\">
            <li>
              <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">
                <i class=\"mdi mdi-home mdi-24px mr-2\"></i>
                <span>Inicio</span>
              </a>
            </li>
            <li class=\"";
        // line 95
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "pathinfo", [], "any", false, false, false, 95) == "/gestion")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion");
        echo "\">
                <i class=\"mdi mdi-point-of-sale mdi-24px mr-2\"></i>
                <span>Ventas</span>
              </a>
            </li>
            <li class=\"";
        // line 101
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "pathinfo", [], "any", false, false, false, 101) == "/gestion/carritos/lista")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("gestion-carritos-lista");
        echo "\">
                <i class=\"mdi mdi-cart-arrow-right mdi-24px mr-2\"></i>
                <span>Carritos activos</span>
              </a>
            </li>
            <li class=\"";
        // line 107
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, false, 107), "pathinfo", [], "any", false, false, false, 107) == "/documentos/2")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 2]);
        echo "\">
                <i class=\"mdi mdi-clipboard-outline mdi-24px mr-2\"></i>
                <span>Pedidos</span>
              </a>
            </li>
            <li class=\"";
        // line 113
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "pathinfo", [], "any", false, false, false, 113) == "/documentos/4")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 4]);
        echo "\">
                <i class=\"mdi mdi-clipboard-text-outline mdi-24px mr-2\"></i>
                <span>Albaranes</span>
              </a>
            </li>
            <li class=\"";
        // line 119
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "request", [], "any", false, false, false, 119), "pathinfo", [], "any", false, false, false, 119) == "/documentos/8")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("documentos", ["tipo" => 8]);
        echo "\">
                <i class=\"mdi mdi-clipboard-check-outline mdi-24px mr-2\"></i>
                <span>Facturas</span>
              </a>
            </li>
            <li class=\"";
        // line 125
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "pathinfo", [], "any", false, false, false, 125) == "/documentos/8")) ? ("active") : (""));
        echo "\">
              <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("recogida");
        echo "\">
                <i class=\"mdi mdi-text-box-outline mr-1\"></i>
                <span>Formulario de recogida</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <section class=\"content\"> ";
        // line 134
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "        </section>
      </main>
      <script>
        T.urlBase = \"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\";
      </script>
      ";
        // line 140
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 142
            echo "        ";
            $context["msg"] = twig_split_filter($this->env, $context["message"], "#", 2);
            // line 143
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 143, $this->source); })())) == 2)) {
                // line 144
                echo "          <script>
            \$( () => T.modalOk( '";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 145, $this->source); })()), 0, [], "array", false, false, false, 145), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 145, $this->source); })()), 1, [], "array", false, false, false, 145), "html", null, true);
                echo "' ) );
          </script>
        ";
            } else {
                // line 148
                echo "          <script>
            \$( () => T.modalOk( '";
                // line 149
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "' ) );
          </script>
        ";
            }
            // line 152
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "    </body>
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

        // line 20
        echo "        Gestión -
        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "nombreWeb", [], "any", false, false, false, 21), "html", null, true);
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
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

    // line 66
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 67
        echo "      <nav class=\"navbar theme-bg\">
        <div class=\"d-flex\">
          <a href=\"javascript:void(0);\" class=\"bars\"></a>
          <a class=\"ml-5\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "logo", [], "any", false, false, false, 70)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "nombreWeb", [], "any", false, false, false, 70), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "nombreWeb", [], "any", false, false, false, 70), "html", null, true);
        echo "\"></a>
        </div>
        <h5>Gestión</h5>
      </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 134
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

    // line 140
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
        return "gestion/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 140,  471 => 134,  450 => 70,  445 => 67,  435 => 66,  417 => 63,  405 => 21,  402 => 20,  392 => 19,  380 => 153,  374 => 152,  368 => 149,  365 => 148,  357 => 145,  354 => 144,  351 => 143,  348 => 142,  343 => 141,  341 => 140,  336 => 138,  331 => 135,  329 => 134,  318 => 126,  314 => 125,  306 => 120,  302 => 119,  294 => 114,  290 => 113,  282 => 108,  278 => 107,  270 => 102,  266 => 101,  258 => 96,  254 => 95,  246 => 90,  235 => 82,  226 => 75,  224 => 66,  220 => 64,  218 => 63,  213 => 61,  209 => 60,  206 => 59,  200 => 57,  194 => 55,  192 => 54,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  123 => 33,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  93 => 23,  91 => 19,  88 => 18,  82 => 15,  77 => 14,  66 => 12,  61 => 11,  59 => 10,  48 => 1,);
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
      {% block title %}
        Gestión -
        {{ config.nombreWeb }}
      {% endblock %}
    </title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/datatables/datatables.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/touchspin/jquery.bootstrap-touchspin.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/temas/' ~ config.estilo ~ '.css') }}\">

    \t<link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">

    <script src=\"{{ asset('vendor/jquery/jquery-3.5.1.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/popper.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-validate/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-validate/additional-methods.js') }}\"></script>
    <script src=\"{{ asset('vendor/touchspin/jquery.bootstrap-touchspin.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables/datatables.min.js') }}\"></script>
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

    {% block stylesheets %}{% endblock %}
  </head>
  <body>
    {% block header %}
      <nav class=\"navbar theme-bg\">
        <div class=\"d-flex\">
          <a href=\"javascript:void(0);\" class=\"bars\"></a>
          <a class=\"ml-5\" href=\"{{url('home')}}\"><img src=\"{{ asset(config.logo) }}\" title=\"{{ config.nombreWeb}}\" alt=\"{{config.nombreWeb}}\"></a>
        </div>
        <h5>Gestión</h5>
      </nav>
    {% endblock %}
    <main>
      <aside id=\"leftsidebar\" class=\"sidebar\">
        <div class=\"user-info\">
          <div class=\"info-container\">
            <div class=\"name\">
              <h4 class=\"font-weight-bold\">Gestión</h4>
              <h5 class=\"mt-2\">[
                {{app.user.getUserIdentifier}}
                ]</h5>
            </div>
          </div>
        </div>
        <div class=\"menu\">
          <ul class=\"list\">
            <li>
              <a href=\"{{url('home')}}\">
                <i class=\"mdi mdi-home mdi-24px mr-2\"></i>
                <span>Inicio</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/gestion' ? 'active' :'' }}\">
              <a href=\"{{url('gestion')}}\">
                <i class=\"mdi mdi-point-of-sale mdi-24px mr-2\"></i>
                <span>Ventas</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/gestion/carritos/lista' ? 'active' :'' }}\">
              <a href=\"{{url('gestion-carritos-lista')}}\">
                <i class=\"mdi mdi-cart-arrow-right mdi-24px mr-2\"></i>
                <span>Carritos activos</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/documentos/2' ? 'active' :'' }}\">
              <a href=\"{{url('documentos',{'tipo': 2})}}\">
                <i class=\"mdi mdi-clipboard-outline mdi-24px mr-2\"></i>
                <span>Pedidos</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/documentos/4' ? 'active' :'' }}\">
              <a href=\"{{url('documentos',{'tipo': 4})}}\">
                <i class=\"mdi mdi-clipboard-text-outline mdi-24px mr-2\"></i>
                <span>Albaranes</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/documentos/8' ? 'active' :'' }}\">
              <a href=\"{{url('documentos',{'tipo': 8})}}\">
                <i class=\"mdi mdi-clipboard-check-outline mdi-24px mr-2\"></i>
                <span>Facturas</span>
              </a>
            </li>
            <li class=\"{{ app.request.pathinfo == '/documentos/8' ? 'active' :'' }}\">
              <a href=\"{{ url('recogida') }}\">
                <i class=\"mdi mdi-text-box-outline mr-1\"></i>
                <span>Formulario de recogida</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <section class=\"content\"> {% block body %}{% endblock %}
        </section>
      </main>
      <script>
        T.urlBase = \"{{ url('home') }}\";
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
", "gestion/base.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\gestion\\base.html.twig");
    }
}
