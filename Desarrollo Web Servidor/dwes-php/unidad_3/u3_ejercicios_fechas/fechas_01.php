<?php
require("../../libs/utils.php");

function fechaAUnix1(string $fecha): int | false
{
    $fechaArray = explode("-", $fecha);
    $d = $fechaArray[0];
    $m = $fechaArray[1];
    $y = $fechaArray[2];

    if (checkdate($m, $d, $y)) {
        return strtotime($fecha);
    } else return false;
}

echo cabecera("Ejercicio Fechas 01");

$fecha = "27-5-1998";
echo "<h1>Fecha $fecha</h1>";
if (fechaAUnix1($fecha)) {
    echo date("d-m-Y", fechaAUnix1($fecha));
} else echo "Fecha invalida";
echo pie();
