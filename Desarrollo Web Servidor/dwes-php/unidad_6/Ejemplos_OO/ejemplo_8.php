<?php
class Producto {
    public $codigo;
    public $nombre;
    public $nombreCorto;
    public $PVP;

    public function mostrarResumen() {
        echo "<p>Prod:".$this->codigo."</p>";
    }
}

/*
Esta clase iria en otro fichero
Tendriamos que hacer previamente in include del fichero que incluye Producto
*/

class Tv extends Producto {
    public $pulgadas;
    public $tecnologia;
}


/*
Ejemplo de uso y ver relación entre las clases
*/
$t = new Tv();
$t->codigo = 33;
if ($t instanceof Producto) {
    echo $t->mostrarResumen();
} else {
    echo"No muestro resumen";
}

$padre = get_parent_class($t);
echo "<br>La clase padre es: " . $padre;
$objetoPadre = new $padre;
echo $objetoPadre->mostrarResumen();

if (is_subclass_of($t, 'Producto')) {
    echo "<br>Soy un hijo de Producto";
}

?>