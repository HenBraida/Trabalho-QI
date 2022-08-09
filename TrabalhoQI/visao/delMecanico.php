<?php
    include "menu.php";  
    include "../modelo/mecanico.class.php";
    session_start();

    if(isset($_GET['cod']) and isset($_GET['cpf'])){
        $indice = $_GET['cod'];
        unset($_SESSION['mecanico']['indice'])
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Mecânico <?php echo $_GET['nome'];?> excluído(a) com sucesso!</h1>						
</div>

<?php echo header("Refresh:5;../visao/cadMecanico.php"); ?>
    
