<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 9</h1>
    <table>
        <?php
        $numero = 5;
        ?>
        <tr>
            <th>Número</th>
            <th>Resultado</th>
        </tr>
        <?php
        for ($i = 1; $i < 21; $i++) {
            echo "
                <tr>
                    <td>$numero x $i</td>
                    <td>" . $numero * $i . "</td>
                </tr>";
        }
        ?>
    </table>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>