<!DOCTYPE html>
<html>
<head>
	<title>Liste des promotions @yield('title')</title>
	@section('css')
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
		<style type="text/css">
			body{font-family: 'Fira Sans', sans-serif;}
			.container-fluid{
				margin:0;
				padding: 0;
        padding-right: 20px;
			}
			#map .nav-item{
				font-size: 30px;
				display: inline-block;
				margin-right: 20px;
			}
            #map .nav-item p {
                font-size: 15px;    
                font-weight: bold;
            }
			.active{
				color: #f7941e;
			}
            #retour{
                color: #f7941e;
                padding: 10px;
                border: 2px solid #f7941e;
                transition: all 0.5s ease;
            }
            #retour:hover{
                background-color: #f7941e;
                color: #fff;
            }
            .btn-warning{
                background-color: #f7941e;
                color: #fff;
                margin-top: 31px;
                transition: all 0.5s ease;
            }
            .btn-warning:hover{
                background-color: #f7943e;
                color: #fff;
                font-weight:bold;
            }
           
		</style>
	@show
</head>
<body>
<nav class="navbar navbar-expand-md">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand" href="{{route('Acceuil') }}"><img src="/storage/icons/logo.png" width="120" height="54"></a>
    </div>
    <div class="mx-auto order-0">
    	
    	<ul class="navbar-nav ml-auto" id="map">
        <a href="{{route('promoCour', 'cartePromo')}}">
          <li class="nav-item active">
                <i class="fa fa-map-marker" aria-hidden="true" style="position:absolute;margin-top: 6px;margin-left: 10px; float: left;"></i> <i class="fa fa-building" aria-hidden="true" style="float: right;margin-top: 6px;"></i>
                <p>Carte/Liste</p>
          </li>
        </a>
        <a href="{{route('promoCour', 'carte')}}">
          <li class="nav-item">
                <i class="fa fa-map-marker" aria-hidden="true" style="position:absolute;margin-top: 6px"></i>
                <p style="position: absolute;margin-top: 35px">Carte</p>
          </li>
        </a> 
        <a href="{{route('promoCour' ,'promo')}}">
          <li class="nav-item">
               <i class="fa fa-building" aria-hidden="true" style="position:absolute;margin-top: 6px;margin-left: 30px;"></i>
                <p style="position: absolute;margin-top: 35px; margin-left: 30px;">Liste</p>
          </li>
        </a>    
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" id="retour" href="#"><i class="fa fa-home" aria-hidden="true" style="font-size: 30px;"></i><span>Retour vers l'acceuil</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="margin: 0 auto;">
        <form>
              <div class="form-row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lieu">Où voulez-vous habiter ?</label>
                        <select class="form-control" id="lie">
                          <option>Tous</option>
                          <option>Oran</option>
                          <option>Chlef</option>
                          <option>Mostaganem</option>
                          <option>Tlemcen</option>
                        </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="appart">Dans quel type d'appartement?</label>
                        <select class="form-control" id="appart">
                          <option>Tous</option>
                          <option>F2</option>
                          <option>F3</option>
                          <option>F4</option>
                          <option>F5</option>
                        </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="appart">Nos résidence</label>
                        <select class="form-control" id="appart">
                          <option>Tous</option>
                          <option>en cours</option>
                          <option>Livré</option>
                        </select>
                  </div>
                </div>
                <div class="col-md-2">
                <div class="form-group">
                  <button class="btn btn-warning" type="submit">Rénitialiser le filtre</button>
                </div>
                </div>
              </div>
        </form>
</div>
<div class="container-fluid">
  @yield('content')
</div>

@section('js')
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@show

</body>
</html>