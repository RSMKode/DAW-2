<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<?php
//En estos ejercicios solo contemplamos la comprobación de campo vacio

// Comprobamos si hemos llegado pulsando el botón aceptar
if (isset($_POST["enviar"])) {
    if ($_POST["numero"]!="") { // Comprobamos si existe el parámetro numero pasado desde el formulario
        if (($_POST["numero"] % 2) == 0) { // Vemos si es múltiplo de 2.
            echo "El número $_POST[numero] es par."; // Construimos la página indicando que es par.
        } else { // Si no es múltiplo de 2.
            echo "El número  $_POST[numero] es impar."; // Construimos la p�gina indicando que es impar.
        }
    } else
        echo "No se ha podido realizar lo que se pide";
    
} else
    //Si hemos llegado sin pulsar el botón aceptar redireccionamos a 
    //Ejercicio1.html con header
    header("location:ejercicio1.php");
?>
<br>
	<a href='formulario1.php'>Volver</a>
</body>
</html>