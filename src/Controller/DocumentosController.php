<?php

namespace App\Controller;

use App\Entity\ClientesLlamadas;
use App\Entity\Empresa;
use App\Entity\Vencimientos;
use App\Entity\VentasCabeceras;
use App\Entity\VentasEntregas;
use App\Entity\VentasLineas;
use App\Helper\PdfDocumento;
use App\Helper\PdfListaLlamadas;
use App\Library\DataTables;
use App\Library\DataTablesSession;
use App\Library\SqlFilter;
use App\Library\Tools;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/documentos", name="documentos") */
class DocumentosController extends BaseController
{
    private $searchFields = ['documento', 'fecha_desde', 'fecha_hasta', 'tipo_doc'];
    private $sessionName = 'docs_tabla';

    /**
     * @Route("/{tipo<\d+>?0}", name="")
     */
    public function index(int $tipo): Response
    {
        $aSearch = DataTablesSession::read($this->session, $this->sessionName, $this->searchFields);

        if ($tipo == 4) {
            $aSearch['tipo_doc'] = 'A';
        } elseif ($tipo == 8) {
            $aSearch['tipo_doc'] = 'F';
        } else {
            $aSearch['tipo_doc'] = 'P';
        }

        if ($aSearch['tipo_doc'] == 'A') {
            $title = 'Albaranes';
            $iconTitle = 'mdi-clipboard-text';
            $nombreDoc = 'albarán';
        } elseif ($aSearch['tipo_doc'] == 'F') {
            $title = 'Facturas';
            $iconTitle = 'mdi-clipboard-check';
            $nombreDoc = 'factura';
        } else {
            $title = 'Pedidos';
            $iconTitle = 'mdi-clipboard';
            $nombreDoc = 'pedido';
        }

        $data = [
            'title' => $title,
            'iconTitle' => $iconTitle,
            'nombreDoc' => $nombreDoc,
            'search' => $aSearch,
            'dtSearch' => DataTablesSession::toJson($aSearch),
        ];

        return $this->render('documentos/documentos-tabla.html.twig', $data);
    }

    /**
     * @Route("/lista", name="-lista", methods={"POST"})
     */
    public function lista(Request $request): JsonResponse
    {
        DataTablesSession::write($request, $this->session, $this->sessionName, $this->searchFields);

        $tipo = $request->request->get('tipo_doc');
        if ($tipo == 'A') {
            $tipoDoc = 4;
        } elseif ($tipo == 'F') {
            $tipoDoc = 8;
        } else {
            $tipoDoc = 2;
        }

        SqlFilter::$request = $request;

        $filtroSql = 'series.mostrarweb = true AND cli_codigo = '.$this->cliente();
        $filtroSql .= " AND tipodoc = $tipoDoc";
        $filtroSql .= SqlFilter::likePost('cab.serie||cab.numero', 'documento');
        $filtroSql .= SqlFilter::fromDatePost('coalesce(cab.fecha)', 'fecha_desde');
        $filtroSql .= SqlFilter::toDatePost('coalesce(cab.fecha)', 'fecha_hasta');

        $sqlCount = 'SELECT count(*)
            FROM ventas_cabeceras cab
            LEFT JOIN series ON series.serie = cab.serie';
        $sql = "SELECT
                cab.id,
                cab.fecha,
                cab.serie,
                cab.numero,
                round(cab.baseimpo1 + cab.baseimpo2 + cab.baseimpo3, 2) AS importe,
                round(cab.iva1 + cab.iva2 + cab.iva3, 2) AS iva,
                round(cab.rec1 + cab.rec2 + cab.rec3, 2) AS recargo,
                cab.total,
                case
                    when cab.tipodoc = 2 then
                        case
                            when cab.fechafin IS NULL then
                                case
                                    when exists(SELECT id FROM ventas_entregas WHERE idcab = cab.id) then 'En tramitación'
                                    else 'Pendiente tramitar'
                                end
                            else 'Facturado'
                        end
                    when cab.tipodoc = 4 then
                        case when cab.fechafin IS NULL then 'Pendiente facturar' else 'Facturado' end
                    else
                        case when cab.fechafin IS NULL then 'Pendiente cobro' else 'Cobrada' end
                end AS estado,
                cab.fechafin IS NOT NULL OR (cab.tipodoc = 2 AND exists(SELECT id FROM ventas_entregas WHERE idcab = cab.id)) AS cobrado,
                cab.fechafin IS NOT NULL AS finalizado
            FROM ventas_cabeceras cab
            LEFT JOIN series ON series.serie = cab.serie";

        return DataTables::getData($request, $sql, $sqlCount, $filtroSql, 'ID desc');
    }

