<!doctype html>
<html>
	<head>
		<title>Lista de Assistencias</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Lista de Assistencias</h1>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Nome</th>
			</tr>
			<?php
				foreach($retorno as $dado)
				{
			
					echo "<tr>
						  <td>{$dado->idassistencia}</td>
						  <td>{$dado->nome}</td>
						  </tr>";
				}
			?>
		</table>
	</body>
</html>