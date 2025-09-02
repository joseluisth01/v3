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

/* footer/footer-cookies.html.twig */
class __TwigTemplate_54741346a3252d1a3dc7db9a2a4ba402 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer-cookies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer-cookies.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-cookies\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-cookies-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-cookies-title\">Cookies</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"accordion\" id=\"cookies_accordion\">
          <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                  <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#cookie_session\" aria-expanded=\"true\" aria-controls=\"cookie_session\">
                    COOKIES TÉCNICAS (siempre activas)
                  </button>
                  <div class=\"custom-control custom-switch\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"ck_tecnica\" id=\"ck_tecnica\" checked disabled>
                    <label class=\"custom-control-label\" for=\"ck_tecnica\"></label>
                  </div>
                </div>
                <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#cookie_session\" aria-expanded=\"true\" aria-controls=\"cookie_session\"></span>
              </div>
            </div>
            <div id=\"cookie_session\" class=\"collapse\" aria-labelledby=\"cookie_session\" data-parent=\"#cookies_accordion\">
              <div class=\"card-body\">
                <p>Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas.</p>
                <p>Usualmente están configuradas para responder a acciones hechas por tí para recibir servicios, tales como ajustar tus preferencias de privacidad, iniciar sesión en el sitio, o llenar formularios.</p>
                <p>Puedes configurar tu navegador para bloquear o alertar la presencia de estas cookies, pero algunas partes del sitio web no funcionarán.</p>
                <p>Estas cookies no guardan ninguna información personal identificable.</p>
              </div>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                  <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#ck_google_ana\" aria-expanded=\"true\" aria-controls=\"ck_google_ana\">
                    COOKIES ANALÍTICAS
                  </button>
                  <div class=\"custom-control custom-switch\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"ck_analytics\" id=\"ck_analytics\" checked>
                    <label class=\"custom-control-label\" for=\"ck_analytics\"></label>
                  </div>
                </div>
                <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#ck_google_ana\" aria-expanded=\"true\" aria-controls=\"ck_google_ana\"></span>
              </div>
            </div>
            <div id=\"ck_google_ana\" class=\"collapse\" aria-labelledby=\"ck_google_ana\" data-parent=\"#cookies_accordion\">
              <div class=\"card-body\">
                <p>
                  Esta web utiliza Google Analytics para recopilar información anónima tal como el número de visitantes del sitio, o las páginas más populares.
                </p>
                <p>
                  Dejar esta cookie activa nos permite mejorar nuestra web.
                </p>

                Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas. Usualmente están configuradas para responder a acciones hechas por tí para recibir servicios, tales como ajustar tus preferencias de privacidad, iniciar sesión en el sitio, o llenar formularios. Puedes configurar tu navegador para bloquear o alertar la presencia de estas cookies, pero algunas partes del sitio web no funcionarán. Estas cookies no guardan ninguna información personal identificable.
              </div>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"d-flex justify-content-between align-items-center w-100\">
                <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#ck_info\" aria-expanded=\"true\" aria-controls=\"ck_info\">
                  MÁS INFORMACIÓN
                </button>
              </div>
              <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#ck_info\" aria-expanded=\"true\" aria-controls=\"ck_info\"></span>
            </div>
          </div>
          <div id=\"ck_info\" class=\"collapse\" aria-labelledby=\"ck_info\" data-parent=\"#cookies_accordion\">
            <div class=\"card-body\">
              <ul>
                <li>
                  <h5>
                    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos-cookies");
        echo "\">Detalles de cookies</a>
                  </h5>
                </li>
                <li>
                  <h5>
                    <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("textos-privacidad");
        echo "\">Política de privacidad</a>
                  </h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"btn-modal-cookies-accept\">
          <i class=\"mdi mdi-check mr-2\"></i>Guardar configuración
        </button>
        <button type=\"button\" class=\"btn btn-secondary btn-block\" data-dismiss=\"modal\">
          <i class=\"mdi mdi-close mr-2\"></i>Cerrar
        </button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer/footer-cookies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 86,  125 => 81,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modal-cookies\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-cookies-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-cookies-title\">Cookies</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"accordion\" id=\"cookies_accordion\">
          <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                  <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#cookie_session\" aria-expanded=\"true\" aria-controls=\"cookie_session\">
                    COOKIES TÉCNICAS (siempre activas)
                  </button>
                  <div class=\"custom-control custom-switch\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"ck_tecnica\" id=\"ck_tecnica\" checked disabled>
                    <label class=\"custom-control-label\" for=\"ck_tecnica\"></label>
                  </div>
                </div>
                <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#cookie_session\" aria-expanded=\"true\" aria-controls=\"cookie_session\"></span>
              </div>
            </div>
            <div id=\"cookie_session\" class=\"collapse\" aria-labelledby=\"cookie_session\" data-parent=\"#cookies_accordion\">
              <div class=\"card-body\">
                <p>Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas.</p>
                <p>Usualmente están configuradas para responder a acciones hechas por tí para recibir servicios, tales como ajustar tus preferencias de privacidad, iniciar sesión en el sitio, o llenar formularios.</p>
                <p>Puedes configurar tu navegador para bloquear o alertar la presencia de estas cookies, pero algunas partes del sitio web no funcionarán.</p>
                <p>Estas cookies no guardan ninguna información personal identificable.</p>
              </div>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex justify-content-between align-items-center w-100\">
                  <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#ck_google_ana\" aria-expanded=\"true\" aria-controls=\"ck_google_ana\">
                    COOKIES ANALÍTICAS
                  </button>
                  <div class=\"custom-control custom-switch\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"ck_analytics\" id=\"ck_analytics\" checked>
                    <label class=\"custom-control-label\" for=\"ck_analytics\"></label>
                  </div>
                </div>
                <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#ck_google_ana\" aria-expanded=\"true\" aria-controls=\"ck_google_ana\"></span>
              </div>
            </div>
            <div id=\"ck_google_ana\" class=\"collapse\" aria-labelledby=\"ck_google_ana\" data-parent=\"#cookies_accordion\">
              <div class=\"card-body\">
                <p>
                  Esta web utiliza Google Analytics para recopilar información anónima tal como el número de visitantes del sitio, o las páginas más populares.
                </p>
                <p>
                  Dejar esta cookie activa nos permite mejorar nuestra web.
                </p>

                Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas. Usualmente están configuradas para responder a acciones hechas por tí para recibir servicios, tales como ajustar tus preferencias de privacidad, iniciar sesión en el sitio, o llenar formularios. Puedes configurar tu navegador para bloquear o alertar la presencia de estas cookies, pero algunas partes del sitio web no funcionarán. Estas cookies no guardan ninguna información personal identificable.
              </div>
            </div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"d-flex justify-content-between align-items-center w-100\">
                <button class=\"btn btn-link btn-block text-left text-dark font-weight-bold\" data-toggle=\"collapse\" data-target=\"#ck_info\" aria-expanded=\"true\" aria-controls=\"ck_info\">
                  MÁS INFORMACIÓN
                </button>
              </div>
              <span class=\"mdi mdi-chevron-down mdi-24px collapsed\" data-toggle=\"collapse\" data-target=\"#ck_info\" aria-expanded=\"true\" aria-controls=\"ck_info\"></span>
            </div>
          </div>
          <div id=\"ck_info\" class=\"collapse\" aria-labelledby=\"ck_info\" data-parent=\"#cookies_accordion\">
            <div class=\"card-body\">
              <ul>
                <li>
                  <h5>
                    <a href=\"{{ url('textos-cookies') }}\">Detalles de cookies</a>
                  </h5>
                </li>
                <li>
                  <h5>
                    <a href=\"{{ url('textos-privacidad') }}\">Política de privacidad</a>
                  </h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"btn-modal-cookies-accept\">
          <i class=\"mdi mdi-check mr-2\"></i>Guardar configuración
        </button>
        <button type=\"button\" class=\"btn btn-secondary btn-block\" data-dismiss=\"modal\">
          <i class=\"mdi mdi-close mr-2\"></i>Cerrar
        </button>
      </div>
    </div>
  </div>
</div>
", "footer/footer-cookies.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\footer\\footer-cookies.html.twig");
    }
}
