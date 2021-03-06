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
#promo{padding: 20px;max-width: 1364px; margin-left: 100px;}
#promo .card{
  margin-right: 10px;
}
.link_cours{
  max-width: 200px;
  position: relative;
  color: #f7941e;
  height: 80px;
  font-size: 20px;
  padding: 10px;
  left: 25%;
  margin-top: 20px;
  vertical-align: 80px;
  border: 2px solid #f7941e;
  transition: all 0.5s ease;
}

.link_cours:hover{  
  text-decoration: none;
  background-color: #f7941e; 
  color: #fff;
}
 @media only screen and (max-width: 800px) {

     #cartePromo_btn{display: none;}
     #carte_btn .fa-map-marker{margin-left: -20px!important;}
     #carte_btn p{margin-left: -20px;}
     #promo_btn .fa-building{
        position: absolute;margin-top: -32px;margin-left: 30px;
      }
      #promo_btn p{
         position: absolute;margin-top: -3px; margin-left: 30px;
      }
      #retour_btn  {display: block;}
      #retour_btn .fa-home{position: absolute;margin-top: -60px;right: 2%;color: #f7941e;}
      #listepromo{display: none;}
      #promo{margin-left: 20px;}
      #promo .card{
        margin-right: 10px;
        margin-bottom: 20px;
      }
      .btn-warning{
                margin-top: 10px;
            }
      .hiden{height: 0px ; display: none;}
      #btn_filter{display: block;}
      .show{display: block;height: 300px;}

}

