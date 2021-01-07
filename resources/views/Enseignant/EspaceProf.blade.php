
 @extends('layouts.enseignant')

 @section('content')

   <section class="about text-center">
     <div class="container">
     <h1>Espace <span>enseignant</span> </h1>
     <p class="lead">Bienvenue dans votre espace ,vous pouvez utiliser cette application
        <strong> Gestion des absences </strong> pour créer des séances et enregistrer
      et consulter l'historique d'absence des étudiants 
     </p>
    </div>
   </section>

   <section class="features text-center">
    <div class="container">
      <h1>Services</h1>
      <div class="row">
        <div class=" col-md-3  col-xs-12 ">
          <div class="feat"> 
            <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i>
            <h4>Créer une séance</h4>
           <p class="lead">Créer une séance dans laquelle vous pouvez noter l'absence</p>
           <a href=" {{ route('create.seance') }} " class="btn btn-primary">Créer</a>
          </div>
        </div>
                   <div class=" col-md-3  col-xs-12 ">
          <div class="feat"> 
            <i class="fa fa-check-square-o" style="font-size:48px;" aria-hidden="true"></i>
           <h4> Noter les absences</h4>
           <p class="lead">Enregistrer les absences dans  des séances que vous avez créés </p>
           <a href="{{ route('list.seance')}}" class="btn btn-primary">Enregistrer </a>
          </div>
        </div>
           
   
        <div class=" col-md-3  col-xs-12 ">
          <div class="feat"> 
            <i class="fa fa-newspaper-o" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Consulter l'historique </h4>
           <p class="lead"> Consulter l'historique d'absence des etudiants dans votre matière</p>
           <a href="{{ route('historique.absence')}}" class="btn btn-primary">Consulter</a>
          </div>
        </div>
 
        <div class=" col-md-3  col-xs-12 ">
          <div class="feat"> 
            <i class="fa fa-bell-o" style="font-size:48px;" aria-hidden="true"></i>
           <h4>voir les réclamations </h4>
           <p class="lead">Consulter les réclamations envoyé par les étudiants </p> <br>
           <a  href="{{ route('show.reclamation')}}" class="btn btn-primary">Consulter</a>
          </div>
        </div>

      </div>
    </div>
  </section>     
 @endsection