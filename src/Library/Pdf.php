<?php

namespace App\Library;

use TCPDF;

class Pdf extends TCPDF
{
    /** @var float Ancho de la página */
    public float $width;
    /** @var float Alto de la página */
    public float $height;
    /** @var float Margen izquierdo */
    public float $mLeft;
    /** @var float Margen derecho */
    public float $mRight;
    /** @var float Margen superior */
    public float $mTop;
    /** @var float Margen inferior */
    public float $mBottom;
    /** @var float Ancho del contenido (página - márgenes) */
    public float $wContent;

    public static string $fontFamily = 'dejavusans';

    public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false)
    {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa);
        $this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetAutoPageBreak(true, 1);
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $this->SetFont(Pdf::$fontFamily, '', 12);

        $dim = $this->getPageDimensions();
        $this->width = (float) $dim['wk'];
        $this->height = (float) $dim['hk'];

        $margins = $this->getMargins();
        $this->mLeft = (float) $margins['left'];
        $this->mRight = (float) $margins['right'];
        $this->mTop = (float) $margins['top'];
        $this->mBottom = (float) $margins['bottom'];

        $this->wContent = $this->width - ($this->mLeft + $this->mRight);
    }

    public function cellHeight(): float
    {
        return $this->getCellHeight($this->getFontSize());
    }

    public function textHeight($text, $width)
    {
        return $this->cellHeight() * $this->getNumLines($text, $width);
    }

    public function writeText($text)
    {
        $this->Write(0, $text, '', false, 'L', true);
    }

    public function write2($text1, $text2, $style = 'I', $fontFamily = null)
    {
        if (empty($fontFamily)) {
            $fontFamily = self::$fontFamily;
        }
        $this->SetFont($fontFamily, $style);
        $this->Write(0, $text1);
        $this->SetFont($fontFamily);
        $this->WriteText($text2);
    }

    public function writeMultiline($x, $y, $width, $text)
    {
        return $this->MultiCell($width, 5, $text, 0, 'L', false, 0, $x, $y);
    }

    public function writeBold($text, $fontFamily = null)
    {
        if (empty($fontFamily)) {
            $fontFamily = self::$fontFamily;
        }
        $this->SetFont($fontFamily, 'B');
        $this->writeText($text);
        $this->SetFont($fontFamily);
    }

    public function lineFull(int $incY = 2)
    {
        $y = $this->incrementY($incY);
        $this->Line($this->mLeft, $y, $this->width - $this->mRight, $y, ['width' => 0.5]);
        $this->incrementY($incY);
    }

    public function incrementY($offset): float
    {
        $y = $this->GetY() + $offset;
        $this->SetY($y);

        return $y;
    }

    public function incrementCellHeight(float $numRows = 1)
    {
        $y = $this->GetY() + ($this->cellHeight() * $numRows);
        $this->SetY($y);

        return $y;
    }

    public function unlink($filename)
    {
        if (file_exists($filename)) {
            unlink($filename);
        }
    }
}
