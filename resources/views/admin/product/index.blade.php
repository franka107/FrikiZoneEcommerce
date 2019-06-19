@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				
				PRODUCTOS 
				<a href="{{ route('product.create') }}" class="btn btn-warning">
					+ Producto
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
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Extracto</th>
                            <th>Precio</th>
                            <th>Visible</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product.edit' , $product->id )}}" class="btn btn-primary">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('product.destroy' , $product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									Eliminar
                                        </button>
                                    </form>
        							
                                </td>
                                <td><img src="{{ asset('images/'.$product->image) }}" width="40"></td>
                                <td>{{ $product->name }}</td>
                                @if ($product->category)
                                    <td>{{ $product->category->name }}</td>
                                @else
                                    <td><b>------</b></td>
                                @endif
                                <td>{{ $product->extract }}</td>
                                <td>S/.{{ number_format($product->price,2) }}</td>
                                <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
           
     
            

            <br>
            
        </div>

	</div>
	
@endsection