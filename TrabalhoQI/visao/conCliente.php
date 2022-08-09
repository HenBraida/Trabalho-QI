<?php
include "menu.php";
include "../modelo/cliente.class.php";
include "../controle/init.php";
session_start();
?>

<form action="#" method="GET">
     NOME:<input name="nome" type="text"><br>   
     <button type="submit">CONSULTAR</button>
</form> 

<?php
$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_cliente");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Nome</th><th>Cpf</th><th>Idade</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
		<td>'{$row['nome']}'</td>
		<td>'{$row['cpf']}'</td>
		<td>'{$row['idade']}'</td>
	</tr>";
}
echo "</table>";
?>

	