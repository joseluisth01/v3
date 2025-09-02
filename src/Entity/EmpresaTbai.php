<?php

namespace App\Entity;

use App\Library\SqlOrm;
use App\Library\Tools;

class EmpresaTbai extends SqlOrm
{
    /** @var bool */
    public $activar;
    /** @var \DateTime|null */
    public $fecha_inicio;
    /** @var string */
    public $url_envio;
    /** @var string */
    public $url_anulacion;
    /** @var string */
    public $url_qr;
    /** @var string */
    public $certificado_fichero;
    /** @var string */
    public $password;
    /** @var int */
    public $certificado_oid;
    /** @var string */
    public $md5;
    /** @var bool */
    public $aviso_error_v3;
    /** @var bool */
    public $aviso_error_tpv;
    /** @var bool */
    public $aviso_error_sat;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['activar', 'fecha_inicio', 'url_envio', 'url_anulacion', 'url_qr', 'certificado_fichero', 'password', 'certificado_oid', 'md5', 'aviso_error_v3', 'aviso_error_tpv', 'aviso_error_sat'];
        $this->fieldTypes = ['bool', '\DateTime', 'string', 'string', 'string', 'string', 'string', 'int', 'string', 'bool', 'bool', 'bool'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [false, null, '', '', '', '', '', 0, '', true, true, true];
        $this->numFields = 12;
        $this->tableName = 'empresa_tbai';
        $this->pkFields = [''];
        $this->numPkFields = 0;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM empresa_tbai WHERE ' . $this->sqlPKCondition() . ')';
        return !Tools::toBool($this->selectEscalar($sql));
    }

    // -- END generated code --
    public static function leeRegistro(): EmpresaTbai
    {
        $reg = new self();
        $reg->select('true LIMIT 1');

        return $reg;
    }
}
