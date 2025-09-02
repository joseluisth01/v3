<?php

namespace App\Helper;

use App\Library\Sql;

class AdminHelper
{
    public static function tarifas(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM tarifas_nombres ORDER BY nombre');
    }

    public static function tarifasEspDto(): array
    {
        return Sql::selectAll("(SELECT 0 AS codigo, '' AS nombre UNION ALL SELECT codigo, nombre FROM tarifa_esp_dto) ORDER BY nombre");
    }

    public static function agentes(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM agentes ORDER BY nombre');
    }

    public static function almacenes(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM almacenes ORDER BY nombre');
    }

    public static function formasPago(): array
    {
        return Sql::selectAll('SELECT codigo, nombre FROM formaspago ORDER BY nombre');
    }

    public static function bancos(): array
    {
        return Sql::selectAll("SELECT codigo,nombre||' ('||cuenta|| ')' AS nombre FROM bancos_cuentas ORDER BY nombre");
    }

    public static function series(): array
    {
        return Sql::selectArrayOneField('SELECT serie FROM series WHERE mostrarweb AND NOT obsoleta ORDER BY serie');
    }

    public static function seriesSAT(): array
    {
        return Sql::selectArrayOneField('SELECT serie FROM series WHERE NOT obsoleta AND tipo & 8 != 0 ORDER BY serie');
    }


    public static function geoRegiones(): array
    {
        return [
            'ES-A' => '(ES-A) Alicante',
            'ES-AB' => '(ES-AB) Albacete',
            'ES-AL' => '(ES-AL) Almería',
            'ES-AV' => '(ES-AV) Ávila',
            'ES-B' => '(ES-B) Barcelona',
            'ES-BA' => '(ES-BA) Mérida',
            'ES-BI' => '(ES-BI) Bilbao',
            'ES-BU' => '(ES-BU) Burgos',
            'ES-C' => '(ES-C) Santiago de Compostela',
            'ES-CA' => '(ES-CA) Cadiz',
            'ES-CC' => '(ES-CC) Cáceres',
            'ES-CO' => '(ES-CO) Córdoba',
            'ES-CR' => '(ES-CR) Ciudad Real',
            'ES-CS' => '(ES-CS) Castelló de la Plana',
            'ES-CU' => '(ES-CU) Cuenca',
            'ES-GC' => '(ES-GC) Las Palmas de Gran Canaria',
            'ES-GI' => '(ES-GI) Girona',
            'ES-GR' => '(ES-GR) Granada',
            'ES-GU' => '(ES-GU) Guadalajara',
            'ES-H' => '(ES-H) Huelva',
            'ES-HU' => '(ES-HU) Huesca',
            'ES-J' => '(ES-J) Jaén',
            'ES-L' => '(ES-L) Lleida',
            'ES-LE' => '(ES-LE) León',
            'ES-LO' => '(ES-LO) Logroño',
            'ES-LU' => '(ES-LU) Lugo',
            'ES-M' => '(ES-M) Madrid',
            'ES-MA' => '(ES-MA) Málaga',
            'ES-MU' => '(ES-MU) Murcia',
            'ES-NA' => '(ES-NA) Pamplona',
            'ES-O' => '(ES-O) Oviedo',
            'ES-OR' => '(ES-OR) Ourense',
            'ES-P' => '(ES-P) Palencia',
            'ES-PM' => '(ES-PM) Palma',
            'ES-PO' => '(ES-PO) Pontevedra',
            'ES-S' => '(ES-S) Santander',
            'ES-SA' => '(ES-SA) Salamanca',
            'ES-SE' => '(ES-SE) Sevilla',
            'ES-SG' => '(ES-SG) Segovia',
            'ES-SO' => '(ES-SO) Soria',
            'ES-SS' => '(ES-SS) Donostia / San Sebastián',
            'ES-T' => '(ES-T) Tarragona',
            'ES-TE' => '(ES-TE) Teruel',
            'ES-TF' => '(ES-TF) Santa Cruz de Tenerife',
            'ES-TO' => '(ES-TO) Toledo',
            'ES-V' => '(ES-V) Valencia',
            'ES-VA' => '(ES-VA) Valladolid',
            'ES-VI' => '(ES-VI) Gasteiz / Vitoria',
            'ES-Z' => '(ES-Z) Zaragoza',
            'ES-ZA' => '(ES-ZA) Zamora',
        ];
    }

    public static function ventasMes(int $month, int $year): array
    {
        $sql = "SELECT
                dia,
                round(sum(coalesce(cab.baseimpo1 + cab.baseimpo2 + cab.baseimpo3, 0.0)),2) AS importe
            FROM generate_series(
                    1,
                    extract(day from make_date($year,$month,1) + interval '1 month - 1 day')::int
                ) AS dia
            LEFT JOIN ventas_cabeceras cab ON cab.tipodoc = 8
                AND extract(day FROM cab.fecha) = dia
                AND extract(month FROM cab.fecha) = $month
                AND extract(year FROM cab.fecha) = $year
            GROUP BY dia
            ORDER BY dia";

        $data = Sql::selectAll($sql);
        foreach ($data as &$row) {
            $row['importe'] = (float) $row['importe'];
        }

        return $data;
    }

    public static function ventasEjercicio(int $year): array
    {
        $sql = "SELECT
                mes,
                round(sum(coalesce(cab.baseimpo1 + cab.baseimpo2 + cab.baseimpo3, 0.0)),2) AS importe
            FROM generate_series(1, 12) AS mes
            LEFT JOIN ventas_cabeceras cab ON cab.tipodoc = 8
                AND extract(month FROM cab.fecha) = mes
                AND extract(year FROM cab.fecha) = $year
            GROUP BY mes
            ORDER BY mes";

        $data = Sql::selectAll($sql);
        foreach ($data as &$row) {
            $row['importe'] = (float) $row['importe'];
        }

        return $data;
    }

    public static function numCarritosAbiertos(): int
    {
        return (int) Sql::selectEscalar('SELECT count(distinct(session_id)) FROM web_lineas_pedidos');
    }

    public static function numPedidosPendientes(): int
    {
        return (int) Sql::selectEscalar('SELECT count(*) FROM ventas_cabeceras WHERE tipodoc = 2 AND fechafin IS NULL');
    }

    public static function numAlbaranesPendientes(): int
    {
        return (int) Sql::selectEscalar('SELECT count(*) FROM ventas_cabeceras WHERE tipodoc = 4 AND fechafin IS NULL');
    }

    public static function numClientes(): int
    {
        return (int) Sql::selectEscalar('SELECT count(*) FROM clientes WHERE obsoleto = 0');
    }
}
