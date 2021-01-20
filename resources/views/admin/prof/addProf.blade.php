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
            <h3 class="card-title">Ajouter un enseignant</h3>

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
                 <form  method="POST" action="{{ route('save') }} ">
                @csrf
                  <label>Email</label>
                  <input type="email" name="email" class="form-control">
                  @error('email')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control ">
                  @error('nom')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" name="prenom" class="form-control ">
                    @error('prenom')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="form-control ">
                  @error('adresse')
                  <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                 @enderror
                </div>
                <!-- /.form-group -->
            
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Numero de Téléphone</label>
                    <input type="int" name="tel" class="form-control">
                    @error('tel')
                    <div class="alert alert-danger btn-sm" style="background: none; border:none;color:red" > {{ $message }} </div>
                   @enderror
                  </div>
                <!-- /.form-group -->
            
                <!-- /.form-group -->
              </div>
                    
<button type="submit" class="btn btn-primary">Ajouter</button>
          
</form>      

            </div>
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection