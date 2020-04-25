<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	@extends('plantilla')
	@section('seccion')
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-success">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="col-md-4 bg-warning">
				<form class="">
		        <h3 class="text-center">Registrarse</h3>
		        <div class="form-group">
		            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Nombre de Usuario" required value="{{ old('username') }}">
		        </div>
		        <div class="form-group">
		            <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Password" required value="{{ old('password') }}">
		        </div>
		        <div class="form-group">
		            <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
		        </div>
		        <div class="form-group">
		            <button class="btn btn-primary btn-block create-account" type="submit">Registrarse</button>
		        </div>
		    </form>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="col-md-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
	<div class="footer bg-success">
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
	@endsection
</body>
</html>