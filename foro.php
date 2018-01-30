<link href="css/forocss.css" type="text/css" rel="stylesheet">

<!-- Javascript del Foro -->
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script src="js/foroJS.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

<img src="img/ForoIcono.png"/>
<br></br>
<div class="form-group">
	<button class="btn btn-default" id="FORopiniones" name="FORtest">Opiniones</button>
	<button class="btn btn-default" id="FORpreguntas" name="FORtest">Preguntas</button>
	<button class="btn btn-default" id="Formejoras" name="FORtest">Mejoras</button>
	<button class="btn btn-default" id="FORgeneral" name="FORtest">General</button>
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
			<th class="col-xs-2">Titulo</th>
			<th class="col-xs-2">Fecha</th>
			<th class="col-xs-2">Usuario</th>
			<th class="col-xs-2">Comentarios</th>
			<th class="col-xs-2"></th>
		</tr>
	</thead>
	<tbody class="buscar">
		<tr>
			<td>Gran ciudad</td>
			<td>12-01-2018</td>
			<td>Antonio</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Muy limpia</td>
			<td>23-31-2017</td>
			<td>Paco</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Tiene de todo</td>
			<td>11-11-2017</td>
			<td>Maria</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Tiene de todo</td>
			<td>11-11-2017</td>
			<td>Maria</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn btn-success" id="crearOpinion">Crear</button></td>
		</tr>
	</tbody>
</table>
<!-- Tabla de Preguntas -->
<table class="table table-hover collapse FORtable" id="FORpreguntasTab">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Fecha</th>
			<th>Usuario</th>
			<th>Comentarios</th>
			<th></th>
		</tr>
	</thead>
	<tbody class="buscar">
		<tr>
			<td>Pregunta 1</td>
			<td>12-01-2018</td>
			<td>Antonio</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Pregunta 2</td>
			<td>23-31-2017</td>
			<td>Paco</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Pregunta 3</td>
			<td>11-11-2017</td>
			<td>Maria</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn btn-success" id="crearPregunta">Crear</button></td>
		</tr>
	</tbody>
</table>
<!-- Tabla de Mejoras -->
<table class="table table-hover collapse FORtable" id="FORmejorasTab">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Fecha</th>
			<th>Usuario</th>
			<th>Comentarios</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Mejora 1</td>
			<td>12-01-2018</td>
			<td>Antonio</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Mejora 2</td>
			<td>23-31-2017</td>
			<td>Paco</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>Mejora 3</td>
			<td>11-11-2017</td>
			<td>Maria</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn btn-success" id="crearMejora">Crear</button></td>
		</tr>
	</tbody>
</table>
<!-- Tabla de General -->
<table class="table table-hover collapse FORtable" id="FORgeneralTab">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Fecha</th>
			<th>Usuario</th>
			<th>Comentarios</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>General 1</td>
			<td>12-01-2018</td>
			<td>Antonio</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>General 2</td>
			<td>23-31-2017</td>
			<td>Paco</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td>General 3</td>
			<td>11-11-2017</td>
			<td>Maria</td>
			<td>2</td>
			<td><i class="fa fa-comments" title="Ver Comentarios"></i></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn btn-success" id="crearGeneral">Crear</button></td>
		</tr>
	</tbody>
</table>
