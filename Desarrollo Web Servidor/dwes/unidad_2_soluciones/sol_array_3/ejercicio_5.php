<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 5</title>
</head>
<body>
<?php
$array = array(
    array(
        "nombre" => "Willyrex",
        "servidor" => 5,
        "cliente" => 7,
        "diseño" => 7
    ),
    array(
        "nombre" => "Buda",
        "servidor" => 7,
        "cliente" => 3,
        "diseño" => 2
    ),
    array(
        "nombre" => "Ghandi",
        "servidor" => 6,
        "cliente" => 8,
        "diseño" => 3
    ),
    array(
        "nombre" => "tupadre",
        "servidor" => 5,
        "cliente" => 6,
        "diseño" => 6
    ),
    array(
        "nombre" => "joseluis",
        "servidor" => 1,
        "cliente" => 8,
        "diseño" => 8
    )
);
echo "<table>";

$media_servidor = 0;
$media_cliente = 0;
$media_disenyo = 0;

echo "<tr>";
echo "<br>";

$llaves = array_keys($array[0]);
for ($i = 0; $i < 4; $i ++) {
    echo "<td>";
    echo $llaves[$i];
    echo "</td>";
}
echo "<td>";
echo "media";
echo "</td>";

echo "</tr>";
$media = 0;
foreach ($array as $value) {
    echo "<tr>";
    echo "<td>";
    echo $value["nombre"] . ": ";
    echo "</td>";
    echo "<td>";
    echo $value["servidor"];
    echo "</td>";
    echo "<td>";
    echo $value["cliente"];
    echo "</td>";
    echo "<td>";
    echo $value["diseño"];
    echo "</td>";
    echo "<td>";
    echo $media = number_format(($value["diseño"] + $value["cliente"] + $value["servidor"]) / 3, 2);
    echo "</td>";
    echo "</tr>";

    $media_servidor += $value["servidor"];
    $media_cliente += $value["cliente"];
    $media_disenyo += $value["diseño"];
}

echo "<tr>";
echo "<td>";
echo "Media asignatura: ";
echo "</td>";
echo "<td>";
echo $media_servidor / 5;
echo "</td>";
echo "<td>";
echo $media_cliente / 5;
echo "</td>";
echo "<td>";
echo $media_disenyo / 5;
echo "</td>";
echo "</tr>";
?>	
	</table>
</body>
</html>