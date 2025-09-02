<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlParam;
use App\Library\Tools;

class Clientes extends \App\Library\SqlOrm
{
    /**
     * Código de persona.
     *
     * @var int
     */
    public $codigo;
    /**
     * Nombre o razón social.
     *
     * @var string
     */
    public $nombre;
    /**
     * Primer apellido.
     *
     * @var string
     */
    public $apellido1;
    /**
     * Segundo apellido.
     *
     * @var string
     */
    public $apellido2;
    /**
     * Seudónimo del cliente.
     *
     * @var string
     */
    public $alias;
    /**
     * CIF, NIF, DNI, NIE, etc..
     *
     * @var string
     */
    public $cif;
    /**
     * Indica si el cliente es persona (F)ísica o (J)urídica.
     *
     * @var string
     */
    public $tipofiscal;
    /**
     * Indica si el cliente es (N)acional, (I)ntracomunitario, u (O)otro tipo (extranjero).
     *
     * @var string
     */
    public $nacionalidad;
    /**
     * Dirección fiscal.
     *
     * @var string
     */
    public $direccion;
    /**
     * Nombre del municipio. Por ejemplo Roquetas de Mar.
     *
     * @var string
     */
    public $localidad;
    /**
     * Código Postal.
     *
     * @var string
     */
    public $cpostal;
    /**
     * Código de provincia.
     *
     * @var int
     */
    public $provincia;
    /**
     * Código de país.
     *
     * @var int
     */
    public $pais;
    /**
     * Número de teléfono fijo, móvil o fax.
     *
     * @var string
     */
    public $telefono1;
    /**
     * Número de teléfono fijo, móvil o fax.
     *
     * @var string
     */
    public $telefono2;
    /**
     * Número de teléfono fijo, móvil o fax.
     *
     * @var string
     */
    public $telefono3;
    /**
     * Número de teléfono fijo, móvil o fax.
     *
     * @var string
     */
    public $telefono4;
    /**
     * Cliente obsoleto 1=Sí 0=No.
     *
     * @var int
     */
    public $obsoleto;
    /**
     * Página web.
     *
     * @var string
     */
    public $web;
    /**
     * Correo electrónico.
     *
     * @var string
     */
    public $email;
    /**
     * Enviar tarifas Sí=1 No=0.
     *
     * @var int
     */
    public $enviartarifas;
    /**
     * Tipo de cliente.
     *
     * @var int
     */
    public $tipo;
    /**
     * Subtipo de cliente.
     *
     * @var int
     */
    public $subtipo;
    /**
     * Ruta de venta en la que se encuentra el cliente.
     *
     * @var int
     */
    public $ruta;
    /**
     * Agencia de transporte que normalmente utilizamos con el cliente.
     *
     * @var int
     */
    public $agencia;
    /**
     * Agente comercial que normalmente atiende al cliente.
     *
     * @var int
     */
    public $agente;
    /**
     * Almacén de reparto del cliente (podría ser distinto del almacén de la delegación).
     *
     * @var int
     */
    public $almacen;
    /**
     * Indica si es intracomunitario o no.
     *
     * @var int
     */
    public $intra;
    /**
     * Indica si el cliente está exento de IVA.
     *
     * @var int
     */
    public $exento;
    /**
     * Indica si tiene recargo de equivalencia.
     *
     * @var int
     */
    public $recargo;
    /**
     * Porcentaje de recargo financiero que tenemos pactado con el cliente.
     *
     * @var float
     */
    public $recfin;
    /**
     * Clave de usuario para entrar en la página web.
     *
     * @var string
     */
    public $passwordweb;
    /**
     * Primer porcentaje de descuento en línea.
     *
     * @var float
     */
    public $dto1;
    /**
     * Segundo porcentaje de descuento en línea.
     *
     * @var float
     */
    public $dto2;
    /**
     * Tercer porcentaje de descuento en línea.
     *
     * @var float
     */
    public $dto3;
    /**
     * Descuento por pronto pago.
     *
     * @var float
     */
    public $dtopp;
    /**
     * Código de la forma de pago.
     *
     * @var int
     */
    public $fpago;
    /**
     * Primer día de pago del cliente.
     *
     * @var int
     */
    public $diapago1;
    /**
     * Segundo día de pago del cliente.
     *
     * @var int
     */
    public $diapago2;
    /**
     * Código de la tarifa que aplicamos al cliente.
     *
     * @var int
     */
    public $tarifabase;
    /**
     * Tercer día de pago del cliente.
     *
     * @var int
     */
    public $diapago3;
    /**
     * Código de la tarifa especial, que podría tener el cliente.
     *
     * @var int
     */
    public $tarifaespecial;
    /**
     * Inicio del primer período de no pago del cliente (vacaciones).
     *
     * @var \DateTime|null
     */
    public $vacaciones1_ini;
    /**
     * Fin del primer períono del no pago del cliente.
     *
     * @var \DateTime|null
     */
    public $vacaciones1_fin;
    /**
     * Porcentaje de recargo que aplicamos a los vencimientos que cambiemos la fecha por estar dentro del primer período de vacaciones.
     *
     * @var float
     */
    public $vacaciones1_rec;
    /**
     * Inicio del segundo período de "no pago" del cliente.
     *
     * @var \DateTime|null
     */
    public $vacaciones2_ini;
    /**
     * Fin del segundo período de "no pago" del cliente.
     *
     * @var \DateTime|null
     */
    public $vacaciones2_fin;
    /**
     * Porcentaje de recargo que aplicamos a los vencimientos que cambiemos la fecha por estar dentro del segundo período de vacaciones.
     *
     * @var float
     */
    public $vacaciones2_rec;
    /**
     * Acumulado de ventas anual.
     *
     * @var float
     */
    public $ventasanual;
    /**
     * Acumulado de ventas total.
     *
     * @var float
     */
    public $ventastotal;
    /**
     * Importe de riesgo permitido.
     *
     * @var float
     */
    public $riesgo;
    /**
     * Cliente bloqueado 1=Sí 0=No.
     *
     * @var int
     */
    public $bloqueado;
    /**
     * Código del motivo de bloqueo.
     *
     * @var int
     */
    public $motivobloqueo;
    /**
     * Usuario que bloqueó el cliente.
     *
     * @var string
     */
    public $usuariobloqueo;
    /**
     * Fecha de bloqueo.
     *
     * @var \DateTime|null
     */
    public $fechabloqueo;
    /**
     * Activar aviso en ventas 1=Sí 0=No.
     *
     * @var int
     */
    public $avisoventas;
    /**
     * Texto de aviso en ventas.
     *
     * @var string
     */
    public $textoaviso;
    /**
     * Cuenta contable del cliente.
     *
     * @var string
     */
    public $cta_contable;
    /** @var \DateTime|null */
    public $ultimallamada;
    /**
     * Serie de facturación predeterminada.
     *
     * @var string
     */
    public $serie_predeterminada;
    /** @var float */
    public $irpf;
    /** @var bool */
    public $imprime_datos_cli_doc_envio;
    /** @var string */
    public $observaciones;
    /** @var string */
    public $observaciones_venta;
    /**
     * Importe mínimo que debe comprar el cliente para que no le cobremos portes.
     *
     * @var float
     */
    public $importe_minimo_libre_portes;
    /** @var \DateTime|null */
    public $fecha_nacimiento;
    /**
     * Indica que siempre aplicamos IRPF, independientemente de que tenga IVA o no.
     *
     * @var bool
     */
    public $siempre_aplica_irpf;
    /** @var string */
    public $bloque;
    /** @var string */
    public $portal;
    /** @var string */
    public $escalera;
    /** @var string */
    public $piso;
    /** @var string */
    public $letra;
    /** @var string */
    public $urbanizacion;
    /** @var string */
    public $edificio;
    /** @var string */
    public $barrio;
    /** @var int */
    public $cod_municipio;
    /** @var string */
    public $puerta;
    /** @var string */
    public $numero_calle;
    /** @var string */
    public $direccion_corta;
    /** @var int */
    public $municipio;
    /** @var string */
    public $tipovia;
    /** @var string */
    public $poliza;
    /** @var bool */
    public $gasrigida;
    /** @var bool */
    public $gasflexible;
    /** @var bool */
    public $gascocina;
    /** @var bool */
    public $gascaldera;
    /** @var bool */
    public $gascalefaccion;
    /** @var bool */
    public $gascalentador;
    /** @var bool */
    public $gasfestufa;
    /** @var bool */
    public $gasotros;
    /** @var string */
    public $cta_contable_ret;
    /** @var int */
    public $aseguradora_riesgo;
    /** @var int */
    public $usuario_riesgo;
    /** @var float */
    public $importe_asegurado;
    /** @var \DateTime|null */
    public $asegurado_hasta;
    /** @var \DateTime|null */
    public $fecha_riesgo_interno;
    /** @var bool */
    public $controlpuntos;
    /** @var \DateTime|null */
    public $fecha_alta;
    /** @var float */
    public $coeficiente_puntos;
    /** @var bool */
    public $dto_estacion_servicio;
    /** @var bool */
    public $nocanon;
    /** @var bool */
    public $inversion_sujeto_pasivo;
    /** @var int */
    public $dias_impago;
    /** @var bool */
    public $activo;
    /** @var bool */
    public $es_admin;
    /** @var string */
    public $facebook;
    /** @var string */
    public $twitter;
    /** @var string */
    public $webpage;
    /** @var string */
    public $clave;
    /** @var bool */
    public $clave_pedida;
    /** @var \DateTime|null */
    public $expira_el;
    /** @var string */
    public $token_confirmacion;
    /** @var string */
    public $linkedin;
    /** @var string */
    public $googleplus;
    /** @var bool */
    public $esperiodico;
    /** @var int */
    public $diasperiodico;
    /** @var \DateTime|null */
    public $fechaperiodica;
    /** @var int */
    public $idcab_vta_periodica;
    /** @var int */
    public $tipodoc_periodico;
    /** @var string */
    public $doc_periodico;
    /** @var float */
    public $porcentaje_incremento_web;
    /** @var bool */
    public $consulta_disponible_web;
    /** @var int */
    public $forma_reparto;
    /** @var bool */
    public $facturae;
    /** @var string */
    public $carnet_fitosanitario;
    /** @var bool */
    public $canon_exento;
    /** @var bool */
    public $igic;
    /** @var \DateTime|null */
    public $rgpd_fecha;
    /** @var int */
    public $rgpd_medio;
    /** @var int */
    public $rsi_imagen;
    /** @var int */
    public $huella;
    /** @var bool */
    public $esplantilladiaria;
    /** @var bool */
    public $canon_suma;
    /** @var \DateTime|null */
    public $lopd_fecha;
    /** @var int */
    public $lopd_imagen_firma;
    /** @var string */
    public $lopd_huella_firma;
    /** @var \DateTime|null */
    public $lopd_hora_firma;
    /** @var int */
    public $lopd_interlocutor;
    /** @var \DateTime|null */
    public $agenda_fecha_inicio;
    /** @var string */
    public $agenda_periodo;
    /** @var int */
    public $agenda_intervalo;
    /** @var \DateTime|null */
    public $agenda_hora_inicio;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'apellido1', 'apellido2', 'alias', 'cif', 'tipofiscal', 'nacionalidad', 'direccion', 'localidad', 'cpostal', 'provincia', 'pais', 'telefono1', 'telefono2', 'telefono3', 'telefono4', 'obsoleto', 'web', 'email', 'enviartarifas', 'tipo', 'subtipo', 'ruta', 'agencia', 'agente', 'almacen', 'intra', 'exento', 'recargo', 'recfin', 'passwordweb', 'dto1', 'dto2', 'dto3', 'dtopp', 'fpago', 'diapago1', 'diapago2', 'tarifabase', 'diapago3', 'tarifaespecial', 'vacaciones1_ini', 'vacaciones1_fin', 'vacaciones1_rec', 'vacaciones2_ini', 'vacaciones2_fin', 'vacaciones2_rec', 'ventasanual', 'ventastotal', 'riesgo', 'bloqueado', 'motivobloqueo', 'usuariobloqueo', 'fechabloqueo', 'avisoventas', 'textoaviso', 'cta_contable', 'ultimallamada', 'serie_predeterminada', 'irpf', 'imprime_datos_cli_doc_envio', 'observaciones', 'observaciones_venta', 'importe_minimo_libre_portes', 'fecha_nacimiento', 'siempre_aplica_irpf', 'bloque', 'portal', 'escalera', 'piso', 'letra', 'urbanizacion', 'edificio', 'barrio', 'cod_municipio', 'puerta', 'numero_calle', 'direccion_corta', 'municipio', 'tipovia', 'poliza', 'gasrigida', 'gasflexible', 'gascocina', 'gascaldera', 'gascalefaccion', 'gascalentador', 'gasfestufa', 'gasotros', 'cta_contable_ret', 'aseguradora_riesgo', 'usuario_riesgo', 'importe_asegurado', 'asegurado_hasta', 'fecha_riesgo_interno', 'controlpuntos', 'fecha_alta', 'coeficiente_puntos', 'dto_estacion_servicio', 'nocanon', 'inversion_sujeto_pasivo', 'dias_impago', 'activo', 'es_admin', 'facebook', 'twitter', 'webpage', 'clave', 'clave_pedida', 'expira_el', 'token_confirmacion', 'linkedin', 'googleplus', 'esperiodico', 'diasperiodico', 'fechaperiodica', 'idcab_vta_periodica', 'tipodoc_periodico', 'doc_periodico', 'porcentaje_incremento_web', 'consulta_disponible_web', 'forma_reparto', 'facturae', 'carnet_fitosanitario', 'canon_exento', 'igic', 'rgpd_fecha', 'rgpd_medio', 'rsi_imagen', 'huella', 'esplantilladiaria', 'canon_suma', 'lopd_fecha', 'lopd_imagen_firma', 'lopd_huella_firma', 'lopd_hora_firma', 'lopd_interlocutor', 'agenda_fecha_inicio', 'agenda_periodo', 'agenda_intervalo', 'agenda_hora_inicio'];
        $this->fieldTypes = ['int', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'int', 'string', 'string', 'string', 'string', 'int', 'string', 'string', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'float', 'string', 'float', 'float', 'float', 'float', 'int', 'int', 'int', 'int', 'int', 'int', '\DateTime', '\DateTime', 'float', '\DateTime', '\DateTime', 'float', 'float', 'float', 'float', 'int', 'int', 'string', '\DateTime', 'int', 'string', 'string', '\DateTime', 'string', 'float', 'bool', 'string', 'string', 'float', '\DateTime', 'bool', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'string', 'string', 'string', 'int', 'string', 'string', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'string', 'int', 'int', 'float', '\DateTime', '\DateTime', 'bool', '\DateTime', 'float', 'bool', 'bool', 'bool', 'int', 'bool', 'bool', 'string', 'string', 'string', 'string', 'bool', '\DateTime', 'string', 'string', 'string', 'bool', 'int', '\DateTime', 'int', 'int', 'string', 'float', 'bool', 'int', 'bool', 'string', 'bool', 'bool', '\DateTime', 'int', 'int', 'int', 'bool', 'bool', '\DateTime', 'int', 'string', 'time', 'int', '\DateTime', 'string', 'int', 'time'];
        $this->fieldLengths = [0, 80, 50, 50, 50, 15, 1, 1, 80, 50, 20, 0, 0, 15, 15, 15, 15, 0, 70, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 12, 0, 10, 0, 0, 0, 0, 0, 0, 0, 30, 30, 30, 30, 30, 50, 50, 50, 0, 30, 30, 80, 0, 4, 50, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 255, 255, 255, 255, 0, 0, 255, 255, 255, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0];
        $this->defaultValues = [0, '', '', '', '', '', 'F', 'N', '', '', '', 0, 0, '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, '', 0.0, 0.0, 0.0, 0.0, 0, 0, 0, 0, 0, 0, null, null, 0, null, null, 0, 0.0, 0.0, 0.0, 0, 0, '', null, 0, '', '', null, '', 0, false, null, null, 0.0, null, false, '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', false, false, false, false, false, false, false, false, '', 0, 0, 0, null, null, false, null, 0.0, false, false, false, 0, true, false, '', '', '', '', false, null, '', '', '', false, 0, null, 0, 0, '', 0, false, 0, false, '', false, false, null, 0, 0, 0, false, false, null, 0, '', null, 0, null, 'D', 0, null];
        $this->numFields = 142;
        $this->tableName = 'clientes';
        $this->pkFields = ['codigo'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = true;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM clientes WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'int', 0);

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function nombreCompleto(): string
    {
        return trim($this->nombre.' '.$this->apellido1.' '.$this->apellido2);
    }

    public function nombreProvincia(): string
    {
        return Sql::selectString("SELECT nombre FROM provincias WHERE codigo = $this->provincia");
    }

    public function findByEmail(string $email): bool
    {
        if (empty($email)) {
            return false;
        }
        $param[] = new SqlParam('email', $email, 'string');

        return    $this->select('lower(email) = lower(:email) LIMIT 1', $param);
    }

    public function actualizaPassword(string $password)
    {
        if (!empty($password)) {
            $param[] = new SqlParam('codigo', $this->codigo, 'int');
            if (isset($_ENV['CLIENT_OLD_PASSWORD']) && $_ENV['CLIENT_OLD_PASSWORD'] == 'true') {
                $param[] = new SqlParam('clave', $password, 'string');
                $sql = 'UPDATE clientes SET passwordweb = md5(:clave), web_reset_password = false WHERE codigo = :codigo';
            } else {
                $param[] = new SqlParam('clave', \password_hash($password, PASSWORD_BCRYPT), 'string');
                $sql = 'UPDATE clientes SET clave = :clave, web_reset_password = false WHERE codigo = :codigo';
            }
            Sql::execute($sql, $param);
        }
    }

    public static function clienteBloqueado(int $codigo): bool
    {
        if (empty($codigo)) {
            return false;
        }

        return (bool) Sql::selectEscalar("SELECT obsoleto != 0 OR bloqueado != 0 FROM clientes WHERE codigo = $codigo");
    }

    public static function listaProvincias(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM provincias ORDER BY nombre');
    }

    public static function listaTiposClientes(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM clientes_tipos ORDER BY nombre');
    }

    public static function listaFormasPago(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM formaspago ORDER BY nombre');
    }

    public static function listaTarifasNombres(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM tarifas_nombres ORDER BY nombre');
    }

    public static function existeEmail(string $email): bool
    {
        $existe = false;
        if (!empty($email)) {
            $param = [new SqlParam('email', $email, 'string')];
            $existe = (bool) Sql::selectEscalar('SELECT exists(SELECT 1 FROM clientes WHERE upper(email) = upper(:email))', $param);
        }

        return $existe;
    }

    public static function existeEmailOtroCliente(int $codigo, string $email): bool
    {
        $existe = false;
        if ($codigo === 0 || !empty($email)) {
            $param = [
                new SqlParam('codigo', $codigo, 'int'),
                new SqlParam('email', $email, 'string'),
            ];
            $existe = (bool) Sql::selectEscalar('SELECT exists(SELECT 1 FROM clientes WHERE codigo != :codigo AND upper(email) = upper(:email))', $param);
        }

        return $existe;
    }
}
