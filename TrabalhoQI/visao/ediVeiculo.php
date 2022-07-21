<?php
include "../modelo/veiculo.class.php";
session_start();

if(isset($_GET['ediVeiculo']) and isset($_GET['cod']) ){
    $cod = $_GET['cod'];
    $placa = $_GET['placa'];
    $marca =$_GET['marca'];
    $modelo =$_GET['modelo'];
    $ano =$_GET['ano'];
}else{
    $cod = "";						
    $placa = "";
    $marca ="";
    $modelo ="";
    $ano="";
}

?>