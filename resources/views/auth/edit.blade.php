@extends('layouts.app')

@section('content')
<br>	
<div class="container">
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
			    	<label for="inputEmail4">Nombre</label>
			      	<input type="text" class="form-control" placeholder="First name">
			    </div>
			    <div class="col">
			    	<label for="inputEmail4">Apellidos</label>
			      	<input type="text" class="form-control" placeholder="Last name">
			    </div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-6">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
			</div>
			<br>
			<div>
				<button class="btn btn-success btn-block">Guardar Cambios</button>
			</div>
			<br>
			<label for="inputEmail4">Contraseña actual</label>

			<div class="row">
				<div class="col">
					<input class="form-control" type="text" placeholder="**********" readonly>
				</div>
				<div class="col">
					<button class="btn btn-outline-dark btn-block">Cambiar contraseña</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
