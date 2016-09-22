<?php
$pageTitle = "Login";
$pageCss = '<link rel="stylesheet" href="css/index.css">';
$loggedStatus = false;

include("php/topFile.php");
?>

<div id="loginInput" class="blocks">
	<form action="index.php#" method="post">
		<img src="./img/logo.png" alt="logo">
		<p>E-mail</p>
		<p><input type="email" name="loginEmail" required placeholder="exemplo@domínio.com.br" autofocus></p>
		<p>Senha</p>
		<p><input type="password" name = "loginPass" required placeholder="******"></p>
		<input type="submit" value="Entrar">
		<input type="button" value="Esqueci minha senha">
	</form>
</div>

<?php
if () {
	echo "Senha errada. Tente \"priscilinha\"";
}
?>

<?php
include("php/bottomFile.php");
?>
