<?php
//Ejemplo uso método estático y constantes en clases
class Producto {
    const IVA = 0.23;
private static $numProductos = 0; 

    public static function nuevoProducto() {
        self::$numProductos++;
    }
    
}

Producto::nuevoProducto();

//Podemos acceder a la constante también como si fuese estática
$impuesto = Producto::IVA;
echo $impuesto;
?>
