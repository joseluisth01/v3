<?php

namespace App\Controller;

use App\Entity\VentasCabeceras;
use App\Entity\VentasEntregas;
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

class CobroController extends BaseController
{
    /** @Route("/documentos/cobro/{id}", name="cobro", requirements={"id"="\d+"}) */
    public function index(int $id): Response
    {
        $error = false;
        $cab = VentasCabeceras::leeDocumento($id);
        if ($id === 0) {
            $error = 'Identificador de pedido no válido';
        } elseif ($cab->total === 0.0) {
            $error = 'Importe documento es 0,00 €';
        } elseif ($cab->cli_codigo != $this->cliente()) {
            $error = 'Cliente no válido';
        }

        if (!empty($error)) {
            $data = [
                'msgError' => $error,
                'documento' => "$cab->nombreDoc $cab->serie-$cab->numero",
            ];

            return $this->render('cobros/cobro-error.html.twig', $data);
        }

        $cob = new WebCobros();
        $cob->usuario = $this->user->getId();
        $cob->usuario_tipo = $this->user->isClient() ? 'C' : 'U';
        $cob->idcab = $cab->id;
        $cob->hora_solicitud = new DateTime();
        $cob->insert();

        $numDocumento = VentasCabeceras::leeNumero($cob->idcab);
        $strId = str_pad($numDocumento, 5, '0', STR_PAD_LEFT).'-'.random_int(10, 99);

        $urlCobro = $this->generateUrl('cobro-realizado', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $urlMerchant = $this->generateUrl('home', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $redsys = new RedsysAPI();
        $redsys->setParameter('DS_MERCHANT_AMOUNT', round($cab->total * 100));
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
                'documento' => "$cab->nombreDoc $cab->serie-$cab->numero",
        ];

        return $this->render('cobros/cobro.html.twig', $data);
    }

    /** @Route("/documentos/callback-pay", name="cobro-realizado") */
    public function cobroRealizado(Request $request): Response
    {
        $datos = $request->query->get('Ds_MerchantParameters');
        $signatureReceived = $request->query->get('Ds_Signature');

        if (empty($datos) || empty($signatureReceived)) {
            $this->addFlash('success', 'Error.;Petición no válida#Pago con tarjeta de crédito');

            return $this->redirectToRoute('documentos', ['tipo' => 2]);
        }

        $redsys = new RedsysAPI();
        $decoded = json_decode($redsys->decodeMerchantParameters($datos), true);
        $codError = (int) $decoded['Ds_Response'];
        $idCobro = (int) $decoded['Ds_MerchantData'];

        $cobro = new WebCobros($idCobro);
        $cab = new VentasCabeceras($cobro->idcab);
        $this->user = User::loadUserByIdentifier($cobro->usuario_tipo.'-'.$cobro->usuario);
        if (!$this->user->isClient()) {
            $this->user->setClient($cab->cli_codigo, $this->session);
        }
        $this->autoLogin();

        $firma = $redsys->createMerchantSignatureNotif($this->claveEncriptacion(), $datos);

        if ($firma !== $signatureReceived) {
            $this->addFlash('success', 'Error.;Petición no válida#Pago con tarjeta de crédito');

            return $this->redirectToRoute('documentos', ['tipo' => 2]);
        }

        $cobro->cobrado = $codError < 100;
        $cobro->hora_respuesta = new DateTime();
        $cobro->update();

        $tituloMsg = $cab->nombreDocumento().": $cab->serie - $cab->numero";
        if ($cobro->cobrado) {
            $authorisationCode = $decoded['Ds_AuthorisationCode'];
            $this->cobraPedido($cab, $authorisationCode);
            $resultado = "<div class=\"py-3\">Pago aceptado</div>;#$tituloMsg";
        } else {
            $resultado = "<div class=\"py-3\">Pago rechazado</div>;Código error: $codError;#$tituloMsg";
        }

        $this->addFlash('success', $resultado);

        $urlDoc = $this->generateUrl('documentos-view', ['id' => $cab->id]);
        $html = "<!DOCTYPE html><html lang=\"es\"><body><script>window.location='$urlDoc';</script></body></html>";

        return new Response($html);
    }

    private function cobraPedido(VentasCabeceras $cab, $authorisationCode)
    {
        $banco = (int) $this->config->data['banco'];
        $cab->confirmaPedido();
        $ent = new VentasEntregas();
        $ent->idcab = $cab->id;
        $ent->cliente = $cab->cli_codigo;
        $ent->fecha = new DateTime();
        $ent->importe = $cab->total;
        $ent->cajabanco = 1;
        $ent->codigo_cb = $banco;
        $ent->documento = "Autorización web: $authorisationCode";
        $ent->usuario = $this->user->getId() * ($this->user->isClient() ? -1 : 1);
        $ent->insert();
    }

    private function claveEncriptacion()
    {
        return Tools::coalesce($this->config->data['redsys_clave_encriptacion'], 'sq7HjrUOBfKmC576ILgskD5srU870gJ7');
    }

    private function autoLogin()
    {
        $token = new UsernamePasswordToken($this->user, null, 'main', $this->user->getRoles());
        //$guardHandler->authenticateWithToken($token, $request);
        $this->get('security.token_storage')->setToken($token);
        $this->session->set('_security_main', serialize($token));
        $this->session->save();
    }
}
