
 @extends('layouts.enseignant')

 @section('content')

   

   <section class="features text-center">
    <div class="container">
      <br><br>
      <h1>Liste des séances</h1>
      
      @if (Session::has('success'))
      <div class="alert alert-success"> {{ Session::get('success') }} </div>
      @endif
      @if (Session::has('error'))
      <div class="alert alert-danger"> {{ Session::get('error') }} </div>
      @endif
 
      <table class="table table-hover table-striped table-responsive-md" >
        <thead >
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matière</th>
            <th scope="col">Date</th>
            <th scope="col">Heure Debut</th>
            <th scope="col">Heure Fin</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @isset($seances)
            @foreach ($seances as $key => $seance)
                 
             <tr>
               <th scope="row">{{$key+1}}</th>
               <td>{{ $seance-> seancematiere -> nom_mat }}</td>
               <td>{{ $seance-> date}}</td>
               <td>{{ $seance-> heure_debut }}</td>
               <td>{{ $seance-> heure_fin }}</td>
               <td>{{ $seance-> type }}</td>
               <td><a href="{{ route('pageAbsence',$seance->id)}}">  
               <button class="btn btn-success btn-sm rounded-2 " type="button" data-toggle="tooltip" data-placement="top" title="Edit" @if ($seance->active == 1 ) disabled
               @endif>Noter Absences  <i class="fa fa-edit"></i></button></a>
               <a href="{{ route('edit.seance',$seance->id) }}">  
                <button class="btn btn-warning btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit" @if ($seance->active == 1 ) disabled 
                @endif>Edit Séance  <i class="fa fa-edit"></i></button></a></td>
                <td><a href="{{ route('modifierAbs',$seance->id)}}">  
               <button class="btn btn-primary btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit" @if ($seance->date < now()->subWeek() ) disabled 
                @endif> Modifier Absences  <i class="fa fa-edit"></i></button></a>
              </tr>
              
            @endforeach 
          @endisset
        </tbody>
      </table>
<br><br>
      
    </div>
  </section> 

 @endsection