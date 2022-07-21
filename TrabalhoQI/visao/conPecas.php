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
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Consulta peça</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nome" class="form-control" placeholder="Digite o tipo da peça">
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
                         

							if(isset($_SESSION['pecas'])){
								echo "<table class='table'>";
								echo "<tr><th>#</th><th>Tipo</th><th>Marca</th><th>Tamanho</th></tr>";
								foreach($_SESSION['pecas'] as $i=>$pecas){
									
									$tipo = $pecas->getTipo();
									$marca = $pecas->getMarca();
									$tamanho = $pecas->getTamanho();								
									if(isset($_GET['tipo']) and (str_contains($tipo,$_GET['tipo'])
									or str_contains($tamanho,$_GET['tamanho']))									
									){	
										
										echo "<tr>
										<td>
											<div class='row'>
											
												<form action='cadMotorista.php' method='GET' style='display:inline;'>
													<input type='hidden' name='cod' value='$i'>
													<input type='hidden' name='tipo' value='$tipo'>  
													<input type='hidden' name='marca' value='$marca'>
													<input type='hidden' name='tamanho' value='$tamanho'>  	        
													<button type='submit' class='btn-danger' name='delPecas'>
														<i class='fa fa-trash'></i>
													</button>
																						
													<button type='submit' class='btn-info' name='ediPecas'>
													<i class='fa fa-edit'></i>
													</button>
												</form> 
												
											</div>      
										</td>       
										<td>$tipo</td><td>$marca</td><td>$tamanho</td></tr>";  
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