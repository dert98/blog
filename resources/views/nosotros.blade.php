<!DOCTYPE html>
<html>
<head>
	<title>nosotros</title>
</head>
<body>
@extends('plantilla')
@section('seccion')
<div class="db">
  <div class="container my-3 bg-warning">
      <h1 class="display-3 text-center">Usuarios</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nro Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Ver</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notas as $per)
          <tr>
            <th> {{$per->id}} </th>
            <td> {{$per->nombre}} </td>
            <td> {{$per->descripcion}} </td>
            <td> 
              <a href="{{route('detalle',$per->id)}}">ver</a>
            </td>
            <td> 
              <a class="btn btn-warning" href="{{route('modificar',$per)}}">Editar</a>
            </td>
            <td>
              <form action="{{ route('eliminar', $per) }}" class="d-inline" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form> 
            </td>
            @endforeach()
          </tr>
        </tbody>
      </table>
      {{ $notas->links()}}
  </div>
</div>
@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif
        
@foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                  {{$error}}
                </div>
@endforeach

<br>

<div id="dagregar" class="bg-success col-md-4 text-center ">
  <div class="text-center border bg-light">
    Agregar persona
  </div>
  <form method="POST" action="{{ route('nosotros.agregar') }}">
  {{ csrf_field() }}
  <input
    type="text"
    name="nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value="{{ old('nombre') }}"
  />
  <input
    type="text"
    name="descripcion"
    placeholder="Descripcion"
    class="form-control mb-2"
    value="{{ old('descripcion') }}"
  />
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
</div>
</body>
</html>