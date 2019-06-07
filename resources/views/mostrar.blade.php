<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Persona</title>
</head>
<body>
<br>
<br>

<form action="{{url('/ingresar')}}" method="get" accept-charset="utf-8">
    {{csrf_field() }}
<center>
    <div>
        <button type="submit" name="Agregar">Regresar</button>
    </div>
</center>
    </form>

    

<center><h1>REGISTRO DE ALUMNOS</h1></center>
<table border="2">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Promedio</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$array[0]}}</td>
      <td>{{$array[1]}}</td>
      <td>{{$array[2]}}</td>
      @if($array[3]>=1 and $array[3]<4)
      <td>{{$array[3]}}</td>
      <td style="background-color: red">Regular</td>
      @endif

      @if($array[3]>=4 and $array[3]<6)
      <td>{{$array[3]}}</td>
      <td style="background-color: #E6C115">Bueno</td>
       @endif

        @if($array[3]>=6 and $array[3]<8)
      <td>{{$array[3]}}</td>
      <td style="background-color: #310AF9">Muy Bueno</td>
       @endif

      @if($array[3]>=8 and $array[3]<=10)
      <td>{{$array[3]}}</td>
      <td style="background-color: green">Excelente</td>
       @endif
    </tr>
   
  </tbody>
</table>

</body>
</html>