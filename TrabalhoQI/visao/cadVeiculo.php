<?php
 
include "../modelo/veiculo.class.php";
session_start();

?>
<html lang="pt-br">

<?php include "head.php"; ?>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "menu.php";
		  
		 ?>
     </nav>
     
		<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
				

							
		    			    <a class="dropdown-item" href="#">Log out</a>
						
					</ul>
				</div>
			</nav>

			<main class="content">
		    <?php		
			if(isset($_GET['delVeiculo']) and isset($_GET['cod']) ){
					$tipo = $_GET['placa'];
					unset($_SESSION['veiculo'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"> O veículo da placa <?php echo $_GET['placa'];?> foi excluído!</h1>						
			</div>
			<?php					
					header("Refresh:3; conVeiculo.php");
			}else{
					if(isset($_GET['ediVeiculo']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$placa = $_GET['placa'];
						$marca =$_GET['marca'];
						$modelo =$_GET['modelo'];
            $ano =$_GET['ano'];
					}else{
						$cod = "";						
						$placa = "";
						$marca ="";
						$modelo ="";
            $ano ="";
					}

		    ?>		
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cadastro de Veículos</h1>						
					</div>
					<form action="../controle/registrar.php" method="GET">
						<input type="hidden" name="ediVeiculo" value="<?php echo $cod;?>">
					<div class="row">
						
					Placa:<input name="placa" type="text"><br>
	Marca:<input name="marca" type="text"><br>
	Modelo:<input name="modelo" type="text"><br>
	Ano:<input name="ano" type="text"><br>
	<button type="submit" name="cadVeiculo" value="1">Cadastrar</button>
					</div>
					</form>
							

				</div>
				<?php } ?>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" ><strong>Feito por Henrique Silva Braida e Gabriel Carmona</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>