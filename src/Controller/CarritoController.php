<?php

namespace App\Controller;

use App\Entity\Articulos;
use App\Entity\ArticulosPrecios;
use App\Entity\Clientes;
use App\Entity\Empresa;
use App\Entity\WebLineasPedidos;
use App\Helper\EmailCliente;
use App\Helper\SatHelper;
use App\Library\Tools;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/cart", name="cart") */
class CarritoController extends BaseController
{
    /* @var bool */
    private $recogerEnTienda = false;

    /**
     * @Route("/", name="-view")
     */
    public function index(): Response
    {
        if ($this->cliente() !== 0) {
            $lineas = WebLineasPedidos::listaCliente($this->cliente(), $this->config);
        } else {
            $lineas = WebLineasPedidos::lista($this->session->getId(), $this->config);
        }

        $this->getRecogerTienda();

        $tot = WebLineasPedidos::calculaTotalLineas($lineas);
        $portes = $this->sumaPortes($tot);

        $datos = [
            'lineas' => $lineas,
            'total' => $tot,
            'portes' => $portes,
            'recoger_en_tienda' => $this->recogerEnTienda,
        ];

        $response = $this->render('carrito/carrito.html.twig', $datos);
        $response->setPublic();
        $response->setMaxAge(0);
        $response->headers->addCacheControlDirective('must-revalidate', true); // (optional) set a custom Cache-Control directive

        return $response;
    }

    /** @Route("/add", name="-add") */
    public function add(Request $request): JsonResponse
    {
        $sessionId = $this->session->getId();

        // Guardamos el ID de la sesión actual por si el usuario no está autenticado.
        // En el login, el ID de la sesión cambia.
        // Así podremos asociarle al cliente sus líneas al autenticarlo el el método $user->setClient()
        $this->session->set('user_session_id', $sessionId);

        $referencia = hex2bin($request->request->get('referencia'));
        if (empty($referencia)) {
            return new JsonResponse(['id' => 0, 'msg' => 'Referencia no válida']);
        }

        $cliente = $this->cliente();

        if (Clientes::clienteBloqueado($cliente)) {
            return new JsonResponse(['id' => 0, 'msg' => 'Su cuenta está bloqueada;Debe consultar con su comercial.']);
        }

        $talla = $request->request->get('talla') ?? '';
        $color = $request->request->get('color') ?? '';
        $descuento = (float) $request->request->get('descuento');
        if ($request->request->has('precio')) {
            $precio = (float) $request->request->get('precio');
        } else {
            [$precio, $descuento] = ArticulosPrecios::precio($referencia, $talla, $color, $cliente, $this->tarifa(), $this->tarifaEspDto());
        }

        $esVenta = $request->request->getBoolean('esVenta');

        if (empty($precio) && !$esVenta) {
            return new JsonResponse(['id' => 0, 'msg' => 'Precio no válido']);
        }

        $unidades =  Tools::toInt($request->request->get('unidades'));

        if ($this->config->bloqueoVentaSinStock()) {
            if (Articulos::controlStock($referencia)) {

                $almacen = $this->config->almacen();
                $stockAlmDisp = $this->config->stockAlmDisp();
                $stockActual = Articulos::stockActual($referencia, $talla, $color, $almacen, $stockAlmDisp);
                if ($unidades > $stockActual) {
                    return new JsonResponse(['id' => 0, 'msg' => "No puede pedir <b>$unidades</b> unidades<br><br>Solo disponemos de <b>$stockActual</b> unidades<br>"]);
                }
            }
        }

        $this->getRecogerTienda();

        $lin = new WebLineasPedidos();
        $lin->findReferencia($referencia, $talla, $color, $sessionId);
        $lin->session_id = $sessionId;
        $lin->referencia = $referencia;
        $lin->cliente = $cliente;
        $lin->talla = $talla;
        $lin->color = $color;
        $lin->unidades += $unidades;
        $lin->precio = $precio;
        $lin->dto_porcent = $descuento;
        $lin->dto = round($lin->precio * $lin->dto_porcent / 100.0, 4);
        $lin->canon_importe = Articulos::canonImporte($referencia);
        $lin->recoger_en_tienda = $this->recogerEnTienda;
        $lin->agente = $this->agente();
        $lin->hora_registro = new DateTime();
        $lin->save();

        return new JsonResponse(['id' => $lin->id, 'msg' => '']);
    }

