<?php

namespace App\Helper;

use App\Entity\Empresa;
use App\Entity\EmpresaTbai;
use App\Entity\Tbai;
use App\Entity\VentasCabeceras;
use App\Library\Pdf;
use App\Library\Sql;

class PdfBase
{
    /** @var Pdf */
    protected $pdf;
    /** @var VentasCabeceras */
    protected $cab;
    /** @var Empresa */
    protected $emp;
    /** @var EmpresaTbai */
    protected $empTBai;
    /* @var Tbai */
    protected $tbai;
    /* @var bool */
    protected $registroTbai;

    public function __construct(VentasCabeceras $cab)
    {
        $this->pdf = new Pdf();
        $this->cab = $cab;
        $this->emp = Empresa::leeEmpresa();
        $this->empTBai = EmpresaTbai::leeRegistro();
        $this->tbai = new Tbai();
        $this->registroTbai = $this->empTBai->activar && $this->tbai->ultimoRegistro($this->cab->id);
    }

    protected function logoEmpresa()
    {
        $pathLogo = sys_get_temp_dir()."/logo-empresa-{$this->cab->id}";
        Sql::blobRead($pathLogo, Empresa::leeImagen());
        $imSize = @getimagesize($pathLogo);
        list($pixw, $pixh) = $imSize;
        $h = $this->pdf->wContent * $pixh / $pixw;
        $this->pdf->Image($pathLogo, $this->pdf->mLeft, $this->pdf->mTop, $this->pdf->wContent, 0, '', '', 'C', true);
        $this->pdf->SetY($h + $this->pdf->mTop);
        $this->pdf->unlink($pathLogo);
    }
}
