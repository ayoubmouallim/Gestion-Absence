
 @extends('layouts.enseignant')

@section('content')

  
<section class="features text-center">
   <div class="container">
  
    @error('absence.*.etat')
   <div class="alert alert-danger">{{ $message }}</div>
    @enderror

     <form action="" method="post">
       @csrf
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

          @foreach($absences as $key=>$abs)
             <tr>
               <input type="hidden" name="absence[{{$key}}][id_etu]" value="{{$abs->etudiantabs['id']}}">
               <td>{{ $abs->etudiantabs['nom_etu'] }}</td>
               <td>{{ $abs->etudiantabs['prenom_etu'] }}</td>
               <td class="md-lg">
                <div class="radio form-check-inline">
                      <input type="radio" class="form-check-input" name="absence[{{$key}}][etat]" value="0"  @if ($abs->etat == 0 ) checked 
               @endif >
                </div>
                <div class="radio form-check-inline">
                      <input type="radio" class="form-check-input" name="absence[{{$key}}][etat]" value="1" @if ($abs->etat == 1 ) checked 
               @endif >
                </div>

               
              </td>
               <td>
                <div class="form-group">
                  <select class="form-control" name="absence[{{$key}}][justification]">
                    <option value="Non Justifie" @if ($abs->justification == "Non Justifie" )selected  @endif>Non Justifie</option>
                    <option value="Justifie" @if ($abs->justification == "Justifie" )selected  @endif>Justifie</option>
                  </select>
                </div>  
                </td>
              </tr>

            @endforeach 

          @endisset
          <input type="hidden" name="id_sea" value=" {{ $seance->id }} ">
        </tbody>
      </table>
      <input type="submit" class="btn btn-primary btn-lg" value="submit">
    </form>
     
   </div>
   



 </section> 

@endsection