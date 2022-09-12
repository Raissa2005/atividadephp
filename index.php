<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ATIVIDADE/FORMULÁRIO</title>
</head>
<body> 
	<h3>DADOS DO FUNCIONÁRIO</h3>
	<form method="post" action="cad.php">
	<p> id: <input type="number" name="id"></p><br> 
	<p> Nome:<input type="text" name="nome"></p><br>
	<p> Cargo: <input type="text" name="cargo"></p><br>
	<p> Salário: <input type="number" name="salario"></p><br>
	<p> Quantidade dependentes: <input type="number" name="dependentes"></p><br>

	<button type="submit">ENVIAR DADOS</button>

	</form>

</body>
</html>