</style>
@stop
@section('content')
  @switch($vue)
      @case("carte")
        <div id="mymap"></div>
      @break
      @case("promo")
        <div id="promo">
          <div class="row">
            
              <div class="card" style="width: 18rem;" id="promo_card_chlef">
                  <img class="card-img-top" src="{{url('images/slider/promo1.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5>Residence HEY BENSOUNA</h5>
                    <p class="card-text">Si vous souhaitez acquérir un appartement à Chlef dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                    <a href="{{ route('edit', '1')}}" class="link_cours">Voir Détail</a>
                  </div>
              </div>
          <div class="card" style="width: 18rem;" id="promo_card_tel">
              <img class="card-img-top" src="{{url('images/slider/promo2.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5>PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN</h5>
                <p class="card-text">Si vous souhaitez acquérir un appartement à Tlemcen dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                <a href="{{ route('edit', '9')}}" class="link_cours">Voir Détail</a>
              </div>
          </div>
          <div class="card" style="width: 18rem;" id="promo_card_oran">
      <img class="card-img-top" src="{{url('images/slider/promo3.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>Promotion Immobiliere Oran - Canastel</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="{{ route('edit', '4')}}" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="promo_card_oran2">
      <img class="card-img-top" src="{{url('images/slider/promo4.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE  ELYASMINE BELGAID ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="{{ route('edit', '5')}}" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="promo_card_oran3">
      <img class="card-img-top" src="{{url('images/slider/promo5.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE  ZOHOUR PEPINIERE ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="{{ route('edit', '6')}}" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="promo_card_oran4">
      <img class="card-img-top" src="{{url('images/slider/promo6.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE ELSALEM BIR EL DJIR ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="{{ route('edit', '7')}}" class="link_cours">Voir Détail</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" id="promo_card_oran5">
      <img class="card-img-top" src="{{url('images/slider/promo7.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5>RESIDENCE ENASSIM ORAN</h5>
        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
        <a href="{{ route('edit', '8')}}" class="link_cours">Voir Détail</a>
      </div>
    </div>
      </div>
      </div>
      @break
      @default
        <div class="row" style="max-width: 1364px;">
          <div class="col-md-6">
            <div id="mymap"></div>
          </div>
          <div class="col-md-6" id="listepromo">
            <div id="promo_chlef">
                <a class="cardPromo" href="{{ route('edit', '1')}}"><div class="card" style="margin-bottom: 10px;">
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
            </div>
            <div id="promo_tel">
                <a class="cardPromo" href="{{ route('edit', '9')}}"><div class="card" style="margin-bottom: 10px;">
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
            </div>
            <div id="promo_oran">
                <a class="cardPromo" href="{{ route('edit', '4')}}"><div class="card" style="margin-bottom: 10px;">
                  <h5 class="card-header">Promotion Immobiliere Oran - Canastel</h5>
                  <div class="card-body">
                    <div class="image">
                      <img class="card-img" src="{{url('images/slider/promo3.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="text">
                      <h5 class="card-title">Oran</h5>
                      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                    </div>
                    
                  </div>
                </div>
                </a>
                <a class="cardPromo" href="{{ route('edit', '5')}}"><div class="card" style="margin-bottom: 10px;">
                  <h5 class="card-header">RESIDENCE  ELYASMINE BELGAID ORAN</h5>
                  <div class="card-body">
                    <div class="image">
                      <img class="card-img" src="{{url('images/slider/promo4.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="text">
                      <h5 class="card-title">Oran</h5>
                      <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                    </div>
                    
                  </div> 
                </div>
                </a>
                <a class="cardPromo" href="{{ route('edit', '6')}}"><div class="card" style="margin-bottom: 10px;">
                    <h5 class="card-header">RESIDENCE  ZOHOUR PEPINIERE ORAN</h5>
                    <div class="card-body">
                      <div class="image">
                        <img class="card-img" src="{{url('images/slider/promo5.jpg')}}" alt="Card image cap">
                      </div>
                      <div class="text">
                        <h5 class="card-title">Oran</h5>
                        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                      </div>
                      
                    </div>
                  </div>
                </a>
                <a class="cardPromo" href="{{ route('edit', '7')}}"><div class="card" style="margin-bottom: 10px;">
                    <h5 class="card-header">RESIDENCE ELSALEM BIR EL DJIR ORAN</h5>
                    <div class="card-body">
                      <div class="image">
                        <img class="card-img" src="{{url('images/slider/promo6.jpg')}}" alt="Card image cap">
                      </div>
                      <div class="text">
                        <h5 class="card-title">Oran</h5>
                        <p class="card-text">Si vous souhaitez acquérir un appartement à Oran dans un quartier stratégique au sein de l’un des quartiers résidentiels les plus prestigieux de la ville...</p>
                      </div>
                      
                    </div>
                  </div>
                </a>
                <a class="cardPromo" href="{{ route('edit', '8')}}"><div class="card" style="margin-bottom: 10px;">
                    <h5 class="card-header">RESIDENCE ENASSIM BIR EL DJIR ORAN</h5>
                    <div class="card-body">
                      <div class="image">
                        <img class="card-img" src="{{url('images/slider/promo7.jpg')}}" alt="Card image cap">
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
      </div>
  @endswitch
 
@stop

@section('js')
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script type="text/javascript">
if (document.getElementById("mymap")) {
var mymap = L.map('mymap').setView([35.913887, 0.145941], 7);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
var promos = [
  {'lng' : '34.923969' ,'lat': '-1.343349', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '9')}}'><b>PROJET 160 LOGTS LPA BOUDJLIDA</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo1.jpg')}}\" ></a>"},
  {'lng' : '36.153676','lat' : '1.324959', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '1')}}'><b>Residence Bensouna</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo2.png')}}\" ></a>"},
  {'lng' : '35.744129','lat' : '-0.536634', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '5')}}'><b>RESIDENCE  ELYASMINE BELGAID</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo3.jpg')}}\" ></a>"},
  {'lng' : '35.713242', 'lat' : '-0.568674', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '6')}}'><b>PROJET RESIDENCE  ZOHOUR PEPINIERE</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo4.jpg')}}\" ></a><br/><a class=\"link-pop\" href='{{ route('edit', '7')}}'><b>RESIDENCE ELSALEM BIR EL DJIR</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo5.jpg')}}\" ></a>"},
  {'lng' : '35.740123','lat': '-0.548821', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '8')}}'><b>RESIDENCE ENASSIM BELGAID</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo6.jpg')}}\" ></a>"},
  {'lng' : '35.751188','lat': '-0.553240', 'PopUp' : "<a class=\"link-pop\" href='{{ route('edit', '4')}}'><b>RESIDENCE Canastel</b><br><img class=\"img-pop\"  src=\"{{url('images/slider/promo6.jpg')}}\" ></a>"},
];
var layerTable = [];
var oran = document.getElementById("promo_oran"),
    tel = document.getElementById("promo_tel"),
    chlef = document.getElementById("promo_chlef");
