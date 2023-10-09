<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-3</h1>

    <?php

    function sinEspacios(string $cadena): string
    {
        $texto = trim(preg_replace('/ +/', " ", $cadena));
        return $texto;
    }
    $cadena = "    La  vida es   asi  de  dura  ";

    $cadenaSE = sinEspacios($cadena);

    echo "La cadena --> <pre>$cadena</pre> <-- arreglada es: <pre>$cadenaSE</pre>";
    echo "<br>";
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>