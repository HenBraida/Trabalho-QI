<?php
  class Veiculo{
     private $placa;
     private $marca;
     private $modelo;
     private $ano;

     public function __construct($placa,$marca,$modelo,$ano){
          $this->placa = $placa;
          $this->marca = $marca;
          $this->modelo = $modelo;
          $this->ano = $ano;

     }

     public function setPlaca($placa){
          $this->placa = $placa;
     }
     public function setMarca($marca){
          $this->marca = $marca;
     }
     public function setModelo($modelo){
          $this->modelo = $modelo;
     }
     public function setAno($ano){
          $this->ano = $ano;
     }
     public function getPlaca(){
          return $this->placa;
     }
     public function getMarca(){
          return $this->marca;
     }

     public function getModelo(){
          return $this->modelo;
     }

     public function getAno(){
          return $this->ano;
     }


  }

?>