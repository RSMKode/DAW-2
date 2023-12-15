<?php


//Ponemos la conexión dentro de un bloque try para poder capturar la excepción, si la hubiera
try {
    // Conectamos
    require('../../libs/config.php');
    require('../../libs/utils.php');
    require('../../libs/componentes.php');
    require('../../libs/bSeguridad.php');
    require('modelo/conexion.php');
    require('modelo/consultas.php');

    session_start();

    $errores = [];

    $arrayLocalidades = selectLocalidadesForm($pdo);

    if (!isset($_SESSION['acceso'])) {
        $_SESSION['acceso'] = 0;
    }

    if (isset($_REQUEST['enviar'])) {

        $nombre = recoge("nombre");
        $puesto = recoge("puesto");
        $fechaNacimiento = recoge("fechaNacimiento");
        $salario = recoge("salario");
        $localidad = recoge("localidad");
        $user = recoge("user");
        $pass = recoge("pass");

        cTexto($nombre, "nombre", $errores);
        cTexto($puesto, "puesto", $errores);
        cFecha($fechaNacimiento, "fechaNacimiento", $errores, "aaaa-mm-dd");
        cNum($salario, "salario", $errores, false, 10000);

        cSelectAsociativo($localidad, "localidad", $errores, $arrayLocalidades);

        if (empty($errores)) {
            //Encriptamos la contraseña
            $pass = encriptar($pass);
            if (insertEmpleado($pdo, $nombre, $puesto, $fechaNacimiento, $salario, $localidad, $user, $pass)) {
                header("location:u7_1_BUENA.php");
            } else {
                $errores["datos"] = "Ha habido un error";
                require("form-insert.php");
            }
        } else {
            require("form-insert.php");
        }
    } else {
        require("form-insert.php");
    }
} catch (PDOException $e) {
    // En este caso guardamos los errores en un archivo de errores log
    error_log($e->getMessage() . "## Fichero: " . $e->getFile() . "## Línea: " . $e->getLine() . "##Código: " . $e->getCode() . "##Instante: " . microtime() . PHP_EOL, 3, "logBD.txt");
    // guardamos en ·errores el error que queremos mostrar a los usuarios
    if ($e->getCode() == 23000) {
        $errores['datos'] = "Ya existe ese usuario en la BD";
    } else {
        $errores['datos'] = "Ha sucedido un error en la inserción";
    }
}
echo "<pre>";
print_r($errores);
echo "</pre>";
