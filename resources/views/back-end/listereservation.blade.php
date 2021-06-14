@extends('back-end.layout')

@section('contenu')
     <div class="row m-2">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Réservation </h3>



                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody>

                        <thead>
                            <tr>
                                <th>Trajet</th>
                                <th>Heure</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Tel</th>
                                <th>Statut</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        @foreach ( $reservation as $reserver)


                    <tr>
                      <td class="mailbox-star">{{$reserver->depart->depart}}-{{$reserver->depart->arrivee}}</td>
                      <td class="mailbox-name">{{$reserver->depart->heure}}</td>
                      <td class="mailbox-subject">{{$reserver->nom}}</td>
                      <td class="mailbox-attachment">{{$reserver->prenom}}</td>
                      <td class="mailbox-date">{{$reserver->tel}}</td>
                      <td class="">{{$reserver->statut}}</td>
                      <td>
                        <a href="{{url("valider",$reserver->id)}}" class="btn btn-warning">valider</a>
                        <a href="{{url("annuler",$reserver->id)}}" class="btn btn-primary">annuler</a>
                    </td>

                    </tr>
                    @endforeach
                    </tbody>
                  </table>


                  </div>
                  <!-- /.float-right -->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
     </div>

@endsection

