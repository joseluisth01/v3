<?php

namespace App\Twig;

use App\Service\BrandImagesService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class BrandImagesExtension extends AbstractExtension
{
    private $brandImagesService;

    public function __construct(BrandImagesService $brandImagesService)
    {
        $this->brandImagesService = $brandImagesService;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_brand_images', [$this, 'getBrandImages']),
        ];
    }

    public function getBrandImages(): array
    {
        return $this->brandImagesService->getBrandImages();
    }
}
