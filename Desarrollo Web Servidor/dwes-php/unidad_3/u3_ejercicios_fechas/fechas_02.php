<?php
require("../../libs/utils.php");

function fechaAUnix2(string $fecha): int | false
{
    $fechaArray = explode("-", $fecha);
    $d = $fechaArray[2];
    $m = $fechaArray[1];
    $y = $fechaArray[0];

    if (checkdate($m, $d, $y)) {
        return strtotime($fecha);
    } else return false;
}

echo cabecera("Ejercicio Fechas 02");

$fecha = "1998-5-27";
echo "<h1>Fecha $fecha</h1>";
if (fechaAUnix2($fecha)) {
    echo date("Y-m-d", fechaAUnix2($fecha));
} else echo "Fecha invalida";
echo pie();
