
<select onchange="category()" name="category" id="category" >

	@foreach( $arrayCategorias as $categoria )
		<option selected hidden>Seleccione una Categoria</option>
		<option value=" {{$categoria->categoria}}" > {{$categoria->categoria}} </option>	

	@endforeach

</select>

<h3>NOTICIAS MÁS IMPORTANTES</h3>
<div class="row1" style="margin: auto; width: 60% ; background-color: rgba(255,255,255,0.8)">


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 1)

					<div class="card" style="width: 18rem; float:left; margin: 5px ; height: 300px">
					  <img class="d-block "  style="width: 80%; padding-left: 20%;"  src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
					  <div class="card-body">
					    <h5 class="card-title">{{ $noticia->titulo }}</h5>
					    <p class="card-text">{{ $noticia->desc }}</p>
					    
					  </div>
					</div>
					@endif
				@endforeach

</div>


<h3 style="clear: both">NOTICIAS RECIENTES</h3>
<div class="row2" style="margin: auto; width: 60% ;   background-color: rgba(255,255,255,0.8)">
				


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 0)

					<div class="card" style="width: 18rem; float:left; margin: 5px ; height: 300px">
					  <img class="d-block " style="width: 80%; padding-left: 20%;" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
					  <div class="card-body">
					    <h5 class="card-title">{{ $noticia->titulo }}</h5>
					    <p class="card-text">{{ $noticia->desc }}</p>
					   
					  </div>
					</div>
					@endif
				@endforeach

</div>