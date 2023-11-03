
function esPrimo(num) {
  if (num === 1) return false;

  for (let i = 2; i < num; i++) {
    if (num % i === 0) {
      return false;
    }
  }
  return true;
}

function esPalindromo(num) {
    let numString = num.toString();
    if (numString.length === 1) return false;
    let numReversed = numString.split("").toReversed().join("");
    return numString === numReversed;
}

const numeros = [];
for (let i = 1; i<=100000; i++) {
    if (esPrimo(i) && esPalindromo(i)) numeros.push(i);
}

console.log(numeros);