<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
<?php
//En estos ejercicios solo contemplamos la comprobación de campo vacio

// Comprobamos si hemos llegado pulsando el botón aceptar
if (isset($_REQUEST["enviar"])) {
    if ($_POST['numero']!="") { // Comprobamos si existe el parámetro numero pasado desde el formulario
        echo "TABLA DE MULTIPLICAR DEL  $_POST[numero] :<br>";
        for ($x = 1; $x <= 10; $x ++) {
            $resultado = $x * $_POST['numero'];
            echo "$x x " . $_POST['numero'] . " = $resultado<br>";
        }
    } else
        echo "No se ha podido realizar lo que se pide";
    // Fin del código php.
} else
    // Si hemos llegado sin pulsar el botón aceptar redireccionamos a
    // Ejercicio2.html con header
    header("location:formulario2.php");
?>
<br>
	<a href='formulario2.php'>Volver</a>
</body>
</html>