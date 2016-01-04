<?php
function printknop()
{
    echo ("
    <div id=\"menuicons\" style=\"text-align: center; padding-left: -10%;\">
    <button class=\"showmenu\"><img src=\"img/icon/menu.png\"><br>Menu</button>
    <button onclick=\"goUrl('index.php');\"><img src=\"img/icon/home.png\"><br>Home</button>
    <button onclick=\"goUrl('blog.php');\"><img src=\"img/icon/boekje.png\"><br>Nieuws</button>
    <button onclick=\"goUrl('oefenen/index.php');\"><img src=\"img/icon/computer.png\"><br>Oefenen</button>
    <button onclick=\"goUrl('contact.php')\"><img src=\"img/icon/contact.png\"><br>Contact</button>
</div>
    ");
}

?>

