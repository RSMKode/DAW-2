<?php
include ('bGeneral.php');
session_start();
// iniciamos sesión
// Establecer tiempo de vida de la sesión en segundos

if (isset($_POST["bAceptar"])) {
    $nombre = recoge("nombre");
    // Aplicariamos las comprobaciones necesarias de obligatoriedad, tipo, etc
    // Introducimos en la variable $_SESSION['nombre'] los datos de la variable $nombre
    // que ya son válidos

    $_SESSION["nombre"] = $nombre;

    //Ponemos a time() el contador de inactividad
    $_SESSION["timeout"]=time();

    // Haríamos todas las acciones necesarias, almacenar en fichero, en BD, llamar otras páginas, etc

    
    header("location:bienvenida.php");
} else {
    include ("form.php");
}
?>




