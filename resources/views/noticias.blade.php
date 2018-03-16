
<select onchange="category()" name="category" id="category" >

	@foreach( $arrayCategorias as $categoria )
		<option selected hidden>Seleccione una Categoria</option>
		<option value=" {{$categoria->categoria}}" > {{$categoria->categoria}} </option>	

	@endforeach

</select>

<h3>NOTICIAS MÁS IMPORTANTES</h3>

<div class="row1" style="margin-left: -500px;">


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 1)
						<div class="line">
							<div class="card noticias" style="float:left; width: 10rem;  margin: 5px ; height: 200px">
							  <img class="d-block "  style="width: 80%; padding-left: 20%;"  src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
							  <div>
							    <h5 >{{ $noticia->titulo }}</h5>
							    <p style="margin-top: -30px">{{ $noticia->desc }}</p>
							    
							  </div>
							</div>
						</div>
					@endif
				@endforeach

</div>


<h3 style="clear:both">NOTICIAS RECIENTES</h3>
<div class="row2" style="margin-left: -500px;">
				


				@foreach( $arrayNoticias as $noticia )
					@if($noticia->importante == 0)
					<div class="line">
						<div class="card noticias" style="float:left; width: 10rem; margin: 5px ; height: 200px">
						  <img  style="width: 80%; padding-left: 20px;" src="{{ $noticia->imagen }}" alt="Generic placeholder image" >
						  <div >
						    <h5 >{{ $noticia->titulo }}</h5>
						    <p style="margin-top: -30px">{{ $noticia->desc }}</p>
						   
						  </div>
						</div>
					</div>
					@endif
				@endforeach

</div>