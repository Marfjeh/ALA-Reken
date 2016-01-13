<?php
include_once("inc/head.php");
include_once("inc/menu.php");
?>
	<script src="js/instellingen.js"></script>
	<div id="pagina">
		<div id="content">
			<img src="img/tafels.jpg"/>
		<p> of je download de pdf's hier onder:</p>

			<div id="divResult2" style="text-align:center;"></div>
			<script>
				for (i = 0; i < 13; i++)
				{
					addtoelement("divResult2", "<a class='knopje' href='pdf/tafel" + i + ".pdf'>" + i + "</a>");
				}
			</script>
		</div>


	</div>
<?php
include_once("inc/footer.php");
?>