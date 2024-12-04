<!doctype html>
<html>
	<head>
		<title>Lista de Clientes</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Lista de Clientes</h1>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Telefone</th>
			</tr>
			<?php
				foreach($retorno as $dado)
				{
			
					echo "<tr>
						  <td>{$dado->idcliente}</td>
						  <td>{$dado->nome}</td>
						  <td>{$dado->celular}</td>
						  </tr>";
				}
			?>
		</table>
	</body>
</html>