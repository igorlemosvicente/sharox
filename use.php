<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/bars.css">
  <link rel="stylesheet" href="css/use.css">
  <link rel="stylesheet" href="css/blocks.css">
  <title>Sharox - Cadastre sua universidade</title>
  </head>

  <body>

    <?php include_once("macros/loginBar.php"); ?>

    <div id="useForm" class="blocks">
      <p>E-mail</p>
      <input type="email" name="useEmail">
      <p>Universidade a ser incluída</p>
      <input type="text" name="useUniversity">
      <p>Comentários adicionais</p>
      <textarea name="useComment" id="useComment"></textarea>
      <a href="home.php"><input type="submit" value="Enviar"></a>
    </div>
  <?php include_once("macros/bottomBar.php"); ?>


  </body>
</html>
