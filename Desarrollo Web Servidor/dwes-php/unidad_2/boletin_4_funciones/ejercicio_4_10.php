<?php
require("ejercicio_4_8.php");

function potencia(int $numero, int $exp): int
{
    if ($exp === 0)
        return 1;
    else
        return $numero * potencia($numero, $exp - 1);
}

$numero = 2;
$exp = 0;

echo cabecera("Ejercicio 4-10");

echo "$numero elevado a $exp es " . potencia($numero, $exp);

echo pie();
