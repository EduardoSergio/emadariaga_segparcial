<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de autores</title>
	<meta charset='utf-8' />
	<link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-3">
	<h2>Registro de autores</h2>
	<p>Completa los datos siguientes: </p>

	<form action="alta.php" method="post">
		<div>
		Nombre:<br/>
		<input type="text" name="nombre" required><br/>
		</div>
		<div>Apellido paterno:<br/>
		<input type="text" name="apellidoPaterno" required><br/>
		</div>
		<div>
		Apellido materno:<br/>
		<input type="text" name="apellidoMaterno" required><br/>
		</div>
		<div>
		Nacionalidad:<br/>
		<input type="text" name="nacionalidad" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>

<a href="creditos.php">
Creditos</a>

</body>
</html>
