@extends('back-end.layout')

@section('contenu')
<form class="pt-5"  action="{{url('profil')}}" method="POST" >
    @csrf
<div class="form-group">
    <label for="">Email :</label>
    <input class="form-control" required type="text" value="{{Auth::user()->email}}" name="email">
</div>
<div class="form-group">
    <label for="">Mot de passe :</label>
    <input class="form-control" required type="password" name="password">
</div>

    <div class="form-group">
        <button type="submit" class="btn btn-warning">valider</button>
    </div>
</form>


@endsection
