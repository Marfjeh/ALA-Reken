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
</body>
</html>
