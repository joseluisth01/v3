<?php

namespace App\Helper;

use App\Entity\Clientes;
use App\Entity\VentasCabeceras;
use App\Entity\VentasLineas;
use App\Library\Email;
use App\Library\Tools;
use App\Service\ConfigService;
use Symfony\Component\HttpFoundation\Request;

class EmailCliente extends Email
{
    /** @var Clientes */
    private Clientes $cli;

    /** @var Request */
    private Request $request;

    public function __construct(Clientes $cli, ConfigService $config, Request $request)
    {
        $this->cli = $cli;
        $this->request = $request;
        parent::__construct($config);
    }

    public function cambioClave(string $urlUsuario, string $urlCambioClave): bool
    {
        if (!$this->config->smtpOk()) {
            return false;
        }

        $cabeceraEmail = $this->cabeceraEmail();
        $pieEmail = $this->pieEmail();
        $body = <<<EOT
        <div style="box-sizing:border-box;max-width:544px;margin-right:auto;margin-left:auto;font-family:Segoe UI,Helvetica,Arial,sans-serif;">
            $cabeceraEmail
            <div style="width:100%;padding:8px;border:1px solid #e1e4e8;border-radius:6px;text-align:center;">
                <h3 style="text-align:center;font-size:20px;font-weight:600;line-height:1.25;">Reinicio de clave</h3>
                <p style="margin-top:1rem;">Utilice el siguiente botón para cambiar su clave de acceso</p>
                <div style="padding:16px; text-align:center">
                    <a href="$urlUsuario" style="background-color:#28a745;color:#fff;text-decoration:none;display:inline-block;font-size:inherit;font-weight:500;line-height:1.5;white-space:nowrap;vertical-align:middle;border-radius:.5em;padding:.75em 1.5em;border:1px solid #28a745;">
                        Cambiar mi contraseña
                    </a>
                </div>
                <p>Este enlace caducará dentro de 3 horas.</p>
                <p>Si quiere obtener un nuevo enlace para restablecer la contraseña, visite <a href="$urlCambioClave">$urlCambioClave</a></p>
                <p style="margin-top:1rem">Gracias</p>
                $pieEmail
            </div>
        </div>
        EOT;

        $subject = 'Solicitud reinicio de contraseña';

        return $this->send($subject, $body, $this->cli->email);
    }

    public function altaNuevoClienteEmpresa()
    {
        if (!$this->config->smtpOk()) {
            return;
        }

        if (empty($this->config->emailClienteNuevo())) {
            return;
        }

        $cabeceraEmail = $this->cabeceraEmail();
        $nombreCompleto = $this->cli->nombreCompleto();
        $provincia = $this->cli->nombreProvincia();

        $body = <<<EOT
        <div style="box-sizing:border-box;margin:5rem;font-family:Segoe UI,Helvetica,Arial,sans-serif;">
            $cabeceraEmail
            <div style="width:100%;padding:8px;border:1px solid #e1e4e8;border-radius:6px;">
                <h3 style="text-align:center; font-size:20px;font-weight:600;line-height:1.25;">
                    Alta nuevo cliente
                </h3>
                <p>Se ha registrado un nuevo cliente.</p>
                <table style="margin-top:2rem">
                <tbody>
                    <tr>
                        <td style="font-weight:bold;padding-right:.5rem;">CÓDIGO</td>
                        <td>{$this->cli->codigo}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;padding-right:.5rem;">NOMBRE</td>
                        <td>$nombreCompleto</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;padding-right:.5rem;">DIRECCIÓN</td>
                        <td>{$this->cli->direccion}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;padding-right:.5rem;">POBLACIÓN</td>
                        <td>{$this->cli->localidad}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;padding-right:.5rem;">PROVINCIA</td>
                        <td>{$this->cli->cpostal} $provincia</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        EOT;

        $subject = 'Nuevo cliente registrado';

        $this->send($subject, $body, $this->config->emailClienteNuevo());
    }

