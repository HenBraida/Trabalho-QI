<?php
include "../modelo/cliente.class.php";
session_start();

if(isset($_GET['ediFornecedor']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $empresa = $_GET['emnpresa'];
    $marca =$_GET['marca'];
    $produto =$_GET['produto'];
}else{
    $cod = "";						
    $empresa = "";
    $marca ="";
    $produto ="";
}

?>
     