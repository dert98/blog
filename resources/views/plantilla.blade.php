<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<head>
  <title></title>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand animated infinite tada delay-2s" href="{{ route ('welcome') }}">Dogma Dert</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="{{ route ('welcome') }}">Home</a></li>
      <li><a href="datos">Datos</a></li>
      <li><a href="{{ route ('nosotros') }}">Nosotros</a></li>
      <li><a href="{{ route ('contacto') }}">Contacto</a></li>
      @if (Route::has('login'))
        @auth
            <li>
              <a href="{{ url('/home') }}">Home</a>
            </li>
        @else
          <li>
            <a href="{{ route('login') }}">Login</a>
          </li>
        @endauth
      @endif
      <li><a href="{{ route ('login2') }}">Login2</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  @yield('seccion')
</div>
</body>
</html>