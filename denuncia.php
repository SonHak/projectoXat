<!--
<link rel="stylesheet" type="text/css" href="css/denuncia.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/denuncia.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

-->
	<link rel="stylesheet" type="text/css" href="css/denuncia.css">
	<script type="text/javascript" src="js/denuncia.js"></script>
	<button type="button" class="btn btn-success btn-lg"> 	Nueva Denuncia
	</button>
	<div class="container"> 
		<div id="myCarousel" class="carousel slide col-lg-16 mx-auto" data-ride="carousel">
		    <!-- Indicators 
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		    </ol>
			-->
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
			    <div class="item active">
			        <img src="img/mueble1.jpg" alt="mueble1" style="width:100%;">
					<form class="denuncias">
						<label>Hora</label>
						<input type="text" readonly value="18:34 AM"/>
					</form>
			    </div>
			    
			    <div class="item">
			    	<img src="img/mueble2.jpg" alt="mueble2" style="width:100%;">
			    	<form class="denuncias">
						<label>Hora</label>
						<input type="text" readonly value="22:54 PM"/>
					</form>
			    </div>
		    </div>

		    <div id="map" style="width:400px;height:400px;background:yellow;margin:0 auto">
		    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_F98e_jFiFEDUFTYL9zYFMfB4NsjfrrE&callback=myMap"></script>

			</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <i class="fa fa-mail-reply" style="font-size:24px;margin-top: 200%"></i>
		      <span class="sr-only">Previous</span>
		    </a>

		    <a class="right carousel-control" href="#myCarousel" data-slide="next" >
		      <i class="fa fa-mail-forward" style="font-size:24px;margin-top: 200%"></i>
		      <span class="sr-only">Next</span>
		    </a>

		</div>
	</div>


