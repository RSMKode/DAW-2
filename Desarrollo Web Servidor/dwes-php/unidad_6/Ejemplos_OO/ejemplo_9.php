<?php
include("ejemplo_7.php");
class Tv extends Producto {
   public $pulgadas;
   public $tecnologia;

   public function mostrarResumen(): string {
      parent::mostrarResumen();
      echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
   }
}
?>