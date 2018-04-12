<?php

?>
<!DOCTYPE html>
<html>
<head>
        <title>Registro de usuarios</title>
        <meta charset='utf-8' />
        <link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-3">
        <h2>Registro de usuarios</h2>
        <p>Completa los datos siguientes: </p>

	<form action="alta.php" method="post">
		<div>
		Nombre:<br/>
		<input type="text" name="nombre" required><br/>
		</div>
		<div>
		Apellido Paterno:<br/>
		<input type="text" name="apellidoPaterno" required><br/>
		</div>
		<div>
		Apellido Materno:<br/>
		<input type="text" name="apellidoMaterno" required><br/>
		</div>
		<div>
		Usuario:<br/>
		<input type="text" name="usuario" required><br/>
		</div>
		<div>
		Contraseña:<br/>
		<input type="password" name="password" autocomplete="off" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>

<a href="creditos.php">
Creditos</a>

</body>
</html>
