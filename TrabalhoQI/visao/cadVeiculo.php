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
						
							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Placa</h5>
									</div>
									<div class="card-body">
										<input type="text" name="placa" class="form-control" value="<?php echo $placa; ?>" placeholder="Digite a placa do veículo">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Marca</h5>
									</div>
									<div class="card-body" >
                  <select class="form-select" aria-label="Default select example" name="marca" value="<?php echo isset($_GET['marca'])?$_GET['marca']:'';?>">
                  <option value="Aston martin">Aston martin</option>
                  <option value="Audi">Audi</option>
                  <option value="Bentley">Bentley</option>
                  <option value="BMW">BMW</option>
                  <option value="Caoa Cherry">Caoa Cherry</option>
                  <option value="Chevrolet">Chevrolet</option>
                  <option value="Chrysler">Chrysler</option>
                  <option value="Citroen">Citroen</option>
                  <option value="Ferrari">Ferrari</option>
                  <option value="Fiat">Fiat</option>
                  <option value="Forda">Forda</option>
                  <option value="Honda">Honda</option>
                  <option value="Hyundai">Hyundai</option>
                  <option value="Lamborghini">Lamborghini</option>
    </select><
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Modelo</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="modelo" value="<?php echo $modelo; ?>" class="form-control" placeholder="Informe o modelo do veículo">
									</div>
								</div>						
							</div>
              <div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Ano</h5>
									</div>
              <div class="card-body" >
										<input type="text" name="ano" value="<?php echo $ano; ?>" class="form-control" placeholder="Informe o ano do veículo">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar o veículo</button>
							</div>
						
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