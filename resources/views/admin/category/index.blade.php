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
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <a href="{{ route('category.edit', $category->id)}}" class="btn btn-primary">
                                    Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        
                    </tr> 
                    @endforeach
                
                </tbody>
            </table>
            

            <br>
            <br>
        </div>
    </div>
   


@endsection