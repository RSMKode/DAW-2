const regexContraseña = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}$/;
let intentos = 6;
let contraseña = "";
let contraseñaCorrecta = false;

do {
  contraseña = prompt(
    "Escribe una contraseña de al menos 8 caracteres que contenga al menos una mayuscula, una minuscula y un número:"
  );
  contraseñaCorrecta = regexContraseña.test(contraseña);
  contraseñaCorrecta
    ? alert("Contraseña correcta.")
    : alert("Contraseña incorrecta, por favor, vuelve a intentarlo.");
  intentos--;
} while (intentos > 0 && !contraseñaCorrecta);

intentos <= 0 &&
  alert("Se han acabado los intentos, por favor intentelo más tarde.");
