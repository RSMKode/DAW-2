<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-7</h1>

    <?php

    function mb_ucwords(string $cadena): string
    {
        $cadena2 = mb_strtoupper(mb_substr($cadena, 0, 1)) . mb_substr($cadena, 1);
        return $cadena2;
    }

    $cadena = "mayusculas ";

    echo $cadena;
    echo mb_ucwords($cadena);

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>