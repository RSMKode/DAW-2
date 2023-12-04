function cifrar(cadena, desplazamiento) {
  const abc = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  if (desplazamiento > abc.length) {
    desplazamiento = desplazamiento % abc.length;
  }

  const cifrado =
    abc.substring(desplazamiento) + abc.substring(0, desplazamiento);
  console.log(cifrado);

  arrayCadena = cadena.split("");
  console.log(arrayCadena);

  for (let i = 0; i < arrayCadena.length; i++) {
    if (arrayCadena[i] != " " && isNaN(arrayCadena[i])) {
      let posicionLetra = abc.indexOf(arrayCadena[i]);
      let letraCifrada = cifrado[posicionLetra];
      arrayCadena[i] = letraCifrada;
    }
  }
  console.log(arrayCadena);

  return arrayCadena.join("");
}

let cadena = prompt("Introduce una cadena");

let desplazamiento = parseInt(prompt("Introduce un desplazamiento"));

console.log(isNaN("a"));

alert(cifrar(cadena, desplazamiento));
