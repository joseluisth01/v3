<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class VentasLineas extends SqlOrm
{
    /**
     * Identificador de la línea
     * @var int
     */
    public $id;
    /**
     * Identificador del registro de la cabecera
     * @var int
     */
    public $idcab;
    /**
     * Tipo de documento 1->presupuesto 2->pedido 4->albarán 8->factura 16->rma 32->sat
     * @var int
     */
    public $tipodoc;
    /**
     * Serie del documento de venta
     * @var string
     */
    public $serie;
    /**
     * Número del documento de venta
     * @var int
     */
    public $numero;
    /**
     * Código del cliente al que hacemos la venta
     * @var int
     */
    public $cli_codigo;
    /**
     * Posición de la línea dentro del documento
     * @var int
     */
    public $orden;
    /**
     * Fecha de la venta
     * @var \DateTime
     */
    public $fecha;
    /**
     * Fecha prevista de entrega en los pedidos. Si la línea tiene fecha de entrega, prevalece sobre la de la cabecera
     * @var \DateTime|null
     */
    public $fechaentrega;
    /**
     * Referencia del artículo que vendemos
     * @var string
     */
    public $referencia;
    /**
     * Concepto de la línea de venta
     * @var string
     */
    public $descripcion;
    /**
     * Cantidad en unidades (1Ãƒâ€šÃ‚Âª unidad)
     * @var float
     */
    public $unidades;
    /**
     * Cantidad en gramos (2Ãƒâ€šÃ‚Âª unidad)
     * @var float
     */
    public $gramos;
    /**
     * Precio de venta
     * @var float
     */
    public $precio;
    /**
     * Importe de unidades * precio o gramos * precio, dependiendo del tipo del artículo. Utilizamos este campo para simplificar posteriores cálculos y consultas. No es necesario que le demos un valor, ya que los triggers de líneas de venta, se encargarán de actualizarlo.
     * @var float
     */
    public $importe;
    /**
     * Precio de última compra que hay en el momento de hacer la venta
     * @var float
     */
    public $coste;
    /**
     * Precio medio ponderado del artículo que hay en el momento de hacer la venta
     * @var float
     */
    public $pmp;
    /**
     * Porcentaje de IVA del artículo
     * @var float
     */
    public $piva;
    /**
     * Porcentaje de recargo de equivalencia
     * @var float
     */
    public $prec;
    /**
     * Primer porcentaje de descuento
     * @var float
     */
    public $pdto1;
    /**
     * Segundo porcentaje de descuento
     * @var float
     */
    public $pdto2;
    /**
     * Tercer porcentaje de descuento
     * @var float
     */
    public $pdto3;
    /**
     * Importe total del descuento de la línea
     * @var float
     */
    public $descuento;
    /**
     * Almacén al que afecta la línea actual
     * @var int
     */
    public $almacen;
    /**
     * Almacen en el que introducimos el articulo en caso de que la linea proceda de un RMA
     * @var int
     */
    public $almacen_destino;
    /**
     * Indica si utilizamos la primera o segunda unidad para calcular
     * @var int
     */
    public $tipo_unidad;
    /**
     * Unidades que se han servido de la línea actual
     * @var float
     */
    public $udservidas;
    /**
     * Gramos que se han servido de la línea actual
     * @var float
     */
    public $grservidos;
    /**
     * Identificador del pedido web del que proviene la línea
     * @var int
     */
    public $idpedidoweb;
    /**
     * Identificador de la línea origen, cuando la línea actual proviene de un presupuesto
     * @var int
     */
    public $idpresupuesto;
    /**
     * Identificador de la línea origen, cuando la línea actual proviene de un pedido
     * @var int
     */
    public $idpedido;
    /**
     * Identificador de la línea origen, cuando la línea actual proviene de un albarán
     * @var int
     */
    public $idalbaran;
    /**
     * Identificador de la línea origen, cuando la línea actual proviene de una factura (por ejemplo, en el caso de un abono)
     * @var int
     */
    public $idfactura;
    /**
     * Identificador del documento de RMA que ha originado la línea actual
     * @var int
     */
    public $idrma;
    /**
     * Identificador de la línea de un parte de SAT que ha originado esta línea
     * @var int
     */
    public $idsat;
    /**
     * Usuario que autoriza la venta por debajo del precio mínimo de venta establecido en el artículo
     * @var int
     */
    public $usuautorizaminimo;
    /**
     * Precio mínimo autorizado. Para vender por debajo de éste, hayque solicitar autorización. Si es cero, no se ha autorizado nada; en este caso, el campo autorización también debe ser cero
     * @var float
     */
    public $pvpminautorizado;
    /**
     * Usuario que realiza la última modificación
     * @var int
     */
    public $usuario;
    /**
     * Usuario que realiza la última modificación
     * @var int
     */
    public $delegacion;
    /**
     * Usuario que realiza la última modificación
     * @var int
     */
    public $usuario_modifica;
    /** @var \DateTime|null */
    public $hora_creacion;
    /** @var \DateTime|null */
    public $hora_modificacion;
    /**
     * Indica si esta linea esta generada por el programa de forma automatica (Es la linea que precede a un documento insertado)
     * @var int
     */
    public $linea_cabecera;
    /**
     * Unidades que habia pendientes de servir al forzar la finalizacion de un pedido
     * @var float
     */
    public $unidades_fin;
    /**
     * Gramos que habia pendientes de servir al forzar la finalizacion de un pedido
     * @var float
     */
    public $gramos_fin;
    /** @var int */
    public $id_ticket_descuento;
    /** @var float */
    public $ud_pte_entrega;
    /** @var int */
    public $promocion;
    /**
     * Identificador de la línea a la que aplicamos el canon
     * @var int
     */
    public $canon_id_padre;
    /**
     * Indica si suma el importe de la línea a la venta
     * @var bool
     */
    public $canon_suma_importe;
    /**
     * Indica si aplicamos el segundo importe de canon
     * @var bool
     */
    public $canon_segundo_importe;
    /**
     * Código del canon digital que aplicamos a la línea
     * @var int
     */
    public $canon_codigo;
    /** @var string */
    public $talla;
    /** @var string */
    public $color;
    /** @var int */
    public $id_comision;
    /** @var float */
    public $comision_porcent;
    /** @var float */
    public $comision_importe;
    /** @var string */
    public $id_reserva_sport;
    /** @var int */
    public $id_contrato;
    /**
     * Código del grupo de actividad de V3Sport que asociamos a la línea
     * @var int
     */
    public $grupo_sport;
    /** @var bool */
    public $sin_recargo;
    /** @var string */
    public $observaciones;
    /** @var float */
    public $pesounitario;
    /** @var float */
    public $pesototal;
    /** @var float */
    public $dto_es_euros;
    /** @var float */
    public $dto_es_litros;
    /** @var int */
    public $id_matricula_obra;
    /** @var int */
    public $dto_es_tipo;
    /**
     * Tipo de unidad para pedidos: (U)nidades, (C)ajas, (K)ilos
     * @var string
     */
    public $pedido_unidad;
    /** @var float */
    public $cer;
    /** @var bool */
    public $inversion_sujeto_pasivo;
    /** @var float */
    public $precio_original;
    /** @var int */
    public $idpale;
    /** @var bool */
    public $cs_env;
    /** @var int */
    public $cc_pale;
    /** @var string */
    public $cc_cajas;
    /** @var float */
    public $ped_uds_original;
    /** @var int */
    public $id_medical;
    /** @var string */
    public $montaje_json;
    /** @var int */
    public $ensamblado_id_padre;
    /** @var int */
    public $id_orden_montaje;
    /** @var int */
    public $web_idsat;
    /** @var string */
    public $codigo_impresion;
    /** @var int */
    public $iva_exento_ley;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'idcab', 'tipodoc', 'serie', 'numero', 'cli_codigo', 'orden', 'fecha', 'fechaentrega', 'referencia', 'descripcion', 'unidades', 'gramos', 'precio', 'importe', 'coste', 'pmp', 'piva', 'prec', 'pdto1', 'pdto2', 'pdto3', 'descuento', 'almacen', 'almacen_destino', 'tipo_unidad', 'udservidas', 'grservidos', 'idpedidoweb', 'idpresupuesto', 'idpedido', 'idalbaran', 'idfactura', 'idrma', 'idsat', 'usuautorizaminimo', 'pvpminautorizado', 'usuario', 'delegacion', 'usuario_modifica', 'hora_creacion', 'hora_modificacion', 'linea_cabecera', 'unidades_fin', 'gramos_fin', 'id_ticket_descuento', 'ud_pte_entrega', 'promocion', 'canon_id_padre', 'canon_suma_importe', 'canon_segundo_importe', 'canon_codigo', 'talla', 'color', 'id_comision', 'comision_porcent', 'comision_importe', 'id_reserva_sport', 'id_contrato', 'grupo_sport', 'sin_recargo', 'observaciones', 'pesounitario', 'pesototal', 'dto_es_euros', 'dto_es_litros', 'id_matricula_obra', 'dto_es_tipo', 'pedido_unidad', 'cer', 'inversion_sujeto_pasivo', 'precio_original', 'idpale', 'cs_env', 'cc_pale', 'cc_cajas', 'ped_uds_original', 'id_medical', 'montaje_json', 'ensamblado_id_padre', 'id_orden_montaje', 'web_idsat', 'codigo_impresion', 'iva_exento_ley'];
        $this->fieldTypes = ['int', 'int', 'int', 'string', 'int', 'int', 'int', '\DateTime', '\DateTime', 'string', 'string', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'int', 'float', 'float', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'float', 'int', 'int', 'int', 'time', 'time', 'int', 'float', 'float', 'int', 'float', 'int', 'int', 'bool', 'bool', 'int', 'string', 'string', 'int', 'float', 'float', 'string', 'int', 'int', 'bool', 'string', 'float', 'float', 'float', 'float', 'int', 'int', 'string', 'float', 'bool', 'float', 'int', 'bool', 'int', 'string', 'float', 'int', 'string', 'int', 'int', 'int', 'string', 'int'];
        $this->fieldLengths = [0, 0, 0, 10, 0, 0, 0, 0, 0, 30, 255, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 0];
        $this->defaultValues = [0, 0, 0, '', 0, 0, 0, 'now', null, '', '', 0, 0, 0, 0.0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 0, 0, null, null, 0, 0.0, 0.0, 0, 0.0, 0, 0, true, false, 0, '', '', 0, 0.0, 0.0, '', 0, 0, false, null, 0, 0, 0, 0, 0, 0, ' ', 0, false, 0, 0, false, 0, '', 0, 0, '', 0, 0, 0, '', 0];
        $this->numFields = 84;
        $this->tableName = 'ventas_lineas';
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
    public static function lineasDocumento(int $idCab): array
    {
        return Sql::selectAll("SELECT lin.*, numeros_serie(lin.id, 2::int2) AS numeros_serie FROM ventas_lineas lin WHERE lin.idcab = $idCab ORDER BY lin.orden, lin.id");
    }

    public static function lineasImpresion(int $idCab): array
    {
        $sql = "SELECT
            lin.referencia,
            lin.descripcion,
            lin.observaciones,
            case when coalesce(art.tipo_unidad, 0) = 0
                then lin.unidades
                else lin.gramos
            end AS unidades,
            cfg.valor AS num_dec_ud,
            round(lin.precio, 2) AS precio,
            case when lin.importe+lin.descuento = 0
                then 0
                else round(lin.descuento / ( lin.importe + lin.descuento) * 100, 2)
            end AS dto,
            round(lin.importe, 2) AS importe,
            numeros_serie(lin.id, 2::int2) AS numeros_serie
        FROM ventas_lineas lin
        LEFT JOIN articulos art ON art.referencia = lin.referencia
        LEFT JOIN configuracion cfg ON cfg.codigo = (case when coalesce(art.tipo_unidad, 0) = 0 then 12 else 13 end)
        WHERE lin.idcab = $idCab
        ORDER BY lin.orden, lin.id";

        $rows = Sql::selectAll($sql);
        foreach ($rows as &$row) {
            $row['unidades'] = Tools::floatFormat((float) $row['unidades'], (int) $row['num_dec_ud']);
            $row['precio'] = Tools::floatFormat((float) $row['precio']);
            $row['dto'] = Tools::floatFormat((float) $row['dto']);
            $row['importe'] = Tools::floatFormat((float) $row['importe']);
        }

        return $rows;
    }

    public static function actualizaWebIdSat(int $idLin, int $idSat)
    {
        Sql::execute("UPDATE ventas_lineas SET web_idsat = $idSat WHERE id = $idLin");
    }

    public static function ultimaVentaCliente(string $referencia, int $cliente): array
    {
        if (!empty($referencia) || $cliente > 0) {
            $sql = "SELECT
                to_char(lin.fecha, 'DD-MM-YYYY') AS fecha,
                case when art.tipo_unidad = 0 then lin.unidades else lin.gramos end AS unidades,
                lin.precio,
                case when lin.importe + lin.descuento = 0 then 0 else lin.descuento / (lin.importe + lin.descuento) * 100 end AS dto
            FROM ventas_lineas lin
            LEFT JOIN articulos art ON art.referencia = lin.referencia
            WHERE lin.tipodoc > 2 AND lin.referencia = :referencia AND lin.cli_codigo = :cliente
            ORDER BY lin.fecha DESC, lin.id DESC
            LIMIT 1";
            $param = [
                new SqlParam('referencia', $referencia, 'string'),
                new SqlParam('cliente', $cliente, 'int'),
            ];
            $row = Sql::select($sql, $param);
            if (!empty($row)) {
                $row['unidades'] = (int) $row['unidades'];
                $row['precio'] = Tools::floatFormat($row['precio']).' €';
                $row['dto'] = Tools::floatFormat($row['dto']).' %';

                return $row;
            }
        }

        return ['fecha' => null, 'unidades' => 0, 'precio' => 0, 'dto' => 0];
    }
}
