<!DOCTYPE html>
<html class="h-100" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>inscription</title>
</head>

 <body class="h-100" style="background-image: url({{asset('images/car.jpg')}});background-repeat:no-repeat;background-size:cover">
    </div>
    <div class="container-fluid row m-0  justify-content-center h-100">
        <div class="d-flex flex-column col-md-4 justify-content-center h-100">
            <form class="p-5" action="{{url('inscription')}}" method="POST" style="background-color: rgba(0, 0, 0, 0.6)"   >
                @csrf
                <h4 class="text-warning text-center pb-3">Inscription</h4>
                <div class="form-group">
                    <input class="form-control" name="email" type="text" placeholder="Entrer votre email ou contact">
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Entrer votre mot de passe">
                </div>
                <div class="form-group">
                    <input class="form-control" name="confirm_password" type="password" placeholder="Confirmer votre mot de passe">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">valider</button><a class="ml-2" href="{{url('/')}}">Retour</a><br>
                    <a  href="{{url('connexion')}}">avez-vous un compte? si oui connectez-vous</a>
                </div>
            </form>
        </div>

    </div>


</body>
</html>
