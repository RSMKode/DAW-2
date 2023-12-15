<?php
class Persona {
    private string $nombre;

    public function __construct(string $nom) {
        $this->nombre = $nom;
    }
    
    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }
    public function imprimir(){
      echo $this->nombre;
      echo '<br>';
    }
}

$bruno = new Persona("Pepe Pérez");
$bruno->imprimir();
