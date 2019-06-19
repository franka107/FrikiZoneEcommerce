@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                Categorias
                
            </h1>
            <small>
                    Agregar Categoria
                </small>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page">
                @if (count($errors)>0)
                    @include('admin.partials.errors')
                @endif
            </div>
        </div>
    </div>


    <form method="post" action="{{ route('category.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="form-group">    
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">    
                <label for="description">Descripción</label>
                <textarea class="form-control"  name="description"  rows="3"></textarea>
            </div>
        

            <button type="submit" class="btn btn-primary-outline">Añadir Categoria</button>
            <a href="{{route('category.index')}}" class="btn btn-danger"> Cancelar</a>
        </div>
        </div>

    </form>
@endsection