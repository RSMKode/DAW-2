<?php
function selectLocalidadesForm($pdo){
   
        $consulta= "SELECT * FROM localidades";
    $array=[];
        if($resultado=$pdo->query($consulta)){
    
            $arrayresultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
            $resultado->closeCursor();
            $resultado=null;
        }
    //Devuelve  un array de manera que podemos pintar el Select de la forma habitual
    //La key es id_localidad y el valor la localidad
        foreach($arrayresultado as $key=>$valor){

            $array["{$valor['id_localidad']}"]=$valor['localidad'];
        }
        
        return $array;
      
    }

function insertEmpleado ($pdo,$nombre, $puesto, $fecha_nacimiento, $salario, $localidad){


    $consulta = "INSERT INTO `empleados` (nombre, puesto, fecha_nacimiento, salario, localidad) VALUES ('$nombre','$puesto','$fecha_nacimiento',$salario,$localidad)";

    $count = $pdo->exec($consulta);
    
        if ($count === 1){
        
            return true;
        }
        
        return false;
        
}

function selectEmpleados ($pdo){
    $consulta= "SELECT * FROM empleados";

    if($resultado=$pdo->query($consulta)){

        $arrayresultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
        $resultado->closeCursor();
        $resultado=null;
        return $arrayresultado;
        
}}
?>