/* global $, T */
'use strict';
let SEL_ART = {
    table: null,
    fnSelReg: null,
    almacen: 1,
    inputFilter: $('#art-sel-filter'),
    container: $('#modal-sel-art'),
    dataFilter: function (d) {
        d.nombre = SEL_ART.inputFilter.val();
        d.almacen = SEL_ART.almacen;
    },
    clearFilter: function () {
        SEL_ART.inputFilter.val('');
        SEL_ART.reload();
    },
    reload: function (e) {
        T.preventDefault(e);
        SEL_ART.table.ajax.reload();
        SEL_ART.inputFilter.triggerHandler('focus');
    },
    cursorToEnd: function () {
        SEL_ART.inputFilter[0].setSelectionRange(1024, 1024);
    },
    selectReg: function (e) {
        T.preventDefault(e);
        if (SEL_ART.fnSelReg) {
            let row = SEL_ART.table.row($(this)).data();
            SEL_ART.fnSelReg(row.referencia, row.nombre);
        }
        SEL_ART.container.modal('toggle');
    },
    init: function () {
        if (SEL_ART.table == null) {
            let options = {
                ordering: false,
                columnDefs: [
                    {
                        targets: 0,
                        width: '60px',
                        render: function (imagen, type, row) {
                            let url = T.path(imagen);
                            return `<img class="img-fluid img-thumbnail" src="${url}" alt="${row.nombre}">`;
                        },
                    },
                    {
                        targets: 1,
                        render: function (data, type, row) {
                            return `<strong>${row.referencia}</strong><div>${row.nombre}</div>`;
                        },
                    },
                    {
                        targets: 2,
                        class: 'text-right',
                        width: '5rem',
                        render: function (data, type, row) {
                            return T.numToString(row.precio);
                        },
                    },
                    {
                        targets: 3,
                        class: 'text-center',
                        width: '5rem',
                        render: function (data, type, row) {
                            if (row.control_stock) {
                                let color = row.stock === 0 ? 'badge-danger' : 'badge-success';
                                return `<span class="px-2 badge ${color}">${row.stock} Ud</span>`;
                            }
                            return '';
                        },
                    },
                    {
                        targets: [4, 5],
                        visible: false,
                    },
                ],
                columns: [{data: 'imagen'}, {data: 'referencia'}, {data: 'nombre'}, {data: 'precio'}, {data: 'stock'}, {data: 'control_stock'}],
            };
            SEL_ART.table = T.dataTable('#art-sel-table', T.path('articulo/lista'), SEL_ART.dataFilter, options);
            $('#art-sel-table_wrapper').css('width', '100%');
            $('#art-sel-table tbody').on('click', 'tr', null, SEL_ART.selectReg);
            $('#art-sel-btn-search').on('click', null, null, SEL_ART.reload);
            $('#art-sel-btn-clear').on('click', null, null, SEL_ART.clearFilter);
            //SEL_ART.inputFilter.on('input', SEL_ART.reload);
            SEL_ART.inputFilter.on('focus', null, null, SEL_ART.cursorToEnd);
            SEL_ART.inputFilter.on('keydown', function (e) {
                if (!e.isDefaultPrevented() && (e.key === 'Enter' || e.key === 'Tab')) {
                    SEL_ART.reload();
                }
            });
        } else {
            SEL_ART.reload();
        }
        SEL_ART.inputFilter.triggerHandler('focus');
    },
    show: function () {
        SEL_ART.container.modal('show');
    },
};

SEL_ART.container.on('shown.bs.modal', function () {
    SEL_ART.init();
});
