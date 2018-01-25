<html>
<head>
	<link href="css/forocss.css" type="text/css" rel="stylesheet">

	<!-- Javascript del Foro -->
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/foroJS.js" type="text/javascript"></script></head>
	<body>
		<h1>Foro</h1>
		<img src="img/ForoIcono.png"/>
		<br></br>
		<div class="form-group">
			<button class="btn btn-default" id="FORopciones" name="FORtest">Opiniones</button>
			<button class="btn btn-default" id="FORpreguntas" name="FORtest">Preguntas</button>
			<button class="btn btn-default" id="Formejoras" name="FORtest">Mejoras</button>
			<button class="btn btn-default" id="FORgeneral" name="FORtest">General</button>
		</div>
		<table class="table table-hover collapse FORtable" id="FORopcionesTab">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Usuario</th>
				</tr>
			</thead>
			<tbody>
				<td>Opciones</td>
			</tbody>
		</table>
		<table class="table table-hover collapse FORtable" id="FORpreguntasTab">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Usuario</th>
				</tr>
			</thead>
			<tbody>
				<td>Preguntas</td>
			</tbody>
		</table> 
		<table class="table table-hover collapse FORtable" id="FORmejorasTab">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Usuario</th>
				</tr>
			</thead>
			<tbody>
				<td>Mejoras</td>
			</tbody>
		</table>
		<table class="table table-hover collapse FORtable" id="FORgeneralTab">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Usuario</th>
				</tr>
			</thead>
			<tbody>
				<td>General</td>
			</tbody>
		</table>

	</body>
</html>