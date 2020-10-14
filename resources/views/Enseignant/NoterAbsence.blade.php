
 @extends('layouts.enseignant')

@section('content')

  
<section class="features text-center">
   <div class="container">
   <div class="row">

<table class="table table-striped table">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Etat <br> Present(e) - Absent(e) </th>
            <th scope="col">Justification</th>
          </tr>
        </thead>
        <tbody>
          @isset($etudiants)
            @foreach ($etudiants as $e)
                 
             <tr>
               <td>{{ $e->nom_etu }}</td>
               <td>{{ $e->prenom_etu }}</td>
               <td class="md-lg">
               <div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" name="present" value="">
</div>

<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" name="absent" value="">
</div>
</td>
               <td><select class="browser-default custom-select custom-select mb-3">
  <option selected>Non Justifie</option>
  <option >Justifie</option>
  
</select></td>
              </tr>

            @endforeach 
          @endisset
        </tbody>
      </table>

   </div>



 </section> 

@endsection