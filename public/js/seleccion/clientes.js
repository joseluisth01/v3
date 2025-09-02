/* global $, T */
'use strict';
let SEL_CLI = {
    table: null,
    fnSelReg: null,
    inputFilter: $('#cli-sel-filter'),

    dataFilter: function (d) {
        d.nombre = SEL_CLI.inputFilter.val();
    },
    clearFilter: function () {
        SEL_CLI.inputFilter.val('');
        SEL_CLI.reload();
    },
    reload: function (e) {
        T.preventDefault(e);
        SEL_CLI.table.ajax.reload();
        SEL_CLI.inputFilter.triggerHandler('focus');
    },
    cursorToEnd: function () {
        SEL_CLI.inputFilter[0].setSelectionRange(1024, 1024);
    },

    selectReg: function (e) {
        T.preventDefault(e);
        if (SEL_CLI.fnSelReg) {
            let data = SEL_CLI.table.row($(this)).data();
            SEL_CLI.fnSelReg(data.codigo, data.nombre);
        }
        $('#modal-sel-cli').modal('toggle');
    },
    init: function () {
        if (SEL_CLI.table == null) {
            let options = {
                columnDefs: [
                    { targets: 2, visible: false },
                    {
                        targets: 1,
                        render: function (nombre, type, row) {
                            return `<div>${row['nombre']}</div><div><small class="font-italic font-weight-bolder">${row['alias']}</small></div>`;
                        },
                    },
                ],
                order: [[1, 'asc']],
                columns: [{ data: 'codigo' }, { data: 'nombre' }, { data: 'alias' }],
            };
            SEL_CLI.table = T.dataTable('#cli-sel-table', T.path('cliente/lista'), SEL_CLI.dataFilter, options);
            $('#cli-sel-table_wrapper').css('width', '100%');
            $('#cli-sel-table tbody').on('click', 'tr', null, SEL_CLI.selectReg);
            $('#cli-sel-btn-search').on('click', null, null, SEL_CLI.reload);
            $('#cli-sel-btn-clear').on('click', null, null, SEL_CLI.clearFilter);

            SEL_CLI.inputFilter.on('input', null, null, SEL_CLI.reload);
            SEL_CLI.inputFilter.off('focus').on('focus', null, null, SEL_CLI.cursorToEnd);
        } else {
            SEL_CLI.reload();
        }
        SEL_CLI.inputFilter.triggerHandler('focus');
    },
    show: function () {
        $('#modal-sel-cli').modal('show');
    },
};

$('#modal-sel-cli').on('shown.bs.modal', function () {
    SEL_CLI.init();
});
