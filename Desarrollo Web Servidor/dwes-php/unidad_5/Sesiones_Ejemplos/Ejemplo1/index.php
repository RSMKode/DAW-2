<?php
include ('bGeneral.php');
session_start();
// iniciamos sesión
if (isset($_POST["bAceptar"])) {
    $nombre = recoge("nombre");
    // Aplicariamos las comprobaciones necesarias de obligatoriedad, tipo, etc
    // Introducimos en la variable $_SESSION['nombre'] los datos de la variable $nombre
    // que ya son válidos

    $_SESSION["nombre"] = $nombre;

    echo "<p>" . $_SESSION['nombre'];

    // Haríamos todas las acciones necesarias, almacenar en fichero, en BD, llamar otras páginas, etc

    echo "<p><a href=\"bienvenida.php\">Ir a bienvenida.</a></p>\n";
} else {
    include ("form.php");
}
?>
