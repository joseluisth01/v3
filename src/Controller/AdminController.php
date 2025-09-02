<?php

namespace App\Controller;

use App\Entity\ArticulosCodbarras;
use App\Entity\ArticulosImagenes;
use App\Entity\Empresa;
use App\Entity\EmpresaImagenes;
use App\Entity\WebTextos;
use App\Entity\WebRecogidaTextos;
use App\Entity\WebValoraciones;
use App\Helper\AdminHelper;
use App\Helper\ConfigHelper;
use App\Helper\ImagesHelper;
use App\Library\Sql;
use App\Library\Tools;
use StdClass;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/** @Route("/admin", name="admin") */
class AdminController extends BaseController
{
    /** @Route("/", name="") */
    public function dashboard(): Response
    {
        $conn = $this->getDoctrine()->getConnection();


        $data = [
            'carritos' => AdminHelper::numCarritosAbiertos(),
            'pedidos' => AdminHelper::numPedidosPendientes(),
            'albaranes' => AdminHelper::numAlbaranesPendientes(),
            'clientes' => AdminHelper::numClientes(),
            'month' => Tools::monthName(date('m')),
            'year' => date('Y'),
        ];

        return $this->render('admin/dashboard.html.twig', $data);
    }


    /** @Route("/info-dashboard", name="-dashboard") */
    public function dashBoardData(): JsonResponse
    {
        $month = (int) date('m');
        $year = (int) date('Y');

        $ventas = [];
        for ($i = 2; $i >= 0; --$i) {
            $ventas[] = [
                'year' => $year - $i,
                'info' => AdminHelper::ventasEjercicio($year - $i),
            ];
        }

        $data = [
            'month' => AdminHelper::ventasMes($month, $year),
            'year' => AdminHelper::ventasEjercicio($year),
            'ventas' => $ventas,
        ];

        return new JsonResponse($data);
    }

    /** @Route("/config", name="-config") */
    public function config(KernelInterface $appKernel): Response
    {
        $portes = $this->config->portesEuros();
        $portes = \round($portes * (1 + Empresa::ivaPortes() / 100.0), 2);

        $logoSmall = 'images/logo-small.jpg';

        if (!\file_exists($logoSmall)) {
            $logoSmall = 'images/default/no-image-75.webp';
        }

        $data = [
            'tarifas' => AdminHelper::tarifas(),
            'tarifasEspDto' => AdminHelper::tarifasEspDto(),
            'imagenes' => EmpresaImagenes::listaImagenes(),
            'agentes' => AdminHelper::agentes(),
            'bancos' => AdminHelper::bancos(),
            'series' => AdminHelper::series(),
            'seriesSAT' => AdminHelper::seriesSAT(),
            'almacenes' => AdminHelper::almacenes(),
            'formaspago' => AdminHelper::formasPago(),
            'georegiones' => AdminHelper::geoRegiones(),
            'portes' => $portes,
            'logoSmall' => $logoSmall,
        ];

        return $this->render('admin/config/configuracion.html.twig', $data);
    }

    private function removeGmapsFromArray(array &$array)
    {
        $item = 'gmaps_img';
        if (\in_array($item, $array)) {
            $index = \array_search($item, $array);
            if ($index !== false) {
                \array_splice($array, $index, 1);
            }
        }
    }

