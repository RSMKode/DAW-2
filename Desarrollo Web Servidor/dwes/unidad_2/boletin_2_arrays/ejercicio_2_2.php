<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-2</h1>
    <ol>
        <?php
        $numeros = array();

        for ($i = 0; $i < 10; $i++) {
            $numero = rand(1, 6);
            switch ($numero) {
                case 1:
                    $numeros[] = "uno";
                    break;
                case 2:
                    $numeros[] = "dos";
                    break;
                case 3:
                    $numeros[] = "tres";
                    break;
                case 4:
                    $numeros[] = "cuatro";
                    break;
                case 5:
                    $numeros[] = "cinco";
                    break;
                case 6:
                    $numeros[] = "seis";
                    break;
            }
            echo "<li>" . $numeros[$i] . "</li>";
        }
        $minimo = min($numeros);
        ?>
    </ol>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>