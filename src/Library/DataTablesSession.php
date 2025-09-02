<?php

namespace App\Library;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DataTablesSession
{
    public static function read(SessionInterface $session, string $key, array $fields)
    {
        $aSearch = $session->get($key);
        if (!is_array($aSearch)) {
            $aSearch = [];
        }

        foreach ($fields as $name) {
            if (empty($aSearch[$name])) {
                $aSearch[$name] = '';
            }
        }

        return $aSearch;
    }

    public static function write(Request $request, SessionInterface $session, string $key, array $fields)
    {
        $aSearch = [
            'datatables' => self::datatablesOptions($request),
        ];
        $dataPost = $request->request->all();
        foreach ($fields as $name) {
            if (\array_key_exists($name, $dataPost)) {
                $aSearch[$name] = $dataPost[$name];
            }
        }
        $session->set($key, $aSearch);
    }

    public static function toJson($aSearch): string
    {
        $obj = [];
        if (!empty($aSearch) && isset($aSearch['datatables'])) {
            $dt = $aSearch['datatables'];
            if (!empty($dt) && isset($dt['start'])) {
                $obj['displayStart'] = $dt['start'];
                $obj['pageLength'] = $dt['length'];
                $obj['order'] = [$dt['orderCol'], $dt['orderDir']];
            }
        }

        return json_encode($obj, empty($obj) ? JSON_FORCE_OBJECT : 0);
    }

    public static function datatablesOptions(Request $request): array
    {
        $start = $request->request->get('start');
        $length = $request->request->get('length');
        $order = $request->request->all('order');
        $colOrder = (int) $order[0]['column'];
        $dirOrder = $order[0]['dir'];

        if (empty($dirOrder)) {
            $dirOrder = 'asc';
        }

        return [
            'start' => (int) $start,
            'length' => (int) $length,
            'orderCol' => $colOrder,
            'orderDir' => $dirOrder,
        ];
    }
}
