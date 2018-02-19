
<link rel="stylesheet" type="text/css" href="{{url('css/denuncia.css')}}">
<script type="text/javascript" src="{{url('js/denuncia.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-3.2.1.js')}}"></script>

<div class="container" style="padding:15%"> 
	<div id="myCarousel" class="carousel slide col-lg-16 mx-auto" data-ride="carousel" >

		<!-- Wrapper for slides -->
		@foreach( $arrayDenuncias as $denuncia )
		@if($denuncia->activa == 0)
			<div class="carousel-inner" >
				<div class="item active">
					<?php
						echo "<img src='".$denuncia->foto."' style='width:100%;'>";
					?>
					<form class="denuncias" method="POST" action="{{ url('updateDenuncia') }}">
						{{ csrf_field() }}
						<input  name="id" hidden value="{{$denuncia->id}}">
						<label>Titulo: {{ $denuncia->titulo }}</label> <br>
						<label>Hora: {{ $denuncia->created_at }}</label> <br>
						<label>Descripción: {{$denuncia->desc}}</label><br>
						<textarea name="respuesta" cols="60" rows="10"  placeholder="Responder..."></textarea> <br>
						<input type="submit" class="btn btn-default">
					</form>
					
				</div>
			</div>
		@endif
		@endforeach

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

	<div id="denunciaForm" class='collapse'>
		<form class="denuncias" method="POST" enctype="multipart/form-data" action="{{ url('createDenuncia') }}">
			{{ csrf_field() }}
			<div  class="form-group">
				<label >TÍTULO DEL INCIDENTE</label>
				<input class="form-control" type="text" placeholder="titulo" name="titulo">
			</div>
			<div class="form-group">
				<label >DESCRIPCIÓN</label>
				<textarea class="form-control" placeholder="Breve comentario de lo ocurrido" col="15" row="10" name="texto"></textarea>
			</div>
			<div class="form-group">
				<label >FECHA DEL INCIDENTE</label>
				<input type="date" class="form-control" name="fecha">
			</div>
			<div class="form-group">
				<label >ADJUNTAR IMAGEN</label>
				<input type="file" class="form-control" name="imagen">
			</div>
			<button type="submit" class="btn btn-primary">ENVIAR</button>

		</form>
	</div>

	<br>

		<div id="map" style="width:400px;height:400px;background:yellow;margin:0 auto">
			

		</div>

	</div>
<script async defer src="https://location.services.mozilla.com/v1/geolocate?key=test"></script>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_F98e_jFiFEDUFTYL9zYFMfB4NsjfrrE&callback=myMap"></script>
-->