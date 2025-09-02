/* global $, T */
class Articulo {
    constructor() {
        this.referencia = '';
        this.nombre = '';
        this.nombre2web = '';
        this.marca = '';
        this.caracteristicas = '';
        this.url = '';
        this.url_externa = '';
        this.web_alerta = '';
        this.id_documento = '';
        this.part_number = '';
        this.codbarras = '';
        this.stock = 0;
        this.virtual = 0;
        this.disponible = false;
        this.stock_remoto = false;
        this.control_stock = false;
        this.precio_iva = 0;
        this.precio_iva_sin_dto = 0;
        this.dto_fam = 0;
        this.lpi = 0;
        this.referencia_hex = '';
        this.imagen = '';
        this.imagen_txt = '';
    }

    rellena(datos) {
        for (const key of Object.keys(this)) {
            this[key] = datos[key];
        }
    }
}

let appArt = new Vue({
    delimiters: ['${', '}'],
    el: '#articulo',
    data() {
        return {
            art: new Articulo(),
            imagenes: [],
            listaTallas: [],
            listaColores: [],
            listaPreciosTC: [],
            listaStockTC: [],
            icon_stock: '',
            unidades: 1,
            talla: '',
            color: '',
            txtPrecioCero: '',
            bloqueo_stock: false,
            valoraciones: [],
            ratingOrder: 'best',
        };
    },
    created() {
        this.leeArticulo();
    },
    mounted() {
        this.touchSpin();
    },
    computed: {
        stockArticulo() {
            let stock = this.art.stock;
            if (this.talla !== '' && this.color !== '') {
                let item = this.listaStockTC.find((s) => s.talla === this.talla && s.color === this.color);
                if (item) {
                    stock = item.stock;
                }
            }
            return stock;
        },
        iconStockArticulo() {
            let iconStock = this.icon_stock;
            if (this.talla !== '' && this.color !== '') {
                let item = this.listaStockTC.find((s) => s.talla === this.talla && s.color === this.color);
                if (item) {
                    iconStock = item.icon;
                }
            }
            return ` ${iconStock}`;
        },
        precioArticulo() {
            return this.precioTxt(this.art.precio_iva, true);
        },
        precioSinDto() {
            return this.precioTxt(this.art.precio_iva_sin_dto, false);
        },
        descuento() {
            let dto = this.art.dto_fam;
            if (this.talla !== '' && this.color !== '') {
                let item = this.listaPreciosTC.find((p) => p.talla === this.talla && p.color === this.color);
                if (item && item.dto_fam !== 0) {
                    dto = item.dto_fam;
                }
            }
            return dto;
        },
        urlDocumento() {
            return T.path('articulo/documento', this.art.url);
        },
        imagenPrincipal() {
            let imagen = this.art.imagen;
            if (this.color !== '') {
                let item = this.imagenes.find((i) => i.color === this.color);
                if (item) {
                    imagen = item.large;
                }
            }
            return T.path(imagen);
        },
        imagenTxt() {
            if (this.color !== '') {
                let item = this.imagenes.find((i) => i.color === this.color);
                if (item) {
                    return item.imagen_txt;
                }
            }
            return this.art.imagen_txt;
        },
    },
    methods: {
        path() {
            return T.path.apply(null, arguments);
        },
        touchSpin() {
            let self = this,
                options = {
                    verticalbuttons: true,
                    verticalupclass: 'mdi mdi-18px mdi-chevron-up',
                    verticaldownclass: 'mdi mdi-18px mdi-chevron-down',
                    verticalup: '',
                    verticaldown: '',
                    min: 0,
                };
            $('#unidades')
                .TouchSpin(options)
                .on('touchspin.on.stopspin', function () {
                    self.unidades = $(this).val();
                });
        },
        leeArticulo() {
            let self = this,
                artUrl = $('#articulo').data('url');
            $.get(T.path('articulo/get', artUrl), function (datos) {
                self.art.rellena(datos.art);
                self.txtPrecioCero = datos.txtPrecioCero;
                self.imagenes = datos.imagenes;
                self.listaTallas = datos.tallas;
                self.listaColores = datos.colores;
                self.listaPreciosTC = datos.preciostc;
                self.listaStockTC = datos.stocktc;
                self.icon_stock = datos.icon_stock;
                self.bloqueo_stock = datos.bloqueo_stock;
                if (self.listaColores.length === 1) {
                    self.color = self.listaColores[0].codigo;
                }
                if (self.art.precio_iva === 0 && self.listaPreciosTC.length > 0) {
                    self.art.precio_iva = self.listaPreciosTC.reduce((min, p) => (p.precio_iva < min ? p.precio_iva : min), self.listaPreciosTC[0].precio_iva);
                }
                self.loadRating();
            });
        },
        compruebaCampos() {
            if (this.unidades < 1) {
                T.modalOk('Introduzca las unidades que quiere comprar;', 'Comprobación');
                return false;
            }
            if (this.listaTallas.length > 0 && T.stringEmpty(this.talla)) {
                T.modalOk('Debe seleccionar una talla;', 'Comprobación');
                return false;
            }
            if (this.listaColores.length > 0 && T.stringEmpty(this.color)) {
                T.modalOk('Debe seleccionar un color;', 'Comprobación');
                return false;
            }
            return true;
        },
        addToCart(e) {
            if (!this.compruebaCampos()) {
                return;
            }
            let button = $(e.target),
                currentHTML = button.html(),
                postData = {
                    referencia: this.art.referencia_hex,
                    unidades: T.toInt(this.unidades),
                    talla: this.talla,
                    color: this.color,
                };
            T.loading('Añadiendo artículo...');
            $.post(T.path('cart/add'), postData, function (resp) {
                T.loadingHide();
                if (resp.id === 0) {
                    T.modalOk(resp.msg + ';', 'Error añadiendo artículo');
                } else {
                    button.addClass('done').html('HECHO');
                    T.modal({ url: T.path('cart/add-ok/', resp.id), id: 'modal-cart-add-ok' });
                    setTimeout(function () {
                        button.removeClass('done').html(currentHTML);
                    }, 750);
                }
            });
        },
        precioTxt(precio, itemprop) {
            if (this.talla !== '' && this.color !== '') {
                let item = this.listaPreciosTC.find((p) => p.talla === this.talla && p.color === this.color);
                if (item) {
                    if (itemprop && item.precio_iva !== 0) {
                        precio = item.precio_iva;
                    } else if (!itemprop && item.precio_iva_sin_dto !== 0) {
                        precio = item.precio_iva_sin_dto;
                    }
                }
            }
            if (precio === 0) {
                return this.txtPrecioCero;
            }
            let pvpTxt = T.numToString(precio);
            if (itemprop) {
                return `<span itemprop="price" content="${precio}">${pvpTxt}</span> <span itemprop="priceCurrency" content="EUR">€</span>`;
            }

            return `${pvpTxt} €`;
        },
        addRating() {
            let artUrl = $('#articulo').data('url');
            T.modal({ url: T.path('art-valoracion/new/', artUrl), classDlg: 'modal-lg', id: 'modal-rating-new' });
        },
        loadRating() {
            $.get(T.path('art-valoracion/list-art', this.art.referencia, this.ratingOrder), (datos) => (this.valoraciones = datos));
        },
    },
});


