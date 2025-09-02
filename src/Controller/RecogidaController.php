<?php

namespace App\Controller;

use App\Library\Sql;
use App\Library\Email;
use App\Entity\WebRecogida;
use App\Entity\WebRecogidaImagenes;
use App\Entity\WebRecogidaTextos;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class RecogidaController extends BaseController
{
    /** @Route("/recogida/test", name="recogida/test") */
    public function test(): Response
    {
        return $this->render('varios/form-recogida-ok.html.twig');
    }

    /** @Route("/recogida", name="recogida") */
      public function index(): Response
      {
          $reg = new WebRecogidaTextos();
          $reg->read();

          $datos = $reg->toArray();
          $msgError = $this->session->remove('err-send-article');
          if (!empty($msgError)) {
              $datos['msgError'] = $msgError;
          }

          return $this->render('varios/form-recogida.html.twig', $datos);
      }

      /** @Route("/recogida/save", name="recogida-save") */
      public function save(Request $request): Response
      {
          $submittedToken = $request->request->get('_csrf_token');
          if (!$this->isCsrfTokenValid('send-article', $submittedToken)) {
              $this->session->set('err-send-article', 'La petición no es válida.<small class="d-block">[ Parámetros incorrectos ]</small>');
              return $this->redirectToRoute('recogida');
          }

          $postData = $request->request->all();

          $reg = new WebRecogida();
          $reg->setFields($postData);
          $reg->fecha = new \DateTime();
          $reg->insert();

          $regImg = new WebRecogidaImagenes();

          foreach ($request->files->get('imagenes') as $file) {
              $regImg->clearFields();
              $regImg->id_cab = $reg->id;
              $regImg->nombre = $file->getClientOriginalName();
              $regImg->imagen = Sql::blobSave($file->getRealPath());
              $regImg->insert();
          }

          $this->sendEmail($request, $reg);

          return $this->render('varios/form-recogida-ok.html.twig');
      }


      private function sendEmail(Request $request, WebRecogida $reg)
      {
          $baseUrl = $request->getScheme().'://'.$request->getHttpHost().$request->getBasePath();
          $tabla = $this->tablaDatosEmail($reg);
          $time = date('d-m-Y H:i');
          $subject = "Solicitud recogida dispositivo";
          $body = <<<EOT
        <p style="margin-bottom:1em;">Se ha registrado una solicitud de recogida</p>
        $tabla
        <p style="margin-top:2em;">$time  <small>$baseUrl</small></p>
        EOT;

          $email = new Email($this->config);
          foreach ($request->files->get('imagenes') as $file) {
              $email->mail->addAttachment($file->getRealPath(), $file->getClientOriginalName());
          }

          $email->send($subject, $body, $this->config->emailRecogida());
      }

      private function tablaDatosEmail(WebRecogida $reg): string
      {
          return <<<EOT
      <table style="border:1px solid;">
      <tbody>
        <tr>
          <td><b>Nombre</b></td>
          <td>{$reg->nombre}</td>
        </tr>
        <tr>
          <td><b>Teléfono</b></td>
          <td>{$reg->telefono}</td>
        </tr>
        <tr>
          <td><b>Dirección</b></td>
          <td>{$reg->direccion}</td>
        </tr>
        <tr>
          <td><b>Localidad</b></td>
          <td>{$reg->localidad}</td>
        </tr>
        <tr>
          <td><b>C.Postal</b></td>
          <td>{$reg->cpostal}</td>
        </tr>
        <tr>
          <td><b>Email</b></td>
          <td>{$reg->email}</td>
        </tr>
        <tr>
          <td><b>Dispositivo</b></td>
          <td>{$reg->dispositivo}</td>
        </tr>
        <tr>
          <td><b>Num.Serie</b></td>
          <td>{$reg->numserie}</td>
        </tr>
        <tr>
          <td><b>Desbloqueo</b></td>
          <td>{$reg->desbloqueo}</td>
        </tr>
        <tr>
          <td><b>Avería</b></td>
          <td>{$reg->averia}</td>
        </tr>
      </tbody>
      </table>
    EOT;
      }
}
