<?php

namespace App\Service;

use App\Entity\Empresa;
use App\Entity\EmpresaImagenes;
use App\Library\Tools;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Yaml\Yaml;

class ConfigService
{
    private $fileName;

    public $data;

    private $projectDir;

    public function __construct(KernelInterface $appKernel)
    {
        $this->projectDir = $appKernel->getProjectDir();
        $this->fileName = $this->projectDir.'/configuracion.yaml';
        $this->data = Yaml::parseFile($this->fileName);
        $this->data['title'] = '';
        $this->verify();
    }

    public function save()
    {
        $yaml = Yaml::dump($this->data);
        file_put_contents($this->fileName, $yaml);
    }

    public function getProjectDir(): string
    {
        return $this->projectDir;
    }

    public function analytics(): string
    {
        return $this->data['analytics'] ?? '';
    }

    public function mainH1Text(): string
    {
        return $this->data['main_h1_text'] ?? '';
    }

    public function bloqueoVentaSinStock(): bool
    {
        return Tools::toBool($this->data['bloqueo_venta_sin_stock']);
    }

    public function valoraciones(): bool
    {
        return (bool) $this->data['valoraciones'];
    }

    public function formularioRecogida(): bool
    {
        return (bool) $this->data['formulario_recogida'];
    }

    public function imageWebP(): bool
    {
        return Tools::toBool($this->data['imagenes_webp']);
    }

    public function altaClientesWeb(): bool
    {
        return Tools::toBool($this->data['alta_clientes_web']);
    }

    public function satAlmacen(): int
    {
        return Tools::coalesce(Tools::toInt($this->data['sat_almacen']), 1);
    }

    public function satSerie(): string
    {
        return $this->data['sat_serie'] ?? '';
    }

    public function estilo(): string
    {
        return $this->data['estilo'] ?? 'azul.css';
    }

    public function title()
    {
        if (!empty($this->data['title'])) {
            return $this->data['title'];
        }
        return $this->nombreWeb();
    }

    public function nombreWeb(): string
    {
        return $this->data['nombre_web'] ?? 'V3 WEB';
    }

    public function nombreEmpresa(): string
    {
        return $this->data['razon_social'] ?? '';
    }

    public function mostrarCategorias(): bool
    {
        return Tools::toBool($this->data['mostrar_categorias']);
    }

    public function mostrarMarcas(): bool
    {
        return Tools::toBool($this->data['mostrar_marcas']);
    }

    public function mostrarOpiniones(): bool
    {
        return Tools::toBool($this->data['mostrar_opiniones']);
    }

    public function mostrarPromociones(): bool
    {
        return Tools::toBool($this->data['promocionesboolean']);
    }

    public function mostrarUnidades(): bool
    {
        return Tools::toBool($this->data['mostrar_unidades']);
    }

    public function slider(): bool
    {
        return Tools::toBool($this->data['slider']);
    }

    public function validarCIF(): bool
    {
        return Tools::toBool($this->data['validar_cif_registro']);
    }

    public function sliderSizeAuto(): bool
    {
        return Tools::toBool($this->data['slider_size_auto']);
    }

    public function sliderHeight(): int
    {
        $height = (int) $this->data['slider_height'];
        if ($height < 400) {
            $height = 400;
        }

        return $height;
    }

    public function sliderBanner(): bool
    {
        return Tools::toBool($this->data['slider_banner']);
    }

    public function tarifa(): int
    {
        return (int) $this->data['tarifa'] ?? 1;
    }

    public function tarifaEspDto(): int
    {
        return (int) $this->data['tarifa_esp_dto'] ?? 0;
    }

    public function almacen(): int
    {
        return (int) $this->data['almacen'] ?? 1;
    }

    public function agente(): int
    {
        return (int) $this->data['agente'] ?? 0;
    }

    public function redsysActivo(): bool
    {
        return Tools::toBool($this->data['redsys_activar']);
    }

