
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
<?php
// Recorrido de array con foreach sin leer clave
$frutas = array(
    "melón",
    "sandía",
    "naranja"
);
foreach ($frutas as $valor) {
    echo "Valor: $valor </br>";
}
// Recorrido de array con foreach leyendo clave
$frutas = array(
    "melón",
    "sandía",
    "naranja"
);
foreach ($frutas as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor</br>";
}
?>



