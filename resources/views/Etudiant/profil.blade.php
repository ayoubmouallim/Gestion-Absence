@extends('layouts.etudiants')
@section('content')

<section class="profile">
   
    <div class="container emp-profile">
        <div class="container ">
            <div class="col-md-12 ">
                @if (session()->has('success'))
                <div class="alert alert-success text-center" style="background: rgb(17, 138, 17);color:white">
                  {{session()->get('success')}}    
                </div>    
                @endif
            </div>
                <form method="post" action="{{ route('updatePhoto')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{csrf_field()}} 
                    <div class="row">
                    <div class="col-md-4 set">
                        <div class="profile-img">
                        @if ($e->photo)
                        <img src="{{asset('storage/'.$e->photo)}}" alt="Profil image">
                        @else
                        <img src="{{asset('etudiants/profil/student.png')}}" alt="Profil image">
                        @endif
                                                      
                                <div class="file btn btn-lg btn-primary">
                                    Edit profil
                                    <input type="file" name="photo" >
                                </div>
                            </div>
                            <div class="profile-work">
                                <input type="submit" class="btn btn-secondary btn-md btn-block"  value="Enregistrer"/>
                                <a href="{{ route('espaceEtudiant')}}" class="btn btn-primary btn-md btn-block">Retour</a>
                                
                              </div>
                    </div>
                    <div class="col-md-8 net ">
                        <div class="profile-head">
                                    <h2 class="text-center">
                                        Kshiti Ghelani
                                    </h2>
                                <p class="lead">Etudiant à l'ecole normale supérieure de l'enseignement technique de l'université Hassan II de Casablanca (UH2C)
                                </p>  
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Autre</a>
                                    </li>
                                </ul>
                         </div>
                         <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>CNE</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$e->cne}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prénom</label>
                                    </div>
                                    <div class="col-md-6">
                                    <p>{{$e->prenom_etu}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nom</label>
                                    </div>
                                    <div class="col-md-6">
                                    <p>{{$e->nom_etu}}</p>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Gmail</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$e->user->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Téléphone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$e->phone_etu}}</p>
                                    </div>
                                </div>
                            </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Filière</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$e->filiere->nom_filiere}}</p>
                                        </div>
                                    </div>
                                     <div class="row">
                                    <div class="col-md-6">
                                        <label>Département</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Mathématiques et Informatique</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Université</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> Hassan II de Casablanca</p>
                                    </div>
                                </div>
                               
                       
                            
                            </div>
                        </div>
                              
                    </div>
                </div>
                </form>           
            </div>
        </section>
@endsection