    public function headerMetadata(): array
    {
        $lat = $this->data['latitud'] ?? '';
        $long = $this->data['longitud'] ?? '';

        return [
            ['name' => 'ICBM', 'content' => "$lat,$long"],
            ['name' => 'geo.position', 'content' => "$lat;$long"],
            ['name' => 'geo.placename', 'content' => $this->data['localidad']],
            ['name' => 'geo.region', 'content' => $this->data['georegion'] ?? ''],
            ['name' => 'description', 'content' => $this->data['meta_tags_description'] ?? ''],
            ['name' => 'keywords', 'content' => $this->data['meta_tags_keywords'] ?? ''],
            ['name' => 'DC.title', 'content' => $this->title() ?? ''],
        ];
    }

    public function headerMetaDescription(): string
    {
        return $this->data['meta_tags_description'];
    }

    public function logo(): string
    {
        return EmpresaImagenes::getImage((int) $this->data['imagen_logo']);
    }

    public function empresa(): array
    {
        if (empty($this->data['email'])) {
            $this->data['email'] = Empresa::leeEmail();
        }

        return  [
            'nombre' => $this->data['razon_social'],
            'cif' => $this->data['cif'],
            'direccion' => $this->data['direccion'],
            'cpostal' => $this->data['codigo_postal'],
            'localidad' => $this->data['localidad'],
            'provincia' => $this->data['provincia'],
            'telefono' => $this->data['telefono'],
            'telefonoUri' => str_replace([' ', '-'], '', $this->data['telefono']),
            'email' => $this->data['email'],
            'horario' => $this->data['horario'],
            'whatsapp' => $this->data['red_whatsapp'],
            'instagram' => $this->data['red_instagram'],
        ];
    }

    public function smtpConfig(): object
    {
        return (object) [
            'host' => $this->data['smtp_host'],
            'port' => (int) $this->data['smtp_port'],
            'ssl' => (bool) $this->data['smtp_ssl'],
            'mail' => $this->data['smtp_mail'],
            'name' => $this->data['smtp_name'],
            'auth' => (bool) $this->data['smtp_auth'],
            'user' => $this->data['smtp_user'],
            'pwd' => $this->data['smtp_pwd'],
        ];
    }

    public function smtpOk(): bool
    {
        return !empty($this->data['smtp_host'])
            && !empty($this->data['smtp_port'])
            && !empty($this->data['smtp_mail'])
            && !empty($this->data['smtp_name'])
            && !empty($this->data['smtp_user']);
    }

    public function redesSociales(): array
    {
        return [
            $this->data['red_facebook'],
            $this->data['red_twitter'],
            $this->data['red_skype'],
            $this->data['red_linkedin'],
            $this->data['red_youtube'],
            $this->data['red_instagram'],
        ];
    }

    public function emailClienteNuevo(): string
    {
        return $this->data['email_cliente_nuevo'] ?? '';
    }

    public function emailPedidos(): string
    {
        return $this->data['email_pedidos'] ?? '';
    }

    public function emailCopiaPedidos(): string
    {
        return $this->data['email_copia_pedidos'] ?? '';
    }

    public function emailRecogida(): string
    {
        return $this->data['email_recogida'] ?? '';
    }

    public function stockUnificar(): bool
    {
        return Tools::toBool($this->data['stock_unificar']);
    }

    public function stockRemoto(): string
    {
        return $this->data['stock_remoto'] ?? '';
    }

    public function txtPrecioCero(): string
    {
        return $this->data['txt_precio_cero'] ?? 'Consultar';
    }

    public function clienteAccesoEmail(): bool
    {
        return Tools::toBool($this->data['cliente_acceso_email']);
    }

    public function stockAlmDisp(): bool
    {
        return Tools::toBool($this->data['stock_alm_disp']);
    }

    public function parseHtmlDesc(): bool
    {
        return Tools::toBool($this->data['parseHtmlDesc']);
    }

    public function mostrarWeb2(): bool
    {
        return Tools::toBool($this->data['mostrarweb2']);
    }

    public function mostrarAtributos(): bool
    {
        return Tools::toBool($this->data['mostrar_atributos']);
    }

    public function satUrl(): string
    {
        return $this->data['sat_url'] ?? '';
    }

    public function blogUrl(): string
    {
        return $this->data['blog_url'] ?? '';
    }

    public function portesGratis(): float
    {
        return (float) $this->data['portes_gratis'];
    }

    public function portesEuros(): float
    {
        return (float) $this->data['portes_euros'];
    }

    public function portesSelect(): bool
    {
        return (bool) $this->data['portes_select'];
    }

