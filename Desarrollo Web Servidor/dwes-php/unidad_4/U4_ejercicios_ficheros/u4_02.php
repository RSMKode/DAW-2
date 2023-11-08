<?php
require("../../libs/utils.php");

echo cabecera("U4 Ficheros 02");

$ruta = "./archivos/datosEjercicio01.txt";

function obtenerSuma(string $rutaArchivo)
{
    $archivo = fopen($rutaArchivo, "r");
    $suma = 0;
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        $suma += $linea;
    }
    return "La suma del fichero es: $suma";
}

echo obtenerSuma($ruta);

echo pie();