    /**
     * @Route("/save", name="-save")
     */
    public function save(Request $request): Response
    {
        $helper = new ConfigHelper();
        $fieldNames = $helper->fieldNames();
        $this->removeGmapsFromArray($fieldNames);

        // Asegurarse de que 'estilo' y 'color_secundario' están en fieldNames
        if (!in_array('estilo', $fieldNames)) {
            $fieldNames[] = 'estilo';
        }
        if (!in_array('color_secundario', $fieldNames)) {
            $fieldNames[] = 'color_secundario';
        }
        if (!in_array('color_tercero', $fieldNames)) {
            $fieldNames[] = 'color_tercero';
        }
        if (!in_array('slider_text_color', $fieldNames)) {
            $fieldNames[] = 'slider_text_color';
        }

        foreach ($fieldNames as $name) {
            if (in_array($name, ['estilo', 'color_secundario', 'color_tercero', 'slider_text_color'])) {
                $color = $request->request->get($name);
    
                // Validar el código hexadecimal del color
                if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $color)) {
                    $this->addFlash('error', 'El código de color ingresado para ' . $name . ' no es válido. Se usará el color predeterminado.');
                    // Definir colores predeterminados según el campo
                    switch ($name) {
                        case 'estilo':
                            $color = '#04569B';
                            break;
                        case 'color_secundario':
                            $color = '#FF5733';
                            break;
                        case 'color_tercero':
                            $color = '#E99712';
                            break;
                        case 'slider_text_color':
                            $color = '#FFFFFF';
                            break;
                    }
                }
                $this->config->data[$name] = $color;
            } else {
                // Procesar los demás campos
                $this->config->data[$name] = $helper->convert($name, $request->request->get($name));
            }
        }

        // Ajustar el valor de 'portes_euros'
        $portes = (float) $this->config->data['portes_euros'];
        $this->config->data['portes_euros'] = $portes / (1 + Empresa::ivaPortes() / 100.0);

        // Guardar la configuración
        $this->config->save();

        // Manejar las imágenes
        $this->saveImageGmaps($request);
        $this->saveImageMobile($request);

        // Redirigir a la página de configuración
        return $this->redirectToRoute('admin-config');
    }




    private function saveImageGmaps(Request $request)
    {
        $fileName =  '/images/gmaps.jpg';
        $file = $request->files->get('gmaps_img');
        if ($file && $file->isValid()) {
            \rename($file->getPathname(), $fileName);
        }
    }

    private function saveImageMobile(Request $request)
    {
        $fileName = 'images/logo-small.jpg';
        $file = $request->files->get('img_mobile');
        if ($file && $file->isValid()) {
            \rename($file->getPathname(), $fileName);
        }
    }

    /**
     * @Route("/textos", name="-textos")
     */
    public function textos(): Response
    {
        $datos = ['textos' => WebTextos::listAll()];

        return $this->render('admin/textos.html.twig', $datos);
    }

    /**
     * @Route("/textos/create", name="-textos-create")
     */
    public function textosCreate(): Response
    {
        WebTextos::createTextosDefault();

        return $this->redirectToRoute('admin-textos');
    }

    /**
     * @Route("/textos-save", name="-textos-save", methods={"POST"})
     */
    public function textosSave(Request $request): Response
    {
        $datos = $request->request->all();

        $codigo = (int) $datos['codigo'];
        $registro = new WebTextos($codigo);
        $registro->setFields($datos);

        $registro->politica_privacidad = \array_key_exists('politica_privacidad', $datos);
        $registro->politica_cookies = \array_key_exists('politica_cookies', $datos);
        $registro->condiciones_compra = \array_key_exists('condiciones_compra', $datos);

        if ($codigo === 0) {
            $registro->mostrar = true;
        }

        if (empty($registro->web_url)) {
            $registro->web_url = $registro->nombre;
        }

        $registro->web_url = ImagesHelper::normalize($registro->web_url);

        $registro->save();

        $this->addFlash('success', 'Registro grabado');

        return $this->redirectToRoute('admin-textos');
    }

    /**
     * @Route("/textos-change", name="-textos-change", methods={"POST"})
     */
    public function textosChange(Request $request): JsonResponse
    {
        if (Tools::codeVerifyOkFromRequest($request, 'id', 'verif')) {
            $registro = new WebTextos($request->request->getInt('id'));
            $registro->mostrar = !$registro->mostrar;
            $registro->update();
        }

        return new JsonResponse(true);
    }

    /**
     * @Route("/textos-delete", name="-textos-delete", methods={"POST"})
     */
    public function textosDelete(Request $request): JsonResponse
    {
        if (Tools::codeVerifyOkFromRequest($request, 'id', 'verif')) {
            $registro = new WebTextos($request->request->getInt('id'));
            $registro->delete();
            $this->addFlash('success', 'Registro eliminado');
        }

        return new JsonResponse(true);
    }

    /**
     * @Route("/images-cache-init", name="-images-cache-init")
     */
    public function imagesCacheInit(): JsonResponse
    {
        $filtroArtMostrarWeb = $this->config->mostrarWeb2() ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        $sqlImagenes = "SELECT count(ai.*)
            FROM articulos art
            LEFT JOIN articulos_imagenes ai ON art.referencia = ai.referencia
            WHERE $filtroArtMostrarWeb";
        $sqlCbarras = "SELECT count(ac.*)
            FROM articulos art
            LEFT JOIN articulos_codbarras ac ON art.referencia = ac.referencia AND ac.codbarras NOT LIKE '2%' AND ac.codbarras NOT LIKE '02%' AND ac.codbarras NOT LIKE '04%'
            WHERE $filtroArtMostrarWeb AND ac.imagen != 0";

        $numArt = (int) Sql::selectEscalar($sqlImagenes);
        $numCB = (int) Sql::selectEscalar($sqlCbarras);

        $this->session->set('img-cache-art-total', $numArt);
        $this->session->set('img-cache-cb-total', $numCB);
        $this->session->set('img-cache-art-actual', 0);
        $this->session->set('img-cache-cb-actual', 0);

        return new JsonResponse(['artTotal' => $numArt, 'cbTotal' => $numCB]);
    }

    private function imagesGetCounters(): object
    {
        $obj = new StdClass();
        $obj->artTotal = (int) $this->session->get('img-cache-art-total');
        $obj->artActual = (int) $this->session->get('img-cache-art-actual');
        $obj->cbTotal = (int) $this->session->get('img-cache-cb-total');
        $obj->cbActual = (int) $this->session->get('img-cache-cb-actual');

        return $obj;
    }

    /**
     * @Route("/images-cache-process/", name="-images-cache-process")
     */
    public function imagesCacheProcess(): JsonResponse
    {
        set_time_limit(0);
        $filtroArtMostrarWeb = $this->config->mostrarWeb2() ? 'art.mostrarweb2 = true' : 'art.mostrarweb = 1';

        $counter = $this->imagesGetCounters();

        if ($counter->artTotal > $counter->artActual) {
            $sql = "SELECT ai.referencia, ai.orden
                FROM articulos art
                LEFT JOIN articulos_imagenes ai ON art.referencia = ai.referencia
                WHERE $filtroArtMostrarWeb
                ORDER BY ai.referencia, ai.orden  LIMIT 1 OFFSET $counter->artActual";
            $data = Sql::select($sql);
            ArticulosImagenes::getImage($data['referencia'], 1000, $data['orden']);
            $this->session->set('img-cache-art-actual', ++$counter->artActual);
        } elseif ($counter->cbTotal > $counter->cbActual) {
            $sql = "SELECT ac.codbarras
                FROM articulos art
                LEFT JOIN articulos_codbarras ac ON art.referencia = ac.referencia AND ac.codbarras NOT LIKE '2%' AND ac.codbarras NOT LIKE '02%' AND ac.codbarras NOT LIKE '04%'
                WHERE $filtroArtMostrarWeb AND ac.imagen != 0
                ORDER BY ac.codbarras  LIMIT 1 OFFSET $counter->cbActual";
            $data = Sql::select($sql);
            ArticulosCodbarras::getImage($data['codbarras'], 1000);
            $this->session->set('img-cache-cb-actual', ++$counter->cbActual);
        }

        return new JsonResponse($counter);
    }

    /**
     * @Route("/valoraciones", name="-valoraciones")
     */
    public function valoraciones(): Response
    {
        return $this->render('admin/valoraciones.html.twig');
    }

    /**
     * @Route("/valoraciones/aprueba/{id}", name="-val-aprueba")
     */
    public function valoracionAprueba(int $id): JsonResponse
    {
        WebValoraciones::cambiaEstado($id, 1, $this->user->getId());
        return new JsonResponse(true);
    }

    /**
     * @Route("/valoraciones/rechaza/{id}", name="-val-rechaza")
     */
    public function valoracionRechaza(int $id): JsonResponse
    {
        WebValoraciones::cambiaEstado($id, -1, $this->user->getId());
        return new JsonResponse(true);
    }

    /**
     * @Route("/form-rec", name="-form-rec")
     */
    public function formRecogida(): Response
    {
        $reg = new WebRecogidaTextos();
        $reg->read();
        $datos = [
            'cabecera' => $reg->cabecera,
            'pie' => $reg->pie
        ];
        return $this->render('admin/form-recogida.html.twig', $datos);
    }

    /**
     * @Route("/form-rec/save", name="-form-rec-save")
     */
    public function formRecogidaSave(Request $request): Response
    {
        WebRecogidaTextos::saveText($request->request->get('cabecera'), $request->request->get('pie'));
        return $this->redirectToRoute('admin-form-rec');
    }

    /**
     * @Route("/add-opinion", name="add-opinion", methods={"POST"})
     */
    public function addOpinion(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            $nombre = $data['nombre'] ?? null;
            $tiempo = $data['tiempo'] ?? null;
            $rating = (int)($data['rating'] ?? 0);
            $texto = $data['texto'] ?? null;
            $avatar = strtoupper(substr($data['avatar'] ?? '', 0, 1));

            // Validación
            if (empty($nombre) || empty($tiempo) || empty($texto) || $rating < 1 || $rating > 5 || empty($avatar)) {
                return new JsonResponse(['error' => 'Datos inválidos'], Response::HTTP_BAD_REQUEST);
            }

            // Insertar en la base de datos
            $conn = $this->getDoctrine()->getConnection();
            $sql = "INSERT INTO opiniones (nombre, tiempo, rating, texto, avatar) VALUES (:nombre, :tiempo, :rating, :texto, :avatar)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                'nombre' => $nombre,
                'tiempo' => $tiempo,
                'rating' => $rating,
                'texto' => $texto,
                'avatar' => $avatar,
            ]);

            return new JsonResponse(['success' => 'Opinión agregada con éxito'], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @Route("/manage-opinions", name="manage-opinions", methods={"GET", "POST"})
     */
    public function manageOpinions(Request $request): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        // Si el formulario POST envía un ID, eliminar la opinión
        if ($request->isMethod('POST') && $request->request->get('opinion_id')) {
            $id = $request->request->get('opinion_id');
            $sql = "DELETE FROM opiniones WHERE id = :id";
            $conn->executeStatement($sql, ['id' => $id]);
        }

        // Obtener todas las opiniones para mostrarlas
        $sql = "SELECT id, nombre, rating FROM opiniones";
        $opiniones = $conn->fetchAllAssociative($sql);

        return $this->render('admin/config/manage-opinions.html.twig', [
            'opiniones' => $opiniones,
        ]);
    }

    /**
     * @Route("/config/quienes-somos", name="config-quienes-somos", methods={"GET"})
     */
    public function configQuienesSomos(): Response
    {
        // Obtener la conexión a la base de datos
        $conn = $this->getDoctrine()->getConnection();

        // Recuperar la primera fila de la tabla "config_somos"
        $sql = "SELECT titulo, texto, imagen FROM config_somos LIMIT 1";
        $result = $conn->fetchAssociative($sql);

        // Texto por defecto en formato HTML
        $defaultText = '<p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Curabitur ut nisi at nisi pharetra gravida. Integer at arcu euismod, elementum turpis nec, aliquet ligula. Proin consequat, nisi id eleifend facilisis, purus sapien fermentum risus, ac sodales justo orci eget dui.</p>
        
        <p>Ut varius eros a velit sodales, nec convallis justo consequat. Nulla facilisi. Quisque vel tortor vulputate, vestibulum arcu a, tincidunt justo. Etiam aliquam feugiat nunc, nec tempus elit dapibus id.</p>
        
        <p>Duis dignissim sollicitudin sapien, et lacinia magna dictum vel. Mauris interdum viverra purus non aliquet. Sed eget ligula suscipit, vehicula nulla vel, vulputate sem.</p>';

        // Si no hay datos, se establecen valores por defecto
        $data = [
            'titulo' => $result['titulo'] ?? 'Conócenos un poco más',
            'texto' => $result['texto'] ?? $defaultText,
            'imagen' => $result['imagen'] ?? 'images/default/quienes-somos-default.jpg'  // Imagen por defecto
        ];

        return $this->render('admin/config/config-quienes-somos.html.twig', $data);
    }


    /**
     * @Route("/config-marcas/add", name="config-marcas-add", methods={"POST"})
     */
    public function addMarcaImagen(Request $request, LoggerInterface $logger): RedirectResponse
    {
        try {
            // Capturar el archivo de imagen
            $imagenFile = $request->files->get('marca_imagen');

            // Validar si existe la imagen
            if (!$imagenFile || !$imagenFile->isValid()) {
                $this->addFlash('error', 'La imagen seleccionada no es válida.');
                return $this->redirectToRoute('configmarcas');
            }

            // Generar un nombre único para la imagen
            $nombreUnico = uniqid() . '.' . $imagenFile->guessExtension();
            $rutaImagen = 'uploads/marcas/' . $nombreUnico;

            // Mover la imagen al directorio
            $imagenFile->move($this->getParameter('uploads_directory') . '/marcas', $nombreUnico);

            // Guardar en la base de datos
            $conn = $this->getDoctrine()->getConnection();
            $sql = "INSERT INTO config_marcas (imagen) VALUES (:imagen)";
            $conn->executeStatement($sql, ['imagen' => $rutaImagen]);

            // Mensaje de éxito
            $this->addFlash('success', 'Imagen de marca subida correctamente.');

            return $this->redirectToRoute('configmarcas');
        } catch (\Exception $e) {
            $logger->error('Error al subir la imagen: ' . $e->getMessage());
            $this->addFlash('error', 'Error al subir la imagen. Inténtalo de nuevo.');
            return $this->redirectToRoute('configmarcas');
        }
    }



    /**
     * @Route("/config-somos/add", name="-config-somos-add", methods={"POST"})
     */
    public function addConfigSomos(Request $request, LoggerInterface $logger): RedirectResponse
    {
        try {
            $titulo = $request->request->get('somos_titulo');
            $texto = $request->request->get('somos_texto');
            $imagenFile = $request->files->get('somos_imagen'); // Capturar archivo

            // Validación de campos vacíos
            if (empty($titulo) || empty($texto)) {
                $this->addFlash('error', 'Campos vacíos');
                return $this->redirectToRoute('admin-config-somos'); // Redirige a la vista actual
            }

            // Subida de la imagen
            $imagenPath = null;
            if ($imagenFile && $imagenFile->isValid()) {
                $nombreUnico = uniqid() . '.' . $imagenFile->guessExtension();
                $imagenPath = 'uploads/quienes-somos/' . $nombreUnico;
                $imagenFile->move($this->getParameter('uploads_directory') . '/quienes-somos', $nombreUnico);
            }

            // Obtener la conexión a la base de datos
            $conn = $this->getDoctrine()->getConnection();

            // Verificar si ya existe una fila en la tabla
            $sqlCheck = "SELECT COUNT(*) as total FROM config_somos";
            $result = $conn->fetchAssociative($sqlCheck);
            $filaExiste = $result['total'] > 0;

            if ($filaExiste) {
                $sqlUpdate = "UPDATE config_somos SET titulo = :titulo, texto = :texto, imagen = :imagen WHERE id = (SELECT id FROM config_somos LIMIT 1)";
                $conn->executeStatement($sqlUpdate, ['titulo' => $titulo, 'texto' => $texto, 'imagen' => $imagenPath]);
            } else {
                $sqlInsert = "INSERT INTO config_somos (titulo, texto, imagen) VALUES (:titulo, :texto, :imagen)";
                $conn->executeStatement($sqlInsert, ['titulo' => $titulo, 'texto' => $texto, 'imagen' => $imagenPath]);
            }

            $this->addFlash('success', 'Datos guardados correctamente');
            return $this->redirectToRoute('adminconfig-quienes-somos'); // Redirige a la vista actual
        } catch (\Exception $e) {
            $logger->error('Error: ' . $e->getMessage());
            $this->addFlash('error', 'Error interno del servidor');
            return $this->redirectToRoute('adminconfig-quienes-somos'); // Redirige a la vista actual
        }
    }




    /**
     * @Route("/config/recursos/add", name="config-recursos-add", methods={"POST"})
     */
    public function addRecurso(Request $request): RedirectResponse
    {
        $conn = $this->getDoctrine()->getConnection();

        try {
            // Manejo de imagen
            $imagenFile = $request->files->get('imagen');
            $archivoFile = $request->files->get('archivo');

            if (!$imagenFile || !$archivoFile || !$imagenFile->isValid() || !$archivoFile->isValid()) {
                $this->addFlash('error', 'Ambos archivos deben ser válidos.');
                return $this->redirectToRoute('config-recursos');
            }

            // Procesar imagen
            $imagenNombre = uniqid() . '.' . $imagenFile->guessExtension();
            $imagenPath = 'uploads/catalogos/' . $imagenNombre;
            $imagenFile->move($this->getParameter('uploads_directory') . '/catalogos', $imagenNombre);

            // Procesar archivo
            $archivoNombre = uniqid() . '.' . $archivoFile->guessExtension();
            $archivoPath = 'uploads/catalogos/' . $archivoNombre;
            $archivoFile->move($this->getParameter('uploads_directory') . '/catalogos', $archivoNombre);

            // Insertar en la base de datos
            $sql = "INSERT INTO catalogos (imagen, archivo) VALUES (:imagen, :archivo)";
            $conn->executeStatement($sql, ['imagen' => $imagenPath, 'archivo' => $archivoPath]);

            $this->addFlash('success', 'Recurso agregado correctamente.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error al agregar el recurso.');
        }

        return $this->redirectToRoute('config-recursos');
    }
}
