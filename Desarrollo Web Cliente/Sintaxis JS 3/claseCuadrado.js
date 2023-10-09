class Cuadrado {
    constructor (alto, ancho){
        this.alto = alto;
        this.ancho = ancho;
    }

    area() {
        return this.alto * this.ancho;
    }

}

let c = new Cuadrado(2,3);

console.log(c.area())