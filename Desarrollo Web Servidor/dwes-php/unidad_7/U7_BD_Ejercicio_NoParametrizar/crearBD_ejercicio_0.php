<?php
include('libs\config.php');

try {

    $pdo = new PDO('mysql:host='.$dbhostname, $dbusuario, $dbpassword);
    //UTF8  
    $pdo->exec("set names utf8");
    // Accionamos el uso de excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Leemos el fichero que contiene el sql
    $sqlBD = file_get_contents("BD_curso_php.sql");
    //Ejecutamos la consulta
    $pdo->exec($sqlBD);
    echo ("La BD ha sido creada");
    //Cerramos conexion
    $pdo = null;
} catch (PDOException $e) {
    // En este caso guardamos los errores en un archivo de errores log
    error_log($e->getMessage() . "## Fichero: " . $e->getFile() . "## Línea: " . $e->getLine() . "##Código: " . $e->getCode() . "##Instante: " . microtime() . PHP_EOL, 3, "logBD.txt");
    // guardamos en ·errores el error que queremos mostrar a los usuarios
    $errores['datos'] = "Ha habido un error o la BD ya estaba creada<br>";
}
if (isset($errores)){
    echo $errores['datos'];
}