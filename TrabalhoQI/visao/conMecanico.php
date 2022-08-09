<?php
include "menu.php";
include "../modelo/mecanico.class.php";
include "../controle/init.php";
session_start();


$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_mecanico");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Nome</th><th>Ctps</th><th>Idade</th><th>Cpf</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
		<td>'{$row['nome']}'</td>
		<td>'{$row['ctps']}'</td>
		<td>'{$row['idade']}'</td>
		<td>'{$row['cpf']}'</td>
	</tr>";
}
echo "</table>";
?>
