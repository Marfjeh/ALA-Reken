<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    $page = "Afspraak";

    /*
      Database:
      ID
      VolledigeNaam
      E-Mail
      Datum
      Tijd
      Onderwerp
    */
?>
<script>
$(function() {
  $( "#Datum" ).datepicker();
});

$(function() {
  $('#Tijd').timepicker({
    'minTime': '8:00',
    'maxTime': '17:30' });
});

</script>
<div id="pagina">
  <div id="content">
  <h1>U wilt een afspraak maken? dat kan!</h1>
  <fieldset style="margin: 10%;">
  <legend>Afspraak maken</legend>
  <form action="inc/verzend.php" method="post">
    <p>
        <label for="VolledigeNaam">Volledige Naam: </label>
        <input class="css-input" type="text" name="VolledigeNaam" id="VolledigeNaam">
    </p>

    <p>
        <label for="E-Mail">E-mail: </label>
        <input class="css-input" type="text" name="E-Mail" id="E-Mail">
    </p>

    <p>
        <label for="Datum">Datum: </label>
        <input class="css-input" type="text" name="Datum" id="Datum">
    </p>

    <p>
        <label for="Tijd">Tijd: </label>
        <input class="css-input" type="text" name="Tijd" id="Tijd">
    </p>

    <p>
        <label for="Onderwerp">Onderwerp: </label>
        <select class="css-input" name="Onderwerp" id="Onderwerp">
          <option value="Kap-Vergunning">Kap Vergunning</option>
          <option value="Uitrekensel">Uitrekensel</option>
          <option value="Paspoort verlengen">Paspoort Verlengen</option>
        </select>
    </p>

    <button class="knop" type="submit">Verzenden</button>
    <p>Letop: Uw Ip-Adres word opgeslagen voor boekhouding.</p>
  </form>
</fieldset>
</div>
</div>

<?php
    require_once("inc/footer.php"); // Footer, waar ook de einde van de site staat </html> dus.
?>
