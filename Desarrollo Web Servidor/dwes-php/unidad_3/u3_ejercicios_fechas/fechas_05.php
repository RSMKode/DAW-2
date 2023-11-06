<?php
require("../../libs/utils.php");
require("./fechaUtils.php");

echo cabecera("Formulario Fechas");
echo "<h1>Diferencia de dias entre 2 fechas</h1>";

$errores = [];

if (!isset($_REQUEST['enviar'])) {
    require('fechaForm.php');
} else {
    //sanitizamos
    $fechaInicio = recoge('fechaInicio');
    $fechaFin = recoge('fechaFin');

    cFecha($fechaInicio, 'fechaInicio', $errores, FORMATOS[0]);
    cFecha($fechaFin, 'fechaFin', $errores, FORMATOS[0]);

    if (!empty($errores)) {
        require('fechaForm.php');
    } else {
        echo "<p>La diferencia de dias entre las fechas $fechaInicio y $fechaFin es: " . dias_entre_fechas($fechaInicio, $fechaFin, FORMATOS[0]) . "</p>";
    }
}

echo pie();
