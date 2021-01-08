@extends('layouts.etudiants')
@section('content')
    

<section class="about text-center">
    <div class="container">
    <h1>Espace <span>étudiant</span> </h1>
    <p class="lead">Bienvenue dans votre espace ,vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour voir la liste de vos absences ,le nombre des heures d'absences et faire une reclamation aux professeurs en d'erreur. 
   </div>
  </section>

  <section class="features text-center">
   <div class="container">
     <h1>Services</h1>
     <div class="row">
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> 
           <i class="fa fa-list-alt" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Voir les absences </h4>
          <p class="lead">visualiser votre liste d'absences et voir le nombres des heures de vos absences </p>
          <a href="{{ route('listeAbsenceEtu')}}" class="btn btn-primary">Voir</a>
         </div>
       </div>
                  <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> 
           <i class="fa fa-user" style="font-size:48px;" aria-hidden="true"></i>
          <h4> Voir le profil</h4>
          <p class="lead">visualiser les  informations de votre profil </p>
          <a href="{{ route('profil')}}" class="btn btn-primary">Voir</a>
         </div>
       </div>
         
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i> 
          <h4>Envoyer une réclamation</h4>
          <p class="lead"> Envoyer une réclamation à votre enseignants si vous trouvez des erreurs dans votre liste d'absences </p>
          <a href="{{ route('reclamation')}}" class="btn btn-primary">Envoyer</a>
         </div>
       </div>

     </div>
   </div>
 </section>
@endsection