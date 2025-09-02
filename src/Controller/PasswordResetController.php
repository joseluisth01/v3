<?php

namespace App\Controller;

use App\Entity\Clientes;
use App\Helper\EmailCliente;
use App\Library\Tools;
use App\Security\User;
use App\Service\ConfigService;
use DateInterval;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Contracts\EventDispatcher\Event;

class PasswordResetController extends AbstractController
{
    /** @var ConfigService */
    public $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    /** @Route("/password_reset_2", name="password-reset-2") */
    public function index2(Request $request, SessionInterface $session): Response
    {
        $session->set('msg_error', '<span style="font-size: 1.3rem;font-weight: bold;">DEBE CAMBIAR SU CLAVE DE ACCESO</span>');
        return $this->index($request, $session);
    }

    /** @Route("/password_reset", name="password-reset") */
    public function index(Request $request, SessionInterface $session): Response
    {
        $data = [
            'config' => $this->config,
            'mensaje' => '',
            'email' => '',
        ];

        if ($request->isMethod('GET')) {
            $data['mensaje'] = $session->remove('msg_error');

            return $this->render('password_reset/solicitud-cambio.html.twig', $data);
        }

        $submittedToken = $request->request->get('token');
        if (!$this->isCsrfTokenValid('reset-password', $submittedToken)) {
            return new Response('<h1>Acceso no autorizado<h1>', 403);
        }

        $email = $request->request->get('email');
        $cli = new Clientes();

        if (!$cli->findByEmail($email)) {
            $data['mensaje'] = "La dirección de email no es válida<br>No tenemos registrada la dirección de correo <b>$email</b>";
            $data['email'] = $email;

            return $this->render('password_reset/solicitud-cambio.html.twig', $data);
        }

        $token = $this->encodeToken($email);
        $urlUsuario = $this->generateUrl('password-new', ['param' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
        $urlCambioClave = $this->generateUrl('password-reset', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $email = new EmailCliente($cli, $this->config, $request);
        $email->cambioClave($urlUsuario, $urlCambioClave);

        return $this->redirectToRoute('password-reset-ok');
    }

    /** @Route("/password_reset_ok", name="password-reset-ok") */
    public function emailEnviado(): Response
    {
        $data = [
            'config' => $this->config,
        ];

        return $this->render('password_reset/email-enviado.html.twig', $data);
    }

    /** @Route("/password_new/{param}", name="password-new", requirements={"param"=".+"}) */
    public function vistaCambioClave(string $param, SessionInterface $session): Response
    {
        $error = '';
        $cli = new Clientes();
        [$fecha, $email] = $this->decodeToken($param);
        if (empty($fecha) || empty($email)) {
            $error = 'La solicitud no es válida.';
        } else {
            $now = new DateTime();
            if ($now > $fecha) {
                $error = 'La solicitud ha expirado.<br>Puede solicitar de nuevo el cambio de contraseña.';
            } elseif (!$cli->findByEmail($email)) {
                $error = 'La solicitud no es válida.<br>El usuario no es correcto.';
            }
        }

        if (!empty($error)) {
            $session->set('msg_error', $error);
            return $this->redirectToRoute('password-reset');
        }

        $data = [
            'config' => $this->config,
            'codigo' => $cli->codigo,
            'email' => $cli->email,
            'cif' => strtoupper($cli->cif),
            'nombre' => $cli->nombreCompleto(),
        ];

        return $this->render('password_reset/nueva-clave.html.twig', $data);
    }

    /** @Route("/password_change", name="password-change") */
    public function cambioClave(Request $request, SessionInterface $session)
    {
        $submittedToken = $request->request->get('token');
        if (!$this->isCsrfTokenValid('reset-password', $submittedToken)) {
            return new Response('<h1>Acceso no autorizado<h1>', 403);
        }

        $error = false;
        $cli = new Clientes();
        $codigo = (int) $request->request->get('codigo');

        if (!Tools::codeVerifyOkFromRequest($request, 'codigo', 'verif')) {
            $error = true;
        } else {
            $email = $request->request->get('email');
            if (!$cli->findByEmail($email)) {
                $error = true;
            } elseif ($cli->codigo !== $codigo) {
                $error = true;
            }
        }

        if ($error) {
            $session->set('msg_error', 'La solicitud no es válida.<br>Cliente incorrecto');
            return $this->redirectToRoute('password-reset');
        }

        $cli->actualizaPassword($request->request->get('password'));

        $user = User::loadUserByIdentifier('C-'.$cli->codigo);
        $this->autoLogin($user, $session);
        $user->setClient($cli->codigo, $session);
        $this->addFlash('success', 'Su contraseña se ha actualizado;#Cambio clave aceso');

        $urlHome = $this->generateUrl('home');
        $html = "<!DOCTYPE html><html lang=\"es\"><body><script>window.location='$urlHome';</script></body></html>";

        return new Response($html);
    }

    private function autoLogin(User $user, SessionInterface $session)
    {
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);
        $session->set('_security_main', serialize($token));
        $session->save();

        $eventDispatcher = new EventDispatcher();
        $event = new Event();
        $eventDispatcher->dispatch($event, SecurityEvents::INTERACTIVE_LOGIN);
    }

    private function encodeToken(string $email): string
    {
        $getByte = function () {
            return bin2hex(random_bytes(1));
        };
        $email = strrev($email);
        $fecha = new DateTime();
        $fecha->add(new DateInterval('PT3H'));
        $token = $getByte().$fecha->format('Ymd').$getByte().$fecha->format('Hi').$getByte().bin2hex($email).$getByte();

        return urlencode($token);
    }

    private function decodeToken($token): array
    {
        $fecha = null;
        $email = '';
        $token = urldecode($token);
        if (strlen($token) > 20) {
            try {
                $txtFecha = substr($token, 2, 8).substr($token, 12, 4);
                $fecha = new DateTime($txtFecha);

                $len = strlen($token) - 2 - 18;
                if ($len > 0 && $len % 2 === 0) {
                    $email = strrev(hex2bin(substr($token, 18, $len)));
                }
            } catch (\Exception $e) {
            }
        }

        return [$fecha, $email];
    }
}
