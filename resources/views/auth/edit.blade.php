@extends('layouts.app')

@section('content')
<br>	
<div class="container">
	<form  method="POST" action="{{action('UserController@update')}}">
	@csrf
	@method('PATCH')
	<div class="row">
		<div class="col-md-3 text-center">
			<div class="round text-center card shadow-lg">
				<div class=" text-center card-body">
			  		<img src="{{ asset('images/perfil.png') }}" class="img-fluid" />
			  	</div>
			</div>
			<br>
			<button class="btn btn-primary">Cambiar foto de Perfil</button>
		</div>
		<div class="col-md-7 border-left">
			<div class="border-bottom">
				<h3>MIS DATOS PERSONALES</h3>
			</div>
			<br>
			<div class="row">
			    <div class="col">
			    	<label for="name">Nombre</label>
			      	<input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>
			    </div>
			    <div class="col">
			    	<label for="lastname">Apellidos</label>
			      	<input type="text" class="form-control" id="lastname" name="lastname" value="{{Auth::user()->lastname}}" required autocomplete="lastname">
			    </div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" required autocomplete="email" >
				</div>
			</div>
			<br>
			<div>
				<button class="btn btn-success btn-block" type="submit">Guardar Cambios</button>
			</div>
	</form>
			<br>
			<label for="inputEmail4">Contraseña actual</label>
			<div class="row">
				<div class="col">
					<input class="form-control" type="text" placeholder="**********" readonly>
				</div>
				<div class="col">
					<a class="btn btn-outline-dark btn-block" href="{{ action('UserController@editPwd') }}">Cambiar contraseña</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection
