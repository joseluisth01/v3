<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;
use App\Service\ConfigService;

class WebLineasPedidos extends SqlOrm
{
    /** @var int */
    public $id;
    /** @var int */
    public $cliente;
    /** @var int */
    public $cliente_final;
    /** @var string */
    public $referencia;
    /** @var float */
    public $unidades;
    /** @var float */
    public $gramos;
    /** @var \DateTime|null */
    public $hora_registro;
    /** @var string */
    public $talla;
    /** @var string */
    public $color;
    /** @var int */
    public $tipo_fila;
    /** @var string */
    public $descripcion;
    /** @var float */
    public $precio;
    /** @var float */
    public $iva;
    /** @var float */
    public $dto_porcent;
    /** @var float */
    public $dto;
    /** @var int */
    public $agente;
    /** @var bool */
    public $preventa;
    /** @var float */
    public $canon_importe;
    /** @var string */
    public $session_id;
    /** @var bool */
    public $recoger_en_tienda;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['id', 'cliente', 'cliente_final', 'referencia', 'unidades', 'gramos', 'hora_registro', 'talla', 'color', 'tipo_fila', 'descripcion', 'precio', 'iva', 'dto_porcent', 'dto', 'agente', 'preventa', 'canon_importe', 'session_id', 'recoger_en_tienda'];
        $this->fieldTypes = ['int', 'int', 'int', 'string', 'float', 'float', 'time', 'string', 'string', 'int', 'string', 'float', 'float', 'float', 'float', 'int', 'bool', 'float', 'string', 'bool'];
        $this->fieldLengths = [0, 0, 0, 30, 0, 0, 0, 4, 4, 0, 255, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = [0, 0, 0, '', 0, 0, null, '', '', 0, '', 0, 0, 0, 0, 0, true, 0, '', false];
        $this->numFields = 20;
        $this->tableName = 'web_lineas_pedidos';
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
    public function findReferencia(string $referencia, string $talla, string $color, string $sessionId): bool
    {
        $params = [
            new SqlParam('referencia', $referencia, 'string'),
            new SqlParam('talla', $talla, 'string'),
            new SqlParam('color', $color, 'string'),
            new SqlParam('session_id', $sessionId, 'string'), ];

        return $this->select('referencia = :referencia AND talla = :talla AND color = :color AND session_id = :session_id', $params);
    }

    public static function grabaPedido(bool $esPedido, int $cliente, int $almacen, float $portes, string $observaciones, ConfigService $config): int
    {
        $sql = "SELECT * FROM webv3_graba_documento(:es_pedido, :serie, :cliente, :delegacion, :forma_pago, :portes, :observaciones, :almacen, 0, '')";

        if ($almacen === 0) {
            $almacen = $config->almacen();
        }

        $params = [
            new SqlParam('es_pedido', $esPedido, 'bool'),
            new SqlParam('serie', $config->data['serie_ventas'], 'string'),
            new SqlParam('cliente', $cliente, 'int'),
            new SqlParam('delegacion', 0, 'int'),
            new SqlParam('forma_pago', (int) $config->data['formapago'], 'int'),
            new SqlParam('portes', $portes, 'float'),
            new SqlParam('observaciones', $observaciones, 'string'),
            new SqlParam('almacen', $almacen, 'int'),
        ];

        return (int) Sql::selectEscalar($sql, $params);
    }

    public static function carritosActivos(): array
    {
        $sql = "WITH lin AS (
                SELECT
                    count(*) AS items,
                    session_id,
                    cliente,
                    to_char(max(hora_registro), 'DD-MM-YYYY') AS fecha,
                    round(sum(precio),2) as total,
                    max(hora_registro) AS max_hora
                FROM web_lineas_pedidos
                GROUP BY session_id, cliente
            )
            SELECT
                lin.items,
                lin.session_id,
                fecha,
                total,
                lin.cliente,
                trim(cli.nombre||' '||cli.apellido1||' '||cli.apellido2) AS nombre,
                cli.email
            FROM lin
            LEFT JOIN clientes cli ON cli.codigo = lin.cliente
            ORDER BY lin.max_hora, trim(cli.nombre||' '||cli.apellido1||' '||cli.apellido2)";
        $datos = Sql::selectAll($sql);

        $params = [new SqlParam('session_id', '', 'string')];
        foreach ($datos as &$row) {
            $sql = 'SELECT
                lin.referencia,
                art.nombre,
                round(case when art.tipo_unidad = 0 then lin.unidades else lin.gramos end) AS unidades
            FROM web_lineas_pedidos lin
            LEFT JOIN articulos art ON art.referencia = lin.referencia
            WHERE lin.session_id = :session_id
            ORDER BY art.nombre';
            $params[0]->value = $row['session_id'];
            $row['lineas'] = Sql::selectAll($sql, $params);
        }

        return $datos;
    }

    public static function borraCarrito(string $sessionId)
    {
        $params = [new SqlParam('session_id', $sessionId, 'string')];
        Sql::execute('DELETE FROM web_lineas_pedidos WHERE session_id = :session_id', $params);
    }

    public static function getRecogerTienda(string $sessionId): bool
    {
        $params = [new SqlParam('session_id', $sessionId, 'string')];
        $sql = 'SELECT exists (SELECT id FROM web_lineas_pedidos WHERE recoger_en_tienda AND session_id = :session_id)';

        return (bool) Sql::selectEscalar($sql, $params);
    }

    public static function getRecogerTiendaCliente(int $cliente): bool
    {
        $sql = "SELECT exists (SELECT id FROM web_lineas_pedidos WHERE recoger_en_tienda AND cliente = $cliente)";

        return (bool) Sql::selectEscalar($sql);
    }

    public static function updateRecogerTienda(string $sessionId, bool $recoger)
    {
        $params = [
            new SqlParam('recoger', $recoger, 'bool'),
            new SqlParam('session_id', $sessionId, 'string'),
        ];
        Sql::execute('UPDATE web_lineas_pedidos SET recoger_en_tienda = :recoger WHERE session_id = :session_id', $params);
    }

    public static function borraCarritoCliente(int $cliente)
    {
        Sql::execute("DELETE FROM web_lineas_pedidos WHERE cliente = $cliente");
    }

    public static function updateLin(int $idLin, int $unidades)
    {
        Sql::execute("UPDATE web_lineas_pedidos SET unidades = $unidades WHERE id = $idLin");
    }

    public static function deleteLin(int $idLin)
    {
        Sql::execute("DELETE FROM web_lineas_pedidos WHERE id = $idLin");
    }

    private static function getSqlLineas(string $filtroSql, bool $orderById, ConfigService $config): string
    {
        $order = $orderById ? 'lin.id' : 'art.nombre, tal.nombre, col.nombre';


        $controlStock = $config->bloqueoVentaSinStock();

        $almacen = $config->almacen();
        $stockAlmDisp = $config->stockAlmDisp();

        $sqlControlStock = $controlStock ? "art.sinstock = 0" : "false";

        $sqlStock = '0';
        if($controlStock) {
            if ($stockAlmDisp) {
                $sqlStock = "case
                when lin.talla = '' then
                    (SELECT round(sum(s.actual - s.pservir))
                    FROM almacenes_stock s
                    LEFT JOIN almacenes a ON a.codigo = s.almacen
                    WHERE s.referencia = lin.referencia AND a.control_stock = 1)
                else
                    (SELECT round(sum(s.actual - s.pservir))
                    FROM almacenes_stock_tallas_colores s
                    LEFT JOIN almacenes a ON a.codigo = s.almacen
                    WHERE s.referencia = lin.referencia AND s.talla = lin.talla AND s.color = lin.color AND a.control_stock = 1)
                end";
            } else {
                $sqlStock = "case
                when lin.talla = '' then
                    (SELECT s.actual - s.pservir FROM almacenes_stock s WHERE s.referencia = lin.referencia AND s.almacen = $almacen)
                else
                    (SELECT s.actual - s.pservir
                    FROM almacenes_stock_tallas_colores s
                    WHERE s.referencia = lin.referencia AND s.talla = lin.talla AND s.color = lin.color AND s.almacen = $almacen)
                end";
            }
        }

        return "SELECT
            lin.id,
            art.referencia,
            art.web_url AS url,
            art.nombre,
            art.web_alerta,
            tal.nombre AS talla,
            col.nombre AS color,
            round(lin.unidades) AS unidades,
            round((lin.precio - lin.dto + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)), 4) AS precio_neto,
            round((lin.precio - lin.dto + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)) * (1 + iva.iva / 100), 4) AS precio,
            iva.iva,
            round((lin.precio - lin.dto + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)) * (iva.iva / 100), 2) AS importe_iva,
            lin.recoger_en_tienda,
            '' AS imagen,
            cast(greatest(coalesce($sqlStock, 0), 0) AS integer) AS actual,
            $sqlControlStock AS control_stock
        FROM web_lineas_pedidos lin
        LEFT JOIN articulos art ON art.referencia = lin.referencia
        LEFT JOIN tipos_iva iva ON art.tipoiva = iva.codigo
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        LEFT JOIN articulos_tallas tal ON tal.codigo = lin.talla
        LEFT JOIN articulos_colores col ON col.codigo = lin.color
        WHERE art.referencia IS NOT NULL $filtroSql
        ORDER BY $order";
    }

    private static function ajustaLineas(&$lineas)
    {
        foreach ($lineas as &$row) {
            $row['imagen'] = ArticulosImagenes::getImage($row['referencia'], 120, 1);
            $row['unidades'] = (int) $row['unidades'];
            $row['precio_neto'] = (float) $row['precio_neto'];
            $row['precio'] = (float) $row['precio'];
            $row['iva'] = (float) $row['iva'];
            $row['importe_iva'] = (float) $row['importe_iva'];
            $row['recoger_en_tienda'] = (bool) $row['recoger_en_tienda'];
        }
    }

    public static function lista(string $sessionId, ConfigService $config): array
    {
        $data = Sql::selectAll(
            self::getSqlLineas('AND lin.session_id = :session_id', false, $config),
            [new SqlParam('session_id', $sessionId, 'string')]
        );
        self::ajustaLineas($data);

        return $data;
    }

    public static function listaCliente(int $cliente, ConfigService $config): array
    {
        $filtroSql = "AND lin.cliente != 0 AND lin.cliente = $cliente";
        $data = Sql::selectAll(self::getSqlLineas($filtroSql, true, $config));
        self::ajustaLineas($data);

        return $data;
    }

    public static function existeCliente(int $cliente): bool
    {
        $sql = "SELECT exists(SELECT id FROM web_lineas_pedidos WHERE cliente = $cliente)";
        return Tools::toBool(Sql::selectEscalar($sql));
    }

    public static function calculaTotalLineas(array $lineas): array
    {
        $tot = [
            'unidades' => 0,
            'base' => 0.0,
            'iva' => [],
            'total' => 0.0,
            'portes' => 0.0,
            'total_con_portes' => 0.0,
            'recoger_en_tienda' => false,
        ];
        foreach ($lineas as $lin) {
            if (!empty($lin['recoger_en_tienda'])) {
                $tot['recoger_en_tienda'] = true;
            }
            $base = $lin['precio_neto'] * $lin['unidades'];
            $importeIva = $lin['unidades'] * $lin['precio_neto'] * $lin['iva'] / 100.0;

            $tot['unidades'] += $lin['unidades'];
            $tot['base'] += $base;
            $tot['total'] += $base + $importeIva;
            $porcentIva = $lin['iva'];
            $exists = false;
            foreach ($tot['iva'] as &$iva) {
                if ($iva['iva'] == $porcentIva) {
                    $iva['importe'] += $importeIva;
                    $exists = true;
                    break;
                }
            }
            if (!$exists) {
                $tot['iva'][] = ['iva' => $porcentIva, 'importe' => $importeIva];
            }
        }

        $tot['total_con_portes'] = $tot['total'];

        return $tot;
    }

    public static function lineaResumen(int $idLin)
    {
        $sql = "SELECT
            lin.referencia,
            art.nombre,
            art.web_alerta,
            lin.unidades,
            round((lin.precio - lin.dto + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)) * (1 + iva.iva /100), 2) AS precio,
            tal.nombre AS talla,
            col.nombre AS color,
            cb.codbarras,
            '' AS imagen
        FROM web_lineas_pedidos lin
        LEFT JOIN articulos art ON art.referencia = lin.referencia
        LEFT JOIN tipos_iva iva ON iva.codigo = art.tipoiva
        LEFT JOIN articulos_tallas tal on tal.codigo = lin.talla
        LEFT JOIN articulos_colores col ON col.codigo = lin.color
        LEFT JOIN articulos_codbarras cb ON cb.referencia = lin.referencia AND cb.talla = lin.talla AND cb.color = lin.color
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        WHERE lin.id = $idLin";

        $data = Sql::select($sql);
        $data['unidades'] = (int) $data['unidades'];
        $data['precio'] = (float) $data['precio'];
        if (!empty($data['codbarras'])) {
            $data['imagen'] = ArticulosCodbarras::getImage($data['codbarras'], 120);
        } else {
            $data['imagen'] = ArticulosImagenes::getImage($data['referencia'], 120, 1);
        }

        return $data;
    }

    public static function resumenCarrito(string $sessionId, ConfigService $config): array
    {
        return self::calculaTotalLineas(self::lista($sessionId, $config));
    }

    public static function resumenCarritoCliente(int $cliente, ConfigService $config): array
    {
        return self::calculaTotalLineas(self::listaCliente($cliente, $config));
    }
}
