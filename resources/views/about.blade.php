<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('p_accueil/css/style.css')}}">
    <title>Accueil</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="#"><img  class="img-fluid" src="{{asset('p_accueil/images/enset2.png')}}"  alt="ENSET"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('accueil')}}">Accueil<span class="sr-only">(current)</span></a>
            </li>   
            <li class="nav-item active">
              <a class="nav-link" href="#equipe">Equipe du projet<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#contact">Contact <span class="sr-only">(current)</span></a>
            </li>
            
        
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
          @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a   href="{{ url('/home') }}">Home</a>
              @else
                  <a  class="btn btn-primary "  href="{{ route('login') }}">Se connecter</a>

                  @if (Route::has('register'))
                      <a class="btn btn-primary "  href="{{route('cne.page')}}">S'inscrire</a>
                  @endif
              @endauth
          </div>
      @endif

        </li>
        </ul>

        </div>
      </nav>

    </section>


    <section class="about text-center">
    <div class="container">
    <h1 class="visible-xs"><span> Gestion des absences</span></h1>
    <p class="lead "> <strong>Gestion des absences</strong>  est une application web permet de gérer les absences des étudiants  d'une manière efficace ,rapide et sécurisé destinés aux étudiants, enseignants et l'administration de ENSET-M. </p>

</div>
    </section>
    
    
    <section class="our-team text-center" id="equipe">
       
    <div class="team">
    <div class="container">
     <h1>Equipe de projet </h1>
     <div class="row">
       <div class="col-lg-4  col-xs-12" data-aos="fade-right" data-aos-duration="1000" >
         <div class="person"> 
           <img  class="img-circle" src="{{asset('p_accueil/images/yassine.png')}}" alt="pers1">
            <h3> Yassine Mabrouk </h3>
            <p>Elève ingénieur à ENSET Mohammedia</p>
             <a href="https://www.linkedin.com/in/yassine-mabrouk-9577951b3/" target="_blank"> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
              <a href="https://github.com/yassine-mabrouk" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
             <a href="https://www.facebook.com/yassine.mabrouk.90226/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" > </i></a>
           
    
         </div>
        </div>
        <div class="col-lg-4  col-xs-12" data-aos="fade-up" data-aos-duration="2000" >
         <div class="person"> 
           <img  class="img-circle" src="{{asset('p_accueil/images/ayoub.jpeg')}}" alt="pers1">
           <h3>Ayoub Mouallim </h3>
           <p>Elève ingénieur à ENSET Mohammedia</p>
           <a href="https://www.linkedin.com/in/ayoub-mouallim-a73180b3/" target="_blank"> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
           <a href="https://github.com/ayoubmouallim" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
           <a href="https://www.facebook.com/profile.php?id=100027638859348" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" > </i></a>
           
    
         </div>
        </div>
    
        <div class="col-lg-4  col-xs-12" data-aos="fade-left" data-aos-duration="1000">
         <div class="person"> 
           <img  class="img-circle" src="{{asset('p_accueil/images/maslah.jpeg')}}" alt="pers1">
           <h3> Amine Maslah</h3>
          <p>Elève ingénieur à ENSET Mohammedia</p>
           <a href="https://www.linkedin.com/in/amine-maslah-239b1917a/" target="_blank"> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://github.com/a-maslah" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
           <a href="https://www.facebook.com/amine.maslah.10" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" > </i></a>
           
         </div>
        </div>
     </div>
    
    </div>
    </div>
    </section>

  <section class="footer text-center" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6  ">
                <h3>SiteMap</h3>
                <ul class="list-unstyled  three-columns">
                  <li><a href="{{ route('accueil')}}">Accueil</a></li>
                  <li><a href="#equipe">Equipe du projet</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
                <ul class='list-unstyled sosial'>
                  <li> <a href="https://www.enset-media.ac.ma/"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a> </li>
                  <li> <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li>
                  <li> <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></li>
                 </ul>
        </div>
     
        <div class="col-md-6 ">
          <h3>ENSET-M</h3>
          <p class="lead"> 
    Ecole Normale Supérieure de l'Enseignement Technique <br>
        BP 159 Bd Hassan II Mohammedia <br>
        Tél. : 05 23 32 22 20 - 05 23 32 35 30 <br>
        Fax : 05 23 32 25 46
          </p>
        </div>
      </div> 
    </div>
    <div class="copyright text-center">
      Copyright &copy;2020 <span>Gestion des absences</span>.Tous droits réservés
    </div>
   </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>