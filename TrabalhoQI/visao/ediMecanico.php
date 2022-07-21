<?php
include "../modelo/mecanico.class.php";
session_start();

if(isset($_GET['ediMecanico']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $nome = $_GET['nome'];
    $ctps =$_GET['ctps'];
    $idade =$_GET['idade'];
    $cpf =$_GET['cpf'];
}else{
    $cod = "";						
    $nome = "";
    $ctps ="";
    $idade ="";
    $cpf ="";
}

?>
     