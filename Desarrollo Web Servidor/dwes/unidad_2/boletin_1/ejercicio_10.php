<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 11</h1>
    <h1>Ejercicio 10</h1>
    <ol>
        <?php
        $numeros = array();

        for ($i = 0; $i < 10; $i++) {
            $numeros[] = rand(1, 6);
            echo "<img src=\"./imagenes/dado/$numeros[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
            echo "<li>" . $numeros[$i] . "</li>";
        }
        $minimo = min($numeros);

        //$frecuencia = array_count_values($numeros);
        $veces = array_count_values($numeros)[$minimo];
        ?>
    </ol>
    <p>El valor mínimo ha sido: <strong><?= $minimo ?></strong> y ha aparecido <strong><?= $veces ?></strong> vez/veces
    <p>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>