<?php
require('../../libs/config.php');
require('../../libs/utils.php');
require('../../libs/componentes.php');
require('../../libs/bSeguridad.php');
require('modelo/conexion.php');
require('modelo/consultas.php');

session_start();
$errores = [];

if (!isset($_SESSION['acceso'])) {
    $_SESSION['acceso'] = 0;
}
try {
    if (isset($_REQUEST['enviar'])) {
        $user = recoge('user');
        $pass = recoge('pass');
        require('libs/config.php');

        require('modelo/conexion.php');
        require('modelo/consultas.php');
        //Verificamos que la consulta sólo nos ha devuelto un usuario
        if (count($datosUsers = verificaUsuario($pdo, $user)) === 1) {
            //Comprobamos password
            if (comprobarhash($pass, $datosUsers[0]['pass']));
            //Almacenamos en sesión todo lo necesario. Si tenemos ruta imagen perfil y nivel usuario
            $_SESSION['acceso'] = 1;
            $_SESSION['usuario'] = $user;
            $_SESSION['nombre'] = $datosUser[0]['nombre'];
            header("location:u7_1_BUENA.php");
        } else {
            include('form-login.php');
        }
    } else
        include('form-login.php');
} catch (PDOException $e) {


    error_log($e->getMessage() . "##Código: " . $e->getCode() . "  " . /*$fechaformatoddmmaaaa*/ microtime()  . PHP_EOL, 3, "logBD.txt");
    // guardamos en ·errores el error que queremos mostrar a los usuarios
    $errores['datos'] = "Ha habido un error <br>";
}
