

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto Chat</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/breadcrumbs.css') }}" rel="stylesheet">
    <link href="{{ url('css/banner.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ url('css/grayscale.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top" style="overflow-x:hidden;" onload="dropInPubli()" >
    <div id="caja-flotante" class="collapse">
    
    </div>
     <!-- BANNER 
    <div id="banner" class="collapse ">
        <span><a href="https://www.google.com" target="_blank" onclick="dropOutPubli()">[x]</a></span>
        <img src="https://s-media-cache-ak0.pinimg.com/originals/22/9a/60/229a60a18da1a3d96549f598703a0a71.jpg">
    </div>
    -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" style="background-color: black; opacity: 0.85; padding: 5px 50px;border-radius: 15px">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img height="50" src="{{ url('img/logo-nav.jpg') }}" style=" margin-left: 15px; border-radius: 10px; margin-right: 20px;">Ayuntamiento de Cornella</a>
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
              <a class="nav-link js-scroll-trigger" href="#chat">Chat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <li>
               <a class="nav-link js-scroll-trigger" href="{{url('/logout')}}">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   
    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container" style="margin-top: -500px;padding-right: 1890px; height: 123.25%; position: absolute; z-index: 5; background-color: black; opacity: 0.3;"></div>
        <div class="container" style="position: relative; z-index: 10;">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">PROYECTO CHAT ADMIN</h1>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- About Section -->
    <section id="about" class="content-section text-center" style="height: 600px;">
      <div class="container" style="margin-top: -12%">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!--AQUÍ VA EL FORO-->
            @include('foro')
          </div>
        </div>
      </div>
    </section>


    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <!--AQUÍ VA DEBATES-->
          @include('denunciaAdmin')
        </div>
      </div>
    </section>


    <!-- AQUÍ VA EL CHAT-->
    <section id="chat" class="content-section text-center">
        <div class="container">
            <div class="col-lg-8 mx-auto">
             @include('chat')
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contacta con nosotros y te daremos soporte!</h2>
            <form>
                <label><h7>Email: </h7></label><br>
                <input type="email" placeholder="example@email.com"><br>
                <label><h7>Asunto: </h7></label><br>
                <input type="text" maxlength="50"><br>
                <label><h7>Breve explicación: </h7></label><br>
                <textarea maxlength="250"></textarea><br><br><br>

            </form>
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
    <footer id="footer">
      <div class="container text-center">
        Copyright &copy; projectoChat 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->

    <script  src="{{ url('jquery/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="{{ url('js/grayscale.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/breadcrumbs.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/banner.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>

  </body>

</html>
