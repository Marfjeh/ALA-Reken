<?php
//uitreksel.php
include("menu.html");
if (isset($_POST["submit"]))
{
    
    $to = $_POST["email"];
    $message = ""; //todo
    $subject = "afspraak maken verlengen paspoort door ".$_POST["naam"];
    $headers = 'From: webmaster@gemeentegekkigeit.nl' . "\r\n" .
    'Reply-To: webmaster@gemeentegekkigeit.nl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $headers .= 'Bcc: webmaster@gemeentegekkigeit.nl' . "\r\n";

    //mail naar aanvrager met bcc naar gemeente
    mail($to, $subject, $message, $headers);
    
    //formulier verstuurd
    echo("De afspraak voor het verlengen van uw paspoort is verstuurd, u krijgt via mail een bevestiging. Check uw mail");
}
else
{
    //formulier niet verstuurd
?>
	<?php require("Pagina.php"); ?>

	<div id="pagina">
    <h2>uitreksel bevolkingsregister aanvragen</h2>
    <p>hier ziet u wat u allemaal moet doen om een uitreksel bevolkingsregister aan te vragen</p>
    <p>dit kan NIET online, u dient dit persoonlijk op het gemeentehuis te doen.</p>
    <p>
        <h3>Wat heeft u nodig?</h3>
        - geldig identiteitsbewijs<br>
        - geld (pinnen is mogelijk)<br>
    </p>
    <p>
        <h3>Hier kunt u een afspraak inplannen</h3>
        <form method="post">
            wat is uw naam:<input type="text" name="naam"><br>
            wat is uw email adres: <input type="email" name="email"><br>
            geeft een datum en tijdstip op: <input name="datum" type="date">
            <input name="tijd" type="time"><br><br>
            <input type="submit" name="submit" value="verstuur">
        </form>
    </p>
</div>
<?php
}
?>
	     </body>
</html>