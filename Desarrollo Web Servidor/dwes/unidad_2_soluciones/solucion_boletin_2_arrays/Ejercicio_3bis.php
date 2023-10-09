<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>
<body>
<?php
$array=array();
//$array=array(4,4);

for($i=0;$i<=3;$i++){
    $array[$i][0]=$i+1;
    for($j=1;$j<=3;$j++){
        $array[$i][$j]=$array[$i][$j-1]*3;     
    }
   
}
//print_r($array);
echo "<table border='2'>";

foreach ($array as $fila){
    echo "<tr>";
    foreach($fila as $valor){
        echo "<td>";
        echo "$valor ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>