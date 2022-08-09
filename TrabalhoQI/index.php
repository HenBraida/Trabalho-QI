<?php
  include "modelo/cliente.class.php";
  include "modelo/veiculo.class.php";
  include "modelo/motorista.class.php";
  include "modelo/fornecedor.class.php";
  include "modelo/pecas.class.php";
  include "modelo/mecanico.class.php";
  include "controle/init.php";
  include "menu.php";
  session_start();
  
  
  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_cliente");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Nome: ".$row['nome']. " Cpf: ".$row['cpf']. " Idade: ".$row['idade']. "<br>";
  }

  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_fornecedor");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Empresa: ".$row['empresa']. " Marca: ".$row['marca']. " Produto: ".$row['produto']. "<br>";
  }

  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_mecanico");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Nome: ".$row['nome']. " Ctps: ".$row['ctps']. " Idade: ".$row['idade']. " Cpf: ".$row['cpf']. "<br>";
  }

  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_motorista");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Nome: ".$row['nome']. " Cpf: ".$row['cpf']. " Cnh: ".$row['cnh']. "<br>";
  }

  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_pecas");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Tipo: ".$row['tipo']. " Marca: ".$row['marca']. " Tamanho: ".$row['tamanho']. "<br>";
  }

  $conexao = db_connect();
  $consulta = $conexao->query("SELECT * FROM tb_veiculo");
  while ($row = $consulta->fetch()){
  
     echo " Id: ".$row['id']. " Placa: ".$row['placa']. " Marca: ".$row['marca']. " Modelo: ".$row['modelo']. " Ano: ".$row['ano']. "<br>";
  }
  include "menu.php";
?>