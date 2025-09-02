$(function () {
    M.Tabs.init(document.querySelector('.tabs'), {});

    $('#redsys_activar')
        .on('change', function () {
            $('input', '#pasarela-redsys').prop('readonly', !$(this).prop('checked'));
        })
        .triggerHandler('change');

    $('#smtp_auth')
        .on('change', function () {
            $('input', '#email-autenticacion').prop('readonly', !$(this).prop('checked'));
        })
        .triggerHandler('change');

    $('#slider')
        .on('change', function () {
            let checked = $(this).prop('checked');
            $('#slider_height').prop('readonly', !checked);
            $('#slider_size_auto,  #slider_banner').prop('disabled', !checked);
        })
        .triggerHandler('change');

    T.fileInput('#gmaps-img', '#msg-gmaps-img', { allowedFileTypes: ['image'] });
    T.fileInput('#mobile-img', '#msg-mobile-img', { allowedFileTypes: ['image'] });
});

// Actualización imágenes
let appImages = new Vue({
    delimiters: ['${', '}'],
    el: '#app-images',
    data() {
        return {
            artTotal: 0,
            artActual: 0,
            cbTotal: 0,
            cbActual: 0,
            interval: null,
            enProceso: false,
            finalizado: false,
            nextImage: false,
            urlStart: T.path('admin/images-cache-init'),
            urlProcess: T.path('admin/images-cache-process'),
        };
    },
    watch: {
        nextImage(val) {
            if (val) {
                if (this.artTotal > this.artActual || this.cbTotal > this.cbActual) {
                    Vue.nextTick(this.processNextImage);
                } else {
                    this.enProceso = false;
                    this.finalizado = true;
                }
            }
        },
    },
    computed: {
        totalArt() {
            return T.numToString(this.artTotal, 0);
        },
        totalCB() {
            return T.numToString(this.cbTotal, 0);
        },
        actualArt() {
            return T.numToString(this.artActual, 0);
        },
        actualCB() {
            return T.numToString(this.cbActual, 0);
        },

        porcentArt() {
            return this.artTotal === 0 ? 0 : T.numToString((this.artActual / this.artTotal) * 100);
        },
        porcentCB() {
            return this.cbTotal === 0 ? 0 : T.numToString((this.cbActual / this.cbTotal) * 100);
        },
    },
    methods: {
        start() {
            this.nextImage = false;
            this.enProceso = true;
            this.finalizado = false;
            this.artActual = 0;
            this.cbActual = 0;
            $.get(this.urlStart, (resp) => {
                this.artTotal = resp.artTotal;
                this.cbTotal = resp.cbTotal;
                this.nextImage = true;
            });
        },
        processNextImage() {
            this.nextImage = false;
            $.get(this.urlProcess, (resp) => {
                this.artActual = resp.artActual;
                this.cbActual = resp.cbActual;
                this.nextImage = true;
            });
        },
    },
});
