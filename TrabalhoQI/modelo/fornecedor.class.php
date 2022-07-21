<?php
  class Fornecedor{
     private $empresa;
     private $marca;
     private $produto;

     public function __construct($empresa,$marca,$produto){
          $this->empresa = $empresa;
          $this->marca = $marca;
          $this->produto = $produto;
     }

     public function setEmpresa($empresa){
          $this->empresa = $empresa;
     }
     public function setMarca($marca){
          $this->marca = $marca;
     }
     public function setProduto($produto){
          $this->produto = $produto;
     }
     public function getEmpresa(){
          return $this->empresa;
     }
     public function getMarca(){
          return $this->marca;
     }

     public function getProduto(){
          return $this->produto;
     }


  }

?>