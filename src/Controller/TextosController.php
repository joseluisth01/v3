<?php

namespace App\Controller;

use App\Entity\WebTextos;
use App\Service\ConfigService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class TextosController extends BaseController
{
    /* @var WebTextos */
    private $regTextos;

    public function __construct(Security $security, ConfigService $config, RequestStack $requestStack)
    {
        parent::__construct($security, $config, $requestStack);
        $this->addTextosWeb = true;
        $this->addCategorias = true;
        $this->regTextos = new WebTextos();
    }

    /**
     * @Route("/textos/{item}", name="textos")
     */
    public function index(string $item): Response
    {
        $this->regTextos->findByUrl($item);

        return $this->render('varios/texto-web.html.twig', ['reg' => $this->regTextos]);
    }

    /**
     * @Route("/politica-privacidad", name="textos-privacidad")
     */
    public function politicaPrivacidad(): Response
    {
        $this->regTextos->findPrivacidad();

        return $this->render('varios/texto-web.html.twig', ['reg' => $this->regTextos]);
    }

    /**
     * @Route("/politica-cookies", name="textos-cookies")
     */
    public function politicaCookies(): Response
    {
        $this->regTextos->findCookies();

        return $this->render('varios/texto-web.html.twig', ['reg' => $this->regTextos]);
    }

    /**
     * @Route("/condiciones-compra", name="textos-condiciones-compra")
     */
    public function condicionesCompra(): Response
    {
        $this->regTextos->findCondicionesCompra();

        return $this->render('varios/texto-web.html.twig', ['reg' => $this->regTextos]);
    }

    /**
     * @Route("/info", name="info")
     */
    public function infoEmpresa(): Response
    {
        return $this->render('varios/info-contacto.html.twig');
    }

    /**
     * @Route("/recursos", name="recursos")
     */
    public function pagrecursos(): Response
    {
        // Obtener la conexión a la base de datos
        $conn = $this->getDoctrine()->getConnection();
    
        // Consultar los recursos de la base de datos
        $sql = "SELECT id, imagen, archivo, fecha_creacion FROM catalogos ORDER BY fecha_creacion DESC";
        $recursos = $conn->fetchAllAssociative($sql);
    
        // Si no hay recursos, usar recursos por defecto
        if (empty($recursos)) {
            $recursosDefault = [
                [
                    'id' => 'default1',
                    'imagen' => 'images/marcas/catalogo3.jpg',
                    'archivo' => 'images/marcas/documentprueba.pdf',
                    'fecha_creacion' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'default2',
                    'imagen' => 'images/marcas/catalogo2.png',
                    'archivo' => 'images/marcas/documentprueba.pdf',
                    'fecha_creacion' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 'default3',
                    'imagen' => 'images/marcas/catalogo3.jpg',
                    'archivo' => 'images/marcas/documentprueba.pdf',
                    'fecha_creacion' => date('Y-m-d H:i:s')
                ]
            ];
    
            // Verificar qué archivos por defecto existen realmente
            $recursos = array_filter($recursosDefault, function($recurso) {
                $rutaImagen = $this->getParameter('kernel.project_dir') . '/public/' . $recurso['imagen'];
                $rutaArchivo = $this->getParameter('kernel.project_dir') . '/public/' . $recurso['archivo'];
                return file_exists($rutaImagen) && file_exists($rutaArchivo);
            });
        }
    
        // Renderizar la vista y pasar los recursos
        return $this->render('varios/recursos.html.twig', [
            'recursos' => $recursos,
            'son_recursos_default' => empty($conn->fetchAllAssociative($sql))
        ]);
    }


    /**
     * @Route("/config/recursos", name="config-recursos", methods={"GET", "POST"})
     */
    public function configRecursos(Request $request): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        if ($request->isMethod('POST')) {
            $id = $request->request->get('id');
            if ($id) {
                // Eliminar el recurso
                $sqlSelect = "SELECT imagen, archivo FROM catalogos WHERE id = :id";
                $recurso = $conn->fetchAssociative($sqlSelect, ['id' => $id]);

                if ($recurso) {
                    // Eliminar archivos físicos
                    $rutaImagen = $this->getParameter('kernel.project_dir') . '/public/' . $recurso['imagen'];
                    $rutaArchivo = $this->getParameter('kernel.project_dir') . '/public/' . $recurso['archivo'];

                    if (file_exists($rutaImagen)) {
                        unlink($rutaImagen);
                    }
                    if (file_exists($rutaArchivo)) {
                        unlink($rutaArchivo);
                    }

                    // Eliminar de la base de datos
                    $sqlDelete = "DELETE FROM catalogos WHERE id = :id";
                    $conn->executeStatement($sqlDelete, ['id' => $id]);

                    $this->addFlash('success', 'Recurso eliminado correctamente.');
                } else {
                    $this->addFlash('error', 'No se encontró el recurso.');
                }
            }
        }

        // Consultar los recursos de la base de datos
        $sql = "SELECT id, imagen, archivo, fecha_creacion FROM catalogos ORDER BY fecha_creacion DESC";
        $recursos = $conn->fetchAllAssociative($sql);

        // Renderizar la vista con los recursos
        return $this->render('admin/config/config-recursos.html.twig', [
            'recursos' => $recursos,
        ]);
    }


    /**
     * @Route("/quienessomos", name="quienessomos")
     */
    public function quienessomos(): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        // Consulta SQL para obtener los datos
        $sql = "SELECT titulo, texto, imagen FROM config_somos LIMIT 1";
        $result = $conn->fetchAssociative($sql);

        // Si no hay datos, asignar valores por defecto
        $data = [
            'titulo' => $result['titulo'] ?? 'Conócenos un poco más',
            'texto' => $result['texto'] ?? '<p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Curabitur ut nisi at nisi pharetra gravida. Integer at arcu euismod, elementum turpis nec, aliquet ligula. Proin consequat, nisi id eleifend facilisis, purus sapien fermentum risus, ac sodales justo orci eget dui.</p>
        
        <p>Ut varius eros a velit sodales, nec convallis justo consequat. Nulla facilisi. Quisque vel tortor vulputate, vestibulum arcu a, tincidunt justo. Etiam aliquam feugiat nunc, nec tempus elit dapibus id.</p>
        
        <p>Duis dignissim sollicitudin sapien, et lacinia magna dictum vel. Mauris interdum viverra purus non aliquet. Sed eget ligula suscipit, vehicula nulla vel, vulputate sem.</p><p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Curabitur ut nisi at nisi pharetra gravida. Integer at arcu euismod, elementum turpis nec, aliquet ligula. Proin consequat, nisi id eleifend facilisis, purus sapien fermentum risus, ac sodales justo orci eget dui.</p>
        
        <p>Ut varius eros a velit sodales, nec convallis justo consequat. Nulla facilisi. Quisque vel tortor vulputate, vestibulum arcu a, tincidunt justo. Etiam aliquam feugiat nunc, nec tempus elit dapibus id.</p>
        
        <p>Duis dignissim sollicitudin sapien, et lacinia magna dictum vel. Mauris interdum viverra purus non aliquet. Sed eget ligula suscipit, vehicula nulla vel, vulputate sem.</p>',
            'imagen' => $result['imagen'] ?? 'images/marcas/equipodefecto.jpg', // Imagen puede ser nula
        ];

        return $this->render('admin/quienessomos.html.twig', $data);
    }


    /**
     * @Route("/configmarcas", name="configmarcas")
     */
    public function configmarcas(): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        // Consulta SQL para obtener las imágenes
        $sql = "SELECT id, imagen FROM config_marcas";
        $imagenes = $conn->fetchAllAssociative($sql);

        // Pasar las imágenes a la vista
        return $this->render('admin/config/configmarcas.html.twig', [
            'imagenes' => $imagenes,
        ]);
    }

    /**
     * @Route("/configmarcas/delete/{id}", name="configmarcas-delete", methods={"POST"})
     */
    public function deleteMarca(int $id): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        // Obtener la ruta de la imagen antes de eliminar
        $sqlSelect = "SELECT imagen FROM config_marcas WHERE id = :id";
        $imagen = $conn->fetchAssociative($sqlSelect, ['id' => $id]);

        if ($imagen) {
            $rutaImagen = $this->getParameter('kernel.project_dir') . '/public/' . $imagen['imagen'];

            // Eliminar el archivo físico
            if (file_exists($rutaImagen)) {
                unlink($rutaImagen);
            }

            // Eliminar la fila de la base de datos
            $sqlDelete = "DELETE FROM config_marcas WHERE id = :id";
            $conn->executeStatement($sqlDelete, ['id' => $id]);

            $this->addFlash('success', 'Imagen eliminada correctamente.');
        } else {
            $this->addFlash('error', 'No se encontró la imagen.');
        }

        return $this->redirectToRoute('configmarcas');
    }

    /**
     * @Route("/config-promociones", name="config-promociones", methods={"GET", "POST"})
     */
    public function pagPromociones(Request $request): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        // Manejar la búsqueda de artículos
        $articulos = [];
        if ($request->isMethod('POST') && $request->request->has('search')) {
            $search = $request->request->get('search');
            $sqlSearch = "SELECT referencia, nombre FROM articulos WHERE nombre ILIKE :search ORDER BY nombre ASC LIMIT 50";
            $articulos = $conn->fetchAllAssociative($sqlSearch, ['search' => '%' . $search . '%']);
        }

        // Manejar la inserción en articulospromociones
        if ($request->isMethod('POST') && $request->request->has('referencia')) {
            $referencia = $request->request->get('referencia');
            $nombre = $request->request->get('nombre');

            $sqlInsert = "INSERT INTO articulospromociones (referencia, nombre) VALUES (:referencia, :nombre)";
            $conn->executeStatement($sqlInsert, [
                'referencia' => $referencia,
                'nombre' => $nombre,
            ]);

            $this->addFlash('success', 'Artículo añadido a promociones correctamente.');
            return $this->redirectToRoute('config-promociones');
        }

        // Manejar la eliminación de artículos de articulospromociones
        if ($request->isMethod('POST') && $request->request->has('delete_id')) {
            $id = $request->request->get('delete_id');

            $sqlDelete = "DELETE FROM articulospromociones WHERE id = :id";
            $conn->executeStatement($sqlDelete, ['id' => $id]);

            $this->addFlash('success', 'Artículo eliminado de promociones correctamente.');
            return $this->redirectToRoute('config-promociones');
        }

        // Consultar los artículos en articulospromociones
        $sqlPromociones = "SELECT id, referencia, nombre, fecha_creacion FROM articulospromociones ORDER BY fecha_creacion DESC";
        $promociones = $conn->fetchAllAssociative($sqlPromociones);

        return $this->render('admin/config/config-promociones.html.twig', [
            'articulos' => $articulos,
            'promociones' => $promociones,
        ]);
    }



    /**
     * @Route("/promociones", name="promociones")
     */
    public function configpromociones(): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        $sqlPromociones = "
        SELECT 
            p.id,
            p.referencia,
            p.nombre,
            p.fecha_creacion,
            pre.precio AS precio
        FROM articulospromociones p
        LEFT JOIN articulos a ON p.referencia = a.referencia
        LEFT JOIN articulos_precios pre ON a.referencia = pre.referencia AND pre.tarifa = :tarifa
        ORDER BY p.fecha_creacion DESC
    ";
        $tarifa = $this->tarifa(); // Obtén la tarifa activa, si es aplicable
        $promociones = $conn->fetchAllAssociative($sqlPromociones, ['tarifa' => $tarifa]);


        return $this->render('varios/promociones.html.twig', [
            'promociones' => $promociones,
        ]);
    }


    /**
     * @Route("/articulo/url/{weburl}", name="articulo")
     */
    /* public function showProducto(string $weburl): Response
{
    $conn = $this->getDoctrine()->getConnection();

    // Extraer la referencia desde el weburl (separa antes del primer guion "-")
    $referencia = explode('-', $weburl, 2)[0];

    // Consultar el producto por su referencia
    $sql = "SELECT referencia, nombre FROM articulos WHERE referencia = :referencia";
    $producto = $conn->fetchAssociative($sql, ['referencia' => $referencia]);

    if (!$producto) {
        throw $this->createNotFoundException('El producto no existe.');
    }

    return $this->render('varios/producto.html.twig', [
        'producto' => $producto,
    ]);
} */
}
