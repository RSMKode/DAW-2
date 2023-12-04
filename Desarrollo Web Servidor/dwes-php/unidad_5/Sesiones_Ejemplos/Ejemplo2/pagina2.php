<?php
/*
 * Si hemos modificado algún parámetro debemos hacerlo en todas las que hagan uso de las funciones.
 */
//ini_set("session.cookie_lifetime", 300);
//ini_set("session.gc_maxlifetime",30);
ini_set('session.gc_divisor', 2);

session_start();

echo "<p>Su nombre es: ". $_SESSION ["nombre"]."</p>";
echo '<a href="pagina3.php">En la siguiente página cerramos la sesión</a>';

?>
