<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;

class SatLineas extends SqlOrm
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
     * Identificador de la actuacion a la que pertenece la linea.
     *
     * @var int
     */
    public $idactuacion;
    /**
     * Fecha de la actuacion.
     *
     * @var \DateTime
     */
    public $fecha;
    /**
     * Numero de orden de la linea dentro de la actuacion.
     *
     * @var int
     */
    public $orden;
    /**
     * Indica si la referencia es (P)ieza, (M)ano de obra, o (D)esplazamiento.
     *
     * @var string
     */
    public $pmd;
    /**
     * Referencia del articulo.
     *
     * @var string
     */
    public $referencia;
    /**
     * Descripcion del articulo o de la linea.
     *
     * @var string
     */
    public $descripcion;
    /**
     * Unidades.
     *
     * @var float
     */
    public $unidades;
    /**
     * Gramos.
     *
     * @var float
     */
    public $gramos;
    /**
     * Precio del articulo o de la mano de obra.
     *
     * @var float
     */
    public $precio;
    /**
     * Descuento (en euros) que aplicamos por linea.
     *
     * @var float
     */
    public $descuento;
    /**
     * Importe que cobramos.
     *
     * @var float
     */
    public $concargo;
    /**
     * Importe que no cobramos.
     *
     * @var float
     */
    public $sincargo;
    /**
     * Almacen del que descuenta la linea.
     *
     * @var int
     */
    public $almacen;
    /**
     * Indica si debe descontar de almacen o no (si la actuacion se marca como presupuesto, no descontamos).
     *
     * @var int
     */
    public $descuenta_almacen;
    /**
     * Coste del articulo.
     *
     * @var float
     */
    public $coste;
    /**
     * Precio medio ponderado del articulo.
     *
     * @var float
     */
    public $pmp;
    /**
     * Porcentaje de IVA del articulo.
     *
     * @var float
     */
    public $piva;
    /**
     * Porcentaje de recargo del articulo.
     *
     * @var float
     */
    public $prec;
    /**
     * Porcentaje de descuento 1 que aplicamos.
     *
     * @var float
     */
    public $pdto1;
    /**
     * Porcentaje de descuento 2 que aplicamos.
     *
     * @var float
     */
    public $pdto2;
    /**
     * Porcentaje de descuento 3 que aplicamos.
     *
     * @var float
     */
    public $pdto3;
    /**
     * Tipo de unidad que utiliza el articulo (0->unidades, 1->gramos).
     *
     * @var int
     */
    public $tipo_unidad;
    /**
     * Usuario que autoriza un precio minimo de venta.
     *
     * @var int
     */
    public $usuautorizaminimo;
    /**
     * Precio de venta minimo autorizado.
     *
     * @var float
     */
    public $pvpminautorizado;
    /**
     * Usuario que modifica la linea.
     *
     * @var int
     */
    public $usuario;
    /**
     * Delegacion a la que pertenece el usuario que modifica la linea.
     *
     * @var int
     */
    public $delegacion;
    /**
     * Hora de registro de la linea.
     *
     * @var \DateTime
     */
    public $hora_registro;
    /** @var int */
    public $cli_codigo;
    /** @var int */
    public $es_presupuesto;
    /**
     * Identificador de la línea a la que aplicamos el canon.
     *
     * @var int
     */
    public $canon_id_padre;
    /**
     * Indica si suma el importe de la línea a la venta.
     *
     * @var bool
     */
    public $canon_suma_importe;
    /**
     * Indica si aplicamos el segundo importe de canon.
     *
     * @var bool
     */
    public $canon_segundo_importe;
    /**
     * Código del canon digital que aplicamos a la línea.
     *
     * @var int
     */
    public $canon_codigo;
    /** @var string */
    public $observaciones;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'idsat', 'idactuacion', 'fecha', 'orden', 'pmd', 'referencia', 'descripcion', 'unidades', 'gramos', 'precio', 'descuento', 'concargo', 'sincargo', 'almacen', 'descuenta_almacen', 'coste', 'pmp', 'piva', 'prec', 'pdto1', 'pdto2', 'pdto3', 'tipo_unidad', 'usuautorizaminimo', 'pvpminautorizado', 'usuario', 'delegacion', 'hora_registro', 'cli_codigo', 'es_presupuesto', 'canon_id_padre', 'canon_suma_importe', 'canon_segundo_importe', 'canon_codigo', 'observaciones'];
        $this->fieldTypes = ['int', 'int', 'int', '\DateTime', 'int', 'string', 'string', 'string', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'float', 'int', 'int', 'time', 'int', 'int', 'int', 'bool', 'bool', 'int', 'string'];
        $this->fieldLengths = [0, 0, 0, 0, 0, 1, 30, 255, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, 'now', 0, '', '', '', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 0, 'now', 0, 0, 0, true, false, 0, ''];
        $this->numFields = 36;
        $this->tableName = 'sat_lineas';
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
    public static function actualizaCampoOrden(int $idActuacion)
    {
        $sql = "UPDATE sat_lineas
            SET orden = lineas.orden
            FROM (
                SELECT id, row_number() OVER (ORDER BY id) AS orden
                FROM sat_lineas
                WHERE idactuacion  = $idActuacion) AS lineas
            WHERE sat_lineas.id = lineas.id";
        Sql::execute($sql);
    }

    public static function totalesActuacion(int $idActuacion): array
    {
        $sql = "SELECT
            sum(concargo) as baseimpo,
            coalesce(sum(concargo) FILTER (WHERE pmd='P'), 0) AS piezas_con_cargo,
            coalesce(sum(concargo) FILTER (WHERE pmd='M'), 0) AS mano_obra_con_cargo,
            coalesce(sum(concargo) FILTER (WHERE pmd='D'), 0) AS desplazamiento_con_cargo,
            coalesce(sum(sincargo) FILTER (WHERE pmd='P'), 0) AS piezas_sin_cargo,
            coalesce(sum(sincargo) FILTER (WHERE pmd='M'), 0) AS mano_obra_sin_cargo,
            coalesce(sum(sincargo) FILTER (WHERE pmd='D'), 0) AS desplazamiento_sin_cargo,
            round(sum(concargo) * piva / 100.0, 2) AS iva,
            round(sum(concargo) * prec / 100.0, 2) AS rec,
            piva,
            prec
        FROM sat_lineas
        WHERE idactuacion = $idActuacion
        GROUP BY piva, prec
        ORDER BY piva";

        return Sql::selectAll($sql);
    }
}
