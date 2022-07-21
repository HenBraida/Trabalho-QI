<?php
    include "menu.php";  
    include "../modelo/veiculo.class.php";
    session_start();

    if(isset($_GET['delVeiculo']) and isset($_GET['placa']) ){
        $placa = $_GET['placa'];
        unset($_SESSION['placa'][$_GET['placa']]);
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Veículo da placa: <?php echo $_GET['placa'];?> excluído com sucesso! </h1>						
</div>

<?php echo header("Refresh:5;../visao/cadVeiculo.php"); ?>
    
