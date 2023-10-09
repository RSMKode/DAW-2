<html>
<head>
<title>Ejercicio 5-4</title>
</head>
<body>
		<?php

function sinTildes($cad)
{
    $no_permitidas = array(
        "á",
        "é",
        "í",
        "ó",
        "ú",
        "Á",
        "É",
        "Í",
        "Ó",
        "Ú",
        "ñ",
        "À",
        "Ã",
        "Ì",
        "Ò",
        "Ù"
    );
    $permitidas = array(
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U",
        "n",
        "N",
        "A",
        "E",
        "I",
        "O",
        "U"
    );
}

function sinEspacios($frase)
{
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}

function compCaseEsp($cadena1, $cadena2)
{
    $cadena1 = sinEspacios(mb_strtolower(sinTildes($cadena1)));
    $cadena2 = sinEspacios(mb_strtolower(sinTildes($cadena2)));

    return ($cadena1 == $cadena2) ? true : false;
}
$cadena1 = "Hóla  qué tal";
$cadena2 = "hola que tál";

$mensaje = (compCaseEsp($cadena1, $cadena2)) ? "Son iguales" : "No son iguales";
echo $mensaje;
?>
	</body>
</html>