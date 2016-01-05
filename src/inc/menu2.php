<div id="menu">
    <button class="showmenu" id="menuknopje"><img src="img/icon/menu.png" height="32" width="32"></button>
</div>
<div id="menu2" class="menu" >
    <span id="links"></span>

        <!--<a href="index.php">Home </a>-
        <a href="blog.php">Nieuws </a>-
        <a href="oefenen/index.php">Oefenen </a>-
        <a href="contact.php">Contact</a>-->

        <button onclick="goUrl('index.php');"><img src="img/icon/home.png" width="55"><br>Home</button>
    <button onclick="goUrl('blog.php');"><img src="img/icon/nieuws.png" width="55"><br>Nieuws</button>
    <button onclick="goUrl('oefenen/index.php');"><img src="img/icon/computer.png" width="55"><br>Oefenen</button>
    <button onclick="goUrl('contact.php')"><img src="img/icon/contact.png" width="55"><br>Contact</button>
</div>

<script>
    $(document).ready(function() {
        var first = true;

        // Hide menu once we know its width
        $('.showmenu').click(function() {
            var $menu = $('.menu');
            var $knop = $('#menuknopje');
            if ($menu.is(':visible')) {
                // Slide away
                $menu.animate({left: -(500)}, function() {
                    $menu.hide();
                    // $knop.show();
                });
            }
            else {
                // Slide in
                $menu.show().css("left", -(500)).animate({left: 0});
                // $knop.hide();
            }
        });
    });

</script>