<div class="row" style="border: 2px solid green; background-color: rgba(255,255,255,0.8)">


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 1)

					<div class="card">
					  <img class="d-block w-25 p-2" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
					  <div class="card-body">
					    <h5 class="card-title">{{ $noticia->titulo }}</h5>
					    <p class="card-text">{{ $noticia->desc }}</p>
					    <a>{{$noticia->categoria}} </a>
					  </div>
					</div>
					@endif
				@endforeach

</div>

<div class="row" style="border: 2px solid blue; background-color: rgba(255,255,255,0.8)">
			


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 0)

					<div class="card" style="width: 18rem;">
					  <img class="d-block w-25 p-2" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
					  <div class="card-body">
					    <h5 class="card-title">{{ $noticia->titulo }}</h5>
					    <p class="card-text">{{ $noticia->desc }}</p>
					    <a>{{$noticia->categoria}} </a>
					  </div>
					</div>
					@endif
				@endforeach

</div>