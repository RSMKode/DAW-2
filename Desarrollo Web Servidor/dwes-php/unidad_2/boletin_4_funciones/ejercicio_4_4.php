<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 4-4</h1>

    <?php

    //Quita las tildes y los caracteres especiales.
    function sinTildes(string $cadena): string
    {
        $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "Ñ", "À", "Ã", "Ì", "Ò", "Ù");
        $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U");
        $texto = str_replace($no_permitidas, $permitidas, $cadena);
        return $texto;
    }

    //Quita los espacios en blanco redundantes y al inicio y al final.
    function sinEspacios(string $cadena): string
    {
        $texto = trim(preg_replace('/ +/', " ", $cadena));
        return $texto;
    }

    //Compara dos cadenas ignorando mayúsculas y minúsculas y sin tildes ni espacios utilizando las funciones anteriores.
    function compCaseEsp(string $cadena1, string $cadena2): int
    {
        $newCadena1 = sinTildes(sinEspacios($cadena1));
        $newCadena2 = sinTildes(sinEspacios($cadena2));

        return strcasecmp($newCadena1, $newCadena2);
    }

    $cadena1 = "    La  vida es   asi  de  dura  ";
    $cadena2 = " La vida Es Así de Dura ";



    echo "La cadena 1 --> <pre>$cadena1</pre> y cadena 2 --> <pre>$cadena2</pre> ";
    echo  compCaseEsp($cadena1, $cadena2) == 0 ? "Son iguales" : "No son iguales";
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>