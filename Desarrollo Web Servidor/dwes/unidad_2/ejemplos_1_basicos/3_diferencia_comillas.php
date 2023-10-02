<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 2</title>
</head>
<body>
<?php
$variable="Hola";
echo "Para mostrar un entero no es necesario usar \" </br>";
echo 1; //devuelve un 1 al cliente.
echo "</br>Para mostrar una cadena es necesario usar \" o \' </br>";
echo "hola"; //devuelve hola en el al cliente
echo"</br>";
echo 'hola'; //devuelve hola al cliente
echo "</br>Para mostrar el contenido de una variable podemos hacerlo sin \" o con  \" pero no con \' </br>";
echo $variable; //devuelve el valor de la variable

echo "$variable"; //devuelve el valor de la variable

echo '$variable'; //devuelve $variable

$alineacion="center";
//Tenemos que escapar las comillas para que no devuelva error
echo "<h2 align=\"$alineacion\">Encabezado</h2>";
echo"</br>";
//Podemos también hacerlo usando \' pero tenemos que sacar la variable fuera y contatenar

echo '<h2 align="'.$alineacion.'">Encabezado</h2>';

//devuelve al cliente <h2 align="center">Encabezado</h2>


