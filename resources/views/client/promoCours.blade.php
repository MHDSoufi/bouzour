@extends('layout.promo_layout')
@section('title', 'En cours')
@section('css')
@parent
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
</style>
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
<div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="margin-bottom: 10px;">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@stop