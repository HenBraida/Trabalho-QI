<?php
  class Abastecimento{
     private $preco;
     private $tanqueCheio;
     private $odometro;

     public function __construct($preco,$tanqueCheio,$odometro){
          $this->preco = $preco;
          $this->tanqueCheio = $tanqueCheio;
          $this->odometro = $odometro;
     }

     public function setPreco($preco){
          $this->preco = $preco;
     }
     public function setTanqueCheio($tanqueCheio){
          $this->tanqueCheio = $tanqueCheio;
     }
     public function setOdometro($odometro){
          $this->odometro = $odometro;
     }
     public function getOdometro(){
          return $this->odometro;
     }
     public function getPreco(){
          return $this->preco;
     }
     public function getTanqueCheio(){
          return $this->tanqueCheio;
     }

  }

?>