<?php require("Pagina.php"); $pagina_datum = "10-4-2015";

$fotos = array ("images/Borromea.png", "images/Margarita.png", "images/Napoletana.png", "images/Prosciutto.png");

?>
		<div id="pagina">
			<center>
			
				<?php
				for ($x = 0; $x <= 3; $x++)
				{
					echo(" <img src='" . $fotos[rand(0, 3)] . "' width='200' height='200'/>");
				}
				?>
                <br>
                <p>Wij zijn pizzaketen Sopranos! u kunt online bestellen bijons voor onze overheerlijke super vers handgemaakte pizzas. wat wil je nog meer?</p>
                <button onclick="location.href='index.php?page=pizza'">Bestellen!</button>
			</center>
     	</div>
	</body>
</html>