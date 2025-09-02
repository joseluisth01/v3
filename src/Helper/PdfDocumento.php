<?php

namespace App\Helper;

use App\Entity\Empresa;
use App\Entity\Tbai;
use App\Entity\VentasCabeceras;
use App\Entity\VentasLineas;
use App\Library\Pdf;
use App\Library\Tools;

class PdfDocumento extends PdfBase
{
    /** @var int */
    protected $footerY;

    private $linesWidth = [30, 80, 20, 20, 20, 20]; // ref,desc,ud,pvp,dto,total
    private $linesAlign = ['L', 'L', 'R', 'R', 'R', 'R'];

    public function __construct(VentasCabeceras $cab)
    {
        parent::__construct($cab);
        $this->footerY = $this->pdf->height - $this->footerHeight();
    }

    public function imprime(bool $sendToBrowser): string
    {
        $this->pdf->AddPAge();
        $this->logoEmpresa();
        $this->cabecera();
        $this->lineas();
        $this->pie();

        $nombreFichero = str_replace('á', 'a', "{$this->cab->nombreDoc} {$this->cab->serie}-{$this->cab->numero}.pdf");
        if ($sendToBrowser) {
            $this->pdf->Output($nombreFichero, 'I');
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

        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
        $fecha = Tools::dateFormat($this->cab->fecha);
        $tablaDoc = "<table>
            <tr><td><b>{$this->cab->nombreDoc}</b></td><td>{$this->cab->serie}-{$this->cab->numero}</td></tr>
            <tr><td><b>Fecha</b></td><td>$fecha</td></tr>
            <tr><td><b>Cliente</b></td><td>{$this->cab->cli_codigo}</td></tr>
            </table>";
        $this->pdf->writeHTMLCell($width * 3 / 4, 0, $x, $y, $tablaDoc);

        $this->pdf->SetFont(Pdf::$fontFamily, '', 10);

        $tablaCli = "<table>
            <tr><td><b>{$this->cab->cli_nombre}</b></td></tr>
            <tr><td>CIF: {$this->cab->cli_cif}</td></tr>
            <tr><td>{$this->cab->cli_direccion}</td></tr>
            <tr><td>{$this->cab->cli_localidad}</td></tr>
            <tr><td>{$this->cab->cli_cpostal} {$this->cab->cli_provincia}</td></tr>
            <tr><td>{$this->cab->cli_telefono}</td></tr>
            </table>";
        $this->pdf->writeHTMLCell($width2, 0, $x2, $y, $tablaCli, 1, 1);

        $this->pdf->incrementCellHeight();

        // Títulos líneas
        $this->pdf->SetFont(Pdf::$fontFamily, 'B', 8);
        $this->pdf->lineFull(1);

        $titles = ['Referencia', 'Descripción', 'Unidades', 'Precio', 'Dto.', 'Importe'];
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
        $cols = ['referencia', 'descripcion', 'unidades', 'precio', 'dto', 'importe'];
        $nCols = count($cols);

        $lineas = VentasLineas::lineasImpresion($this->cab->id);
        $numLineas = count($lineas);
        for ($nLin = 0; $nLin < $numLineas; ++$nLin) {
            $lin = $lineas[$nLin];
            $lastLin = $nLin == $numLineas - 1;
            $numRows = 1;
            $hayObservaciones = !empty($lin['observaciones']);
            $hayNumerosSerie = !empty($lin['numeros_serie']);

            $this->compruebaPosY($lastLin && !$hayObservaciones && !$hayNumerosSerie);
            for ($i = 0; $i < $nCols; ++$i) {
                $text = $lin[$cols[$i]];
                if ($i < 2) { // Referencia y descripción
                    $nCells = $this->pdf->MultiCell($this->linesWidth[$i], 0, $text, 0, $this->linesAlign[$i], false, 0);
                    $numRows = max($numRows, $nCells);
                } else {
                    if (Tools::toFloat($text) === 0.0) {
                        $text = '';
                    }
                    $this->pdf->Cell($this->linesWidth[$i], 0, $text, 0, 0, $this->linesAlign[$i]);
                }
            }

            $this->pdf->incrementCellHeight($numRows);

            if ($hayNumerosSerie) {
                $text = 'Nº Serie: '.$lin['numeros_serie'];
                $height = $this->pdf->textHeight($text, $this->linesWidth[1]);
                $this->compruebaPosY($lastLin, $height);
                $nCells = $this->pdf->MultiCell($this->linesWidth[1], 0, $text, 0, $this->linesAlign[1], false, 0, $this->linesWidth[0] + $this->pdf->mLeft);
                $numRows = max(1, $nCells);
                $this->pdf->incrementCellHeight($numRows);
            }

            if ($hayObservaciones) {
                $anchoObs = $this->linesWidth[1] + $this->linesWidth[2] + $this->linesWidth[3];
                $text = $lin['observaciones'];
                $height = $this->pdf->textHeight($text, $anchoObs);
                $this->compruebaPosY($lastLin, $height);
                $nCells = $this->pdf->MultiCell($anchoObs, 0, $text, 0, $this->linesAlign[1], false, 0, $this->linesWidth[0] + $this->pdf->mLeft);
                $numRows = max(1, $nCells);
                $this->pdf->incrementCellHeight($numRows);
            }
        }
        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
    }

    private function compruebaPosY(bool $lastLin, int $additionalHeight = 0)
    {
        $footHeight = $lastLin ? $this->footerY : $this->pdf->height - 5;
        if ($this->pdf->GetY() + $additionalHeight > $footHeight) {
            $this->pdf->AddPage();
            $this->cabecera();
            $this->pdf->SetFont(Pdf::$fontFamily, '', 10);
        }
    }

    private function pie()
    {
        if ($this->pdf->GetY() > $this->footerY) {
            $this->pdf->AddPage();
            $this->cabecera();
        }

        $this->pieTablaTotales();
        $this->pieTablaInfo();

        if ($this->registroTbai) {
            $this->pieTBAI();
        } else {
            $this->pieTextos();
        }
    }

    private function pieTextos()
    {
        $x = $this->pdf->mLeft;
        $width = $this->pdf->wContent;
        $y = $this->pdf->incrementY(2);
        $this->escribeTextosPie($x, $y, $width);
    }

    private function pieTBAI()
    {
        $x = $this->pdf->mLeft;
        $width = $this->pdf->wContent;
        $this->pdf->incrementY(1);

        $this->pdf->SetFont(Pdf::$fontFamily, 'B', 12);
        $this->pdf->Cell($width, 0, $this->tbai->qr, 0, 0, 'R');
        $this->pdf->incrementCellHeight();
        $y = $this->pdf->incrementY(2);
        $this->tbaiQrCode($y);
        $width -= 50;
        $this->escribeTextosPie($x, $y, $width);
    }

    private function escribeTextosPie($x, $y, $width)
    {
        $this->pdf->SetFont(Pdf::$fontFamily, '', 7);
        $lineas = $this->pdf->writeMultiline($x, $y, $width, Empresa::textoLOPD());
        $y = $this->pdf->incrementY($lineas * $this->pdf->cellHeight() + 2);
        $lineas = $this->pdf->writeMultiline($x, $y, $width, $this->emp->txt_1);
        $y = $this->pdf->incrementY($lineas * $this->pdf->cellHeight());
        $this->pdf->writeMultiline($x, $y, $width, $this->emp->txt_2);
        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
    }

    private function tbaiQrCode($y)
    {
        $url = $this->empTBai->url_qr;
        $url .= '?id='.$this->tbai->qr;
        $url .= '&s='.$this->cab->serie;
        $url .= '&nf='.$this->cab->numero;
        $url .= '&i='.number_format($this->cab->total, 2, '.', '');
        $url .= '&cr='.Tbai::calculaCRC($url);

        $style = [
            'border' => false,
            'padding' => 0,
            'fgcolor' => [0, 0, 0],
            'bgcolor' => false,
        ];

        $x = $this->pdf->width - $this->pdf->mRight - 40;
        $this->pdf->write2DBarcode($url, 'QRCODE,M', $x, $y, 30, 30, $style, 'N');
    }

    private function footerHeight()
    {
        $width = $this->pdf->wContent;

        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
        $footerHeight = $this->pdf->cellHeight() * 6;

        $this->pdf->SetFont(Pdf::$fontFamily, '', 10);

        $obs = $this->textoObservaciones();
        if (empty($obs)) {
            $footerHeight += $this->pdf->cellHeight() * (4 + 4 + 1);
        } else {
            $heightObs = $this->pdf->textHeight($obs, $width / 2 - 2) + $this->pdf->cellHeight();
            if ($heightObs < $this->pdf->cellHeight() * 4) {
                $footerHeight += $this->pdf->cellHeight() * (4 + 4 + 1);
            } else {
                $footerHeight += $heightObs + $this->pdf->cellHeight() * (4 + 1);
            }
        }

        if ($this->registroTbai) {
            $width -= 50;
        }

        $this->pdf->SetFont(Pdf::$fontFamily, '', 7);
        $textosHeight = 2 +
            $this->pdf->textHeight(Empresa::textoLOPD(), $width) + 2 +
            $this->pdf->textHeight($this->emp->txt_1, $width) +
            $this->pdf->textHeight($this->emp->txt_2, $width);
        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);

        if ($this->registroTbai) {
            $this->pdf->SetFont(Pdf::$fontFamily, 'B', 12);
            $footerHeight += $this->pdf->cellHeight() + 2;
            $footerHeight += max($textosHeight, 40);
        } else {
            $footerHeight += $textosHeight;
        }

        return $footerHeight + 2;
    }

