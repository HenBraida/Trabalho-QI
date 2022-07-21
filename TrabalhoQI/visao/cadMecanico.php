<?php
 
include "../modelo/mecanico.class.php";
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
			if(isset($_GET['delMecanico']) and isset($_GET['cod']) ){
					$nome = $_GET['nome'];
					unset($_SESSION['mecanico'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"> Mecânico <?php echo $_GET['nome'];?> excluído(a)!</h1>						
			</div>
			<?php					
					header("Refresh:3; conMecanico.php");
			}else{
					if(isset($_GET['ediMecanico']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nome = $_GET['nome'];
						$ctps =$_GET['ctps'];
						$idade =$_GET['idade'];
            $cpf =$_GET['cpf'];
					}else{
						$cod = "";						
						$nome = "";
						$ctps ="";
						$idade ="";
            $cpf ="";
					}

		    ?>		
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cadastro de Mecânico</h1>						
					</div>
					<form action="../controle/registrar.php" method="GET">
						<input type="hidden" name="ediMecanico" value="<?php echo $cod;?>">
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
										<h5 class="card-title mb-0">Carteira de trabalho</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="ctps" value="<?php echo $ctps; ?>" class="form-control" placeholder="Nome o número da carteira de trabalho">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Idade</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="idade" value="<?php echo $idade; ?>" class="form-control" placeholder="Informe a idade">
									</div>
								</div>						
							</div>
              <div class="col-12 col-lg-3">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Cpf</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="cpf" value="<?php echo $cpf; ?>" class="form-control" placeholder="Informe o cpf">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar o mecânico</button>
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