class ItemIva {
    constructor(iva, importe) {
        this.iva = iva;
        this.importe = importe;
    }
}

class TotalCarrito {
    constructor() {
        this.base = 0.0;
        this.iva = [];
        this.total = 0.0;
    }

    inicializa() {
        this.base = 0.0;
        this.iva = [];
        this.total = 0.0;
    }

    sumaIva(porcent, importe) {
        for (let i = 0; i < this.iva.length; i++) {
            if (this.iva[i].iva === porcent) {
                this.iva[i].importe += importe;
                return;
            }
        }
        this.iva.push(new ItemIva(porcent, importe));
    }

    calcula(lineas) {
        this.inicializa();
        for (let i = 0; i < lineas.length; i++) {
            let lin = lineas[i],
                importeIva = lin.importeIva * lin.unidades;
            this.base += lin.precioNeto * lin.unidades;
            this.total += lin.precio * lin.unidades;
            this.sumaIva(lin.iva, importeIva);
        }
    }
}

export { TotalCarrito };
