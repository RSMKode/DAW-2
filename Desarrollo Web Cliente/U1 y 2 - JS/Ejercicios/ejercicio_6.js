"use strict";

const enteros = [5, 37, 4, 58, 21, 56, 35, 44, 99, 61, 3];

enteros.sort((a, b) => a - b);

console.log(enteros);
console.log(Math.max(...enteros));
console.log(Math.min(...enteros));
const sum = enteros.reduce((a, b) => a + b);
console.log(sum);
const avg = sum / enteros.length;
console.log(avg);
