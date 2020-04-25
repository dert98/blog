<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
</head>
<body>
	@extends('plantilla')
	@section('seccion')
	<div id="app">
		<template>
		  <a><a/>
		</template>
	</div>
	<div class="titulo text-center">
		Comunicate con nosotros
	</div>
	<div class="anuncios">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="col-lg-4 bg-warning">	
		              <h2>Asistente Virtual</h2>
		              <p>Chateá con nuestro Asistente Virtual y resolvé online tus consultas.</p>
		              <a href="javascript:void(0);" class="agent-launcher btn-text-link --cyan">Iniciar Chat</a>
					</div>
					<div class="col-lg-4 bg-primary">		
		              <div class="text">
		                <h2>Teléfono</h2>
		                <p>Estamos para ayudarte todos los días, las 24hs.</p>
		              </div>
		              <div class="box contacto">
		                <h3>Desde tu Personal</h3>
		                <ul class="listado">
		                  <li><p>Atención al cliente *111</p></li>
		                  <li><p>Club *2582</p></li>
		                  <li><p>Recarga *151</p></li>
		                  <li><p>Consulta de Saldo *150</p></li>
		                  <li><p>Activación de Packs *152</p></li>
		                </ul>
		              </div>
		            </div>
					<div class="col-lg-4 bg-warning">	
		              <h2>Sucursales</h2>
		              <p>Buscá la sucursal más cercana a tu domicilio.</p>
		              <a href="javascript:void(0);" class="agent-launcher btn-text-link --cyan">Ver sucursales</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>