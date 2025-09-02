<?php

namespace App\Entity;

use App\Library\SqlOrm;

class SatParteActuacion extends SqlOrm
{
    /**
     * Identificador del registro.
     *
     * @var int
     */
    public $id;
    /**
     * Identificador del parte de SAT.
     *
     * @var int
     */
    public $idsat;
    /**
     * Código del tecnico (usuario) que gestiona esta actuacion.
     *
     * @var int
     */
    public $tecnico;
    /**
     * Estado en que se encuentra la actuacion 0 -> en curso 1 -> pendiente de piezas 2 -> finalizada 3 -> facturada.
     *
     * @var int
     */
    public $estado;
    /**
     * Descripcion corta de la actuacion.
     *
     * @var string
     */
    public $asunto;
    /**
     * Descripcion del trabajo a realizar.
     *
     * @var string
     */
    public $descripcion;
    /**
     * Solucion adoptada por el tecnico.
     *
     * @var string
     */
    public $solucion;
    /** @var string */
    public $observaciones;
    /**
     * Indica si la actuacion es un presupuesto (las lineas no descuentan de almacen).
     *
     * @var int
     */
    public $presupuesto;
    /**
     * Indica si la actuacion la cubre algun tipo de seguro.
     *
     * @var int
     */
    public $seguro;
    /**
     * Indica si la actuacion se realiza en garantia.
     *
     * @var int
     */
    public $garantia;
    /**
     * Fecha de inicio de la actuacion.
     *
     * @var \DateTime|null
     */
    public $fechainicio;
    /**
     * Fecha de finalizacion de la actuacion.
     *
     * @var \DateTime|null
     */
    public $fechafin;
    /**
     * Usuario que crea o modifica el registro.
     *
     * @var int
     */
    public $usuario;
    /**
     * Hora en que se crea o modifica el registro.
     *
     * @var \DateTime
     */
    public $hora_registro;
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
    /** @var float */
    public $irpf;
    /** @var float */
    public $pirpf;
    /** @var float */
    public $total;
    /** @var int */
    public $idfactura;
    /** @var int */
    public $cli_cia_seguros;
    /** @var int */
    public $cli_fabricante;
    /** @var int */
    public $cli_garantia;
    /** @var \DateTime|null */
    public $fecha_aceptacion_presupuesto;
    /** @var \DateTime|null */
    public $fecharechazado;
    /** @var string */
    public $usuario_rechazado;
    /** @var string */
    public $motivo_rechazado;
    /** @var string */
    public $hora_intervencion;
    /** @var bool */
    public $avisado;
    /** @var int */
    public $interlocutor;
    /** @var int */
    public $imagen_firma;
    /** @var string */
    public $huella_firma;
    /** @var \DateTime|null */
    public $hora_firma;
    /** @var \DateTime|null */
    public $hora_inicio;
    /** @var \DateTime|null */
    public $hora_fin;
    /** @var float */
    public $piezas_externas_con_cargo;
    /** @var float */
    public $piezas_externas_sin_cargo;
    /** @var \DateTime|null */
    public $hora_aceptacion_web;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'idsat', 'tecnico', 'estado', 'asunto', 'descripcion', 'solucion', 'observaciones', 'presupuesto', 'seguro', 'garantia', 'fechainicio', 'fechafin', 'usuario', 'hora_registro', 'suma1', 'suma2', 'suma3', 'pdtopp', 'baseimpo1', 'baseimpo2', 'baseimpo3', 'piva1', 'piva2', 'piva3', 'prec1', 'prec2', 'prec3', 'iva1', 'iva2', 'iva3', 'rec1', 'rec2', 'rec3', 'piezas_con_cargo', 'mano_obra_con_cargo', 'desplazamiento_con_cargo', 'piezas_sin_cargo', 'mano_obra_sin_cargo', 'desplazamiento_sin_cargo', 'irpf', 'pirpf', 'total', 'idfactura', 'cli_cia_seguros', 'cli_fabricante', 'cli_garantia', 'fecha_aceptacion_presupuesto', 'fecharechazado', 'usuario_rechazado', 'motivo_rechazado', 'hora_intervencion', 'avisado', 'interlocutor', 'imagen_firma', 'huella_firma', 'hora_firma', 'hora_inicio', 'hora_fin', 'piezas_externas_con_cargo', 'piezas_externas_sin_cargo', 'hora_aceptacion_web'];
        $this->fieldTypes = ['int', 'int', 'int', 'int', 'string', 'string', 'string', 'string', 'int', 'int', 'int', '\DateTime', '\DateTime', 'int', 'time', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'int', 'int', '\DateTime', '\DateTime', 'string', 'string', 'string', 'bool', 'int', 'int', 'string', 'time', 'time', 'time', 'float', 'float', 'time'];
        $this->fieldLengths = [0, 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, 0, '', '', '', '', 0, 0, 0, null, null, 0, 'now', 0, 0, 0, 0.0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0, 0, 0, 0, null, null, '', '', '', false, 0, 0, '', null, null, null, 0.0, 0.0, null];
        $this->numFields = 62;
        $this->tableName = 'sat_parte_actuacion';
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
    private function resetTotalesActuacion()
    {
        $this->piezas_con_cargo = 0.0;
        $this->mano_obra_con_cargo = 0.0;
        $this->desplazamiento_con_cargo = 0.0;
        $this->piezas_sin_cargo = 0.0;
        $this->mano_obra_sin_cargo = 0.0;
        $this->desplazamiento_sin_cargo = 0.0;
        $this->total = 0.0;

        $this->pirpf = Empresa::leeIRPF();
        $this->irpf = 0.0;

        for ($i = 1; $i <= 3; ++$i) {
            $suma = 'suma'.$i;
            $baseimpo = 'baseimpo'.$i;
            $piva = 'piva'.$i;
            $prec = 'prec'.$i;
            $iva = 'iva'.$i;
            $rec = 'rec'.$i;

            $this->$suma = 0.0;
            $this->$baseimpo = 0.0;
            $this->$piva = 0.0;
            $this->$prec = 0.0;
            $this->$iva = 0.0;
            $this->$rec = 0.0;
        }
    }

    public function actualizaTotales()
    {
        $totales = SatLineas::totalesActuacion($this->id);
        $i = 1;

        $this->resetTotalesActuacion();

        $sumaBI = 0.0;
        foreach ($totales as $tot) {
            $suma = 'suma'.$i;
            $baseimpo = 'baseimpo'.$i;
            $piva = 'piva'.$i;
            $prec = 'prec'.$i;
            $iva = 'iva'.$i;
            $rec = 'rec'.$i;

            $this->$suma = $tot['baseimpo'];
            $this->$baseimpo = $tot['baseimpo'];
            $this->$piva = $tot['piva'];
            $this->$prec = $tot['prec'];
            $this->$iva = $tot['iva'];
            $this->$rec = $tot['rec'];

            $this->total += $this->$baseimpo + $this->$iva;

            $this->piezas_con_cargo += $tot['piezas_con_cargo'];
            $this->mano_obra_con_cargo += $tot['mano_obra_con_cargo'];
            $this->desplazamiento_con_cargo += $tot['desplazamiento_con_cargo'];
            $this->piezas_sin_cargo += $tot['piezas_sin_cargo'];
            $this->mano_obra_sin_cargo += $tot['mano_obra_sin_cargo'];
            $this->desplazamiento_sin_cargo += $tot['desplazamiento_sin_cargo'];

            $sumaBI += $this->$baseimpo;

            ++$i;
        }

        $this->irpf = round($sumaBI * $this->pirpf, 2);
        $this->total -= $this->irpf;

        $this->update();
    }
}
