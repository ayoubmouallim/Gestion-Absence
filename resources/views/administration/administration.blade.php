@extends('layouts.administration')

@section('content')
<section class="about text-center">
    <div class="container">
    <h1>Espace <span>Administration</span> </h1>
    <p class="lead">Bienvenue dans votre espace vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour voir la liste des étudiants, voir le détail des absences de chaque étudiant et envoyer des avertissements aux étudiants qui ont beaucoup des absences
   </div>
  </section>

  <section class="features text-center">
   <div class="container">
     <h1>Servises</h1>
     <div class="row"><!-- featues1 -->
       <div class=" col-md-6  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-list-alt" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Liste des étudiants </h4>
          <p class="lead">Visualiser la liste des etudiants  dans tous les filières et leur détail d'absence </p>
          <a href="{{route('adminiabs') }}" class="btn btn-primary">Start</a>
         </div>
       </div>
        
         
       <div class=" col-md-6  col-xs-12 ">
         <div class="feat"> <!--my div -->
           <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i>
          <h4>Envoyer des avertissemets</h4>
          <p class="lead"> Envoyer des avertissements aux étudiants qui ont beaucoup des absences</p>
          <a href="#" class="btn btn-primary">Start</a>
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection
