<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-12</h1>
    <?php
    $miArray = [
        "España" => "Madrid",
        "Alemania" => "Berlin",
        "Francia" => "Paris",
        "Austria" => "Viena",
        "Italia" => "Roma",
        4, 5, 7, 9, 8
    ];

    $actual = current($miArray);

    echo "<ul>";
    echo "<li>$actual</li>";
    ;

    next($miArray);
    $actual = current($miArray);

    echo "<li>$actual</li>";
    ;

    end($miArray);
    $actual = current($miArray);

    echo "<li>$actual</li>";
    ;

    prev($miArray);
    $actual = current($miArray);

    echo "<li>$actual</li>";
    ;

    reset($miArray);
    $actual = current($miArray);

    echo "<li>$actual</li>";
    echo "</ul>";
    ;

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>