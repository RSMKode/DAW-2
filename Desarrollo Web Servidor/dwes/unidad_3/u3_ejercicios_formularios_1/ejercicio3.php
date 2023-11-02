<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3_1_3 PHP</title>
</head>

<body>
    <?php

    if (isset($_POST['enviar'])) {
        if ($_POST['numero1'] != "" && $_POST['numero2'] != "" && isset($_POST['operacion'])) { // Comprobamos si existen los parámetros pasados desde el formulario
            $numero1 = $_REQUEST['numero1'];
            $numero2 = $_REQUEST['numero2'];
            $operacion = $_REQUEST['operacion'];
            switch ($operacion) {
                case 'suma':
                    $resultado = $numero1 + $numero2;
                    $operacion = '+';
                    break;
                case 'resta':
                    $resultado = $numero1 - $numero2;
                    $operacion = '-';
                    break;
                case 'producto':
                    $resultado = $numero1 * $numero2;
                    $operacion = '*';
                    break;
                case 'cociente':
                    $resultado = $numero1 / $numero2;
                    $operacion = '/';
                    break;
            }
            echo "El resultado de la operación es: $numero1 $operacion $numero2 = $resultado<br>";
        } else
            echo "Algun campo del formulario está vacío<br>";
    } else
        //Si hemos llegado sin pulsar el botón aceptar redireccionamos a 
        //Ejercicio1.html con header
        header("location:formulario3.php");

    ?>
    <p><a href="./formulario3.php">Volver atrás</a></p>
</body>

</html>