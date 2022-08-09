<?php
  class Rastreamento{
     private $placa;
     private $chassi;
     private $localizacao;

     public function __construct($placa,$chassi,$localizacao){
          $this->placa = $placa;
          $this->chassi = $chassi;
          $this->localizacao = $localizacao;
     }

     public function setPlaca($placa){
          $this->placa = $placa;
     }
     public function setChassi($chassi){
          $this->chassi = $chassi;
     }
     public function setLocalizacao($localizacao){
          $this->localizacao = $localizacao;
     }
     public function getPlaca(){
          return $this->placa;
     }
     public function getChassi(){
          return $this->chassi;
     }

     public function getLocalizacao(){
          return $this->localizacao;
     }


  }

?>