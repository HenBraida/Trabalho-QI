<?php
  class Manutencao{
     private $estado;
     private $troca;
     private $data;

     public function __construct($estado,$troca,$data){
          $this->estado = $estado;
          $this->troca = $troca;
          $this->data = $data;
     }

     public function setEstado($estado){
          $this->estado = $estado;
     }
     public function setTroca($troca){
          $this->troca = $troca;
     }
     public function setData($data){
          $this->data = $data;
     }
     public function getEstado(){
          return $this->estado;
     }
     public function getTroca(){
          return $this->troca;
     }

     public function getData(){
          return $this->data;
     }

  }

?>