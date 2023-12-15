<?php
class Persona {
    private string $nombre;

    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }

    public function imprimir(){
        echo $this->nombre;
        echo '<br>';
    }
}
//Creamos un objeto
$bruno = new Persona(); 
$bruno->setNombre("Pepe Pérez");

//Usamos el método mprimir
$bruno->imprimir();
?>