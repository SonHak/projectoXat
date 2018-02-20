<div class="row" style="border: 2px solid green; background-color: rgba(255,255,255,0.8)">
			
	<div id="carouselExampleSlidesOnly" class=" col-sm carousel slide " data-ride="carousel">
		<div class="carousel-inner">

				@foreach( $arrayNoticias as $noticia )
				@if($noticia->importante == 1)	
					@if($noticia == $arrayNoticias[0])
				    <div class="carousel-item active" style="background-color: white">
						<img class="d-block w-50" src="{{ $noticia->imagen }}" alt="Generic placeholder image">
						<div class="carousel-caption d-none d-md-block" style="background-color: white;color: black;">
							<h5 >{{ $noticia->titulo }}</h5>
							<p >{{ $noticia->desc }}</p>
							<span>{{$noticia->importante}}</span>
						</div>
					</div>
					@else
					<div class="carousel-item" style="background-color: white">
						<img class="d-block w-50" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
						<div class="carousel-caption d-none d-md-block" style="background-color: white;color: black;">
							<h5 >{{ $noticia->titulo }}</h5>
							<p >{{ $noticia->desc }}</p>
							<span>{{$noticia->importante}}</span>
						</div>
					</div>
					@endif
				@endif
				@endforeach
	  	</div>
	</div>
</div>

<div class="row" style="border: 2px solid blue; background-color: rgba(255,255,255,0.8)">
			
	<div id="carouselExampleSlidesOnly" class=" colsm carousel slide " data-ride="carousel">
		<div class="carousel-inner">

				@foreach( $arrayNoticias as $noticia )
				
				@if($noticia->importante == 0)	
					@if($noticia)
				    <div class="carousel-item " style="background-color: white">
						<img class="d-block w-50" src="{{ $noticia->imagen }}" alt="Generic placeholder image">
						<div class="carousel-caption d-none d-md-block" style="background-color: white;color: black;">
							<h5 >{{ $noticia->titulo }}</h5>
							<p >{{ $noticia->desc }}</p>
							<span>{{$noticia->importante}}</span>
						</div>
					</div>
					@else
					<div class="carousel-item " style="background-color: white">
						<img class="d-block w-50" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
						<div class="carousel-caption d-none d-md-block" style="background-color: white;color: black;">
							<h5 >{{ $noticia->titulo }}</h5>
							<p >{{ $noticia->desc }}</p>
							<span>{{$noticia->importante}}</span>
						</div>
					</div>
					@endif
				@endif
				@endforeach
	  	</div>
	</div>
</div>