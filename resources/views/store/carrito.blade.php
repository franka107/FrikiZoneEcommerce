@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-8">
                <div class="border-bottom">
                  <h2>Carrito de compras</h2>
                </div>
                <div class="container" style="margin-top:5%">
                  <div style="" class="row">
                    <div class="col-sm-5">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                        	<img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div  class="col-sm-6 card">
                      <div  class=" card-body">
                      		<p>Isekai Quarter</p>
                      		<s>S/. 25.00</s> &nbsp -25%
                      		<p><strong>S/. 25.00</strong></p>
                      		<p><strong style="color: red">S/. 25.00</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                      </div>
                    </div>
                    <button type="button" class="close col-sm-1" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
                <div class="container" style="margin-top:5%">
                  <div style="" class="row">
                    <div class="col-sm-5">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                        	<img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div  class="col-sm-6 card">
                      <div  class=" card-body">
                      		<p>Isekai Quarter</p>
                      		<s>S/. 25.00</s> &nbsp -25%
                      		<p><strong>S/. 25.00</strong></p>
                      		<p><strong style="color: red">S/. 25.00</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                      </div>
                    </div>
                    <button type="button" class="close col-sm-1" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
                <div class="container" style="margin-top:5%">
                  <div style="" class="row">
                    <div class="col-sm-5">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                        	<img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div  class="col-sm-6 card">
                      <div  class=" card-body">
                      		<p>Isekai Quarter</p>
                      		<s>S/. 25.00</s> &nbsp -25%
                      		<p><strong>S/. 25.00</strong></p>
                      		<p><strong style="color: red">S/. 25.00</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
                      </div>
                    </div>
                    <button type="button" class="close col-sm-1" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
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
                      		<h6 class="col-sm-6 text-right">S/. 120.00</h6>
                      	</div>
                      	<br>	
                      	<br>
                      	<br>
                      	<div>
                      		<button class="btn btn-success btn-block">PROCESAR COMPRA</button>
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