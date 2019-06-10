@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br>

                <div class="card">
                  <div class="card-header">{{ __('Registrarse') }}</div>

                <br><br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col form-group ">
                                <label  for="name" class="col-md-9 col-form-label ">{{ __('Nombres') }}</label>
                                <br>
                                <div class="col-md-11">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col form-group">
                                <label for="apellidos" class="col-md-9 col-form-label ">{{ __('Apellidos') }}</label>

                                <div class="col-md-11">
                                    <input id="apellidos" type="apellidos" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos">

                                    @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col form-group">
                              <label for="email" class="col-md-9 col-form-label ">{{ __('Correo Electronico') }}</label>

                              <div class="col-md-11">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                            <div class="col form-group ">
                                <label for="dni" class="col-md-9 col-form-label ">{{ __('DNI') }}</label>

                                <div class="col-md-11">
                                    <input id="dni" type="text" class="form-control" name="dni" maxlength="8" required autocomplete="dni">
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col form-group ">
                                <label for="password" class="col-md-9 col-form-label ">{{ __('Password') }}</label>

                                <div class="col-md-11">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col form-group ">
                                <label for="password-confirm" class="col-md-9 col-form-label ">{{ __('Confirm Password') }}</label>

                                <div class="col-md-11">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                        </div>

                        <div class="text-center">
                                <button style="width: 90%" type="submit" class="btn btn-primary btn-success">
                                    {{ __('Registrarse') }}
                                </button> <br> <br>
                        </div>
                    </form>
                  </div>
              </div>
        </div>
    </div>
</div>

@endsection
