@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col-6">   
                <img class="img-fluid" src=" {{ asset('images/log.gif') }} ">
            </div>
            <div class="col-6"  >
                <h1 class="font-weight-light">Bienvenido(a) {{ Auth::user()->user }} al Panel de administración de la Friki Zone.</h1>
                <h5>El mejor sitio para los virgenes</h5>   

            </div>
        </div>

        <hr>
       
        <div class="row">
            
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                      <img class="img-fluid" src=" {{ asset('images/cat.png') }} ">
                    </div>
                    <div class="">   
                        <a href="{{ route('category.index') }}" class="btn btn-warning btn-block btn-home-admin">CATEGORÍAS</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="img-fluid" src=" {{ asset('images/car.png') }} ">
                    </div>
                    <div>    
                        <a href=" {{route('product.index') }}" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
                    </div>
                </div>
            </div>
                    
        </div>
        <br><br> 
        <div class="row">
            
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="img-fluid" src=" {{ asset('images/paypal.png') }} ">   
                    </div>
                    <div>
                        <a href="{{ route('order.index') }}" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
                    </div>
                </div>
            </div> 
            
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="img-fluid" src=" {{ asset('images/users.png') }} ">
                    </div>
                    <div>
                        <a href="{{ route('user.index') }}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                    </div>
                </div>      
            </div>
                    
        </div>
        
    </div>
    <hr>
    <br>    <br>
@stop