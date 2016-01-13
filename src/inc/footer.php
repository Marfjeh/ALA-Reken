<script>
    function st()
    {
    var $menu = $('.menu');
    if ($menu.is(':visible')) {
        // weg gaan
        $menu.animate({left: -($menu.outerWidth() + 10)}, function() {
            $menu.hide();
        });
    }}
    setTimeout(function(){st();}, 500);
</script>
<div id="footer">
    <p>&copy; Het Boterbloempje<br> Site Design: Marvin Ferwerda. Deze site maakt gebruik van MarfFrameWork.</p>
</div>
</body>
</html>
