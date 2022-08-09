<?php
include "menu.php";
include "../modelo/fornecedor.class.php";
include "../controle/init.php";
session_start();

$conexao = db_connect();
$consulta = $conexao->query("SELECT * FROM tb_fornecedor");
	echo"<table class='table'>";
	echo "<tr><th>#</th><th>Empresa</th><th>Marca</th><th>Produto</th></tr>";
while ($row = $consulta->fetch()){

	echo "<tr>
			<td><input name='id' type='hidden' value='{$row['id']}'>
			<i class='fa fa-trash btn btn-danger'></i>
			<i class='fa fa-edit btn btn-warning'></i>
			</td>
		<td>'{$row['empresa']}'</td>
		<td>'{$row['marca']}'</td>
		<td>'{$row['produto']}'</td>
	
	     </tr>";
}
echo "</table>";
?>
