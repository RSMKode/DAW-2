<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3_1_4 PHP</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        if ($_POST['numero1'] != "" && $_POST['numero2'] != "" && isset($_POST['operacion'])) { // Comprobamos si existen los parámetros pasados desde el formulario
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operaciones = $_POST['operacion'];
            foreach ($operaciones as $operacion) {
                switch ($operacion) {
                    case 'suma':
                        $resultado = $numero1 + $numero2;
                        $operacion = '+';
                        echo "El resultado de la operación: $numero1 $operacion $numero2 = $resultado<br>";
                        break;
                    case 'resta':
                        $resultado = $numero1 - $numero2;
                        $operacion = '-';
                        echo "El resultado de la operación: $numero1 $operacion $numero2 = $resultado<br>";
                        break;
                    case 'producto':
                        $resultado = $numero1 * $numero2;
                        $operacion = '*';
                        echo "El resultado de la operación: $numero1 $operacion $numero2 = $resultado<br>";
                        break;
                    case 'cociente':
                        $resultado = $numero1 / $numero2;
                        $operacion = '/';
                        echo "El resultado de la operación: $numero1 $operacion $numero2 = $resultado<br>";
                        break;
                }
            }
        } else
            echo "Algun campo del formulario está vacío<br>";
    } else
        //Si hemos llegado sin pulsar el botón aceptar redireccionamos a 
        //Ejercicio1.html con header
        header("location:formulario4.php");

    ?>
    <p><a href="./formulario3.php">Volver atrás</a></p>
</body>

</html>