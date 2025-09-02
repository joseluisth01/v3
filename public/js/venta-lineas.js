class LineaVenta {
    constructor(data) {
        this.id = data.id;
        this.referencia = data.referencia;
        this.url = data.url;
        this.nombre = data.nombre;
        this.unidades = data.unidades;
        this.precioNeto = data.precio_neto;
        this.precio = data.precio;
        this.iva = data.iva;
        this.importeIva = data.importe_iva;
        this.importe = this.precio * this.unidades;
        this.imagen = data.imagen;
        this.talla = data.talla;
        this.color = data.color;
        this.actual = data.actual;
        this.control_stock = data.control_stock;
    }

    calculaTotal() {
        this.importe = this.precio * this.unidades;
    }
}

export { LineaVenta };
