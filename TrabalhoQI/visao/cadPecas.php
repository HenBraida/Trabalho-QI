<?php
 
include "../modelo/pecas.class.php";
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
			if(isset($_GET['delPecas']) and isset($_GET['cod']) ){
					$tipo = $_GET['tipo'];
					unset($_SESSION['pecas'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"> Peça <?php echo $_GET['tipo'];?> excluído(a)!</h1>						
			</div>
			<?php					
					header("Refresh:3; conPecas.php");
			}else{
					if(isset($_GET['ediPecas']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$tipo = $_GET['tipo'];
						$marca =$_GET['marca'];
						$tamanho =$_GET['tamanho'];
					}else{
						$cod = "";						
						$tipo = "";
						$marca ="";
						$tamanho ="";
					}

		    ?>		
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cadastro de Peças</h1>						
					</div>
					<form action="../controle/registrar.php" method="GET">
						<input type="hidden" name="ediPecas" value="<?php echo $cod;?>">
					<div class="row">
						
							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Tipo</h5>
									</div>
									<div class="card-body">
										<input type="text" name="tipo" class="form-control" value="<?php echo $tipo; ?>" placeholder="Digite o tipo da peça">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Marca</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="marca" value="<?php echo $marca; ?>" class="form-control" placeholder="Nome da marca">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Tamanho</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="tamanho" value="<?php echo $tamanho; ?>" class="form-control" placeholder="Informe o tamanho da peça">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar a peça</button>
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