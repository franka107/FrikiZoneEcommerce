@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                Categorias
                <small>
                    Modificar Categoria
                </small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if (count($errors)>0)
                    @include('admin.partials.errors')
                @endif
            </div>
        </div>
    </div>


    <form method="post" action="{{ route('category.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="form-group">    
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $category->name }}/>
            </div>
            <div class="form-group">    
                <label for="description">Descripion:</label>
                <textarea class="form-control"  name="description"  rows="3" value={{ $category->description }}></textarea>
            </div>
            <div class="form-group">    
                <label for="color">Color:</label>
                <input type="color" class="form-control" name="color" value={{ $category->color }}/>
            </div>

            <button type="submit" class="btn btn-primary-outline">Actualizar Categoria</button>
            <a href="{{route('category.index')}}" class="btn btn-danger"> Cancelar</a>
        </div>
        </div>

    </form>
@endsection