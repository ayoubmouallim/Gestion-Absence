@extends('layouts.etudiants')
@section('content')
    

<section class="about text-center">
    <div class="container">
    <h1>Espace <span>étudiant</span> </h1>
    <p class="lead">Bienvenue dans votre espace vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour voir  votre liste des  absences ,visualiser les  informations de votre profil et envoyer  des  réclamations aux professeurs en cas  d'erreur. 
   </div>
  </section>

  <section class="features text-center">
   <div class="container">
     <h1>Services</h1>
     <div class="row">
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> 
           <i class="fa fa-list-alt" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Voir liste des absences </h4>
          <p class="lead">Visualiser votre liste des absences et voir le nombres des heures de votre absences </p>
          <a href="{{ route('listeAbsenceEtu')}}" class="btn btn-primary">Voir</a>
         </div>
       </div>
                  <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> 
           <i class="fa fa-user" style="font-size:48px;" aria-hidden="true"></i>
          <h4> Voir le profil</h4>
          <p class="lead">Visualiser les  informations de votre profil et changer votre photo  </p>
          <a href="{{ route('profil')}}" class="btn btn-primary">Voir</a>
         </div>
       </div>
         
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i> 
          <h4>Envoyer des réclamations</h4>
          <p class="lead"> Envoyer une réclamation à votre enseignants si vous trouvez des erreurs dans votre liste des absences </p>
          <a href="{{ route('reclamation')}}" class="btn btn-primary">Envoyer</a>
         </div>
       </div>

     </div>
   </div>
 </section>
@endsection