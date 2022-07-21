<?php
  class Rota{
     private $estrada;
     private $inicio;
     private $chegada;
     private $tempo;

     public function __construct($estrada,$inicio,$chegada,$tempo){
          $this->estrada = $estrada;
          $this->inicio = $inicio;
          $this->chegada = $chegada;
          $this->tempo = $tempo;

     }

     public function setEstrada($estrada){
          $this->estrada = $estrada;
     }
     public function setInicio($inicio){
          $this->inicio = $inicio;
     }
     public function setChegada($chegada){
          $this->chegada = $chegada;
     }
     public function setTempo($tempo){
          $this->tempo = $tempo;
     }
     public function getEstrada(){
          return $this->estrada;
     }
     public function getInicio(){
          return $this->inicio;
     }

     public function getChegada(){
          return $this->chegada;
     }

     public function getTempo(){
          return $this->tempo;
     }


  }

?>