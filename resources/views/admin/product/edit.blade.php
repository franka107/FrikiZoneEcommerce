@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                Productos
                <small>
                    Modificar Producto
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


    <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="form-group">    
                <label for="name">Categoria:</label>
                    <select class="form-control" name="category" value={{ $product->category->name }}>
                        @foreach ($categories as $category)
                            <option>{{  $category->id}}</option>
                        @endforeach
                    </select>              
            </div>
            <div class="form-group">    
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $product->name }}/>
            </div>
            <div class="form-group">    
                    <label for="extract">Extracto:</label>
                    <input type="text" class="form-control" name="extract" value={{ $product->extract }}/>
            </div>
            <div class="form-group">    
                <label for="description">Descripcion:</label>
                <textarea class="form-control"  name="description"  rows="3" value={{ $product->description }}></textarea>
            </div>
            <div class="form-group">    
                    <label for="price">Precio:</label>
                    <input type="text" class="form-control" name="price" value={{ $product->price }}/>
            </div>

            <div class="form-group">
                    <label for="exampleFormControlFile1">Imagen:</label>
                    <input type="file" class="form-control-file" name="image" value= {{ asset('images/'.$category->image)}}>
            </div>

            <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="visible" value={{ $product->visible }}>
                    <label class="form-check-label" for="visible">Visible:</label>
            </div>

            <button type="submit" class="btn btn-primary-outline">Actualizar Categoria</button>
            <a href="{{route('product.index')}}" class="btn btn-danger"> Cancelar</a>
        </div>
        </div>

    </form>
@endsection