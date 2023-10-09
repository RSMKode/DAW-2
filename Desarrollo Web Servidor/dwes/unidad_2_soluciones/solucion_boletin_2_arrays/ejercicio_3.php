<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>
<body>
    <?php
    $matriz = [];
   
    for($i=0;$i<=3;$i++){
        $matriz[$i][0] =$i+1;
        for($a=1;$a<=3;$a++){
            $matriz[$i][$a] = ($matriz[$i][$a-1])*3;
        }
            
    }
    echo "<pre>";
    print_r($matriz);
    echo "</pre>";
   
    ?>
</body>
</html>