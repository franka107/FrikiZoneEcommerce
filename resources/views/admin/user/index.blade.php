@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS
                <a href="{{ route('user.create') }}" class="btn btn-warning">
                   + Usuario
                </a>
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Activo</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                        <form action="{{route('user.destroy' , $user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                                    Eliminar
                                                </button>
                                            </form>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                                @if ( $user->image )
                                    <td><img src="{{ asset('storage/images/users/'. $user->id . '/' .$user->image) }}" alt="" width="40px"></td>
                                @else
                                    <td><img src="{{ asset('storage/images/icon/perfil.png') }}" alt="" width="40px"></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
         
            
        </div>
    </div>
@endsection