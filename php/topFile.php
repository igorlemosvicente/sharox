<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bars.css">
	<link rel="stylesheet" href="css/blocks.css">
      <?php print $pageCss; ?>
	<title>Sharox - <?php print $pageTitle; ?></title>
</head>
<body>
      <?php if ($loggedStatus) { ?>
            <div class="bars">
                <ul>
                  <li><a href="settings.php">Cadastro</a></li>
                  <li><a href="ranking.php">Ranking</a></li>
                  <li><a href="offers.php">Ofertas</a></li>
                  <li><a href="offer.php">Oferecer</a></li>
                </ul>
            </div>
      <?php } else { ?>
            <div class="bars">
                  <ul>
                        <li><a href="index.php">Entrar</a></li>
                        <li><a href="register.php">Registrar</a></li>
                  </ul>
            </div>
      <?php }?>
