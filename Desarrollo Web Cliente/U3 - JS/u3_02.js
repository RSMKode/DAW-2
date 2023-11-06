"use strict";

class Alumno {
  constructor(nombre, dni, notaMedia) {
    this.nombre = nombre;
    this.dni = dni;
    this.notaMedia = notaMedia;
  }

  getNotaMedia() {
    return this.notaMedia;
  }
  setNotaMedia(nuevaNota) {
    this.notaMedia = nuevaNota;
  }
}

class Colegio {
  constructor(nombre, nAulas, nAlumnos) {
    this.nombre = nombre;
    this.nAulas = nAulas;
    this.alumnos = [];
    for (let i = 0; i < nAlumnos; i++) {
      let notaRandom = Math.round(Math.random() * 10);
      this.alumnos.push(new Alumno(`Alumno ${i}`, i, notaRandom));
    }
    this.nAlumnos = this.alumnos.length;
  }

  addAlumno(alumno) {
    this.alumnos.push(alumno);
  }

  getNotaMediaTotal() {
    let sumaNota = 0;
    for (let alumno of this.alumnos) {
      sumaNota += alumno.notaMedia;
    }
    return sumaNota / this.alumnos.length;
  }

  getNotaMedia(dniAlumno) {
    for (let alumno of this.alumnos) {
      if (dniAlumno === alumno.dni) return alumno.getNotaMedia();
    }
  }
  setNotaMedia(dniAlumno, nuevaNota) {
    for (let alumno of this.alumnos) {
      if (dniAlumno === alumno.dni) alumno.setNotaMedia(nuevaNota);
    }
  }
}

function main() {
  // Creo un colegio
  const miCole = new Colegio("IES Abastos", 10, 10);

  // Consulto
  console.log(miCole.getNotaMedia(0));
  console.log(miCole.getNotaMedia(2));
  miCole.setNotaMedia(0, 10.0);
  miCole.setNotaMedia(2, 7.5);
  console.log(miCole.getNotaMedia(0));
  console.log(miCole.getNotaMedia(2));
}

// Llamamos a la funcion principal
main();
