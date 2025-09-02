/*global T, cartCfg */
$(function () {
    $('.product-quantity input').TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'mdi mdi-18px mdi-chevron-up',
        verticaldownclass: 'mdi mdi-18px mdi-chevron-down',
        verticalup: '',
        verticaldown: '',
        min: 0,
    });
    $('button.bootstrap-touchspin-down, button.bootstrap-touchspin-up').html('');
    $('input.product-quantity').on('change', function () {
        const item = $(this),
            actual = item.data('actual'),
            cStock = item.data('ctso'),
            udLinea = item.val();

        if (cStock && udLinea > actual) {
            item.val(actual);
        } else {
            const id = item.data('id'),
                postData = { id: id, verif: T.primeNumber(id), unidades: udLinea };
            $.post(T.path('cart/update'), postData, () => window.location.reload());
        }
    });
    $('.btn-delete').on('click', function () {
        const id = $(this).data('id');
        T.modalYesNo('¿Quiere quitar el artículo del carrito?', 'Quitar artículo', function () {
            $.post(T.path('cart/delete'), { id: id, verif: T.primeNumber(id) }, () => window.location.reload());
        });
    });
    $('#btn-delete-cart').on('click', function () {
        T.modalYesNo('¿Desea borrar todas las líneas del pedido?', 'Borrar pedido', function () {
            window.location = T.path('cart/pedido/borrar');
        });
    });
    $('#btn-end-cart').on('click', function () {
        if (cartCfg.uId === 0) {
            $('#modal-no-login').modal('show');
        } else if (cartCfg.cId === 0) {
            $('#modal-no-client').modal('show');
        } else {
            $('#modal-end-cart').modal('show');
        }
    });
    $('#btn-end-cart-ok').on('click', function () {
        if (cartCfg.uId === 0) {
            window.location = T.path('login');
            return;
        } else if (cartCfg.cId === 0) {
            $('#modal-end-cart').modal('toggle');
            T.modalOk('No ha seleccionado un cliente;Seleccione un cliente para grabar el pedido', 'Grabar pedido');
            return;
        }

        if (!$('#check_condiciones').prop('checked')) {
            T.modalOk('Debe aceptar los términos y condiciones de compra;No puede grabar el pedido si no acepta nuestras condiciones de compra.', 'Grabar pedido');
            return;
        }

        const postData = {
            portes: cartCfg.pSelect ? $('#portes', '#modal-end-cart').val() : 0,
            observaciones: $('#observaciones', '#modal-end-cart').val(),
            cliente: cartCfg.cId,
            verif: T.primeNumber(cartCfg.cId),
        };
        $('#modal-end-cart').modal('toggle');
        T.loading('Grabando pedido...');
        $.post(T.path('cart/pedido/grabar'), postData, function (resp) {
            T.loadingHide();
            if (resp.ok) {
                if (cartCfg.rSys) {
                    T.modal({
                        url: T.path('documentos/cobro', resp.id),
                        id: 'cobro-modal',
                        fnShown: function () {
                            $('#btn-cobro-cancel')
                                .off('click')
                                .on('click', function () {
                                    window.location = T.path('documentos/view', resp.id);
                                });
                        },
                    });
                } else {
                    const urlViewDoc = T.path('documentos/view/', resp.id);
                    T.modalOk(resp.msg, 'Grabar pedido', null, null, () => (window.location = urlViewDoc));
                }
            } else {
                T.modalOk(resp.msg, 'Grabar pedido');
            }
        });
    });

    $('#recoger_en_tienda').on('change', function () {
        let url = T.path('cart/recoger-tienda'),
            postData = { recoger: $(this).prop('checked') };
        $.post(url, postData, () => window.location.reload());
    });
});


$(document).ready(function() {
    // Delegación de eventos para manejar incluso modales creados dinámicamente
    $(document).on('click', '[data-dismiss="modal"]', function(e) {
        e.preventDefault();
        var $modal = $(this).closest('.modal');
        $modal.modal('hide');
        
        // Solución de emergencia si el modal no se cierra
        setTimeout(function() {
            if ($modal.is(':visible')) {
                forceCloseModals();
            }
        }, 300);
    });
    
    // Otra opción es modificar la función T.modalYesNo para asegurarse de que los botones cierren el modal
    if (typeof T !== 'undefined' && typeof T.modalYesNo === 'function') {
        var originalModalYesNo = T.modalYesNo;
        T.modalYesNo = function(msg, title, callbackYes, callbackNo) {
            originalModalYesNo(msg, title, function() {
                // Forzar el cierre antes de ejecutar el callback
                $('.modal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                
                // Ejecutar el callback original
                if (typeof callbackYes === 'function') {
                    callbackYes();
                }
            }, callbackNo);
        };
    }
    
    // Función de último recurso más potente
    window.forceCloseModals = function() {
        $('.modal').modal('hide');
        $('.modal').removeClass('show');
        $('.modal').css('display', 'none');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        
        // Si aún persiste, intenta una solución más drástica
        setTimeout(function() {
            $('.modal').each(function() {
                $(this).remove();
            });
        }, 100);
    };
    
    // Botón de emergencia - puedes añadir esto a tu HTML para tener una salida de emergencia
    $('body').append('<button id="emergency-close" style="position: fixed; bottom: 10px; right: 10px; z-index: 9999; display: none;" class="btn btn-sm btn-danger">Cerrar</button>');
    
    $(document).on('click', '#emergency-close', function() {
        forceCloseModals();
    });
    
    // Mostrar botón de emergencia con Escape
    $(document).on('keyup', function(e) {
        if (e.key === "Escape" && $('.modal:visible').length > 0) {
            $('#emergency-close').show();
        }
    });
});