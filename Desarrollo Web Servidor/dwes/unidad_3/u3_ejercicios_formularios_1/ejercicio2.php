<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3_1_2 PHP</title>
</head>

<body>
    <?php
    //En estos ejercicios solo contemplamos la comprobación de campo vacio

    // Comprobamos si hemos llegado pulsando el botón aceptar
    if (isset($_POST['enviar'])) {
        if ($_POST['numero'] != "") { // Comprobamos si existe el parámetro numero pasado desde el formulario
            $numero = $_REQUEST['numero'];
            $tabla_multiplicar = [];
            echo "La tabla de multiplicar de $numero es:<br>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$numero * $i  = " . $numero * $i . "<br>";
            }
        } else
            echo "El campo número está vacío<br>";
    } else
        //Si hemos llegado sin pulsar el botón aceptar redireccionamos a 
        //Ejercicio1.html con header
        header("location:formulario2.php");
    ?>
    <p><a href="./formulario2.php">Volver atrás</a></p>
</body>

</html>