<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    
foreach($dias as $key => $nombreDia){
    echo "Día con índice $key: $nombreDia<br><br>";
}
 
echo "Ahora con el bucle for <br>";
$dias_len = count($dias);

for ($i = 0; $i < $dias_len; $i++) {
    echo "Índice: " . $i . " día: " . $dias[$i] . ".<br />";
}
?>
</body>
</html>