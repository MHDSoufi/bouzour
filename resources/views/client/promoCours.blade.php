@extends('layout.promo_layout')
@section('title', 'En cours')
@section('css')
@parent
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
<style type="text/css">
   #listepromo{
     height: 470px;
     overflow-x: auto;
    }
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
.cardPromo:link, .link-pop:link{
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
.img-pop{width: 200px;height: 180px;}
</style>
@stop
@section('content')
  @switch($vue)
      @case("carte")
        <div id="mymap"></div>
      @break
      @case("promo")
        <div id="promo"></div>
      @break
      @default
        <div class="row" style="max-width: 1364px;">
          <div class="col-md-6">
            <div id="mymap"></div>
          </div>
          <div class="col-md-6" id="listepromo">
            <a class="cardPromo" href="promoDatail"><div class="card" style="margin-bottom: 10px;">
              <h5 class="card-header">Residence HEY BENSOUNA</h5>
              <div class="card-body">
                  <div class="image">
                      <img class="card-img" src="{{url('images/slider/promo1.jpg')}}" alt="Card image cap">
                  </div>
                  <div class="text">
                    <h5 class="card-title">Chlef</h5>
                    <p class="card-text">Si vous souhaitez acquérir un appartement à Chlef dans un        quartier stratégique au sein de l’un des quartiers résidentiels les plus        prestigieux de la ville..</p>
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

          </div>
        </div>
  @endswitch
 
@stop
@section('liste')

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
var marker = L.marker([34.923969, -1.343349]).addTo(mymap);
var marker2 = L.marker([36.153676, 1.324959]).addTo(mymap);
var marker3 = L.marker([35.744129, -0.536634]).addTo(mymap);
var marker4 = L.marker([35.713242, -0.568674]).addTo(mymap);
var marker5 = L.marker([35.740123, -0.548821]).addTo(mymap);
var marker6 = L.marker([35.751188, -0.553240]).addTo(mymap);
marker.bindPopup("<a class=\"link-pop\" href=\"\"><b>PROJET 160 LOGTS LPA BOUDJLIDA</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo1.jpg')}}\" ></a>");
marker2.bindPopup("<a class=\"link-pop\" href=\"\"><b>PROJET 160 LOGTS LPA BOUDJLIDA</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo2.png')}}\" ></a>");
marker3.bindPopup("<a class=\"link-pop\" href=\"\"><b>RESIDENCE  ELYASMINE BELGAID</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo3.jpg')}}\" ></a>");
marker4.bindPopup("<a class=\"link-pop\" href=\"\"><b>PROJET RESIDENCE  ZOHOUR PEPINIERE</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo4.jpg')}}\" ></a><br/><a class=\"link-pop\" href=\"\"><b>RESIDENCE ELSALEM BIR EL DJIR</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo5.jpg')}}\" ></a>");
marker5.bindPopup("<a class=\"link-pop\" href=\"\"><b>RESIDENCE ENASSIM BELGAID</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo6.jpg')}}\" ></a>");
marker6.bindPopup("<a class=\"link-pop\" href=\"\"><b>RESIDENCE Canastel</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo6.jpg')}}\" ></a>");
</script>
@stop