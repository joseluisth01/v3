<?php

namespace App\Controller;

use App\Entity\Almacenes;
use App\Entity\Articulos;
use App\Entity\ArticulosCodbarras;
use App\Entity\ArticulosPrecios;
use App\Entity\VentasCabeceras;
use App\Entity\VentasLineas;
use App\Entity\WebLineasPedidos;
use App\Library\Email;
use App\Library\Tools;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/gestion", name="gestion") */
class GestionController extends BaseController
{
    /**
     * @Route("/", name="")
     */
    public function index(): Response
    {
        return $this->render('gestion/venta.html.twig', ['almacenes' => Almacenes::lista()]);
    }

    /**
     * @Route("/add-art/{referencia}/{almacen}", name="-add-art")
     */
    public function addArt(string $referencia, int $almacen): Response
    {
        $data = ['referencia' => $referencia,'almacen' => $almacen];
        return $this->render('gestion/articulo-add.html.twig', $data);
    }


    /**
     * @Route("/lineas/lista", name="-lineas-lista")
     */
    public function listaLineas(): JsonResponse
    {
        return new JsonResponse(WebLineasPedidos::listaCliente($this->cliente(), $this->config));
    }

    /**
     * @Route("/cliente/seleccion", name="-seleccion-cliente", methods={"POST"})
     */
    public function cambioCliente(Request $request): JsonResponse
    {
        $codigo = (int) $request->request->get('codigo');
        $this->user->setClient($codigo, $this->session, false);

        return $this->listaLineas();
    }

    /**
     * @Route("/articulo/get", name="-articulo-get", methods={"POST"})
     */
    public function leeArticulo(Request $request): JsonResponse
    {
        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $param->referencia = (string) $request->request->get('referencia');
        $param->almacen = (int) $request->request->get('almacen');

        $art = Articulos::getByReferencia($param);
        if ($art['tallas_colores']) {
            $tallas = Articulos::listaTallas($param->referencia);
            $colores = Articulos::listaColores($param->referencia);
            $stocktc = Articulos::listaStockTC($param->referencia, $param->almacen, $param->stockAlmDisp);
            $preciostc = ArticulosCodbarras::listaPreciosTC($param->referencia);
        } else {
            $tallas = [];
            $colores = [];
            $stocktc = [];
            $preciostc = [];
        }



        $data = [
           'articulo' => $art,
           'tallas' => $tallas,
           'colores' => $colores,
           'preciostc' => $preciostc,
           'stocktc' => $stocktc,
           'tarifas' => ArticulosPrecios::listaPrecios($param->referencia, $param->cliente, $param->tarifa, $param->tarifaEspDto),
           'tarifa_cliente' => $param->tarifa,
           'ultimaVenta' => VentasLineas::ultimaVentaCliente($param->referencia, $param->cliente),
        ];

        return new JsonResponse($data);
    }

    /**
     * @Route("/linea/update", name="-linea/update", methods={"POST"})
     */
    public function actualizaUnidades(Request $request): Response
    {
        $id = (int) $request->request->get('id');
        $unidades = (int) $request->request->get('unidades');
        WebLineasPedidos::updateLin($id, $unidades);

        return new Response('');
    }

    /**
     * @Route("/linea/delete", name="-linea-delete", methods={"POST"})
     */
    public function delete(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'id', 'verif')) {
            $id = $request->request->getInt('id');
            WebLineasPedidos::deleteLin($id);
        }

        return new Response('');
    }

    /**
     * @Route("/carritos/lista", name="-carritos-lista")
     */
    public function listaCarritos(): Response
    {
        $idUser = $this->user->getId();
        if ($idUser === 0 || ($idUser != 0 && $this->user->isClient())) {
            return $this->redirectToRoute('home');
        }

        $data = [
            'carritos' => WebLineasPedidos::carritosActivos(),
        ];

        return $this->render('gestion/carritos.html.twig', $data);
    }

    /**
     * @Route("/carrito/borra", name="-carrito-borra", methods={"POST"})
     */
    public function carritoBorrar(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $sessionId = $request->request->get('session_id');
            WebLineasPedidos::borraCarrito($sessionId);
            $msg = 'Carrito eliminado correctamente';
        } else {
            $msg = 'Solicitud inválida;';
        }

        return new Response($msg);
    }

    /**
     * @Route("/cliente/carrito/borra", name="-cliente-carrito-borra", methods={"POST"})
     */
    public function carritoClienteBorrar(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $cliente = $request->request->getInt('cliente');
            WebLineasPedidos::borraCarritoCliente($cliente);
            $msg = 'Líneas eliminadas correctamente';
        } else {
            $msg = 'Solicitud inválida;';
        }

        return new Response($msg);
    }

    /**
     * @Route("/carrito/email", name="-carrito-email", methods={"POST"})
     */
    public function carritoEmail(Request $request): Response
    {
        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $email = $request->request->get('email');
            $subject = $request->request->get('subject');
            $body = $request->request->get('body');
            $mail = new Email($this->config);
            $ok = $mail->send($subject, $body, $email);
            if ($ok) {
                $msg = 'Email enviado correctamente;';
            } else {
                $msg = 'Error enviando email;No se ha podido enviar el correo al cliente.';
            }
        } else {
            $msg = 'Solicitud inválida;';
        }

        return new Response($msg);
    }

    /**
     * @Route("/pedido/grabar", name="-pedido-grabar", methods={"POST"})
     */
    public function grabarPedido(Request $request): Response
    {
        $ok = false;
        $msg = 'Cliente no válido;La solicitud no es válida';

        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $cliente = $request->request->getInt('cliente');
            $almacen = $request->request->getInt('almacen');
            $id = WebLineasPedidos::grabaPedido(true, $cliente, $almacen, 0, '', $this->config);
            $ok = true;
            $msg = 'Pedido grabado:  '.VentasCabeceras::leeSerieNumero($id).';';
        }

        return new JsonResponse(['ok' => $ok, 'msg' => $msg]);
    }

    /**
     * @Route("/albaran/grabar", name="-albaran-grabar", methods={"POST"})
     */
    public function grabarAlbaran(Request $request): JsonResponse
    {
        $ok = false;
        $msg = 'Cliente no válido; La solicitud no es válida';

        if (Tools::codeVerifyOkFromRequest($request, 'cliente', 'verif')) {
            $cliente = $request->request->getInt('cliente');
            $almacen = $request->request->getInt('almacen');
            $id = WebLineasPedidos::grabaPedido(false, $cliente, $almacen, 0, '', $this->config);
            $ok = true;
            $msg = 'Albarán grabado:  '.VentasCabeceras::leeSerieNumero($id).';';
        }

        return new JsonResponse(['ok' => $ok, 'msg' => $msg]);
    }
}
