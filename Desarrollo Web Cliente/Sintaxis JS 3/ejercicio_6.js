class Libro {
    constructor(titulo, autor, anioPublicacion) {
        this.titulo = titulo;
        this.autor = autor;
        this.anioPublicacion = anioPublicacion;
    }
autor
    info() {
        return  this.titulo + " escrito por " + this.autor + " en el año " + this.anioPublicacion;
    }
}

class Biblioteca {
    constructor() {
        this.libros = [];
    }

    añadirLibro(libro) {
        this.libros[this.libros.lenght+1] = libro;
    }

}

const libro1 = new Libro("El principito", "Antoine de Saint-Exupéry", 1943);
const libro2 = new Libro("1984", "George Orwell", 1949);

const biblioteca = new Biblioteca();
biblioteca.añadirLibro(libro1);
biblioteca.añadirLibro(libro2);
