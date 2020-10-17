
 @extends('layouts.enseignant')

 @section('content')

   <section class="about text-center">
     <div class="container">
     <h1>Espace <span>professeurs</span> </h1>
     <p class="lead">Bienvenue dans votre espace ,vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour créer des séances dans votre matières et enregistrer  les absences 
      et consulter l'historique des absences des étudiants 
     </p>
    </div>
   </section>

   <section class="features text-center">
    <div class="container">
      <h1>Services</h1>
      <div class="row"><!-- featues1 -->
        <div class=" col-md-4  col-xs-12 ">
          <div class="feat"> <!--my div -->
            <i class="fa fa-pencil"  style="font-size:48px;" aria-hidden="true"></i>
            <h4>Créer une séance</h4>
           <p class="lead">Créer une séance ou dans laquelle vous pouvez noter l'absence</p>
           <a href=" {{ route('create.seance') }} " class="btn btn-primary">Start</a>
          </div>
        </div>
                   <div class=" col-md-4  col-xs-12 ">
          <div class="feat"> <!--my div -->
            <i class="fa fa-check-square-o" style="font-size:48px;" aria-hidden="true"></i>
           <h4> Enregistrer les absences</h4>
           <p class="lead"> Enregistrer les absences à propos les séances que vous avez créés </p>
           <a href="{{ route('list.seance')}}" class="btn btn-primary">Start</a>
          </div>
        </div>
           
   
        <div class=" col-md-4  col-xs-12 ">
          <div class="feat"> <!--my div -->
            <i class="fa fa-newspaper-o" style="font-size:48px;" aria-hidden="true"></i>
           <h4>Consulter l'historique </h4>
           <p class="lead"> Consulter l'historique des absenses des etudiants dans votre matière</p>
           <a href="{{ route('historique.absence')}}" class="btn btn-primary">Start</a>
          </div>
        </div>
      </div>
    </div>
  </section>     
 @endsection