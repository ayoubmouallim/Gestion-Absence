@extends('layouts.admin')

@section('content')
<style>
  .card-body set {
    background: none; 
    margin-top:3px;
    color: red;
    border: none;
  }


</style>
   
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1 >Ajouter des étudiants</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ajouter un étudiant </h3>

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
           
                 <form  action="{{ route("save.student") }}" method="POST" >
                  @csrf
                  <div class="text-center col-md-8 offset-md-2">
                 @if (Session::has('error'))
                     <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                 @endif
                  
                 @if (Session::has('success'))
                     <div class="alert alert-danger"> {{ Session::get('success') }} </div>
                 @endif

                  </div>

                 <div class="row">

                  <div class="col-md-6">
                     <div class="form-group">
                  <label>CNE</label>
                  <input type="text" name="cne" class="form-control" value="{{old('cne')}}">
                  @error('cne')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" name="prenom" class="form-control" value="{{old('prenom')}}">
                    @error('prenom')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                  </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control " value="{{old('nom')}}">
                  @error('nom')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                 </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    <label>Numéro de Téléphone</label>
                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
                    @error('phone')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Filière</label>
                <select class="form-control select2" style="width: 100%;" name="filiere">
                  @isset($filieres)
                  @foreach ($filieres as $filiere)
                
                <option value="{{ $filiere->id }}">{{ $filiere->nom_filiere }}</option>

                  @endforeach
                  @endisset
                </select>
              </div>
              </div>
              </div>
              <!-- /.col -->      
            <button type="submit" class="btn btn-primary">Ajouter</button>
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
