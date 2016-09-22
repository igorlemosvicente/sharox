<?php
$pageTitle = "Ranking";
$pageCss = '<link rel="stylesheet" href="css/ranking.css">';
$loggedStatus = true;
include("php/topFile.php");
?>

  <div id="rankingProperties" class="blocks">
    <p>Por pais</p>
    <select>
      <option value="br">Brasil</option>
      <option value="others">Outros</option>
    </select>
    <p>Por Universidade</p>
    <select>
      <option value="uffs">UFFS - Universidade Federal da Fronteira Sul</option>
      <option value="yoga">YCAP - Yoga com a Priscila</option>
    </select>
    <p>Por Campus</p>
    <select>
      <option value="xpc">Chapecó</option>
    </select>
  </div>

  <div id="rankingList">
    <table id="rankingTable">
      <tr>
        <th>Nome</th>
        <th>Universidade</th>
        <th>Saldo de Cópias</th>
      </tr>
      <tr>
        <td>Priscila Delabetha</td>
        <td>UFFS</td>
        <td>-666</td>
      </tr>
      <tr>
        <td>Dênio Duarte</td>
        <td>La UFFEX de Paris</td>
        <td>123</td>
      </tr>
    </table>
  </div>

<?php include("php/bottomFile.php"); ?>
