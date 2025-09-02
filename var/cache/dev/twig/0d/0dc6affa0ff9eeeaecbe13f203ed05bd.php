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

/* footer/footer.html.twig */
class __TwigTemplate_49d778ccae3df000957bf6c834a5a5df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 185
        echo "<br><br>

";
        // line 187
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 187, $this->source); })()), "data", [], "any", false, false, false, 187), "mostrar_newsletter", [], "any", false, false, false, 187)) {
            // line 188
            echo "\t";
            $this->loadTemplate("main/newsletter.html.twig", "footer/footer.html.twig", 188)->display($context);
        }
        // line 189
        echo "<br>

";
        // line 191
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 191, $this->source); })()), "data", [], "any", false, false, false, 191), "kit_digital", [], "any", false, false, false, 191)) {
            // line 192
            echo "\t<div class=\"divsubvencion\">
\t\t<div class=\"logosalineados\">
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/kitdigital5.webp"), "html", null, true);
            echo "\" alt=\"1\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/kitdigital4.webp"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/kitdigital3.webp"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/kitdigital2.webp"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/kit_digital/kitdigital1.webp"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"logotexto\">
\t\t\t<p>La empresa
\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 212, $this->source); })()), "data", [], "any", false, false, false, 212), "razon_social", [], "any", false, false, false, 212), "html", null, true);
            echo "
\t\t\t\tha sido beneficiaria del Programa de Ayudas destinadas a la digitalización de pequeñas empresas, y personas en situación de autoempleo, en el marco de la Agenda España Digital 2025, el Plan de Digitalización PYMEs 2021-2025 y el Plan de Recuperación, Transformación y Resillencia de España «Financiado por la Unión Europea» Next Generation EU (Programa Kit Digital)</p>
\t\t</div>
\t</div>
\t<style>
\t\t.divsubvencion {
\t\t\twidth: 80%;
\t\t\tmargin: 3% auto 0;
\t\t}
\t\t.logosalineados {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between
\t\t}
\t\t.logo1 img {
\t\t\tobject-fit: contain;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.logo1 {
\t\t\twidth: 20%;
\t\t\ttext-align: center;
\t\t}
\t\t.logotexto p {
\t\t\tfont-size: 15px;
\t\t\ttext-align: center;
\t\t\tmargin-top: 15px;
\t\t\tmargin-top: 2% !important;
\t\t\tmargin-bottom: 70px !important;
\t\t\tfont-family: 'Champagne';
\t\t\tcolor: black;
\t\t}


\t\t@media screen and(max-width: 769px) {
\t\t\t.divsubvencion {
\t\t\t\twidth: 80%;
\t\t\t\tmargin: 0 auto;
\t\t\t}
\t\t\t.logosalineados {
\t\t\t\tflex-direction: column !important;
\t\t\t}
\t\t\t.logo1 {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 20px auto 0;
\t\t\t}
\t\t}

\t\t@media screen and(max-width: 425px) {
\t\t\t.logo1 {
\t\t\t\twidth: 70%;
\t\t\t\tmargin: 0 !important;
\t\t\t}
\t\t}
\t</style>
";
        }
        // line 267
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 267, $this->source); })()), "data", [], "any", false, false, false, 267), "mostrar_footer", [], "any", false, false, false, 267)) {
            // line 268
            echo "\t<style>
\t\t.pre-footer ul.list-inline > li.list-inline-item > a > i.mdi.mdi-youtube.mdi-36px::before {
\t\t\tfont-size: 32px;
\t\t}
\t</style>

\t<div class=\"pre-footer\">
\t\t<div
\t\t\tclass=\"container-fluid\">
\t\t\t";
            // line 348
            echo "

\t\t\t<div class=\"row mr-3\">";
            // line 355
            echo "\t\t\t\t";
            // line 356
            echo "\t\t\t\t";
            // line 357
            echo "\t\t\t\t";
            // line 374
            echo "\t\t\t</div>
\t\t</div>

\t\t<div style=\"width:80%; margin:0 auto; padding-top:50px; padding-bottom:50px;\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center w-100 divfooter\">

\t\t\t\t<div style=\"width:30%\" class=\"footerdatos1\">
\t\t\t\t\t<div class=\"footersocial\">
\t\t\t\t\t\t";
            // line 382
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 382, $this->source); })()), "data", [], "any", false, false, false, 382), "red_facebook", [], "any", false, false, false, 382))) {
                // line 383
                echo "\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 383, $this->source); })()), "data", [], "any", false, false, false, 383), "red_facebook", [], "any", false, false, false, 383), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Facebook\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-facebook mdi-24px\" style=\"color:#3b5998;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 387
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 387, $this->source); })()), "data", [], "any", false, false, false, 387), "red_twitter", [], "any", false, false, false, 387))) {
                // line 388
                echo "\t\t\t\t\t\t\t<a href=\"https://twitter.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 388, $this->source); })()), "data", [], "any", false, false, false, 388), "red_twitter", [], "any", false, false, false, 388), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Twitter\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-twitter mdi-24px\" style=\"color:#1da1f2;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 392
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 392, $this->source); })()), "data", [], "any", false, false, false, 392), "red_linkedin", [], "any", false, false, false, 392))) {
                // line 393
                echo "\t\t\t\t\t\t\t<a href=\"https://linkedin.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 393, $this->source); })()), "data", [], "any", false, false, false, 393), "red_linkedin", [], "any", false, false, false, 393), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Linkedin\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-linkedin mdi-24px\" style=\"color:#1985bc\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 397
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 397, $this->source); })()), "data", [], "any", false, false, false, 397), "red_skype", [], "any", false, false, false, 397))) {
                // line 398
                echo "\t\t\t\t\t\t\t<a href=\"skype:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 398, $this->source); })()), "data", [], "any", false, false, false, 398), "red_skype", [], "any", false, false, false, 398), "html", null, true);
                echo "?call\" title=\"Skype\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-skype mdi-24px\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 402
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 402, $this->source); })()), "data", [], "any", false, false, false, 402), "red_instagram", [], "any", false, false, false, 402))) {
                // line 403
                echo "\t\t\t\t\t\t\t<a href=\"https://instagram.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 403, $this->source); })()), "data", [], "any", false, false, false, 403), "red_instagram", [], "any", false, false, false, 403), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Instagram\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-instagram mdi-24px\" style=\"color:#f0566a;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 407, $this->source); })()), "data", [], "any", false, false, false, 407), "red_youtube", [], "any", false, false, false, 407))) {
                // line 408
                echo "\t\t\t\t\t\t\t<a href=\"https://youtube.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 408, $this->source); })()), "data", [], "any", false, false, false, 408), "red_youtube", [], "any", false, false, false, 408), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"YouTube\" style=\"margin-top:-2px\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-youtube mdi-36px\" style=\"color:#ff0000;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 412
            echo "\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 414
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 414, $this->source); })()), "empresa", [], "any", false, false, false, 414), "telefono", [], "any", false, false, false, 414)) {
                // line 415
                echo "\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"tel:";
                // line 416
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 416, $this->source); })()), "empresa", [], "any", false, false, false, 416), "telefonoUri", [], "any", false, false, false, 416), "html", null, true);
                echo "\" class=\"mr-4\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t";
                // line 418
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 418, $this->source); })()), "empresa", [], "any", false, false, false, 418), "telefono", [], "any", false, false, false, 418), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 421
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 421, $this->source); })()), "empresa", [], "any", false, false, false, 421), "whatsapp", [], "any", false, false, false, 421)) {
                // line 422
                echo "\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"https://wa.me/34";
                // line 423
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 423, $this->source); })()), "empresa", [], "any", false, false, false, 423), "whatsapp", [], "any", false, false, false, 423), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t";
                // line 425
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 425, $this->source); })()), "empresa", [], "any", false, false, false, 425), "whatsapp", [], "any", false, false, false, 425), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 428
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 428, $this->source); })()), "empresa", [], "any", false, false, false, 428), "email", [], "any", false, false, false, 428)) {
                // line 429
                echo "\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"mailto:";
                // line 430
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 430, $this->source); })()), "empresa", [], "any", false, false, false, 430), "email", [], "any", false, false, false, 430), "html", null, true);
                echo "\" class=\"mr-4\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-email mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t";
                // line 432
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 432, $this->source); })()), "empresa", [], "any", false, false, false, 432), "email", [], "any", false, false, false, 432), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 435
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"width:40%; text-align:center\" class=\"divlogofooter\">
\t\t\t\t\t<a href=\"";
            // line 437
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 438
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 438, $this->source); })()), "logo", [], "any", false, false, false, 438)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 438, $this->source); })()), "nombreWeb", [], "any", false, false, false, 438), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 438, $this->source); })()), "nombreWeb", [], "any", false, false, false, 438), "html", null, true);
            echo "\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div style=\"width:30%\" class=\"footerdatos2\">