var layerAll = L.layerGroup().addTo(mymap);
for (var i = 0; i < promos.length; i++) {
  marker = L.marker([promos[i].lng, promos[i].lat]);
  marker.bindPopup('"'+promos[i].PopUp+'"');
  layerAll.addLayer(marker);
}
layerTable.push(layerAll);
var layerOran = L.layerGroup();
for (var i = promos.length - 1; i >= 2; i--) {
  marker = L.marker([promos[i].lng, promos[i].lat]);
  marker.bindPopup('"'+promos[i].PopUp+'"');
  layerOran.addLayer(marker);
}
layerTable.push(layerOran);
var layerChlef = L.layerGroup();
markerCh = L.marker([promos[1].lng, promos[1].lat]);
markerCh.bindPopup('"'+promos[1].PopUp+'"');
layerChlef.addLayer(markerCh);
layerTable.push(layerChlef);
var layerTel = L.layerGroup();
markerT = L.marker([promos[0].lng, promos[0].lat]);
markerT.bindPopup('"'+promos[0].PopUp+'"');
layerTel.addLayer(markerT);
layerTable.push(layerTel);
document.getElementById("lieu").addEventListener('change', (event) =>{  
  viderLayer(layerTable);

  switch (event.target.value){
    case "Oran":
      layerOran.addTo(mymap);
      if (oran !== null ) {
       oran.style.display = "block";
      }
    break;
    case "Chlef":
      layerChlef.addTo(mymap);
      if (chlef !== null ) {
        chlef.style.display = "block";
      }
    break;
    case "Tlemcen":
      layerTel.addTo(mymap);
      if (tel !== null ) {
        tel.style.display = "block";
      }
    break;
    case "Mostaganem":
      viderLayer(layerTable);
    break;
    default:
      layerAll.addTo(mymap);
      if (oran !== null ) {
        oran.style.display = "block";
        chlef.style.display = "block";
        tel.style.display = "block";
      }
    break;
  }
});
function viderLayer (table){
  if (oran !== null ) {
    oran.style.display = "none";
    chlef.style.display = "none";
    tel.style.display = "none";
  }  
  for (var i = 0; i < table.length; i++) {
    mymap.removeLayer(table[i]);
  }
}
}else{
  var oran = document.getElementById("promo_card_oran"),
      oran2 = document.getElementById("promo_card_oran2"),
      oran3 = document.getElementById("promo_card_oran3"),
      oran4 = document.getElementById("promo_card_oran4"),
      oran5 = document.getElementById("promo_card_oran5"),
      tel = document.getElementById("promo_card_tel"),
      chlef = document.getElementById("promo_card_chlef");

  document.getElementById("lieu").addEventListener('change', (event) =>{  
  oran.style.display = oran2.style.display = oran3.style.display = oran4.style.display = oran5.style.display = tel.style.display = chlef.style.display = "none" ;

  switch (event.target.value){
    case "Oran":
       oran.style.display = oran2.style.display = oran3.style.display = oran4.style.display = oran5.style.display = "block";
    break;
    case "Chlef":
        chlef.style.display = "block";
    break;
    case "Tlemcen":
        tel.style.display = "block";
    break;
    case "Mostaganem":
     oran.style.display = oran2.style.display = oran3.style.display = oran4.style.display = oran5.style.display = tel.style.display = chlef.style.display = "none" ;
    break;
    default:
        oran.style.display = oran2.style.display = oran3.style.display = oran4.style.display = oran5.style.display = "block";
        chlef.style.display = "block";
        tel.style.display = "block";
    break;
  }
});
}
document.getElementById("btn_filter").addEventListener('click', function(){
  var filter = document.getElementById("filter");
  if(filter.offsetHeight === 0 ){
    filter.classList.toggle("show");
  }else{
    filter.classList.remove("show");
  }
});
</script>
@stop