@extends('layouts.app')

@section('content')

  <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-md-8">
                <div class="border-bottom">
                  <h2>Carrito de compras</h2>
                </div>
                @if(count($cart))
                @foreach($cart as $item)
                <div class="container" style="margin-top:5%">
                  <div style="" class="row">
                    
                    <div class="col-md-12">
                      <div class="row">
                    <div class="col-md-4 card">
                        <div  class=" text-center card-body">
                          <img src="{{ asset('images/'.$item -> image) }}" class="img-fluid" width="100%"/>            
                        </div>
                    </div>
                    <div  class="col-md-4 card">
                      <div  class=" card-body">
                          <p>{{ $item->name }}</p>                       
                          <br>
                          <s>S/.{{ number_format($item->price,2) }}</s> &nbsp -25%
                          <p><strong>S/.{{ number_format($item->price,2) }}</strong></p>
                          <p><strong style="color: red">S/.{{ number_format($item->price,2) }}</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                      </div>
                    </div>  
                    <div  class="col-md-3 card">
                      <div  class=" card-body">
                          <input class="form-control" type="number" min="1" max="100" value="{{ $item->quantity}}" id="product_{{ $item->id }}">
                          <div class="py-1"></div>
                          <a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart-update', $item->id)}}" data-id="{{ $item->id }}"
                          >Aceptar</a>
                          
                      </div>
                      
                    </div>
                    <a href="{{ route('cart-delete', $item->id)}}" >
                      <button type="button" class="close col-md-1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </a>
                  </div>
                  </div>
                    
                  </div>
                  <br>
                </div>
                <br>
                @endforeach
                @else
                  <h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
                @endif
              </div>
              <div class="col-md-4">
                <div class="container" style="margin-top:10%">
                  <div  class="card">
                    <div class="card-body">
                      <h5 class="border-bottom"><strong>Resumen de tu pedido</strong></h5>
                      <div class="container">
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-md-5">Subtotal</h6>
                          <h6 class="col-md-6 text-right">S/. 150.00</h6>
                        </div>
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-md-5">Envio</h6>
                          <h6 class="col-md-6 text-right">S/. 130.00</h6>
                        </div>
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-md-5">Total</h6>
                          <h6 class="col-md-6 text-right">S/.{{number_format($total,2)}}</h6>
                        </div>
                        <br>  
                        <br>
                        <br>
                        <div>
                          <a href="{{ route('order-detail') }}"><button class="btn btn-success btn-block">PROCESAR COMPRA</button></a>
                        </div>
                      </div>
                      <br><br><br>
                      <div class="col-md-12">
                        <img src="{{ asset('images/icon/saitama.jpg') }}"  class="img-fluid" />
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
              </div>
            </div>
            <a class="btn btn-primary" href="{{ route('home') }}">Regresar</a>
          </div>
         
         
@endsection
