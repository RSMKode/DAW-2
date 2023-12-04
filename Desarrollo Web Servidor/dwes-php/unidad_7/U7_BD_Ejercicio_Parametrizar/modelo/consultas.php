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

function insertEmpleado ($pdo,$nombre, $puesto, $fecha_nacimiento,$salario, $localidad,$user,$pass){


    $consulta = "INSERT INTO empleados (nombre, puesto, fecha_nacimiento, salario, localidad, user, pass) 
    VALUES (?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($consulta);
    $stmt->bindparam(1,$nombre);
    $stmt->bindParam(2, $puesto);
    $stmt->bindParam(3, $fecha_nacimiento);
    $stmt->bindparam(4,$salario);
    $stmt->bindparam(5,$localidad);
    $stmt->bindparam(6,$user);
    $stmt->bindparam(7,$pass);

    ///Pasar array
    return $stmt->execute();
              
}

function selectEmpleados ($pdo){
    $consulta= "SELECT * FROM empleados";

    if($resultado=$pdo->query($consulta)){

        $arrayresultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
        $resultado->closeCursor();
        $resultado=null;
        return $arrayresultado;
        
}
}

function verificaUsuario ($pdo, $user){
    $consulta= "SELECT id, nombre,pass FROM empleados where user=?";

    $stmt = $pdo->prepare($consulta);
    $stmt->bindparam(1,$user);
    $stmt->execute();
    $arrayresultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $resultado=null;
    return $arrayresultado;
}
?>