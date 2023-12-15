<?php
include ('classModelo.php');

class usuario extends modelo
{
/**
 * En esta clase crearemos las consultas relacionadas con la tabla usuarios
 */
public function getUsuario($usuario)
    {
      

            $consulta = "SELECT * FROM usuarios WHERE usuario=:usuario";
            $result = $this->prepare($consulta);
            $result->bindParam(':usuario', $usuario);
            $result->execute();
            $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
      
    }
}
?>