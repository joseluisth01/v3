<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;

class WebValoraciones extends SqlOrm
{
    /** @var int */
    public $id;
    /** @var \DateTime */
    public $fecha;
    /** @var string */
    public $referencia;
    /** @var int */
    public $cliente;
    /** @var int */
    public $valoracion;
    /** @var string */
    public $opinion;
    /** @var string */
    public $pros;
    /** @var string */
    public $contras;
    /** @var int */
    public $estado;
    /** @var int */
    public $validacion_usuario;
    /** @var \DateTime */
    public $created_at;
    /** @var \DateTime */
    public $modified_at;
    /** @var int */
    public $modified_by;
    /** @var string */
    public $cli_alias;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'fecha', 'referencia', 'cliente', 'valoracion', 'opinion', 'pros', 'contras', 'estado', 'validacion_usuario', 'created_at', 'modified_at', 'modified_by', 'cli_alias'];
        $this->fieldTypes = ['int', '\DateTime', 'string', 'int', 'int', 'string', 'string', 'string', 'int', 'int', 'time', 'time', 'int', 'string'];
        $this->fieldLengths = [0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 'CURRENT_DATE', '', 0, 0, '', '', '', 0, 0, 'now', 'now', 0, ''];
        $this->numFields = 14;
        $this->tableName = 'web_valoraciones';
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
    private static function getOrder(string $orden): string
    {
        if ($orden == "new") {
            $order = "v.fecha DESC, v.id DESC";
        } elseif ($orden == "old") {
            $order="v.fecha, v.id";
        } else {
            $order = "v.valoracion DESC, v.fecha DESC, v.id DESC";
        }
        return $order;
    }

    private static function formatRatingInterval(&$item)
    {
        $item['valoracion'] = str_replace(' ', '&#x2606;', str_replace('*', '&#x2605;', $item['valoracion']));

        $today = new \DateTime();
        $fecha = new \DateTime($item['fecha']);
        $interval = $today->diff($fecha);
        if ($interval->y > 0) {
            $item['intervalo'] = $interval->y == 1 ? '1 año' : $interval->format('%y años');
        } elseif ($interval->m > 0) {
            $item['intervalo'] = $interval->m == 1 ? '1 mes' : $interval->format('%m meses');
        } elseif ($interval->d > 0) {
            $item['intervalo'] = $interval->d == 1 ? '1 día' : $interval->format('%d días');
        }
        $item['fecha'] = $fecha->format('d-m-Y');
    }

   public static function listAll(int $estado, string $orden): array
   {
       $sqlFilter = '';
       if ($estado != -2) {
           $sqlFilter="AND v.estado = $estado";
       }
       $order = self::getOrder($orden);

       //to_char(v.fecha, 'DD-MM-YYYY') AS fecha,
       $sql = "SELECT
            v.id,
            '' AS intervalo,
            fecha,
            coalesce(trim(u.nombre || ' ' || u.apellidos), '') AS validacion_usuario,
            case when v.validacion_usuario != 0 then to_char(v.modified_at, 'DD-MM-YYYY') else '' end AS validacion_fecha,
            v.opinion,
            v.pros,
            v.contras,
            v.estado,
            v.referencia,
            a.nombre AS articulo,
            '' AS imagen,
            v.cli_alias,
            trim(c.nombre||' '||c.apellido1||' '||c.apellido2) AS cliente,
            repeat('*', v.valoracion) || repeat(' ', 5 - v.valoracion) AS valoracion,
            (SELECT exists(SELECT 1 FROM ventas_lineas l WHERE l.cli_codigo = v.cliente AND l.referencia = v.referencia AND l.tipodoc IN (4,8))) AS verificado
            FROM web_valoraciones v
            LEFT JOIN clientes c ON c.codigo = v.cliente
            LEFT JOIN articulos a ON a.referencia = v.referencia
            LEFT JOIN usuarios u ON u.codigo = v.validacion_usuario
            WHERE true $sqlFilter
            ORDER BY $order";

       $lista = Sql::selectAll($sql);

       foreach ($lista as &$item) {
           self::formatRatingInterval($item);
           $item['imagen'] = ArticulosImagenes::getImage($item['referencia'], 1000, 1);
       }
       return $lista;
   }

    public static function listaReferencia(string $referencia, string $orden): array
    {
        $lista = [];
        if (!empty($referencia)) {
            $order = self::getOrder($orden);

            $param[] = new SqlParam('referencia', $referencia, 'string');
            $sql = "SELECT
                cli_alias,
                fecha,
                '' AS intervalo,
                opinion,
                pros,
                contras,
                repeat('*', valoracion) || repeat(' ', 5 - valoracion) AS valoracion,
                (SELECT exists(SELECT 1 FROM ventas_lineas l WHERE l.cli_codigo = v.cliente AND l.referencia = v.referencia AND l.tipodoc IN (4,8))) AS verificado
            FROM web_valoraciones v
            WHERE referencia = :referencia AND estado = 1
            ORDER BY $order";
            $lista =  Sql::selectAll($sql, $param);
            foreach ($lista as &$item) {
                self::formatRatingInterval($item);
            }
        }
        return $lista;
    }

    public static function cambiaEstado(int $id, int $estado, int $user)
    {
        $sql = "UPDATE web_valoraciones SET
            estado = $estado,
            validacion_usuario = $user,
            modified_by = $user,
            modified_at = now()
            WHERE id = $id";
        Sql::execute($sql);
    }
}
