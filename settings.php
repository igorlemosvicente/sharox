<?php
$pageTitle = "Cadastro";
$pageCss = '<link rel="stylesheet" href="css/settings.css">';
$loggedStatus = true;
include("php/topFile.php");
?>

  <div class="blocks">
    Nome <input type="text" name="settName" required>E-mail <input type="email" name="settEmail" required>
  </div>
  <div class="blocks" id="settingsSchedule">
    <p>Horário de disponibildade</p>
    <table id="settTable">
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
  </div>
  <div class="blocks">
    Instituição <input type="text" name="settInstituition" required>
    Campus <input type="text" name="settCampus" required>
  </div>
  <div class="blocks">
    Nova senha <input type="password" name="newPassword1">
    Repetir nova senha <input type="password" name="newPassword2">
    Senha atual <input type="password" name="oldPassword" required>
    <input type="submit" name="settButton" value="Enviar">
  </div>

<?php include("php/bottomFile.php"); ?>
