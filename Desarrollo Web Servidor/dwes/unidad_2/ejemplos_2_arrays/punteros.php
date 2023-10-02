<?php
//ejemplo de recorrido de arrays con punteros

$transport = array('pie', 'bici', 'coche', 'avión');
echo "<pre>". print_r($transport)."</pre>";

$mode = current($transport); // $mode = 'pie';
echo $mode . "<br>";
$mode = next($transport);    //Cuando llega al final devuelve false $mode = 'bici';
echo $mode . "<br>";
$mode = current($transport); // $mode = 'bici';
echo $mode . "<br>";
$mode = prev($transport);    // $mode = 'pie';
echo $mode . "<br>";
$mode = end($transport);     // $mode = 'avión';
echo $mode . "<br>";
$mode = reset($transport);     // Vuelve al primero $mode = 'pie';
echo $mode . "<br>";
$mode = current($transport); // $mode = 'pie';
echo $mode . "<br>";




array_push ( $transport , "barco" );
echo "<pre>". print_r($transport)."</pre>";

array_pop ( $transport);
echo "<pre>". print_r($transport)."</pre>";


?>
