import { LineaVenta } from './venta-lineas.js';
import { TotalCarrito } from './ventas-carrito.js';

window.appVenta = new Vue({
    delimiters: ['${', '}'],
    el: '#venta',
    data() {
        return {
            lineas: [],
            total: new TotalCarrito(),
            cliCodigo: $('#cli_codigo').toInt(),
            cliNombre: $('#cli_nombre').val(),
            almacen: $('#almacen').toInt(),
        };
    },
    mounted() {
        this.lineasLee();
    },
    computed: {
        sinCliente: function () {
            return this.cliCodigo === 0;
        },
        sinLineas: function () {
            return this.lineas.length === 0 || this.cliCodigo === 0;
        },
    },
    methods: {
        url(path) {
            return T.path(path);
        },
        numToString(value) {
            return T.numToString(value);
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
            $('#venta .product-quantity input')
                .TouchSpin(options)
                .on('touchspin.on.stopspin', function () {
                    let input = $(this),
                        id = input.data('id'),
                        index = self.lineas.findIndex((lin) => lin.id === id);
                    if (index > -1) {
                        self.lineas[index].unidades = input.val();
                        self.lineaActualizaUd(index);
                    }
                });
        },
        lineasLee() {
            $.get(T.path('gestion/lineas/lista'), this.lineasRellena);
        },
        lineasRellena(dataLineas) {
            this.lineas = [];
            dataLineas.forEach((lin) => this.lineas.push(new LineaVenta(lin)));

            this.total.calcula(this.lineas);
            Vue.nextTick(this.touchSpin);
        },
        lineaActualizaUd(index) {
            let lin = this.lineas[index],
                postData = { id: lin.id, unidades: lin.unidades };
            lin.calculaTotal();
            $.post(T.path('gestion/linea/update'), postData, () => this.total.calcula(this.lineas));
        },
        lineaBorra(index) {
            let self = this,
                lin = this.lineas[index],
                postData = { id: lin.id, verif: T.primeNumber(lin.id) };
            T.modalYesNo('¿Desea borrar el artículo?<br><small>' + lin.nombre + '</small>', 'Borrar línea venta', function () {
                $.post(T.path('gestion/linea/delete'), postData, function () {
                    self.lineas.splice(index, 1);
                    self.total.calcula(self.lineas);
                });
            });
        },
        carritoBorra() {
            let self = this;
            T.modalYesNo('¿Desea borrar todos los artículos?', 'Borrar líneas venta', function () {
                let postData = {
                    cliente: self.cliCodigo,
                    verif: T.primeNumber(self.cliCodigo),
                };
                T.loading('Borrando carrito...');
                $.post(T.path('gestion/cliente/carrito/borra'), postData, function (resp) {
                    T.loadingHide();
                    self.lineas = [];
                    self.total.inicializa();
                    T.modalOk(resp, 'Borrar carrito');
                });
            });
        },
        clienteSeleccion() {
            let self = this;
            SEL_CLI.fnSelReg = function (codigo, nombre) {
                self.cliCodigo = T.toInt(codigo);
                self.cliNombre = nombre;
                $.post(T.path('gestion/cliente/seleccion'), { codigo: self.cliCodigo }, self.lineasRellena);
            };
            SEL_CLI.show();
        },
        clienteNuevo() {
            CLI.fnSeleccionOk = this.clienteFinEdicion;
            T.modal({ url: T.path('cliente/edit', 0), id: 'cli-edit-modal', classDlg: 'modal-lg' });
        },
        clienteEdicion() {
            CLI.fnSeleccionOk = this.clienteFinEdicion;
            T.modal({ url: T.path('cliente/edit', this.cliCodigo), id: 'cli-edit-modal', classDlg: 'modal-lg' });
        },
        clienteFinEdicion(cli) {
            this.cliCodigo = T.toInt(cli.codigo);
            this.cliNombre = cli.nombre;
            $.post(T.path('gestion/cliente/seleccion'), { codigo: this.cliCodigo }, this.lineasRellena);
        },
        articuloSeleccion() {
            let self = this;
            SEL_ART.almacen = this.almacen;
            SEL_ART.fnSelReg = function (referencia) {
                document.location.href = T.path('gestion/add-art', referencia, self.almacen);
            };
            SEL_ART.show();
        },
        grabaPedido() {
            let self = this,
                postData = {
                    almacen: this.almacen,
                    cliente: this.cliCodigo,
                    verif: T.primeNumber(this.cliCodigo),
                };
            T.loading('Grabando pedido...');
            $.post(T.path('gestion/pedido/grabar'), postData, function (resp) {
                T.loadingHide();
                if (resp.ok) {
                    self.lineasLee();
                }
                T.modalOk(resp.msg, 'Grabar pedido');
            });
        },
        grabaAlbaran() {
            let self = this,
                postData = {
                    almacen: this.almacen,
                    cliente: this.cliCodigo,
                    verif: T.primeNumber(this.cliCodigo),
                };
            T.loading('Grabando albarán...');
            $.post(T.path('gestion/albaran/grabar'), postData, function (resp) {
                T.loadingHide();
                if (resp.ok) {
                    self.lineasLee();
                }
                T.modalOk(resp.msg, 'Grabar albarán');
            });
        },
    },
});
