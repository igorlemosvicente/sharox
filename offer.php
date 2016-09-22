<?php
$pageTitle = "Faça uma oferta";
$pageCss = '<link rel="stylesheet" href="css/offer.css">';
$loggedStatus = true;
include("php/topFile.php");
?>

  <div id="postOffer" class="blocks" method="post">
    <form action="offers.php" method="post">
      <p>Cadastre sua oferta</p>
      <p>Quantidade de cópias: <input type="number" min="1" name="copiesAmount"></p>
      Dias disponíveis:
      <table id="offerTable">
        <tr>
          <th></th>
          <th>Segunda</th>
          <th>Terça</th>
          <th>Quarta</th>
          <th>Quinta</th>
          <th>Sexta</th>
          <th>Sábado</th>
          <th>Domingo</th>
        </tr>
        <tr>
          <th>Manhã</th>
          <td><input type="checkbox" name="segundaManha"></td>
          <td><input type="checkbox" name="tercaManha"></td>
          <td><input type="checkbox" name="quartaManha"></td>
          <td><input type="checkbox" name="quintaManha"></td>
          <td><input type="checkbox" name="sextaManha"></td>
          <td><input type="checkbox" name="sabadoManha"></td>
          <td><input type="checkbox" name="domingoManha"></td>
        </tr>
        <tr>
          <th>Tarde</th>
          <td><input type="checkbox" name="segundaTarde"></td>
          <td><input type="checkbox" name="tercaTarde"></td>
          <td><input type="checkbox" name="quartaTarde"></td>
          <td><input type="checkbox" name="quintaTarde"></td>
          <td><input type="checkbox" name="sextaTarde"></td>
          <td><input type="checkbox" name="sabadoTarde"></td>
          <td><input type="checkbox" name="domingoTarde"></td>
        </tr>
        <tr>
          <th>Tarde</th>
          <td><input type="checkbox" name="segundaNoite"></td>
          <td><input type="checkbox" name="tercaNoite"></td>
          <td><input type="checkbox" name="quartaNoite"></td>
          <td><input type="checkbox" name="quintaNoite"></td>
          <td><input type="checkbox" name="sextaNoite"></td>
          <td><input type="checkbox" name="sabadoNoite"></td>
          <td><input type="checkbox" name="domingoNoite"></td>
        </tr>
      </table>
      <a href="home.php"><input type="submit" value="Postar"></a>
  </div>

  <?php include("php/bottomFile.php"); ?>
