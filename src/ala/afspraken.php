<?php
//afspraken.php
require("menu.html");

//check of formulier al is verstuurd
if (isset($_POST["actie"]))
{
    //formulier is verstuurd
    $actie = $_POST["actie"];
    
    switch ($actie)
    {
        case 0:
            echo("u heeft niets ingevuld");
            break;
        case 1:
            echo("u heeft gekozen voor kapvergunning aanvragen");
            header("location: kapvergunning.php");
            break;
        case 2:
            echo("u heeft gekozen voor paspoort verlengen");
            header("location: paspoort.php");
            break;
        case 3:
           header("location: uitreksel.php");
            break;
        default:
            break;
    }
        
}
else
{
    //formulier niet verstuurd, laat maar zien
    ?>
	<?php require("Pagina.php"); ?>

	<div id="pagina">
    <form method="post">
        <h2>maak een keuze voor een afspraak</h2>
        <select name="actie">
            <option value="0">---</option>
            <option value="1">kapvergunning aanvragen</option>
            <option value="2">paspoort verlengen</option>
            <option value="3">uitreksel bevolkingsregister aanvragen</option>
        </select>
        
    
        <input type="submit">
    </form>
	</div>
    <?php
}


?>
