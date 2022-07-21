<?php
 include "../modelo/motorista.class.php";
 include "../modelo/veiculo.class.php";

 session_start();


?>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Trabalho -  Gestão de frota</title>

	<link href="../view/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "../visao/menu.php";
		  
		 ?>

				<?php
						
						if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['cnh'])){
							if(isset($_GET['ediMotorista']) and $_GET['ediMotorista']>=0){
								$i=$_GET['ediMotorista'];  
								$_SESSION['motorista'][$i] = new Motorista(
									$_GET['nome'],$_GET['cpf'],$_GET['cnh']);
									echo "<h1>Motorista editado!</h1>";			
							}else{
							 $_SESSION['motorista'][]= new Motorista(
								$_GET['nome'],$_GET['cpf'],$_GET['cnh']);
							 echo "<h1>Motorista cadastrado!</h1>";
							}
								header("Refresh:2;../visao/cadMotorista.php");
						}

						if(isset($_GET['placa']) and isset($_GET['marca']) and isset($_GET['modelo']) and isset($_GET['ano'])){
							if(isset($_GET['ediVeiculo']) and $_GET['ediVeiculo']>=0){
								$i=$_GET['ediVeiculo'];  
								$_SESSION['veiculo'][$i] = new Veiculo(
									$_GET['placa'],$_GET['marca'],$_GET['modelo'],$_GET['ano']);
									echo "<h1>Veículo editado!</h1>";			
							}else{
							 $_SESSION['veiculo'][]= new Veiculo(
								$_GET['placa'],$_GET['marca'],$_GET['modelo'],$_GET['ano']);
							 echo "<h1>Veículo cadastrado!</h1>";
							}
							header("Refresh:2;../visao/cadVeiculo.php");
						}

						if(isset($_GET['empresa']) and isset($_GET['marca']) and isset($_GET['produto'])){
							if(isset($_GET['ediFornecedor']) and $_GET['ediFornecedor']>=0){
								$i=$_GET['ediFornecedor'];  
								$_SESSION['fornecedor'][$i] = new Fornecedor(
									$_GET['empresa'],$_GET['marca'],$_GET['produto']);
									echo "<h1>Fornecedor editado!</h1>";			
							}else{
							 $_SESSION['fornecedor'][]= new Fornecedor(
								$_GET['empresa'],$_GET['marca'],$_GET['produto']);
							 echo "<h1>Fornecedor cadastrado!</h1>";
							}
							header("Refresh:2;../visao/cadFornecedor.php");
						}

						if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['idade'])){
							if(isset($_GET['ediCliente']) and $_GET['ediCliente']>=0){
								$i=$_GET['ediCliente'];  
								$_SESSION['cliente'][$i] = new Cliente(
									$_GET['nome'],$_GET['cpf'],$_GET['idade']);
									echo "<h1>Cliente editado!</h1>";			
							}else{
							 $_SESSION['cliente'][]= new Cliente(
								$_GET['nome'],$_GET['cpf'],$_GET['idade']);
							 echo "<h1>Cliente cadastrado!</h1>";
							}
							header("Refresh:2;../visao/cadCliente.php");
						}

						if(isset($_GET['nome']) and isset($_GET['ctps']) and isset($_GET['idade']) and isset($_GET['cpf'])){
							if(isset($_GET['ediMecanico']) and $_GET['ediMecanico']>=0){
								$i=$_GET['ediMecanico'];  
								$_SESSION['mecanico'][$i] = new Mecanico(
									$_GET['nome'],$_GET['ctps'],$_GET['idade'],$_GET['cpf']);
									echo "<h1>Mecânico editado!</h1>";			
							}else{
							 $_SESSION['mecanico'][]= new Mecanico(
								$_GET['nome'],$_GET['ctps'],$_GET['idade'],$_GET['cpf']);
							 echo "<h1>Mecânico cadastrado!</h1>";
							}
							header("Refresh:2;../visao/cadMecanico.php");
						}

						if(isset($_GET['tipo']) and isset($_GET['marca']) and isset($_GET['tamanho'])){
							if(isset($_GET['ediPecas']) and $_GET['ediPecas']>=0){
								$i=$_GET['ediPecas'];  
								$_SESSION['pecas'][$i] = new Pecas(
									$_GET['tipo'],$_GET['marca'],$_GET['tamanho']);
									echo "<h1>Peça editada!</h1>";			
							}else{
							 $_SESSION['pecas'][]= new Pecas(
								$_GET['tipo'],$_GET['marca'],$_GET['tamanho']);
							 echo "<h1>Peça cadastrada!</h1>";
							}
							header("Refresh:2;../visao/cadPecas.php");
						}


						?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" ><strong>Feito por Henrique Silva Braida</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="../visao/js/app.js"></script>

</body>

</html>