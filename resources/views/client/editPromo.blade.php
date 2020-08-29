@extends('layout.principal')

@section('title', $promo->nom_promo)

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
<link href="https://lowercolumbia.edu/_resources/plugins/royal-slider/templates/assets/royalslider/royalslider.css" rel="stylesheet">
<link href="https://lowercolumbia.edu/_resources/plugins/royal-slider/templates/assets/royalslider/skins/default/rs-default.css" rel="stylesheet">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
<style type="text/css">
	.parallax{
	 /* The image used */
	  background-image: url("{{asset('/images/promotions/'.$promo->nom_promo.'/'.$promo->coverImage)}}");
	  width: 100%;
	  /* Set a specific height */
	  min-height: 400px; 

	  /* Create the parallax scrolling effect */
	  background-attachment: fixed;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  margin-bottom: 10px;
	}
  .rsImg .rsMainSlideImage{
    width: 90%!important;
    height: 80%!important;
  }
  #mymap { height: 470px; margin: 40px auto;width: 80%;} 

</style>
@stop

@section('menu')
	@include('partials.menu', ['Background' => "#fff", "fixed" => true])
@stop

@section('content')
<div class="parallax">
	<h2 class="titrePage">{{$promo->nom_promo}}</h2>
</div>
<div class="container-fluid" id="container-mob">	
	<div class="row" style="max-width: 1364px;padding: 20px;">	
		<div class="col-md-6">
      <div id="gallery-1" class="royalSlider rsDefault">
          @foreach ($images as $image)
          <div class="rsContent">
            <img class="rsImg" src="{{asset('/images/promotions/'.$promo->nom_promo.'/'.$image->lien)}}"  />
        <div class="rsTmb">          
          <a class="rsImg bugaga" data-rsw="400" data-rsh="500" data-rsbigimg="" href="{{asset('/images/promotions/'.$promo->nom_promo.'/'.$image->lien)}}"><img  class="rsTmb" src="{{asset('/images/promotions/'.$promo->nom_promo.'/'.$image->lien)}}"  ></a>
        </div>
      </div>
          @endforeach
      </div>
		</div>
		<div class="col-md-6" id="descript">
			<div class="name-promo">{{$promo->nom_promo}}</div>
      <div class="adresse"><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>{{$promo->wilaya->intitulet}}</div>
      <div class="livre">Livraison prévue: 3éme trimestre 2022</div>
      <div class="button">
        <a class="btn btn-primary btn-lg btn-block" href="#offres" >Voir nos offres</a>
        <a class="btn btn-primary btn-lg btn-block" href="#contact">Demander un devis</a>
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" >Voir l'emplacement</button>
      </div>
		</div>
	</div>
</div>
<div class="container-fluid">
   <div class="row" style="max-width: 1364px;padding: 20px;">
    <div class="discript">{{$promo->description}}</div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="title-comod">Comoditées offerts par la résidence</div>
  <div class="row" style="max-width: 1364px;padding: 20px;">
    @foreach($promo->comodites as $comod)
    <div class="col-md-3" style="margin-bottom: 10px;">
      <div class="comod"><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i>{{$comod->intitulet}}</div>
    </div>
    @endforeach
  </div>  
</div>
<div class="container-fluid">
  <div class="title-comod">Avantage de la promotion</div>
    <div class="avantage">      
      <p><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i> Garantie de maintenance de 2 ans à compter de la date de livraison
      </p>
      <p><i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i>Le projet dispose de magasins au rez-de-chaussée avec diverses activités commerciales.
      </p>
    </div>
</div>
<hr>
<section id="offres">
  <div class="container">
    <h2>Nos Offres</h2>
    <table class="table">
  <thead class="thead-bouzour">
    <tr>
      <th scope="col">Typologie</th>
      <th scope="col">Surface (à partir de)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>F3</td>
      <td>76m²</td>
    </tr>
    <tr>
      <td>F4</td>
      <td>100m²</td>
    </tr>
    <tr>
      <td>F5</td>
      <td>128m²</td>
    </tr>
  </tbody>
