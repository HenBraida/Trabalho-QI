<?php
    include "menu.php";  
    include "../modelo/cliente.class.php";
    session_start();

    if(isset($_GET['delCliente']) and isset($_GET['nome']) ){
        $nome = $_GET['nome'];
        unset($_SESSION['cliente'][$_GET['nome']]);
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Cliente <?php echo $_GET['nome'];?> excluído(a) com sucesso!</h1>						
</div>
    
<?php echo header("Refresh:5;../visao/cadCliente.php"); ?>