\t\t\t\t\t";
            // line 442
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 442, $this->source); })()), "empresa", [], "any", false, false, false, 442), "horario", [], "any", false, false, false, 442)) {
                // line 443
                echo "\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t";
                // line 444
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 444, $this->source); })()), "empresa", [], "any", false, false, false, 444), "horario", [], "any", false, false, false, 444), "html", null, true);
                echo "
\t\t\t\t\t\t\t<i class=\"mdi mdi-clock mdi-18px mr-1\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 448
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 448, $this->source); })()), "data", [], "any", false, false, false, 448), "direccion", [], "any", false, false, false, 448)) {
                // line 449
                echo "\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t";
                // line 450
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 450, $this->source); })()), "empresa", [], "any", false, false, false, 450), "direccion", [], "any", false, false, false, 450), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
                // line 451
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 451, $this->source); })()), "empresa", [], "any", false, false, false, 451), "cpostal", [], "any", false, false, false, 451), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
                // line 452
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 452, $this->source); })()), "empresa", [], "any", false, false, false, 452), "localidad", [], "any", false, false, false, 452), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
                // line 453
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 453, $this->source); })()), "empresa", [], "any", false, false, false, 453), "provincia", [], "any", false, false, false, 453), "html", null, true);
                echo "
\t\t\t\t\t\t\t<i class=\"mdi mdi-map-marker mdi-18px\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            // line 458
            echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer_textoslegales\">
\t\t\t\t<a href=\"";
            // line 462
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos-condiciones-compra");
            echo "\">Términos y Condiciones de Compra</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"";
            // line 464
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos", ["item" => "avisos_legales"]);
            echo "\">Aviso Legal</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"";
            // line 466
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos-privacidad");
            echo "\">Política de Privacidad</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"";
            // line 468
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos-cookies");
            echo "\">Política de Cookies</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"";
            // line 470
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textos", ["item" => "condiciones-envio"]);
            echo "\">Condiciones de Envío</a>
\t\t\t</div>

