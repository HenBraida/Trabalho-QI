<?php
include "menu.php";
include "../modelo/pecas.class.php";
include "../controle/init.php";
session_start();


$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_pecas");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Tipo</th><th>Marca</th><th>Tamanho</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
		<td>'{$row['tipo']}'</td>
		<td>'{$row['marca']}'</td>
		<td>'{$row['tamanho']}'</td>
	
	</tr>";
}
echo "</table>";
?>
