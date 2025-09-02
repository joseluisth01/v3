<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class Empresa extends \App\Library\SqlOrm
{
    /** @var string */
    public $cif;
    /** @var string */
    public $nombre;
    /** @var string */
    public $direccion;
    /** @var string */
    public $localidad;
    /** @var string */
    public $cpostal;
    /** @var int */
    public $provincia;
    /** @var int */
    public $pais;
    /** @var string */
    public $telefono1;
    /** @var string */
    public $telefono2;
    /** @var string */
    public $fax;
    /** @var string */
    public $email;
    /** @var string */
    public $txt_registro;
    /** @var string */
    public $txt_1;
    /** @var string */
    public $txt_2;
    /** @var string */
    public $smtp_servidor;
    /** @var string */
    public $smtp_usuario;
    /** @var string */
    public $smtp_password;
    /** @var int */
    public $alm_inmovilizado;
    /** @var int */
    public $alm_perdidas;
    /** @var int */
    public $alm_robos;
    /** @var int */
    public $alm_roturas;
    /** @var int */
    public $smtp_puerto;
    /** @var int */
    public $smtp_ssl;
    /** @var int */
    public $irpf;
    /** @var float */
    public $irpf_porcent;
    /** @var int */
    public $recargo;
    /** @var int */
    public $alm_rma_cli;
    /** @var int */
    public $alm_rma_emp;
    /** @var string */
    public $codigo_concesionario;
    /** @var string */
    public $codigo_contribuyente;
    /** @var string */
    public $direccion2;
    /** @var string */
    public $localidad2;
    /** @var string */
    public $cpostal2;
    /** @var int */
    public $provincia2;
    /** @var bool */
    public $fiscal_delegacion;
    /** @var string */
    public $crc_datos_empresa;
    /** @var string */
    public $emailcco;
    /** @var string */
    public $rsi;
    /** @var bool */
    public $inversion_sujeto_pasivo;
    /** @var bool */
    public $euskera;
    /** @var int */
    public $alm_series_no_inventario;
    /** @var string */
    public $facturae_ruta;
    /** @var string */
    public $facturae_certificado;
    /** @var string */
    public $facturae_pwd;
    /** @var string */
    public $carnet_fitosanitario;
    /** @var bool */
    public $facturae_xml;
    /**
     * Códig de fabricante de AECOC.
     *
     * @var string
     */
    public $aecoc;
    /**
     * Contador de códigos EAN13 generados.
     *
     * @var int
     */
    public $aecoc_contador;
    /** @var int */
    public $imagen_firma;
    /** @var int */
    public $imagen_firma_sello;
    /** @var bool */
    public $es_persona_fisica;
    /** @var string */
    public $pf_nombre;
    /** @var string */
    public $pf_apellido1;
    /** @var string */
    public $pf_apellido2;
    /** @var string */
    public $nombre_delegacion;
    /** @var string */
    public $ultima_version;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['cif', 'nombre', 'direccion', 'localidad', 'cpostal', 'provincia', 'pais', 'telefono1', 'telefono2', 'fax', 'email', 'txt_registro', 'txt_1', 'txt_2', 'smtp_servidor', 'smtp_usuario', 'smtp_password', 'alm_inmovilizado', 'alm_perdidas', 'alm_robos', 'alm_roturas', 'smtp_puerto', 'smtp_ssl', 'irpf', 'irpf_porcent', 'recargo', 'alm_rma_cli', 'alm_rma_emp', 'codigo_concesionario', 'codigo_contribuyente', 'direccion2', 'localidad2', 'cpostal2', 'provincia2', 'fiscal_delegacion', 'crc_datos_empresa', 'emailcco', 'rsi', 'inversion_sujeto_pasivo', 'euskera', 'alm_series_no_inventario', 'facturae_ruta', 'facturae_certificado', 'facturae_pwd', 'carnet_fitosanitario', 'facturae_xml', 'aecoc', 'aecoc_contador', 'imagen_firma', 'imagen_firma_sello', 'es_persona_fisica', 'pf_nombre', 'pf_apellido1', 'pf_apellido2', 'nombre_delegacion', 'ultima_version'];
        $this->fieldTypes = ['string', 'string', 'string', 'string', 'string', 'int', 'int', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'float', 'int', 'int', 'int', 'string', 'string', 'string', 'string', 'string', 'int', 'bool', 'string', 'string', 'string', 'bool', 'bool', 'int', 'string', 'string', 'string', 'string', 'bool', 'string', 'int', 'int', 'int', 'bool', 'string', 'string', 'string', 'string', 'string'];
        $this->fieldLengths = [15, 100, 80, 50, 20, 0, 0, 15, 15, 15, 70, 1024, 1024, 1024, 80, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 40, 80, 50, 20, 0, 0, 0, 50, 50, 0, 0, 0, 0, 0, 32, 32, 0, 10, 0, 0, 0, 0, 100, 100, 100, 0, 0];
        $this->defaultValues = ['', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 25, 0, 0, 0.0, 0, 0, 0, '', '', '', '', '', 0, false, '', '', '', false, false, 0, '', '', '', '', false, '', 0, 0, 0, false, '', '', '', '', ''];
        $this->numFields = 56;
        $this->tableName = 'empresa';
        $this->pkFields = ['cif'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM empresa WHERE ' . $this->sqlPKCondition() . ')';
        $param[] = new SqlParam('cif', $this->cif, 'string', 15);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public static function leeEmpresa(): Empresa
    {
        $emp = new self();
        $emp->select('1=1 LIMIT 1');
        $emp->provincia = Sql::selectString("SELECT nombre FROM provincias WHERE codigo = $emp->provincia");

        return $emp;
    }
    public static function leeNombre(): string
    {
        return Sql::selectString('SELECT nombre FROM empresa LIMIT 1');
    }


    public static function leeIRPF(): float
    {
        return (float) Sql::selectEscalar('SELECT irpf_porcent FROM empresa LIMIT 1');
    }

    public static function leeEmail(): string
    {
        return Sql::selectString('SELECT email FROM empresa LIMIT 1');
    }

    public static function leeImagen(): int
    {
        return (int) Sql::selectEscalar('SELECT imagen FROM empresa_imagenes WHERE codigo = 1 AND delegacion = 0');
    }

    public static function textoLOPD(): string
    {
        return Tools::rtfToTxt(Sql::selectString('SELECT texto_factura FROM empresa_lopd WHERE delegacion = 0 LIMIT 1'));
    }

    public static function ivaPortes(): float
    {
        return (float) Sql::selectEscalar("SELECT iva FROM tipos_iva WHERE codigo = coalesce((SELECT cast(coalesce(nullif(valor, 'false'), '1') AS integer) FROM configuracion WHERE codigo = 24), 1)");
    }

    public static function operadorTelefonia(): bool
    {
        return Tools::toBool(Sql::selectEscalar('SELECT valor FROM configuracion WHERE codigo = 50'));
    }
}
