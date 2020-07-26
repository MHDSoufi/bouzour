@extends('layout.principal')

@section('title', 'Acceuil')

@section('css')
@parent
<style type="text/css">
	.btn-warning {
						
                        color: #fff;
                        font-family: 'Fira Sans', sans-serif;
                        font-weight: bold;
                        background-color: #f7941e;
                        min-width: 120px;
                    }
	.w-100 {
                        height: 100vh!important;
       }
</style>
@stop

@section('menu')
	@include('partials.menu', ['Background' => "transparent", "fixed" => true])
@stop

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('images/slider/promo1.jpg')}} ">
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">Residence HEY BENSOUNA</a>
  	  </div>   
	
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo2.png')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN</a>
  	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo3.jpg')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">Promotion Immobiliere Oran - Canastel</a>
  	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo4.jpg')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">RESIDENCE  ELYASMINE BELGAID ORAN</a>
  	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo5.jpg')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">RESIDENCE  ZOHOUR PEPINIERE ORAN</a>
  	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo6.jpg')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">RESIDENCE ELSALEM BIR EL DJIR ORAN</a>
  	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider/promo7.jpg')}} " >
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-warning" href="/edit" role="button">RESIDENCE ENASSIM BELGAID ORAN</a>
  	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
	
</div>
@stop