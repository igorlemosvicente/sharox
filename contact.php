<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/bars.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/blocks.css">
  <title>Sharox - Fale conosco</title>
</head>

<body>

  <?php include_once("macros/loginBar.php"); ?>
  <div id="contactUs" class="blocks">
    <p>E-mail</p>
    <input type="email" name="contactEmail">
    <p>Assunto</p>
    <input type="text" name="contactSubject">
    <p>Mensagem</p>
    <textarea name="contactText" id="contactText"></textarea>
    <p><a href="home.php"><input type="submit" value="Enviar"></a></p>
    <p>Contate-nos também por</p>
    <a href="mailto:igorlemosvicente@gmail.com"><img src="img/gmailicon.png" alt="igorlemosvicente@gmail.com" class="contactIcon"></a>
    <a href="http://telegram.me/igorigorigorigor"><img src="img/telegramicon.png" alt="@igorigorigorigor" class="contactIcon"></a>
    <a href="contact.php"><img src="img/facebookicon.png" alt="/sharox" class="contactIcon"></a>
    <a href="contact.php"><img src="img/redditicon.png" alt="/r/sharox" class="contactIcon"></a>
    <a href="contact.php"><img src="img/twittericon.png" alt="@sharox" class="contactIcon"></a>
  </div>

    <?php include_once("macros/bottomBar.php"); ?>

</body>

</html>
