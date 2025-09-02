<?php

namespace App\Twig;

use App\Entity\ArticulosImagenes;
use App\Entity\WebImagenes;
use App\Library\Tools;
use App\Service\ConfigService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice'], ['is_safe' => ['html']]),
            new TwigFilter('pricenz', [$this, 'formatPriceNotZero'], ['is_safe' => ['html']]),
            new TwigFilter('toHex', [$this, 'toHex']),
            new TwigFilter('url_decode', [$this, 'urlDecode']),
        ];
    }

    public function getFunctions(): array
    {
        return  [
            new TwigFunction('getStock', [$this, 'getStock']),
            new TwigFunction('batteryStock', [$this, 'getBatteryStock']),
            new TwigFunction('battery', [$this, 'getBattery']),
            new TwigFunction('getImageArt', [$this, 'getImageArt']),
            new TwigFunction('getFooterImages', [$this, 'getFooterImages']),
            new TwigFunction('htmlGetText', [$this, 'htmlGetText']),
            new TwigFunction('parseHtmlText', [$this, 'parseHtmlText']),
            new TwigFunction('logoMobile', [$this, 'getLogoSmall']),
            new TwigFunction('placeholderLogin', [$this, 'placeholderLogin']),
        ];
    }

    public function placeholderLogin(): string
    {
        if ($this->config->clienteAccesoEmail()) {
            return 'Correo electrónico';
        }

        return 'Correo electrónico o NIF';
    }

    public function formatPrice($number, $decimals = 2): string
    {
        return number_format($number, $decimals, ',', '.').'&nbsp;&euro;';
    }

    public function formatPriceNotZero($number, $decimals = 2): string
    {
        if (empty($number)) {
            return $this->config->txtPrecioCero();
        }

        return $this->formatPrice($number, $decimals);
    }

    public function toHex($text): string
    {
        return bin2hex($text);
    }

    public function urlDecode(string $url): string
    {
        return urldecode($url);
    }

    public function getStock($stock, $virtual): string
    {
        if ($this->config->stockUnificar()) {
            $stock += $virtual;
        }
        return $stock;
    }


    public function getBatteryStock($stock, $virtual, bool $controlStock): string
    {
        if ($this->config->stockUnificar()) {
            $stock += $virtual;
        }

        $linkSEO = '<link itemprop="availability" href="https://schema.org/InStock"/>';

        if (!$controlStock) {
            return '<i class="mdi mdi-battery-high text-success" title="Disponible"></i><small>Disponible</small>';
        } elseif ($stock > 0) {
            if ($this->config->mostrarUnidades()) {
                $lgText = $stock == 1 ? 'unidad disponible' : 'unidades disponibles';
                $smText = $stock == 1 ? 'ud' : 'uds';

                return "<i class=\"mdi mdi-battery-high text-success\" title=\"$stock $lgText\"></i><small>$linkSEO$stock $smText</small>";
            }

            return '<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" width="25px" class="iconodisponible">
									<title>package-variant-closed-check</title>
									<path d="M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z"/>
								</svg><small class="disponible">Disponible</small>';
        }

        return '<span class="iconosinstock mdi mdi-package-variant-remove"></span><small class="disponible">Sin stock</small>';
    }

    public function getBattery($stock, $virtual, bool $controlStock): string
    {
        if ($this->config->stockUnificar()) {
            $stock += $virtual;
        }

        if (!$controlStock || $stock > 0) {
            return '<i class="mdi mdi-18px mdi-battery-high text-success" title="Disponible"></i>';
        }

        return '<i class="mdi mdi-18px mdi-battery-low text-danger" title="Sin stock"></i>';
    }

    public function getImageArt(string $referencia, int $resolucion, int $orden): string
    {
        return ArticulosImagenes::getImage($referencia, $resolucion, $orden);
    }

    public function getFooterImages(): array
    {
        return WebImagenes::getFooterImages();
    }

    public function htmlGetText(string $html): string
    {
        return Tools::htmlGetText($html);
    }

    public function parseHtmlText(string $text, bool $parse): string
    {
        return $parse ? Tools::parseHtmlText($text) : $text;
    }

    public function getLogoSmall(string $defaultImage): string
    {
        $fileName='images/logo-small.jpg';
        return is_file($fileName) ? $fileName : $defaultImage;
    }
}
