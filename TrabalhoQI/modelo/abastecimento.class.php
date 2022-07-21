<?php
  class Abastecimento{
     private $preco;
     private $tanqueCheio;

     public function __construct($preco,$tanqueCheio){
          $this->preco = $preco;
          $this->tanqueCheio = $tanqueCheio;
     }

     public function setPreco($preco){
          $this->preco = $preco;
     }
     public function setTanqueCheio($tanqueCheio){
          $this->tanqueCheio = $tanqueCheio;
     }
     public function getPreco(){
          return $this->preco;
     }
     public function getTanqueCheio(){
          return $this->tanqueCheio;
     }

  }

?>