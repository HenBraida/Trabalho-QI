<?php
    include "menu.php";  
    include "../modelo/motorista.class.php";
    session_start();

    if(isset($_GET['cod']) and isset($_GET['cpf'])){
        $indice = $_GET['cod'];
        unset($_SESSION['motorista']['indice'])
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Motorista <?php echo $_GET['nome'];?> excluído(a) com sucesso!</h1>						
</div>
    
<?php echo header("Refresh:5;../visao/cadMotorista.php"); ?>
            
            