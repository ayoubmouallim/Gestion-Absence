
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('enseignant/css/style.css')}}">
    <title>prof</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#"><img  class="img-fluid" src="{{asset('enseignant/images/enset2.png')}}"  alt="ENSET"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home.prof')}}">Accueil <span class="sr-only">(current)</span></a>
              </li>   

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servises
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('create.seance')}}">Créer une séance </a>
                  <a class="dropdown-item" href="{{ route('list.seance')}}">Enregistrer absence</a>
                  <a class="dropdown-item" href="{{ route('historique.absence')}} ">Consulter l'historique </a>
                  </div>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
           
            <a class=" btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Deconnecter 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
          </ul>
              
          </div>
        </nav>
   

        @yield('content')

  
    <section class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6  ">
                  <h3>SiteMap</h3>
                  <ul class="list-unstyled  three-columns">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Servises</a></li>
                  </ul>
                  <ul class='list-unstyled sosial'>
                    <li>  <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></li>
                    <li> <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li>
                    <li>  <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></li>
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
        Copyright &copy;2020 <span>Gestion des absences</span>
      </div>
     </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>