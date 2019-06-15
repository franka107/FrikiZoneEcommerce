@extends('layouts.app')

@section('content')

  <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-8">
                <div class="border-bottom">
                  <h2>Carrito de compras</h2>
                </div>
                @if(count($cart))
                <div class="container" style="margin-top:5%">
                  <div style="" class="row">
                    @foreach($cart as $item)
                    <div class="col-sm-12 py-2">
                      <div class="row">
                    <div class="col-sm-5">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                          <img src="{{ asset('images/'.$item -> image) }}" class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div  class="col-sm-6 card">
                      <div  class=" card-body">
                          <p>{{ $item->name }}</p>
                          
                          <input
                            type="number"
                            min="1"
                            max="100"
                            value="{{ $item->quantity}}"
                            id="product_{{ $item->id }}"
                          >
                          <a 
                            href="#" 
                            class="btn btn-warning btn-update-item"
                            data-href="{{ route('cart-update', $item->slug)}}"
                            data-id="{{ $item->id }}"
                          >Actualizar</a>
                        
                          <br>
                          <s>S/.{{ number_format($item->price,2) }}</s> &nbsp -25%
                          <p><strong>S/.{{ number_format($item->price,2) }}</strong></p>
                          <p><strong style="color: red">S/.{{ number_format($item->price,2) }}</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                      </div>
                    </div>
                    <a href="{{ route('cart-delete', $item->slug)}}" >
                      <button type="button" class="close col-sm-1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </a>
                  </div>
                  </div>
                    @endforeach
                  </div>
                  <br>
                </div>
                @else
                  <h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
                @endif
              </div>
              <div class="col-sm-4">
                <div class="container" style="margin-top:10%">
                  <div  class="card">
                    <div class="card-body">
                      <h5 class="border-bottom"><strong>Resumen de tu pedido</strong></h5>
                      <div class="container">
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-sm-5">Subtotal</h6>
                          <h6 class="col-sm-6 text-right">S/. 150.00</h6>
                        </div>
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-sm-5">Envio</h6>
                          <h6 class="col-sm-6 text-right">S/. 130.00</h6>
                        </div>
                        <br>
                        <div style="padding-bottom: 4%;" class="row border-bottom">
                          <h6 class="col-sm-5">Total</h6>
                          <h6 class="col-sm-6 text-right">S/.{{number_format($total,2)}}</h6>
                        </div>
                        <br>  
                        <br>
                        <br>
                        <div>
                          <a href="{{ route('order-detail') }}"><button class="btn btn-success btn-block">PROCESAR COMPRA</button></a>
                        </div>
                      </div>
                      <br><br><br>
                      <div class="col-sm-12">
                        <img src="{{ asset('images/saitama.jpg') }}"  class="img-fluid" />
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <a href="{{ route('home') }}">Regresar</a>
         
@endsection
