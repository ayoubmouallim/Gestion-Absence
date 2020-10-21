
 @extends('layouts.enseignant')

@section('content')

<section class="features text-center">
    <div class="container">
      <br><br>
      <h1>Liste des Seances</h1>
 
      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            <th scope="col">etat</th>
            <th scope="col">Nom Etudiant(e)</th>
            <th scope="col">Heure Debut</th>
            <th scope="col">Heure Fin</th>
            <th scope="col">Type</th>
            <th scope="col">Matiere</th>
            <th scope="col">Filiere</th>
            <th scope="col">Semestre</th>

          </tr>

        </thead>
     
  
        <tbody>
          @isset($absence) 
          <tr>
          @foreach($absence as $key=>$abs)

          @foreach($abs as $a)
           @if($a->etat == 1)
           <td>Absent(e)</td>
           @else
           <td>Present(e)</td>
@endif
<td>{{ $a->etudiantabs['nom_etu']}}</td>
<td>{{ $a->seanceabs['heure_debut'] }}</td>
<td>{{ $a->seanceabs['heure_fin'] }}</td>
<td>{{ $a->seanceabs['type'] }}</td>
<td>{{ $a->seanceabs->seancematiere['nom_mat'] }}</td>
<td>{{ $a->seanceabs->seancematiere->filieremat['nom_filiere'] }}</td>
<td>{{ $a->seanceabs->seancematiere->semestre['nom_sem'] }}</td>
</tr>

          @endforeach
          @endforeach
          @endisset
        </tbody>
      </table>

      
    </div>
  </section>

@endsection