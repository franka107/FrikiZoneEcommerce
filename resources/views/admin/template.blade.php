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
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav style="position: fixed; width: 100%; z-index: 100;" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/dashboard.png') }}" width="9%"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
              </button>


                    <!-- Right Side Of Navbar -->
                <ul class="navbar-nav col-md-3 ml-md-3">
                  @guest



                    <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    
                </ul>

                  @else
                  <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#">Pedidos</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#">Usuarios</a>
                    </li>
                 
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div style="width: 15%;">
                        
                    </div>
                        
              </div>

                  @endguest
              </div>                      
    </nav>
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
