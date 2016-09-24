<?php
$pageTitle = "Home";
$pageCss = '<link rel="stylesheet" href="css/home.css">';
$loggedStatus = true;
include("php/topFile.php");
?>

 <?php
      echo "<h1> Olá, " . (isset($_POST['registerName']) ? $_POST['registerName']:"Priscilinha") . ".</h1>";
?>

<?php include("php/bottomFile.php"); ?>
