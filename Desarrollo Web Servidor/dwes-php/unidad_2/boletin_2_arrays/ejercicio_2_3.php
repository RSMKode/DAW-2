<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-3</h1>
    <ol>
        <?php
        $multiplos = [];
        $numero = 3;

        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($j === 0) {
                    $multiplos[$i][$j] = $i + 1;
                } else {
                    $multiplos[$i][$j] = $multiplos[$i][$j - 1] * $numero;
                }
            }
        }

        foreach ($multiplos as $fila) {
            foreach ($fila as $valor) {
                echo "$valor, ";
            }
            echo "<br>";
        }
        echo "<pre>";
        print_r($multiplos);
        echo "<pre>";
        ?>
    </ol>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>