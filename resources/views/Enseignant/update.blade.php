
 @extends('layouts.enseignant')

 @section('content')
  
   <section class="features text-center">
    <div class="container">
      <h1>Creation d'une Seance</h1>      
      @if (Session::has('error'))
      <div class="alert alert-danger"> {{ Session::get('error') }} </div>
      @endif
 
      <form action=" {{ route('update.seance',$seance->id) }} " method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
        <div class="form-group">
          <label for="exampleInputEmail1">Matiere</label>
           <select name="matiere" class="form-control">
             @isset($matieres)        
              @foreach ($matieres as $matiere)
               <option value="{{ $matiere->id }}" @if ($matiere->id==$seance ->id_mat) selected @endif>{{ $matiere->nom_mat }}</option>
              @endforeach
             @endisset
     
          </select>  
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Type</label>
          <select name="type_seance" class="form-control" >
            <option value="cour" >Cour</option>
            <option value="TD"@if ($seance ->type=="TD") selected @endif>TD</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date</label>
          <input type="date" name="date" class="form-control" value="{{$seance->date}}">
        </div>
        @error('date')
      <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
          <div class="form-group col-md-6">
           
            <label for="exampleInputPassword1">Heure Debut</label>
          <input type="time" name="H_debut" class="form-control" value="{{$seance ->heure_debut}}" > <br>
            @error('H-debut')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror   
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Heure Fin</label>
          <input type="time" name="H_fin" class="form-control" value="{{$seance -> heure_fin}}" > <br>
            @error('H-fin')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
        </div> 
        <input type="hidden" name="active" value="0"> 
        <input type="hidden" name="id_prof" value="{{ $id_prof }}"> 
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>     
 @endsection