    public function cPostalFiltro(): string
    {
        return $this->data['cpostal_filtro'] ?? '';
    }

    public function kitDigital(): string
    {
        return (bool) $this->data['kit_digital'];
    }

    private function verify()
    {
        foreach ($this->defaultValues() as $key => $value) {
            if (!array_key_exists($key, $this->data)) {
                $this->data[$key] = $value;
            }
        }

        if (empty($this->data['cookiestxt'])) {
            $this->data['cookiestxt'] = 'Necesitamos descargar cookies en tu navegador para identificar la sesión del usuario aunque este sea totalmente anónimo, por seguridad. No te estamos robando nada, puedes confiar en nosotros, simplemente nos obligan a mostrar el famoso mensaje de las cookies para el cumplimiento de la Directiva2009/136/CE.';
        }
    }

    private function defaultValues(): array
    {
        return [
            'razon_social' => '',
            'cif' => '',
            'direccion' => '',
            'codigo_postal' => '',
            'localidad' => '',
            'provincia' => '',
            'telefono' => '',
            'email' => '',
            'email_cliente_nuevo' => '',
            'email_pedidos' => '',
            'email_copia_pedidos' => '',
            'email_recogida' => '',
            'horario' => '',

            'nombre_web' => '',
            'meta_tags_description' => '',
            'meta_tags_keywords' => '',
            'cookiestxt' => '',
            'footertxt' => '',

            'sat_url' => '',
            'blog_url' => '',
            'validar_cif_registro' => true,

            'mostrar_footer' => true,
            'mostrar_newsletter' => false,
            'mostrar_categorias' => true,
            'mostrar_marcas' => false,
            'mostrar_formulario' => false,
            'mostrar_opiniones' => false,
            'mostrar_garantias' => false,
            'mostrar_info_cms_nav' => true,
            'mostrar_atributos' => false,
            'puntos_fuertes' => true,
            'parseHtmlDesc' => true,
            'slider' => true,
            'slider_height' => 400,
            'slider_size_auto' => false,
            'slider_banner' => false,
            'stock_unificar' => true,
            'stock_remoto' => '',
            'txt_precio_cero' => 'Consultar',
            'cliente_acceso_email' => false,
            'stock_alm_disp' => false,
            'mostrar_unidades' => true,
            'mostrarweb2' => false,
            'tarifa' => 1,
            'tarifa_esp_dto' => 0,
            'estilo' => 'azul',
            'lbl_nostock' => 'Disponible bajo pedido',
            'imagen_logo' => 1,
            'logo_mobile' => '',
            'agente' => 0,
            'banco' => 0,
            'serie_ventas' => '',
            'almacen' => 1,

            'formapago' => 1,
            'imagenes_webp' => false,
            'alta_clientes_web' => true,
            'sat_almacen' => 1,
            'sat_serie' => '',

            'bancotxt' => '',
            'portes_gratis' => 0,
            'portes_euros' => 0,
            'portes_select' => false,
            'latitud' => '0',
            'longitud' => '0',
            'georegion' => 'ES-CO',
            'google_maps' => '',

            'red_facebook' => '',
            'red_twitter' => '',
            'red_youtube' => '',
            'red_skype' => '',
            'red_linkedin' => '',
            'red_whatsapp' => '',
            'red_instagram' => '',

            'smtp_host' => '',
            'smtp_port' => '',
            'smtp_ssl' => true,
            'smtp_mail' => '',
            'smtp_name' => '',
            'smtp_auth' => true,
            'smtp_user' => '',
            'smtp_pwd' => '',

            'redsys_activar' => false,
            'Ds_Merchant_MerchantName' => '',
            'Ds_Merchant_MerchantCode' => '',
            'Ds_Merchant_Terminal' => '',
            'Ds_Merchant_Currency' => '',
            'redsys_url' => '',
            'redsys_tipo_cifrado' => '',
            'redsys_clave_encriptacion' => '',

            'analytics' => '',
            'main_h1_text' => '',
            'bloqueo_venta_sin_stock' => false,
            'valoraciones' => false,
            'formulario_recogida' => false,

            'cpostal_filtro' => '',
            'kit_digital' => false,
            'quienessomosboolean' => false,
            'recursosboolean' => false,
            'promocionesboolean' => false,
        ];
    }
}
