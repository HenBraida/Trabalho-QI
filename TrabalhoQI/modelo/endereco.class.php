<?php
  class Endereco{
     private $rua;
     private $numero;
     private $cep;
     private $estado;
     private $cidade;

     public function __construct($rua,$numero,$cep,$estado,$cidade){
          $this->rua = $rua;
          $this->numero = $numero;
          $this->cep = $cep;
          $this->estado = $estado;
          $this->cidade = $cidade;
     }

     public function setRua($rua){
          $this->rua = $rua;
     }
     public function setNumero($numero){
          $this->numero = $numero;
     }
     public function setCep($cep){
          $this->cep = $cep;
     }
     public function setEstado($estado){
          $this->estado = $estado;
     }
     public function setCidade($cidade){
        $this->cidade = $cidade;
   }
     public function getRua(){
          return $this->rua;
     }
     public function getNumero(){
          return $this->numero;
     }

     public function getCep(){
          return $this->cep;
     }

     public function getEstado(){
          return $this->estado;
     }
     public function getCidade(){
        return $this->cidade;
   }


  }

?>