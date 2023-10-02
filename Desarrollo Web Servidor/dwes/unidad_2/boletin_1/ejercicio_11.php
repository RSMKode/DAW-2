<html>
<head>
<title> Ejercicios </title>
</head>
<body>
<h1>Ejercicio 11</h1>
    <ol>
    <?php 
        $numeros = array();
        $pares = 0;
        $impares = 0;

        for($i=0;$i<10;$i++){
            $numeros[] = rand(1, 6);
            echo "<img src=\"./imagenes/dado/$numeros[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
            echo "<li>".$numeros[$i]."</li>";
            ($numeros[$i] % 2 === 0) ? $pares++ : $impares++;
        }
    ?>
    </ol>
    <p>Pares: <strong><?= $pares?></strong> <p>
    <p>Impares: <strong><?= $impares?></strong><p>
    <p><a href="./">Volver atrás</a></p>
</body>
</html>