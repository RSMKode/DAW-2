<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-1</h1>

    <?php
    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

    foreach ($dias as $clave => $dia) {
        echo "$dia ";
    }
    echo "<br></br>";
    for ($i = 0; $i < count($dias); $i++) {
        echo "$dias[$i] ";
    }
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>