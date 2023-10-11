<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-6</h1>

    <?php

    function negrita(string $cadena): string
    {
        return "<b>$cadena</b>";
    }

    $cadena = "Hola mike ";

    echo $cadena;
    echo negrita($cadena);

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>