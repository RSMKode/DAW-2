<?php


//Ponemos la conexión dentro de un bloque try para poder capturar la excepción, si la hubiera
try {
    // Conectamos
    include('../../libs/config.php');
    include('modelo/conexion.php');

    $consulta = "SELECT * FROM empleados";

    if ($resultado = $pdo->query($consulta)) {
        /*
        $resultado es un objeto de la clase PDOStatement. 
        Implementa la interfaz Traversable, lo que signiﬁca que puede ser recorrida mediante un bucle foreach() sin ser un array
        */
        echo 'Empleados:';
        foreach ($resultado as $row) {
            echo  '<br>-------------------------------<br>';
            echo $row['id'] . "<br> ";
            echo $row['nombre'] . "<br>";
            echo $row['puesto'] . "<br>";
            echo $row['fecha_nacimiento'] . "<br>";
            echo $row['salario'] . "<br>";
            echo  '-------------------------------';
            echo '<br>';
        }

        /*
        Otra opción sería emplear fetchAll(PDO::FETCH_ASSOC) para obtener todo el
        resultado en forma de array bidimensional.
        En nuetro caso será un array asociativo por el estilo que le hemos pasado. Lo
        mostramos con print_r
        */
        echo "<pre>";
        $arrayResultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        print_r($arrayResultado);
        echo "</pre>";

        $resultado->closeCursor();
        // Para liberar un resultado simplemente hay que destruir el objeto
        $resultado = NULL; // Opcional
        // Para cerrar una conexión simplemente hay que destruir el objeto
        $pdo = NULL; // Opcional
    }
} catch (PDOException $e) {
    // En este caso guardamos los errores en un archivo de errores log
    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logger.txt");
    //guardamos en $errores el error que queremos mostrar a los usuarios
    $errores = "Ha habido un error <br>";
}

echo 'hola';
