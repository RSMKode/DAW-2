<?php

session_start();

$id_sesion_antigua = session_id();
//Con el parametro true borramos la sesión antigua
session_regenerate_id(true);

$id_sesion_nueva = session_id();

echo "Sesión Antigua: $id_sesion_antigua<br />";
echo "Sesión Nueva: $id_sesion_nueva<br />";

print_r($_SESSION);
?>
