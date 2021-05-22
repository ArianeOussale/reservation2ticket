@extends('back-end.layout')

@section('contenu')
<form class="pt-5"  action="{{url('trajet')}}" method="POST" >
    @csrf
<div class="form-group">
    <label for="">Départ:</label>
    <input class="form-control" type="text" name="depart">
</div>
<div class="form-group">
    <label for="">Arrivée:</label>
    <input class="form-control" type="text" name="arrivee">
</div>
<div class="form-group">
    <label for="">Heure :</label>
    <input class="form-control" type="time" name="heure">
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">valider</button>
    </div>
</form>


@endsection
