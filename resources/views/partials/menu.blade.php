<style type="text/css">
  nav{
    
    background-color: {{$Background}};

  }
  .navbar{

    transition: all 0.5s ease;
    font-weight: bold;
  }
 
  .navbar-light .navbar-nav .nav-link{
    color: black;
    transition: all 0.4s ease;
  }
  .navbar-light .navbar-nav .nav-link:hover{
    background-color: #f7941e;
    color:#fff;
  }
.mr-auto{
  margin-left: auto!important;
  margin-right: 10px!important;
} 

.scrolling{
  background-color: #fff;

} 


</style>
<nav class="navbar {{ $fixed ? 'fixed-top' : ''}} navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{route('Acceuil') }}"><img src="/storage/icons/logo.png" width="120" height="54"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Propos') }}">A-propos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nos Projets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('promoCour') }}">Projets en cours</a>
          <a class="dropdown-item" href="#">Projets livrés</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recrutement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
  </div>
</nav>

@section('js')
@parent
<script type="text/javascript">
  var scroll = $(window).scrollTop();
  if (scroll > 0) {
     $("nav").addClass("scrolling");
  }
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll > 0) {
        $("nav").addClass("scrolling");
    } else {
        $("nav").removeClass("scrolling");
    }
});
</script>

@stop

