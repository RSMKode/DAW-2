<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-2</h1>

    <?php

    function sinTildes(string $cadena): string
    {
        $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "Ñ", "À", "Ã", "Ì", "Ò", "Ù");
        $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U");
        $texto = str_replace($no_permitidas, $permitidas, $cadena);
        return $texto;
    }
    $cadena = "áéíóúÁÉÍÓÚñÑÀÃÌÒÙ";

    $cadenaST = sinTildes($cadena);

    echo "La cadena $cadena sin caracteres especiales es: $cadenaST";
    echo "<br>";
    echo "<br>";

    echo "PRUEBA CODIFICACION MULTIBYTE ----------------------------------------------------------";
    echo "<br>";
    //PRUEBA PARA VER COMO FUNCIONA AL CODIFICACION MULTIBYTE
    $cadena = "áéíóú";
    $arr = str_split($cadena);
    echo (mb_substr($cadena, 0, 1) === "á")  ? "si" : "no";
    echo "<br>";
    echo mb_substr($cadena, 0, 1);


    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>