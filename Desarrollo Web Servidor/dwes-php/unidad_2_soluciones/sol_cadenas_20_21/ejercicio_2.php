<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>

<body>

    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";
   
    $array_cadena = explode(" ", $cadena);

    //print_r($splitted_cadena);

    echo "<br />";

    $cadena_len = count($array_cadena);

    if ($cadena_len >= 2) {
        echo "Primera palabra: $array_cadena[0]";
        echo "<br />";
        echo "Segunda palabra: $array_cadena[1]";
    } else {
        echo "Ha de tener mínimo dos palabras.";
    }

    echo "<br />";
    
        
   


    ?>

</body>

</html>