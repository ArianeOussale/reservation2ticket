@extends('back-end.layout')

@section('contenu')
<form class="pt-5"  action="{{url('ajoututilisateur')}}" method="POST" >
    @csrf
<div class="form-group">
    <label for="">Email :</label>
    <input class="form-control" type="text" name="email">
</div>
<div class="form-group">
    <label for="">Mot de passe :</label>
    <input class="form-control" type="password" name="password">
</div>
<div class="form-group">
    <label for="">Role :</label>
    <select class="form-control"  name="role_id" id="">
        <option value="2">compte guichet</option>
        <option value="1">compte administrateur</option>
    </select>
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">valider</button>
    </div>
</form>


@endsection
