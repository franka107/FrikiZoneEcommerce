<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href=""><img src="{{ asset('images/logo.png') }}"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto ">
                      <div class="btn-group">
                        <button type="button" class="btn btn-light">Todas las Categorias</button>

                          <button type="button" class="btn btn-light dropdown-toggle"
                                  data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Desplegar menú</span>
                          </button>

                        <ul style="background: #454545 " class="dropdown-menu" role="menu">
                          <li><a href="#">Acción #1</a></li>
                          <li><a href="#">Acción #2</a></li>
                          <li><a href="#">Acción #3</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Acción #4</a></li>
                        </ul>
                      </div>
                      <input style="width:300px;" class="form-control mr-sm-2" type="search" placeholder="Search">

                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </ul>
              </div>    
                  <div class="col-md-1 ml-md-auto">
                    <a href=""><img style="filter: brightness(500%);" src="{{ asset('images/user.png') }}"></a>
                  </div>
                  <div class="">
                    <a href=""><img style="filter: hue-rotate(60deg) brightness(500%);" src="{{ asset('images/car.png') }}"></a>
                  </div>
            </div>
        </div>

    </nav>

</body>
</html>
