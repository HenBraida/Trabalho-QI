<?php
    include "menu.php";  
    include "../modelo/pecas.class.php";
    session_start();

    if(isset($_GET['cod']) and isset($_GET['tipo'])){
        $indice = $_GET['cod'];
        unset($_SESSION['pecas']['indice'])
    }
?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Peça do tipo: <?php echo $_GET['tipo'];?> excluída com sucesso!</h1>						
</div>

<?php echo header("Refresh:5;../visao/cadPecas.php"); ?>
    
