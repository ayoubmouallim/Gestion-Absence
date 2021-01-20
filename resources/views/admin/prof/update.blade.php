@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>Gestion des enseignants</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Modifier un  Enseignant</h3>

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
                 <form  action=" {{ route('updateprof',$prof->id ) }}" method="POST" >
                  @csrf
                  @method('PUT')
              
                  <div class="col-md-8 offset-md-2">  
                 @if (Session::has('error'))
                     <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                 @endif
                  </div>
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control" value="{{  old('nom',$prof->nom_ens) }}">
                  @error('nom')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" name="prenom" class="form-control" value="{{  old('prenom',$prof->prenom_ens) }}">
                    @error('prenom')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="form-control " value="{{  old('adresse',$prof->adresse_ens) }}">
                  @error('adresse')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                 </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    <label>Numéro de Téléphone</label>
                    <input type="text" name="tel" class="form-control " value="{{  old('tel',$prof->phone_ens) }}">
                    @error('tel')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
                <!-- /.form-group -->
              </div>
            
              <button type="submit" class="btn btn-primary">Modifier</button>

              </div>
              </div>
              <!-- /.col -->    
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