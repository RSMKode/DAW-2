<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Empleado</title>
</head>
<body>
    
<?php

    foreach($errores as $i =>$valor){
        echo $valor.'<br>';
    }

    foreach($mensajes as $i => $valor){
        echo $valor.'<br>';
    }

?>


    <form action="" method="post">

   

    <label for="">Nombre</label>            <input type="text" name="nombre"><br>
    <label for="">Puesto</label>            <input type="text" name="puesto" ><br>
    <label for="">Fecha Nacimiento</label>  <input type="date" name="fechaN" ><br>
    <label for="">Salario</label>           <input type="number" name="salario" ><br>
    
    <label for="">Localidad</label>
   

    <?php

        $arrayLocalidades=selectLocalidadesForm($pdo);
        pintaSelect($arrayLocalidades,"localidades");
        
    ?>

    <input type="submit" name="aceptar" value="Enviar">

    </select>


    </form>

</body>
</html>