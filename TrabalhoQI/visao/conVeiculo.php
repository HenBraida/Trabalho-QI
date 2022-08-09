<?php
include "menu.php";
include "../modelo/veiculo.class.php";
include "../controle/init.php";
session_start();

$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_veiculo");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Placa</th><th>Marca</th><th>Modelo</th><th>Ano</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
			<td>'{$row['placa']}'</td>
			<td>'{$row['marca']}'</td>
			<td>'{$row['modelo']}'</td>
			<td>'{$row['ano']}'</td>
	</tr>";
}
echo "</table>";
?>
