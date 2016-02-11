<?php
//functions.inc.php

function addOrderToCart($cart,$order)
{
    //check order
    if ($order)
    {
        //print_r($order);
        $opgehoogd = false;
            
        //check of pizza en maat al in cart array zit
        for ($i=0; $i<count($cart); $i++)
        {
            if ($cart[$i][0] == $order[0] && $cart[$i][1] == $order[1]) //naam en maat hetzelfde
            {
                //als gekozen pizza en bijbehorende maat al voorkomt in cart dan aantal en prijs ophogen
                $cart[$i][2] += $order[2]; //aantal
                $cart[$i][3] += $order[3]; //prijs
                $cart[$i][4] += calcDiscount(($order[3]/$order[2]),$order[2]); //korting
                //switch op true zetten om te voorkomen dat pizza 2x wordt toegevoegd
                $opgehoogd = true;
            }
        }
        
        if($opgehoogd) //check de switch
        {
            //niks doen dus geen array_push
        }
        else
        {
            //nieuwe pizza en maat toegevoegd dus wel array_push
            array_push($cart,$order);
        }
    }
    sort($cart);
    return($cart);
}

function showPizzaMenu($title, $pizzas)
{
    $output = "<div id='pagina'><Center><h1>$title</h1></Center>";
    $output .= "<center><table width=500>";

    foreach($pizzas as $name=>$pizza)
    {
        $output .= "<tr><td><form method='post'>";
        $output .= "<table border=1><tr><td width=100%><input type='hidden' name='pizza' value='".$name."'>".$name."</td>";
        $output .= "<td><select name='size'>";
        foreach($pizza as $size=>$price)
        {
            $output .= "<option value='" . $size . "'>" . $size . " (" . $price . " euro)</option>";
        }
        $output .= "</select>";
        $output .= "</td><td><input name='aantal' type='number' value='1' min='1' max='20' size='3'></td>";
        $output .= "<td><input type='submit' value='in cart'></td></tr></table></form></td></tr>";
    }
    $output .= "</table>";
    
    return($output);
}

function showCart($cart)
{
    sort($cart);
    $total = 0.00; //decimal
    $count = 0;
    $discount = 0;
    $output = "<h2>winkelwagen</h2>";
    $output.= "<table border=1><tr><th>pizza (size)</th><th>aantal</th><th>prijs</th><th>korting</th></tr>";
    for ($i=0; $i<count($cart); $i++)
    {
        $output.= "<tr>";
            $output.= "<td>" . $cart[$i][0] . " (" . $cart[$i][1] . ")</td>";   //naam en size
            $output.= "<td>" . $cart[$i][2] . "</td>";                          //aantal summized
            $output.= "<td>" . $cart[$i][3] . "</td>";                          //prijs per aantal pizza en size
            $prijsperstuk = ($cart[$i][3] / $cart[$i][2]);                      //prijs per stuk weer even terugrekenen
            $discountperorder = calcDiscount($prijsperstuk,$cart[$i][2]);       //korting berekenen
            $output.= "<td>" . $discountperorder . "</td>";                     //korting
        $output.= "</tr>";
        $count += $cart[$i][2];             //subtotaal aantal pizzas
        $total += $cart[$i][3];             //subtotaal prijs
        $discount += $discountperorder;     //subtotaal korting
    }

    $output.= "<tr>";
        $output.= "<td>totaal:</td>" . "<td>$count</td>" . "<td>&euro; " . ($total - $discount) . "</td>"; //totaal aantal pizzas
    $output.= "</tr>";
    
    $output.= "<tr>";
        $output.= "<td><form method='post'>";
        $output.= "<input type='submit' name='afrekenen' value='afrekenen'>";
        $output.= "<input type='submit' name='emptycart' value='Winkel wagen Legen'>";
        $output.= "</form></td>";
    $output.= "</tr>";
    
    $output.= "</table>";

   $output.= "</center></div>";
    
    return($output);
}

function showPizzaArray($pizzas)
{
    //use function for debugging only
    foreach($pizzas as $name=>$pizza)
    {
        echo("<p>$name<br>");
        foreach($pizza as $size=>$price)
        {
            echo $size . "($price)";    
        }
        echo("</p>");
    }
}
function calcDiscount($prijsperstuk,$aantal)
{    
    $aantalzonderkorting = round($aantal / 2);
    $aantalmetkorting = $aantal - $aantalzonderkorting;
    $discount = ($aantalmetkorting * ($prijsperstuk * 0.50));
    return($discount);        
}
?>
