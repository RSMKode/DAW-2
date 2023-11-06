<?php
require("../../libs/utils.php");
require("fechaUtils.php");

echo cabecera("Ejercicio Fechas 03");

$now = time();
echo "<h1>Fecha actual</h1>";
echo unixAFecha($now, FORMATOS[0]);
echo "<br>";
echo unixAFecha($now, FORMATOS[1]);
echo pie();
