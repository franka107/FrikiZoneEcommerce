@extends('layouts.app')

@section('content')
<br>	
<div class="container">
	<form  method="POST" action="{{action('UserController@update')}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="row">
		<div class="col-md-3 text-center">
			<div class="round text-center card shadow-lg">
				<div class=" text-center card-body">
					@if ( Auth::user()->image )
						<img src="{{ asset('images/'. Auth::user()->image) }}" class="img-fluid" />

					@else
						<img src="{{ asset('images/perfil.png') }}" class="img-fluid" />
	
					@endif
			  	</div>
			</div>
			<br>
				<label for="image">Imagen:</label>
                <input type="file" class="btn btn-primary form-control-file" name="image">

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
			<div class="row">
				<div class="col">
				<form action="{{ action('UserController@destroy', Auth::user()->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-block" type="submit">Eliminar mi Usuario</button>
            	</form>
           		</div>
				<div class="col">
					<a class="btn btn-outline-dark btn-block" href="{{ action('UserController@editPwd') }}">{{__('Cambiar contraseña')}}</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection
