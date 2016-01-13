<!DOCTYPE html>
<html lang="NL">
<head>
	<meta charset="UTF-8"/>

	<title>SQOOL</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style.css">
	
	<script src="../js/jquery.min.js" type="text/javascript"></script>
	<script src="../js/marfframework.js" type="text/javascript"></script>
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		   	var stickyNavTop = $('.nav').offset().top;
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop();
			    if (scrollTop > stickyNavTop) { 
			        $('.nav').addClass('sticky');
			    } else {
			        $('.nav').removeClass('sticky'); 
			    }
			};
			stickyNav();
			$(window).scroll(function() {
				stickyNav();
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
	<div class="nav">
		<nav>
		&nbsp; <a href="blog.html"> ← </a> &nbsp; <a href="contact.html"> → </a> | <a href="../Index.html">Stoppen met oefenen </a> - <button onclick="vollescherm(document.documentElement);" >Volledigscherm</button>
		</nav>

	</div>
	<div class="content">
		<big><center> Hallo! Wat wil je doen? <br><br>
			<button> Tafels Oefenen </button> of <button> Tafels Leren </button>
			</center>
	</div>
	<div class="footer">
		<small><a href="#top";>Ga naar boven</a></small>
		<br>&copy; SQOOL 2014-2015<br>
		<small> Op deze website gebruiken wij geen cookies. </small>
	</div>
</div>

</body>
</html>