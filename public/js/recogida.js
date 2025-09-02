$(function () {
    $('#form-recogida').validate({
        rules: {
            nombre: 'required',
            telefono: 'required',
            direccion: 'required',
            localidad: 'required',
            cpostal: 'required',
            email: { required: true, email: true },
            dispositivo: 'required',
            averia: 'required',
        },
    });

    T.fileInput('#imagen');

    $('#form-recogida').on('submit', function () {
        if (!$(this).valid()) {
            return false;
        }
        T.loading('Realizando registro...');
        return true;
    });
});
