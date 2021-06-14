@extends('back-end.layout')
@section('contenu')
     <div class="row m-2">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
               <a class="btn btn-warning" href="{{url('utilisateur')}}">Ajouter nouveau utilisateur</a>




                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                      <thead>
                          <tr>
                            <th>email</th>
                            <th>role</th>
                            <th>Action</th>
                          </tr>

                      </thead>
                    <tbody>
                        @foreach ( $user as $user )


                    <tr>
                      <td class="mailbox-star">{{$user->email}}</td>
                      <td class="mailbox-name">{{$user->role->nom}}</td>
                      <td><a class="btn btn-danger" href="{{url('supprimer',["id"=>$user->id])}}">Supprimer</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>


                  <!-- /.float-right -->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
     </div>

@endsection
