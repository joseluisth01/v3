<?php
namespace App\Service;

use Doctrine\DBAL\Connection;

class BrandImagesService
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getBrandImages(): array
    {
        $sql = "SELECT imagen FROM config_marcas";
        $results = $this->connection->fetchAllAssociative($sql);

        return array_map(function ($row) {
            return $row['imagen']; // Rutas relativas a las imágenes
        }, $results);
    }
}
