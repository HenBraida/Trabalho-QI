<?php
 
include "../modelo/motorista.class.php";
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
			if(isset($_GET['delMotorista']) and isset($_GET['cod']) ){
					$nome = $_GET['nome'];
					unset($_SESSION['motorista'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"> Motorista <?php echo $_GET['nome'];?> excluído(a)!</h1>						
			</div>
			<?php					
					header("Refresh:3; conMotorista.php");
			}else{
					if(isset($_GET['ediMotorista']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nome = $_GET['nome'];
						$cpf =$_GET['cpf'];
						$cnh =$_GET['cnh'];
					}else{
						$cod = "";						
						$nome = "";
						$cpf ="";
						$cnh ="";
					}
				?>
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cadastro de Motorista</h1>						
					</div>
					<form action="../controle/registrar.php" method="GET">
						<input type="hidden" name="ediMotorista" value="<?php echo $cod;?>">
					<div class="row">
						
							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Nome</h5>
									</div>
									<div class="card-body">
										<input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" placeholder="Digite o nome">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">CPF</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="cpf" value="<?php echo $cpf; ?>" class="form-control" placeholder="Informe o CPF">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Cnh</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="cnh" value="<?php echo $cnh; ?>" class="form-control" placeholder="Informe a CNH">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar o motorista </button>
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