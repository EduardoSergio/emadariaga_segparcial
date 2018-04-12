<?php

?>
<!DOCTYPE html>
<html>

<head>
<meta charset=UTF-8>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Inicio de sesión </title>
</head>

<body>
<div class="rgba-primary-2">
session_start();
$_SESSION['pag']=0;
if ($_SESSION['error']==1){
<font color="rgba-primary-3">
Usuario o contraseña incorrectos
</font>

<form action="autenticar.php" method="post">
<h2>Llene la siguiente información:</h2><br/>

	Usuario: <input type="text" name="usuario" autocomplete="off"><br/>
	Contraseña: <input type="password" name="password" autocomplete="off"><br/>
	<input type="submit" value="Iniciar Sesión">

</form>
</div>

<a href="creditos.php"> 
Creditos</a>

</body>
</html>
