@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-8">
                <div class="border-bottom">
                  <h2>DETALLES DE PEDIDO</h2>
                </div>
                <div class="container" style="margin-top:5%">
                  <div class="border-bottom">
                    <h4>PRODUCTOS A COMPRAR</h4>
                  </div>
                  <br>
                  <div style="" class="row">
                    <div class="col-sm-4">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                        	<img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                          <img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div  class=" text-center card">
                        <div  class=" text-center card-body">
                          <img  src="{{ asset('images/titan.jpg') }}"  class="img-fluid" />            
                        </div>
                      </div>
                    </div>   
                  </div>
                </div>
                <div class="container" style="margin-top:5%">
                  <div class="border-bottom">
                    <h4>TIPO DE ENVIO</h4>
                  </div>
                  <br>
                  <div style="" class="row">
                    <div class="col-sm-12">
                      <div  class="card">
                        <div  class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">ENVIO GRATUITO</label><br>
                            <span>* Demora 1 mes o mas y esta para recoger en oficina postal</span>
                          </div>
                          <br>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">ENVIO PAGADO</label><br>
                            <span>* Demora 1 mes o mas y esta para recoger en oficina postal</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container" style="margin-top:5%">
                  <div class="border-bottom">
                    <h4>METODO DE PAGO</h4>
                  </div>
                  <br>
                  <div style="" class="row">
                    <div class="col-sm-12">
                      <div  class="card">
                        <div  class="card-body">
                          <div class="container">
                            <div class="row">
                              <input class="col-sm-12 form-control" name="email" value="NOMBRE DE LA TARJETA">
                              <br><br>
                              <input class="col-sm-12 form-control" name="email" value="NUMERO DE LA TARJETA">
                              <br><br>
                              <input class="col-sm-6 form-control" name="email" value="VALIDO HASTA (MM/YY)">
                              <br><br>
                              <input class="col-sm-6 form-control" name="email" value="CVV">
                              <br><br>
                              <input class="col-sm-6 form-control" name="email" value="NOMBRE DE TELEFONO">
                              <br><br>
                              <input class="col-sm-6 form-control" name="email" value="DNI">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="container" style="margin-top:10%">
                  <div  class="card">
                    <div class="card-body">
                      <h5 class="border-bottom"><strong>Cantidad a Pagar</strong></h5>
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
                      		<button class="btn btn-success btn-block">COMPLETAR COMPRA</button>
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