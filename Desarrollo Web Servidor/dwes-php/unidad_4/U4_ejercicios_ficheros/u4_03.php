<?php
require("../../libs/utils.php");

echo cabecera("U4 Ficheros 02");

$ruta = "./archivos/counter.txt";

function contadorVisitas(string $rutaArchivo)
{
    $archivo = fopen($rutaArchivo, "r+");
    rewind($archivo);
    $visitas = fgets($archivo);
    $visitas == "" ? $visitas = 0 : $visitas;
    $visitas++;
    rewind($archivo);
    fwrite($archivo, $visitas);
    fclose($archivo);

    return "La visitas a la página: $visitas";
}

echo contadorVisitas($ruta);

echo pie();
