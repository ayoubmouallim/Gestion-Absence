@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>modifier un étudiant</h1>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Modifier un étudiant</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <div class="col-md-6">
                 <div class="form-group">
                 <form  action="{{ route("update.student") }}" method="POST" >
                  @csrf
                  @error('nom')
                  <div class="alert alert-danger "> {{ $message }} </div>
                 @enderror
                
                 @if (Session::has('error'))
                     <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                 @endif
                

                  <label>CNE</label>
                  <input type="text" name="cne" class="form-control" value="{{ $etudiant->cne }}">
                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="prenom" class="form-control" value="{{ $etudiant->nom_etu }}">
                  </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                  <label>Prenom</label>
                  <input type="text" name="nom" class="form-control " value="{{ $etudiant->prenom_etu }}">
                 </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control " value="{{ $etudiant->phone_etu }}">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Filiere</label>
                <select class="form-control select2" style="width: 100%;" name="filiere">
                    @isset($filieres)
                    @foreach ($filieres as $filiere)
                  
                  <option value="{{ $filiere->id }}" @if ($filiere->id == $etudiant->id_filiere) selected @endif>{{ $filiere->nom_filiere }}</option>
  
                    @endforeach
                    @endisset
                  </select>
              </div>

              </div>
              </div>
              <!-- /.col -->    
                <input type="hidden" name="id" value="{{ $etudiant->id }}">
                <input type="submit" value="Modifier" class="btn btn-primary">  
            
          </form>      
              
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection