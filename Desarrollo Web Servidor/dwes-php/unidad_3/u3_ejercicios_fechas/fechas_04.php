<?php
require("../../libs/utils.php");
require("./fechaUtils.php");


echo cabecera("Diferencia entre fechas");

$formatos = ["dd-mm-aaaa", "aaaa-mm-dd"];
$fecha1 = "27-05-1998";
$fecha2 = "06-11-2023";


echo "<h1>Diferencia de dias entre $fecha1 y $fecha2</h1>";
echo dias_entre_fechas($fecha1, $fecha2, $formatos[0]);
echo pie();
