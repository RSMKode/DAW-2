function fibonacci(n) {
    let a = 0, b = 1, temp;

    while (n > 0){
        temp = a+b
        a = b;
        b = temp;
        n--;
    }

    return b;
}

console.log(fibonacci(7)); // Debería imprimir: 13
