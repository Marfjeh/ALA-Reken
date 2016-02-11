<?php
session_start();

error_reporting(E_ALL);
require("Pagina.php");
include("functions.inc.php");
include("database.php");
$html  = "";

$html .= showPizzaMenu("menukaart",$pizzas); //maak de menukaart met pizzas vanuit de array

//check action
if (isset($_POST["afrekenen"]) || isset($_POST["emptycart"]))
{
    if (isset($_POST["emptycart"]))
    {
        $_SESSION["cart"] = "";
        //session_destroy();    //kill all sessions
        unset($_SESSION["cart"]); //netter, alleen cart wordt leeggemaakt
    }
    if (isset($_POST["afrekenen"]))
    {
        echo("<div id='pagina'>Bedankt voor het bestllen bij pizza Soprans. Uw betaling is gereed.</div>");
        exit;
    }
}

//check cart session
$cart = array();
if (isset($_SESSION["cart"])) $cart = $_SESSION["cart"];

//check order
if (isset($_POST["pizza"]) && isset($_POST["size"]) && isset($_POST["aantal"]))
{
    $pizza = $_POST["pizza"];
    $size = $_POST["size"];
    $aantal = $_POST["aantal"];
    $price = $pizzas[$pizza][$size]; //get price from input array    
    //make order as array
    $order = array($pizza, $size, $aantal, ($price*$aantal), 0 ); //1 = default voor aantal
    
    $_SESSION["cart"] = addOrderToCart($cart,$order);
    $html .= showCart($_SESSION["cart"]);     
}

echo($html);
//echo(showPizzaArray($pizzas));
?>