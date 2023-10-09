<!DOCTYPE html>
<html lang="es">
<head>

<meta http-equiv="Content-Type-quot" content="text/html; charset=utf-8">
<title>Ejercicios</title>
</head>
<body>
<?php
$cadena="ApRendEr proGraMarciÓn";
$minuscula=mb_strtolower($cadena);
$cont=mb_strlen($minuscula)/2;

$cont1=$cont*4;

if($cont % 2==0){
    echo str_pad($minuscula,$cont1, "*", STR_PAD_BOTH);
}else{
    $cont1=$cont1+2;
    echo str_pad($minuscula,$cont1, "*", STR_PAD_BOTH);
   
}

?>