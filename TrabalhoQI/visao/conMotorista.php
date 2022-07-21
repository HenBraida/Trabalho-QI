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
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Consulta Motorista</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nome" class="form-control" placeholder="Digite o nome">
									</div>
									<div class="col-12 col-lg-6">	
										<button class="btn btn-info" type="submit">BUSCAR</button>
										<button class="btn btn-warning" type="cancel">LIMPAR</button>
									</div>	
								</div>	
							</form>
						</div>
					</div>
					<div class="row">
						<?php
                         

							if(isset($_SESSION['motorista'])){
								echo "<table class='table'>";
								echo "<tr><th>#</th><th>Nome</th><th>Cpf</th><th>Cnh</th></tr>";
								foreach($_SESSION['motorista'] as $i=>$motorista){
									
									$cpf = $motorista->getCpf();
									$nome = $motorista->getNome();
									$cnh = $motorista->getCnh();								
									if(isset($_GET['nome']) and (str_contains($nome,$_GET['nome'])
									or str_contains($cpf,$_GET['nome']))									
									){	
										
										echo "<tr>
										<td>
											<div class='row'>
											
												<form action='cadMotorista.php' method='GET' style='display:inline;'>
													<input type='hidden' name='cod' value='$i'>
													<input type='hidden' name='cpf' value='$cpf'>  
													<input type='hidden' name='nome' value='$nome'>
													<input type='hidden' name='cnh' value='$cnh'>  	        
													<button type='submit' class='btn-danger' name='delMotorista'>
														<i class='fa fa-trash'></i>
													</button>
																						
													<button type='submit' class='btn-info' name='ediMotorista'>
													<i class='fa fa-edit'></i>
													</button>
												</form> 
												
											</div>      
										</td>       
										<td>$nome</td><td>$cpf</td><td>$cnh</td></tr>";  
									} 
								}    
								
								echo "</table>";
							}
							
							?>
					</div>		

				</div>
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