@extends('layouts.accueil')
@section('content')



<section class="home text-center">
    
  <div class="container-fluid">
    <h1 class="text-center"> Gestion  des absences </h1>
 <div class="row">
   <div class="col-md-7">
 <img src=" {{asset('p_accueil/images/man_vector.svg')}}"   class="class="img-fluid"" alt="">

   </div>
   <div class="col-md-4">
     <p class="lead">

      Bienvenues à  la gestion des absences des étudiants
      de école normale supérieure de l'enseignement technique
    </p>
    <a href="{{ route('login') }}" class="btn btn-info">Se connecter </a>
   
 </div>
</div>

</section>
<section class="about text-center">
<div class="container">
<h1 class="visible-xs"><span> Gestion des absences</span></h1>
<p class="lead "> <strong>Gestion des absences</strong>  est une application web permet de gérer les absences des étudiants  d'une manière efficace ,rapide et sécurisé destinés aux étudiants, enseignants et l'administration de ENSET-M. </p>

</div>
</section>

  
   <section class="services text-center " id="servises"> 
    <div class="container">
      <h1>Services</h1>
       <div class="row">
           
          <div class="col-md-4   col-xs-12 " data-aos="fade-right"  data-aos-duration="1500" >
            <div class="s-box">
            <div><img src=" {{asset('p_accueil/images/graduated.png')}}" alt=""></div>
              <h4>Etudiants</h4>
              <p class="lead">Connectez-vous et découvrez votre espace</p>
             <a href="{{ route('login') }}" class="btn btn-primary"> Se connecter</a>
          
            </div>
          </div>
            
          <div class="col-md-4   col-xs-12 " data-aos="fade-up" data-aos-duration="2500">
            <div class="s-box">
               
              <div><img src=" {{asset('p_accueil/images/teacher.png')}}" alt=""></div>
              <h4> Enseignants</h4>
              <p class="lead"> Connectez-vous et découvrez votre espace </p>
              <a href="{{ route('login') }} " class="btn btn-primary">Se connecter</a>
            </div>
          </div>
         
          <div class="col-md-4  col-xs-12" data-aos="fade-up" data-aos-duration="2500">
            <div class="s-box">
              
              <div><img src=" {{asset('p_accueil/images/administration.png')}}" alt=""></div>
              <h4>Administration</h4>
              <p class="lead"> Connectez-vous et découvrez votre espace </p>
              <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
            </div>
          </div>
       </div>
    </div>
</section>

    
@endsection