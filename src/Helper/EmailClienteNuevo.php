<?php

namespace App\Helper;

use App\Entity\WebClientes;
use App\Library\Email;
use App\Service\ConfigService;
use Symfony\Component\HttpFoundation\Request;

class EmailClienteNuevo extends Email
{
    /** @var WebClientes */
    private WebClientes $cli;

    /** @var Request */
    private Request $request;

    public function __construct(WebClientes $cli, ConfigService $config, Request $request)
    {
        $this->cli = $cli;
        $this->request = $request;
        parent::__construct($config);
    }

    public function altaNuevoCliente(): bool
    {
        if (!$this->config->smtpOk()) {
            return false;
        }

        $baseUrl = $this->getBaseUrl();

        $urlConfirm = $baseUrl.'/cliente/registro/confirmacion/'.$this->cli->codigo;

        $nombreWeb = $this->config->nombreWeb();
        $cabeceraEmail = $this->cabeceraEmail();
        $pieEmail = $this->pieEmail();
        $body = <<<EOT
        <div style="box-sizing:border-box;margin:2rem;font-family:Segoe UI,Helvetica,Arial,sans-serif;">
            $cabeceraEmail
            <div style="width:100%;padding:8px;border:1px solid #e1e4e8;border-radius:6px;">
                <h3 style="text-align:center;font-size:20px;font-weight:600;line-height:1.25;">Bienvenid@ {$this->cli->nombre}</h3>
                <p style="margin-top:2rem;">
                    Gracias por registrarte en
                    <a style="text-decoration:none;color:#000;font-weight:500" href="$baseUrl">$nombreWeb</a>
                </p>
                <div style="margin:1rem;">
                    <p>Sólamente te queda un paso</p>
                    <p>Haz click en el botón de abajo y podrás hacer tu primer pedido</p>
                </div>
                <div style="margin:1rem; text-align:center;">
                    <a href="$urlConfirm" style="display:inline-block;background-color:#199319;color:white;padding:15px 25px;text-decoration:none;">
                        Confirmar registro
                    </a>
                </div>
                <div style="margin:1rem;">
                    <p>En caso de que el botón no funcione, simplemente copia y pega el siguiente enlace en tu navegador</p>
                    <p style="color:#0000ff">$urlConfirm</p>
                </div>
            </div>
            $pieEmail
        </div>
        EOT;

        $subject = "Registro en $nombreWeb";

        return $this->send($subject, $body, $this->cli->email);
    }

    private function getBaseUrl(): string
    {
        return $this->request->getScheme().'://'.$this->request->getHttpHost().$this->request->getBasePath();
    }

    private function cabeceraEmail(): string
    {
        $baseUrl = $this->getBaseUrl();
        $imageUrl = $baseUrl.'/'.$this->config->logo();
        $nombreWeb = $this->config->nombreWeb();

        return <<<EOT
        <a style="text-decoration:none;color:#000;" href="$baseUrl">
            <h2 style="margin-bottom:.5rem;font-weight:400;font-size:24px;line-height:1.25;">$nombreWeb</h2>
        </a>
        <div style="text-align:center;margin:0;">
            <a style="text-decoration:none;color:#000;" href="$baseUrl">
                <img style="width:auto;max-height:70px;" height="70" alt="$nombreWeb" src="$imageUrl">
            </a>
        </div>
        EOT;
    }

    private function pieEmail(): string
    {
        $socialUrl = $this->getBaseUrl().'/images/social/';
        $nombreWeb = $this->config->nombreWeb();
        $empresa = $this->config->empresa();
        $html = '<p style="margin-top:2rem;">Si tienes cualquier duda o consulta estaremos encantados de ayudarte.</p>';

        if (!empty($empresa['telefono']) || !empty($empresa['whatsapp']) || !empty($empresa['email'])) {
            $html .= '<div style="text-align:center;background-color: #eee;padding: .25rem">';
            if (!empty($empresa['telefono'])) {
                $html .= <<<EOT
                <a style="display:inline-block;text-decoration:none;color:#000;" href="https://tel:{$empresa['telefonoUri']}">
                <img style="vertical-align: middle;" src="{$socialUrl}phone.png" alt="contacto telefónico">
                <span style="vertical-align: middle;">{$empresa['telefono']}</span>
                </a>
                EOT;
            }
            if (!empty($empresa['whatsapp'])) {
                $html .= <<<EOT
                <a style="display:inline-block;text-decoration:none;color:#000;margin-left:4rem;" href="https://wa.me/{$empresa['whatsapp']}">
                <img style="vertical-align: middle;" src="{$socialUrl}whatsapp.png" alt="contacto whatsapp">
                <span style="vertical-align: middle;">3412345678</span>
                </a>
                EOT;
            }
            if (!empty($empresa['email'])) {
                $html .= <<<EOT
                <a style="display:inline-block;text-decoration:none;color:#000;margin-left:4rem;" href="mailto:{$empresa['email']}">
                <img style="vertical-align: middle;" src="{$socialUrl}email.png" alt="contacto email">
                <span style="vertical-align: middle;">{$empresa['email']}</span>
                </a>
                EOT;
            }
            $html .= '</div>';
        }

        list($facebook, $twitter, $skype, $linkedin, $youtube, $instagram) = $this->config->redesSociales();

        if (!empty($facebook) || !empty($twitter) || !empty($skype) || !empty($linkedin) || !empty($youtube)) {
            $html .= '<div style="text-align:center;margin-top:1rem;">';
            if (!empty($facebook)) {
                $html .= <<<EOT
                <a style="text-decoration:none;" href="https://www.facebook.com/$facebook">
                    <img src="{$socialUrl}facebook.png" alt="Facebook">
                </a>
                EOT;
            }
            if (!empty($twitter)) {
                $html .= <<<EOT
                <a style="margin-left:3rem;text-decoration:none;" href="https://twitter.com/$twitter">
                    <img src="{$socialUrl}twitter.png" alt="Twitter">
                </a>
                EOT;
            }
            if (!empty($linkedin)) {
                $html .= <<<EOT
                <a style="margin-left:3rem;text-decoration:none;" href="https://linkedin.com/$linkedin">
                    <img src="{$socialUrl}linkedin.png" alt="Linkedin">
                </a>
                EOT;
            }
            if (!empty($skype)) {
                $html .= <<<EOT
                <a style="margin-left:3rem;text-decoration:none;" href="skype:$skype?call">
                    <img src="{$socialUrl}skype.png" alt="Skype">
                </a>
                EOT;
            }
            if (!empty($instagram)) {
                $html .= <<<EOT
                <a style="margin-left:3rem;text-decoration:none;" href="https://instagram.com/$instagram">
                    <img src="{$socialUrl}instagram.png" alt="Instagram">
                </a>
                EOT;
            }
            if (!empty($youtube)) {
                $html .= <<<EOT
                <a style="margin-left:3rem;text-decoration:none;" href="https://youtube.com/$youtube">
                    <img src="{$socialUrl}youtube.png" alt="YouTube">
                </a>
                EOT;
            }
            $html .= '</div>';
        }

        $html .= <<<EOT
        <p style="margin-top:2rem;">Atentamente,</p>
        <p>El equipo de $nombreWeb.</p>
        <div style="margin-top:2.5rem;font-weight:600;text-align:center">{$empresa['nombre']}</div>
        EOT;

        return $html;
    }
}