\t\t\t<div class=\"text-center\">
\t\t\t\t<p class=\"copyrighttexto\">Copyright 2024 | Diseñado por
\t\t\t\t\t<a class=\"enlacesfooter\" href=\"https://tictac-comunicacion.es/\">TIC TAC COMUNICACIÓN</a>
\t\t\t\t\ty Desarrollado por
\t\t\t\t\t<a class=\"enlacesfooter\" href=\"https://www.viii.es/\">COMPONENTES DE CONTROL</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
";
        } else {
            // line 484
            echo "\t<div class=\"pre-footer py-2 row mx-0 align-items-center\">
\t\t<div class=\"col-12 col-md-auto text-center\">
\t\t\t<a href=\"";
            // line 486
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("info");
            echo "\" style=\"text-decoration:underline;color:#fff\">
\t\t\t\t&copy;
\t\t\t\t";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 488, $this->source); })()), "empresa", [], "any", false, false, false, 488), "nombre", [], "any", false, false, false, 488), "html", null, true);
            echo "&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t";
            // line 492
            if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 492, $this->source); })()), "redsysActivo", [], "any", false, false, false, 492)) {
                // line 493
                echo "\t\t\t\t";
                $this->loadTemplate("footer/footer-tarjetas.html.twig", "footer/footer.html.twig", 493)->display($context);
                // line 494
                echo "\t\t\t";
            }
            // line 495
            echo "\t\t</div>
\t\t<div class=\"col social-links pr-md-5\">
\t\t\t<a href=\"https://wa.me/34";
            // line 497
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 497, $this->source); })()), "empresa", [], "any", false, false, false, 497), "whatsapp", [], "any", false, false, false, 497), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Contactar por WhatsApp\">
\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-24px\" style=\"color:#25d366\"></i>
\t\t\t</a>
\t\t\t";
            // line 500
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 500, $this->source); })()), "data", [], "any", false, false, false, 500), "red_facebook", [], "any", false, false, false, 500))) {
                // line 501
                echo "\t\t\t\t<a href=\"https://www.facebook.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 501, $this->source); })()), "data", [], "any", false, false, false, 501), "red_facebook", [], "any", false, false, false, 501), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Facebook\">
\t\t\t\t\t<i class=\"mdi mdi-facebook mdi-24px\" style=\"color:#3b5998;\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 505
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 505, $this->source); })()), "data", [], "any", false, false, false, 505), "red_twitter", [], "any", false, false, false, 505))) {
                // line 506
                echo "\t\t\t\t<a href=\"https://twitter.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 506, $this->source); })()), "data", [], "any", false, false, false, 506), "red_twitter", [], "any", false, false, false, 506), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Twitter\">
\t\t\t\t\t<i class=\"mdi mdi-twitter mdi-24px\" style=\"color:#1da1f2;\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 510
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 510, $this->source); })()), "data", [], "any", false, false, false, 510), "red_linkedin", [], "any", false, false, false, 510))) {
                // line 511
                echo "\t\t\t\t<a href=\"https://linkedin.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 511, $this->source); })()), "data", [], "any", false, false, false, 511), "red_linkedin", [], "any", false, false, false, 511), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Linkedin\">
\t\t\t\t\t<i class=\"mdi mdi-linkedin mdi-24px\" style=\"color:#1985bc\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 515
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 515, $this->source); })()), "data", [], "any", false, false, false, 515), "red_skype", [], "any", false, false, false, 515))) {
                // line 516
                echo "\t\t\t\t<a href=\"skype:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 516, $this->source); })()), "data", [], "any", false, false, false, 516), "red_skype", [], "any", false, false, false, 516), "html", null, true);
                echo "?call\" title=\"Skype\">
\t\t\t\t\t<i class=\"mdi mdi-skype mdi-24px\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 520
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 520, $this->source); })()), "data", [], "any", false, false, false, 520), "red_instagram", [], "any", false, false, false, 520))) {
                // line 521
                echo "\t\t\t\t<a href=\"https://instagram.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 521, $this->source); })()), "data", [], "any", false, false, false, 521), "red_instagram", [], "any", false, false, false, 521), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"Instagram\">
\t\t\t\t\t<i class=\"mdi mdi-instagram mdi-24px\" style=\"color:#f0566a;\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 525
            echo "\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 525, $this->source); })()), "data", [], "any", false, false, false, 525), "red_youtube", [], "any", false, false, false, 525))) {
                // line 526
                echo "\t\t\t\t<a href=\"https://youtube.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 526, $this->source); })()), "data", [], "any", false, false, false, 526), "red_youtube", [], "any", false, false, false, 526), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\" title=\"YouTube\" style=\"margin-top:-2px\">
\t\t\t\t\t<i class=\"mdi mdi-youtube mdi-36px\" style=\"color:#ff0000;\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 530
            echo "\t\t</div>
\t</div>
";
        }
        // line 533
        echo "<script type=\"application/ld+json\">
\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"@context\": \"http://schema.org\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"@type\": \"Address\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"streetAddress\": \"";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 537, $this->source); })()), "empresa", [], "any", false, false, false, 537), "direccion", [], "any", false, false, false, 537), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"postalCode\" : \"";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 538, $this->source); })()), "empresa", [], "any", false, false, false, 538), "cpostal", [], "any", false, false, false, 538), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"addressLocality\" : \"";
        // line 539
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 539, $this->source); })()), "empresa", [], "any", false, false, false, 539), "localidad", [], "any", false, false, false, 539), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"addressRegion\" : \"";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 540, $this->source); })()), "empresa", [], "any", false, false, false, 540), "provincia", [], "any", false, false, false, 540), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"telephone\": \"";
        // line 541
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 541, $this->source); })()), "empresa", [], "any", false, false, false, 541), "telefono", [], "any", false, false, false, 541), "html", null, true);
        echo "\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"email\": \"";
        // line 542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 542, $this->source); })()), "empresa", [], "any", false, false, false, 542), "email", [], "any", false, false, false, 542), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      }
