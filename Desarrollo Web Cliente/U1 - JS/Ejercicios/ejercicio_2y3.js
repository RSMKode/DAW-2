let salario = Number(prompt("Introduce tu salario: "));
let rango = Number(prompt("Introduce tu rango: "));

while (rango < 1 || rango > 4 || salario < 1000 || salario > 20000) {
  alert("El rango o el salario introducido no son válidos.");
  salario = Number(prompt("Introduce tu salario: "));
  rango = Number(prompt("Introduce tu rango: "));
}

switch (rango) {
  case 1:
    salario *= 1.2;
    break;
  case 2:
    salario *= 1.1;
    break;
  case 3:
    salario *= 1.05;
    break;
  case 4:
    salario *= 1.03;
    break;
  default:
}

alert(`Tu nuevo salario es de ${salario}€.`);
