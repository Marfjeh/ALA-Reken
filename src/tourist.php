<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    $page = "Touristen pagina nl";
?>
<div id="pagina">
    <p>JEMOEDER</p>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.838576, lng: -0.580736},
          zoom: 11
          //44.838576, -0.580736
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
</div>
<?php
    require_once("inc/footer.php"); // Footer, waar ook de einde van de site staat </html> dus.
?>
