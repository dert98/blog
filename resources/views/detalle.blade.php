	<!DOCTYPE html>
<html>
<head>
	<title>Detalle</title>
</head>
<body>
	@extends('plantilla')
	@section('seccion')
	@endsection('seccion')
	<div class="container"></div>
		<div class="row">
			<div class="col-md-6 text-center bg-warning">
				<table class="table">
			        <thead>
			          <tr>
			            <th scope="col">Nro Id</th>
			            <th scope="col">Nombre</th>
			            <th scope="col">Apellido</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <th> {{$per->id}} </th>
			            <td> {{$per->nombre}} </td>
			            <td> {{$per->descripcion}} </td>
			          </tr>
			        </tbody>
			      </table>
			</div>
		</div>
	</div>
</body>
</html>