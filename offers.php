<?php
$pageTitle = "Ofertas";
$pageCss = '<link rel="stylesheet" href="css/offers.css">';
$loggedStatus = true;
include("php/topFile.php");
?>
<?php $confirmIcon='<img src="img/confirmIcon.png" alt="yes" class="confirmIconOffers">'; ?>

<div class="blocks">
      <p id="copiesQuantity"><?php echo $_POST['copiesAmount'] ?></p>
      UFFS<br>
      Campus Chapecó<br>
      Oferecido por Igor Lemos Vicente<br>
      <table>
            <tr>
              <th></th>
              <th>S</th>
              <th>T</th>
              <th>Q</th>
              <th>Q</th>
              <th>S</th>
              <th>S</th>
              <th>D</th>
            </tr>
            <tr>
                  <th>Manhã</th>
                  <th><?php if (isset($_POST['segundaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoManha'])) echo $confirmIcon;?></th>
            </tr>
            <tr>
                  <th>Tarde</th>
                  <th><?php if (isset($_POST['segundaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoTarde'])) echo $confirmIcon;?></th>
            </tr>
            <tr>
                  <th>Noite</th>
                  <th><?php if (isset($_POST['segundaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoNoite'])) echo $confirmIcon;?></th>
            </tr>
      </table>
</div>
<div class="blocks">
      <p id="copiesQuantity"><?php echo $_POST['copiesAmount'] ?></p>
      UFFS<br>
      Campus Chapecó<br>
      Oferecido por Igor Lemos Vicente<br>
      <table>
            <tr>
              <th></th>
              <th>S</th>
              <th>T</th>
              <th>Q</th>
              <th>Q</th>
              <th>S</th>
              <th>S</th>
              <th>D</th>
            </tr>
            <tr>
                  <th>Manhã</th>
                  <th><?php if (isset($_POST['segundaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoManha'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoManha'])) echo $confirmIcon;?></th>
            </tr>
            <tr>
                  <th>Tarde</th>
                  <th><?php if (isset($_POST['segundaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoTarde'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoTarde'])) echo $confirmIcon;?></th>
            </tr>
            <tr>
                  <th>Noite</th>
                  <th><?php if (isset($_POST['segundaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['tercaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quartaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['quintaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sextaNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['sabadoNoite'])) echo $confirmIcon;?></th>
                  <th><?php if (isset($_POST['domingoNoite'])) echo $confirmIcon;?></th>
            </tr>
      </table>
      <form action="home.php" method="post">
            <textarea name="offerComment" id="offerComment"></textarea><br>
            <input type="submit" value="Enviar">
      </form>
</div>

<?php include("php/bottomFile.php");