</script>
";
        // line 545
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 545, $this->source); })()), "data", [], "any", false, false, false, 545), "mostrar_newsletter", [], "any", false, false, false, 545)) {
            // line 546
            echo "\t";
            $this->loadTemplate("footer/footer-newsletter.html.twig", "footer/footer.html.twig", 546)->display($context);
        }
        // line 548
        $this->loadTemplate("footer/footer-cookies.html.twig", "footer/footer.html.twig", 548)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })()), "mostrarOpiniones", [], "any", false, false, false, 3)) {
            // line 4
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4) == "home")) {
                // line 5
                echo "\t\t\t";
                $this->loadTemplate("main/opiniones.html.twig", "footer/footer.html.twig", 5)->display(twig_array_merge($context, ["opiniones" => (isset($context["opiniones"]) || array_key_exists("opiniones", $context) ? $context["opiniones"] : (function () { throw new RuntimeError('Variable "opiniones" does not exist.', 5, $this->source); })())]));
                // line 6
                echo "\t\t\t<br><br>
\t\t";
            }
            // line 8
            echo "\t";
        }
        echo "<br>

\t";
        // line 10
        $context["landing"] = ((array_key_exists("landing", $context)) ? ((isset($context["landing"]) || array_key_exists("landing", $context) ? $context["landing"] : (function () { throw new RuntimeError('Variable "landing" does not exist.', 10, $this->source); })())) : ([]));
        // line 11
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", [0 => "_route"], "method", false, false, false, 11) == "home")) {
            // line 12
            echo "\t\t<div class=\"divancho2\" style=\"width:80%; margin:0 auto\">
\t\t\t<h2 class=\"titulogeneral\">Otros Productos Destacados de la Tienda</h2>
\t\t\t<div class=\"product-list-container\">
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["landing"]) || array_key_exists("landing", $context) ? $context["landing"] : (function () { throw new RuntimeError('Variable "landing" does not exist.', 15, $this->source); })()), 0, 10));
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
            foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
                // line 16
                echo "\t\t\t\t\t";
                $this->loadTemplate("articulo/art-minificha.html.twig", "footer/footer.html.twig", 16)->display($context);
                // line 17
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</div>
\t\t\t";
            // line 20
            echo "\t\t</div><br><br>
\t";
        }
        // line 22
        echo "\t<br><br>

\t";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "mostrarMarcas", [], "any", false, false, false, 24) && array_key_exists("lista_marcas", $context))) {
            // line 25
            echo "\t\t<h2 class=\"titulogeneral\">Trabajamos con las Mejores Marcas</h2>
\t\t<!-- HTML Structure -->
\t\t<div id=\"carouselMarcas\">
\t\t\t<div class=\"jcarousel-wrapper\">
\t\t\t\t<div class=\"jcarousel\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_marcas"]) || array_key_exists("lista_marcas", $context) ? $context["lista_marcas"] : (function () { throw new RuntimeError('Variable "lista_marcas" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mar"]) {
                // line 32
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("marca-grid", ["webUrl" => twig_get_attribute($this->env, $this->source, $context["mar"], "url", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["mar"], "url_imagen", [], "any", false, false, false, 34)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mar"], "nombre", [], "any", false, false, false, 34), "html", null, true);
                echo "\" width=\"200\" style=\"max-height: 100px\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"jcarousel-control-prev\">&lsaquo;</a>
\t\t\t\t<a href=\"#\" class=\"jcarousel-control-next\">&rsaquo;</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- CSS -->
\t\t<style>
\t\t\t.jcarousel {
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.jcarousel ul {
\t\t\t\twidth: 10000em;
\t\t\t\tposition: relative;
\t\t\t\tlist-style: none;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 90px;
\t\t\t}

\t\t\t.jcarousel li {
\t\t\t\tfloat: left;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t}

\t\t\t.jcarousel img {
\t\t\t\tdisplay: block;
\t\t\t\tmax-width: 100%;
\t\t\t\theight: auto !important;
\t\t\t\tobject-fit:contain;
\t\t\t}

\t\t\t.jcarousel-wrapper {
\t\t\t\tposition: relative;
\t\t\t\tmargin: 20px auto;
\t\t\t\twidth: 95%;
\t\t\t\toutline: 0 !important;
\t\t\t\tborder: 0 !important;
\t\t\t\tbox-shadow: 0 0 2px #ffffff !important;
\t\t\t}

\t\t\t.jcarousel-control-prev,
\t\t\t.jcarousel-control-next {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 60%;
\t\t\t\ttransform: translateY(-50%);
\t\t\t\twidth: 30px;
\t\t\t\theight: 30px;
\t\t\t\ttext-align: center;
\t\t\t\tbackground: #4E443C;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t\tfont-size: 24px;
\t\t\t\tborder-radius: 30px;
\t\t\t\tbox-shadow: 0 0 4px #F0EFE7;
\t\t\t\tcursor: pointer;
\t\t\t\tz-index: 10;
\t\t\t}

\t\t\t.jcarousel-control-prev {
\t\t\t\tleft: -50px;
\t\t\t}

\t\t\t.jcarousel-control-next {
\t\t\t\tright: -15px;
\t\t\t}

\t\t\t.jcarousel-control-prev:hover,
\t\t\t.jcarousel-control-next:hover {
\t\t\t\tbackground: #746B5F;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t</style>

\t\t<!-- JavaScript -->
\t\t<script>
\t\t\t\$(function () {
var \$carousel = \$('.jcarousel');

\$carousel.jcarousel({wrap: 'circular'});

\$('.jcarousel-control-prev').click(function (e) {
e.preventDefault();
\$carousel.jcarousel('scroll', '-=1');
});

\$('.jcarousel-control-next').click(function (e) {
e.preventDefault();
\$carousel.jcarousel('scroll', '+=1');
});

// Autoplay
setInterval(function () {
\$carousel.jcarousel('scroll', '+=1');
}, 5000);
});
\t\t</script>
\t";
        }
        // line 143
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 143, $this->source); })()), "slider", [], "any", false, false, false, 143)) {
            // line 144
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/revealjs/reveal.js"), "html", null, true);
            echo "\"></script>
\t\t";
            // line 146
            echo "\t\t<script>
\t\t\t(function () {
Reveal.initialize({
embedded: true,
controlsLayout: 'edges',
autoSlide: 5000,
loop: true,
transitionSpeed: 'slow',
autoSlideStoppable: false,
height: ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 155, $this->source); })()), "sliderHeight", [], "any", false, false, false, 155), "html", null, true);
            echo "
});";
            // line 156
            if (array_key_exists("bannerImg", $context)) {
                echo "const MAX_MOBILE_PX = 765;
const slides = \$('#reveal-slides');
let actualWidth = \$(window).width(),
actualDesk = actualWidth >= MAX_MOBILE_PX;

if (actualWidth >= MAX_MOBILE_PX) {
slides.html(\$('#reveal-desktop').html());
} else {
slides.html(\$('#reveal-mobile').html());
}

\$(window).on('resize', function () {
let desk = \$(window).width() >= MAX_MOBILE_PX;
if (actualDesk != desk) {
let ident = desk ? '#reveal-desktop' : '#reveal-mobile';
actualWidth = \$(window).width();
actualDesk = actualWidth >= MAX_MOBILE_PX;
slides.empty();
slides.html(\$(ident).html())
Reveal.slide(0);
Reveal.sync();
}
}).trigger('resize');
";
            } else {
                // line 180
                echo "\$('#reveal-slides').html(\$('#reveal-desktop').html());";
            }
            // line 181
            echo "})();
