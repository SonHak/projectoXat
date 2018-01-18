<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto Chat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top" style="overflow-x:hidden;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" style="background-color: black; opacity: 0.85; padding: 5px 50px;border-radius: 15px">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img height="50" src="img/logo-nav.jpg" style=" margin-left: 15px; border-radius: 10px; margin-right: 20px;">Ayuntamiento de Cornella</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Foro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Denuncias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Chat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container" style="margin-top: -500px;padding-right: 1890px; height: 150%; position: absolute; z-index: 5; background-color: black; opacity: 0.3;"></div>
        <div class="container" style="position: relative; z-index: 10;">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">PROYECTO CHAT</h1>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!--AQUÍ VA EL FORO-->
            <?php
            include('foro.php');
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <!--AQUÍ VA DEBATES-->
          <?php
            include('denuncia.php');
          ?>
        </div>
      </div>
    </section>


    <!-- AQUÍ VA EL CHAT-->
    <!-- Map Section -->
    <div id="chat">
      <?php 
        include('chat.php');
      ?>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to leave us a comment on the
              <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale template overview page</a>
              on Start Bootstrap to give some feedback about this theme!</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>





<!--
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos/principal.css"></link>
	</head>
	<body>
		<div id='contenedor'>
			<header><img id='logo' src='imagenes/logo.jpg'/> </header>
			<nav id="menu">
				<ul>
					<li>pri</li>
					<li>seg</li>
					<li>ter</li>
				</ul>
			</nav>
			<footer><img id='logotipo' src='imagenes/logotipo.jpg'> </footer>
		</div>
	</body>
</html>
-->