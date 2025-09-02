<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class Articulos extends SqlOrm
{
    /** @var string */
    public $referencia;
    /** @var string */
    public $equivalente;
    /** @var string */
    public $nombre;
    /** @var \DateTime|null */
    public $fechaalta;
    /** @var int */
    public $usanombre2;
    /** @var int */
    public $usuarioalta;
    /** @var int */
    public $numbultos;
    /** @var int */
    public $familia;
    /** @var int */
    public $subfamilia;
    /** @var int */
    public $tipo;
    /** @var int */
    public $marca;
    /** @var int */
    public $modelo;
    /**
     * Indica dónde se define la tarifa que utilizamos para el cálculo de precios de los artículos 0 -> Artículo 1 -> Familia 2 -> Subfamilia 3 -> Marca 4 -> PRECIOS FIJOS
     * @var int
     */
    public $definetarifa;
    /** @var int */
    public $tarifa;
    /** @var int */
    public $garantia;
    /** @var int */
    public $tipogarantia;
    /**
     * Código del fabricante que da la garantía
     * @var int
     */
    public $fabricante;
    /** @var string */
    public $ubicacion;
    /** @var string */
    public $comentario;
    /** @var int */
    public $tipoiva;
    /** @var float */
    public $coeficiente;
    /** @var int */
    public $redondeo;
    /** @var string */
    public $unidad;
    /**
     * Indica si utilizamos la primera o la segunda unidad
     * @var int
     */
    public $tipo_unidad;
    /** @var int */
    public $desplazamiento;
    /** @var int */
    public $tarifaagencia;
    /** @var int */
    public $obsoleto;
    /** @var int */
    public $bloqueado;
    /** @var int */
    public $sinstock;
    /** @var int */
    public $sintarifa;
    /** @var int */
    public $escandallo;
    /** @var int */
    public $fabricacion;
    /** @var int */
    public $incluircompras;
    /** @var int */
    public $controlserie;
    /** @var int */
    public $homologado;
    /** @var int */
    public $altarotacion;
    /** @var int */
    public $bajopedido;
    /** @var int */
    public $mostrarweb;
    /**
     * Precio de última compra
     * @var float
     */
    public $puc;
    /**
     * Precio de última compra + portes
     * @var float
     */
    public $pucportes;
    /**
     * Precio de última compra + gastos
     * @var float
     */
    public $pucgastos;
    /**
     * Precio de coste medio ponderado
     * @var float
     */
    public $pmp;
    /**
     * Precio medio ponderado + portes
     * @var float
     */
    public $pmpportes;
    /**
     * Precio medio ponderado + gastos
     * @var float
     */
    public $pmpgastos;
    /**
     * Precio más bajo al que hemos comprado el artículo
     * @var float
     */
    public $menorcoste;
    /** @var \DateTime|null */
    public $fechamenorcoste;
    /** @var int */
    public $provmenorcoste;
    /**
     * Precio más alto al que hemos comprado el artículo
     * @var float
     */
    public $mayorcoste;
    /** @var \DateTime|null */
    public $fechamayorcoste;
    /** @var int */
    public $provmayorcoste;
    /** @var \DateTime|null */
    public $fechaultimacompra;
    /** @var int */
    public $provultimacompra;
    /**
     * Campo de coste que utilizamos para calcular el precio mínimo de venta 0 -> PUC 1 -> PUC + Portes 2 -> PUC + Gastos 3 -> PMP 4 -> PMP + Portes 5 -> PMP + Gastos
     * @var int
     */
    public $pvpcampocoste;
    /**
     * Porcentaje de beneficio que utilizamos para calcular el precio mínimo de venta
     * @var float
     */
    public $pvpbeneficio;
    /**
     * Indica cómo aplicamos el % de beneficio para calcular el precio mínimo de venta 0 --> sobre coste 1 --> sobre venta
     * @var int
     */
    public $pvptipocalculo;
    /**
     * Precio mínimo de venta
     * @var float
     */
    public $pvpminimo;
    /** @var float */
    public $ancho;
    /** @var float */
    public $alto;
    /** @var float */
    public $fondo;
    /** @var float */
    public $peso;
    /**
     * Primer campo de cálculo libre
     * @var float
     */
    public $campocalculo1;
    /**
     * Segundo campo de cálculo libre
     * @var float
     */
    public $campocalculo2;
    /**
     * Tercer campo de cálculo libre
     * @var float
     */
    public $campocalculo3;
    /**
     * Cuarto campo de cálculo libre
     * @var float
     */
    public $campocalculo4;
    /** @var int */
    public $rotacionweb;
    /** @var int */
    public $mostrartpv;
    /** @var int */
    public $posiciontpv;
    /** @var string */
    public $nombretpv;
    /** @var string */
    public $nombre2;
    /** @var int */
    public $pidecantidadtpv;
    /** @var int */
    public $pidepreciotpv;
    /** @var int */
    public $produccion;
    /** @var int */
    public $orden_unitaria;
    /** @var int */
    public $orden_total;
    /** @var string */
    public $cta_contable_ventas;
    /** @var string */
    public $cta_contable_compras;
    /** @var string */
    public $cta_contable_gastos;
    /** @var string */
    public $cta_contable_inversion;
    /** @var float */
    public $dto_venta;
    /** @var float */
    public $porcentaje_punto_verde;
    /**
     * Indica si suma el importe del canon al precio del artículo tanto en compras como en ventas
     * @var bool
     */
    public $canon_suma_importe;
    /** @var bool */
    public $tallas_colores;
    /** @var int */
    public $grupo_tallas;
    /** @var int */
    public $grupo_colores;
    /** @var bool */
    public $tallas_colores_definida_en_articulo;
    /** @var int */
    public $tipo_comision;
    /** @var bool */
    public $no_comisiona;
    /**
     * Indica si el artículo está sujeto al control de lotes
     * @var bool
     */
    public $control_lotes;
    /** @var string */
    public $nombre2web;
    /**
     * Indica si el artículo es una materia prima
     * @var bool
     */
    public $materia_prima;
    /**
     * Número de meses que sumamos a la fecha de fabricación para calcular la fecha de caducidad.
     * @var int
     */
    public $meses_fecha_caducidad;
    /** @var int */
    public $artvtadif;
    /** @var string */
    public $artenlazado;
    /** @var int */
    public $artdivideprecio;
    /** @var float */
    public $udartdif;
    /**
     * Indica si imprimimos etiquetas en el módulo de expediciones
     * @var bool
     */
    public $etiquetas_expedicion;
    /**
     * Indica si el artículo está en oferta
     * @var int
     */
    public $oferta;
    /**
     * Fecha y hora en la que se ha modificado el artículo
     * @var \DateTime|null
     */
    public $hora_modificacion;
    /**
     * Identificador del artículo proveniente de IW
     * @var string
     */
    public $id_articulo;
    /** @var int */
    public $canon_digital;
    /** @var int */
    public $codigovino;
    /** @var int */
    public $capacidad;
    /**
     * Indica que el artículo se vende sin recargo de equivalencia
     * @var bool
     */
    public $venta_sin_recargo;
    /** @var bool */
    public $esenvaseagricola;
    /** @var bool */
    public $mostrar_ventana_conversion;
    /** @var bool */
    public $tallasespeciales;
    /** @var bool */
    public $muestradtoporvolumen;
    /** @var bool */
    public $control_temperatura;
    /** @var bool */
    public $mostrarweb2;
    /** @var int */
    public $posicionweb;
    /** @var bool */
    public $todasimgweb;
    /** @var string */
    public $caracteristicasweb;
    /** @var string */
    public $texto_portes_web;
    /** @var float */
    public $merma;
    /** @var bool */
    public $tiene_suplemento;
    /** @var bool */
    public $despiece;
    /** @var string */
    public $part_number;
    /** @var bool */
    public $despojo;
    /** @var float */
    public $cer;
    /** @var bool */
    public $manipulado;
    /** @var bool */
    public $pideunidadesenfabricacion;
    /** @var bool */
    public $inversion_sujeto_pasivo;
    /** @var bool */
    public $es_ticket_entrada;
    /** @var int */
    public $imagen_ticket_entrada;
    /** @var bool */
    public $diascaducidad;
    /** @var bool */
    public $mesescaducidad;
    /** @var bool */
    public $desglose_agricola;
    /** @var float */
    public $pvd;
    /** @var string */
    public $web_descripcion1;
    /** @var string */
    public $web_descripcion2;
    /** @var string */
    public $web_descripcion3;
    /** @var string */
    public $web_url;
    /** @var bool */
    public $origen_lote;
    /** @var int */
    public $pedido_minimo_web;
    /** @var bool */
    public $preparados;
    /** @var bool */
    public $fresco;
    /** @var bool */
    public $congelacion;
    /** @var bool */
    public $usabalanza;
    /** @var float */
    public $medida;
    /** @var string */
    public $medida_nombre;
    /** @var bool */
    public $puntos_regalo_activo;
    /** @var int */
    public $puntos_regalo_valor;
    /** @var bool */
    public $caracteristicas;
    /** @var int */
    public $formato;
    /** @var bool */
    public $vacuno;
    /** @var bool */
    public $es_toxico;
    /** @var string */
    public $toxico_registro;
    /** @var int */
    public $toxico_clasificacion;
    /** @var bool */
    public $coeficiente_bloqueo_precio;
    /** @var float */
    public $canon_importe;
    /** @var bool */
    public $en_catalogo;
    /** @var int */
    public $tipo_igic;
    /** @var float */
    public $cc_porcent_cabeza;
    /** @var string */
    public $cc_referencia_cabeza;
    /** @var float */
    public $peso_envase;
    /** @var string */
    public $nombre_extranjero;
    /** @var int */
    public $familia_asociada;
    /** @var string */
    public $descripcion_qr;
    /** @var int */
    public $subfamilia_asociada;
    /** @var bool */
    public $es_envase;
    /** @var bool */
    public $comision_descuento;
    /** @var int */
    public $contador_lote;
    /** @var bool */
    public $lote_especial;
    /** @var bool */
    public $lote_otros;
    /** @var bool */
    public $esmanoobra;
    /**
     * segunda familia asociada para la transformacion
     * @var int
     */
    public $familia_asoc2;
    /**
     * subfamilia asociada 2 para transformacion
     * @var int
     */
    public $subfam_asoc2;
    /**
     * para que en fabricacion multiple no aparezcan entre los articulos a fabricar
     * @var bool
     */
    public $fabricacion_solo_transformacion;
    /** @var float */
    public $stock_virtual_proveedores;
    /** @var bool */
    public $lima;
    /** @var bool */
    public $marca_blanca;
    /** @var bool */
    public $poliza;
    /** @var bool */
    public $enlace_iges;
    /** @var int */
    public $ensamblado;
    /** @var string */
    public $web_url_externa;
    /** @var string */
    public $web_alerta;
    /** @var bool */
    public $ventas_aviso;
    /** @var string */
    public $ventas_aviso_texto;
    /** @var bool */
    public $ampliacion_garantia;
    /** @var int */
    public $ampliacion_garantia_anos;
    /** @var string */
    public $web_title;
    /** @var string */
    public $web_meta_description;
    /** @var int */
    public $tipo_iva_compra;
    /** @var bool */
    public $compras_aviso;
    /** @var string */
    public $compras_aviso_texto;
    /** @var string */
    public $url_imagen;
    /** @var bool */
    public $es_agricola;
    /** @var float */
    public $bonificacion_estado;
    /** @var string */
    public $url_imagen_infowork;
    /** @var string */
    public $nombre_txt;
    /** @var float */
    public $unidades_caja;
    /** @var bool */
    public $es_compatible;
    /** @var float */
    public $num_copias;
    /** @var float */
    public $web_valoracion;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['referencia', 'equivalente', 'nombre', 'fechaalta', 'usanombre2', 'usuarioalta', 'numbultos', 'familia', 'subfamilia', 'tipo', 'marca', 'modelo', 'definetarifa', 'tarifa', 'garantia', 'tipogarantia', 'fabricante', 'ubicacion', 'comentario', 'tipoiva', 'coeficiente', 'redondeo', 'unidad', 'tipo_unidad', 'desplazamiento', 'tarifaagencia', 'obsoleto', 'bloqueado', 'sinstock', 'sintarifa', 'escandallo', 'fabricacion', 'incluircompras', 'controlserie', 'homologado', 'altarotacion', 'bajopedido', 'mostrarweb', 'puc', 'pucportes', 'pucgastos', 'pmp', 'pmpportes', 'pmpgastos', 'menorcoste', 'fechamenorcoste', 'provmenorcoste', 'mayorcoste', 'fechamayorcoste', 'provmayorcoste', 'fechaultimacompra', 'provultimacompra', 'pvpcampocoste', 'pvpbeneficio', 'pvptipocalculo', 'pvpminimo', 'ancho', 'alto', 'fondo', 'peso', 'campocalculo1', 'campocalculo2', 'campocalculo3', 'campocalculo4', 'rotacionweb', 'mostrartpv', 'posiciontpv', 'nombretpv', 'nombre2', 'pidecantidadtpv', 'pidepreciotpv', 'produccion', 'orden_unitaria', 'orden_total', 'cta_contable_ventas', 'cta_contable_compras', 'cta_contable_gastos', 'cta_contable_inversion', 'dto_venta', 'porcentaje_punto_verde', 'canon_suma_importe', 'tallas_colores', 'grupo_tallas', 'grupo_colores', 'tallas_colores_definida_en_articulo', 'tipo_comision', 'no_comisiona', 'control_lotes', 'nombre2web', 'materia_prima', 'meses_fecha_caducidad', 'artvtadif', 'artenlazado', 'artdivideprecio', 'udartdif', 'etiquetas_expedicion', 'oferta', 'hora_modificacion', 'id_articulo', 'canon_digital', 'codigovino', 'capacidad', 'venta_sin_recargo', 'esenvaseagricola', 'mostrar_ventana_conversion', 'tallasespeciales', 'muestradtoporvolumen', 'control_temperatura', 'mostrarweb2', 'posicionweb', 'todasimgweb', 'caracteristicasweb', 'texto_portes_web', 'merma', 'tiene_suplemento', 'despiece', 'part_number', 'despojo', 'cer', 'manipulado', 'pideunidadesenfabricacion', 'inversion_sujeto_pasivo', 'es_ticket_entrada', 'imagen_ticket_entrada', 'diascaducidad', 'mesescaducidad', 'desglose_agricola', 'pvd', 'web_descripcion1', 'web_descripcion2', 'web_descripcion3', 'web_url', 'origen_lote', 'pedido_minimo_web', 'preparados', 'fresco', 'congelacion', 'usabalanza', 'medida', 'medida_nombre', 'puntos_regalo_activo', 'puntos_regalo_valor', 'caracteristicas', 'formato', 'vacuno', 'es_toxico', 'toxico_registro', 'toxico_clasificacion', 'coeficiente_bloqueo_precio', 'canon_importe', 'en_catalogo', 'tipo_igic', 'cc_porcent_cabeza', 'cc_referencia_cabeza', 'peso_envase', 'nombre_extranjero', 'familia_asociada', 'descripcion_qr', 'subfamilia_asociada', 'es_envase', 'comision_descuento', 'contador_lote', 'lote_especial', 'lote_otros', 'esmanoobra', 'familia_asoc2', 'subfam_asoc2', 'fabricacion_solo_transformacion', 'stock_virtual_proveedores', 'lima', 'marca_blanca', 'poliza', 'enlace_iges', 'ensamblado', 'web_url_externa', 'web_alerta', 'ventas_aviso', 'ventas_aviso_texto', 'ampliacion_garantia', 'ampliacion_garantia_anos', 'web_title', 'web_meta_description', 'tipo_iva_compra', 'compras_aviso', 'compras_aviso_texto', 'url_imagen', 'es_agricola', 'bonificacion_estado', 'url_imagen_infowork', 'nombre_txt', 'unidades_caja', 'es_compatible', 'num_copias', 'web_valoracion'];
        $this->fieldTypes = ['string', 'string', 'string', '\DateTime', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'string', 'string', 'int', 'float', 'int', 'string', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'int', 'float', 'float', 'float', 'float', 'float', 'float', 'float', '\DateTime', 'int', 'float', '\DateTime', 'int', '\DateTime', 'int', 'int', 'float', 'int', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'float', 'int', 'int', 'int', 'string', 'string', 'int', 'int', 'int', 'int', 'int', 'string', 'string', 'string', 'string', 'float', 'float', 'bool', 'bool', 'int', 'int', 'bool', 'int', 'bool', 'bool', 'string', 'bool', 'int', 'int', 'string', 'int', 'float', 'bool', 'int', 'time', 'string', 'int', 'int', 'int', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'bool', 'int', 'bool', 'string', 'string', 'float', 'bool', 'bool', 'string', 'bool', 'float', 'bool', 'bool', 'bool', 'bool', 'int', 'bool', 'bool', 'bool', 'float', 'string', 'string', 'string', 'string', 'bool', 'int', 'bool', 'bool', 'bool', 'bool', 'float', 'string', 'bool', 'int', 'bool', 'int', 'bool', 'bool', 'string', 'int', 'bool', 'float', 'bool', 'int', 'float', 'string', 'float', 'string', 'int', 'string', 'int', 'bool', 'bool', 'int', 'bool', 'bool', 'bool', 'int', 'int', 'bool', 'float', 'bool', 'bool', 'bool', 'bool', 'int', 'string', 'string', 'bool', 'string', 'bool', 'int', 'string', 'string', 'int', 'bool', 'string', 'string', 'bool', 'float', 'string', 'string', 'float', 'bool', 'float', 'float'];
        $this->fieldLengths = [30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 12, 12, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->defaultValues = ['', '', '', null, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, null, 0, 0.0, null, 0, null, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0.0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, '', '', '', '', 0.0, 0.0, false, false, 0, 0, false, 0, false, false, '', false, 0, 0, '', 0, 0, false, 0, null, '', 0, 0, 0, false, false, false, false, true, false, false, 0, false, '', '', 0, false, false, '', false, 0, false, false, false, false, 0, false, true, false, 0, '', '', '', '', false, 1, false, false, false, false, 0.0, '', false, 0, false, 0, false, false, '', 0, false, 0, false, 0, 0, '', 0, '', 0, '', 0, false, false, 0, false, false, false, 0, 0, false, 0, false, false, false, false, 0, '', '', false, '', false, 0, '', '', 0, false, '', '', false, 0, '', '', 0, false, 0, 0];
        $this->numFields = 194;
        $this->tableName = 'articulos';
        $this->pkFields = ['referencia'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = false;

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM articulos WHERE ' . $this->sqlPKCondition() . ')';
        $param[] = new SqlParam('referencia', $this->referencia, 'string', 30);
        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function porcentajesIva(): array
    {
        $datos = Sql::select("SELECT iva, recargo FROM tipos_iva WHERE codigo = $this->tipoiva");
        if (empty($datos)) {
            $datos = Sql::select('SELECT iva, recargo FROM tipos_iva WHERE codigo = (SELECT valor::integer FROM configuracion WHERE codigo = 1100 LIMIT 1)');
            if (empty($datos)) {
                $datos = ['iva' => 0.0, 'recargo' => 0.0];
            }
        }

        $datos['iva'] = (float) $datos['iva'];
        $datos['recargo'] = (float) $datos['recargo'];

        return $datos;
    }

    public static function leeNombre(string $referencia): string
    {
        $param[] = new SqlParam('referencia', $referencia, 'string');

        return Sql::selectString('SELECT nombre FROM articulos WHERE referencia = :referencia', $param);
    }

    public static function buscaReferencia(string $texto): string
    {
        if (!empty($texto)) {
            $param[] = new SqlParam('texto', $texto, 'string');

            return Sql::selectString('SELECT busca_articulo2(:texto)', $param);
        }

        return '';
    }

    public static function altaRotacion(ArticulosParamHelper $param): array
    {
        $campoMostrarWeb = $param->mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $param->mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';
        $campoAlmacen = $param->campoStockAlmacen();
        $campoPrecio = $param->campoPrecio();
        $campoDescuento = $param->campoDescuento();

        $sql = "SELECT
            art.referencia,
            art.nombre,
            art.web_url AS url,
            art.sinstock = 0 AS control_stock,
            $campoAlmacen AS stock,
            greatest(0, round(art.stock_virtual_proveedores)) AS virtual,
            round(
                (coalesce(
                    nullif($campoPrecio, 0),
                    nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                    0)
                 * (1 - coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web) / 100.0)
                 + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)
                )
                * (1 + iva.iva/100.0)
            , 2) AS precio_iva,
            round(
                (coalesce(
                    nullif($campoPrecio, 0),
                    nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                    0)
                 + coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)
                )
                * (1 + iva.iva/100.0)
            , 2) AS precio_iva_sin_dto,
            coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web, 0) AS dto_fam,
            '' AS imagen,
            coalesce(nullif(img.descripcion, ''), art.nombre) AS imagen_txt
        FROM articulos art
        LEFT JOIN articulos_imagenes img ON img.referencia = art.referencia AND img.orden = 1
        LEFT JOIN articulos_precios pre ON pre.referencia = art.referencia AND pre.tarifa = $param->tarifa
        LEFT JOIN almacenes_stock sto ON sto.referencia = art.referencia AND sto.almacen = $param->almacen
        LEFT JOIN tipos_iva iva ON art.tipoiva = iva.codigo
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        WHERE fam.$campoMostrarWeb = 1 AND coalesce(sub.$campoMostrarWeb,1) = 1 AND $filtroArtMostrarWeb AND art.obsoleto = 0 AND art.altarotacion = 1
        ORDER BY random()
        LIMIT 5";

        $data = Sql::selectAll($sql);
        foreach ($data as &$row) {
            $row['precio_iva'] = (float) $row['precio_iva'];
            $row['precio_iva_sin_dto'] = (float) $row['precio_iva_sin_dto'];
            $row['dto_fam'] = (float) $row['dto_fam'];
            $row['imagen'] = ArticulosImagenes::getImage($row['referencia'], 120, 1);
        }

        return $data;
    }

    public static function landing(ArticulosParamHelper $param): array
    {
        $param->filtroSql = 'AND art.rotacionweb = 1';
        $param->orderBy = 'random()';
        $param->page = 1;
        $param->limit = 12;

        return self::lista($param);
    }

    public static function lista(ArticulosParamHelper $param): array
    {
        $campoMostrarWeb = $param->mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $param->mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        if (!empty($param->filtroSql) && strpos(strtoupper(trim($param->filtroSql)), 'AND') !== 0) {
            $param->filtroSql = ' AND ' . $param->filtroSql;
        }

        $offset = ($param->page - 1) * $param->limit;
        if ($offset < 0) {
            $offset = 0;
        }

        $campoAlmacen = $param->campoStockAlmacen();
        $campoPrecio = $param->campoPrecio();
        $campoDescuento = $param->campoDescuento();

        $sql = "SELECT
            art.referencia,
            art.nombre2web,
            art.web_url AS url,
            art.nombre,
            art.tallas_colores,
            art.sinstock = 0 AS control_stock,
            $campoAlmacen AS stock,
            greatest(0, round(art.stock_virtual_proveedores)) AS virtual,
            $campoAlmacen + greatest(0, round(art.stock_virtual_proveedores)) > 1 AS disponible,
            $campoAlmacen <= 0 AND round(art.stock_virtual_proveedores) > 0 AS stock_remoto,
            round(
                (coalesce(
                  nullif($campoPrecio, 0),
                  nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                  0)
                  * (1 - coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web) / 100.0)
                 + case
                   when coalesce(
                    nullif($campoPrecio, 0),
                    nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                    0) = 0
                    then 0
                   else coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)
                   end
                )
                * (1 + iva.iva/100.0)
            , 2) AS precio_iva,
            round(
                (coalesce(
                    nullif($campoPrecio, 0),
                    nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                    0)
                 + case
                 when coalesce(
                    nullif($campoPrecio, 0),
                    nullif(case when art.tallas_colores then (SELECT min(precio) FROM articulos_codbarras WHERE referencia = art.referencia) else 0 end, 0),
                    0) = 0
                    then 0
                 else coalesce(nullif(art.canon_importe, 0), ac.importe1, 0)
                 end
                )
                * (1 + iva.iva/100.0)
            , 2) AS precio_iva_sin_dto,
            coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web, 0) AS dto_fam,
            '' AS imagen,
            coalesce(nullif(img.descripcion, ''), art.nombre) AS imagen_txt
        FROM articulos art
        LEFT JOIN articulos_imagenes img ON img.referencia = art.referencia AND img.orden = 1
        LEFT JOIN almacenes_stock sto ON sto.referencia = art.referencia AND sto.almacen = $param->almacen
        LEFT JOIN articulos_precios pre ON pre.referencia = art.referencia AND pre.tarifa = $param->tarifa
        LEFT JOIN tipos_iva iva ON art.tipoiva = iva.codigo
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        WHERE fam.$campoMostrarWeb = 1 AND coalesce(sub.$campoMostrarWeb, 1) = 1 AND $filtroArtMostrarWeb AND art.obsoleto = 0 $param->filtroSql
        ORDER BY $param->orderBy
        LIMIT $param->limit OFFSET $offset";

        $data = Sql::selectAll($sql);
        foreach ($data as &$row) {
            $row['tallas_colores'] = (bool) $row['tallas_colores'];
            $row['control_stock'] = (bool) $row['control_stock'];
            $row['stock'] = (int) $row['stock'];
            $row['virtual'] = (int) $row['virtual'];
            $row['disponible'] = (bool) $row['disponible'];
            $row['stock_remoto'] = (bool) $row['stock_remoto'];
            $row['precio_iva'] = (float) $row['precio_iva'];
            $row['precio_iva_sin_dto'] = (float) $row['precio_iva_sin_dto'];
            $row['dto_fam'] = (float) $row['dto_fam'];
            $row['imagen'] = ArticulosImagenes::getImage($row['referencia'], 250, 1);
        }

        return $data;
    }

    public static function getMetaByUrl(string $weburl): array
    {
        $sql = "SELECT
            art.web_title,
            art.web_meta_description
            FROM articulos art
            WHERE art.web_url = :weburl
            LIMIT 1";
        $paramSql = [new SqlParam('weburl', $weburl, 'string')];

        $data = Sql::select($sql, $paramSql);
        return empty($data) ? [] : $data;
    }

    public static function getByUrl(string $weburl, ArticulosParamHelper $param): array
    {
        $campoAlmacen = $param->campoStockAlmacen();
        $campoPrecio = $param->campoPrecio();
        $campoDescuento = $param->campoDescuento();

        $sql = "SELECT
            art.referencia,
            art.nombre2web,
            art.web_title,
            art.web_meta_description,
            art.caracteristicasweb AS caracteristicas,
            art.web_url AS url,
            art.web_url_externa AS url_externa,
            art.web_alerta,
            art.nombre,
            coalesce(mar.nombre,'') AS marca,
            art.tallas_colores,
            art.sinstock = 0 AS control_stock,
            $campoAlmacen AS stock,
            greatest(0, round(art.stock_virtual_proveedores)) AS virtual,
            round(coalesce(sto.actual - sto.pservir,0)) + greatest(0, round(art.stock_virtual_proveedores)) > 1 AS disponible,
            $campoAlmacen <= 0 AND round(art.stock_virtual_proveedores) > 0 AS stock_remoto,
            round(
                (
                 $campoPrecio * (1 - coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web) / 100.0)
                 + case when nullif($campoPrecio, 0) = 0 then 0 else coalesce(nullif(art.canon_importe, 0), ac.importe1, 0) end
                )
                * (1 + iva.iva / 100.0)
            , 2) AS precio_iva,
            round(
                ($campoPrecio
                 + case when nullif($campoPrecio, 0) = 0 then 0 else coalesce(nullif(art.canon_importe, 0), ac.importe1, 0) end
                )
                * (1 + iva.iva / 100.0)
            , 2) AS precio_iva_sin_dto,
            coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web, 0) AS dto_fam,
            coalesce(nullif(art.canon_importe, 0), ac.importe1, 0) AS lpi,
            art.part_number as part_number,
            (SELECT codbarras
              FROM articulos_codbarras
              WHERE codbarras NOT LIKE '2%' AND  codbarras NOT LIKE '02%' AND codbarras NOT LIKE '04%'
                AND referencia = art.referencia
              ORDER BY predeterminado DESC, codbarras DESC
              LIMIT 1
            ) AS codbarras,
            (SELECT id FROM articulos_documentos WHERE referencia = art.referencia AND actual LIMIT 1) AS id_documento,
            '' AS imagen,
            coalesce(nullif(img.descripcion, ''), art.nombre) AS imagen_txt,
            '' AS referencia_hex
        FROM articulos art
        LEFT JOIN articulos_imagenes img ON img.referencia = art.referencia AND img.orden = 1
        LEFT JOIN almacenes_stock sto ON sto.referencia = art.referencia AND sto.almacen = $param->almacen
        LEFT JOIN articulos_precios pre ON pre.referencia = art.referencia AND pre.tarifa = $param->tarifa
        LEFT JOIN tipos_iva iva ON art.tipoiva = iva.codigo
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        LEFT JOIN articulos_marcas mar ON mar.codigo = art.marca
        WHERE art.web_url = :weburl
        LIMIT 1";

        $paramSql = [new SqlParam('weburl', $weburl, 'string')];

        $data = Sql::select($sql, $paramSql);
        if (empty($data)) {
            return [];
        }

        if ($param->parseHtml) {
            $data['nombre2web'] = Tools::parseHtmlText($data['nombre2web']);
            $data['caracteristicas'] = Tools::parseHtmlText($data['caracteristicas']);
        }

        if (mb_strpos($data['url_externa'], '://') === false) {
            $data['url_externa'] = '';
        }

        $data['tallas_colores'] = (bool) $data['tallas_colores'];
        $data['control_stock'] = (bool) $data['control_stock'];
        $data['stock'] = (int) $data['stock'];
        $data['virtual'] = (int) $data['virtual'];
        $data['disponible'] = (bool) $data['disponible'];
        $data['stock_remoto'] = (bool) $data['stock_remoto'];
        $data['precio_iva'] = (float) $data['precio_iva'];
        $data['precio_iva_sin_dto'] = (float) $data['precio_iva_sin_dto'];
        $data['dto_fam'] = (float) $data['dto_fam'];
        $data['lpi'] = (float) $data['lpi'];
        $data['part_number'] = (string) $data['part_number'];
        $data['codbarras'] = (string) $data['codbarras'];
        $data['referencia_hex'] = bin2hex($data['referencia']);
        $data['id_documento'] = (int) $data['id_documento'];
        $data['imagen'] = ArticulosImagenes::getImage($data['referencia'], 1000, 1);


        return $data;
    }

    public static function canonImporte(string $referencia): float
    {
        $sql = 'SELECT
            case
                when art.canon_suma_importe then
                  coalesce(
                    nullif(art.canon_importe, 0),
                    (SELECT can.importe1 FROM subfamilias sub LEFT JOIN articulos_canon can ON can.codigo = sub.canon_digital WHERE sub.codigo = art.subfamilia),
                    0)
                else 0.0
            end AS canon
            FROM articulos art
            WHERE referencia = :referencia';
        $param[] = new SqlParam('referencia', $referencia, 'string');

        return (float) Sql::selectEscalar($sql, $param);
    }

    public static function getByReferencia(ArticulosParamHelper $param): array
    {
        $campoAlmacen = $param->getCampoStockAlmacen();
        $campoPrecio = $param->getCampoPrecio();
        $campoDescuento = $param->getCampoDescuento();

        $sql = "SELECT
            art.referencia,
            art.nombre,
            art.web_title,
            art.web_meta_description,
            art.web_url AS url,
            art.tallas_colores,
            art.sinstock = 0 AS control_stock,
            greatest($campoAlmacen, 0) AS stock,
            $campoAlmacen <= 0 AND round(art.stock_virtual_proveedores) > 0 AS stock_remoto,
            round($campoPrecio * (1 - coalesce(nullif($campoDescuento, 0), nullif(sub.dto_web, 0), fam.dto_web) / 100.0), 2) AS precio,
            coalesce(nullif(art.canon_importe, 0), ac.importe1, 0) AS lpi,
            iva.iva,
            art.part_number,
            (SELECT codbarras
              FROM articulos_codbarras
              WHERE codbarras NOT LIKE '2%' AND  codbarras NOT LIKE '02%' AND codbarras NOT LIKE '04%'
                AND referencia = art.referencia
              ORDER BY predeterminado DESC, codbarras DESC
              LIMIT 1
            ) AS codbarras,
            '' AS imagen,
            coalesce(nullif(img.descripcion, ''), art.nombre) AS imagen_txt,
            '' AS referencia_hex
        FROM articulos art
        LEFT JOIN articulos_imagenes img ON img.referencia = art.referencia AND img.orden = 1
        LEFT JOIN almacenes_stock sto ON sto.referencia = art.referencia AND sto.almacen = :almacen
        LEFT JOIN articulos_precios pre ON pre.referencia = art.referencia AND pre.tarifa = :tarifa
        LEFT JOIN tipos_iva iva ON art.tipoiva = iva.codigo
        LEFT JOIN familias fam ON fam.codigo = art.familia
        LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
        LEFT JOIN articulos_canon ac ON ac.codigo = case when art.canon_digital > 0 then art.canon_digital when sub.canon_digital > 0 then sub.canon_digital else fam.canon_digital end
        WHERE art.referencia = :referencia";

        $paramSql = [
            new SqlParam('referencia', $param->referencia, 'string'),
            new SqlParam('almacen', $param->almacen, 'int'),
            new SqlParam('tarifa', $param->tarifa, 'int'),
        ];

        $data = Sql::select($sql, $paramSql);
        $data['tallas_colores'] = (bool) $data['tallas_colores'];
        $data['control_stock'] = (bool) $data['control_stock'];
        $data['stock'] = (int) $data['stock'];
        $data['precio'] = (float) $data['precio'];
        $data['lpi'] = (float) $data['lpi'];
        $data['codbarras'] = (string) $data['codbarras'];
        $data['referencia_hex'] = bin2hex($data['referencia']);
        $data['imagen'] = ArticulosImagenes::getImage($data['referencia'], 250, 1);

        return $data;
    }

    private static function grupoTallas(string $referencia): int
    {
        $param[] = new SqlParam('referencia', $referencia, 'string');
        $sql = 'SELECT grupo_tallas FROM articulos WHERE referencia = :referencia AND NOT tallas_colores_definida_en_articulo';
        return (int) Sql::selectEscalar($sql, $param);
    }

    private static function grupoColores(string $referencia): int
    {
        $param[] = new SqlParam('referencia', $referencia, 'string');
        $sql = 'SELECT grupo_colores FROM articulos WHERE referencia = :referencia AND NOT tallas_colores_definida_en_articulo';
        return (int) Sql::selectEscalar($sql, $param);
    }

    public static function listaTallas(string $referencia): array
    {
        $grupo = self::grupoTallas($referencia);
        if ($grupo > 0) {
            $sql = "SELECT t.codigo, t.nombre FROM articulos_tallas_rel_grupos g LEFT JOIN articulos_tallas t ON t.codigo = g.talla WHERE g.grupo = $grupo ORDER BY g.orden";
            return Sql::selectAll($sql);
        }

        $sql = 'SELECT t.codigo, t.nombre FROM articulos_tallas_rel r LEFT JOIN articulos_tallas t ON t.codigo = r.talla WHERE r.referencia= :referencia ORDER BY r.orden';
        $param[] = new SqlParam('referencia', $referencia, 'string');
        return Sql::selectAll($sql, $param);
    }

    public static function listaColores(string $referencia): array
    {
        $grupo = self::grupoColores($referencia);
        if ($grupo > 0) {
            $sql = "SELECT c.codigo, c.nombre FROM articulos_colores_rel_grupos g LEFT JOIN articulos_colores c ON c.codigo = g.color WHERE g.grupo = $grupo ORDER BY g.orden";
            return Sql::selectAll($sql);
        }

        $sql = 'SELECT c.codigo, c.nombre FROM articulos_colores_rel r LEFT JOIN articulos_colores c ON c.codigo = r.color WHERE r.referencia= :referencia ORDER BY r.orden';
        $param[] = new SqlParam('referencia', $referencia, 'string');
        return Sql::selectAll($sql, $param);
    }

    public static function listaStockTC(string $referencia, int $almacen, bool $stockAlmDisp): array
    {
        if ($stockAlmDisp) {
            $campoAlmacen = '(
                SELECT sum(s.actual - s.pservir)
                FROM almacenes_stock_tallas_colores s
                LEFT JOIN almacenes a ON a.codigo = s.almacen
                WHERE s.referencia = sto.referencia AND s.talla = sto.talla AND s.color = sto.color AND a.control_stock = 1)';
        } else {
            $campoAlmacen = 'sto.actual - sto.pservir';
        }

        $grupoTal = self::grupoTallas($referencia);
        if ($grupoTal > 0) {
            $grupoCol = self::grupoColores($referencia);
            $tablasTC = "(SELECT talla FROM articulos_tallas_rel_grupos WHERE grupo = $grupoTal) AS t,
              (SELECT color FROM articulos_colores_rel_grupos WHERE grupo = $grupoCol) AS c";
        } else {
            $tablasTC = '(SELECT talla FROM articulos_tallas_rel WHERE referencia= :referencia) AS t,
              (SELECT color FROM articulos_colores_rel WHERE referencia= :referencia) AS c';
        }

        $sql = "WITH
            tc AS (SELECT t.talla, c.color FROM $tablasTC),
            stock AS (
              SELECT talla, color, $campoAlmacen AS actual
              FROM almacenes_stock_tallas_colores sto WHERE referencia = :referencia AND almacen = :almacen
              ORDER BY talla, color
            )
            SELECT
              tc.talla,
              tc.color,
              round(coalesce(stock.actual, 0), 0) AS stock,
              '' AS icon
            FROM tc
            LEFT JOIN stock ON stock.talla = tc.talla AND stock.color = tc.color";
        $param = [
             new SqlParam('referencia', $referencia, 'string'),
             new SqlParam('almacen', $almacen, 'int'),
        ];

        return Sql::selectAll($sql, $param);
    }

    public static function listaUrl(bool $mostrarWeb2): array
    {
        $campoMostrarWeb = $mostrarWeb2 ? 'mostrarweb2' : 'mostrarweb';
        $filtroArtMostrarWeb = $mostrarWeb2 ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        $sql = "SELECT art.web_url AS url
            FROM articulos art
            LEFT JOIN familias fam ON fam.codigo = art.familia
            LEFT JOIN subfamilias sub ON sub.codigo = art.subfamilia
            WHERE art.web_url  != ''
                AND fam.$campoMostrarWeb = 1
                AND coalesce(sub.$campoMostrarWeb, 1) = 1
                AND $filtroArtMostrarWeb
                AND art.obsoleto = 0
            ORDER BY art.web_url";

        return Sql::selectAll($sql);
    }

    public static function controlStock(string $referencia)
    {
        $param = [new SqlParam('referencia', $referencia, 'string')];
        $sql = "SELECT sinstock = 0 FROM articulos WHERE referencia = :referencia";
        return Tools::toBool(Sql::selectEscalar($sql, $param));
    }

    public static function stockActual(string $referencia, string $talla, string $color, int $almacen, bool $stockAlmDisp): int
    {
        $param = [new SqlParam('referencia', $referencia, 'string')];

        if (!$stockAlmDisp) {
            $param[] = new SqlParam('almacen', $almacen, 'int');
        }

        if (!empty($talla) && !empty($color)) {
            $param[] = new SqlParam('talla', $talla, 'string');
            $param[] = new SqlParam('color', $color, 'string');

            if ($stockAlmDisp) {
                $sql = 'SELECT round(sum(s.actual - s.pservir))
                FROM almacenes_stock_tallas_colores s
                LEFT JOIN almacenes a ON a.codigo = s.almacen
                WHERE s.referencia = :referencia AND s.talla = :talla AND s.color = :color AND a.control_stock = 1';
            } else {
                $sql = 'SELECT actual - pservir FROM almacenes_stock_tallas_colores WHERE referencia = :referencia AND talla = :talla AND color = :color AND almacen = :almacen';
            }
        } else {
            if ($stockAlmDisp) {
                $sql = 'SELECT round(sum(s.actual - s.pservir))
                FROM almacenes_stock s
                LEFT JOIN almacenes a ON a.codigo = s.almacen
                WHERE s.referencia = :referencia AND a.control_stock = 1';
            } else {
                $sql = 'SELECT actual - pservir FROM almacenes_stock WHERE referencia = :referencia AND almacen = :almacen';
            }
        }

        return Tools::toInt(Sql::selectEscalar($sql, $param));
    }
}
