@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row justify-content-center">
                    @foreach ( $products as $product)
                       <div class="col-md-3 py-3">
                          <div class="card">
                             <div class="text-center card-body" >
                                <a href="{{ route('product-detail', $product ->name) }}">
                                <img src="{{ asset('images/'.$product -> image) }}"  width="189px" height="100%" class="img-fluid" /></a>
                             </div>
                             <div class="card-header" style="padding: 2%; height:190px;">
                                <p>{{ $product -> name }}</p>
                                <s>S/.{{ number_format($product -> price,2) }}</s> &nbsp -25%
                                <p><strong>S/.{{ number_format($product -> price,2) }}</strong></p>
                                <p><strong style="color: red">S/.{{ number_format($product -> price,2) }}</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                             </div>
                          </div>
                       </div>
                       
                    @endforeach
                    </div>
    </div>
@endsection
