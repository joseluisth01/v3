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

/* cobros/cobro.html.twig */
class __TwigTemplate_d07ef64b01830968ba5a68e507090dea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobros/cobro.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cobros/cobro.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["urlRedsys"]) || array_key_exists("urlRedsys", $context) ? $context["urlRedsys"] : (function () { throw new RuntimeError('Variable "urlRedsys" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" name=\"form-cobro\" id=\"form-cobro\" method=\"POST\" onsubmit=\"\$('#cobro-modal').modal('toggle');\">
    <div class=\"modal-header\">
        <h4 class=\"modal-title\" id=\"redsys-title\"><i class=\"mdi mdi-credit-card-outline mr-2\"></i>Pago con tarjeta de crédito</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
    </div>
    <div class=\"modal-body px-4\">
        <h4>COBRO ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h4>
        <p class=\"text-danger pt-2\">Pulse Aceptar para iniciar el proceso de pago</p>
        <div class=\"row\">
            <div class=\"col-auto\">
                <p class=\"pt-1\">Método de pago</p>
            </div>
            <div class=\"col\">
                <div class=\"custom-control custom-radio custom-control-inline\">
                    <input type=\"radio\" id=\"radioT\" name=\"fp\" class=\"custom-control-input radio-fp\" checked>
                    <label class=\"custom-control-label pt-1\" for=\"radioT\">Tarjeta</label>
                </div>
                <div class=\"custom-control custom-radio custom-control-inline\">
                    <input type=\"radio\" id=\"radioB\" name=\"fp\" class=\"custom-control-input radio-fp\">
                    <label class=\"custom-control-label pt-1\" for=\"radioB\">Bizum</label>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-success\"><span class=\"mdi mdi-check mr-2\"></span>Aceptar</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"btn-cobro-cancel\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
    </div>
    <input type=\"hidden\" name=\"Ds_SignatureVersion\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"Ds_MerchantParameters\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["paramsTarjeta"]) || array_key_exists("paramsTarjeta", $context) ? $context["paramsTarjeta"] : (function () { throw new RuntimeError('Variable "paramsTarjeta" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"Ds_Signature\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["signatureTarjeta"]) || array_key_exists("signatureTarjeta", $context) ? $context["signatureTarjeta"] : (function () { throw new RuntimeError('Variable "signatureTarjeta" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" />
</form>
<input type=\"hidden\" id=\"pt\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["paramsTarjeta"]) || array_key_exists("paramsTarjeta", $context) ? $context["paramsTarjeta"] : (function () { throw new RuntimeError('Variable "paramsTarjeta" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
<input type=\"hidden\" id=\"pb\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["paramsBizum"]) || array_key_exists("paramsBizum", $context) ? $context["paramsBizum"] : (function () { throw new RuntimeError('Variable "paramsBizum" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
<input type=\"hidden\" id=\"st\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["signatureTarjeta"]) || array_key_exists("signatureTarjeta", $context) ? $context["signatureTarjeta"] : (function () { throw new RuntimeError('Variable "signatureTarjeta" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
<input type=\"hidden\" id=\"sb\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["signatureBizum"]) || array_key_exists("signatureBizum", $context) ? $context["signatureBizum"] : (function () { throw new RuntimeError('Variable "signatureBizum" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
<script>
    \$('input.radio-fp').on('change', function () {
        if (\$(this).prop('checked')) {
            let tarjeta = \$('#radioT').prop('checked');
            \$('input[name=Ds_MerchantParameters]').val(\$(tarjeta ? '#pt' : '#pb').val());
            \$('input[name=Ds_Signature]').val(\$(tarjeta ? '#st' : '#sb').val());
        }
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cobros/cobro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  99 => 35,  95 => 34,  91 => 33,  86 => 31,  82 => 30,  78 => 29,  53 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ urlRedsys }}\" name=\"form-cobro\" id=\"form-cobro\" method=\"POST\" onsubmit=\"\$('#cobro-modal').modal('toggle');\">
    <div class=\"modal-header\">
        <h4 class=\"modal-title\" id=\"redsys-title\"><i class=\"mdi mdi-credit-card-outline mr-2\"></i>Pago con tarjeta de crédito</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
    </div>
    <div class=\"modal-body px-4\">
        <h4>COBRO {{ documento }}</h4>
        <p class=\"text-danger pt-2\">Pulse Aceptar para iniciar el proceso de pago</p>
        <div class=\"row\">
            <div class=\"col-auto\">
                <p class=\"pt-1\">Método de pago</p>
            </div>
            <div class=\"col\">
                <div class=\"custom-control custom-radio custom-control-inline\">
                    <input type=\"radio\" id=\"radioT\" name=\"fp\" class=\"custom-control-input radio-fp\" checked>
                    <label class=\"custom-control-label pt-1\" for=\"radioT\">Tarjeta</label>
                </div>
                <div class=\"custom-control custom-radio custom-control-inline\">
                    <input type=\"radio\" id=\"radioB\" name=\"fp\" class=\"custom-control-input radio-fp\">
                    <label class=\"custom-control-label pt-1\" for=\"radioB\">Bizum</label>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-success\"><span class=\"mdi mdi-check mr-2\"></span>Aceptar</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"btn-cobro-cancel\" data-dismiss=\"modal\"><span class=\"mdi mdi-close mr-2\"></span>Cerrar</button>
    </div>
    <input type=\"hidden\" name=\"Ds_SignatureVersion\" value=\"{{ version }}\" />
    <input type=\"hidden\" name=\"Ds_MerchantParameters\" value=\"{{ paramsTarjeta }}\" />
    <input type=\"hidden\" name=\"Ds_Signature\" value=\"{{ signatureTarjeta }}\" />
</form>
<input type=\"hidden\" id=\"pt\" value=\"{{ paramsTarjeta }}\">
<input type=\"hidden\" id=\"pb\" value=\"{{ paramsBizum }}\">
<input type=\"hidden\" id=\"st\" value=\"{{ signatureTarjeta }}\">
<input type=\"hidden\" id=\"sb\" value=\"{{ signatureBizum }}\">
<script>
    \$('input.radio-fp').on('change', function () {
        if (\$(this).prop('checked')) {
            let tarjeta = \$('#radioT').prop('checked');
            \$('input[name=Ds_MerchantParameters]').val(\$(tarjeta ? '#pt' : '#pb').val());
            \$('input[name=Ds_Signature]').val(\$(tarjeta ? '#st' : '#sb').val());
        }
    });
</script>", "cobros/cobro.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\cobros\\cobro.html.twig");
    }
}