    private function pieTablaInfo()
    {
        $x = $this->pdf->mLeft;
        $y = $this->pdf->GetY() + 2;

        $trVencimientos = '';
        if ($this->cab->tipodoc == 8) {
            $trVencimientos ="<tr>
                <th width=\"175\"><b>Vencimientos</b></th>
                <td width=\"100%\">{$this->cab->vencimientos}</td>
                </tr>";
        }

        $tabla = <<<EOD
        <table cellpadding="2">
        <tr><th width="175"><b>Forma de pago</b></th><td width="100%">{$this->cab->fpago}</td></tr>
        <tr><th width="175"><b>Cuenta de ingreso</b></th><td width="100%">{$this->cab->ctaIngreso}</td></tr>
        {$trVencimientos}
        </table>
        EOD;

        $this->pdf->SetFont(Pdf::$fontFamily, '', 10);
        $this->pdf->writeHTMLCell(0, 0, $x, $y, $tabla, 0, 1);

        $observaciones = $this->textoObservaciones();

        $tablaObs = '<table border="1" cellpadding="2"><tr>';
        $tablaObs .= '<td>';
        $tablaObs .= '  <table>';
        $tablaObs .= '    <tr><th align="center"><b>Observaciones</b></th></tr>';
        $tablaObs .= '    <tr><td>'.$observaciones.'</td></tr>';
        $tablaObs .= '  </table>';
        $tablaObs .= ' </td>';
        $tablaObs .= '<td>';
        $tablaObs .= '  <table>';
        $tablaObs .= '    <tr><th align="center" colspan="4"><b>Desglose de IVA</b></th></tr>';
        $tablaObs .= $this->lineaDesgloseIva($this->cab->baseimpo1, $this->cab->piva1, $this->cab->prec1, $this->cab->iva1 + $this->cab->rec1);
        $tablaObs .= $this->lineaDesgloseIva($this->cab->baseimpo2, $this->cab->piva2, $this->cab->prec2, $this->cab->iva2 + $this->cab->rec2);
        $tablaObs .= $this->lineaDesgloseIva($this->cab->baseimpo3, $this->cab->piva3, $this->cab->prec3, $this->cab->iva3 + $this->cab->rec3);
        $tablaObs .= '  </table>';
        $tablaObs .= '</td>';
        $tablaObs .= '</tr></table>';

        $y = $this->pdf->GetY() + 2;
        $this->pdf->writeHTMLCell(0, 0, $x, $y, $tablaObs, 0, 1);

        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
    }

