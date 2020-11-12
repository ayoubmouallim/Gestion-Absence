@extends('layouts.administration')

@section('content')


<section class="features text-center">
    <div class="container">
      <br><br>
      <h2>Liste des Etudiants Absences dans Toutes les filieres</h2>
 
      <div class="row">

      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom Etudiant(e)</th>
            <th scope="col">Prenom Etudiant(e)</th>
            <th scope="col">etat</th>
            <th scope="col">Date</th>
            <th scope="col">Heure Debut</th>
            <th scope="col">Heure Fin</th>
            <th scope="col">Type Seance</th>
            <th scope="col">Matiere</th>
            <th scope="col">Filiere</th>
            <th scope="col">Semestre</th>
                              
          </tr>
             
        </thead>
     
  
        <tbody id="download-forms-table-tbody">
          @isset($absences) 
          <tr>
          @foreach($absences as $key=>$abs)

        <td>{{ $abs->etudiantabs['nom_etu']}}</td>
        <td>{{ $abs->etudiantabs['prenom_etu']}}</td>

           @if($abs->etat == 1)
           <td>Absent(e)</td>
           @else
           <td>Present(e)</td>
@endif
        <td>{{ $abs->seanceabs['date'] }}</td>
        <td>{{ $abs->seanceabs['heure_debut'] }}</td>
        <td>{{ $abs->seanceabs['heure_fin'] }}</td>
        <td>{{ $abs->seanceabs['type'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere['nom_mat'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere->filieremat['nom_filiere'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere->semestre['nom_sem'] }}</td>
        </tr>

          @endforeach
          
          @endisset
        </tbody>
      </table>
      <div class="clearfix  justify-content-end">
				<div class="hint-text">Voir  <b>6</b>&nbsp Etudiants Absences par Page</div>
				<ul class="pagination">
					<li class="page-item " >{{ $absences->links() }}</li>
				</ul>
			</div>
            </div>
    
    </div>

  </section>



@stop