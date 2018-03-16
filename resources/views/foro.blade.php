
<link href="{{url('css/forocss.css')}}" type="text/css" rel="stylesheet">

<!-- Javascript del Foro -->
<script type="text/javascript" src="{{ url('js/jquery-3.2.1.js')}}"></script>
<script src="{{ url('js/foroJS.js')}}" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

<img src="{{url('img/ForoIcono.png')}}"/>
<br></br>
<div class="form-group" id="divBotones">
	<button class="btn btn-default" id="FORopiniones" onclick="getForo('opiniones')" name="FORtest">Opiniones</button>
	<button class="btn btn-default" id="FORpreguntas" onclick="getForo('preguntas')" name="FORtest">Preguntas</button>
	<button class="btn btn-default" id="Formejoras" onclick="getForo('mejoras')" name="FORtest">Mejoras</button>
	<br></br>
	<button class="btn btn-info col-md-7" id="crearForo">Crear</button>
	<br></br>
	<div class="input-group  center-block" style="width: 60%; margin: 0 auto;">
  		<span class="input-group-addon">Buscar</span>
  		<input id="filtrar" type="text" class="form-control" placeholder="">
	</div>
</div>
<!-- Tabla de Opciones -->
<table class="table table-hover collapse FORtable" id="FORopinionesTab">
	<thead>
		<tr>
			<th class="col-xs-4">Titulo</th>
			<th class="col-xs-4">Contenido</th>
			<th class="col-xs-4">Fecha</th>
		</tr>
	</thead>
	<tbody class="buscar">
	</tbody>
</table>
<!-- Tabla de Preguntas -->
<table class="table table-hover collapse FORtable" id="FORpreguntasTab">
	<thead>
		<tr>
			<th class="col-xs-4">Titulo</th>
			<th class="col-xs-4">Contenido</th>
			<th class="col-xs-4">Fecha</th>
		</tr>
	</thead>
	<tbody class="buscar">
	</tbody>
</table>
<!-- Tabla de Mejoras -->
<table class="table table-hover collapse FORtable" id="FORmejorasTab">
	<thead>
		<tr>
			<th class="col-xs-4">Titulo</th>
			<th class="col-xs-4">Contenido</th>
			<th class="col-xs-4">Fecha</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
