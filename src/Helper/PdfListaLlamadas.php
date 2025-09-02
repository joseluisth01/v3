<?php

namespace App\Helper;

use App\Entity\ClientesLlamadas;
use App\Entity\VentasCabeceras;
use App\Library\Pdf;
use App\Library\Tools;

class PdfListaLlamadas extends PdfBase
{
    /** @var int */
    protected $idContrato;
    /** @var bool */
    private $facturables;
    /** @var object */
    private $contrato;
    /** @var int */
    protected $footerY;

    private $linesWidth = [20, 15, 20, 20, 20, 55, 20, 20]; // fecha, hora, origen, destino, duracion, tipo, establecimiento, importe
    private $linesAlign = ['L', 'L', 'L', 'L', 'R', 'L', 'R', 'R'];

    public function __construct(VentasCabeceras $cab, int $idContrato, bool $facturables)
    {
        parent::__construct($cab);
        $this->idContrato = $idContrato;
        $this->facturables = $facturables;
        $this->contrato = ClientesLlamadas::datosContrato($idContrato);

        $this->footerY = $this->pdf->height - $this->footerHeight();
    }

    public function imprime(bool $sendToBrowser): string
    {
        set_time_limit(120);
        $this->pdf->AddPAge();
        $this->logoEmpresa();
        $this->cabecera();
        $this->lineas();
        //$this->pie();

        $nombreFichero = "Listado llamadas factura {$this->cab->serie}-{$this->cab->numero} ({$this->contrato->telefono}).pdf";
        if ($sendToBrowser) {
            $this->pdf->Output($nombreFichero, 'D');
        }

        return $nombreFichero;
    }

    private function cabecera()
    {
        $this->pdf->incrementY(3);

        $this->pdf->StartTransform();
        $this->pdf->SetFont(Pdf::$fontFamily, '', 7);
        $this->pdf->Rotate(270);
        $this->pdf->Cell(0, 0, $this->emp->txt_registro, 0, 0, 'C');
        $this->pdf->StopTransform();

        $width = $this->pdf->wContent / 2 + 15;
        $width2 = $this->pdf->wContent - $width;
        $x = $this->pdf->mLeft;
        $x2 = $x + $width;
        $y = $this->pdf->GetY();

        $fecha = Tools::dateFormat($this->cab->fecha);
        $tablaDoc = "<table>
        <tr><td><b>{$this->cab->nombreDoc}</b></td><td>{$this->cab->serie}-{$this->cab->numero}</td></tr>
        <tr><td><b>Fecha</b></td><td>$fecha</td></tr>
        <tr><td><b>Teléfono</b></td><td>{$this->contrato->telefono}</td></tr>
        </table>";

        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
        $this->pdf->writeHTMLCell($width / 2, 0, $x, $y, $tablaDoc);
        $this->pdf->SetFont(Pdf::$fontFamily, '', 10);

        $tablaCli = "<table>
            <tr><td><b>{$this->cab->cli_nombre}</b></td></tr>
            <tr><td>{$this->cab->cli_direccion}</td></tr>
            <tr><td>{$this->cab->cli_localidad}</td></tr>
            <tr><td>{$this->cab->cli_cpostal} {$this->cab->cli_provincia}</td></tr>
            <tr><td>{$this->cab->cli_telefono}</td></tr>
            </table>";
        $this->pdf->writeHTMLCell($width2, 0, $x2, $y, $tablaCli, 1, 1);

        $this->pdf->write2('Contrato  ', $this->contrato->concepto, 'B');
        $this->pdf->incrementCellHeight();

        // Títulos líneas
        $this->pdf->SetFont(Pdf::$fontFamily, 'B', 8);
        $this->pdf->lineFull(1);

        $titles = ['Fecha', 'Hora', 'Origen', 'Destino', 'Duración', 'Tipo', 'Establecimiento', 'Importe'];

        $nCols = count($titles);
        for ($i = 0; $i < $nCols; ++$i) {
            $this->pdf->Cell($this->linesWidth[$i], 0, $titles[$i], 0, 0, $this->linesAlign[$i]);
        }

        $this->pdf->incrementCellHeight();
        $this->pdf->lineFull(1);
        $this->pdf->SetFont(Pdf::$fontFamily, '', 8);
        $this->pdf->incrementCellHeight(0.5);
    }

    private function lineas()
    {
        $colTipo = 5;
        $colEstablecimiento = 6;
        $cols = ['fecha', 'hora', 'origen', 'destino', 'duracion', 'tipo', 'establecimiento', 'importe'];
        $nCols = count($cols);

        $lineas = ClientesLlamadas::listaLLamadas($this->cab->id, $this->idContrato, $this->facturables);
        foreach ($lineas as $lin) {
            $this->compruebaPosY();
            $numRows = 1;
            for ($i = 0; $i < $nCols; ++$i) {
                $text = $lin[$cols[$i]];
                if ($i > $colTipo) {
                    if ($i == $colEstablecimiento && (float) $text === 0.0) {
                        $text = '';
                    } else {
                        $text = Tools::floatFormat((float) $text);
                    }
                }

                if ($i < $colTipo) { // Referencia y descripción
                    $nCells = $this->pdf->MultiCell($this->linesWidth[$i], 0, $text, 0, $this->linesAlign[$i], false, 0);
                    $numRows = max($numRows, $nCells);
                } else {
                    $this->pdf->Cell($this->linesWidth[$i], 0, $text, 0, 0, $this->linesAlign[$i]);
                }
            }
            $this->pdf->incrementCellHeight($numRows);
        }
        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
    }

    private function compruebaPosY()
    {
        if ($this->pdf->GetY() > $this->footerY) {
            $this->pdf->AddPage();
            $this->cabecera();
        }
    }

    private function footerHeight()
    {
        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
        return $this->pdf->cellHeight() * 3;
    }
}
