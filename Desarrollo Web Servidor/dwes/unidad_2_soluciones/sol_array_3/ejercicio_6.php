<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php

    $pila = array(
        "Cinco" => 5,
        "Uno" => 1,
        "Cuatro" => 4,
        "Dos" => 2,
        "Tres" => 3
    );

    //Asort
    asort($pila);
    echo "<strong>asort — Ordena un array y mantiene la asociación de índices</strong><br>";
    foreach ($pila as $key => $value) {
        echo "$key = $value<br>";
    }

    //Arsort
    arsort($pila);
    echo "<br><strong>arsort — Ordena un array en orden inverso y mantiene la asociación de índices</strong><br>";
    foreach ($pila as $key => $value) {
        echo "$key = $value<br>";
    }

    //Ksort
    ksort($pila);
    echo "<br><strong>ksort — Ordena un array por clave</strong><br>";
    foreach ($pila as $key => $value) {
        echo "$key = $value<br>";
    }

    //Sort
    sort($pila);
    echo "<br><strong>sort — Ordena un array</strong><br>";
    foreach ($pila as $key => $value) {
        echo "$key = $value<br>";
    }

    //Rsort
    rsort($pila);
    echo "<br><strong>rsort — Ordena un array en orden inverso</strong><br>";
    foreach ($pila as $key => $value) {
        echo "$key = $value<br>";
    }
    ?>
</body>

</html>