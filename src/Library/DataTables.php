<?php

namespace App\Library;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DataTables
{
    public static function getData(Request $request, $sql, $sqlCount, $sqlFilter = '', $order2 = '', $fnPostRead = null): JsonResponse
    {
        $draw = (int) $request->request->get('draw');
        $start = (int) $request->request->get('start');
        $length = (int) $request->request->get('length');

        $filter = empty($sqlFilter) ? '' : " WHERE $sqlFilter";
        $limit = $length > 0 ? " OFFSET $start LIMIT $length" : '';

        $orderBy = '';
        $posOrder = mb_strripos($filter, 'ORDER BY');
        if ($posOrder === false) {
            $orders = $request->request->all('order');
            $dirOrder = '';

            $aOrder = [];
            foreach ($orders as $ord) {
                $aOrder[] = (1 + (int) $ord['column']).' '.$ord['dir'];
                $dirOrder = $ord['dir'];
            }
            $colOrder = implode(',', $aOrder);

            if (!empty($order2)) {
                $dirOrder2 = '';
                if (mb_stristr($order2, 'asc') === false && mb_stristr($order2, 'desc') === false) {
                    $dirOrder2 = $dirOrder;
                }
                $colOrder = "$colOrder, $order2 $dirOrder2";
            }
            $orderBy = " ORDER BY $colOrder";

            $filterCount = $filter;
        } else {
            $filterCount = mb_substr($filter, 0, $posOrder);
        }

        $count = (int) Sql::selectEscalar($sqlCount.$filterCount);
        $rows = Sql::selectAll($sql.$filter.$orderBy.$limit);

        if ($fnPostRead !== null) {
            $fnPostRead($rows);
        }

        $data = [
            'draw' => $draw,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $rows,
        ];

        return new JsonResponse($data);
    }
}
