@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-8">
                <div class="border-bottom">
                  <h2>{{ $product -> name }}</h2>
                </div>
                <div class="container" style="margin-top:5%">
                  <div class="row justify-content-center">
                    <div class="col-sm-5">
                      <div style="height: 100%; width: 105%" class=" text-center card">
                        <div class=" text-center card-body">
                          <img style="width: 100%; height: 100%" src="{{ asset('images/'.$product -> image) }}" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="border-bottom">Sinopsis</h4>
                        <div class="container" style="margin-top:3%">
                          <div class="card">
                            <div class="card-body">
                                {{ $product -> description }}
                            </div>
                          </div>
                        </div>
                        <br>
                        <h4 class="border-bottom">Descripcion</h4>
                        <div class="container" style="margin-top:3%">
                          <div class="card">
                            <div class="card-body">
                                {{ $product -> description }}
                            </div>
                          </div>
                        </div>
          
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="container" style="margin-top:50%">
                  <div  class="card">
                    <div class="card-body">
                      <h4><strong>Stock Limitado</strong></h4>
                      <h5>${{ number_format($product -> price,2) }}</h5>
                      <h4>${{ number_format($product -> price,2) }}</h4>
                      <h4>${{ number_format($product -> price,2) }}</h4>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-primary btn-block">AGREGAR AL CARRITO</button>
                  <button class="btn btn-success btn-block">COMPRAR</button>
                </div>
              </div>
            </div>
          </div>
          <a href="{{ route('home') }}">Regresar</a>
@endsection