<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
<?php
$tirada1 = rand(1, 6);
$tirada2 = rand(1, 6);
$total = $tirada1 + $tirada2;
// "animales" no se muestra
$animales = array(
    "animales",
    "burro",
    "cerdo",
    "oveja",
    "panda",
    "rana",
    "raton",
    "tigre",
    "vaca",
    "leon",
    "elefante",
    "oso",
    "hipopotamo"
);

echo "<img src='imagenes/dado/$tirada1.jpg'></img>", "<img src='imagenes/dado/$tirada2.jpg'></img> <br>";
echo "El resultado total es : $total <br>";

echo "<img src='imagenes/animales/$animales[$tirada1].jpg'></img>";
echo "<img src='imagenes/animales/$animales[$tirada2].jpg'></img>";
echo "<img src='imagenes/animales/$animales[$total].jpg'></img>";

?>
</body>
</html>