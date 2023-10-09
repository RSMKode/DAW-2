<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php
$array = [];

for ($i = 0; $i < 10; $i ++) {
    $array[$i] = $i;
}

$mode = current($array);
// Tenemos que hacer la desigualdad comprobando tipos
// Cuando termina el array devuelve false
while ($mode !== false) {
    echo $mode . "<br>";
    //Paso al siguiente elemento con next
    $mode = next($array);
}
echo $mode;
if ($mode === false)
    echo "falso";
?>
</body>
</html>