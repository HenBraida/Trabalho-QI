<?php
    class Motorista{
        private $nome;
        private $cpf;
        private $cnh;
    

    public function __construct($nome,$cpf,$cnh){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cnh = $cnh; 
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
    public function setCnh($cnh){
        $this->cnh = $cnh;
    }
    public function getCnh(){
        return $this->cnh;
    }
}
?>