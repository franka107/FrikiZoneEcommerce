@extends('layouts.app')

@section('content')
  <div class="container" style="margin-top:30px">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="border-bottom">
                      <h2>DETALLES DE PEDIDO</h2>
                    </div>
                    <div class="container" style="margin-top:5%">
                      <div class="table-responsive ">
                        <div class="border-bottom">
                          <h4>Datos del usuario</h4>
                        </div>                        
                        <br>
                        <div class="container">
                          <table class="table table-striped table-hover table-bordered">
                            <tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->lastname }}</td></tr>
                            <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                            <tr><td>Dirección:</td><td>{{ Auth::user()->address }}</td></tr>
                          </table>
                        </div> 
                      </div>
                      <div class="border-bottom">
                        <h4>Productos que se va comprar</h4>
                      </div>
                      <br>
                      @foreach($cart as $item)

                      <div style="" class="row">
                        <div class="col">
                          <div class="container">
                            <div class="row">
                              <div  class="col-4">
                                <img src="{{ asset('storage/images/products'.$item -> image) }}"class="img-fluid" />            
                              </div>
                              <div class="col-8">
                                <p class="small">Nombre: {{ $item->name }}</p>
                                <p class="small">Cantidad: {{ $item->quantity }}</p>
                                <p class="small">Precio: S/.{{ number_format($item->price,2) }}</p>
                                <p class="small form-control">Subtotal: S/.{{ number_format($item->price * $item->quantity,2) }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      @endforeach
                    </div>

                  
                  </div>
                  <div class="col-sm-4">
                    <div class="container" style="margin-top:10%">
                      <div style="" class="row">
                        <div class="col-sm-12">
                          <div  class="card">
                            <div  class="card-body">
                              <div class="border-bottom">
                                <h4>TIPO DE ENVIO</h4>
                              </div>
                              <br>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">ENVIO GRATUITO</label><br>
                                <span>* Demora 1 mes o mas y esta para recoger en oficina postal</span><br><br>
                                <span class="small text-justify">* Actualmente solo siponemos de envio gratuito </span>
                              </div>
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="card" >
                          <div class="card-body">
                            <div class="border-bottom">
                              <h4>METODO DE PAGO</h4>
                            </div>
                            <br>
                            <img  src="{{ asset('storage/images/icon/paypalicon.png') }}"  class="img-fluid" />            
                            <label>El unico metodo de pago disponible por ahora es Paypal</label><br>
                            <span class="small">* DISCULPANOS ONI-CHAN</span>
                          </div>
                        </div>
                      <div  class="card">
                        <div class="card-body">
                          <h5 class="border-bottom"><strong>Cantidad a Pagar</strong></h5>
                          <div class="container">
                            <br>
                            <div style="padding-bottom: 4%;" class="row border-bottom">
                              <h6 class="col-sm-5">Total</h6>
                              <h6 class="col-sm-6 text-right">S/.{{ number_format($total, 2) }}</h6>
                              <h6 class="col-sm-5">Total(Dolar)</h6>
                              <h6 class="col-sm-6 text-right">$ {{ number_format($total/3.34, 2) }}</h6>

                            </div>
                            <br>
                            <div>
                              <a href="{{ route('payment') }}  " class="btn btn-success form-control">Completar pago</a>     
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary "href="{{ route('home') }}">Regresar</a>


@endsection