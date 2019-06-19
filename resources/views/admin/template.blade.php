<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  style="position: relative; min-height: 100%;">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}" ></script>
  
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <link rel="icon" type="image/png" href="{{ asset('images/icon/totoro.png') }}" />
</head>
<body style="background-color: #f2f2f2">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-toggleable-sm bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/icon/emblema.png') }}"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav">
                <li class="p-2 " >
                    <a class="nav-link" href="{{ url('/admin/home') }}"><img class="img-fluid" src="{{ asset('images/icon/dashboard.png') }}" width="30px">{{ __(' Dashboard') }}</a>
                  
                </li>
                <li class="p-2 " >
                  <a class="nav-link" href="{{ route('category.index') }}"><img class="img-fluid" src="{{ asset('images/icon/cat nav.png') }}">{{ __(' Categorias') }}</a>
                </li>

                <li class="p-2 " >
                  <a class="nav-link" href="{{ route('product.index') }}"><img class="img-fluid" src="{{ asset('images/icon/car nav.png') }}">{{ __(' Productos') }}</a>
                </li>
                <li class="p-2 " >
                  <a class="nav-link" href="{{ route('order.index') }}"><img class="img-fluid" src="{{ asset('images/icon/paypal nav.png') }}">{{ __(' Pedidos') }}</a>
                </li>
                <li class="p-2" ><a class="nav-link" href="{{ route('user.index') }}"><img  class="img-fluid" src="{{ asset('images/icon/users nav.png') }}">{{ __(' Usuarios') }}</a></li>
                <li class="p-2 ">
                  <a id="navbarDropdown" class="nav-link font-weight-normal" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="img-fluid" src="{{ asset('images/icon/logout.png') }}">{{ __(' Logout') }}<span class="caret"></span></a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <br><br>
    <main class="py-4">

        @if (\Session::has('message'))
          @include('admin.partials.message')
        @endif  

        @yield('content')
    </main>

  <footer style="position: absolute; bottom: 0; left: 0; width: 100%;">
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <p style="color:white; width: 100%; height: 10px; text-align: center;">Copyright © 2019 X-FORCE. Todos los derechos reservados. </p>
      </div>
    </nav>
  </footer>
  
</body>

</html>
