<!--Ejemplo de array bidimensional de índice numérico .-->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>

<?php
$usuarios = array(
array("Nacho", "valencia"),
array("Jaime", "Madrid"),
array("Maria", "Barcelona")
);

//Acceso directo a un elemento
echo $usuarios [0][0] ." <br>";

//Recorrido con foreach
foreach($usuarios as $pareja=>$valor)
{
    echo "La pareja número $pareja: <br>";
    foreach($valor as $usuario)
    {
        echo $usuario ." <br>";
    }
    echo "<br>";
}
echo "<br>";
?>