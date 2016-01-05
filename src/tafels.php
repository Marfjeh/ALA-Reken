<?php
include_once("inc/head.php");
include_once("inc/menu.php");
?>
	<script src="js/systeem.js"></script>
<script>start();</script>
<div id="pagina">
	<div id="content">
	<p>Selecteer een tafel om te oefenen.<p>
    <form name="tafelform">
        <select id="tafel" onchange="toonTafelOefening()">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
    </form>
	<div id="divResult" style="text-align:center;"></div>
	</div>
</div>
<?php
include_once("inc/footer.php");
?>