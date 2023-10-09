<!DOCTYPE html>
<html lang="es">
<head>

<meta http-equiv="Content-Type-quot" content="text/html; charset=utf-8">
<title>Ejercicios</title>
</head>
<body>

<?php
/*
Dada una frase mostrarla palabra a palabra.

*/


$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

$partes=explode(" ", $frase);
foreach ($partes as $valor){
    echo $valor;
    echo "<br>";
}
