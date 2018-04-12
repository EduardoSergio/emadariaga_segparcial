<?php

?>
<!DOCTYPE html>
<html>

<head>
	<title>Inicio</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-4">
	<h2>Inicio de Sesión</h2>
	<p>
		Ingresa tu usuario y contraseña
	</p> <br/>

	<form action="autenticar.php" method="post">
		<div class="rgba-primary-3">
		Usuario:<br/>
		<input type="text" name="usuario" autocomplete="off"><br/>
		</div>
		<div>Contraseña:<br/>
		<input type="password" name="password" autocomplete="off"><br/>
		</div> </div>
		<div>
		<input type="submit" value="Iniciar sesión">
		</div>
	</form>

<a href="creditos.php">
Creditos</a>

</body>
</html>
