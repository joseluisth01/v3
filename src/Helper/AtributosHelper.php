<?php

namespace App\Helper;

use App\Entity\ArticulosMarcas;
use App\Entity\Atributos;
use App\Library\Sql;

class AtributosHelper
{
    public $webUrl = '';
    public $page = 1;
    public $itemsPage = 12;
    public $marcas = [];
    public $attr = [];
    public $filtroSqlCount;
    public $existsChecked = false;

    private $list = [];
    private $filtroSql;

    public function setFiltroSqlFamilia()
    {
        $this->filtroSql = "art.familia = (SELECT codigo FROM familias WHERE web_url = '".Sql::parseText($this->webUrl)."')";
        $this->creaFiltroSqlCount();
    }

    public function setFiltroSqlSubfamilia()
    {
        $this->filtroSql = "art.subfamilia = (SELECT codigo FROM subfamilias WHERE web_url = '".Sql::parseText($this->webUrl)."')";
        $this->creaFiltroSqlCount();
    }

    public function getAttr(bool $mostrarWeb2): array
    {
        $this->addMarcas($mostrarWeb2);
        $this->addAtributos($mostrarWeb2);

        $itemsUrl = array_merge($this->marcas, $this->attr);

        foreach ($this->list as &$group) {
            foreach ($group['rows'] as &$itemAttr) {
                $esAttr = $group['es_attr'];
                $webUrl = $itemAttr['web_url'];
                $exists = in_array($webUrl, $itemsUrl);
                $itemAttr['checked'] = $exists;
                $itemAttr['url'] = $this->creaUrlItemAttr($webUrl, $esAttr, $exists);
                if ($exists) {
                    $this->existsChecked = true;
                }
            }
        }

        return $this->list;
    }

    public function getCurrentUrl(): string
    {
        return implode('/', $this->creaItemsUrl($this->marcas, $this->attr));
    }

    private function creaUrlItemAttr($element, $esAttr, $remove): string
    {
        $marcas = $this->marcas;
        $attr = $this->attr;
        if ($esAttr) {
            if ($remove) {
                $index = array_search($element, $attr);
                array_splice($attr, $index, 1);
            } else {
                $attr[] = $element;
            }
        } else {
            if ($remove) {
                $index = array_search($element, $marcas);
                array_splice($marcas, $index, 1);
            } else {
                $marcas[] = $element;
            }
        }

        return implode('/', $this->creaItemsUrl($marcas, $attr));
    }

    private function creaItemsUrl($marcas, $attr): array
    {
        $items = [$this->webUrl];
        foreach ($marcas as $marca) {
            $items[] = '_'.$marca;
        }

        return array_merge($items, $attr);
    }

    private function addMarcas(bool $mostrarWeb2)
    {
        $data = ArticulosMarcas::listaMarcasFiltro($this->filtroSqlCount, $mostrarWeb2);
        if (!empty($data)) {
            $this->list[] = ['title' => 'Marcas', 'rows' => $data, 'es_attr' => false];
        }
    }

    private function addAtributos(bool $mostrarWeb2)
    {
        $data = Atributos::listaAtributosFiltro($this->filtroSql, $this->filtroSqlCount, $mostrarWeb2);
        $currentGrp = '-#-';
        $rows = [];
        foreach ($data as $dataRow) {
            if ($currentGrp != $dataRow['grupo']) {
                if (!empty($rows)) {
                    $this->list[] = ['title' => $currentGrp, 'rows' => $rows, 'es_attr' => true];
                }
                $currentGrp = $dataRow['grupo'];
                $rows = [];
            }
            $rows[] = [
                'codigo' => $dataRow['codigo'],
                'nombre' => $dataRow['nombre'],
                'web_url' => $dataRow['web_url'],
                'num_art' => $dataRow['num_art'],
                'url' => '',
                'checked' => '',
                'url_imagen' => '',
            ];
        }
        if (!empty($rows)) {
            $this->list[] = ['title' => $currentGrp, 'rows' => $rows, 'es_attr' => true];
        }
    }

    public function creaFiltroSqlCount(string $filtroSql = null)
    {
        if ($filtroSql != null) {
            $this->filtroSql = $filtroSql;
        }
        $this->filtroSqlCount = $this->filtroSql;

        if (count($this->marcas) > 0) {
            $aFiltroMarcas = [];
            foreach ($this->marcas as $marca) {
                $marca = Sql::parseText($marca);
                $aFiltroMarcas[] = "art.marca = (SELECT codigo FROM articulos_marcas WHERE web_url = '$marca' LIMIT 1)";
            }
            $this->filtroSqlCount .= ' AND '.implode(' AND ', $aFiltroMarcas);
        }
        if (count($this->attr) > 0) {
            $aFiltroAttr = [];
            foreach ($this->attr as $attr) {
                $attr = Sql::parseText($attr);
                $aFiltroAttr[] = "art.referencia IN (SELECT referencia FROM atributos_articulos WHERE activo AND codigo = (SELECT codigo FROM atributos WHERE web_url ='$attr' LIMIT 1))";
            }
            $this->filtroSqlCount .= ' AND '.implode(' AND ', $aFiltroAttr);
        }
    }

    public function parseParam(string $param)
    {
        $items = explode('/', $param);
        $nItems = count($items);

        if (empty($items[$nItems - 1])) {
            array_pop($items);
            --$nItems;
        }

        $this->webUrl = $items[0];

        if ($nItems > 2) {
            $page = (int) $items[$nItems - 2];
            $itemsPage = (int) $items[$nItems - 1];
            if ($page > 0 && $itemsPage > 0) {
                $this->page = $page;
                $this->itemsPage = $itemsPage;
                array_pop($items);
                array_pop($items);
                $nItems -= 2;
            }
        }

        for ($i = 1; $i < $nItems; ++$i) {
            $val = $items[$i];
            // Si empieza por _ es una marca, si no, es un atributo
            if (mb_strpos($val, '_') === 0) {
                $this->marcas[] = mb_substr($val, 1);
            } else {
                $this->attr[] = $val;
            }
        }
    }
}