\t\t</script>
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 181,  839 => 180,  812 => 156,  808 => 155,  797 => 146,  792 => 144,  789 => 143,  682 => 38,  670 => 34,  666 => 33,  663 => 32,  659 => 31,  651 => 25,  649 => 24,  645 => 22,  641 => 20,  638 => 18,  624 => 17,  621 => 16,  604 => 15,  599 => 12,  596 => 11,  594 => 10,  588 => 8,  584 => 6,  581 => 5,  578 => 4,  576 => 3,  573 => 2,  563 => 1,  553 => 548,  549 => 546,  547 => 545,  541 => 542,  537 => 541,  533 => 540,  529 => 539,  525 => 538,  521 => 537,  515 => 533,  510 => 530,  502 => 526,  499 => 525,  491 => 521,  488 => 520,  480 => 516,  477 => 515,  469 => 511,  466 => 510,  458 => 506,  455 => 505,  447 => 501,  445 => 500,  439 => 497,  435 => 495,  432 => 494,  429 => 493,  427 => 492,  418 => 488,  413 => 486,  409 => 484,  392 => 470,  387 => 468,  382 => 466,  377 => 464,  372 => 462,  366 => 458,  358 => 453,  354 => 452,  350 => 451,  346 => 450,  343 => 449,  340 => 448,  333 => 444,  330 => 443,  328 => 442,  317 => 438,  313 => 437,  309 => 435,  303 => 432,  298 => 430,  295 => 429,  292 => 428,  286 => 425,  281 => 423,  278 => 422,  275 => 421,  269 => 418,  264 => 416,  261 => 415,  259 => 414,  255 => 412,  247 => 408,  244 => 407,  236 => 403,  233 => 402,  225 => 398,  222 => 397,  214 => 393,  211 => 392,  203 => 388,  200 => 387,  192 => 383,  190 => 382,  180 => 374,  178 => 357,  176 => 356,  174 => 355,  170 => 348,  159 => 268,  157 => 267,  99 => 212,  91 => 207,  85 => 204,  79 => 201,  73 => 198,  67 => 195,  62 => 192,  60 => 191,  56 => 189,  52 => 188,  50 => 187,  46 => 185,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

\t{% if config.mostrarOpiniones %}
\t\t{% if app.request.attributes.get('_route') == 'home' %}
\t\t\t{% include 'main/opiniones.html.twig' with {'opiniones': opiniones} %}
\t\t\t<br><br>
\t\t{% endif %}
\t{% endif %}<br>

