<?php


class modelo extends PDO
{
/**
 * En esta clase almacenaremos la conexión y las posibles consultas transversales, genéricas o de tablas pivote
 */
    
    // El constructor se encarga de crear la conexión
    public function __construct()
    {
       
        $opciones = array(
          
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            
        );
        parent::__construct('mysql:host=' . Config::$hostname . ';dbname=' . Config::$nombre . '', Config::$usuario, Config::$clave,$opciones);
        parent::exec("set names utf8");
    }

     
}
?>