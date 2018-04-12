<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Stict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/html" xml:lang="en" lang="en">

<head>
<title> Autenticar  </title>
</head>
<body>
Autenticando...

include_once("conexion.php");

$user= $_POST['usuario'];
$password = $_POST['password'];

$consulta = conectar();

if ($_SESSION['pag']==0){
	header("Location: login.php");
}

$user = FILTER_VAR($user,FILTER_SANITIZE_STRING);
$password= md5($password);

echo "<h2>Datos</h2>Usuario: ".$user;
echo "<br>Contraseña: ".$password;

$result = consulta ("SELECT password FROM usuarios WHERE user_name= '$user");
$process= pg_result($result, $consulta);

if  (!$process) {
	$_SESSION['error']=2;
	header("Location: login.php");
} else {
	$result = pg_fetch_result($process, 0, 0);
	if ($result == $password){
		session_start();
		$_SESSION['pag']=1;
		header("Location: menu.php");
	} else {
		session_start();
		$_SESSION['error']=1;
		header("Location: login.php");
	}
}

pg_close($consulta);

<a href="creditos.php">
Creditos</a>

<body/>
</html>