    private function lineaDesgloseIva(float $baseimpo, float $piva, float $prec, float $importe): string
    {
        $linea = '<tr>';
        if ($baseimpo != 0) {
            $linea .= '<td>'.Tools::floatFormat($baseimpo).'</td>';
            $linea .= '<td>IVA&nbsp;'.Tools::floatFormat($piva).'%</td>';
            $linea .= '<td>';
            if ($prec != 0) {
                $linea .= 'Rec&nbsp;'.Tools::floatFormat($prec).'%';
            }
            $linea .= '</td>';
            $linea .= '<td>'.Tools::floatFormat($importe).'&nbsp;€</td>';
        } else {
            $linea .= '<td colspan="4"></td>';
        }
        $linea .= '</tr>';

        return $linea;
    }

    private function pieTablaTotales()
    {
        $suma = Tools::floatFormat($this->cab->suma1 + $this->cab->suma2 + $this->cab->suma3);
        $tte = Tools::floatFormatNotZero($this->cab->portes);
        $iva = Tools::floatFormat($this->cab->iva1 + $this->cab->iva2 + $this->cab->iva3);
        $baseImpo = Tools::floatFormatNotZero($this->cab->baseimpo1 + $this->cab->baseimpo2 + $this->cab->baseimpo3);
        $total = Tools::floatFormat($this->cab->total);

        $tabla = <<<EOD
        <table border="1" cellpadding="10" style="text-align:center">
        <tr style="background-color: #eee; font-weight: bold;">
            <th>Suma</th>
            <th>Transporte</th>
            <th>Base</th>
            <th>IVA</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>$suma</td>
            <td>$tte</td>
            <td>$baseImpo</td>
            <td>$iva</td>
            <td><b>$total €</b></td>
        </tr>
        </table>
        EOD;

        $this->pdf->SetFont(Pdf::$fontFamily, '', 12);
        $this->pdf->writeHTMLCell(0, 0, $this->pdf->mLeft, $this->footerY, $tabla, 0, 1);
    }

    private function textoObservaciones()
    {
        if ($this->cab->tipodoc == 2) {
            return $this->cab->observaciones_pedido;
        }

        return $this->cab->observaciones;
    }
}
