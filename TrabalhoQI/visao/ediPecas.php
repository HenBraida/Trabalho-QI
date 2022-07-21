<?php
include "../modelo/pecas.class.php";
session_start();

if(isset($_GET['ediPecas']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $tipo = $_GET['tipo'];
    $marca =$_GET['marca'];
    $tamanho =$_GET['tamanho'];
}else{
    $cod = "";						
    $tipo = "";
    $marca ="";
    $tamanho ="";
}

?>