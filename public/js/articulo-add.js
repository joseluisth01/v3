class Articulo {
    constructor() {
        this.referencia = '';
        this.nombre = '';
        this.url = '';
        this.part_number = '';
        this.control_stock = false;
        this.stock = 0;
        this.precio = 0;
        this.lpi = 0;
        this.iva = 0;
        this.codbarras = '';
        this.imagen = '';
        this.imagen_txt = '';
        this.referencia_hex = '';
    }

    rellena(data) {
        this.referencia = data.referencia;
        this.nombre = data.nombre;
        this.url = data.url;
        this.part_number = data.part_number;
        this.control_stock = data.control_stock;
        this.stock = data.stock;
        this.precio = data.precio;
        this.lpi = data.lpi;
        this.iva = data.iva;
        this.codbarras = data.codbarras;
        this.imagen = data.imagen;
        this.imagen_txt = data.imagen_txt;
        this.referencia_hex = data.referencia_hex;
    }
}

class UltimaVenta {
    constructor() {
        this.fecha = '';
        this.unidades = 0;
        this.precio = 0;
        this.dto = 0;
    }

    rellena(data) {
        this.fecha = data.fecha ?? '';
        this.unidades = data.unidades;
        this.precio = data.precio;
        this.dto = data.dto;
    }
}

let appAddArt = new Vue({
    delimiters: ['${', '}'],
    el: '#add-art',
    data() {
        return {
            art: new Articulo(),
            uVenta: new UltimaVenta(),
            listaTarifas: [],
            listaTallas: [],
            listaColores: [],
            listaPreciosTC: [],
            listaStockTC: [],
            tarifa: 1,
            descuento: 0.0,
            precio: 0.0,
            unidades: 1,
            talla: '',
            color: '',
        };
    },
    mounted() {
        this.touchSpin();
        this.leeArticulo();
    },
    computed: {
        articuloImagen() {
            return T.path(this.art.imagen);
        },
        articuloUrl() {
            return T.stringEmpty(this.art.url) ? '' : T.path('articulo/url', this.art.url);
        },
        articuloControlStock() {
            return this.art.control_stock;
        },
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
        stockClass() {
            return this.stockArticulo > 0 ? 'badge-success' : 'badge-danger';
        },
        itemPrecioTC() {
            if (this.talla !== '' && this.color !== '') {
                return this.listaPreciosTC.find((p) => p.talla === this.talla && p.color === this.color);
            }
            return null;
        },
        itemTarifa() {
            return this.listaTarifas.find((t) => t.codigo === this.tarifa);
        },
        precioTC() {
            return this.itemPrecioTC?.precio ?? 0;
        },
        precioArticulo() {
            let pvp = this.precioTC;
            if (pvp === 0) {
                pvp = this.itemTarifa?.precio ?? 0;
            }
            return T.round(pvp);
        },
        precioIva() {
            let pvp = this.itemPrecioTC?.precio_iva ?? 0;
            if (pvp === 0) {
                pvp = this.itemTarifa?.precio_iva ?? 0;
            }
            return T.round(pvp);
        },
        precioArticuloTxt() {
            return T.numToString(this.precioArticulo) + ' €';
        },
        precioIvaTxt() {
            return T.numToString(this.precioIva) + ' €';
        },
        precioCanonTxt() {
            let pvp = this.precioArticulo * (1 - this.descuento / 100.0) + this.art.lpi;
            return T.numToString(pvp) + ' €';
        },
        precioCanonIvaTxt() {
            let pvp = this.precioArticulo * (1 - this.descuento / 100.0) + this.art.lpi;
            pvp *= 1 + this.art.iva / 100;
            return T.numToString(pvp) + ' €';
        },
    },
    methods: {
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
            $('#add-art .product-quantity input')
                .TouchSpin(options)
                .on('touchspin.on.stopspin', function () {
                    self.unidades = $(this).val();
                });
        },
        leeArticulo() {
            let self = this,
                referencia = document.getElementById('add-art').getAttribute('data-ref'),
                almacen = document.getElementById('add-art').getAttribute('data-alm'),
                postData = { referencia: referencia, almacen: almacen };
            $.post(T.path('gestion/articulo/get'), postData, function (resp) {
                self.talla = '';
                self.color = '';
                self.art.rellena(resp.articulo);
                self.uVenta.rellena(resp.ultimaVenta);
                self.listaTarifas = resp.tarifas;
                self.listaTallas = resp.tallas;
                self.listaPreciosTC = resp.preciostc;
                self.listaStockTC = resp.stocktc;
                self.listaColores = resp.colores;
                self.tarifa = resp.tarifa_cliente;
                self.unidades = 1;
                self.descuento = 0;
                if (self.listaColores.length === 1) {
                    self.color = self.listaColores[0].codigo;
                }
                self.calculaPrecio();
            });
        },
        close() {
            document.location.href = T.path('/gestion');
        },
        calculaPrecio() {
            let dtoCli = this.itemTarifa?.dto_cli ?? 0;
            if (dtoCli !== 0) {
                this.descuento = dtoCli;
            }
            this.precio = T.round(this.precioArticulo * (1 - this.descuento / 100.0));
        },
        calculaDescuento() {
            let precioTar = this.precioArticulo;
            if (precioTar !== 0) {
                this.descuento = T.round((1 - this.precio / precioTar) * 100);
            } else {
                this.descuento = 0;
            }
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
        grabaNuevaLinea() {
            this.unidades = T.toInt(this.unidades);
            if (!this.compruebaCampos()) {
                return;
            }
            let self = this,
                postData = {
                    referencia: this.art.referencia_hex,
                    unidades: this.unidades,
                    precio: this.precioArticulo,
                    descuento: this.descuento,
                    talla: this.talla,
                    color: this.color,
                    esVenta: true,
                };

            if (postData.precio == 0 && this.precio != 0) {
                postData.precio = this.precio;
                postData.descuento = 0;
            }

            T.loading('Añadiendo artículo...');
            $.post(T.path('cart/add'), postData, function (resp) {
                T.loadingHide();
                if (resp.id === 0) {
                    T.modalOk(resp.msg + ';', 'Error añadiendo artículo');
                } else {
                    self.close();
                    appVenta.lineasLee();
                }
            });
        },
    },
});


