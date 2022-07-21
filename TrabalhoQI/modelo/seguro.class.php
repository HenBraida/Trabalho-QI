<?php
  class Seguro{
     private $empresa;
     private $validade;
     private $preco;


     public function __construct($empresa,$validade,$preco){
          $this->empresa = $empresa;
          $this->validade = $validade;
          $this->preco = $preco;
     }

     public function setEmpresa($empresa){
          $this->empresa = $empresa;
     }
     public function setValidade($validade){
          $this->validade = $validade;
     }
     public function setPreco($preco){
          $this->preco = $preco;
     }
     public function getEmpresa(){
          return $this->empresa;
     }
     public function getValidade(){
          return $this->validade;
     }

     public function getPreco(){
          return $this->preco;
     }


  }

?>