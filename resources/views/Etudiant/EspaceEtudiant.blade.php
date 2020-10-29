@extends('layouts.etudiants')
@section('content')
    

<section class="about text-center">
    <div class="container">
    <h1>Espace <span>étudiant</span> </h1>
    <p class="lead">Bienvenue dans votre espace ,vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour voir la liste de vos absences ,nombre des heurs des absences et faire une reclamation aux professeurs ou administration 
   </div>
  </section>

  <section class="features text-center">
   <div class="container">
     <h1>Servises</h1>
     <div class="row"><!-- featues1 -->
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-list-alt" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Voir les absences </h4>
          <p class="lead">visualiser votre liste d'absences et voir nombres des heures de vos  absences </p>
          <a href="{{ route('listeAbsenceEtu')}}" class="btn btn-primary">Start</a>
         </div>
       </div>
                  <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-user" style="font-size:48px;" aria-hidden="true"></i>
          <h4> Voir le profil</h4>
          <p class="lead">visualiser les  informations de votre profil </p>
          <a href="{{ route('profil')}}" class="btn btn-primary">Start</a>
         </div>
       </div>
         
       <div class=" col-md-4  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i>
          <h4>Faire une réclamation</h4>
          <p class="lead"> envoyer une réclamation à votre enseignants si vous trouvez des erreurs dans votre liste d'absences </p>
          <a href="#" class="btn btn-primary">Start</a>
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection