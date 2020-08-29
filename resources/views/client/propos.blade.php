@extends('layout.principal')

@section('title', 'A-Propos')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/propos.css') }}">
@stop

@section('menu')
	@include('partials.menu', ['Background' => "#fff", "fixed" => true])
@stop
@section('content')
<div class="parallax">
	<h2 class="titrePage">Connaître l'EURL BOUZOUR</h2>
</div>
<div class="container">
	<p >PROMOTION IMMOBILIERE EURL BOUZOUR Créer en 1995 avec plus de 20 ans expérience dans le domaine de la construction, conçoit et réalise des projets et des ensemble immobiliers haut standing qualité et moderne pour une clientèle exigeante.</p>
	<strong>Nous pouvons dire que La construction est un domaine qui nous connait bien !</strong>
	<div class="row">
		<div class="col-6">
			<img class="imgRubrique" src="storage/propos/image1.jpg"/>
		</div>
		<div class="col-6">
			<h3>Notre savoir faire</h3>
			<p>L'activité principale de EURL BOUZOUR est la commercialisation de logements, des garages, des services et des locaux en vente sur plan (VSP)
			L’entreprise s’appuie sur la qualité et la maitrise de ses ouvriers pour exceller, dans chacune de ses activités, de la promotion immobilière et les activités annexes. 
			A ce jour la société a déjà réalisé plus de 4000 logements, tous livrés à 100% et dans les délais contractuels.</p>
		</div>
	</div>
</div>
<div class="row offres">
	<div class="col-3">
		<img src="/storage/propos/icone1.png" width="80" height="80" />
		<h6>CONSTRUCTION</h6>
		<p>La construction n’est pas seulement un métier chez EURL BOUZOUR, mais plutôt une passion, de l’expérience, de la compétence et du sérieux</p>
	</div>
	<div class="col-3">
		<img src="/storage/propos/icone2.png" width="80" height="80" />
		<h6>ACCOMPAGNEMENT</h6>
		<p>A chaque étape du processus d’achat de votre appartement, EURL BOUZOUR vous accompagne et vous assiste au travers de ses conseillers clients</p>
	</div>
	<div class="col-3">
		<img src="/storage/propos/icone3.png" width="80" height="80" />
		<h6>CÉLÉRITÉ</h6>
		<p>Livrer les projets dans les délais impartis, tel est le premier engagement de l’entreprise EURL BOUZOUR pour l’acquisition de votre bien.</p>
	</div>
	<div class="col-3">
		<img src="/storage/propos/icone4.png" width="80" height="80" />
		<h6>EVENTAIL</h6>
		<p>De nombreuses années dans le domaine de l’architecture et de la réalisation ont permis à EURL BOUZOUR de proposer un éventail de produits pour ses clients.</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h3>Complexe Touristique ZOUHOUR</h3>
			<p>L’entreprise est aussi connue pour ses projets réalisés dans le domaine du tourisme :
			-Le complexe touristique ZOUHOUR, un hôtels de qualité situé dans la plage la plus connu de Mostaganem « les Sablette » avec 330 lits, des salle de conférence, salle des fêtes restaurent  et piscine</p>
			<button class="btn-outline-warning"><a href="https://www.facebook.com/hotelzouhour/"><i class="fa fa-facebook" aria-hidden="true"></i></a></button>
			<button class="btn-outline-warning"><a href="https://www.facebook.com/hotelzouhour/"><i class="fa fa-globe" aria-hidden="true"></i></a></button>
		</div>
		<div class="col-6">
			<img class="imgRubrique" src="storage/propos/image2.jpg"/>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<img class="imgRubrique" src="storage/propos/image3.jpg"/>
		</div>
		<div class="col-6">
			<h3>Parck d'attraction MOSTALAND</h3>
			<p>L’entreprise est aussi connue pour ses projets réalisés dans le domaine du tourisme :
			-Le complexe touristique ZOUHOUR, un hôtels de qualité situé dans la plage la plus connu de Mostaganem « les Sablette » avec 330 lits, des salle de conférence, salle des fêtes restaurent  et piscine </p>
			<button class="btn-outline-warning"><a href="https://www.facebook.com/MOSTA-LAND-PARC-Dattraction"><i class="fa fa-facebook" aria-hidden="true"></i></a></button>
			<button class="btn-outline-warning"><a href="https://www.mostalandparc.com/"><i class="fa fa-globe" aria-hidden="true"></i></a></button>
		</div>
	</div>
</div>
@stop
@section('footer')
  @include('partials.footer')
@stop