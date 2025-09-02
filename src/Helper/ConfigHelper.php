<?php

namespace App\Helper;

use App\Library\Tools;

class ConfigHelper
{
    private array $fields = [
        'razon_social' => 'string',
        'cif' => 'string',
        'direccion' => 'string',
        'codigo_postal' => 'string',
        'localidad' => 'string',
        'provincia' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'email_cliente_nuevo' => 'string',
        'email_pedidos' => 'string',
        'email_copia_pedidos' => 'string',
        'email_recogida' => 'string',
        'horario' => 'string',

        'nombre_web' => 'string',
        'meta_tags_description' => 'string',
        'meta_tags_keywords' => 'string',
        'cookiestxt' => 'string',
        'footertxt' => 'string',

        'sat_url' => 'string',
        'blog_url' => 'string',
        'validar_cif_registro' => 'bool',

        'mostrar_footer' => 'bool',
        'mostrar_newsletter' => 'bool',
        'mostrar_categorias' => 'bool',
        'mostrar_marcas' => 'bool',
        'mostrar_formulario' => 'bool',
        'mostrar_opiniones' => 'bool',
        'quienessomosboolean' => 'bool',
        'recursosboolean' => 'bool',
        'promocionesboolean' => 'bool',
        'mostrar_garantias' => 'bool',
        'mostrar_info_cms_nav' => 'bool',
        'mostrar_atributos' => 'bool',
        'puntos_fuertes' => 'bool',
        'parseHtmlDesc' => 'bool',
        'slider' => 'bool',
        'slider_height' => 'int',
        'slider_size_auto' => 'bool',
        'slider_banner' => 'bool',
        'stock_unificar' => 'bool',
        'stock_remoto' => 'string',
        'txt_precio_cero' => 'string',
        'cliente_acceso_email' => 'bool',
        'stock_alm_disp' => 'bool',
        'mostrar_unidades' => 'bool',
        'mostrarweb2' => 'bool',
        'tarifa' => 'int',
        'tarifa_esp_dto' => 'int',
        'estilo' => 'string',
        'lbl_nostock' => 'string',
        'imagen_logo' => 'int',
        'logo_mobile' => 'string',
        'agente' => 'int',
        'banco' => 'int',
        'serie_ventas' => 'string',
        'almacen' => 'int',
        'formapago' => 'int',
        'imagenes_webp' => 'bool',
        'alta_clientes_web' => 'bool',
        'sat_almacen' => 'int',
        'sat_serie' => 'string',
        'bancotxt' => 'string',
        'portes_gratis' => 'int',
        'portes_euros' => 'float',
        'portes_select' => 'bool',
        'latitud' => 'string',
        'longitud' => 'string',
        'georegion' => 'string',
        'google_maps' => 'string',

        'red_facebook' => 'string',
        'red_twitter' => 'string',
        'red_youtube' => 'string',
        'red_skype' => 'string',
        'red_linkedin' => 'string',
        'red_whatsapp' => 'string',
        'red_instagram' => 'string',

        'smtp_host' => 'string',
        'smtp_port' => 'string',
        'smtp_ssl' => 'bool',
        'smtp_mail' => 'string',
        'smtp_name' => 'string',
        'smtp_auth' => 'bool',
        'smtp_user' => 'string',
        'smtp_pwd' => 'string',

        'redsys_activar' => 'bool',
        'redsys_url' => 'string',
        'redsys_tipo_cifrado' => 'string',
        'redsys_clave_encriptacion' => 'string',
        'Ds_Merchant_MerchantName' => 'string',
        'Ds_Merchant_MerchantCode' => 'string',
        'Ds_Merchant_Terminal' => 'string',
        'Ds_Merchant_Currency' => 'string',

        'analytics' => 'string',
        'main_h1_text' => 'string',
        'bloqueo_venta_sin_stock' => 'bool',
        'valoraciones' => 'bool',
        'formulario_recogida' => 'bool',

        'cpostal_filtro' => 'string',
        'kit_digital' => 'bool',
    ];

    public function fieldNames(): array
    {
        return array_keys($this->fields);
    }

    public function convert($fieldName, $value)
    {
        $type = $this->fields[$fieldName] ?? 'string';
        if ($type == 'int') {
            return Tools::toInt($value);
        } elseif ($type == 'float') {
            return Tools::toFloat($value);
        } elseif ($type == 'bool') {
            return Tools::toBool($value);
        }

        return trim($value ?? '');
    }
}
