"use strict";

const cadenaD = "roger:sancho:987654321:rogersanchom@gmail.com:46007";

let cadena = prompt(
  'Introduce una cadena con formato: “nombre:apellidos:telefono:email:codigopostal"'
);

if (cadena === "") cadena = cadenaD;

let datos = cadena.split(":");

let nombre = datos[0];
let apellidos = datos[1];
let telefono = datos[2];
let email = datos[3];
let servidor = email.split("@")[1];
let codigoPostal = datos[4];

let mensaje = `Nombre: ${nombre}\tApellidos: ${apellidos}\tTelefono: ${telefono}\tEmail: ${email}\tServidor: ${servidor}\tCodigo postal: ${codigoPostal}`;

alert(mensaje);
