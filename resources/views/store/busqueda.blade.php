@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row justify-content-center">
              
                    @foreach ( $products as $product)
                        @if ( $product->visible == 1)
                        <div class="col-md-3 py-3">
                                 <div class="card">
                                          <a href="{{ route('product-detail', $product -> id) }}"><img src="{{ asset('storage/images/products/'.$product -> image) }}"  class="card-img-top" height="200px" /></a>
                     
                                    <div class="card-body" style="padding: 5%; height:200px;">
                                       <p class="card-title text-center">{{ $product -> name }}</p>
                                       <p><a href="{{ route('product-detail', $product -> id) }}" class="btn btn-primary">Ver más</a></p>
                                       <p><strong style="color: red">S/.{{ number_format($product -> price,2) }}</strong> &nbsp <img src="{{ asset('storage/images/icon/paypalicon.png') }}" width="50px" height="20%" class="img-fluid" /></p>
                                       <p><small>{{ $product -> extract }}</small></p>
                                    </div>
                                 </div>
                              </div>
                     
                        @else
                           
                        @endif
                    @endforeach
                    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
