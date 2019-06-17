@extends('layouts.app')

@section('content')
<br>	
<div class="container">
	<div class="row justify-content-center">
		<div  class="col-7">
			<div class="border-bottom">
				<h3>Cambiar contraseña</h3>
			</div>
			<br>
			<div class="row justify-content-center">
			    <div class="col">
			    	<label for="inputEmail4">Nombre</label>
			      	<input type="text" class="form-control" placeholder="First name">
			    </div>
			</div>
			<br>
			
			<div class="row">
				<div class="col">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
			</div>
			<br>

			<div>
				<button class="btn btn-success btn-block">Guardar Cambios</button>
			</div>
		</div>
	</div>
</div>

@endsection
