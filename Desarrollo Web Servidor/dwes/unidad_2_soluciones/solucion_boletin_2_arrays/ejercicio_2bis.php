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
    $dados = array(
        1 => "uno",
        2 => "dos",
        3 => "tres",
        4 => "cuatro",
        5 => "cinco",
        6 => "seis"
    );

    echo "Has sacado un " . $dados[(rand(1, 6))];
    ?>

</body>

</html>