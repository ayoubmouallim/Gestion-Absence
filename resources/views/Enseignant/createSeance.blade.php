
 @extends('layouts.enseignant')

 @section('content')

   

   <section class="features text-center">

      <h1>Creation d'une Seance</h1>
    <div class="container" >
                    <div class="row justify-content-center" >
                        <div class="col-md-9">
                            <div class="well well-sm">
      @if (Session::has('error'))
      <div class="alert alert-danger"> {{ Session::get('error') }} </div>
      @endif
 
      <form class="text-center border border-primary  p-5" action=" {{ route('save.seance') }} " method="POST">
        @csrf
        <div class="form-group col-md-9 ml-auto mr-auto">
          <label for="exampleInputEmail1" >Matiere</label>
           <select name="matiere" class="form-control" >
             @isset($matieres)        
              @foreach ($matieres as $matiere)
               <option value="{{ $matiere->id }}">{{ $matiere->nom_mat }}</option>
              @endforeach
             @endisset
          </select>  
        </div>
        <div class="form-group col-md-9 ml-auto mr-auto">
          <label for="exampleInputEmail1">Type</label>
          <select name="type_seance" class="form-control">
            <option value="cour">Cour</option>
            <option value="TD">TD</option>
          </select>
        </div>
        <div class="form-group col-md-9 ml-auto mr-auto">
          <label for="exampleInputPassword1">Date</label>
          <input type="date" name="date" class="form-control" >
        </div>
        @error('date')
      <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="row">
          <div class="form-group col-md-6">
           
            <label for="exampleInputPassword1">Heure Debut</label>
            <input type="time" name="H_debut" class="form-control" > <br>
            @error('H-debut')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror   
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Heure Fin</label>
            <input type="time" name="H_fin" class="form-control " > <br>
            @error('H-fin')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
        </div> 
        <input type="hidden" name="active" value="0"> 
        <input type="hidden" name="id_prof" value="{{ $id_prof }}"> 
        <br>
        <button type="submit" class="col-md-2 btn btn-primary">Creer</button>
      </form>
    </div>

    </div>
    </div>
    </div>

  </section>     
 @endsection