<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/bars.css">
	<title>Sharox - Registre sua conta</title>
</head>

<body>
	<?php include("macros/loginBar.php"); ?>

	<div id="registerInput">
		<img src="./img/logo.png" alt="logo">
    <p>E-mail</p>
    <p><input type="email" required></p>
    <p>Senha</p>
		<p><input type="password" required></p>
    <p>Repetir Senha</p>
    <p><input type="password" required></p>
    <p>Instituição</p>
    <p><input type="text" required></p>
    <p>Campus</p>
    <p><input type="text" required></p>
		<input type="submit" value="Enviar">
	</div>

	<?php include_once("macros/bottomBar.php"); ?>


</body>
</html>
