@extends('layout.principal')
@section('title', 'Contact')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
@stop

@section('menu')
	@include('partials.menu', ['Background' => "#fff", "fixed" => true])
@stop

@section('content')
<div class="parallaxContact">
	<h2 class="titreContact">Contact</h2>
</div>
<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
  		<li class="nav-item">
    		<a class="nav-link active" id="oran-tab" data-toggle="tab" href="#oran" role="tab" aria-controls="oran" aria-selected="true">Oran</a>
 		 </li>
  		<li class="nav-item">
   			<a class="nav-link" id="mosta-tab" data-toggle="tab" href="#mosta" role="tab" aria-controls="mosta" aria-selected="false">Mostaganem</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" id="chlef-tab" data-toggle="tab" href="#chlef" role="tab" aria-controls="chlef" aria-selected="false">Chlef</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" id="tel-tab" data-toggle="tab" href="#tel" role="tab" aria-controls="tel" aria-selected="false">Tlemcen</a>
  		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
  		<div class="tab-pane fade show active" id="oran" role="tabpanel" aria-labelledby="home-tab">
  			<div class="row">
  				<div class="col-md-6">
  					<img class="img-contact" src="storage/contact/oran.jpg">
  				</div>
  				<div class="col-md-6">
  					<div id="mapOran"></div>
  					<div class="coordone">
  						<a href="https://www.facebook.com/bouzour.promotion.immobiliere"><i class="fa fa-facebook-official" style="color: #f7941e;margin-right: 10px;" aria-hidden="true"></i><span>bouzour.promotion.immobiliere</span></a><br>
  						<span><i class="fa fa-mobile" style="color: #f7941e;margin-right: 10px;font-size: 40px;" aria-hidden="true"></i>041 668 012 - 0770 508 759 - 0770 244 666 </span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="tab-pane fade" id="mosta" role="tabpanel" aria-labelledby="mosta-tab">
  			<div class="row">
  				<div class="col-md-6">
  					<img class="img-contact" src="storage/contact/Mostaganem.jpg">
  				</div>
  				<div class="col-md-6">
  					<div id="mapMosta"></div>
  					<div class="coordone">
  						<a href="https://www.facebook.com/bouzour.promotion.immobiliere"><i class="fa fa-facebook-official" style="color: #f7941e;margin-right: 10px;" aria-hidden="true"></i><span>bouzour.promotion.immobiliere</span></a><br>
  						<span><i class="fa fa-mobile" style="color: #f7941e;margin-right: 10px;font-size: 40px;" aria-hidden="true"></i>045 434 153</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="tab-pane fade" id="chlef" role="tabpanel" aria-labelledby="chlef-tab">
  			<div class="row">
  				<div class="col-md-6">
  					<img class="img-contact" src="storage/contact/Chlef.jpg">
  				</div>
  				<div class="col-md-6">
  					<div id="mapChlef"></div>
  					<div class="coordone">
  						<a href="https://www.facebook.com/bouzour.promotion.immobiliere"><i class="fa fa-facebook-official" style="color: #f7941e;margin-right: 10px;" aria-hidden="true"></i><span>bouzour.promotion.immobiliere</span></a><br>
  						<span><i class="fa fa-mobile" style="color: #f7941e;margin-right: 10px;font-size: 40px;" aria-hidden="true"></i>0770 244 664 / 0770 389 049</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="tab-pane fade" id="tel" role="tabpanel" aria-labelledby="tel-tab">
  			<div class="row">
  				<div class="col-md-6">
  					<img class="img-contact" src="storage/contact/Tlemcen.jpg">
  				</div>
  				<div class="col-md-6">
  					<div id="mapTel"></div>
  					<div class="coordone">
  						<a href="https://www.facebook.com/bouzour.promotion.immobiliere"><i class="fa fa-facebook-official" style="color: #f7941e;margin-right: 10px;" aria-hidden="true"></i><span>bouzour.promotion.immobiliere</span></a><br>
  						<span><i class="fa fa-mobile" style="color: #f7941e;margin-right: 10px;font-size: 40px;" aria-hidden="true"></i>0770 133 916 – 0770 370 962 / 043 569 439</span>
  					</div>
  				</div>
  			</div>
  		</div>
	</div>
</div>
@stop
@section('footer')
  @include('partials.footer')
@stop
@section('js')
@parent
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script type="text/javascript">
	var mapOran = L.map('mapOran').setView([35.913887, 0.145941], 8);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mapOran);
 marker = L.marker([35.704702, -0.557890]);
 mapOran.addLayer(marker);
 //Mostaganem
 var mapMosta = L.map('mapMosta').setView([35.913887, 0.145941], 8);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mapMosta);
 marker = L.marker([35.913887, 0.145941]);
 mapMosta.addLayer(marker);
 //Chlef
  var mapChlef = L.map('mapChlef').setView([35.913887, 0.145941], 8);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mapChlef);
 marker = L.marker([36.153676, 1.324959]);
 mapChlef.addLayer(marker);
 //tlemcen
  var mapTel = L.map('mapTel').setView([35.913887, 0.145941], 8);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mapTel);
 marker = L.marker([34.918754, -1.351002]);
 mapTel.addLayer(marker);
</script>
@stop