
@extends('layouts.etudiants')
@section('content')



    <section class="reclamation">
      <div class="conctainer-fluid">
       <div class="row">
         <div class="col-md-8 offset-md-2">  
             
     @if (Session::has('success'))
     <div class="alert alert-success text-center"> {{ Session::get('success') }} </div>
     @endif
     @if (Session::has('error'))
     <div class="alert alert-danger text-center"> {{ Session::get('error') }} </div>
     @endif

           
           <div class="card">
             <div class="card-header bg-light">
               <h3 class=" text-center">Envoyer une réclamation</h3>
             </div>

             <div class="card-body">
               <form action="{{ route('save.reclamation') }} " method="post" enctype="multipart/form-data">
                 
                 @csrf
                  <div class="form-group">
                   <label for="exampleInputPassword1">Date</label>
                  
                  <input type="text" name="date" class="form-control " value="{{ now() }}">
                   @error('date')
                   <div class="alert alert-danger text-center">{{ $message }}</div>
                     @enderror
                 </div>
                   
                   <div class="form-group">
                       <label>Enseignant</label>
                       <select class="form-control select2" style="width: 100%;" name="id_prof" >
                         @isset($profs)
                         @foreach ($profs as $prof)
                           
                       <option value="{{ $prof->id }}">{{ $prof->nom_ens }}</option>
                       
                         @endforeach
                         @endisset
                       </select>
                     </div>

                       <div class="form-group  @if ($errors->get('title')) has-error @endif">
                           <label for="">Message</label>
                          <textarea name="message" class="form-control " >{{old('message')}}</textarea>
                          @error('messages')
                          <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       </div>
                       <input type="hidden" name="id_etu" value="{{ $id_etu }}"> 
                       <div class="form-group" style="margin-top: 15px">
                           <input type="submit" class=" btn btn-primary " value="Envoyer">
                       </div>
                   </form>
             </div>
            </div>         
      </div>
      </div>
     </div>
    </section>
@endsection