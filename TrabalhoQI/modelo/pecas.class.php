<?php
  class Pecas{
     private $tipo;
     private $marca;
     private $tamanho;
     public function __construct($tipo,$marca,$tamanho){
          $this->tipo = $tipo;
          $this->marca = $marca;
          $this->tamanho = $tamanho;
     }

     public function setTipo($tipo){
          $this->tipo = $tipo;
     }
     public function setMarca($marca){
          $this->marca = $marca;
     }
     public function setTamanho($tamanho){
          $this->tamanho = $tamanho;
     }


     public function getTipo(){
          return $this->tipo;
     }
     public function getMarca(){
          return $this->marca;
     }

     public function getTamanho(){
          return $this->tamanho;
     }

  }

?>