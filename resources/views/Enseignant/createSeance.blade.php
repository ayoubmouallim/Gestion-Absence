
 @extends('layouts.enseignant')

 @section('content')

   

   <section class="features ">
    <div class="conctainer-fluid">
       <div class="row">
         <div class="col-md-8 offset-md-2">
       
          @if (Session::has('error'))
          <div class="alert alert-danger"> {{ Session::get('error') }} </div>
          @endif

          <div class="card ">
           <div class="card-header text-center">
             <h1 >Créer une séance</h1>
           </div>
             <div class="card-body">
      <form  action=" {{ route('save.seance') }} " method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6 ">
           <div class="form-group ">
          <label for="exampleInputEmail1" >Matière</label>
           <select name="matiere" class="form-control" >
             @isset($matieres)        
              @foreach ($matieres as $matiere)
               <option value="{{ $matiere->id }}">{{ $matiere->nom_mat }}</option>
              @endforeach
             @endisset
          </select>  
        </div>
     

    
        <div class="form-group ">
          <label for="exampleInputEmail1">Type</label>
          <select name="type_seance" class="form-control">
            <option value="cour">Cour</option>
            <option value="TD">TD</option>
          </select>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputPassword1">Date</label>
          <input type="date" name="date" class="form-control" >
          @error('date')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
   
   

      
        <div class="form-group ">
          <label for="exampleInputPassword1">Heure Début</label>
          <input type="time" name="H_debut" class="form-control" > 
          @error('H-debut')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror   
        </div>
      </div>

      <div class="col-md-6">  
        <div class="form-group">
          <label for="exampleInputPassword1">Heure Fin</label>
          <input type="time" name="H_fin" class="form-control ">
          @error('H-fin')
          <div class="alert alert-danger">{{ $message }}</div>
           @enderror
          </div>
        </div>
        
           </div>

           <input type="hidden" name="active" value="0"> 
           <input type="hidden" name="id_prof" value="{{ $id_prof }}"> 
            <button type="submit" class=" btn btn-primary">Créer</button>
           
      </form>
    </div>
    </div>
    </div>

  </div>
</div>
 
  </section>     
 @endsection