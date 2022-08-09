<?php
include "menu.php";
include "../modelo/motorista.class.php";
include "../controle/init.php";
session_start();


$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_motorista");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Nome</th><th>Cpf</th><th>Cnh</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
		<td>'{$row['nome']}'</td>
		<td>'{$row['cpf']}'</td>
		<td>'{$row['cnh']}'</td>
	</tr>";
}
echo "</table>";
?>
