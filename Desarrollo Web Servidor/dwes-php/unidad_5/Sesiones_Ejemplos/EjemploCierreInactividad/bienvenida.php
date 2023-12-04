<?php
include ('bGeneral.php');
session_start();
//iniciamos sesión

$inactividad = 20;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión
$vidaSesion = time() - $_SESSION["timeout"];
if($vidaSesion > $inactividad){
echo "Sesion destruida</br>";
session_unset();
session_destroy();

}else 
{
    $_SESSION["timeout"]=time();
}
}
// Vuelvo a iniciar la sesion

if (isset ($_SESSION['nombre'])) 
echo "Bienvenido ". $_SESSION['nombre']; 


echo "<p><a href=\"bienvenida.php\">Recarga la página para probar el cierre por inactividad.</a></p>\n";



?>
