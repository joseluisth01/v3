<?php

namespace App\Helper;

use App\Entity\ArticulosMarcas;
use App\Entity\Atributos;
use Symfony\Component\HttpFoundation\Request;

class AttrSearchHelper
{
    public $searchText = '';
    public $marcas = [];
    public $attr = [];
    public $filtroSqlCount;
    public $existsChecked = false;
    private $filtroSql;
    private $list = [];

    public function __construct(Request $request)
    {
        $marcas = $request->query->get('m');
        $attr = $request->query->get('a');

        $this->searchText = $request->query->get('q');
        $this->marcas = array_map('intval', array_filter(explode(',', $marcas)));
        $this->attr = array_map('intval', array_filter(explode(',', $attr)));
    }

    public function getAttr(bool $mostrarWeb2): array
    {
        $this->addMarcas($mostrarWeb2);
        $this->addAtributos($mostrarWeb2);

        foreach ($this->list as &$group) {
            foreach ($group['rows'] as &$itemAttr) {
                $esAttr = $group['es_attr'];
                $codigo = $itemAttr['codigo'];
                $exists = in_array($codigo, $esAttr ? $this->attr : $this->marcas);
                $itemAttr['checked'] = $exists;
                $itemAttr['url'] = $this->creaUrlItemAttr($codigo, $esAttr, $exists);
                if ($exists) {
                    $this->existsChecked = true;
                }
            }
        }

        return $this->list;
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
                'url_imagen' => '',
                'checked' => '',
            ];
        }
        if (!empty($rows)) {
            $this->list[] = ['title' => $currentGrp, 'rows' => $rows, 'es_attr' => true];
        }
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

        return $this->creaUrl($marcas, $attr);
    }

    private function creaUrl($marcas, $attr): string
    {
        $url = $this->searchText;

        if (count($marcas)) {
            $url .= '&m='.implode(',', $marcas);
        }
        if (count($attr)) {
            $url .= '&a='.implode(',', $attr);
        }

        return $url;
    }

    public function creaFiltroSqlCount(string $filtroSql)
    {
        $this->filtroSql = $filtroSql;
        $this->filtroSqlCount = $this->filtroSql;

        if (count($this->marcas) > 0) {
            $aFiltroMarcas = [];
            foreach ($this->marcas as $marca) {
                $aFiltroMarcas[] = "art.marca = (SELECT codigo FROM articulos_marcas WHERE codigo = $marca)";
            }
            $this->filtroSqlCount .= ' AND '.implode(' AND ', $aFiltroMarcas);
        }
        if (count($this->attr) > 0) {
            $aFiltroAttr = [];
            foreach ($this->attr as $attr) {
                $aFiltroAttr[] = "art.referencia IN (SELECT referencia FROM atributos_articulos WHERE activo AND codigo = $attr)";
            }
            $this->filtroSqlCount .= ' AND '.implode(' AND ', $aFiltroAttr);
        }
    }
}
