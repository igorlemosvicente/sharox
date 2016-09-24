<?php
$pageTitle = "Cadastre sua Universidade";
$pageCss = '<link rel="stylesheet" href="css/use.css">';
$loggedStatus = false;
include("php/topFile.php");
?>

    <div id="useForm" class="blocks">
      <p>E-mail</p>
      <input type="email" name="useEmail">
      <p>Universidade a ser incluída</p>
      <input type="text" name="useUniversity">
      <p>Comentários adicionais</p>
      <textarea name="useComment" id="useComment"></textarea>
      <a href="home.php"><input type="submit" value="Enviar"></a>
    </div>

<?php include("php/bottomFile.php"); ?>
