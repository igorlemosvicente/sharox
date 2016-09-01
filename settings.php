<!DOCTYPE html>

<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/bars.css">
  <link rel="stylesheet" href="css/settings.css">
  <title>Sharox - Ofertas</title>

</head>
<body>

  <?php include_once("macros/homeBar.php"); ?>
  <p>Nome <input type="text" name="settName" required></p>
  <p>E-mail <input type="email" name="settEmail" required></p>
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
  <p>Instituição <input type="text" name="settInstituition" required></p>
  <p>Campus <input type="text" name="settCampus" required></p>
  <p>Nova senha <input type="password" name="newPassword1"></p>
  <p>Repetir nova senha <input type="password" name="newPassword2"></p>
  <p>Senha atual <input type="password" name="oldPassword" required></p>
  <input type="submit" name="settButton" value="Enviar">
  <?php include_once("macros/bottomBar.php"); ?>

</body>

</html>
