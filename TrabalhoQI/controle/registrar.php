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
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadCliente.php");
  }elseif(isset($_GET['cadFornecedor'])){
     $fornecedor = new Fornecedor($_GET['empresa'],$_GET['marca'],$_GET['produto']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_fornecedor (empresa,marca,produto)
          VALUES ('{$fornecedor->getEmpresa()}','{$fornecedor->getMarca()}','{$fornecedor->getProduto()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Fornecedor cadastrado no banco!          </h1>';
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadFornecedor.php");
  }elseif(isset($_GET['cadMecanico'])){
     $mecanico = new Mecanico($_GET['nome'],$_GET['ctps'],$_GET['idade'],$_GET['cpf']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_mecanico (nome,ctps,idade,cpf)
          VALUES ('{$mecanico->getNome()}','{$mecanico->getCtps()}','{$mecanico->getIdade()}','{$mecanico->getCpf()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Mecânico cadastrado no banco!          </h1>';
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadMecanico.php");
  }elseif(isset($_GET['cadMotorista'])){
     $motorista = new Motorista($_GET['nome'],$_GET['cpf'],$_GET['cnh']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_motorista (nome,cpf,cnh)
          VALUES ('{$motorista->getNome()}','{$motorista->getCpf()}','{$motorista->getCnh()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Motorista cadastrado no banco!          </h1>';
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadMotorista.php");
  }elseif(isset($_GET['cadPecas'])){
     $pecas = new Pecas($_GET['tipo'],$_GET['marca'],$_GET['tamanho']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_pecas (tipo,marca,tamanho)
          VALUES ('{$pecas->getTipo()}','{$pecas->getMarca()}','{$pecas->getTamanho()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Peças cadastradas no banco!          </h1>';
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadPecas.php");
  }elseif(isset($_GET['cadVeiculo'])){
     $veiculo = new Veiculo($_GET['placa'],$_GET['marca'],$_GET['modelo'],$_GET['ano']);
     try {
          $conecta = db_connect();                       
          $comandoSQL = "INSERT INTO tb_veiculo (placa,marca,modelo,ano)
          VALUES ('{$veiculo->getPlaca()}','{$veiculo->getMarca()}','{$veiculo->getModelo()}','{$veiculo->getAno()}')";            
          $grava = $conecta->prepare($comandoSQL); 
          $grava->execute(array());              
          echo '<h1> Veículo cadastrado no banco!          </h1>';
         
          }catch(PDOException $e) { 
          
          echo '<h1>
          Erro ' . $e->getMessage() .
               '</h1>';
          
     }  
          header("Refresh:3;../visao/cadVeiculo.php");
  }
   

?>