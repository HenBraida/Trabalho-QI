<?php
    class Cliente{
        private $nome;
        private $cpf;
        private $idade;
    

    public function __construct($nome,$cpf,$idade){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade; 
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
}
?>