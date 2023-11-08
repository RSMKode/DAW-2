<?php
include ('bGeneral.php');
date_default_timezone_set('America/Los_Angeles');
//date_default_timezone_set('Europe/London');
//La función cabecera es una función propia que introduce la cabecera html
cabecera($_SERVER['PHP_SELF']);
echo "<br>Mostramos la fecha formato UNIX <br>";

$fecha = time();
echo $fecha;
echo "<br>";
echo "<br>Ahora mostramos la fecha con formato <br>";
$fecha_con_formato = date("d/m/Y -- H:i:s");
echo $fecha_con_formato;
?>