\t{% set landing = landing is defined ? landing : [] %}
\t{% if app.request.attributes.get('_route') == 'home' %}
\t\t<div class=\"divancho2\" style=\"width:80%; margin:0 auto\">
\t\t\t<h2 class=\"titulogeneral\">Otros Productos Destacados de la Tienda</h2>
\t\t\t<div class=\"product-list-container\">
\t\t\t\t{% for art in landing|slice(0, 10) %}
\t\t\t\t\t{% include 'articulo/art-minificha.html.twig' %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t{# <a href=\"\" class=\"btnvermasarticulos mb-5\">IR A LA TIENDA ONLINE</a> #}
\t\t</div><br><br>
\t{% endif %}
\t<br><br>

\t{% if config.mostrarMarcas and lista_marcas is defined %}
\t\t<h2 class=\"titulogeneral\">Trabajamos con las Mejores Marcas</h2>
\t\t<!-- HTML Structure -->
\t\t<div id=\"carouselMarcas\">
\t\t\t<div class=\"jcarousel-wrapper\">
\t\t\t\t<div class=\"jcarousel\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for mar in lista_marcas %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ url('marca-grid', {webUrl: mar.url}) }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(mar.url_imagen) }}\" alt=\"{{ mar.nombre }}\" width=\"200\" style=\"max-height: 100px\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"jcarousel-control-prev\">&lsaquo;</a>
\t\t\t\t<a href=\"#\" class=\"jcarousel-control-next\">&rsaquo;</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- CSS -->
\t\t<style>
\t\t\t.jcarousel {
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.jcarousel ul {
\t\t\t\twidth: 10000em;
\t\t\t\tposition: relative;
\t\t\t\tlist-style: none;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 90px;
\t\t\t}

\t\t\t.jcarousel li {
\t\t\t\tfloat: left;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t}

\t\t\t.jcarousel img {
\t\t\t\tdisplay: block;
\t\t\t\tmax-width: 100%;
\t\t\t\theight: auto !important;
\t\t\t\tobject-fit:contain;
\t\t\t}

\t\t\t.jcarousel-wrapper {
\t\t\t\tposition: relative;
\t\t\t\tmargin: 20px auto;
\t\t\t\twidth: 95%;
\t\t\t\toutline: 0 !important;
\t\t\t\tborder: 0 !important;
\t\t\t\tbox-shadow: 0 0 2px #ffffff !important;
\t\t\t}

\t\t\t.jcarousel-control-prev,
\t\t\t.jcarousel-control-next {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 60%;
\t\t\t\ttransform: translateY(-50%);
\t\t\t\twidth: 30px;
\t\t\t\theight: 30px;
\t\t\t\ttext-align: center;
\t\t\t\tbackground: #4E443C;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t\tfont-size: 24px;
\t\t\t\tborder-radius: 30px;
\t\t\t\tbox-shadow: 0 0 4px #F0EFE7;
\t\t\t\tcursor: pointer;
\t\t\t\tz-index: 10;
\t\t\t}

\t\t\t.jcarousel-control-prev {
\t\t\t\tleft: -50px;
\t\t\t}

\t\t\t.jcarousel-control-next {
\t\t\t\tright: -15px;
\t\t\t}

\t\t\t.jcarousel-control-prev:hover,
\t\t\t.jcarousel-control-next:hover {
\t\t\t\tbackground: #746B5F;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t</style>

\t\t<!-- JavaScript -->
\t\t<script>
\t\t\t\$(function () {
var \$carousel = \$('.jcarousel');

\$carousel.jcarousel({wrap: 'circular'});

\$('.jcarousel-control-prev').click(function (e) {
e.preventDefault();
\$carousel.jcarousel('scroll', '-=1');
});

\$('.jcarousel-control-next').click(function (e) {
e.preventDefault();
\$carousel.jcarousel('scroll', '+=1');
});

// Autoplay
setInterval(function () {
\$carousel.jcarousel('scroll', '+=1');
}, 5000);
});
\t\t</script>
\t{% endif %}
\t{% if config.slider %}
\t\t<script src=\"{{ asset('vendor/revealjs/reveal.js') }}\"></script>
\t\t{# https: // stackoverflow.com/questions/19522587/add-remove-slides-from-reveal-js-dynamically #}
\t\t<script>
\t\t\t(function () {
Reveal.initialize({
embedded: true,
controlsLayout: 'edges',
autoSlide: 5000,
loop: true,
transitionSpeed: 'slow',
autoSlideStoppable: false,
height: {{ config.sliderHeight }}
});{% if bannerImg is defined %}const MAX_MOBILE_PX = 765;
const slides = \$('#reveal-slides');
let actualWidth = \$(window).width(),
actualDesk = actualWidth >= MAX_MOBILE_PX;

if (actualWidth >= MAX_MOBILE_PX) {
slides.html(\$('#reveal-desktop').html());
} else {
slides.html(\$('#reveal-mobile').html());
}

\$(window).on('resize', function () {
let desk = \$(window).width() >= MAX_MOBILE_PX;
if (actualDesk != desk) {
let ident = desk ? '#reveal-desktop' : '#reveal-mobile';
actualWidth = \$(window).width();
actualDesk = actualWidth >= MAX_MOBILE_PX;
slides.empty();
slides.html(\$(ident).html())
Reveal.slide(0);
Reveal.sync();
}
}).trigger('resize');
{% else %}
\$('#reveal-slides').html(\$('#reveal-desktop').html());{% endif %}
})();
\t\t</script>
\t{% endif %}
{% endblock %}
<br><br>

{% if config.data.mostrar_newsletter %}
\t{% include 'main/newsletter.html.twig' %}
{% endif %}<br>

{% if config.data.kit_digital %}
\t<div class=\"divsubvencion\">
\t\t<div class=\"logosalineados\">
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/kitdigital5.webp\") }}\" alt=\"1\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/kitdigital4.webp\") }}\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/kitdigital3.webp\") }}\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/kitdigital2.webp\") }}\">
\t\t\t</div>
\t\t\t<div class=\"logo1\">
\t\t\t\t<img src=\"{{ asset(\"images/kit_digital/kitdigital1.webp\") }}\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"logotexto\">
\t\t\t<p>La empresa
\t\t\t\t{{ config.data.razon_social }}
\t\t\t\tha sido beneficiaria del Programa de Ayudas destinadas a la digitalización de pequeñas empresas, y personas en situación de autoempleo, en el marco de la Agenda España Digital 2025, el Plan de Digitalización PYMEs 2021-2025 y el Plan de Recuperación, Transformación y Resillencia de España «Financiado por la Unión Europea» Next Generation EU (Programa Kit Digital)</p>
\t\t</div>
\t</div>
\t<style>
\t\t.divsubvencion {
\t\t\twidth: 80%;
\t\t\tmargin: 3% auto 0;
\t\t}
\t\t.logosalineados {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between
\t\t}
\t\t.logo1 img {
\t\t\tobject-fit: contain;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.logo1 {
\t\t\twidth: 20%;
\t\t\ttext-align: center;
\t\t}
\t\t.logotexto p {
\t\t\tfont-size: 15px;
\t\t\ttext-align: center;
\t\t\tmargin-top: 15px;
\t\t\tmargin-top: 2% !important;
\t\t\tmargin-bottom: 70px !important;
\t\t\tfont-family: 'Champagne';
\t\t\tcolor: black;
\t\t}


\t\t@media screen and(max-width: 769px) {
\t\t\t.divsubvencion {
\t\t\t\twidth: 80%;
\t\t\t\tmargin: 0 auto;
\t\t\t}
\t\t\t.logosalineados {
\t\t\t\tflex-direction: column !important;
\t\t\t}
\t\t\t.logo1 {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 20px auto 0;
\t\t\t}
\t\t}

\t\t@media screen and(max-width: 425px) {
\t\t\t.logo1 {
\t\t\t\twidth: 70%;
\t\t\t\tmargin: 0 !important;
\t\t\t}
\t\t}
\t</style>
{% endif %}
{% if config.data.mostrar_footer %}
\t<style>
\t\t.pre-footer ul.list-inline > li.list-inline-item > a > i.mdi.mdi-youtube.mdi-36px::before {
\t\t\tfont-size: 32px;
\t\t}
\t</style>

\t<div class=\"pre-footer\">
\t\t<div
\t\t\tclass=\"container-fluid\">
\t\t\t{# \t\t\t<div class=\"row mb-2 border-secondary border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#foot-info-emp\" class=\"title collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"foot-info-emp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAcerca de Nosotros
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify collapse\" id=\"foot-info-emp\">{{ config.data.footertxt}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if cms is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#foot-info-cms\" class=\"title collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"foot-info-cms\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInformación
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled collapse\" id=\"foot-info-cms\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for item in cms %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right mdi-18px\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('textos', { item: item.web_url})}}\">{{item.nombre}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#foot-info-contacto\" class=\"title collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"foot-info-contacto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tContacto
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"collapse\" id=\"foot-info-contacto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if config.data.google_maps is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ config.data.google_maps }}\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"{{ asset('images/gmaps.jpg') }}\" alt=\"{{ config.empresa.direccion }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block\" itemprop=\"streetAddress\">{{config.empresa.direccion}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"postalCode\">{{config.empresa.cpostal}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"addressLocality\">{{config.empresa.localidad}}</span>,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"addressRegion\">{{config.empresa.provincia}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Teléfono:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ config.empresa.telefonoUri }}\" class=\"ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"telephone\">{{ config.empresa.telefono }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:{{ config.empresa.email }}\" class=\"ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span itemprop=\"email\">{{ config.empresa.email }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ config.empresa.horario }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}


\t\t\t<div class=\"row mr-3\">{# \t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if config.redsysActivo %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'footer/footer-tarjetas.html.twig' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t{# -- Iconos redes sociales -- #}
\t\t\t\t{# -- Suscripción -- #}
\t\t\t\t{# \t\t\t\t{% if config.data.mostrar_newsletter %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pre-footer-subscribe-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" id=\"newsletter_nombre\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Correo\" class=\"form-control\" id=\"newsletter_email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto px-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" data-toggle=\"modal\" id=\"btn-suscripcion\">Suscribete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t</div>
\t\t</div>

\t\t<div style=\"width:80%; margin:0 auto; padding-top:50px; padding-bottom:50px;\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center w-100 divfooter\">

\t\t\t\t<div style=\"width:30%\" class=\"footerdatos1\">
\t\t\t\t\t<div class=\"footersocial\">
\t\t\t\t\t\t{% if config.data.red_facebook is not empty %}
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/{{ config.data.red_facebook }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Facebook\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-facebook mdi-24px\" style=\"color:#3b5998;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if config.data.red_twitter is not empty %}
\t\t\t\t\t\t\t<a href=\"https://twitter.com/{{ config.data.red_twitter }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Twitter\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-twitter mdi-24px\" style=\"color:#1da1f2;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if config.data.red_linkedin is not empty %}
\t\t\t\t\t\t\t<a href=\"https://linkedin.com/{{ config.data.red_linkedin }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Linkedin\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-linkedin mdi-24px\" style=\"color:#1985bc\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if config.data.red_skype is not empty %}
\t\t\t\t\t\t\t<a href=\"skype:{{ config.data.red_skype }}?call\" title=\"Skype\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-skype mdi-24px\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if config.data.red_instagram is not empty %}
\t\t\t\t\t\t\t<a href=\"https://instagram.com/{{ config.data.red_instagram }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Instagram\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-instagram mdi-24px\" style=\"color:#f0566a;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if config.data.red_youtube is not empty %}
\t\t\t\t\t\t\t<a href=\"https://youtube.com/{{ config.data.red_youtube }}\" target=\"_blank\" rel=\"noreferrer\" title=\"YouTube\" style=\"margin-top:-2px\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-youtube mdi-36px\" style=\"color:#ff0000;\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t{% if config.empresa.telefono %}
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"tel:{{ config.empresa.telefonoUri }}\" class=\"mr-4\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t{{ config.empresa.telefono }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if config.empresa.whatsapp %}
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"https://wa.me/34{{ config.empresa.whatsapp }}\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t{{ config.empresa.whatsapp }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if config.empresa.email %}
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t<a href=\"mailto:{{ config.empresa.email }}\" class=\"mr-4\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-email mdi-18px mr-1\"></i>
\t\t\t\t\t\t\t\t{{ config.empresa.email }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div style=\"width:40%; text-align:center\" class=\"divlogofooter\">
\t\t\t\t\t<a href=\"{{ url('home') }}\">
\t\t\t\t\t\t<img src=\"{{ asset(config.logo) }}\" title=\"{{ config.nombreWeb }}\" alt=\"{{ config.nombreWeb }}\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div style=\"width:30%\" class=\"footerdatos2\">
\t\t\t\t\t{% if config.empresa.horario %}
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t{{ config.empresa.horario }}
\t\t\t\t\t\t\t<i class=\"mdi mdi-clock mdi-18px mr-1\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if config.data.direccion %}
\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t{{config.empresa.direccion}}
\t\t\t\t\t\t\t{{config.empresa.cpostal}}
\t\t\t\t\t\t\t{{config.empresa.localidad}}
\t\t\t\t\t\t\t{{config.empresa.provincia}}
\t\t\t\t\t\t\t<i class=\"mdi mdi-map-marker mdi-18px\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer_textoslegales\">
\t\t\t\t<a href=\"{{ path('textos-condiciones-compra') }}\">Términos y Condiciones de Compra</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"{{ path('textos', { item: 'avisos_legales' }) }}\">Aviso Legal</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"{{ path('textos-privacidad') }}\">Política de Privacidad</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"{{ path('textos-cookies') }}\">Política de Cookies</a>
\t\t\t\t<p>|</p>
\t\t\t\t<a href=\"{{ path('textos', { item: 'condiciones-envio' }) }}\">Condiciones de Envío</a>
\t\t\t</div>

\t\t\t<div class=\"text-center\">
\t\t\t\t<p class=\"copyrighttexto\">Copyright 2024 | Diseñado por
\t\t\t\t\t<a class=\"enlacesfooter\" href=\"https://tictac-comunicacion.es/\">TIC TAC COMUNICACIÓN</a>
\t\t\t\t\ty Desarrollado por
\t\t\t\t\t<a class=\"enlacesfooter\" href=\"https://www.viii.es/\">COMPONENTES DE CONTROL</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
{% else %}
\t<div class=\"pre-footer py-2 row mx-0 align-items-center\">
\t\t<div class=\"col-12 col-md-auto text-center\">
\t\t\t<a href=\"{{ url('info') }}\" style=\"text-decoration:underline;color:#fff\">
\t\t\t\t&copy;
\t\t\t\t{{ config.empresa.nombre }}&nbsp;&nbsp;{{ 'now'|date('Y') }}
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t{% if config.redsysActivo %}
\t\t\t\t{% include 'footer/footer-tarjetas.html.twig' %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"col social-links pr-md-5\">
\t\t\t<a href=\"https://wa.me/34{{ config.empresa.whatsapp }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Contactar por WhatsApp\">
\t\t\t\t<i class=\"mdi mdi-whatsapp mdi-24px\" style=\"color:#25d366\"></i>
\t\t\t</a>
\t\t\t{% if config.data.red_facebook is not empty %}
\t\t\t\t<a href=\"https://www.facebook.com/{{ config.data.red_facebook }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Facebook\">
\t\t\t\t\t<i class=\"mdi mdi-facebook mdi-24px\" style=\"color:#3b5998;\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if config.data.red_twitter is not empty %}
\t\t\t\t<a href=\"https://twitter.com/{{ config.data.red_twitter }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Twitter\">
\t\t\t\t\t<i class=\"mdi mdi-twitter mdi-24px\" style=\"color:#1da1f2;\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if config.data.red_linkedin is not empty %}
\t\t\t\t<a href=\"https://linkedin.com/{{ config.data.red_linkedin }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Linkedin\">
\t\t\t\t\t<i class=\"mdi mdi-linkedin mdi-24px\" style=\"color:#1985bc\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if config.data.red_skype is not empty %}
\t\t\t\t<a href=\"skype:{{ config.data.red_skype }}?call\" title=\"Skype\">
\t\t\t\t\t<i class=\"mdi mdi-skype mdi-24px\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if config.data.red_instagram is not empty %}
\t\t\t\t<a href=\"https://instagram.com/{{ config.data.red_instagram }}\" target=\"_blank\" rel=\"noreferrer\" title=\"Instagram\">
\t\t\t\t\t<i class=\"mdi mdi-instagram mdi-24px\" style=\"color:#f0566a;\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if config.data.red_youtube is not empty %}
\t\t\t\t<a href=\"https://youtube.com/{{ config.data.red_youtube }}\" target=\"_blank\" rel=\"noreferrer\" title=\"YouTube\" style=\"margin-top:-2px\">
\t\t\t\t\t<i class=\"mdi mdi-youtube mdi-36px\" style=\"color:#ff0000;\"></i>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endif %}
<script type=\"application/ld+json\">
\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"@context\": \"http://schema.org\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"@type\": \"Address\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"streetAddress\": \"{{ config.empresa.direccion }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"postalCode\" : \"{{config.empresa.cpostal}}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"addressLocality\" : \"{{config.empresa.localidad}}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"addressRegion\" : \"{{config.empresa.provincia}}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"telephone\": \"{{ config.empresa.telefono }}\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      \"email\": \"{{ config.empresa.email }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t      }
</script>
{% if config.data.mostrar_newsletter %}
\t{% include 'footer/footer-newsletter.html.twig' %}
{% endif %}
{% include 'footer/footer-cookies.html.twig' %}
", "footer/footer.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\footer\\footer.html.twig");
    }
}
