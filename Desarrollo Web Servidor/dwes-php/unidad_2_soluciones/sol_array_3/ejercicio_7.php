<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 7</title>
</head>
<body>
    <?php
       $array = ["España" => "Madrid","Portugal" => "Lisboa","Francia" => "París","Inglaterra" => "Londres","Alemania" => "Berlín"];
       

       
       foreach($array as $key => $value){
           echo "La capital de $key es $value<br>";
       }
       echo "<br>Ordenado por pais<br>";
       ksort($array);
       foreach($array as $key => $value){
           echo "La capital de $key es $value<br>";
       }
       
       echo "<br>Ordenado por ciudad<br>";
       asort($array);
       foreach($array as $key => $value){
           echo "La capital de $key es $value<br>";
       }
     
    ?>
</body>
</html>
