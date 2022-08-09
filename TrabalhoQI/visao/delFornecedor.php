<?php
    include "menu.php";  
    include "../modelo/fornecedor.class.php";
    session_start();

    if(isset($_GET['cod']) and isset($_GET['empresa'])){
        $indice = $_GET['cod'];
        unset($_SESSION['fornecedor']['indice'])
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Fornecedor <?php echo $_GET['empresa'];?> excluído(a) com sucesso!</h1>						
</div>
    
<?php echo header("Refresh:5;../visao/cadFornecedor.php"); ?>
