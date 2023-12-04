<?php
include ("bGeneral.php");
/*Con la siguiente instrucción cambiamos en tiempo de ejecución la directiva
 * session.cookie_lifetime
 * Hacemos que desaparezca la cookie pasado el tiempo que le digamos, 
 * se haya cerrado o no el navegador al cerrar el navegador
 * Ver la diferencia al ejecutarlo de una forma u otra
 * */
//ini_set("session.cookie_lifetime", 300);

//Hacemos que el fichero de sesión se considere basura en el número de segundos que marcamos.
//Se cuenta el tiempo de inactividad
//El tiempo que tarda en borrarse lo definirá el cóciente de borrado definido por
//session.gc_probability y session.gc_dividend,

//ini_set("session.gc_maxlifetime",30);
/*Hacemos que desaparezca del servidor la información
 * de las sesiones destruidas o caducadas. Cada dos session:start.
 * Un valor así sobrecargaría el servidor, mejor valores entre 100 y 200 para servidores en producción
 */
ini_set('session.gc_divisor', 2);
//session_start debe aparecer en todas las páginas que vayamos a hacer uso de las sesiones
session_start();
cabecera('Ejemplo 1');

$_SESSION["nombre"] = "Pepe";

//Una vez almacenado un valor en la variable de sesión podemos hacer uso de ella
if (isset($_SESSION["nombre"]))
echo "<p>Se ha guardado su nombre ". $_SESSION["nombre"].".</p>";
else
echo"<p>La variable de sesion nombre no existe</p>";
echo '<a href="pagina2.php">Probamos las sesiones</a>';

pie();
?>
