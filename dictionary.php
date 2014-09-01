<!DOCTYPE html>
    <!-- saved from url=(0050)http://getbootstrap.com/examples/navbar-fixed-top/ -->
    <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/icon/favicon.ico">
    
        <title>Angolo del fonico</title>
    
        <!-- Bootstrap core CSS -->
        <link href="css/Bootstrap/bootstrap.css" rel="stylesheet">
    
        <!-- Custom styles -->
        <link href="css/Navbar/navbar.css" rel="stylesheet">
        <link href="css/Custom/custom.css" rel="stylesheet">
        <link href="css/Instrument/instrument.css" rel="stylesheet">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
		<?php
        include ("include/Navbar/navbar.php");
        ?>
        
        <br>
        <div class="banner">
        <img src="img/banner/outboard_web.jpg" class="img-responsive">
        </div>
        
        <div class="container">
            <hr>
            <div class="col-md-8">      
                <h2>Il dizionario del fonico</h2>
                <h4>Nel dizionario del fonico troverai la spiegazione di gran parte dei termini utilizzati in campo audio, e che ti saranno particolarmente utili per comprendere i consigli dell'AngoloDelFonico</h4>
                <br>
               
                <h3>Parola 1</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
                
                <h3>Parola 2</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
            <div class="col-md-4 text-center">
            <img src="img/test/test-img.jpg" class="img-responsive">
            <br>
            <img src="img/test/test-img.jpg" class="img-responsive">
            </div>
            <hr>        
        </div> <!-- /container -->
        
        <div class="footer text-center">
        <br>
			<?php
            include ("include/Footer/footer.html");
            ?>
        </div>
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>