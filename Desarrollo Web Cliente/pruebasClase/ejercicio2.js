const cadena = prompt("escribe una cadena");

let contiene = "";

if (cadena === cadena.toLowerCase()){
  contiene = "minusculas";
} else if (cadena === cadena.toUpperCase()){
  contiene = "mayusculas";
} else {
  contiene = 'mayusculas y minusculas'
}

alert('La cadena '+cadena+" contiene "+contiene)
