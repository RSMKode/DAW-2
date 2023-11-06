<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-1</h1>

    <?php

    function capitales(string $pais, string $capital = "Madrid", string $habitantes = "muchos"): string
    {
        return "La capital de $pais es $capital y tiene $habitantes habitantes.";
    }

    echo capitales("España");
    echo "<br>";
    echo capitales("Portugal", "Lisboa");
    echo "<br>";
    echo capitales("Francia", "Paris", "6.000.000");
    echo "<br>";

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>