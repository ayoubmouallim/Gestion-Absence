@extends('layouts.accueil')
@section('content')



<section class="home text-center">
    
  <div class="container-fluid">
    <h1 class="text-center"> Gestion  d'absences </h1>
 <div class="row">
   <div class="col-md-7">
 <img src=" {{asset('p_accueil/images/man_vector.svg')}}"   class="class="img-fluid"" alt="">

   </div>
   <div class="col-md-4">
     <p class="lead">
       la gestion d'absences des etudiants
      à Ecole Normale Supérieure de l'Enseignement Technique
    </p>
    <a href="{{ route('login') }}" class="btn btn-info">Se connecter </a>
   
 </div>
</div>

</section>


<section class="about text-center">
<div class="container">
<h1 class="visible-xs"><span> gestion d'absence</span></h1>
<p class="lead "> <strong>Gestion d'absence </strong>  est une application web destinés  à administrations ,les enseignants et les étudiants </p>
</div>
</section>

   <!-- start section price table  -->
   <section class="services text-center"> 
    <div class="container">
      <h1>Servises</h1>
       <div class="row">
           
          <div class="col-md-4   col-xs-12 " data-aos="fade-right"  data-aos-duration="1500" >
            <div class="s-box">
            <div><img src=" {{asset('p_accueil/images/graduated.png')}}" alt=""></div>
              <h4>Etudiants</h4>
              <p class="lead"> Connecter vous et découvrire  votre espace </p>
             <a href="{{ route('login') }}" class="btn btn-primary"> Se connecter</a>
          
            </div>
          </div>
            
          <div class="col-md-4   col-xs-12 " data-aos="fade-up" data-aos-duration="2500">
            <div class="s-box">
               
              <div><img src=" {{asset('p_accueil/images/teacher.png')}}" alt=""></div>
              <h4> Enseignants</h4>
              <p class="lead"> Connecter vous et découvrire  votre espace </p>
              <a href="{{ route('login') }} " class="btn btn-primary">Connecter</a>
            </div>
          </div>
         
          <div class="col-md-4  col-xs-12" data-aos="fade-up" data-aos-duration="2500">
            <div class="s-box">
              
              <div><img src=" {{asset('p_accueil/images/administration.png')}}" alt=""></div>
              <h4>Administration</h4>
              <p class="lead"> Connecter vous et découvrire  votre espace </p>
              <a href="{{ route('login') }}" class="btn btn-primary">Connecter</a>
            </div>
          </div>
       </div>
    </div>
</section>

<section class="our-team text-center">
   
<div class="team">
<div class="container">
 <h1>Equipe de projet </h1>
 <div class="row">
   <div class="col-lg-4  col-xs-12" data-aos="fade-right" data-aos-duration="1000" >
     <div class="person"> 
       <img  class="img-circle" src="{{asset('p_accueil/images/ava.png')}}" alt="pers1">
        <h3> Yassine Mabrouk </h3>
        <p>Elève ingénieur à ENSET Mohammedia</p>
     
        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
        <i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
        <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
        <i class="fa fa-github-square fa-lg" aria-hidden="true"></i>

     </div>
    </div>
    <div class="col-lg-4  col-xs-12" data-aos="fade-up" data-aos-duration="2000" >
     <div class="person"> 
       <img  class="img-circle" src="{{asset('p_accueil/images/ava.png')}}" alt="pers1">
       <h3>Ayoub Mouallim </h3>
       <p>Elève ingénieur à ENSET Mohammedia</p>
       <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
       <i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
       <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
       <i class="fa fa-github-square fa-lg" aria-hidden="true"></i>

     </div>
    </div>

    <div class="col-lg-4  col-xs-12" data-aos="fade-left" data-aos-duration="1000">
     <div class="person"> 
       <img  class="img-circle" src="{{asset('p_accueil/images/ava.png')}}" alt="pers1">
       <h3> Amine Maslah</h3>
       p>Elève ingénieur à ENSET Mohammedia</p>
       <i class="fa fa-facebook-square fa-lg" aria-hidden="true" > </i>
       <i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
       <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
       <i class="fa fa-github-square fa-lg" aria-hidden="true"></i>
     </div>
    </div>
 </div>

</div>
</div>
</section>
    
@endsection