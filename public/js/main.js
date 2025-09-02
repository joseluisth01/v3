/* global $ */
$(function () {
    dayjs.extend(window.dayjs_plugin_utc);
    $(function () {
        if (window.innerWidth < 768) {
            $('section.attr-container > div.title.theme-bg').addClass('collapsed');
            $('section.attr-container > div.collapse').removeClass('show');
        }
    });

    /*-- Slide menu --*/
    new SlideMenu(document.getElementById('mobile-menu'), {
        keyClose: 'Escape',
        position: 'left',
        submenuLinkAfter: '<i class="ml-2 d-inline-block mdi mdi-chevron-right mdi-valign-sub"></i>',
        backLinkBefore: '<i class="mr-2 mdi mdi-chevron-left mdi-valign-sub"></i>',
    });

    /* -- Navbar sticky --*/
    let observer = new IntersectionObserver(
        function (entries) {
            if (entries[0].intersectionRatio === 0) {
                // no intersection with screen
                document.querySelector('#nav-main').classList.add('nav-container-sticky');
            } else if (entries[0].intersectionRatio === 1) {
                // fully intersects with screen
                document.querySelector('#nav-main').classList.remove('nav-container-sticky');
            }
        },
        { threshold: [0, 1] }
    );
    observer.observe(document.querySelector('#header-main'));

    /* -- Scroll TOP -- */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });

    $('#scroll').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* -- Botones añadir a carrito --*/
    $('.add-item-cart').on('click', function () {
        let self = $(this),
            tallasColores = T.toInt(self.data('tc'));
        if (tallasColores > 0) {
            window.location = T.path('articulo/url', self.data('url'));
            return;
        }

        let referencia = self.data('ref'),
            unidades = $('input[data-ref="' + referencia + '"]').toInt();
        T.loading('Añadiendo artículo...');
        $.post(T.path('cart/add'), { referencia: referencia, unidades: unidades }, function (resp) {
            T.loadingHide();
            if (resp.id === 0) {
                if (resp.msg.indexOf(';') === -1) {
                    resp.msg += ';';
                }
                T.modalOk(resp.msg, 'Error añadiendo artículo');
            } else {
                let currentHTML = self.html();
                self.addClass('done').html('HECHO');
                T.modal({ url: T.path('cart/add-ok/', resp.id), id: 'modal-cart-add-ok' });
                setTimeout(function () {
                    self.removeClass('done').html(currentHTML);
                }, 750);
            }
        });
    });
    $('.product-quantity input', 'div.product-item').TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'mdi mdi-18px mdi-chevron-up',
        verticaldownclass: 'mdi mdi-18px mdi-chevron-down',
        verticalup: '',
        verticaldown: '',
        min: 1,
    });
    $('button.bootstrap-touchspin-up').attr('aria-label', 'Incrementar cantidad');
    $('button.bootstrap-touchspin-down').attr('aria-label', 'Disminuir cantidad');

    /* -- Suscripción newsletter --*/
    function validateFieldsSusc() {
        const title = 'Suscripción newsletter';

        function validateEmail(email) {
            const re =
                /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
            return re.test(String(email).toLowerCase());
        }

        const nombre = $('#newsletter_nombre');
        if (nombre.isEmpty()) {
            T.modalOk('Debe introducir su nombre;Introduzca su nombre para la suscripción', title, () => nombre.triggerHandler('focus'));
            return false;
        }
        const email = $('#newsletter_email');
        if (email.isEmpty()) {
            T.modalOk('Debe introducir su email;Introduzca su dirección de correo para la suscripción', title, () => email.triggerHandler('focus'));
            return false;
        }
        if (!validateEmail(email.val())) {
            T.modalOk('La dirección de email no es válida;Introduzca una dirección de correo válida', title, () => email.triggerHandler('focus'));
            return false;
        }
        return true;
    }

    $('#btn-suscripcion').on('click', function () {
        if (validateFieldsSusc()) {
            $('#modal-suscripcion').modal('show');
        }
    });

    $('#btn-suscripcion-ok').on('click', function () {
        $('#modal-suscripcion').modal('toggle');
        const postData = { nombre: $('#newsletter_nombre').val(), email: $('#newsletter_email').val() };
        T.loading('Procesando suscripción...');
        $.post(T.path('suscribe'), postData, (msg) => {
            T.loadingHide();
            T.modalOk(msg, 'Suscripción newsletter');
        });
    });

    /* -- Menú categorías -- */
    $('.wrapper-fam-items').hide();
    $('.item-menu-cat').on('mouseenter', function () {
        $('.wrapper-fam-items').hide();
        let item = $(this),
            left = item.offset().left + item.width(),
            top = item.parent('ul.dropdown-menu.show')[0].offsetHeight;
        //top = item.offset().top;
        container = $('#wrapper-fam-items-' + $(this).data('id'));
        container.css({
            width: 'calc(100vw - ' + (left + 30) + 'px)',
            height: 'calc(100vh - ' + top + 'px)',
        });
        container.show();
    });

    // $(document).on('click', '.menu-cat.dropdown-menu', function (e) {
    //     e.stopPropagation();
    // });

    if ($(window).width() < 767) {
        $('.has-submenu > a').on('click', function (e) {
            e.preventDefault();
            $(this).next('.menu-cat').toggle();
            $('.dropdown').on('hide.bs.dropdown', function () {
                $('.menu-cat', this).hide();
            });
        });
    }

    $('.has-submenu > a').on('hover', function () {
        let item = $(this).next('.menu-cat');
        if (item) {
            let offset = item.offset(),
                top = offset.top - $(window).scrollTop(),
                left = offset.left - $(window).scrollLeft();
            item.css({
                'min-width': `calc(95vw - ${left}px)`,
                'max-height': `calc(95vh - ${top}px)`,
            });
        }
    });

    /* -- Familias --*/
    if ($('#fam-catalog-button').length) {
        let btn = $('#fam-catalog-button > a'),
            left = btn.offset().left + btn.width(),
            top = btn.offset().top,
            css = {
                width: 'calc(100vw - ' + (left + 30) + 'px)',
                height: 'calc(100vh - ' + top + 'px)',
            };
        $('#fam-menu-container').css(css);
    }

    /* -- Cookies -- */
    $('#btn-cookies-accept').on('click', function () {
        T.setCookie('v3web_cookies', 'Acepta');
        T.setCookie('g_analytics', 'true');
        $('.cookie-info').css('display', 'none');
    });
    $('#btn-cookies-reject').on('click', function () {
        T.setCookie('v3web_cookies', 'Acepta');
        T.setCookie('g_analytics', 'false');
        $('.cookie-info').css('display', 'none');
    });
    $('#btn-cookies-config').on('click', function () {
        $('#modal-cookies').modal('show');
    });
    $('#btn-modal-cookies-accept').on('click', function () {
        T.setCookie('v3web_cookies', 'Acepta');
        T.setCookie('g_analytics', $('#ck_analytics').is(':checked') ? 'true' : 'false');
        $('#modal-cookies').modal('hide');
        $('.cookie-info').css('display', 'none');
    });
});


// Añadir este código después de la función T.modalOk existente o al final del archivo principal

// Corrección para el cierre de modales
$(document).on('click', '[data-dismiss="modal"]', function() {
    $(this).closest('.modal').modal('hide');
    // Si el modal no se cierra con lo anterior, forzamos su cierre
    setTimeout(function() {
        $('.modal.show').removeClass('show').css('display', 'none');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    }, 100);
});

// Alternativa: reemplazar la implementación de T.modalOk si es necesario
// Asumiendo que T es un objeto global con la función modalOk
if (typeof T !== 'undefined' && typeof T.modalOk === 'function') {
    // Guardamos la función original por si acaso
    const originalModalOk = T.modalOk;
    
    // Reemplazamos con una versión que garantice que el modal se puede cerrar
    T.modalOk = function(msg, title, callback) {
        // Llamamos a la implementación original
        originalModalOk.apply(this, arguments);
        
        // Aseguramos que los botones de cierre funcionen correctamente
        setTimeout(function() {
            const activeModal = $('.modal.show');
            activeModal.find('[data-dismiss="modal"]').off('click').on('click', function() {
                activeModal.modal('hide');
                if (typeof callback === 'function') {
                    callback();
                }
            });
        }, 100);
    };
}


