"use strict";

let int1, int2, int3;
let mayor;

int1 = parseInt(prompt("Escribe el primer número"));
console.log(int1);
int2 = parseInt(prompt("Escribe el segundo número"));
console.log(int2);
int3 = parseInt(prompt("Escribe el tercer número"));
console.log(int3);

mayor = (int1>int2) ? int1 : int2;
console.log("mayor", mayor);
mayor = (mayor>int3) ? mayor : int3;
console.log("mayor", mayor);


alert(mayor);