<html>

<head>
    <title> Ejercicios </title>
</head>

<body>
    <h1>Ejercicio 2-8</h1>
    <table>
        <?php
        $colores = [
            "Colores fuertes" => [
                "Rojo" => "FF0000",
                "Verde" => "00FF00",
                "Azul" => "0000FF"
            ],
            "Colores suaves" => [
                "Rosa" => "FE9ABC",
                "Amarillo" => "FDF189",
                "Malva" => "BC8F8F"
            ]
        ];

        foreach ($colores as $tipo => $arrayColores) {
            echo "<tr>";
            echo "<th>$tipo</th>";
            foreach ($arrayColores as $color => $valor) {
                echo "<td style=\"background-color:$valor\">$color: $valor</td>";
            }
            echo "</tr>";
        };
        echo "Esta el color FF0000?: " . (in_array("FF0000", $colores["Colores fuertes"]) ? "Si" : "No");
        echo "<br>";
        echo "Esta el color FF88CC?: " . (in_array("FF88CC", $colores["Colores suaves"]) ? "Si" : "No");
        ?>
    </table>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>