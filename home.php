<?php
$pageTitle = "Home";
$pageCss = '<link rel="stylesheet" href="css/home.css">';
$loggedStatus = true;
include("php/topFile.php");
?>

  <h1>Olá, <?php echo $_POST['registerName']; ?>.</h1>

<?php include("php/bottomFile.php"); ?>
