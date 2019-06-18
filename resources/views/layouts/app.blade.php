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
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <link rel="icon" type="image/png" href="{{ asset('images/totoro.png') }}" />

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-toggleable-sm bg-dark fixed-top">
      <div class="container">

          <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('images/emblema.png') }}"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"><span class="navbar-toggler-icon"></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto col-md-6 mr-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-primary  my-2 my-sm-0 " type="submit">Search</button>
            </ul>

            <ul class="navbar-nav">
              @guest
                <li class="p-2 text-center" >
                  <a class="nav-link" href=""><img class="img-fluid" src="{{ asset('images/dolar.png') }}">{{ __(' Dolar') }}</a>
                </li>

                <li class="p-2 text-center" >
                  <a class="nav-link" href="{{ route('login') }}"><img class="img-fluid" src="{{ asset('images/user.png') }}">{{ __('Login') }}</a>
                </li>

                @if (Route::has('register'))
                  <li class="p-2 text-center" >
                    <a class="nav-link" href="{{ route('register') }}"><img class="img-fluid" src="{{ asset('images/login.png') }}">{{ __('Register') }}</a>
                  </li>

                @endif
                  <li class="p-2 text-center" ><a class="nav-link" href="{{ route('cart-show') }}"><img  class="img-fluid" src="{{ asset('images/carrito.png') }}">{{ __(' Carrito') }}</a></li>
              @else
                  <li class="nav-item" >
                    <a class="nav-link" href=""><img class="img-fluid" src="{{ asset('images/dolar.png') }}">{{ __(' Dolar') }}</a>
                  </li>

                  <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="img-fluid" src="{{ asset('images/user.png') }}">{{ Auth::user()->name }} <span class="caret"></span></a>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('EditarInformacion') }}">
                                         <img class="img-fluid" src="{{ asset('images/editN.png') }}">{{ __(' EditProfile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img class="img-fluid" src="{{ asset('images/logoutN.png') }}">{{ __(' Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>

                  </li>

                  
                  <li class="nav-item"><a class="nav-link" href="{{ route('cart-show')}}"><img class="img-fluid" src="{{ asset('images/carrito.png') }}">{{ __(' Carrito') }}</a></li>
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
          <h5 class="text-warning">¿Quienes somos?</h5><br>
            <ul>
              <p class="small text-justify" style="color: white">Esta compañia se dedica a la venta de productos Frikis de calidad y variedad, nos decicamos a mejorar la experiencia del usuario a travez de la compra online enfocada a jovenes. Y recuerden amiguitos, si preguntan el precio de algo y te dicen "inbox" es porque el vendedor da bien pinshe caro, asi que mejor comprenos a nosotros. Hasta la proxima Amiguitos.</p>
            </ul>

          <h5 class="text-warning">Fundadores</h5><br>
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
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/George.png') }}" alt="Primer Slide"><br><br><br>
                      <div class="carousel-caption d-none d-md-block">
                          <h3 style="background-color:#161616; opacity:.5">George Extasis</h3>
                          <p>Castro a su gato</p>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/Franka.png') }}" alt="Segundo Slide"><br><br><br>
                      <div class="carousel-caption d-none d-md-block">
                          <h3 style="background-color:#161616; opacity:.5">Franka</h3>
                          <p>Modo trapito</p>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/Miranda.png') }}" alt="Tercer Slide"><br><br><br>
                      <div class="carousel-caption d-none d-md-block">
                          <h3 style="background-color:#161616; opacity:.5">Miranda dark</h3>
                          <p>El inevitable</p>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/Jose2.png') }}" alt="Cuarto Slide"><br><br><br>
                      <div class="carousel-caption d-none d-md-block">
                          <h3 style="background-color:#161616; opacity:.5">Lord Bython</h3>
                          <p>El gamberro</p>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/Emerson2.png') }}" alt="Quinto Slide"><br><br><br>
                      <div class="carousel-caption d-none d-md-block">
                          <h3 style="background-color:#161616; opacity:.5">Emerson Wick</h3>
                          <p>No se masturben</p>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <img class="" style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{ asset('images/Fundadores/Brucce.gif') }}" alt="Sexto Slide"><br><br><br>
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

        <div class="col-md-3">
            <h5 class="text-warning">¿Porque comprar aqui?</h5><br>
            <div class="row text-justify" style="margin-right: 10px;">
              <ul>
                <div class="row">
                  <div class="col-2">
                    <img src="/images/icon/1.png" style="height:40px;width:40px;">
                  </div>
                  <div class="col-10">
                    <label class="small" style="color: white">Contamos con el apoyo de la Secta Georgia, el lider George mejor conocido como George_Castra_Jovenes, lider en distribucion de productos Frikis y tu castrador de confianza</label>
                  </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <img src="/images/icon/2.png" style="height:40px;width:40px;">
                    </div>
                    <div class="col-10">
                        <label class="small" style="color: white">Tenemos los mayores expertos en productos frikis, los mejores hikikomoris tecnologicos de Tecsup, al mejor precio </label>
                    </div>
                </div>

                <div class="row">
                  <div class="col-2">
                    <img src="/images/icon/3.png" style="height:40px;width:40px;">
                  </div>
                  <div class="col-10">
                    <label class="small" style="color: white">Contactanos con los estanderes de seguridad y recibiras el pack de cliente premium bien mamadisimo. Tu compra en la FRIKI_ZONE, siempre sera segura .</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                    <img src="/images/icon/4.png" style="height:40px;width:40px;">
                  </div>
                  <div class="col-10">
                    <label class="small" style="color: white">El 99.99% de nuestros productos cuentan con garantian de fabrica. Si tu producto llega a presentar fallas, solo envianos un mail con tu nombre, recibo, dni, tarjeta de credito, direccion del hogar.</label>
                  </div>
                </div>
              </ul>
            </div>
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
          <h5 class="text-warning">Politicas y Servicio al cliente</h5>
          <ul>
            <p class="small" style="color: white">Politicas envio</p>
            <p class="small" style="color: white">Politicas garantia</p>
            <p class="small" style="color: white">Politicas privacidad</p>
            <p class="small" style="color: white">FAQs</p>
          </ul>

        </div>

        <div class="col-md-3">
          <h5 class="text-warning">Redes Sociales</h5><br>
          <div class="row">
            <ul>
              <img src="/images/icon/face.png" style="height:40px;width:40px;"><label class="small" style="color: white">&nbsp Siguenos en Facebook</label><br><br>
              <img src="/images/icon/insta.png" style="height:40px;width:40px;"><label class="small" style="color: white">&nbsp Siguenos en Instagram</label><br><br>
              <img src="/images/icon/goog.png" style="height:40px;width:40px;"><label class="small" style="color: white">&nbsp Siguenos en Google Plus</label><br><br>
              <img src="/images/icon/pin.png" style="height:40px;width:40px;"><label class="small" style="color: white">&nbsp Siguenos en Pinteres</label><br><br>
              <img src="/images/icon/twi.png" style="height:40px;width:40px;"><label class="small" style="color: white">&nbsp Siguenos en Twitter</label>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color:#161616">
          <div class="container">
        <p style="color:white; width: 100%; height: 10px; text-align: center;">Copyright © 2019 X-FORCE. Todos los derechos reservados. </p>
      </div>
    </nav>
  </footer>
</body>
</html>
