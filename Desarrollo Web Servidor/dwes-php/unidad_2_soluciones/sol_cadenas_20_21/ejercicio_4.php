<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
    <?php
       $frase = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
       $vocales = ["a","e","i","o","u"];
       
       foreach($vocales as $vocal){
           echo "La vocal '$vocal' aparece ".mb_substr_count(mb_strtolower($frase),$vocal)." veces.<br>";
       }
       
    ?>
</body>
</html>