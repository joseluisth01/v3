<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/info-dashboard' => [[['_route' => 'admin-dashboard', '_controller' => 'App\\Controller\\AdminController::dashBoardData'], null, null, null, false, false, null]],
        '/admin/config' => [[['_route' => 'admin-config', '_controller' => 'App\\Controller\\AdminController::config'], null, null, null, false, false, null]],
        '/admin/save' => [[['_route' => 'admin-save', '_controller' => 'App\\Controller\\AdminController::save'], null, null, null, false, false, null]],
        '/admin/textos' => [[['_route' => 'admin-textos', '_controller' => 'App\\Controller\\AdminController::textos'], null, null, null, false, false, null]],
        '/admin/textos/create' => [[['_route' => 'admin-textos-create', '_controller' => 'App\\Controller\\AdminController::textosCreate'], null, null, null, false, false, null]],
        '/admin/textos-save' => [[['_route' => 'admin-textos-save', '_controller' => 'App\\Controller\\AdminController::textosSave'], null, ['POST' => 0], null, false, false, null]],
        '/admin/textos-change' => [[['_route' => 'admin-textos-change', '_controller' => 'App\\Controller\\AdminController::textosChange'], null, ['POST' => 0], null, false, false, null]],
        '/admin/textos-delete' => [[['_route' => 'admin-textos-delete', '_controller' => 'App\\Controller\\AdminController::textosDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/images-cache-init' => [[['_route' => 'admin-images-cache-init', '_controller' => 'App\\Controller\\AdminController::imagesCacheInit'], null, null, null, false, false, null]],
        '/admin/images-cache-process' => [[['_route' => 'admin-images-cache-process', '_controller' => 'App\\Controller\\AdminController::imagesCacheProcess'], null, null, null, true, false, null]],
        '/admin/valoraciones' => [[['_route' => 'admin-valoraciones', '_controller' => 'App\\Controller\\AdminController::valoraciones'], null, null, null, false, false, null]],
        '/admin/form-rec' => [[['_route' => 'admin-form-rec', '_controller' => 'App\\Controller\\AdminController::formRecogida'], null, null, null, false, false, null]],
        '/admin/form-rec/save' => [[['_route' => 'admin-form-rec-save', '_controller' => 'App\\Controller\\AdminController::formRecogidaSave'], null, null, null, false, false, null]],
        '/admin/add-opinion' => [[['_route' => 'adminadd-opinion', '_controller' => 'App\\Controller\\AdminController::addOpinion'], null, ['POST' => 0], null, false, false, null]],
        '/admin/manage-opinions' => [[['_route' => 'adminmanage-opinions', '_controller' => 'App\\Controller\\AdminController::manageOpinions'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/config/quienes-somos' => [[['_route' => 'adminconfig-quienes-somos', '_controller' => 'App\\Controller\\AdminController::configQuienesSomos'], null, ['GET' => 0], null, false, false, null]],
        '/admin/config-marcas/add' => [[['_route' => 'adminconfig-marcas-add', '_controller' => 'App\\Controller\\AdminController::addMarcaImagen'], null, ['POST' => 0], null, false, false, null]],
        '/admin/config-somos/add' => [[['_route' => 'admin-config-somos-add', '_controller' => 'App\\Controller\\AdminController::addConfigSomos'], null, ['POST' => 0], null, false, false, null]],
        '/admin/config/recursos/add' => [[['_route' => 'adminconfig-recursos-add', '_controller' => 'App\\Controller\\AdminController::addRecurso'], null, ['POST' => 0], null, false, false, null]],
        '/articulo/lista' => [[['_route' => 'articulo-lista', '_controller' => 'App\\Controller\\ArticuloController::lista'], null, null, null, false, false, null]],
        '/art-valoracion/save' => [[['_route' => 'art-valoracion-save', '_controller' => 'App\\Controller\\ArticuloValoracionController::save'], null, ['POST' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart-view', '_controller' => 'App\\Controller\\CarritoController::index'], null, null, null, true, false, null]],
        '/cart/add' => [[['_route' => 'cart-add', '_controller' => 'App\\Controller\\CarritoController::add'], null, null, null, false, false, null]],
        '/cart/update' => [[['_route' => 'cart-update', '_controller' => 'App\\Controller\\CarritoController::update'], null, ['POST' => 0], null, false, false, null]],
        '/cart/delete' => [[['_route' => 'cart-delete', '_controller' => 'App\\Controller\\CarritoController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/cart/pedido/borrar' => [[['_route' => 'cart-pedido-borrar', '_controller' => 'App\\Controller\\CarritoController::borraCarrito'], null, null, null, false, false, null]],
        '/cart/recoger-tienda' => [[['_route' => 'cart-pedido-recoger-tienda', '_controller' => 'App\\Controller\\CarritoController::cambiaRecogida'], null, ['POST' => 0], null, false, false, null]],
        '/cart/pedido/grabar' => [[['_route' => 'cart-pedido-grabar', '_controller' => 'App\\Controller\\CarritoController::grabarPedido'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/registro' => [[['_route' => 'cliente-registro', '_controller' => 'App\\Controller\\ClienteController::index'], null, null, null, false, false, null]],
        '/cliente/registro/grabar' => [[['_route' => 'cliente-registro-grabar', '_controller' => 'App\\Controller\\ClienteController::grabaNuevoCliente'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/lista' => [[['_route' => 'cliente-lista', '_controller' => 'App\\Controller\\ClienteController::lista'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/save' => [[['_route' => 'cliente-save', '_controller' => 'App\\Controller\\ClienteController::grabaCliente'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/mis_datos' => [[['_route' => 'cliente-mis-datos', '_controller' => 'App\\Controller\\ClienteController::editDatosCliente'], null, null, null, false, false, null]],
        '/cliente/actualizar' => [[['_route' => 'cliente-actualizar', '_controller' => 'App\\Controller\\ClienteController::actualizaCliente'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/existe' => [[['_route' => 'cliente-existe', '_controller' => 'App\\Controller\\ClienteController::existeEmail'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/existe-otro' => [[['_route' => 'cliente-existe-otro', '_controller' => 'App\\Controller\\ClienteController::existeEmailOtroCliente'], null, ['POST' => 0], null, false, false, null]],
        '/cliente/cpostal-ok' => [[['_route' => 'cliente-cpostal-ok', '_controller' => 'App\\Controller\\ClienteController::cPostalOk'], null, ['POST' => 0], null, false, false, null]],
        '/documentos/callback-pay' => [[['_route' => 'cobro-realizado', '_controller' => 'App\\Controller\\CobroController::cobroRealizado'], null, null, null, false, false, null]],
        '/vencimiento/callback-pay' => [[['_route' => 'vto-cobro-realizado', '_controller' => 'App\\Controller\\CobroVencimientoController::cobroRealizado'], null, null, null, false, false, null]],
        '/documentos/lista' => [[['_route' => 'documentos-lista', '_controller' => 'App\\Controller\\DocumentosController::lista'], null, ['POST' => 0], null, false, false, null]],
        '/gestion' => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\GestionController::index'], null, null, null, true, false, null]],
        '/gestion/lineas/lista' => [[['_route' => 'gestion-lineas-lista', '_controller' => 'App\\Controller\\GestionController::listaLineas'], null, null, null, false, false, null]],
        '/gestion/cliente/seleccion' => [[['_route' => 'gestion-seleccion-cliente', '_controller' => 'App\\Controller\\GestionController::cambioCliente'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/articulo/get' => [[['_route' => 'gestion-articulo-get', '_controller' => 'App\\Controller\\GestionController::leeArticulo'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/linea/update' => [[['_route' => 'gestion-linea/update', '_controller' => 'App\\Controller\\GestionController::actualizaUnidades'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/linea/delete' => [[['_route' => 'gestion-linea-delete', '_controller' => 'App\\Controller\\GestionController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/carritos/lista' => [[['_route' => 'gestion-carritos-lista', '_controller' => 'App\\Controller\\GestionController::listaCarritos'], null, null, null, false, false, null]],
        '/gestion/carrito/borra' => [[['_route' => 'gestion-carrito-borra', '_controller' => 'App\\Controller\\GestionController::carritoBorrar'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/cliente/carrito/borra' => [[['_route' => 'gestion-cliente-carrito-borra', '_controller' => 'App\\Controller\\GestionController::carritoClienteBorrar'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/carrito/email' => [[['_route' => 'gestion-carrito-email', '_controller' => 'App\\Controller\\GestionController::carritoEmail'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/pedido/grabar' => [[['_route' => 'gestion-pedido-grabar', '_controller' => 'App\\Controller\\GestionController::grabarPedido'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/albaran/grabar' => [[['_route' => 'gestion-albaran-grabar', '_controller' => 'App\\Controller\\GestionController::grabarAlbaran'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/suscribe' => [[['_route' => 'suscribe-newsletter', '_controller' => 'App\\Controller\\MainController::suscripcion'], null, ['POST' => 0], null, false, false, null]],
        '/password_reset_2' => [[['_route' => 'password-reset-2', '_controller' => 'App\\Controller\\PasswordResetController::index2'], null, null, null, false, false, null]],
        '/password_reset' => [[['_route' => 'password-reset', '_controller' => 'App\\Controller\\PasswordResetController::index'], null, null, null, false, false, null]],
        '/password_reset_ok' => [[['_route' => 'password-reset-ok', '_controller' => 'App\\Controller\\PasswordResetController::emailEnviado'], null, null, null, false, false, null]],
        '/password_change' => [[['_route' => 'password-change', '_controller' => 'App\\Controller\\PasswordResetController::cambioClave'], null, null, null, false, false, null]],
        '/recogida/test' => [[['_route' => 'recogida/test', '_controller' => 'App\\Controller\\RecogidaController::test'], null, null, null, false, false, null]],
        '/recogida' => [[['_route' => 'recogida', '_controller' => 'App\\Controller\\RecogidaController::index'], null, null, null, false, false, null]],
        '/recogida/save' => [[['_route' => 'recogida-save', '_controller' => 'App\\Controller\\RecogidaController::save'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/robots.txt' => [[['_route' => 'robots-txt', '_controller' => 'App\\Controller\\SitemapController::robots'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap-xml', '_controller' => 'App\\Controller\\SitemapController::sitemap'], null, null, null, false, false, null]],
        '/politica-privacidad' => [[['_route' => 'textos-privacidad', '_controller' => 'App\\Controller\\TextosController::politicaPrivacidad'], null, null, null, false, false, null]],
        '/politica-cookies' => [[['_route' => 'textos-cookies', '_controller' => 'App\\Controller\\TextosController::politicaCookies'], null, null, null, false, false, null]],
        '/condiciones-compra' => [[['_route' => 'textos-condiciones-compra', '_controller' => 'App\\Controller\\TextosController::condicionesCompra'], null, null, null, false, false, null]],
        '/info' => [[['_route' => 'info', '_controller' => 'App\\Controller\\TextosController::infoEmpresa'], null, null, null, false, false, null]],
        '/recursos' => [[['_route' => 'recursos', '_controller' => 'App\\Controller\\TextosController::pagrecursos'], null, null, null, false, false, null]],
        '/config/recursos' => [[['_route' => 'config-recursos', '_controller' => 'App\\Controller\\TextosController::configRecursos'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quienessomos' => [[['_route' => 'quienessomos', '_controller' => 'App\\Controller\\TextosController::quienessomos'], null, null, null, false, false, null]],
        '/configmarcas' => [[['_route' => 'configmarcas', '_controller' => 'App\\Controller\\TextosController::configmarcas'], null, null, null, false, false, null]],
        '/config-promociones' => [[['_route' => 'config-promociones', '_controller' => 'App\\Controller\\TextosController::pagPromociones'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promociones' => [[['_route' => 'promociones', '_controller' => 'App\\Controller\\TextosController::configpromociones'], null, null, null, false, false, null]],
        '/tools' => [[['_route' => 'tools', '_controller' => 'App\\Controller\\ToolsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/valoraciones/(?'
                        .'|aprueba/([^/]++)(*:211)'
                        .'|rechaza/([^/]++)(*:235)'
                    .')'
                    .'|rt(?'
                        .'|iculo/(?'
                            .'|url/([^/]++)(*:270)'
                            .'|get/([^/]++)(*:290)'
                            .'|documento/([^/]++)(*:316)'
                        .')'
                        .'|\\-valoracion/(?'
                            .'|list(?'
                                .'|/([^/]++)(?:/([^/]++))?(*:371)'
                                .'|\\-art/([^/]++)(?:/([^/]++))?(*:407)'
                            .')'
                            .'|new/([^/]++)(*:428)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/add\\-ok/(\\d+)(*:464)'
                        .'|tegoria\\-grid/([^/]++)(*:494)'
                    .')'
                    .'|liente(?'
                        .'|/(?'
                            .'|registro/confirmacion(?'
                                .'|/([^/]++)(*:549)'
                                .'|2/([^/]++)(*:567)'
                            .')'
                            .'|seleccion(?'
                                .'|(?:/(.+))?(*:598)'
                                .'|(*:606)'
                            .')'
                            .'|edit(?:/(\\d+))?(*:630)'
                        .')'
                        .'|\\-top(?:/(\\d+)(?:/(\\d+))?)?(*:666)'
                    .')'
                    .'|onfigmarcas/delete/([^/]++)(*:702)'
                .')'
                .'|/documentos(?'
                    .'|/cobro/(\\d+)(*:737)'
                    .'|(?:/(\\d+))?(*:756)'
                    .'|/(?'
                        .'|view/(\\d+)(?:/([^/]++))?(*:792)'
                        .'|llamadas/(\\d+)(?:/(\\d+)(?:/(\\d+))?)?(*:836)'
                        .'|print(?'
                            .'|/(\\d+)(*:858)'
                            .'|\\-llamadas/(\\d+)/(\\d+)/(\\d+)(*:894)'
                        .')'
                    .')'
                .')'
                .'|/vencimiento/cobro/(\\d+)(*:929)'
                .'|/familia(?'
                    .'|/(.+)(*:953)'
                    .'|\\-grid/(.+)(*:972)'
                .')'
                .'|/gestion/add\\-art/([^/]++)/([^/]++)(*:1016)'
                .'|/marca\\-grid/([^/]++)(*:1046)'
                .'|/password_new/(.+)(*:1073)'
                .'|/s(?'
                    .'|earch(?:/(\\d+)(?:/(\\d+))?)?(*:1114)'
                    .'|ubfamilia/(.+)(*:1137)'
                .')'
                .'|/t(?'
                    .'|extos/([^/]++)(*:1166)'
                    .'|ools/get\\-php/([^/]++)(*:1197)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        211 => [[['_route' => 'admin-val-aprueba', '_controller' => 'App\\Controller\\AdminController::valoracionAprueba'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'admin-val-rechaza', '_controller' => 'App\\Controller\\AdminController::valoracionRechaza'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'articulo', '_controller' => 'App\\Controller\\ArticuloController::index'], ['weburl'], null, null, false, true, null]],
        290 => [[['_route' => 'articulo-get', '_controller' => 'App\\Controller\\ArticuloController::getArticulo'], ['weburl'], null, null, false, true, null]],
        316 => [[['_route' => 'articulo-documento', '_controller' => 'App\\Controller\\ArticuloController::documento'], ['weburl'], null, null, false, true, null]],
        371 => [[['_route' => 'art-valoracion-list', 'orden' => '\'best\'', '_controller' => 'App\\Controller\\ArticuloValoracionController::getList'], ['estado', 'orden'], null, null, false, true, null]],
        407 => [[['_route' => 'art-valoracion-list-art', 'orden' => '\'best\'', '_controller' => 'App\\Controller\\ArticuloValoracionController::getListReferencia'], ['referencia', 'orden'], null, null, false, true, null]],
        428 => [[['_route' => 'art-valoracion-new', '_controller' => 'App\\Controller\\ArticuloValoracionController::newRating'], ['weburl'], null, null, false, true, null]],
        464 => [[['_route' => 'cart-add-ok', '_controller' => 'App\\Controller\\CarritoController::addOk'], ['idLin'], null, null, false, true, null]],
        494 => [[['_route' => 'categoria-grid', '_controller' => 'App\\Controller\\CategoriaGridController::index'], ['webUrl'], null, null, false, true, null]],
        549 => [[['_route' => 'cliente-registro-confirmacion', '_controller' => 'App\\Controller\\ClienteController::confirmacionRegistro'], ['uuid'], null, null, false, true, null]],
        567 => [[['_route' => 'cliente-registro-confirmacion2', '_controller' => 'App\\Controller\\ClienteController::emailEmpresaClienteNuevo'], ['codigo'], null, null, false, true, null]],
        598 => [[['_route' => 'cliente-seleccion', 'param' => '', '_controller' => 'App\\Controller\\ClienteController::seleccionFull'], ['param'], ['GET' => 0], null, false, true, null]],
        606 => [[['_route' => 'cliente-seleccion-post', '_controller' => 'App\\Controller\\ClienteController::cambioCliente'], [], ['POST' => 0], null, false, false, null]],
        630 => [[['_route' => 'cliente-edit', 'codigo' => '0', '_controller' => 'App\\Controller\\ClienteController::edit'], ['codigo'], null, null, false, true, null]],
        666 => [[['_route' => 'cliente-top', 'page' => '1', 'itemsPage' => '12', '_controller' => 'App\\Controller\\ClienteTopController::index'], ['page', 'itemsPage'], null, null, false, true, null]],
        702 => [[['_route' => 'configmarcas-delete', '_controller' => 'App\\Controller\\TextosController::deleteMarca'], ['id'], ['POST' => 0], null, false, true, null]],
        737 => [[['_route' => 'cobro', '_controller' => 'App\\Controller\\CobroController::index'], ['id'], null, null, false, true, null]],
        756 => [[['_route' => 'documentos', 'tipo' => '0', '_controller' => 'App\\Controller\\DocumentosController::index'], ['tipo'], null, null, false, true, null]],
        792 => [[['_route' => 'documentos-view', 'esCobro' => false, '_controller' => 'App\\Controller\\DocumentosController::viewDocument'], ['id', 'esCobro'], null, null, false, true, null]],
        836 => [[['_route' => 'documentos-llamadas', 'contrato' => '0', 'facturables' => '1', '_controller' => 'App\\Controller\\DocumentosController::viewLlamadas'], ['factura', 'contrato', 'facturables'], null, null, false, true, null]],
        858 => [[['_route' => 'documentos-print', '_controller' => 'App\\Controller\\DocumentosController::printDocument'], ['id'], null, null, false, true, null]],
        894 => [[['_route' => 'documentos-print-llamadas', '_controller' => 'App\\Controller\\DocumentosController::printLlamadas'], ['factura', 'contrato', 'facturables'], null, null, false, true, null]],
        929 => [[['_route' => 'vto-cobro', '_controller' => 'App\\Controller\\CobroVencimientoController::index'], ['idVto'], null, null, false, true, null]],
        953 => [[['_route' => 'familia', '_controller' => 'App\\Controller\\FamiliaController::index'], ['param'], null, null, false, true, null]],
        972 => [[['_route' => 'familia-grid', '_controller' => 'App\\Controller\\FamiliaGridController::index'], ['param'], null, null, false, true, null]],
        1016 => [[['_route' => 'gestion-add-art', '_controller' => 'App\\Controller\\GestionController::addArt'], ['referencia', 'almacen'], null, null, false, true, null]],
        1046 => [[['_route' => 'marca-grid', '_controller' => 'App\\Controller\\MarcaGridController::index'], ['webUrl'], null, null, false, true, null]],
        1073 => [[['_route' => 'password-new', '_controller' => 'App\\Controller\\PasswordResetController::vistaCambioClave'], ['param'], null, null, false, true, null]],
        1114 => [[['_route' => 'search', 'page' => '1', 'itemsPage' => '12', '_controller' => 'App\\Controller\\SearchController::index'], ['page', 'itemsPage'], null, null, false, true, null]],
        1137 => [[['_route' => 'subfamilia', '_controller' => 'App\\Controller\\SubfamiliaController::index'], ['param'], null, null, false, true, null]],
        1166 => [[['_route' => 'textos', '_controller' => 'App\\Controller\\TextosController::index'], ['item'], null, null, false, true, null]],
        1197 => [
            [['_route' => 'tools-get-php', '_controller' => 'App\\Controller\\ToolsController::getPhpCode'], ['tableName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
