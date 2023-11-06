
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
    $cadena1 = sinEspacios(sinTildes($cadena1));

    return ($cadena1 == $cadena2) ? true : false;
}

?>
