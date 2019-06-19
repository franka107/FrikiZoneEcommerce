<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  style="position: relative; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>-->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->

    <link rel="icon" type="image/png" href="{{ asset('images/icon/totoro.png') }}" />

</head>
<body class="">
  <nav class="navbar navbar-expand-lg navbar-dark navbar-toggleable-sm bg-dark fixed-top">
      <div class="container">
  
          
          <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('images/icon/emblema.png') }}"></a>
  

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"><span class="navbar-toggler-icon"></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto col-md-5 mr-auto">


                <form class="col-12" action="{{ action('StoreController@search') }}" method="get" >
                  <div class="row">
                    <div class="row col-10" >
                        <input name="name" class="form-control mr-sm-2" type="search" placeholder="Search">
                    </div>
                    <div class="row col-2">
                        <button class="btn btn-outline-primary   " type="submit">Search</button>
                    </div>
                      
                  </div>
                   
                </form>

              
            </ul>

            <ul class="navbar-nav">
              @guest
                <li class="p-2 " >
                  <a class="nav-link" href=""><img class="img-fluid"  src="{{ asset('images/icon/dolar.png') }}">Cambio:$3.24</a>
                </li>

                <li class="p-2 " >
                  <a class="nav-link" href="{{ route('login') }}"><img class="img-fluid" src="{{ asset('images/icon/user.png') }}">{{ __(' Login') }}</a>
                </li>

                @if (Route::has('register'))
                  <li class="p-2 " >
                    <a class="nav-link" href="{{ route('register') }}"><img class="img-fluid" src="{{ asset('images/icon/login.png') }}" width="25px">{{ __(' Register') }}</a>
                  </li>

                @endif
                  <li class="p-2 " ><a class="nav-link" href="{{ route('cart-show') }}"><img  class="img-fluid" src="{{ asset('images/icon/carrito.png') }}">{{ __(' Carrito') }}</a></li>
              @else
              @if ( \Auth::check())
                @if ( \Auth::user()->type=='admin')
                  <li class="nav-item" >
                      <a class="nav-link" href="{{ url('/admin/home') }}"><img class="img-fluid" src="{{ asset('images/icon/dashboard.png') }}" width="30px">{{ __(' Dashboard') }}</a>
                   
                  </li>
                @endif
              @endif
                 
                    <a class="nav-link" href=""><img class="img-fluid" src="{{ asset('images/icon/dolar.png') }}"> Cambio:$3.24</a>
                  </li>

                  <li class="nav-item dropdown">
                               
                                
                                @if ( Auth::user()->image)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img class="img-fluid" width="30px" style="border-radius: 15px" src="{{ asset('images/'.Auth::user()->image) }}">{{ Auth::user()->name }} <span class="caret"></span></a>
                                </a>
                                @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img class="img-fluid" src="{{ asset('images/icon/user.png') }}">{{ Auth::user()->name }} <span class="caret"></span></a>
                                </a>
                                @endif
                             
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('EditarInformacion') }}">
                                         <img class="img-fluid" src="{{ asset('images/icon/editN.png') }}">{{ __(' EditProfile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img class="img-fluid" src="{{ asset('images/icon/logoutN.png') }}">{{ __(' Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>

                  </li>

                  
                  <li class="nav-item"><a class="nav-link" href="{{ route('cart-show')}}"><img class="img-fluid" src="{{ asset('images/icon/carrito.png') }}">{{ __(' Carrito') }}</a></li>
            </ul>
              @endguest
          </div>
      </div>
  </nav>
  <br><br><br>
  <main class="py-4">
      @if (\Session::has('message'))
        @include('store.partials.message')
      @endif

      @yield('content')
  </main>
  <br><br>
  <footer class="bg-dark" style="">

    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-body">
        <div class="row">

        <div class="col-md-3">
          <h5 class="text-warning">Fundadores</h5><br>
          <div class="col-10 text-center">
            <div id="carouselEducaCodigo2" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carouselEducaCodigo2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselEducaCodigo2" data-slide-to="1"></li>
                    <li data-target="#carouselEducaCodigo2" data-slide-to="2"></li>
                    <li data-target="#carouselEducaCodigo2" data-slide-to="3"></li>
                    <li data-target="#carouselEducaCodigo2" data-slide-to="4"></li>
                    <li data-target="#carouselEducaCodigo2" data-slide-to="5"></li>

                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="img-fluid" src="{{ asset('images/Fundadores/George.jpg') }}" alt="Primer Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">George Extasis</h3>
                            <p>Castro a su gato</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('images/Fundadores/Franka.jpg') }}" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">Franka</h3>
                            <p>Modo trapito</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-fluid"  src="{{ asset('images/Fundadores/Miranda.jpg') }}" alt="Tercer Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">Miranda dark</h3>
                            <p>El inevitable</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('images/Fundadores/Jose2.jpg') }}" alt="Cuarto Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">Lord Bython</h3>
                            <p>El gamberro</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('images/Fundadores/Emerson2.jpg') }}" alt="Quinto Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">Emerson Wick</h3>
                            <p>No se masturben</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('images/Fundadores/Brucce.jpg') }}" alt="Sexto Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color:#161616; opacity:.5">El leshero</h3>
                            <p>No found image</p>
                        </div>
                    </div>
                </div>
                <a href="#carouselEducaCodigo2" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#carouselEducaCodigo2" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
          </div>
        </div>

        <div class="col-md-3">
          <h5 class="text-warning">¿Quienes somos?</h5><br>
              <p class="small text-justify" style="color: white">Esta compañia se dedica a la venta de productos Frikis de calidad y variedad, nos decicamos a mejorar la experiencia del usuario a travez de la compra online enfocada a jovenes. Y recuerden amiguitos, si preguntan el precio de algo y te dicen "inbox" es porque el vendedor da bien pinshe caro, asi que mejor comprenos a nosotros. Hasta la proxima Amiguitos.</p>
            
        </div>

        <div class="col-md-3">
          <h5 class="text-warning">Informacion y contactos</h5><br>

          <div class="row2 text-justify" style="color: white">
            <ul>
              <label class="small">La casa de George, JFFP+J9 Alto Selva Alegre Unnamed Road, Arequipa 04004</label><br>
              <label class="small">Coordenadas Google Maps:-16.3759054,-71.5140817</label>
              <label class="small">Central Telefonica: (911)61945232</label><br>
              <label class="small">Atencion al cliente: tranquilo@tigre.com</label><br>
              <label class="small">Numero de Telefono: 948 641 324</label>
            </ul>
          </div>

        </div>

        <div class="col-md-3">
          <h5 class="text-warning">Politicas y Servicio al cliente</h5>
          <ul>
            <p class="small" style="color: white">Politicas envio</p>
            <p class="small" style="color: white">Politicas garantia</p>
            <p class="small" style="color: white">Politicas privacidad</p>
            <p class="small" style="color: white">FAQs</p>
          </ul>
          <h5 class="text-warning">Redes Sociales</h5><br>
            <ul>
              <img src="/images/icon/face.png" style="height:40px;width:40px;">
              <img src="/images/icon/insta.png" style="height:40px;width:40px;">
              <img src="/images/icon/goog.png" style="height:40px;width:40px;">
              <img src="/images/icon/pin.png" style="height:40px;width:40px;">
              <img src="/images/icon/twi.png" style="height:40px;width:40px;">
            </ul>
        </div>
      </div>
    </div>
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color:#161616">
        <p style="color:white; width: 100%; height: 10px; text-align: center;">Copyright © 2019 X-FORCE. Todos los derechos reservados. </p>
    </nav>
  </footer>
</body>
</html>
