<?php
include ('./modelo/classUsuario.php');
include ('./libs/classConfig.php');

try {
    
    $db = new usuario();
    if ($stmt = $db->getUsuario("María")) {
        foreach ($stmt as $valor) {
            
                echo "<p>" . $valor['usuario'] ." ". $valor['clave'] . "</p>";
           
        }
    } else
       
        echo "No hay nada que mostrar";
    
                
} 
catch (PDOException $e) {

    // Usar error_log para guardar errores para el administrador
    // Para realizar esta acción sería conveniente crear una clase para manejar el archivo log
    error_log($e->getMessage() . "## Fichero: " . $e->getFile()  .
        "##Código: " . $e->getCode() . "##Instante: " . microtime() . PHP_EOL, 3, "logBD.txt");
    // guardamos en ·errores el error que queremos mostrar a los usuarios
    $errores['datos'] = "Ha habido un error <br>";
} catch (Error $e) {

    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logerr.txt");
    // echo $e->getMessage();
}
/**
 * Mostramos los errores si tenemos (hemos entrado en catch)
 */
if (isset($errores))
print_r($errores);


?>