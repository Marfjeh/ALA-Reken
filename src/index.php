<!-- Dummy html for MarfFramework -->
<!DOCTYPE HTML>
<html>
    <head>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/alertify.js"></script>
        <script src="js/mff.js"></script>
        <script src="js/marfframework-legacy.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/alertify.css" id="alertifyCSS">
    </head>
    <body>
    <div id="mj"></div>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MarfFrameWork BootStrap</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#top">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <p id="top"></p>
        <script>
            if (mjactive == 1)
            {
                addtoelementln("mj", "<h1><br><br>Yay! MarfFrameWork is loaded! MarfFrameWork Version: " + mjversie + " CodeName: " + mjcodename + "</h1>");
                addtoelementln("mj", "<h2>" + About() + "</h2>");
                alertify.log("yay!");
            }
        </script>
    </div>
    </body>
</html>