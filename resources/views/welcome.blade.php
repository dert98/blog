<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#div-btn1').on('click', function() {
      $("#central").load('contacto.blade.php');
      return false;
      });
  });
</script>
  <title>Welcome</title>
<body>
    @extends('plantilla')
    @section('seccion')
<br>
<div class="imgpri">
    <img src="images/presentacion.jpg" class="rounded">
</div> 
<br>
<div class="container bg-success" style="border-radius: 79px 0px 114px 46px;
-moz-border-radius: 79px 0px 114px 46px;
-webkit-border-radius: 79px 0px 114px 46px;
border: 10px solid #691269;">
  <h3 class="text-center">Que podemos hacer? <ion-icon name="call-outline"></ion-icon></h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<br>
<div class="container">
  <div class="row">
        <div class="col-md-6 bg-info">
          <h3 id="tituloxq" class="tituloPorQue">Por que nosotros?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> 
        <div class="col-md-6 bg-warning">
          <h3 class="tituloaclarando text-danger">Aclarando</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> 
  </div>
</div>
<br>
<div class="footer">
    <label class="container col-md-12 text-center">
        <h1>
        W3Schools is optimized?    
        </h1>
        Examples might be simplified to improve reading and basic understanding. <br>
        Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. <br>
        <p class="font-italic">Copyright 1999-2020 by Refsnes Data. All Rights Reserved.
        Powered by W3.CSS.</p>
    </label>
</div>
<div class="container text-center bg-success">
    <h1>elementos pasados por ruta</h1>
    @foreach ($equipo as $per)
    {{$per}}
    @endforeach
    <br>
</div>
<div>
  <div>
    <div>
      <a class="nav-link" id="div-btn1" href="#">Presentation</a>
    </div>
  </div>
</div>
@endsection
</body>
</html>