@extends('admin.template')

@section('content')
    
    <div class="container text-center">
        <div class="page-header">
            <h1>
                Categorias
                <a href="{{ route('category.create') }}  " class="btn btn-warning">  + Categoría</a>
            </h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>
                            <a href="#" class="btn btn-primary">
                                    Editar
                            </a>
                        </th>
                        <th>
                            <a href="#" class="btn btn-danger">
                                Eliminar
                            </a>
                        </th>
                        <th>{{ $category->name }}</th>
                        <th>{{ $category->description }}</th>
                        <th>{{ $category->color }}</th>
                    </tr> 
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
   


@endsection