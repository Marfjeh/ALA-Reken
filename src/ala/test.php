<?php 
if (isset($_GET["page"]))
{
	//$page=$_GET["page"];
	$pagina = $_GET["page"] . ".php";

	include($pagina);
}
?>