<?php

namespace App\Helper;

use App\Library\Sql;

class PaginationHelper
{
    private $items = [];
    private $itemsPage = 0;
    private $totalItems;
    private $url;
    private $paramUrl = '';

    public function __construct(string $url, string $filtroSql, bool $mostrarWeb2)
    {
        $this->url = $url;
        $pos = strpos($url, '?');
        if ($pos !== false) {
            $this->url = substr($url, 0, $pos);
            $this->paramUrl = substr($url, $pos);
        }
        $this->totalItems = $this->getTotalItems($filtroSql, $mostrarWeb2);
    }

    public function getItems(int $pageNum, int $itemsPage, int $numLinks = 3): array
    {
        $this->items = [];
        $this->itemsPage = $itemsPage;
        if ($this->itemsPage == 0) {
            $this->itemsPage = 1;
        }

        $last = (int) ceil($this->totalItems / $this->itemsPage);

        $start = (($pageNum - $numLinks) > 0) ? $pageNum - $numLinks : 1;
        $end = (($pageNum + $numLinks) < $last) ? $pageNum + $numLinks : $last;

        $class = ($pageNum == 1) ? 'disabled' : '';
        $this->addItem($pageNum - 1, $class, '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>');


        if ($start > 1) {
            $this->addItem(1, '', 1);
            $this->addSeparator();
        }

        for ($i = $start; $i <= $end; ++$i) {
            $class = ($pageNum == $i) ? 'active' : '';
            $this->addItem($i, $class, $i);
        }

        if ($end < $last) {
            $this->addSeparator();
            $this->addItem($last, '', $last);
        }

        $class = ($pageNum == $last) ? 'disabled' : '';
        $this->addItem($pageNum + 1, $class, '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>');

        return [
            'pageNum' => $pageNum,
            'totalItems' => $this->totalItems,
            'itemsPage' => $this->itemsPage,
            'items' => $this->items,
        ];
    }

    private function getTotalItems(string $filtroSql, bool $mostrarWeb2): int
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        if (!empty($filtroSql) && strpos(strtoupper(trim($filtroSql)), 'AND') !== 0) {
            $filtroSql = ' AND ' . $filtroSql;
        }
        $sql = "SELECT count(*)
            FROM articulos art
            LEFT JOIN familias fam ON fam.codigo = art.familia
            LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
            WHERE fam.{$campoMostrarWeb} = 1 AND coalesce(sub.{$campoMostrarWeb}, 1) = 1 AND art.{$campoMostrarWeb} = 1 AND art.obsoleto = 0 $filtroSql";

        return (int) Sql::selectEscalar($sql);
    }

    private function addItem(int $numPage, $class, $text = null)
    {
        $url = $this->url . '/' . $numPage . '/' . $this->itemsPage . '/' . $this->paramUrl;
        $this->items[] = ['url' => $url, 'page' => $numPage, 'class' => $class, 'text' => $text ?? $numPage, 'separator' => false];
    }

    private function addSeparator()
    {
        $this->items[] = ['url' => '', 'page' => 0, 'class' => '', 'text' => '', 'separator' => true];
    }
}
