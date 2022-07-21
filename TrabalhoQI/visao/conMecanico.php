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
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Consulta mecânico</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nome" class="form-control" placeholder="Digite o nome do mecânico">
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
                         

							if(isset($_SESSION['mecanico'])){
								echo "<table class='table'>";
								echo "<tr><th>#</th><th>Nome</th><th>Ctps</th><th>Idade</th><th>Cpf</th></tr>";
								foreach($_SESSION['mecanico'] as $i=>$mecanico){
									
									$nome = $mecanico->getNome();
									$ctps= $mecanico->getCtps();
									$idade = $mecanico->getIdade();	
                  $cpf = $mecanico->getCpf();										
									if(isset($_GET['nome']) and (str_contains($nome,$_GET['nome'])
									or str_contains($ctps,$_GET['ctps']))									
									){	
										
										echo "<tr>
										<td>
											<div class='row'>
											
												<form action='cadMecanico.php' method='GET' style='display:inline;'>
													<input type='hidden' name='cod' value='$i'>
													<input type='hidden' name='nome' value='$nome'>  
													<input type='hidden' name='ctps' value='$ctps'>
													<input type='hidden' name='idade' value='$idade'>
                          <input type='hidden' name='cpf' value='$cpf'>   	        
													<button type='submit' class='btn-danger' name='delMecanico'>
														<i class='fa fa-trash'></i>
													</button>
																						
													<button type='submit' class='btn-info' name='ediMecanico'>
													<i class='fa fa-edit'></i>
													</button>
												</form> 
												
											</div>      
										</td>       
										<td>$nome</td><td>$ctps</td><td>$idade</td><td>$cpf</td></tr>";  
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