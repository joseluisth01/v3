<?php

namespace App\Controller;

use App\Library\Email;
use App\Entity\Articulos;
use App\Entity\ArticulosParamHelper;
use App\Entity\Clientes;
use App\Entity\WebValoraciones;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/art-valoracion", name="art-valoracion") */
class ArticuloValoracionController extends BaseController
{
    /**  @Route("/list/{estado}/{orden?'best'}", name="-list") */
    public function getList(int $estado, string $orden): JsonResponse
    {
        return new JsonResponse(WebValoraciones::listAll($estado, $orden));
    }

    /**  @Route("/list-art/{referencia}/{orden?'best'}", name="-list-art") */
    public function getListReferencia(string $referencia, string $orden): JsonResponse
    {
        return new JsonResponse(WebValoraciones::listaReferencia($referencia, $orden));
    }

    /**  @Route("/new/{weburl}", name="-new") */
    public function newRating(string $weburl): Response
    {
        $param = new ArticulosParamHelper($this->config, $this->cliente());
        $art = Articulos::getByUrl($weburl, $param);
        $data=[
            'art' => $art,
            'weburl' => $weburl
        ];

        return $this->render('articulo/articulo-valoracion.html.twig', $data);
    }

    /** @Route("/save", name="-save", methods={"POST"})  */
    public function save(Request $request): JsonResponse
    {
        $reg = new WebValoraciones();
        $reg->fecha = new \DateTime();
        $reg->referencia = $request->request->getAlnum('referencia');
        $reg->cliente = $this->user->getClient();
        $reg->cli_alias = $request->request->get('alias');
        $reg->valoracion = $request->request->getInt('valoracion');
        $reg->opinion = $request->request->get('opinion');
        $reg->pros= $request->request->get('pros');
        $reg->contras = $request->request->get('contras');
        $reg->save();

        $this->sendEmail($reg);

        $msg = "Muchas gracias por su comentario.<br><br><small>Estamos procesando su respuesta.<br>Será mostrada en breve.</small>;#Valoración en proceso";
        $this->addFlash('success', $msg);

        return new JsonResponse(true);
    }


    private function sendEmail(WebValoraciones $reg)
    {
        $time = date('d-m-Y H:i');
        $nombreArt = Articulos::leeNombre($reg->referencia);
        $nombreCli = $this->user->getClientName();
        $subject = "Nueva valoración";
        $body = <<<EOT
            <p style="margin-bottom:1em;">Se ha registrado una valoración</p>
            <p><b>Artículo:</b> [{$reg->referencia}] {$nombreArt}</p>
            <p><b>Cliente:</b>{$nombreCli} ({$reg->cli_alias})</p>
            <p><b>Valoración:</b> {$reg->valoracion}</p>
            <p><b>Opinión:</b> {$reg->opinion}</p>
            <p><b>Ventajas:</b> {$reg->pros}</p>
            <p><b>Desventajas:</b> {$reg->contras}</p>
            <p style="margin-top:2em;">$time</p>
        EOT;

        $email = new Email($this->config);
        $email->send($subject, $body, $this->config->emailRecogida());
    }
}
