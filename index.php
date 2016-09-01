<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bars.css">
	<title>Sharox - Login</title>
</head>

<body>
	<?php include_once("macros/loginBar.php"); ?>
	<div id="loginInput">
		<img src="./img/logo.png" alt="logo">
		<p>E-mail</p>
		<p><input type="email" required></p>
		<p>Senha</p>
		<p><input type="password" required></p>
		<input type="submit" value="Enviar">
		<input type="submit" value="Esqueci minha senha">
	</div>

	<?php include_once("macros/bottomBar.php"); ?>

</body>
</html>
