<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/bars.css">
  <link rel="stylesheet" href="css/blocks.css">
  <link rel="stylesheet" href="css/offer.css">
  <title>Sharox - Faça uma oferta</title>
</head>
<body>

  <?php include_once("macros/homeBar.php"); ?>

  <div id="postOffer" class="blocks">
    <form>
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

  <?php include_once("macros/bottomBar.php"); ?>

</body>
</html>
