<?php

namespace App\Controller;

use App\Entity\Clientes;
use App\Entity\WebClientes;
use App\Entity\WebLineasPedidos;
use App\Helper\EmailCliente;
use App\Helper\EmailClienteNuevo;
use App\Library\DataTables;
use App\Library\SqlFilter;
use App\Library\Tools;
use App\Security\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/** @Route("/cliente", name="cliente") */
class ClienteController extends BaseController
{
    /**
     * @Route("/registro", name="-registro")
     */
    public function index(): Response
    {
        $datos = ['provincias' => Clientes::listaProvincias()];

        $msgError = $this->session->remove('err-client-new');
        if (!empty($msgError)) {
            $datos['msgError'] = $msgError;
        }

        return $this->render('cliente/cliente-registro.html.twig', $datos);
    }

    /**
     * @Route("/registro/grabar", name="-registro-grabar", methods={"POST"})
     */
    public function grabaNuevoCliente(Request $request): Response
    {
        $submittedToken = $request->request->get('_csrf_token');
        if (!$this->isCsrfTokenValid('client-new', $submittedToken)) {
            $this->session->set('err-client-new', 'La petición no es válida.<small class="d-block">[ Parámetros incorrectos ]</small>');

            return $this->redirectToRoute('cliente-registro');
        }

        $postData = $request->request->all();
        $clave = $postData['clave'];
        $postData['clave'] = '';

        $cli = new WebClientes();
        $cli->setFields($postData);
        $cli->cif = \strtoupper(Tools::clearCIF($cli->cif));
        $cli->session_id = $this->session->getId();
        $cli->insert();

        $email = new EmailClienteNuevo($cli, $this->config, $request);
        $email->altaNuevoCliente();

        $msg = "Bienvenid@ $cli->nombre<br><br><small>Gracias por registrarte<br>Hemos enviado un correo a tu dirección de email para que confirmes el registro<br><br>Una vez confirmado podrás realizar tus compras.</small>;#Registro en proceso";
        $this->addFlash('success', $msg);

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/registro/confirmacion/{uuid}", name="-registro-confirmacion")
     */
    public function confirmacionRegistro(string $uuid, Request $request): Response
    {
        if (!preg_match('/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i', $uuid)) {
            return $this->render('cliente/cliente-error.html.twig', []);
        }

        $wCli = new WebClientes();
        if (!$wCli->selectPK($uuid)) {
            return $this->render('cliente/cliente-error.html.twig', []);
        }

        $cli = $wCli->grabaCliente($this->config->tarifa());
        $this->addFlash('newcli', (string) $cli->codigo);

        $user = User::findClient("codigo = $cli->codigo");
        $this->session->set('user_session_id', $wCli->session_id);
        $user->setClient($cli->codigo, $this->session);
        $this->autoLogin($user);

        $wCli->delete();

        $msg = "Bienvenid@ $cli->nombre<br><br><small>Gracias por registrarte<br>Ya puedes realizar tu primer pedido</small>;#Registro realizado";
        $this->addFlash('success', $msg);

        if (WebLineasPedidos::existeCliente($cli->codigo)) {
            $url = $this->generateUrl('cart-view');
        } else {
            $url = $this->generateUrl('home');
        }
        $html = "<!DOCTYPE html><html lang=\"es\"><body><script>window.location='$url';</script></body></html>";

        return new Response($html);
    }

    /**
     * @Route("/registro/confirmacion2/{codigo}", name="-registro-confirmacion2")
     */
    public function emailEmpresaClienteNuevo($codigo, Request $request): Response
    {
        $resp = 'NOK';
        $cli = new Clientes();
        if ($cli->selectPK($codigo)) {
            $email = new EmailCliente($cli, $this->config, $request);
            $email->altaNuevoClienteEmpresa();
            $resp = 'OK';
        }

        return new Response($resp);
    }

    private function autoLogin(User $user)
    {
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);
        $this->session->set('_security_main', serialize($token));
        $this->session->save();
    }

    /**
     * @Route("/seleccion/{param}", name="-seleccion", methods={"GET"}, requirements={"param"=".+"})
     */
    public function seleccionFull(Request $request, string $param = ''): Response
    {
        if ($this->user->isClient()) {
            return $this->redirectToRoute('home');
        }

        $referer = $request->headers->get('referer'); // get the referer, it can be empty!
        if (!empty($referer) && is_string($referer)) {
            $this->session->set('selcli_referer', $referer);
        }

        $data = [
            'actualiza_carrito' => !empty($param),
        ];

        return $this->render('seleccion/clientes-full.html.twig', $data);
    }

    /**
     * @Route("/seleccion", name="-seleccion-post", methods={"POST"})
     */
    public function cambioCliente(Request $request): Response
    {
        $referer = $this->session->remove('selcli_referer');
        if (!$this->user->isClient()) {
            if (Tools::codeVerifyOkFromRequest($request, 'codigo', 'verif')) {
                $codigo = $request->request->getInt('codigo');
                $actualiza = !empty($request->request->get('act'));
                $this->user->setClient($codigo, $this->session, $actualiza);
            }
        }

        return new Response($referer);
    }

