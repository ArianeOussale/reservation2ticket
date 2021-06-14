@extends("front.menu")

@section('contenu')
<div>
<h1 class="text-center mt-3">Mes réservations</h1>

<div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
<div class="d-flex flex-column justify-content-center h-100">
    <form action="" method="POST" class="p-5" style="background-color: rgba(27, 27, 3, 0.6)"   >
        @csrf

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="text-light text-center">Disponible H/24</td>
                </tr>
            </thead>
        </table>


       <table class="table table-bordered">


        <thead>

               <tr>
                   <th>Trajets</th>
                   <th>Heure</th>
                   <th>Statut</th>
               </tr>
           </thead>
           <tbody class="text-light">
               @foreach ($reservations as  $reservation)
               <tr>
                <td>{{$reservation->depart->depart." - ".$reservation->depart->arrivee}}</td>
                <td>{{$reservation->depart->heure}}</td>
                <td>{{$reservation->statut}}</td>
            </tr>
               @endforeach

           </tbody>

       </table>

    </form>


</div>

    </div>

</div>
@endsection

