<?php
include_once("inc/head.php");
include_once("inc/menu.php");
?>
	<script src="js/systeem.js"></script>
    <script src="js/instellingen.js"></script>
<div id="pagina">
	<div id="content">
        <div id="tafelsel">
	<p>Selecteer een tafel om te oefenen.</p>
        </div>

	<div id="divResult" style="text-align:center;"></div>
	</div>
    	<div id="divResult2" style="text-align:center;"></div>
</div>
    <script>
        var bgcolor = 0;
        var bginc = 360 / MaxTafels;

            for (i = 0; i <= MaxTafels; i++)
            {
                addtoelement("divResult2", "<button onclick='toonTafelOefening(" + i + ");' style='font-size: 20px; background-color: hsl( " + bgcolor + ", 60%, 50%); border: hsl(" + bgcolor + ", 60%, 30%) solid 1px;'>" + i +"</button> ");
                bgcolor = bgcolor + bginc;
            }
    </script>
<?php
include_once("inc/footer.php");
?>