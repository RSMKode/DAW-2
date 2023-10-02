<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-9</h1>
    <table>
        <?php
        $asig1 = "Servidor";
        $asig2 = "Cliente";
        $asig3 = "Diseño";

        $alumnos = [
            "Pablo" => [
                $asig1 => "10",
                $asig2 => "8",
                $asig3 => "9"
            ],
            "Jose" => [
                $asig1 => "5",
                $asig2 => "8",
                $asig3 => "4"
            ],
            "Víctor" => [
                $asig1 => "9",
                $asig2 => "7",
                $asig3 => "8"
            ],
            "Mateo" => [
                $asig1 => "8",
                $asig2 => "6",
                $asig3 => "5"
            ],
            "Juan" => [
                $asig1 => "10",
                $asig2 => "9",
                $asig3 => "6"
            ],
        ];

        echo "
            <tr>
                <th></th>
                <th>$asig1</th>
                <th>$asig2</th>
                <th>$asig3</th>
            </tr>";

        foreach ($alumnos as $alumno => $asignaturas) {
            echo "<tr>";
            echo "<th>$alumno</th>";
            foreach ($asignaturas as $asignatura => $nota) {
                echo "<td style=\"background-color:#BBBBBB; text-align: center\">$nota</td>";
            }
            echo "</tr>";
        };
        ?>
    </table>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>