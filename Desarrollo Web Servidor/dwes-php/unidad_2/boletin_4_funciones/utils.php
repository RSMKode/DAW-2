<?php
// Biblioteca de funciones de usuario: utils.php //

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
function compCaseEsp (string $cadena1, string $cadena2) : int {
    $newCadena1 = sinTildes(sinEspacios($cadena1));
    $newCadena2 = sinTildes(sinEspacios($cadena2));
    
    return strcasecmp($newCadena1, $newCadena2);
}
?>