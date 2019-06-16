@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
      <div class="col-md-12">
         <div id="carouselEducaCodigo" class="carousel slide" data-ride="carousel">

             <ol class="carousel-indicators">
                 <li data-target="#carouselEducaCodigo" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselEducaCodigo" data-slide-to="1"></li>
                 <li data-target="#carouselEducaCodigo" data-slide-to="2"></li>
             </ol>

             <div class="carousel-inner">

                 <div class="carousel-item active">
                     <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="Primer Slide">
                     <div class="carousel-caption d-none d-md-block">
                         <h3>Primer Slide</h3>
                         <p>Text Ejemplo Primer Slide</p>
                     </div>
                 </div>

                 <div class="carousel-item">
                     <img class="d-block w-100" src="{{ asset('images/2.jpg') }}" alt="Segundo Slide">
                     <div class="carousel-caption d-none d-md-block">
                         <h3>Segundo Slide</h3>
                         <p>Text Ejemplo Segundo Slide</p>
                     </div>
                 </div>

                 <div class="carousel-item">
                     <img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="Tercer Slide">
                     <div class="carousel-caption d-none d-md-block">
                         <h3>Tercer Slide</h3>
                         <p>Text Ejemplo Tercer Slide</p>
                     </div>
                 </div>

             </div>

             <a href="#carouselEducaCodigo" class="carousel-control-prev" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>

             <a href="#carouselEducaCodigo" class="carousel-control-next" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>

         </div>
      </div>
   </div>
   </div>
   
   <div class="container">
      <br>
      <div class="border-bottom shadow-lg">
         <h4 class="font-weight-light">Nuevos libros llegan a nuestras bibliotecas <a class="small" style="color: orange" href="">Ver mas</a></h4>
      </div>
      <br>
      <div class="row justify-content-center">
      @foreach ( $products as $product)
         <div class="col-md-3 py-3">
            <div class="card">
               <div class="text-center card-body" >
                  <a href="{{ route('product-detail', $product -> slug) }}"><img src="{{ asset('images/'.$product -> image) }}"  width="189px" height="100%" class="img-fluid" /></a>
               </div>
               <div class="card-header" style="padding: 2%; height:190px;">
                  <p>{{ $product -> name }}</p>
                  <s>S/.{{ number_format($product -> price,2) }}</s> &nbsp -25%
                  <p><strong>S/.{{ number_format($product -> price,2) }}</strong></p>
                  <p><strong style="color: red">S/.{{ number_format($product -> price,2) }}</strong> &nbsp <img src="{{ asset('images/tarjeta.jpg') }}" width="50px" height="20%" class="img-fluid" /></p>
               </div>
            </div>
         </div>
         
      @endforeach
      </div>
   </div>
@endsection


   

