<?php

?>
<!DOCTYPE html>
<html>
<head>
        <title>Registro de libros</title>
        <meta charset='utf-8' />
        <link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-3">
        <h2>Registro de libros</h2>
        <p>Completa los datos siguientes: </p>

	<form action="alta.php" method="post">
		<div class="rgba-primary-3">
		Título:<br/>
		<input type="text" name="titulo" required><br/>
		</div>
		<div>
		Autor:<br/>
		<input type="text" name="autor" required><br/>
		</div>
		<div>
		Año de publicación:<br/>
		<input type="date" name="año" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>

<a href="creditos.php">
Creditos</a>

</body>
</html>
