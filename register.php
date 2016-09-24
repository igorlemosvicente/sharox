<?php
$pageTitle = "Registre-se";
$pageCss = '<link rel="stylesheet" href="css/register.css">';
$loggedStatus = false;
include("php/topFile.php");
?>

<form method="post" action="home.php">
	<div id="registerInput" class="blocks">
		<img src="./img/logo.png" alt="logo">
		<p>Nome</p>
		<p><input type="text" required autofocus name="registerName"></p>
		<p>E-mail</p>
		<p><input type="email" required placeholder="exemplo@dominio.com.br"></p>
		<p>Senha</p>
		<p><input type="password" required></p>
		<p>Repetir Senha</p>
		<p><input type="password" required></p>
		<p>Instituição</p>
		<p><input type="text" required ></p>
		<p>Campus</p>
		<p><input type="text" required></p>
		<input type="submit" value="Enviar">
	</div>
</form>

<?php include("php/bottomFile.php"); ?>
