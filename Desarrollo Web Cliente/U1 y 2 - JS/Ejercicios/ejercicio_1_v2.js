// Paso 1 y 2: Obtén los números del usuario y conviértelos a números
let num1 = Number(prompt("Introduce el primer número"));
let num2 = Number(prompt("Introduce el segundo número"));
let num3 = Number(prompt("Introduce el tercer número"));

// Paso 3: Encuentra el número mayor
let maxNum = Math.max(num1, num2, num3);

// Paso 4: Muestra el número mayor
alert("El número mayor es ", maxNum);
