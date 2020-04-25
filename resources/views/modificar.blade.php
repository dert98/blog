	<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	@extends('plantilla')
	@section('seccion')
	<div class=""></div>
	<div>
		<div class="row text-center">
			<div class="col-md-6 bg-warning">
				<table class="table text-center">
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
	<br>
	<div>
		@if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('update', $per->id) }}" method="POST">
    {{ csrf_field() }}
  	{{ method_field('PUT') }}

  	@foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
	@endforeach
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $per->nombre }}">
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
    value="{{ $per->descripcion }}">
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>
	</div>
	@endsection('seccion')
</body>
</html>