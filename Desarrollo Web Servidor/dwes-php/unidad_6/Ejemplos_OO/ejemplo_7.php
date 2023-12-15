<?php
class Producto {
    const IVA = 0.23;
    private $numProductos = 0; 
    private $codigo;

    public function __construct(string $cod) {
        $this->numProductos++;
        $this->codigo = $cod;
    }

    public function mostrarResumen() : string {
        return "El producto ".$this->codigo." es el número ".$this->numProductos;
    }
}

//Descomentamos lo siguiente para probar
/*
$prod1 = new Producto("PS5");
$prod2 = new Producto("XBOX Series X");
$prod3 = new Producto("Nintendo Switch");
echo $prod3->mostrarResumen();

$p = new Producto("PS5");
if ($p instanceof Producto) {
    echo "<br>Es un producto";
    echo "<br>La clase es ".get_class($p);

    class_alias("Producto", "Articulo");
    $c = new Articulo("Nintendo Switch");
    echo "<br>Un articulo es un ".get_class($c);
    echo"<br>";
    print_r(get_class_methods("Producto"));
    echo"<br>";
    //Solo saldrán las públicas
    print_r(get_class_vars("Producto"));
    echo"<br>";
    print_r(get_object_vars($p));
    echo"<br>";

    if (method_exists($p, "mostrarResumen")) {
        $p->mostrarResumen();
    }
}

    */

