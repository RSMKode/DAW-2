<?php
class MiClase {
    private $datos = [];
    public function __construct() {
        echo "Se ha creado una nueva instancia de MiClase";
    }

    public function __destruct() {
        echo "Se está destruyendo la instancia de MiClase";
    }

    public function __get($nombre) {
        return $this->datos[$nombre];
    }

    public function __set($nombre, $valor) {
        $this->datos[$nombre] = $valor;
    }
    public function __isset($nombre) {
        return isset($this->datos[$nombre]);
    }

    public function __unset($nombre) {
        unset($this->datos[$nombre]);
    }


}

$objeto = new MiClase(); // Imprime: Se ha creado una nueva instancia de MiClase
echo"<br>";
//metodo set
$objeto->nombre = "John";

var_dump(isset($objeto->nombre)); // Imprime: bool(true)
unset($objeto->nombre);
echo"<br>";
var_dump(isset($objeto->nombre)); // Imprime: bool(false)





echo"<br>";

unset($objeto); // Imprime: Se está destruyendo la instancia de MiClase


echo"<br>";



