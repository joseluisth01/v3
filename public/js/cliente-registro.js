$(function () {
    let cnToken = $('#_cn_token').toInt() / 23 === 7253;
    $('#form-registro').validate({
        rules: {
            nombre: 'required',
            cif: { required: true, cif: cnToken },
            direccion: 'required',
            localidad: 'required',
            cpostal: {
                required: true,
                seleccionaProvincia: '#provincia',
                remote: {
                    url: T.path('cliente/cpostal-ok'),
                    type: 'post',
                    data: { cpostal: () => $('#cpostal').val() },
                },
            },
            provincia: { selectNumeric: true },
            email: {
                required: true,
                email: true,
                remote: {
                    url: T.path('cliente/existe'),
                    type: 'post',
                    data: { email: () => $('#email').val() },
                },
            },
            clave: 'required',
            clave2: {
                equalTo: '#clave',
            },
        },
        messages: {
            clave2: { equalTo: 'Las claves no coinciden' },
            email: {
                remote: 'El email ya existe.',
            },
            cif: {
                cif: () => ($('#tipo-f').prop('checked') ? 'El NIF no es válido' : 'El CIF no es válido'),
            },
            cpostal: {
                required: 'Debe introucir el código postal',
                remote: 'Su código postal está fuera del rango de trabajo. Consulte con su comercial',
            },
        },
    });

    $('#form-registro').on('submit', function () {
        if (!$(this).valid()) {
            return false;
        }
        if (!$('#politica_privacidad').prop('checked')) {
            T.modalOk('Debe aceptar la política de privacidad;', 'Registro nuevo cliente');
            return false;
        }
        T.loading('Realizando registro...');
        return true;
    });

    $('#cif').on('blur', () => T.compruebaCampoNif('#cif', true, !cnToken));
    $('#clave2').on('blur', () => $('#clave2').valid());

    $('input[type=radio][name="tipofiscal"]').on('change', function () {
        let self = $(this);
        if (self.prop('checked')) {
            let tipoFiscal = self.attr('id') === 'tipo-f';
            $('#row-apellidos').toggle(tipoFiscal);
            $('#label-cif').text(tipoFiscal ? 'NIF' : 'CIF');
            if (tipoFiscal) {
                $('#apellido1, #apellido2').val('');
            }
        }
    });
});