    /**
     * @Route("/view/{id<\d+>}/{esCobro}", name="-view")
     */
    public function viewDocument(int $id, bool $esCobro = false): Response
    {
        $cab = VentasCabeceras::leeDocumento($id);
        if ($cab->cli_codigo !== $this->cliente() || !VentasCabeceras::serieVisibleWeb($id)) {
            $this->addFlash('success', 'No tiene permiso para ver el documento.;Póngase en contacto con su comercial#Control acceso documentos');

            return $this->redirectToRoute('documentos', ['tipo' => Tools::coalesce($cab->tipodoc, 2)]);
        }

        $cobrado = $cab->fechafin != null || ($cab->tipodoc == 2 && VentasEntregas::pedidoCobrado($cab->id));

        $tieneLlamadas = false;
        if ($cab->tipodoc == 8 && Empresa::operadorTelefonia()) {
            $tieneLlamadas = ClientesLlamadas::facturaTieneLlamadas($cab->id);
        }

        $data = [
            'cab' => $cab,
            'esCobro' => $esCobro,
            'cobrado' => $cobrado,
            'lineas' => VentasLineas::lineasDocumento($cab->id),
            'vencimientos' => Vencimientos::vencimientosFactura($cab->id),
            'llamadas' => $tieneLlamadas,
        ];

        return $this->render('documentos/documentos-view.html.twig', $data);
    }

    /**
     * @Route("/llamadas/{factura<\d+>}/{contrato<\d+>?0}/{facturables<\d+>?1}", name="-llamadas", requirements={"contrato"="\d+", "facturables"="\d+"})
     */
    public function viewLlamadas(int $factura, int $contrato = 0, int $facturables = 1): Response
    {
        $cab = VentasCabeceras::leeDocumento($factura);
        if ($cab->cli_codigo !== $this->cliente()) {
            $this->addFlash('success', 'No tiene permiso para ver el documento.;Póngase en contacto con su comercial#Control acceso documentos');

            return $this->redirectToRoute('documentos', ['tipo' => Tools::coalesce($cab->tipodoc, 8)]);
        }

        $listaContratos = ClientesLlamadas::listaContratosFactura($factura);
        if ($contrato === 0 && !empty($listaContratos)) {
            $contrato = (int) $listaContratos[0]['id'];
        }

        $data = [
            'cab' => $cab,
            'contratos' => $listaContratos,
            'actual' => $contrato,
            'facturables' => $facturables,
            'llamadas' => ClientesLlamadas::listaLLamadas($factura, $contrato, $facturables != 0),
        ];

        return $this->render('documentos/documentos-llamadas.html.twig', $data);
    }

    /**
     * @Route("/print/{id<\d+>}", name="-print")
     */
    public function printDocument(int $id)
    {
        $cab = VentasCabeceras::leeDocumento($id);
        if ($cab->cli_codigo !== $this->cliente()) {
            $this->addFlash('success', 'No tiene permiso para imprimir el documento.;Póngase en contacto con su comercial#Control acceso documentos');

            return $this->redirectToRoute('documentos', ['tipo' => Tools::coalesce($cab->tipodoc, 2)]);
        }
        $pdf = new PdfDocumento($cab);

        return new Response($pdf->imprime(true));
    }

    /**
     * @Route("/print-llamadas/{factura<\d+>}/{contrato<\d+>}/{facturables<\d+>}", name="-print-llamadas")
     */
    public function printLlamadas(int $factura, int $contrato, int $facturables)
    {
        $cab = VentasCabeceras::leeDocumento($factura);
        if ($cab->cli_codigo !== $this->cliente()) {
            $this->addFlash('success', 'No tiene permiso para imprimir el documento.;Póngase en contacto con su comercial#Control acceso documentos');

            return $this->redirectToRoute('documentos', ['tipo' => Tools::coalesce($cab->tipodoc, 8)]);
        }

        $pdf = new PdfListaLlamadas($cab, $contrato, $facturables != 0);

        return $pdf->imprime(true);
    }
}
