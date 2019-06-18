@extends('layouts.app')

@section('content')
<br>	
<div class="container">
	<form method="POST" action="{{ action('UserController@updatePwd') }}">
		@csrf
			<div class="row justify-content-center">
				<div  class="col-7">
					
						<div class="border-bottom">
							<h3>Cambiar contraseña</h3>
						</div>
						<br>
						<div class=" form-group row justify-content-center">
						    <div class="col">
						    	<label for="inputEmail4">Nueva Contraseña</label>
						      	<input type="password" class="form-control" name="password"  required autocomplete="new-password" autofocus>
						    </div>
						</div>
						<br>
						
						<div class="form-group row">
							<div class="col">
								<label for="inputEmail4">Verifique su contraseña</label>
								<input type="password" class="form-control" name="Confirmar_password" required autocomplete="new-password">
							</div>
						</div>
						<br>
						<div>
							<button type="submit" class="btn btn-success btn-block" >
							{{__('Guardar Cambios')}}
							</button>	
                        </div>					
				</div>
			</div>
	</form>
</div>

@endsection