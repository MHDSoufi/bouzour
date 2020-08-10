@extends('layout.promo_layout')
@section('title', 'En cours')
@section('css')
@parent
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
<style type="text/css">
	/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #f7943e;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #f7941e; 
}
.cardPromo:link{
	text-decoration: none;
	color: #000;
}
.image{
	float: left;
	width: 240px;
}
.card-img{
	width: 100%;
	height: 100%;
}
.text{
	float: right;
	width: 350px;
}
.card{
	cursor: pointer;
}
#mymap { height: 470px; margin-left: 20px;}
</style>
@stop
@section('map')
 <div id="mymap"></div>
@stop
@section('liste')
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Residence HEY BENSOUNA</h5>
  <div class="card-body">
  	<div class="image">
  		<img class="card-img" src="{{url('images/slider/promo1.jpg')}}" alt="Card image cap">
  	</div>
  	<div class="text">
  		<h5 class="card-title">Chlef</h5>
	    <p class="card-text">Si vous souhaitez acquérir un appartement à Chlef dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville..</p>
  	</div>
    
  </div>
</div>
</a>
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN</h5>
  <div class="card-body">
    <div class="image">
      <img class="card-img" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
    </div>
    <div class="text">
      <h5 class="card-title">Tlemcen</h5>
      <p class="card-text">Si vous souhaitez acquérir un appartement à Tlemcen dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
    </div>
    
  </div>
</div>
</a>
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Promotion Immobiliere Oran - Canastel</h5>
  <div class="card-body">
    <div class="image">
      <img class="card-img" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
    </div>
    <div class="text">
      <h5 class="card-title">Oran</h5>
      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
    </div>
    
  </div>
</div>
</a>
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">RESIDENCE  ELYASMINE BELGAID ORAN</h5>
  <div class="card-body">
    <div class="image">
      <img class="card-img" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
    </div>
    <div class="text">
      <h5 class="card-title">Oran</h5>
      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
    </div>
    
  </div>
</div>
</a>
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">RESIDENCE  ZOHOUR PEPINIERE ORAN</h5>
  <div class="card-body">
    <div class="image">
      <img class="card-img" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
    </div>
    <div class="text">
      <h5 class="card-title">Oran</h5>
      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
    </div>
    
  </div>
</div>
</a>
<a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">RESIDENCE ELSALEM BIR EL DJIR ORAN</h5>
  <div class="card-body">
    <div class="image">
      <img class="card-img" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
    </div>
    <div class="text">
      <h5 class="card-title">Oran</h5>
      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
    </div>
    
  </div>
</div>
</a>

@stop

@section('js')
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script type="text/javascript">
  var mymap = L.map('mymap').setView([35.913887, 0.145941], 7);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
</script>
@stop