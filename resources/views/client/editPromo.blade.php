@extends('layout.principal')

@section('title', $promo->nom_promo)

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/glider.min.css') }}">
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
</style>
@stop

@section('menu')
	@include('partials.menu', ['Background' => "#fff", "fixed" => true])
@stop

@section('content')
<div class="parallax">
	<h2 class="titrePage">{{$promo->nom_promo}}</h2>
</div>
<div class="container">	
	<div class="row">	
		<div class="row-6">

			 <!--Carousel Wrapper-->
    		<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      <!--Slides-->
      		<div class="carousel-inner" role="listbox">
      			@foreach ($images as $image)      			
        			<div class="carousel-item {{($loop->first) ? 'active' : ''}}">
          				<img class="d-block w-100" src="{{asset('/images/promotions/'.$promo->nom_promo.'/'.$image->lien)}}" alt="First slide">
        			</div>        
        		@endforeach
      		</div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
         <!--/.Controls-->  
         <ol class="carousel-indicators" style="margin-top: 50px;">
      		<div class="glider-contain multiple">
      		<button class="glider-prev">
    				<i class="fa fa-chevron-left"></i>
 			</button>		
      		
      			
      			<div class="glider glider-persp" id="glider-persp">
        		@foreach ($images as $image)         	 
        			<li data-target="#carousel-thumb" data-slide-to="{{$loop->index}}"> <img  class="thumb" src="{{asset('/images/promotions/'.$promo->nom_promo.'/'.$image->lien)}}"
            		class="img-fluid"></li>
        		@endforeach
        		</div>  		
      		
      		<button class="glider-next">
    				<i class="fa fa-chevron-right"></i>
  			</button>
    		</div> 
    	</ol>         
    </div>
		</div>
		<div class="row-6">
			
		</div>
	</div>
</div>	
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
 </script>
 @stop