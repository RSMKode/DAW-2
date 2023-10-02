<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-8</h1>
    <?php
    $paises = [
        "España" => "Madrid",
        "Alemania" => "Berlin",
        "Francia" => "Paris",
        "Austria" => "Viena",
        "Italia" => "Roma"
    ];

    foreach ($paises as $pais => $capital) {
        echo "<ul>";
        echo "<li>$pais" . " --> " . "$capital</li>";
        echo "</ul>";
    };

    ksort($paises);
    echo "<br>";
    echo "ksort(): Ordenado por países";
    echo "<br>";
    foreach ($paises as $pais => $capital) {
        echo "<ul>";
        echo "<li>$pais" . " --> " . "$capital</li>";
        echo "</ul>";
    };

    asort($paises);
    echo "<br>";
    echo "ksort(): Ordenado por capitales";
    echo "<br>";
    foreach ($paises as $pais => $capital) {
        echo "<ul>";
        echo "<li>$pais" . " --> " . "$capital</li>";
        echo "</ul>";
    };
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>