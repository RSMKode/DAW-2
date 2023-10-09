<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-10</h1>
    <?php
    $pila = array("cinco" => 5, "uno" => 1, "cuatro" => 4, "dos" => 2, "tres" => 3);

    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    asort($pila);
    echo "<br>";
    echo "asort(): Ordena un array y mantiene la asociación de índices";
    echo "<br>";
    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    arsort($pila);
    echo "<br>";
    echo "arsort(): Ordena un array en orden inverso y mantiene la asociación de índices";
    echo "<br>";
    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    ksort($pila);
    echo "<br>";
    echo "ksort(): Ordena un array por clave en orden inverso";
    echo "<br>";
    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    sort($pila);
    echo "<br>";
    echo "sort(): Ordena un array";
    echo "<br>";
    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    rsort($pila);
    echo "<br>";
    echo "rsort(): Ordena un array en orden inverso";
    echo "<br>";
    foreach ($pila as $numero => $valor) {
        echo "<ul>";
        echo "<li>$numero" . " --> " . "$valor</li>";
        echo "</ul>";
    };

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>