    /**
     * @Route("/add-ok/{idLin<\d+>}", name="-add-ok")
     */
    public function addOk(int $idLin): Response
    {
        $this->getRecogerTienda();

        $tot = WebLineasPedidos::resumenCarrito($this->session->getId(), $this->config);
        $portes = $this->sumaPortes($tot);
        $data = [
            'art' => WebLineasPedidos::lineaResumen($idLin),
            'tot' => $tot,
            'portes' => $portes,
        ];

        return $this->render('carrito/carrito-add-ok.html.twig', $data);
    }

    /**
     * @Route("/update", name="-update", methods={"POST"})
     */
    public function update(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'id', 'verif')) {
            $id = $request->request->getInt('id');
            $unidades = $request->request->getInt('unidades');
            WebLineasPedidos::updateLin($id, $unidades);
        }

        return new Response('');
    }

    /**
     * @Route("/delete", name="-delete", methods={"POST"})
     */
    public function delete(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'id', 'verif')) {
            WebLineasPedidos::deleteLin($request->request->getInt('id'));
        }

        return new Response('');
    }

    /**
     * @Route("/pedido/borrar", name="-pedido-borrar")
     */
    public function borraCarrito(): Response
    {
        $sessionId = $this->session->getId();
        WebLineasPedidos::borraCarrito($sessionId);

        return $this->redirectToRoute('cart-view');
    }

    /**
     * @Route("/recoger-tienda", name="-pedido-recoger-tienda", methods={"POST"})
     */
    public function cambiaRecogida(Request $request): Response
    {
        $sessionId = $this->session->getId();
        $recoger = $request->request->getBoolean('recoger', false);
        WebLineasPedidos::updateRecogerTienda($sessionId, $recoger);

        return $this->redirectToRoute('cart-view');
    }

    /**
     * @Route("/pedido/grabar", name="-pedido-grabar", methods={"POST"})
     */
    public function grabarPedido(Request $request): JsonResponse
    {
        $ok = false;
        $id = 0;
        $msg = 'Cliente no válido;La solicitud no es válida';
        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $cliente = $request->request->getInt('cliente');
            $this->recogerEnTienda = WebLineasPedidos::getRecogerTiendaCliente($cliente);
            $portes = 0;
            if (!$this->recogerEnTienda) {
                $sumaPortes = true;
                if ($this->config->portesSelect()) {
                    $sumaPortes = ($request->request->getInt('portes')) === 1;
                }
                if ($sumaPortes) {
                    $tot = WebLineasPedidos::resumenCarritoCliente($cliente, $this->config);
                    $aPortes = $this->calculaPortes($tot['total']);
                    $portes = $aPortes['euros'];
                }
            }

            $observaciones = (string) $request->request->get('observaciones');
            $id = WebLineasPedidos::grabaPedido(true, $cliente, 0, $portes, $observaciones, $this->config);

            $cli = new Clientes($cliente);
            $email = new EmailCliente($cli, $this->config, $request);
            $email->nuevoPedidoCliente($id);

            $sat = new SatHelper($id, $cli, $this->config);
            $sat->creaParteSat();

            $ok = true;
            $msg = 'Pedido grabado correctamente.';
        }

        return new JsonResponse(['ok' => $ok, 'msg' => $msg, 'id' => $id]);
    }

    private function sumaPortes(array &$tot): array
    {
        $portes = $this->calculaPortes($tot['total']);
        if (!$this->recogerEnTienda) {
            if ($portes['euros'] > 0) {
                $tot['portes'] = $portes['euros'];
                $tot['total_con_portes'] += $portes['euros_mas_iva'];
            }
        }

        return $portes;
    }

    private function calculaPortes(float $importeTotal): array
    {
        if ($this->recogerEnTienda) {
            return  [
                'gratis' => 0,
                'falta' => 0,
                'iva' => 0,
                'euros' => 0,
                'euros_mas_iva' => 0,
            ];
        }

        $portesGratis = $this->config->portesGratis();
        $portesEuros = $this->config->portesEuros();
        if ($portesGratis > 0 && $importeTotal >= $portesGratis) {
            $portesEuros = 0;
        }

        $importeIva = round($portesEuros * Empresa::ivaPortes() / 100, 2);
        $portesConIva = $portesEuros + $importeIva;
        $portesFalta = $portesGratis - $importeTotal;

        return  [
            'gratis' => $portesGratis,
            'falta' => $portesFalta,
            'iva' => $importeIva,
            'euros' => $portesEuros,
            'euros_mas_iva' => $portesConIva,
        ];
    }

    private function getRecogerTienda()
    {
        if ($this->cliente() !== 0) {
            $this->recogerEnTienda = WebLineasPedidos::getRecogerTiendaCliente($this->cliente());
        } else {
            $this->recogerEnTienda = WebLineasPedidos::getRecogerTienda($this->session->getId());
        }
    }
}
