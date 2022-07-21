<?php
include "../modelo/motorista.class.php";
session_start();

if(isset($_GET['ediMotorista']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $nome = $_GET['nome'];
    $cpf =$_GET['cpf'];
    $cnh =$_GET['cnh'];
}else{
    $cod = "";						
    $nome = "";
    $cpf ="";
    $cnh ="";
}

?>
