<?php
require("inc/database.php"); // FlatFile Database laden.
error_reporting(0);
/*
Deze pagina stuurt de gebruiker naar de pagina zonder .php bestanden te gebruken en dat de site als bijvoorbeeld: www.pizza.nl/index.php?page=home dan laad hij de home.php bestand
deze script is gegescheven door marvin ferwerda, deze code is open source, u mag vrij deze code veranderen en voor uw zelf gebruiken.

dit maakt het idee van template's waar alleen de pagina alleen maar <div id="pagina"> nodig heft om het in de content te zetten.

Nieuw in deze versie 0.2: Debug modes, Bestands datum.

aan dit systeem word niet meer gewerkt dit idee word gebouwd naar een CMS in de toekomst.
*/

if (isset($_GET["page"])) // kijkt naar ?page= indien er iets in staat da runt deze code als volgende:
{
	$pagina = $_GET["page"] . ".php"; // zet de waarde als een var en zet .php extensie achter

	$pagina_datum = date ("F d Y H:i:s.", filemtime("inc/" . $pagina)); // Pagina datum waneer het veranderd is. dit is alleen als het op groepen word als je het wil zien van elke pagina vroeg &debug=1 achter op de aderes balk.

	$geladen_pagina = $_GET["page"]; // dit is voor het menu om te kijken welke pagina je hebt geopend

	if(!file_exists("inc/" . $pagina)) { // Kijkt even dat het bestand bestaat

	die(require("inc/fout.php")); // als dat niet het geval is en de bestand bestaat niet, word je door gestuurt naar fout.php

	}
	else {

		require("inc/" . $pagina); // Pagina is gevonden en die laden.
	}
}
else
{
require("inc/home.php"); // als er geen ?page= word gegeven dan door sturen naar home.
}

	if (isset($_GET["debug"])) { // Debug mode om infomatie telaten zien die de gebruiker niet hoeft te zien. alleen voor de website ontwikkelaar
		$debug = $_GET["debug"];
		if ($debug == "1") {
				echo "<div id='footer'>[!] DEBUG MODE [!] <br> Pagina: " . $geladen_pagina . " <br> Versie:" . $website_versie;
				echo " <br> pagina datum: " . date ("F d Y H:i:s.", filemtime("inc/" . $pagina));
				echo " <br> URL: " . $_SERVER['REQUEST_URI'] . "</div>";
				error_reporting(-1);
				define("TITLE", "DEBUG MODE");
		}
		else if ($debug == "2") {
			error_reporting(-1);
			define("TITLE", "DEBUG MODE 2");
			 print_r($pizzas);
		}
		 else {}

	}
	else
	{
		define("TITLE", "Pizzaketen Sopranos ");
	}
?>
<title><?php echo(TITLE);?></title>
