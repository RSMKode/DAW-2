<?php


//Ponemos la conexión dentro de un bloque try para poder capturar la excepción, si la hubiera
try {
    // Conectamos
    include('../../libs/config.php');
    include('modelo/conexion.php');
    include('modelo/consultas.php');

    $empleados = selectEmpleados($pdo);
    $localidades = selectLocalidadesForm($pdo);

    echo 'Empleados:';
    echo  '<hr>';
    if (count($empleados) === 0) {
        echo "No hay empleados que mostrar";
        echo  '<hr>';
    } else {
        foreach ($empleados as $row) {
            echo "ID:" . $row['id'] . "<br> ";
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Puesto: " . $row['puesto'] . "<br>";
            echo "Fecha Nacimiento: " . $row['fecha_nacimiento'] . "<br>";
            echo "Salario: " . $row['salario'] . "<br>";
            echo "Localidad: " . $localidades[$row['localidad']] . "<br>";
            echo  '<hr>';
        }
    }

    // Para cerrar una conexión simplemente hay que destruir el objeto
    $pdo = NULL; // Opcional

} catch (PDOException $e) {
    // En este caso guardamos los errores en un archivo de errores log
    // En este caso guardamos los errores en un archivo de errores log
    error_log($e->getMessage() . "## Fichero: " . $e->getFile() . "## Línea: " . $e->getLine() . "##Código: " . $e->getCode() . "##Instante: " . microtime() . PHP_EOL, 3, "logBD.txt");    //guardamos en $errores el error que queremos mostrar a los usuarios
    $errores["datos"] = "Ha habido un error <br>";
}
