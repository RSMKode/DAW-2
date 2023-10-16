<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
<?php
// Comienza el código PHP:
// Comprobamos si hemos llegado pulsando el botón aceptar
if (isset($_POST["enviar"])) {
    //Comprobamos si no son campos vacios y si menor es menor que mayor
    if (($_POST['numero1'] != "") && ($_POST['numero2'] != "") && (isset($_POST['operacion']))) {
        switch ($_POST['operacion']) {
            case "suma":
                echo "El resultado de realizar la suma de los números $_POST[numero1] y $_POST[numero2] es: ";
                echo $_POST['numero1'] + $_POST['numero2'];
                break;
            case "resta":
                echo "El resultado de realizar la resta de los números $_POST[numero1] y $_POST[numero2] es: ";
                echo $_POST['numero1'] - $_POST['numero2'];
                break;
            case "producto":
                echo "El resultado de realizar el producto de los números $_POST[numero1] y $_POST[numero2] es: ";
                echo $_POST['numero1'] * $_POST['numero2'];
                break;
            case "cociente":
                if ($_POST['numero2'] == 0) {
                    echo "Imposible realizar una división por CERO.";
                } else {
                    echo "El resultado de realizar la división de los números $_POST[numero1] y $_POST[numero2] es: ";
                    echo $_POST['numero1'] / $_POST['numero2'];
                }
                break;
        }
    } else
        echo "No se ha podido realizar lo que se pide";
} else
    // Si hemos llegado sin pulsar el botón aceptar redireccionamos a
    // Ejercicio1.html con header
    header("location:formulario3.php");
?>
<br>
	<a href='formulario3.php'>Volver</a>
</body>
</html>