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
<link rel="stylesheet" type="text/css" href="{{ asset('css/glider.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/acceuil.css') }}">
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
<section id="promo_en_cours">

  <div class="glider-contain multiple">
  <h2 class="titre_en_cours">Promotion en cours</h2>

  <button class="glider-prev">
    <i class="fa fa-chevron-left"></i>
  </button>
  <div class="glider glider-persp" id="glider-persp">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo1.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>Residence HEY BENSOUNA</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Chlef dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5>PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Tlemcen dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo3.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>Promotion Immobiliere Oran - Canastel</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo4.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE  ELYASMINE BELGAID ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo5.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE  ZOHOUR PEPINIERE ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{url('images/slider/promo7.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE ELSALEM BIR EL DJIR ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="" class="link_cours">Voir Détail</a>
      </div>
    </div>

  </div>
  <button class="glider-next">
    <i class="fa fa-chevron-right"></i>
  </button>
</div>
  
</section>

<section id="presentation">
  <div class="presente">
    <h1>EURL BOUZOUR</h1>
    <h3>Qui somme nous?</h3>
    <p class="txtPara"><strong>PROMOTION IMMOBILIERE EURL BOUZOUR</strong> Créer en 1995 avec plus de 20 ans expérience dans le domaine de la construction, conçoit et réalise des projets et des ensemble immobiliers haut standing qualité et moderne pour une clientèle exigeante.
    Nous pouvons dire que La construction est un domaine qui nous connait bien ! 
    Nos promotions sont implantés dans de nombreuses wilayas</p>
    <div class="parallaxPresente">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h4>
            <p class="counter-count">20</p>
            <i class="fa fa-briefcase" style="font-size: 40px;color: #f7941e;font-weight: bold;margin-right: -50px;"></i>
            <p class="border-title"></p>
          </h4>
          <p class="expTxt"> ans d'experiences</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4>
            <p class="counter-count">4000</p>
            <i class="fa fa-key" id="logement" ></i>
            <p class="border-title"></p>
          </h4>
          <p class="logTxt"> Logements remis</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4>
            <p class="counter-count">400</p>
            <i class="fa fa-user" style="font-size: 40px;color: #f7941e;font-weight: bold;margin-left: 20px;"></i>
            <p class="border-title"></p>
          </h4>
          <p class="empTxt"> Emplois creés</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4>
            <p class="counter-count">15</p>
            <i class="fa fa-building" style="font-size: 40px;color: #f7941e;font-weight: bold;margin-right: -50px;"></i>
            <p class="border-title"></p>
          </h4>
          <p class="livre"> Projets livrés</p>
        </div>
      </div>
    </div>
  </div>
  
</section>


@stop
@section('js')
@parent
<script type="text/javascript" src="{{ asset('js/glider.min.js') }}"></script>
<script type="text/javascript">
  new Glider(document.getElementById('glider-persp'),{
     slidesToShow: 3,
    slidesToScroll: 1,
    draggable: true,
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
  });
  $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
@stop