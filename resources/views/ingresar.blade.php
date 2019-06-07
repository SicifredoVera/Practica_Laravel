<!DOCTYPE html>
<html>
<head>
	<title>ingresar persona</title>
</head>
<body>
    <br>
    <br>
    <center>
    <h1>Regristro de Alumnos</h1>
    </center>

<div class="container">
<form action="{{url('/mostrar')}}" method="post" accept-charset="utf-8">

    {{csrf_field() }}

		<div class="col-sm-10">
    
	<label>Nombre</label>
<input type="text" name="nombre" value="" autocomplete="off" >
</div>

<br>
	<div class="col-sm-10">
	<label>Apellido</label>
<input type="text" name="apellido" value="" autocomplete="off" >
</div>
	<br>
		<div class="col-sm-10">
	<label>Cedula</label>
<input type="text" name="cedula" value="" autocomplete="off" >
</div>

<br>
	<div class="col-sm-10">
	<label>Promedio</label>
<input type="text" name="promedio" value="" autocomplete="off" >
</div>
<br>
<br>
<button type="submit " name="agregar">Insertar</button>
</form>
</body>
</html>