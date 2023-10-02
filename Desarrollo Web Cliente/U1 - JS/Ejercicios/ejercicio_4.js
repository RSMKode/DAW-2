let repetir;
do {
  let int1, int2, int3;
  int1 = Number(prompt("Introduce el primer número"));
  int2 = Number(prompt("Introduce el segundo número"));
  int3 = Number(prompt("Introduce el tercer número"));

  let max = Math.max(int1, int2, int3);

  alert(`El número máximo es: ${max}`);

  repetir = window.confirm("¿Quiéres repetir la ejecución del programa?");
} while (repetir);
