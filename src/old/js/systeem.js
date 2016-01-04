var kindnaam = prompt("Wat is je naam?");
function toonTafelOefening() // dit is om de tafels te laten zien,
{
  var tafelNr = document.getElementById("tafel").value;  
  document.getElementById("divResult").innerHTML = "";
  var tabel = "<table> <form name=\"antwoordenFormulier\">";
  for (var teller = 1; teller <= 10; teller++) 
  {
    tabel += "<tr><td>"+ teller + " x " + tafelNr + " = </td>";
    tabel += "<td><input type=\"text\" size=\"25\" id=\"vraagNr[" + teller + "]\" /></td></tr>";
  }
  tabel +="</table><input type=\"submit\" value=\"controleren\" onclick=\"controleerAntwoorden()\"></form>";
  document.getElementById("divResult").innerHTML = tabel;
  }
function controleerAntwoorden() // dit stukje code conteleerd dat het kind het juiste antwoord gaf.
{
  var tafelNr = document.getElementById("tafel").value;  
  var aantalGoed = 0;
  var aantalFout = 0;
  for (var teller = 1; teller <=10; teller++) 
  {
    var correctAntwoord = tafelNr * teller;
    var gegevenAntwoord = document.getElementById("vraagNr[" + teller + "]").value;
    if (correctAntwoord == gegevenAntwoord)
    {
      document.getElementById("vraagNr[" + teller + "]").style.backgroundColor="#00FF00"; // vraag was goed!
      aantalGoed++; 
    }
    else
    {
      document.getElementById("vraagNr[" + teller + "]").style.backgroundColor="#FF0000"; // vraag was fout!
      aantalFout++;
    }
  }
  alert(kindnaam + ", je had " + aantalGoed + " vragen goed en " + aantalFout + " vragen fout.");
}