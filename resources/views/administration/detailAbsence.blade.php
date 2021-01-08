@extends('layouts.administration')

@section('content')


<section class="features text-center">
    <div class="container">
      <br><br>
      <h2> Détail d'absence de l'étudiant </h2> <br><br>
      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">CNE</th>
            <th scope="col">Filière</th>
            <th scope="col">Heures Total</th>
                                 
          </tr>

        </thead>
        <tbody id="download-forms-table-tbody">

        <tr>
       
        <td>{{$etudiant->nom_etu}} </td>
        <td>{{$etudiant->prenom_etu}} </td>
        <td>{{$etudiant->cne}} </td>
        <td>{{$etudiant->filiere['nom_filiere']}} </td>
        <td>{{ $nobreHeures }}</td>
       
        </tr>

        </tbody>
      </table>
 <br><br>
 <ul class="nav nav-tabs md-tabs" id="myTabMD" >
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md" aria-selected="true">Absence par séance</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md" aria-selected="false">Absence par Matière</a>
                </li>
                
              </ul>
              <div class="tab-content card pt-5" id="myTabContentMD">
                <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
                


                  <table class="table table-hover table-striped">
  
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Matière</th>
                        <th scope="col">Date</th>
                        <th scope="col">Heure Debut</th>
                        <th scope="col">Heure Fin</th>
                        <th scope="col">Type</th>                         
                      </tr>
        
                    </thead>
                    <tbody id="download-forms-table-tbody">
                      @isset($absenceParSeance) 
                      <tr>
                      @foreach($absenceParSeance as $key=>$abs)
            
                    <td>{{ $key+1 }}</td>
                    <td>{{ $abs->seanceabs->seancematiere['nom_mat'] }}</td>
                    <td>{{ $abs->seanceabs['date'] }}</td>
                    <td>{{ $abs->seanceabs['heure_debut'] }}</td>
                    <td>{{ $abs->seanceabs['heure_fin'] }}</td>
                    <td>{{ $abs->seanceabs['type'] }}</td>
                    
                    </tr>
            
                      @endforeach
                      @endisset
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
                  
                  <table class="table table-hover table-striped">
  
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Matière</th>                        
                        <th scope="col">Nombre d'heures</th>                        
                      </tr>
        
                    </thead>
                    <tbody id="download-forms-table-tbody">
                      @isset($absenceParMatires) 
                      <tr>
                      @foreach($absenceParMatires as $key=>$abs)
            
                    <td>{{ $key+1 }}</td>
                    <td>{{ $abs->recordmatiere['nom_mat'] }}</td>
                    <td>{{ $abs->nombre_Heure }} H</td>
                    </tr>
            
                      @endforeach
                      @endisset
                    </tbody>
                  </table>   

                </div>
                
              </div>
    
    </div>

</section>



@stop