    /**
     * @Route("/lista", name="-lista", methods={"POST"})
     */
    public function lista(Request $request): JsonResponse
    {
        SqlFilter::$request = $request;
        $filtroSql = 'obsoleto = 0 AND bloqueado = 0';
        $filtroSql .= SqlFilter::likePostOr(['nombre||apellido1||apellido2', 'alias'], 'nombre');
        $sql = "SELECT codigo, nombre||' '||apellido1||' '||apellido2 AS nombre, alias FROM clientes";
        $sqlCount = 'SELECT count(*) FROM clientes';

        return DataTables::getData($request, $sql, $sqlCount, $filtroSql);
    }

    /**
     * Ventana de edición del cliente en ventas.
     *
     * @Route("/edit/{codigo<\d+>?0}", name="-edit")
     */
    public function edit(int $codigo): Response
    {
        $datos = [
            'cli' => new Clientes($codigo),
            'provincias' => Clientes::listaProvincias(),
            'tiposCli' => Clientes::listaTiposClientes(),
            'formasPago' => Clientes::listaFormasPago(),
            'tarifas' => Clientes::listaTarifasNombres(),
        ];

        return $this->render('gestion/cliente-edicion.html.twig', $datos);
    }

    /**
     * Grabar cliente desde ventas.
     *
     * @Route("/save", name="-save", methods={"POST"})
     */
    public function grabaCliente(Request $request): JsonResponse
    {
        $codigo = (int) $request->request->get('codigo');
        $datos = $request->request->all();
        $cli = new Clientes($codigo);
        $cli->setFields($datos);
        $cli->cif = \strtoupper(Tools::clearCIF($cli->cif));
        $cli->save();

        $resp = [
            'codigo' => $cli->codigo,
            'nombre' => $cli->nombreCompleto(),
        ];

        return new JsonResponse($resp);
    }

    /**
     * Edición cliente vista principal.
     *
     * @Route("/mis_datos", name="-mis-datos")
     */
    public function editDatosCliente(): Response
    {
        $codigo = $this->cliente();
        if ($codigo === 0) {
            $msg = 'Debes seleccionar un cliente;#Edición datos cliente';
            $this->addFlash('success', $msg);

            return $this->redirectToRoute('home');
        }
        $datos = [
            'cli' => new Clientes($codigo),
            'provincias' => Clientes::listaProvincias(),
            'mensaje' => '',
        ];

        return $this->render('cliente/cliente-actualizacion.html.twig', $datos);
    }

    /**
     * Actualización datos cliente vista principal.
     *
     * @Route("/actualizar", name="-actualizar", methods={"POST"})
     */
    public function actualizaCliente(Request $request): Response
    {
        $codigo = $this->cliente();
        $cli = new Clientes($codigo);
        $cli->setFields($request->request->all());
        $cli->save();

        $mensaje = 'Datos actualizados correctamente';
        $datos = [
            'cli' => $cli,
            'provincias' => Clientes::listaProvincias(),
            'mensaje' => $mensaje,
        ];

        $this->addFlash('success', "$mensaje;#Actualización datos cliente");

        return $this->render('cliente/cliente-actualizacion.html.twig', $datos);
    }

    /**
     * @Route("/existe", name="-existe", methods={"POST"})
     */
    public function existeEmail(Request $request): Response
    {
        $email = $request->request->get('email');
        $existe = Clientes::existeEmail($email);
        $resp = $existe ? 'false' : 'true';

        return new Response($resp);
    }

    /**
     * @Route("/existe-otro", name="-existe-otro", methods={"POST"})
     */
    public function existeEmailOtroCliente(Request $request): Response
    {
        $codigo = (int) $request->request->get('codigo');
        $email = $request->request->get('email');
        $existe = Clientes::existeEmailOtroCliente($codigo, $email);
        $resp = $existe ? 'false' : 'true';

        return new Response($resp);
    }

    /**
     * @Route("/cpostal-ok", name="-cpostal-ok", methods={"POST"})
     */
    public function cPostalOk(Request $request): Response
    {
        $cpFiltro = $this->config->data['cpostal_filtro'];
        $existe = false;

        if (!empty($cpFiltro)) {
            $cpostal = $request->request->get('cpostal');
            $existe = $this->existeCPostal($cpostal, $cpFiltro);
        }

        $resp =  $existe ? 'false' : 'true';

        return new Response($resp);
    }

    private function existeCPostal($cpostal, $listaCodigos): bool
    {
        $get_numerics = function ($str) {
            preg_match_all('/\d+/', $str, $matches);
            return $matches[0];
        };

        $cp = $get_numerics($listaCodigos);
        for ($i = count($cp) - 1;$i >= 0; $i--) {
            if (str_starts_with($cpostal, $cp[$i])) {
                return true;
            }
        }
        return false;
    }
}
