@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                Usuarios               
            </h1>
            <small>
                Agregar Usuario
            </small>
        </div>
    </div>
    
    <br>

    <div class="row">
        <div class="col-md-3"></div>
        <div class=" col-md-6">
            <div class="page">
                @if (count($errors)>0)
                    @include('admin.partials.errors')
                @endif
            </div>
        </div>
    </div>


    <form method="post" action="{{ route('user.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="form-group">    
                <label for="name">Nombres:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">    
                <label for="lastname">Apellidos:</label>
                <input type="text" class="form-control" name="lastname"/>
            </div>
            <div class="form-group">    
                <label for="email">Correo:</label>
                <input type="text" class="form-control" name="email"/>
            </div>

            <label for="image">Imagen:</label>
            <input type="file" class="btn btn-primary form-control-file" name="image">

     
            <div class="form-group">    
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password"/>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="admin"  value="admin">
                <label class="form-check-label" for="admin">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="user" value="user">
                <label class="form-check-label" for="user">Usuario</label>
            </div>
            
            <div class="form-group">    
                <label for="address">Dirección:</label>
                <textarea class="form-control"  name="address"  rows="2"></textarea>
            </div>
            <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="active">
                    <label class="form-check-label" for="active">Activo:</label>
                </div>
            
            
        

            <button type="submit" class="btn btn-primary-outline">Añadir Usuario</button>
            <a href="{{route('user.index')}}" class="btn btn-danger"> Cancelar</a>
        </div>
        </div>

    </form>
    <br>
    <br>
@endsection