</table>

  </div>
</section>
<hr>
<div class="container-fluid">
  <div class="title-comod">Modalité de paiement</div>
    <div class="avantage">      
      <p><strong>-</strong>Vous pouvez bénéficier d'un prêt bancaire de 1% même pour les émigrés
      </p>
      <p><strong>-</strong>La possibilité de financer le montant total de 100% du prêt bancaire
      </p>
      <p><strong>-</strong>La possibilité de payer en plusieurs fois avec un échéancier et sans intérêt
      </p>
      <p><strong>-</strong>Remises exceptionnelles pour le paiement du montant total (réduction de 10 000 DZD / m²) ou de la moitié du montant (réduction de 5 000 DZD / m²)
      </p>
    </div>
</div>
<hr>
<section id="contact">
  <div class="container-fluid">
    <h2 style="margin-left: 15px;">Demandez un devis</h2>
    <div class="col-md-8 offset-2">
      <form>
        <div class="form-group">
          <label for="email">E-mail<span style="color: red;">*</span></label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrer votre email">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom<span style="color: red;">*</span></label>
          <input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" placeholder="Enter votre adresse Prénom">
        </div>
        <div class="form-group">
          <label for="nom">Nom<span style="color: red;">*</span></label>
          <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrer votre nom">
        </div>
       <div class="form-group">
          <label for="phone">Phone<span style="color: red;">*</span></label>
          <div class="row"><div class="col-md-1"><span>+213</span></div><div class="col-md-6"> <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Entrer votre Numero de téléphone"></div></div>
      </div>
      <div class="form-group">
        <label for="prof">Profession</label>
          <select class="form-control" id="prof">
            <option>Veuillez selctionner votre profession</option>
            <option>Chef d'entreprise</option>
            <option>Fonctionnaire (état)</option>
            <option>Artisan</option>
            <option>Responsable</option>
            <option>Directeur</option>
            <option>Fonction liberal</option>
            <option>Employer (privé)</option>
            <option>Autre</option>
          </select>
      </div>
      <div class="form-group">        
        <label>Intéressé par (Type de logement)</label>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        F3
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        F4
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        F5
        </label>
      </div>
    </div>
    <div class="form-group">
        <label for="prof">Type de financement</label>
          <select class="form-control" id="prof">
            <option>Veuillez selctionner</option>
            <option>Autofinancement</option>
            <option>Crédit bancaire</option>
            <option>Crédit bancaire islamique</option>
          </select>
      </div>
  <button type="submit" class="btn btn-warning" style="color: #fff;">Soumettre</button>
</form>
    </div>
    
  </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width: 1000px;">
    <div class="modal-content">
    <div id="mymap"></div>
  </div>
  </div>
 
</div>
@stop
@section('footer')
  @include('partials.footer')
@stop

@section('js')
@parent
<script type="text/javascript" src="{{ asset('js/glider.min.js') }}"></script>
<script src="https://lowercolumbia.edu/_resources/plugins/royal-slider/templates/assets/royalslider/jquery.royalslider.min.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
  $('#gallery-1').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 850,
    loop: true,
    imageScaleMode: 'fit-if-smaller',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: false,
    globalCaptionInside: false,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 0
    }
  });
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
var mymap = L.map('mymap').setView([35.713242, -0.568674],6);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiZXVybGJvdXpvdXIiLCJhIjoiY2tjaXd3czRjMWVpZzMzbzg2dWlwd2dncCJ9.VoUQwaU4a0M-WB2knFidSw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
var long = JSON.parse("{{ $promo->longitude }}");
var lnt = JSON.parse("{{ $promo->lontitude }}");
marker = L.marker([long, lnt]);
mymap.addLayer(marker);
 </script>
 @stop