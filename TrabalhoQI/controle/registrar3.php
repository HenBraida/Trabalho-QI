<?php
   include "../modelo/abastecimento.class.php";
   include "../modelo/cliente.class.php";
   include "../modelo/endereco.class.php";
   include "../modelo/fornecedor.class.php";
   include "../modelo/manutencao.class.php";
   include "../modelo/mecanico.class.php";
   include "../modelo/motorista.class.php";
   include "../modelo/pecas.class.php";
   include "../modelo/rastreamento.class.php";
   include "../modelo/rota.class.php";
   include "../modelo/seguro.class.php";
   include "../modelo/veiculo.class.php";
   include "init.php";
  session_start();
  if(isset($_GET['cadCliente'])){
     $cliente = new Cliente($_GET['nome'],$_GET['cpf'],$_GET['idade']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_cliente (nome,cpf,idade)
          VALUES ('{$cliente->getNome()}','{$cliente->getCpf()}','{$cliente->getIdade()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Cliente cadastrado no banco!          </h1>';
         
          }catch(PDOException $e) { // caso retorne erro
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadCliente.php");
  }
   

?>