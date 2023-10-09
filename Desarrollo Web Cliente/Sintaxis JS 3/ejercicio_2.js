let n = 2;
function esPrimo(n) {
    if (n <= 1) return false;
    for (let i = 2; i < n; i++) {
        if (n % i === 0) {
            return false;
        }
    }
    return true;
}

console.log(n, esPrimo(n)); // Debería imprimir: true
