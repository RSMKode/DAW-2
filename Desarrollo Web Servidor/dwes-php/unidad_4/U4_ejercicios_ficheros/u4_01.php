<?php
require("../../libs/utils.php");

echo cabecera("U4 Ficheros 01");

function escribirTresNumeros(int $int1, int $int2, int $int3)
{
    $ruta = "./archivos/datosEjercicio01.txt";

    if ($archivo = fopen($ruta, 'r+')) {
        fwrite($archivo, $int1 . PHP_EOL);
        fwrite($archivo, $int2 . PHP_EOL);
        fwrite($archivo, $int3 . PHP_EOL);
        fclose($archivo);
        return true;
    } else return false;
}

echo escribirTresNumeros(rand(100, 0), rand(100, 0), rand(100, 0));

echo pie();
