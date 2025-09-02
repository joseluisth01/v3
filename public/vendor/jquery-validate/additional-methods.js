/* global $, T */
'use strict';
(function () {
    $.validator.addMethod('selectNumeric', (value, element) => Number(value) > 0 || $(element).has('option').length === 0, 'Debe seleccionar un elemento.');
    $.validator.addMethod(
        'cif',
        function (value, element) {
            return this.optional(element) || T.compruebaNifCifNie(value) > 0;
        },
        'El CIF no es válido.'
    );
    $.validator.addMethod('seleccionaProvincia', function (value, element, params) {
        var codigoProvincia = parseInt(value / 1000, 10);
        if (codigoProvincia > 0) {
            $(params).val(codigoProvincia);
            $(params).trigger('change');
        }
        return true;
    });
    $.validator.setDefaults({
        ignore: [],
        errorElement: 'em',
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass('invalid-feedback');
            // placement: data-error='#xxxx' en elemento a validar
            let placement = $(element).data('error');
            if (placement) {
                $(placement).append(error);
            } else if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                let igroup = element.parent('div.input-group');
                if (igroup.length > 0) {
                    error.insertAfter(igroup);
                } else {
                    error.insertAfter(element);
                }
            }
        },
        highlight: (element) => $(element).addClass('is-invalid'),
        unhighlight: (element) => $(element).removeClass('is-invalid'),
    });

    /* Mensajes en español */
    $.extend($.validator.messages, {
        required: 'Campo obligatorio.',
        remote: 'Por favor, rellena este campo.',
        email: 'Por favor, escribe una dirección de correo válida.',
        url: 'Por favor, escribe una URL válida.',
        date: 'Por favor, escribe una fecha válida.',
        dateISO: 'Por favor, escribe una fecha (ISO) válida.',
        number: 'Por favor, escribe un número válido.',
        digits: 'Por favor, escribe sólo dígitos.',
        equalTo: 'Por favor, escribe el mismo valor de nuevo.',
        extension: 'Por favor, escribe un valor con una extensión aceptada.',
        maxlength: $.validator.format('Por favor, no escribas más de {0} caracteres.'),
        minlength: $.validator.format('Por favor, no escribas menos de {0} caracteres.'),
        rangelength: $.validator.format('Por favor, escribe un valor entre {0} y {1} caracteres.'),
        range: $.validator.format('Por favor, escribe un valor entre {0} y {1}.'),
        max: $.validator.format('Por favor, escribe un valor menor o igual a {0}.'),
        min: $.validator.format('Por favor, escribe un valor mayor o igual a {0}.'),
    });
})();
