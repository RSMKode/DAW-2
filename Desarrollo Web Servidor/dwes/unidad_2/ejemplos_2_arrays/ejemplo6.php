<!--Ejemplo de array bidimensional asociativo .-->


<?php
$jugadores = array (
    array(
        'Nombre' => array('Messi, Lionel'),
        'Equipo' => 'Barcelona'
    ),
    array(
        'Nombre' => 'Ronaldo, Cristiano',
        'Equipo' => 'Real Madrid'
    ),
    array(
        'Nombre' => 'Saturno, Sergio',
        'Equipo' => 'Boca Juniors'
    ),
    array(
        'Nombre' => 'Neymar',
        'Equipo' => 'Santos'
    ),
);
echo "<pre>";
print_r($jugadores);
/*accederemos a Messi, Lionel
echo $jugadores[0]["Nombre"]."<br>";

foreach ($jugadores as $jugador ) {
   echo "<br>";
  foreach ($jugador as $dato => $valor) {
        echo "$dato: $valor  " ;
    }

}*/
?>