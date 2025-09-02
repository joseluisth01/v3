<?php

namespace App\Controller;

use App\Entity\Vencimientos;
use App\Entity\VentasCabeceras;
use App\Entity\WebCobros;
use App\Library\RedsysAPI;
use App\Library\Tools;
use App\Security\User;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/*
Nº TARJETA PRUEBAS:  https://pagosonline.redsys.es/entornosPruebas.html
Numeración:4548812049400004
Caducidad: 12/34
Código CVV2: 123
*/

class CobroVencimientoController extends BaseController
{
    /** @Route("/vencimiento/cobro/{idVto}", name="vto-cobro", requirements={"idVto"="\d+"}) */
    public function index(int $idVto): Response
    {
        $error = null;
        $vto = new Vencimientos($idVto);
        if ($idVto === 0) {
            $error = 'Identificador de pedido no válido';
        } elseif ($vto->importe === 0.0) {
            $error = 'Importe vencimiento es 0,00 €';
        } elseif (!empty($vto->fechacobro)) {
            $error = 'Vencimiento ya pagado';
        } elseif ($vto->clipro != $this->cliente()) {
            $error = 'Cliente no válido';
        }

        if (!empty($error)) {
            $data = [
                'msgError' => $error,
                'documento' => 'Factura '.VentasCabeceras::leeSerieNumero($vto->idcab),
            ];

            return $this->render('cobros/cobro-error.html.twig', $data);
        }

        $cob = new WebCobros();
        $cob->usuario = $this->user->getId();
        $cob->usuario_tipo = $this->user->isClient() ? 'C' : 'U';
        $cob->idcab = $vto->idcab;
        $cob->idvencimiento = $vto->id;
        $cob->hora_solicitud = new DateTime();
        $cob->insert();

        $numDocumento = VentasCabeceras::leeNumero($cob->idcab);
        $strId = str_pad($numDocumento, 5, '0', STR_PAD_LEFT).'-'.random_int(10, 99);

        $urlCobro = $this->generateUrl('vto-cobro-realizado', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $urlMerchant = $this->generateUrl('home', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $redsys = new RedsysAPI();
        $redsys->setParameter('DS_MERCHANT_AMOUNT', round($vto->importe * 100));
        $redsys->setParameter('DS_MERCHANT_ORDER', $strId);
        $redsys->setParameter('DS_MERCHANT_MERCHANTDATA', $cob->id);
        $redsys->setParameter('DS_MERCHANT_CURRENCY', $this->config->data['Ds_Merchant_Currency']);
        $redsys->setParameter('DS_MERCHANT_TRANSACTIONTYPE', 0);
        $redsys->setParameter('DS_MERCHANT_TERMINAL', $this->config->data['Ds_Merchant_Terminal']);
        $redsys->setParameter('DS_MERCHANT_MERCHANTCODE', $this->config->data['Ds_Merchant_MerchantCode']);
        $redsys->setParameter('DS_MERCHANT_MERCHANTNAME', $this->config->data['Ds_Merchant_MerchantName']);
        $redsys->setParameter('DS_MERCHANT_MERCHANTURL', $urlMerchant);
        $redsys->setParameter('DS_MERCHANT_URLOK', $urlCobro);
        $redsys->setParameter('DS_MERCHANT_URLKO', $urlCobro);

        $paramsTarjeta = $redsys->createMerchantParameters();
        $signatureTarjeta = $redsys->createMerchantSignature($this->claveEncriptacion());

        // BIZUM
        $redsys->setParameter('DS_MERCHANT_PAYMETHODS', 'z');
        $paramsBizum = $redsys->createMerchantParameters();
        $signatureBizum = $redsys->createMerchantSignature($this->claveEncriptacion());

        $data = [
                'urlRedsys' => $this->config->data['redsys_url'],
                'version' => $this->config->data['redsys_tipo_cifrado'],
                'paramsTarjeta' => $paramsTarjeta,
                'paramsBizum' => $paramsBizum,
                'signatureTarjeta' => $signatureTarjeta,
                'signatureBizum' => $signatureBizum,
                'documento' => 'Factura '.VentasCabeceras::leeSerieNumero($vto->idcab),
        ];

        return $this->render('cobros/cobro.html.twig', $data);
    }

    /** @Route("/vencimiento/callback-pay", name="vto-cobro-realizado") */
    public function cobroRealizado(Request $request): Response
    {
        $error = false;
        $redsys = new RedsysAPI();
        $datos = $request->query->get('Ds_MerchantParameters');
        $signatureReceived = $request->query->get('Ds_Signature');

        if (empty($datos) || empty($signatureReceived)) {
            $this->addFlash('success', 'Error.;Petición no válida#Pago con tarjeta de crédito');
            $error = true;
        } else {
            $firma = $redsys->createMerchantSignatureNotif($this->claveEncriptacion(), $datos);
            if ($firma !== $signatureReceived) {
                $this->addFlash('success', 'Error.;Petición no válida#Pago con tarjeta de crédito');
                $error = true;
            }
        }

        if ($error) {
            return $this->redirectToRoute('documentos', ['tipo' => 8]);
        }

        $decoded = json_decode($redsys->decodeMerchantParameters($datos), true);
        $codError = (int) $decoded['Ds_Response'];
        $idCobro = (int) $decoded['Ds_MerchantData'];

        $cobro = new WebCobros($idCobro);
        $cobro->cobrado = $codError < 100;
        $cobro->hora_respuesta = new DateTime();
        $cobro->update();

        $vto = new Vencimientos($cobro->idvencimiento);

        $tituloMsg = 'Factura: '.VentasCabeceras::leeSerieNumero($cobro->idcab);

        $this->user = User::loadUserByIdentifier($cobro->usuario_tipo.'-'.$cobro->usuario);
        if (!$this->user->isClient()) {
            $this->user->setClient($vto->clipro, $this->session);
        }
        $this->autoLogin();

        if ($cobro->cobrado) {
            $authorisationCode = $decoded['Ds_AuthorisationCode'];
            $this->cobraVencimiento($vto, $authorisationCode);
            $resultado = "<div class=\"py-3\">Pago aceptado</div>;#$tituloMsg";
        } else {
            $resultado = "<div class=\"py-3\">Pago rechazado</div>;Código error: $codError;#$tituloMsg";
        }

        $this->addFlash('success', $resultado);

        $urlDoc = $this->generateUrl('documentos-view', ['id' => $vto->idcab]);
        $html = "<!DOCTYPE html><html lang='\"es\"'><body><script>window.location='$urlDoc';</script></body></html>";

        return new Response($html);
    }

    private function cobraVencimiento(Vencimientos $vto, $authorisationCode)
    {
        $banco = (int) $this->config->data['banco'];
        $vto->situacion = 1;
        $vto->fechacobro = new DateTime();
        $vto->tipocobro = 4;
        $vto->documento = "Autorización web: $authorisationCode";
        $vto->cajabanco = 1;
        $vto->codigo_cb = $banco;
        $vto->usumodi = $this->user->getId() * ($this->user->isClient() ? -1 : 1);
        $vto->update();
    }

    private function claveEncriptacion()
    {
        return Tools::coalesce($this->config->data['redsys_clave_encriptacion'], 'sq7HjrUOBfKmC576ILgskD5srU870gJ7');
    }

    private function autoLogin()
    {
        $token = new UsernamePasswordToken($this->user, null, 'main', $this->user->getRoles());
        $this->get('security.token_storage')->setToken($token);
        $this->session->set('_security_main', serialize($token));
        $this->session->save();
    }
}
