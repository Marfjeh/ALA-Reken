<?php
echo("yay ik werk niet! plottwist!");
//phpinfo();
$titel = "nope.";
$yay = "yaaaay";
$yay2 = false;
$yay3 = 5;
$yay4 = 7.4;
$array = ["nee", "ja"];
$array2 = ["a", "b", "c", "e", "f"];

?>

<!doctype HTML>
<HTML>
	<head>
	<title><?php $titel ?></title>
	</head>

	<body>
	<?php
	// Deze comments zijn niet te zien in de webpagina hahahaha!
	// jammer he?

	/*
	Meerende lines!
	1 2 3 4
	eifjewofijweofij
	*/

	?>
		<h1><?php echo("Appeltje eitje"); ?></h1>
		<p><?php print("Loren ipsum"); ?></p>
		<h3>Scalar data</h3>
		<ul> 
			<?php
			for ($x = 0; $x <= 2; $x++)
			{
			echo("<li>" . $array[$x] . "</li>");
			}
			?>
		</ul>
		<h3>Composite data</h3>
		<?php print_r($array2); ?>
	</body>
</HTML>
