@extends('layouts.app')

@section('content')
   <div class="container">
      <br>
      <div>
         <h2>Nuevos libros llegan a nuestras bibliotecas <a style="color: orange" href="">Ver mas</a></h2>
      </div>
      <br>
      <div class="row justify-content-center">
      @foreach ( $products as $product)
         <div class="col-md-3 py-3">
            <div class="card">
               <div class="text-center card-body" >
                  <a href="{{ route('product-detail', $product -> slug) }}"><img src="{{ asset('images/'.$product -> image) }}"  width="189px" height="100%" class="img-fluid" /></a>
               </div>
               <div class="card-header" style="padding: 2%; height:190px;">
                  <p>{{ $product -> name }}</p>
                  <s>${{ number_format($product -> price,2) }}</s> &nbsp -25%
                  <p><strong>${{ number_format($product -> price,2) }}</strong></p>
                  <p><strong style="color: red">${{ number_format($product -> price,2) }}</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
               </div>
            </div>
         </div>

      @endforeach
      </div>
   </div>
@endsection
