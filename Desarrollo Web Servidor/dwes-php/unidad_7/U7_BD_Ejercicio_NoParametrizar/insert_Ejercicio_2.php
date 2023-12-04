<?php
try{
include("libs\config.php");
include("modelo\conexion.php");
include("modelo\consultas.php");
include("libs\bGeneral.php");
include("libs\bComponentes.php");

$errores=[];
$mensajes=[];

if(isset($_REQUEST["aceptar"])){
    $arrayLocalidades=selectLocalidadesForm($pdo);

    $nombre=recoge("nombre");
    $puesto=recoge("puesto");
    $fechaN=recoge("fechaN");
    $salario=recoge("salario");
    $localidad=recoge("localidades");

    cTexto($nombre,"nombre",$errores);
    cTexto($puesto,"puesto",$errores);
    unixFechaAAAAMMDD($fechaN,"fechaN",$errores);
    cNum($salario,"salario",$errores,false,10000);
 
    cSelect($localidad,"localidades",$errores,$arrayLocalidades);

    if(empty($errores)){
        $mensajes[]= (insertEmpleado ($pdo,$nombre, $puesto, $fechaN, $salario, $localidad))? "La inserción ha sido correcta":"Algo ha fallado";
        include("forminsert.php");
    }else{
        include("forminsert.php");
    }

} else{

    include("forminsert.php");
}
}catch (PDOException $e) {

    error_log($e->getMessage() . "## Fichero: " . $e->getFile() . "## Línea: " . $e->getLine() . "##Código: " . $e->getCode() . "##Instante: " . microtime() . PHP_EOL, 3, "logBD.txt");

    $errores['datos'] = "Ha habido un error <br>";

    if ($e->getCode() == 23000){

        $errores['datos'] = "Ya existe ese usuario en la BD";
    }else{
        $errores['datos'] = "Ha sucedido un error en la inserción";
    }    
}

?>


