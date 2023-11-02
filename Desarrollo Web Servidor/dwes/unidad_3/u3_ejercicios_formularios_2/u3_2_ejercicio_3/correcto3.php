<?php
include('../../../libs/utils.php');

echo cabecera();

$nombre = recoge('nombre');
$provincia = recoge('provincia');
$aficiones = unserialize(recoge('aficiones'));

echo "Nombre: $nombre";
echo '<br>';
echo "Provincia: $provincia";
echo '<br>';
echo "Aficiones:";
echo '<br>';
//Volvemos a convertir en array los datos serielizados en ejercicio3.php
foreach ($aficiones as $aficion)
    echo $aficion . "<br>";
echo '<br>';
echo '<a href="./procesaForm3.php">Volver al formualrio</a>';
echo '<br>';
echo pie();
