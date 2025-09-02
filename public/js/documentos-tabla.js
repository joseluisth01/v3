/* global $, T */
$(function () {
    'use strict';
    let TBL = {
        table: null,
        tipoDoc: $('#tipo_doc').val(),
        tableFilter: function (d) {
            ['documento', 'fecha_desde', 'fecha_hasta', 'tipo_doc'].forEach((item) => (d[item] = $('#' + item).val()));
        },
        reload: function () {
            TBL.table.ajax.reload();
        },
        cleanFilters: function () {
            ['documento', 'fecha_desde', 'fecha_hasta'].forEach((item) => $('#' + item).val(''));
            TBL.reload();
        },
        cobroVisible: function () {
            return TBL.tipoDoc === 'P' || TBL.tipoDoc === 'F';
        },
        updateDocType: function (reloadTable) {
            let button = '#btn-pedidos',
                placeholder = 'Número pedido',
                title = '<i class="mdi mdi-clipboard mr-2"></i>Pedidos';

            TBL.tipoDoc = $('#tipo_doc').val();
            if (TBL.tipoDoc === 'A') {
                button = '#btn-albaranes';
                placeholder = 'Número albarán';
                title = '<i class="mdi mdi-clipboard-text mr-2"></i>Albaranes';
            } else if (TBL.tipoDoc === 'F') {
                button = '#btn-facturas';
                placeholder = 'Número factura';
                title = '<i class="mdi mdi-clipboard-check mr-2"></i>Facturas';
            }

            TBL.table.column(9).visible(TBL.cobroVisible());

            $('#documento').attr('placeholder', placeholder);
            $('.btn-doc').addClass('btn-dark').removeClass('btn-success');
            $(button).addClass('btn-success').removeClass('btn-dark');
            $('#title').html(title);

            if (reloadTable) {
                TBL.reload();
            }
        },
        changeDocType: function (e) {
            let tipo = 'P';
            if (e.target.id === 'btn-albaranes') {
                tipo = 'A';
            } else if (e.target.id === 'btn-facturas') {
                tipo = 'F';
            }
            $('#tipo_doc').val(tipo);
            TBL.updateDocType(true);
        },
        cobroDoc: function () {
            let data = TBL.table.row($(this)).data();
            if (TBL.tipoDoc === 'P') {
                if (!data.cobrado && data.estado !== 'Facturado') {
                    T.modal({ url: T.path('documentos/cobro', data.id), id: 'cobro-modal' });
                }
            } else if (!data.finalizado) {
                window.location = T.path('documentos/view', data.id, true);
            }
        },
        setup: function () {
            let dtSearch = JSON.parse($('#dt_search').html()),
                options = {
                    responsive: true,
                    columnDefs: [
                        { targets: [0, 12], visible: false },
                        { targets: 1, render: T.dateFormatFromSql },
                        { targets: [4, 5, 6, 7], className: 'text-right', render: T.numToStringFromSql },
                        { targets: 8, className: 'dt-center' },
                        {
                            targets: 9,
                            visible: !$('#redsys').isEmpty() && TBL.cobroVisible(),
                            className: 'cobro text-center',
                            sortable: false,
                            render: function (cobrado, type, row) {
                                if (row.finalizado) {
                                    return '';
                                } else if (cobrado) {
                                    return '<i class="mdi mdi-credit-card-check-outline text-success font-lg"></i>';
                                } else {
                                    return '<i class="mdi mdi-credit-card-outline text-primary font-lg"></i>';
                                }
                            },
                        },
                        {
                            targets: 10,
                            className: 'text-center',
                            sortable: false,
                            render: function (id) {
                                return '<a href="' + T.path('documentos/view', id) + '">' + '<i class="mdi mdi-eye text-primary font-lg"></i></a>';
                            },
                        },
                        {
                            targets: 11,
                            className: 'text-center',
                            sortable: false,
                            render: function (id) {
                                return '<a href="' + T.path('documentos/print', id) + '">' + '<i class="mdi mdi-file-outline text-primary font-lg"></i></a>';
                            },
                        },
                    ],
                    order: [[1, 'desc']],
                    columns: [
                        { data: 'id' },
                        { data: 'fecha' },
                        { data: 'serie' },
                        { data: 'numero' },
                        { data: 'importe' },
                        { data: 'iva' },
                        { data: 'recargo' },
                        { data: 'total' },
                        { data: 'estado' },
                        { data: 'cobrado' },
                        { data: 'id' }, // Lo repetimos para la visualización del cobro
                        { data: 'id' }, // Lo repetimos para la impresión del documento
                        { data: 'finalizado' },
                    ],
                };

            $.fn.dataTable.ext.errMode = 'throw';

            TBL.table = T.dataTable('#tabla-docs', T.path('documentos/lista'), TBL.tableFilter, Object.assign(options, dtSearch));

            $('#tabla-docs tbody').on('click', '.cobro', TBL.cobroDoc);
            T.datePicker('#fecha_desde, #fecha_hasta');
            $('#btn-search').on('click', TBL.reload);
            $('#btn-clear').on('click', TBL.cleanFilters);

            $('input[type=text], select').on('change', TBL.reload);
            $('#btn-documento-clear').on('click', function () {
                $('#documento').val('').focus();
                TBL.reload();
            });

            $('.btn-doc').on('click', TBL.changeDocType);
            TBL.updateDocType(false);
        },
    };

    TBL.setup();
});
