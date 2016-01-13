// Deze javascript file heeft Marfframework versie 1.3.5 of hoger nodig!
var kindnaam = null; //global
var tafelnu = null; // global
alertify.prompt("Hallo! Wat is je naam?", function (val) {kindnaam = val;}, function(){Reload();} );
 function toonTafelOefening(tafel) // dit is om de tafels te laten zien,
 {
   settoelement("divResult", "");
   settoelement("divResult2", "");
   $('#tafelsel').hide();
   var tafelNr = tafel;
   tafelnu = tafel;
   document.getElementById("divResult").innerHTML = "";
   var tabel = "<table style=\"margin-left:auto; margin-right:auto;\"> <form name=\"antwoordenFormulier\">";
   for (var teller = 1; teller <= 10; teller++)
   {
     tabel += "<tr><td>"+ teller + " x " + tafelNr + " = </td>";
     tabel += "<td><input type=\"number\"  min=\"0\" class='css-input' id=\"vraagNr[" + teller + "]\" /></td></tr>";
   }
   tabel +="</table><input type=\"submit\" value=\"controleren\" onclick=\"controleerAntwoorden(tafelnu)\"></form>";

   document.getElementById("divResult").innerHTML = tabel;
   }
 function controleerAntwoorden(tafel) // controleer
 {
   var tafelNr = tafelnu;
   var aantalGoed = 0;
   var aantalFout = 0;
   for (var teller = 1; teller <=10; teller++)
   {
     var correctAntwoord = tafelNr * teller;
     var gegevenAntwoord = document.getElementById("vraagNr[" + teller + "]").value;
     if (correctAntwoord == gegevenAntwoord)
     {
       document.getElementById("vraagNr[" + teller + "]").style.backgroundColor="#66CC00"; // vraag was goed!
       aantalGoed++;
     }
     else
     {
       document.getElementById("vraagNr[" + teller + "]").style.backgroundColor="#CC3333"; // vraag was fout!
       aantalFout++;
     }
   }
   alertify.alert(kindnaam + ", je had " + aantalGoed + " vragen goed en " + aantalFout + " vragen fout.");
   if (aantalGoed >= 6 && aantalGoed < 10)
   {
     settoelement("divResult2", "");
     addtoelementln("divResult2", "<br>Goed Gedaan " + kindnaam + ", het is voldoende");
     addtoelementln("divResult2", "Je Cijfer: " + aantalGoed + ".0");
     $('#tafelsel').show();
   }
   else if (aantalGoed == 10)
   {
     settoelement("divResult2", "");
     addtoelementln("divResult2", "<br>Goed Gedaan " + kindnaam + ", Alles is goed! ga zo door!");
     addtoelementln("divResult2", "Je Cijfer: " + aantalGoed + ".0");
     $('#tafelsel').show();
   }
   else
   {
     settoelement("divResult2", "");
     addtoelementln("divResult2", "<br>Ojee. je scoorde niet zo goed. niet erg je kan hieronder een uitprintbaar leer papiertje uitprinten!<br>");
     addtoelementln("divResult2", "<a class='knopje' href='pdf/tafel" + tafelNr + ".pdf'>Pdf downloaden voor tafel van: " + tafelNr + "</a><br>");
     addtoelementln("divResult2", "<a class='knopje' href='oefenen.php'>Of je kan ook leren via de website!</a><br>");
     addtoelementln("divResult2", "Je Cijfer: " + aantalGoed + ".0");
     $('#tafelsel').show();
   }

 }