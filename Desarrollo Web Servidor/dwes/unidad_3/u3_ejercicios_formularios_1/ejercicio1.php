<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3_1_1 PHP</title>
</head>

<body>
    <?php
    //En estos ejercicios solo contemplamos la comprobación de campo vacio
    // Comprobamos si hemos llegado pulsando el botón aceptar
    if (isset($_POST['enviar'])) {
        if ($_POST['numero'] != "") { // Comprobamos si existe el parámetro numero pasado desde el formulario
            $numero = $_POST['numero'];
            $numero % 2 == 0 ? $es_par = "par" : $es_par = "impar";
            echo "El numero $numero es $es_par";
        } else
            echo "El campo número está vacío<br>";
    } else
        //Si hemos llegado sin pulsar el botón aceptar redireccionamos a 
        //Ejercicio1.html con header
        header("location:formulario1.php");
    ?>
    <p><a href="./formulario1.php">Volver atrás</a></p>
</body>

</html>