<?php
$pageTitle = "Login";
$pageCss = '<link rel="stylesheet" href="css/index.css">';

include("php/topFile.php");
?>

<div id="loginInput" class="blocks">
	<?php if (isset($_POST['loginPass'])) {
		if ($_POST['loginPass'] == "priscilinha") {
			header('Location: home.php');
		}
		else {
			echo "<p>Senha errada. Tente \"priscilinha\"</p>";
		}
	}
	else { ?>
		<form action="index.php#" method="post">
			<img src="./img/logo.png" alt="logo">
			<p>E-mail</p>
			<p><input type="email" name="loginEmail" required placeholder="exemplo@domínio.com.br" autofocus></p>
			<p>Senha</p>
			<p><input type="password" name = "loginPass" required placeholder="******"></p>
			<input type="submit" value="Entrar">
			<input type="button" value="Esqueci minha senha">
		</form>
	<?php }?>
</div>


<?php
include("php/bottomFile.php");
?>
