@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				
				PRODUCTOS 
				<a href="{ route('product.create') }}" class="btn btn-warning">
					Producto
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
                                    <a href="{ route('product.edit', $product->slug) }}" class="btn btn-primary">
                                        Editar Producto
                                    </a>
                                </td>
                                <td>
                                    <form action="#">
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									Eliminar
                                        </button>
                                    </form>
        							
                                </td>
                                <td><img src="{{ $product->image }}" width="40"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->extract }}</td>
                                <td>${{ number_format($product->price,2) }}</td>
                                <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
            <?php echo $products->render(); ?>
            
        </div>

	</div>
	
@endsection