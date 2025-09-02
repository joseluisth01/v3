/* global T, $ */
'use strict';
let CLI = {
    codigo: $('#cli-edit-codigo').toInt(),
    fnSeleccionOk: null,
    form: null,
    getEmail: function () {
        return $('#email').val();
    },
    setup: function () {
        CLI.form = $('#cli-edit-form');
        CLI.form.validate({
            rules: {
                nombre: 'required',
                cif: 'required',
                cpostal: { required: 'true', seleccionaProvincia: '#cli-edit-provincia' },
                provincia: { selectNumeric: true },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: T.path('cliente/existe-otro'),
                        type: 'post',
                        data: {
                            codigo: CLI.codigo,
                            email: CLI.getEmail,
                        },
                    },
                },
            },
            messages: {
                email: {
                    remote: 'El email pertenece a otro cliente.',
                },
            },
        });

        $('#cli-edit-cif')
            .off('blur')
            .on('blur', function () {
                if (this.value.length < 9 && !this.value.match(/[A-Za-z]+/)) {
                    this.value += T.calculaLetraNif(this.value);
                }
            });

        $('#btn-cli-edit-ok')
            .off('click')
            .on('click', function () {
                if (CLI.form.valid()) {
                    T.loading('Grabando cliente...');
                    $.post(T.path('cliente/save'), CLI.form.serialize(), function (cliente) {
                        T.loadingHide();
                        $('#cli-edit-modal').modal('hide');
                        if (CLI.fnSeleccionOk != null) {
                            CLI.fnSeleccionOk(cliente);
                        }
                    });
                }
            });
    },
};
