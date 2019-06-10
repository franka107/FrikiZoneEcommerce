@extends('layouts.app2')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

            <div class="card">
              <div class="card-header">{{ __('Iniciar Sesion') }}</div>

            <br><br>
              <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col form-group ">
                            <label  for="email" class="col-md-9 col-form-label ">{{ __('Correo Electronico') }}</label>
                            <br>
                            <div class="col-md-11">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col form-group">
                          <label for="password" type="password" class="col-md-9 col-form-label ">{{ __('Contraseña') }}</label>

                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Recuerdame') }}
                                  </label>
                                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </div>

                      <div class="text-center">
                        <button style="width: 80%; background-color: ;" type="submit" class="btn btn-primary btn-success">
                            {{ __('Iniciar Sesion') }}
                        </button>
                    </div>
                </form><br>
              </div>
            </div>
        </div>
    </div>
</div>

<!--
    <div class="col-md-8">

              <div class="card">
                <div class="card-header">{{ __('Iniciar Sesion') }}</div>

              <br><br>
                <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group row">
                          <div class="col form-group ">
                              <label  for="email" class="col-md-9 col-form-label ">{{ __('Correo Electronico') }}</label>
                              <br>
                              <div class="col-md-11">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="col form-group">
                            <label for="password" type="password" class="col-md-9 col-form-label ">{{ __('Contraseña') }}</label>

                              <div class="col-md-11">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                                {{ __('Iniciar Sesion') }}
                              </button>

                              @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                  </a>
                              @endif
                      </div>
                    </div>
                  </form><br>
                </div>
              </div>
-->
@endsection
