<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 12</h1>
    <ol>
        <?php
        $numeros = [];
        $tiradas = 20;
        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $c4 = 0;
        $c5 = 0;
        $c6 = 0;

        for ($i = 0; $i < $tiradas; $i++) {
            $numeros[] = rand(1, 6);
            echo "<li>" . $numeros[$i] . "</li>";
            switch ($numeros[$i]) {
                case 1:
                    $c1++;
                    break;
                case 2:
                    $c2++;
                    break;
                case 3:
                    $c3++;
                    break;
                case 4:
                    $c4++;
                    break;
                case 5:
                    $c5++;
                    break;
                case 6:
                    $c6++;
                    break;
            }
        }

        ?>
    </ol>
    <p>1: <strong><?= $c1 ?></strong> veces
    <p>
    <p>2: <strong><?= $c2 ?></strong> veces
    <p>
    <p>3: <strong><?= $c3 ?></strong> veces
    <p>
    <p>4: <strong><?= $c4 ?></strong> veces
    <p>
    <p>5: <strong><?= $c5 ?></strong> veces
    <p>
    <p>6: <strong><?= $c6 ?></strong> veces
    <p>

    <p><a href="./">Volver atrás</a></p>
</body>

</html>