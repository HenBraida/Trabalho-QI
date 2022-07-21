<?php
  include "modelo/cliente.class.php";
  include "modelo/veiculo.class.php";
  include "modelo/motorista.class.php";
  include "modelo/fornecedor.class.php";
  include "modelo/pecas.class.php";
  include "modelo/mecanico.class.php";
  include "controle/init.php";
  session_start();
  if(!isset($_SESSION['motorista'])){
     $_SESSION['motorista']= array();
  }

  if(!isset($_SESSION['vei'])){
     $_SESSION['vei']= array();
  }

  if(!isset($_SESSION['cliente'])){
   $_SESSION['cliente']= array();
}

if(!isset($_SESSION['fornecedor'])){
   $_SESSION['fornecedor']= array();
}

if(!isset($_SESSION['pecas'])){
   $_SESSION['pecas']= array();
}

if(!isset($_SESSION['mecanico'])){
   $_SESSION['mecanico']= array();
}
  include "menu.php";

?>