    public function nuevoPedidoCliente(int $idPedido): bool
    {
        if (!$this->config->smtpOk()) {
            return false;
        }

        $cab = VentasCabeceras::leeDocumento($idPedido);

        $this->nuevoPedidoEmpresa($cab); // Notificamos el pedido a la dirección de email de la empresa

        if (empty($this->cli->email)) {
            return false;
        }

        $nombreDoc = mb_strtolower($cab->nombreDoc);
        $cabeceraEmail = $this->cabeceraEmail();
        $pieEmail = $this->pieEmail();
        $tablaCliente = $this->tablaClientePedido($cab, 'Dirección');
        $detallePedido = $this->tablaDetallePedido($cab);
        $urlPedidos = $this->getBaseUrl().'/documentos/2';

        if ($cab->tipodoc == 2) {
            $obsCab = $cab->observaciones_pedido;
        } else {
            $obsCab = $cab->observaciones;
        }

        $obsPedido = '';
        if (!empty($obsCab)) {
            $obsPedido = "<p style=\"margin-top:1rem;font-weight:600\">Observaciones:</p><p>$obsCab</p>";
        }

        $detallePago = '';
        if ($this->config->redsysActivo()) {
            $detallePago = <<<EOT
            <p>
            Para proceder con el pago, si no lo has hecho ya, es necesario que accedas a la sección
            <a style="text-decoration:none" href="$urlPedidos">
            <span style="background-color:#06f; color:#fff; padding:0.25em 0.5em;">Mi&nbsp;cuenta</span>
            &nbsp;<span style="font-size:1.5rem;">&raquo;</span>&nbsp;
            <span style="background-color:#06f; color:#fff; padding:0.25em 0.5em;">Pedidos</span>
            </a>
            y pulses el botón para Pagar con Tarjeta o Bizum.
            </p>
            EOT;
        }

        $body = <<<EOT
        <div style="box-sizing:border-box;margin:1rem;font-family:Segoe UI,Helvetica,Arial,sans-serif;">
            $cabeceraEmail
            <div style="width:100%;padding:8px;border:1px solid #e1e4e8;border-radius:6px;">
                <h3 style="text-align:center; font-size:20px;font-weight:600;line-height:1.25;">
                    Recepción del pedido&nbsp;Nº&nbsp;$cab->serie&nbsp;-&nbsp;$cab->numero
                </h3>
                <p>
                    Estimad@ $cab->cli_nombre, te informamos que tu pedido con Nº $cab->serie-$cab->numero ha sido recibido con éxito.
                </p>
                $detallePago
                $tablaCliente
                <p style="margin-top:1rem;">Gracias por confiar en nosotros.</p>
                <p style="margin-top:1rem;">Detalle del pedido:</p>
                $detallePedido
                $obsPedido
            </div>
            $pieEmail
        </div>
        EOT;

        $subject = "Recepción del $nombreDoc $cab->serie - $cab->numero en ".$this->config->nombreWeb();

        return $this->send($subject, $body, $this->cli->email, $this->config->emailCopiaPedidos());
    }

    private function nuevoPedidoEmpresa(VentasCabeceras $cab)
    {
        if (!$this->config->smtpOk() || empty($this->config->emailPedidos())) {
            return;
        }

        $nombreDoc = mb_strtolower($cab->nombreDoc);
        $cabeceraEmail = $this->cabeceraEmail();
        $tablaCliente = $this->tablaClientePedido($cab, 'Cliente');
        $detallePedido = $this->tablaDetallePedido($cab);

        if ($cab->tipodoc == 2) {
            $obsCab = $cab->observaciones_pedido;
        } else {
            $obsCab = $cab->observaciones;
        }

        $obsPedido = '';
        if (!empty($obsCab)) {
            $obsPedido = "<p style=\"margin-top:1rem;font-weight:600\">Observaciones:</p><p>$obsCab</p>";
        }

        $body = <<<EOT
        <div style="box-sizing:border-box;margin:5rem;font-family:Segoe UI,Helvetica,Arial,sans-serif;">
            $cabeceraEmail
            <div style="width:100%;padding:8px;border:1px solid #e1e4e8;border-radius:6px;">
                <h3 style="text-align:center; font-size:20px;font-weight:600;line-height:1.25;">
                    Recepción del pedido&nbsp;Nº&nbsp;$cab->serie&nbsp;-&nbsp;$cab->numero
                </h3>
                <p>Se ha creado un nuevo pedido.</p>
                $tablaCliente
                <p style="margin-top:1rem;">Detalle:</p>
                $detallePedido
                $obsPedido
            </div>
        </div>
        EOT;

        $subject = "Nuevo $nombreDoc $cab->serie - $cab->numero $cab->cli_nombre";

        $this->send($subject, $body, $this->config->emailPedidos());
    }

