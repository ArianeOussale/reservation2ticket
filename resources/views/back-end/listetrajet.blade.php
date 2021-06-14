@extends('back-end.layout')
@section('contenu')
     <div class="row m-2">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
               <a class="btn btn-warning" href="{{url('nvotrajet')}}">ajouter nouveau trajet</a>

                

                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th>Départ</th>
                              <th>Arrivée</th>
                              <th>Heure de départ</th>


                          </tr>
                      </thead>
                    <tbody>
                    @foreach ( $trajets as $trajet )
                    <tr>

                      <td class="mailbox-star">{{$trajet->depart}}</td>
                      <td class="mailbox-name">{{$trajet->arrivee}}</td>
                      <td class="mailbox-subject">{{$trajet->heure}}</td>

                    </tr>
                    @endforeach

                    </tbody>
                  </table>
                  <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
              </div>
              <!-- /.card-body -->

              </div>
            </div>
            <!-- /.card -->
          </div>
     </div>

@endsection
