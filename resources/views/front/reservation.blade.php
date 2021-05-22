@extends("front.menu")

@section('contenu')
    <div class="container-fluid row m-0  justify-content-center h-100">
        <div class="d-flex flex-column col-md-6 justify-content-center h-100">
            <form class="p-5 mt-5" style=" background-color: rgba(27, 27, 3, 0.6)" action="{{url('reserver')}}" method="POST" >
                @csrf
                <h4 class="text-warning text-center pb-3">Réservation</h4>
                <div class="form-group  ">

                </div>
                <div class="row">
                    <div class="form-group col-md-6"      >
                        <input class=" form-control" type="text"  name="nom" placeholder="Entrer votre nom">
                    </div>
                    <div class="form-group col-md-6">
                        <input class=" form-control" type="text" name="prenom"    placeholder="Entrer votre prenom">
                    </div>
                    <div class="form-group col-md-12">
                        <input class=" form-control " type="tel" name="tel"    placeholder="Entrer votre contact">
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row p-0">
                <div class="form-group col-md-12 m-0 ">

                    <select name="depart_id" class="form-control" id="">
                        @foreach ($trajets as  $trajet)
                            <option value="{{$trajet->id}}">{{$trajet->depart." - ".$trajet->arrivee}}</option>
                         @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group mt-2 p-0">
                    <button class="btn btn-warning">valider</button>
                </div>
            </form>


        </div>

    </div>

@endsection
