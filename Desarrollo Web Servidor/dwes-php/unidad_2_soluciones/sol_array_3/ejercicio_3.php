<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>
<body>
<?php
$colores = array(

    "ColoresFuerte" => array(
        "rojo" => "FF0000",
        "verde" => "00FF00",
        "azul" => "0000FF"
    ),
    "ColoresSuaves" => array(
        "rosa" => "FE9ABC",
        "amarillo" => "FDF189",
        "malva" => "BC8F8F"
    )
);

echo "<table border='1'>";

foreach ($colores as $key => $val) {
    echo " <tr> <td>$key</td>";

    foreach ($val as $clave => $v) {
        echo " <td style=background-color:#$v>$clave:$v</td>";
    }

    echo "</tr>";
    // in_array hay que ejecutarlo fila a fila
    if (in_array("FF88CC", $val)) {
        echo "Se encuentra dentro el FF88CC";
    }
    if (in_array("FF0000", $val)) {
        echo "Se encuentra dentro el  FF0000";
    }
}

echo "</table>";
?>
</body>
</html>