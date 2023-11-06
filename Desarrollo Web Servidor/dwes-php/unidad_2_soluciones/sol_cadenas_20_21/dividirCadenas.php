<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>

<body>
<?php
$seed = 'Vivir para cumplir un montón sueños'; 
echo "Separar con str_split<br>";
echo "<br>";
$seed_0 =str_split($seed);
echo "<br>";
print_r ($seed_0);
echo "Separar con preg_split<br>";
echo "<br>";
$seed_1 = preg_split('//u', $seed);
echo "<br>";

print_r ($seed_1);
echo "<br>";
echo "Pasar a mayúsculas con strtoupper<br>";
echo strtoupper($seed);
echo "<br>";
echo "Pasar a mayúsculas con mb_strtoupper<br>";
echo mb_strtoupper($seed);
echo "<br>";
echo "Buscar con strpos<br>";
echo strpos($seed,"ñ");
echo "<br>";
echo "Longitud con strlen<br>";
echo strlen($seed);

echo "<br>";
echo "Buscar con mb_strpos <br>";
echo mb_strpos($seed,"ñ");
echo "<br>";
echo "Longitud con strlen<br>";
echo strlen($seed);
echo "<br>";
echo "<br>Quitar tildes";
echo "<br>";

$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
echo str_replace($no_permitidas, $permitidas ,$seed);
?>
</body>
</html>