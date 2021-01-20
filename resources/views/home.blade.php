@extends('layouts.enseignant')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Retour a la page D'acceuil</div>

                <div class="card-body">
                   <p>
                   Vous etes encore connecter cliquer ici pour retourner a la page d'acceuil
                   </p>
                   <button class=" btn btn-warning" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnecter
                                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
