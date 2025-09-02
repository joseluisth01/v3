<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;

class Sat extends SqlOrm
{
    /**
     * Identificador del registro.
     *
     * @var int
     */
    public $id;
    /**
     * Tipo de aviso.
     *
     * @var int
     */
    public $tipo;
    /**
     * Serie del documento.
     *
     * @var string
     */
    public $serie;
    /**
     * Categoria en la que englobamos el aviso.
     *
     * @var int
     */
    public $categoria;
    /**
     * Codigo del cliente al que asociamos el parte de SAT.
     *
     * @var int
     */
    public $cliente;
    /**
     * Nombre del cliente al que asociamos el parte de SAT.
     *
     * @var string
     */
    public $cli_nombre;
    /**
     * Nombre de la persona de contacto relacionada con el cliente.
     *
     * @var string
     */
    public $cli_pcontacto;
    /**
     * Delegacion del cliente asociada al parte de SAT.
     *
     * @var int
     */
    public $cli_delegacion;
    /**
     * Primer telefono del cliente al que asociamos el parte de SAT.
     *
     * @var string
     */
    public $cli_telefono1;
    /**
     * Segundo telefono del cliente al que asociamos el parte de SAT.
     *
     * @var string
     */
    public $cli_telefono2;
    /**
     * Tercer telefono del cliente al que asociamos el parte de SAT.
     *
     * @var string
     */
    public $cli_telefono3;
    /**
     * Cuarto telefono del cliente al que asociamos el parte de SAT.
     *
     * @var string
     */
    public $cli_telefono4;
    /**
     * Direccion del cliente que asociamos al parte de SAT (no tiene por que coincidir con la direccion principal del cliente).
     *
     * @var string
     */
    public $cli_direccion;
    /**
     * Localidad del cliente en la que habra que resolver el parte de SAT.
     *
     * @var string
     */
    public $cli_localidad;
    /**
     * Codigo postal de la direccion asociada al parte.
     *
     * @var string
     */
    public $cli_cpostal;
    /**
     * Provincia asociada a la direccion del parte de SAT.
     *
     * @var int
     */
    public $cli_provincia;
    /**
     * Identificador del numero de serie asociado al parte de SAT.
     *
     * @var int
     */
    public $idserie;
    /**
     * Numero de serie asociado al parte de SAT.
     *
     * @var string
     */
    public $numeroserie;
    /**
     * Referencia del articulo asociado al parte de SAT.
     *
     * @var string
     */
    public $referencia;
    /**
     * Breve descripcion del origen del parte de SAT.
     *
     * @var string
     */
    public $asunto;
    /**
     * Descripcion completa de la causa que origina el parte de SAT.
     *
     * @var string
     */
    public $descripcion;
    /**
     * Observaciones del parte de SAT (se podran imprimir).
     *
     * @var string
     */
    public $observaciones;
    /**
     * Notas internas del parte de SAT (no se imprimen).
     *
     * @var string
     */
    public $notas;
    /**
     * Fecha en la que se crea el parte.
     *
     * @var \DateTime|null
     */
    public $fecha_inicio;
    /**
     * Hora en la que se crea el parte.
     *
     * @var \DateTime|null
     */
    public $hora_inicio;
    /**
     * Usuario que crea el parte.
     *
     * @var int
     */
    public $usuario_inicio;
    /**
     * Estado en el que se encuentra actualmente el parte. 0 = Nuevo: El parte SAT se ha creado. No tiene todavía actuaciones asignadas. 1 = EnCurso: El parte SAT tiene actuaciones en proceso. 2 = PendientePiezas: Alguna actuación está pendiente de recibir material. 3 = Rechazado: La resolución del parte ha sido rechazada por el cliente. 4 = PteCobro: El técnico ha terminado su trabajo. El parte está pendiente de cobro 5 = Cobrado: El parte está cobrado. Está pendiente de finalización o facturación. 6 = Facturado: El parte de SAT está facturado. No se cobra desde SAT 7 = Finalizado: El proceso del parte de SAT ha concluido.
     *
     * @var int
     */
    public $estado;
    /** @var float */
    public $suma1;
    /** @var float */
    public $suma2;
    /** @var float */
    public $suma3;
    /** @var float */
    public $pdtopp;
    /** @var float */
    public $baseimpo1;
    /** @var float */
    public $baseimpo2;
    /** @var float */
    public $baseimpo3;
    /** @var float */
    public $piva1;
    /** @var float */
    public $piva2;
    /** @var float */
    public $piva3;
    /** @var float */
    public $prec1;
    /** @var float */
    public $prec2;
    /** @var float */
    public $prec3;
    /** @var float */
    public $iva1;
    /** @var float */
    public $iva2;
    /** @var float */
    public $iva3;
    /** @var float */
    public $rec1;
    /** @var float */
    public $rec2;
    /** @var float */
    public $rec3;
    /** @var float */
    public $irpf;
    /** @var float */
    public $pirpf;
    /** @var float */
    public $total;
    /** @var float */
    public $piezas_con_cargo;
    /** @var float */
    public $mano_obra_con_cargo;
    /** @var float */
    public $desplazamiento_con_cargo;
    /** @var float */
    public $piezas_sin_cargo;
    /** @var float */
    public $mano_obra_sin_cargo;
    /** @var float */
    public $desplazamiento_sin_cargo;
    /** @var int */
    public $idpedido;
    /** @var int */
    public $marca;
    /** @var int */
    public $modelo;
    /** @var string */
    public $nombre_articulo;
    /** @var int */
    public $satactuacion;
    /** @var \DateTime|null */
    public $fecha_intervencion;
    /** @var string */
    public $clibloque;
    /** @var string */
    public $cliportal;
    /** @var string */
    public $cliescalera;
    /** @var string */
    public $clipiso;
    /** @var string */
    public $cliletra;
    /** @var string */
    public $cliurbanizacion;
    /** @var string */
    public $cliedificio;
    /** @var string */
    public $clibarrio;
    /** @var int */
    public $clicod_municipio;
    /** @var string */
    public $clipuerta;
    /** @var string */
    public $clinumero_calle;
    /** @var string */
    public $clidireccion_corta;
    /** @var int */
    public $climunicipio;
    /** @var int */
    public $cliruta;
    /** @var string */
    public $tipovia;
    /** @var bool */
    public $cligasrigida;
    /** @var bool */
    public $cligasflexible;
    /** @var bool */
    public $cligascocina;
    /** @var bool */
    public $cligascaldera;
    /** @var bool */
    public $cligascalefaccion;
    /** @var bool */
    public $cligascalentador;
    /** @var bool */
    public $cligasfestufa;
    /** @var bool */
    public $cligasotros;
    /** @var int */
    public $interlocutor;
    /** @var int */
    public $imagen_firma;
    /** @var string */
    public $huella_firma;
    /** @var \DateTime|null */
    public $hora_firma;
    /** @var int */
    public $tecnico;
    /** @var string */
    public $boletin;
    /** @var string */
    public $garantia;
    /** @var string */
    public $etiquetas_accesorios;
    /** @var int */
    public $establecimiento;
    /** @var \DateTime|null */
    public $fecha_compra;
    /** @var bool */
    public $backup;
    /** @var string */
    public $patron;
    /** @var string */
    public $clave;
    /** @var bool */
    public $reclamado;
    /** @var bool */
    public $solicita_presupuesto;
    /** @var bool */
    public $web;
    /** @var bool */
    public $crea_parte_cliente;
    /** @var \DateTime|null */
    public $fecha_recepcion;
    /** @var \DateTime|null */
    public $fecha_envio;
    /** @var string */
    public $parte_origen;
    /** @var string */
    public $web_marca;
    /** @var string */
    public $web_modelo;
    /** @var string */
    public $web_articulo;
    /** @var int */
    public $id_web_externa;
    /** @var \DateTime|null */
    public $fecha_web_externa;
    /** @var int */
    public $contrato;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'tipo', 'serie', 'categoria', 'cliente', 'cli_nombre', 'cli_pcontacto', 'cli_delegacion', 'cli_telefono1', 'cli_telefono2', 'cli_telefono3', 'cli_telefono4', 'cli_direccion', 'cli_localidad', 'cli_cpostal', 'cli_provincia', 'idserie', 'numeroserie', 'referencia', 'asunto', 'descripcion', 'observaciones', 'notas', 'fecha_inicio', 'hora_inicio', 'usuario_inicio', 'estado', 'suma1', 'suma2', 'suma3', 'pdtopp', 'baseimpo1', 'baseimpo2', 'baseimpo3', 'piva1', 'piva2', 'piva3', 'prec1', 'prec2', 'prec3', 'iva1', 'iva2', 'iva3', 'rec1', 'rec2', 'rec3', 'irpf', 'pirpf', 'total', 'piezas_con_cargo', 'mano_obra_con_cargo', 'desplazamiento_con_cargo', 'piezas_sin_cargo', 'mano_obra_sin_cargo', 'desplazamiento_sin_cargo', 'idpedido', 'marca', 'modelo', 'nombre_articulo', 'satactuacion', 'fecha_intervencion', 'clibloque', 'cliportal', 'cliescalera', 'clipiso', 'cliletra', 'cliurbanizacion', 'cliedificio', 'clibarrio', 'clicod_municipio', 'clipuerta', 'clinumero_calle', 'clidireccion_corta', 'climunicipio', 'cliruta', 'tipovia', 'cligasrigida', 'cligasflexible', 'cligascocina', 'cligascaldera', 'cligascalefaccion', 'cligascalentador', 'cligasfestufa', 'cligasotros', 'interlocutor', 'imagen_firma', 'huella_firma', 'hora_firma', 'tecnico', 'boletin', 'garantia', 'etiquetas_accesorios', 'establecimiento', 'fecha_compra', 'backup', 'patron', 'clave', 'reclamado', 'solicita_presupuesto', 'web', 'crea_parte_cliente', 'fecha_recepcion', 'fecha_envio', 'parte_origen', 'web_marca', 'web_modelo', 'web_articulo', 'id_web_externa', 'fecha_web_externa', 'contrato'];
        $this->fieldTypes = ['int', 'int', 'string', 'int', 'int', 'string', 'string', 'int', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'int', 'string', 'string', 'string', 'string', 'string', 'string', '\DateTime', 'time', 'int', 'int', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'int', 'string', 'int', '\DateTime', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'string', 'string', 'string', 'int', 'int', 'string', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'int', 'int', 'string', 'time', 'int', 'string', 'string', 'string', 'int', '\DateTime', 'bool', 'string', 'string', 'bool', 'bool', 'bool', 'bool', '\DateTime', '\DateTime', 'string', 'string', 'string', 'string', 'int', '\DateTime', 'int'];
        $this->fieldLengths = [0, 0, 19, 0, 0, 80, 80, 0, 15, 15, 15, 15, 80, 50, 20, 0, 0, 50, 30, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 30, 30, 30, 30, 30, 50, 50, 50, 0, 30, 30, 80, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 30, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, '', 0, 0, '', '', 0, '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', null, null, 0, 0, 0, 0, 0, 0.0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0, 0, 0, '', 0, null, '', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, '', false, false, false, false, false, false, false, false, 0, 0, '', null, 0, '', '0', '', 0, null, false, '', '', false, false, false, false, null, null, '', '', '', '', 0, null, 0];
        $this->numFields = 110;
        $this->tableName = 'sat';
        $this->pkFields = ['id'];
        $this->numPkFields = 1;
        $this->autoIncrementField = 'id';
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        return $this->id == 0;
    }

    // -- END generated code --
    public function grabaEstadistica()
    {
        Sql::execute("SELECT graba_estadistica_sat($this->id)");
    }

    public function rellenaDatosCliente(Clientes $cli)
    {
        $this->cliente = $cli->codigo;
        $this->cli_nombre = $cli->nombrecompleto();
        $this->cli_telefono1 = $cli->telefono1;
        $this->cli_telefono2 = $cli->telefono2;
        $this->cli_telefono3 = $cli->telefono3;
        $this->cli_telefono4 = $cli->telefono4;
        $this->cli_direccion = $cli->direccion;
        $this->cli_localidad = $cli->localidad;
        $this->cli_cpostal = $cli->cpostal;
        $this->cli_provincia = $cli->provincia;
    }
}
