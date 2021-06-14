
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Accueil</title>
</head >
<body style=" background-image: url({{asset('images/car3.jpg')}});background-repeat:no-repeat;background-size:cover">



    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="#">VoyaServe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-end w-100">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}"><h5> Accueil</h5></a>
              </li>
              @auth
              <li class="nav-item ">
                <a class="nav-link text-white " href="{{url('myreserve')}}"> <h5>Mes réservations</h5></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="{{url('reservation')}}"> <h5>Réserver</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('deconnexion')}}"><h5>Se deconnecter</h5></a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('inscription')}}"><h5>S'inscrire</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('connexion')}}"><h5>Se connecter</h5></a>
              </li>
              @endauth
          </ul>
        </div>
      </nav>
       <div class="container-fluid">
        @yield('contenu')
       </div>
      
      <script src="{{asset('jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
