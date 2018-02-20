@extends('layouts.welcome')

@section('content')



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


	<div class="carousel-inner">
		@foreach( $arrayNoticias as $noticia )
			<!--
			@if($noticia->importante != NULL)	
			<div class="carousel-item active">
				
				<div class="media border border-secondary border-top-0" style="padding: 3%">
				  <img class="align-self-start mr-3" src="{{ $noticia->imagen }}" alt="Generic placeholder image">
				  <div class="media-body">
				    <h5 class="mt-0">{{ $noticia->titulo }}</h5>
				    <p>{{ $noticia->desc }}</p>
				   
				  </div>
				</div>
			
			</div>
			@else
			-->
			<div class="carousel-item">
				
				<div class="media border border-secondary border-top-0"  style="padding: 3%">
				  <img class="align-self-start mr-3" src="{{ $noticia->imagen }}" alt="Generic placeholder image">
				  <div class="media-body">
				    <h5 class="mt-0">{{ $noticia->titulo }}</h5>
				    <p>{{ $noticia->desc }}</p>
				   
				  </div>
				</div>
			
			</div>
			
		@endforeach
	</div>

	
</div>           


@stop
