<?php
  require_once("mff.php");    // MarfFrameWork Php Edition
  ini_set('error_reporting', E_ALL|E_STRICT);
  ini_set('display_errors', 1);


  /*
    Database:
    ID
    VolledigeNaam
    E-Mail
    Datum
    Tijd
    Onderwerp
  */
  $link = mysqli_connect("localhost", "root", "1997", "ala");
  $VolledigeNaam = mysqli_real_escape_string($link, $_POST['VolledigeNaam']); //fucking scriptkiddies met hun sql injections.
  $email = mysqli_real_escape_string($link, $_POST['E-Mail']);
  $afspraak = mysqli_real_escape_string($link, $_POST['Tijd']) . " " . mysqli_real_escape_string($link, $_POST['Datum']);
  $Onderwerp = mysqli_real_escape_string($link, $_POST['Onderwerp']);


  $sql2 = "SELECT * FROM Afspraken WHERE Afspraak = '".mysqli_real_escape_string($link, $afspraak)."'"; //Controleer dat er geen afspraak bestaat op die datum en tijd

  $sql = "INSERT INTO Afspraken (`VolledigeNaam`, `E-Mail`, `Afspraak`, `Onderwerp`, `IP`) VALUES ('$VolledigeNaam', '$email', '$afspraak', '$Onderwerp', '$ip')";
  if(mysqli_query($link, $sql))
  {
      echo "<html><head><script src='../js/mff.js'></script></head><body><script>goUrl('../succes.php');</script></body></html>";
  }
  else
  {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  mysqli_close($link);

 ?>
