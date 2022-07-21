<?php
include "../modelo/cliente.class.php";
session_start();

if(isset($_GET['ediCliente']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $nome = $_GET['nome'];
    $cpf =$_GET['cpf'];
    $idade =$_GET['idade'];
}else{
    $cod = "";						
    $nome = "";
    $cpf ="";
    $idade ="";
}

?>
   