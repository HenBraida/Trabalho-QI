<?php
  class Mecanico{
     private $nome;
     private $ctps;
     private $idade;
     private $cpf;

     public function __construct($nome,$ctps,$idade,$cpf){
          $this->nome = $nome;
          $this->ctps = $ctps;
          $this->idade = $idade;
          $this->cpf = $cpf;

     }

     public function setNome($nome){
          $this->nome = $nome;
     }
     public function setCtps($ctps){
          $this->ctps = $ctps;
     }
     public function setIdade($idade){
          $this->idade = $idade;
     }
     public function setCpf($cpf){
          $this->cpf = $cpf;
     }
     public function getNome(){
          return $this->nome;
     }
     public function getCtps(){
          return $this->ctps;
     }

     public function getIdade(){
          return $this->idade;
     }

     public function getCpf(){
          return $this->cpf;
     }


  }

?>