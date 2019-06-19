@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-8">
                <div class="border-bottom">
                  <h2 class="display-4">{{ $product -> name }}</h2>
                </div>
                <div class="container" style="margin-top:5%">
                  <div class="row justify-content-center">
                    <div class="col-sm-5">
                      <div class=" text-center card shadow-lg">
                        <div class=" text-center card-body">
                          <img src="{{ asset('images/'.$product -> image) }}" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="border-bottom">Sinopsis</h4>
                        <div class="container" style="margin-top:3%">
                          <div class="card">
                            <div class="card-body">
                                {{ $product -> extract }}
                            </div>
                          </div>
                        </div>
                        <br>
                        <h4 class="border-bottom">Descripcion</h4>
                        <div class="container" style="margin-top:3%">
                          <div class="card">
                            <div class="card-body">
                                {{ $product -> description }}
                            </div>
                          </div>
                        </div>
          
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="container" style="margin-top:20%">
                  <div  class="card">
                    <div class="card-body">
                      <h4><strong>Stock Limitado</strong></h4>
                      <h5>Costo : S/.{{ number_format($product -> price,2) }}</h5>
                      <h5>Envío : S/.0.00</h5>
                      <h4>Total: S/.{{ number_format($product -> price,2) }}</h4>
                    </div>
                  </div>
                  <br>
                  <a href="#"><button class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modal1">AGREGAR AL CARRITO</button></a>
                  <br>
                  <a href=""><button class="btn btn-success btn-block">COMPRAR</button></a>
                </div>
              </div>
          </div>
      </div>
      <br>
      <br>
          <div style="max-width: 82%;" class="container">
            <h6 class="display-4">Comentarios</h6>
            <form action="{{ action('CommentController@store', ['product_id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div>
                  <label for="content">{{ __('Añadir comentario') }}</label>
                  <textarea class="form-control shadow-lg" id="content" name="content" rows="3"></textarea>
                </div>
                <br>
                <div class="container">
                  <div class="row">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
                    </form>
                      @foreach ($product->comments as $comment)
                        <div class="card mt-3">
                          <div class="card-body">
                            <h5 class="card-title">{{ $comment->user->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->toFormattedDateString() }}</h6>
                            <p class="card-text">{{ $comment->content }}</p>
                          </div>
                        </div>    
                      @endforeach
                      <br>
                <br>
          </div>


          <!---------------------------- Modal --------------------------------------->

        
          <div class="container">
            <div class="modal" tabindex="-1" id="modal1">
              <div class="modal-dialog bg-dark">
                <div class="modal-content bg-dark">
                  <div class="modal-body bg-dark text-white">
                    <button class="close text-white" data-dismiss="modal">&times;</button>
                    <div class="container bg-dark">
                      <div class="row">
                        <div class="col-md-5">
                          <img class="img-fluid" src="{{ asset('images/aqua.jpg') }}">
                        </div>
                        <div class="col-md-7 text-white">
                          <h4 class="">Este elemento fue agregado exitosamente al carrito</h4>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                         <a href="{{ route('cart-show')}}"> <button class="btn btn-success">Ir al carrito</button></a>
                        </div>
                        <div class="col-md-6">
                          <a href="{{ route('home') }}"><button class="btn btn-success">Ir a la Pagina principal</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <script>  
              $(document).ready(function(){
                $('#modal1').modal('show');
              });
           </script>
                
@endsection