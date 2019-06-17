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
                    <a id="navbarDropdown" class="nav-link font-weight-normal" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img class="img-fluid" src="{{ asset('images/user.png') }}">{{ Auth::user()->name }} <span class="caret"></span></a>
                  </li>

                  <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link font-weight-normal" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="img-fluid" src="{{ asset('images/logout.png') }}">{{ __(' Logout') }}<span class="caret"></span></a>
                  </li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
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
  <footer style="position: absolute; bottom: 0; left: 0; width: 100%;">
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container"> 
        <p style="color:white; width: 100%; height: 10px; text-align: center;">Copyright © 2019 X-FORCE. Todos los derechos reservados. </p>
      </div>
    </nav>
  </footer>
</body> 
</html>