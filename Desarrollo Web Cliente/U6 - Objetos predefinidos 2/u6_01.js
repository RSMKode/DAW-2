"use strict";

const letrasDNI = [];

function solicitarDNI() {
  // Solicitamos el DNI al usuario
  const dni = parseInt(prompt("Introduce un DNI o -1 para parar", "12345678"));

  // Si el DNI es "-1", terminamos el programa
  if (dni === -1) {
    clearInterval(intervalo);
    return console.log(letrasDNI);
  }

  // Si el DNI no es válido, lo volvemos a solicitar
  if (!/^\d{8}$/.test(dni)) {
    console.log("El DNI introducido no es válido.");
    solicitarDNI();
    return;
  }

  letrasDNI.push(letraDNI(dni));
}

function letraDNI(dni) {
  const letras = [
    "T",
    "R",
    "W",
    "A",
    "G",
    "M",
    "Y",
    "F",
    "P",
    "D",
    "X",
    "B",
    "N",
    "J",
    "Z",
    "S",
    "Q",
    "V",
    "H",
    "L",
    "C",
    "K",
    "E",
    "T",
  ];
  return letras[dni % 23];
}

// Iniciamos un intervalo de 20 segundos
const intervalo = setInterval(solicitarDNI, 2000);