    private function tablaClientePedido(VentasCabeceras $cab, string $titulo): string
    {
        return <<<EOT
        <table>
            <tbody>
                <tr>
                    <td style="color:#f00;padding-right:5px;font-weight:600;">$titulo:</td>
                    <td>$cab->cli_nombre</td>
                </tr>
                <tr>
                    <td></td>
                    <td>$cab->cli_direccion</td>
                </tr>
                <tr>
                    <td></td>
                    <td>$cab->cli_cpostal, $cab->cli_provincia</td>
                </tr>
            </tbody>
        </table>
        EOT;
    }

    private function tablaDetallePedido(VentasCabeceras $cab): string
    {
        $tabla = '<table style="border-collapse:collapse; width:100%;">
        <thead>
            <tr>
                <th style="font-weight:600; border-bottom:1px solid #999;">Artículo</th>
                <th style="font-weight:600; border-bottom:1px solid #999;text-align:right;">Cant.</th>
                <th style="font-weight:600; border-bottom:1px solid #999;text-align:right;">Precio</th>
                <th style="font-weight:600; border-bottom:1px solid #999;text-align:right;">Importe</th>
            </tr>
        </thead>
        <tbody>';
        foreach (VentasLineas::lineasImpresion($cab->id) as $lin) {
            $tabla .= <<<EOT
            <tr>
                <td style="padding:5px;">{$lin['descripcion']}</td>
                <td style="padding-left:15px;text-align:right;">{$lin['unidades']}</td>
                <td style="padding-left:15px;text-align:right;">{$lin['precio']}&nbsp;€</td>
                <td style="padding-left:15px;text-align:right;">{$lin['importe']}&nbsp;€</td>
            </tr>
            EOT;
        }
        $tabla .= '</tbody></table>';

        $baseImpo = Tools::floatFormat($cab->baseimpo1 + $cab->baseimpo2 + $cab->baseimpo3);
        $iva = Tools::floatFormat($cab->iva1 + $cab->iva2 + $cab->iva3 + $cab->rec1 + $cab->rec2 + $cab->rec3);
        $total = Tools::floatFormat($cab->total);

        $txtPortes = '';
        if ($cab->portes != 0) {
            $portes = Tools::floatFormat($cab->portes);
            $txtPortes = <<<EOT
            <tr style="margin-top:1.5rem;">
            <td style="padding-left:15px;">Gastos de envío</td>
            <td style="padding-left:25px;text-align:right;">$portes&nbsp;&euro;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            EOT;
        }

        $tabla .= <<<EOT
        <table style=" width:auto;margin-right:0;margin-left:auto;border-collapse:collapse;margin-top:1.5rem;">
            <tbody>
                $txtPortes
                <tr style="border-top:1px solid #777;">
                    <td style="padding-left:15px;">Base Imponible</td>
                    <td style="padding-left:25px;text-align:right;">$baseImpo&nbsp;&euro;</td>
                </tr>
                <tr>
                    <td style="padding-left:15px;">IVA</td>
                    <td style="padding-left:25px;text-align:right;">$iva&nbsp;&euro;</td>
                </tr>
                <tr style="font-weight:bold">
                    <td style="padding-left:15px;">Total Pedido</td>
                    <td style="padding-left:25px;text-align:right;">$total&nbsp;&euro;</td>
                </tr>
            </tbody>
        </table>
        EOT;

        return $tabla;
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
                <a style="display:inline-block;text-decoration:none;color:#000;margin-left:4rem;" href="https://wa.me/34{$empresa['whatsapp']}">
                <img style="vertical-align: middle;" src="{$socialUrl}whatsapp.png" alt="contacto whatsapp">
                <span style="vertical-align: middle;">34{$empresa['whatsapp']}</span>
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
        <div style="margin-top:2rem;font-weight:600">
            <div>{$empresa['nombre']}</div>
            <div>{$empresa['cif']}</div>
            <div>{$empresa['direccion']}</div>
            <div>{$empresa['cpostal']} - {$empresa['localidad']}</div>
            <div>{$empresa['provincia']}</div>
        </div>
        EOT;

        return $html;
    }
}
