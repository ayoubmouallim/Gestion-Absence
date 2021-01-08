@extends('layouts.administration')

@section('content')


<section class="features text-center">
    <div class="container">
      <br><br>
      <h2>Liste  des étudiants</h2> <br><br>
  
      <div class="row">
        <div class="col-md-4" style=" margin-left:66% ">
          <input type="text" class="form-control" id="myInput" placeholder="recherche...">
        </div>   
    </div>
    <br>

      <div class="row">

        
      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">Nom étudiant(e)</th>
            <th scope="col">Prénom Etudiant(e)</th>
            <th scope="col">Filière</th>
            <th scope="col">Detail absence</th>
                              
          </tr>
             
        </thead>
     
  
        <tbody id="myTable">
          @isset($etudiants) 
          @foreach($etudiants as $etudiant)
          
        <tr>
            <td>{{ $etudiant->cne}}</td>
            <td>{{ $etudiant->nom_etu}}</td>
            <td>{{ $etudiant->prenom_etu}}</td>
            <td>{{ $etudiant->filiere['nom_filiere'] }}</td>
            <td><a href="{{ route('detail.abs',$etudiant->id)}}">  
              <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit">afficher  <i class="fa fa-edit"></i></button></a></td>
        </tr>

          @endforeach
                     
          @endisset   
        </tbody>
      </table>
      <div class="clearfix  justify-content-end">
				<div class="hint-text">Voir  <b>6</b>&nbsp; Etudiants par Page</div>
				<ul class="pagination">
        <li class="page-item " >{{ $etudiants->links() }}</li>
				</ul>
			</div>
            </div>
    
    </div>

  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

   
</script>

@stop

