@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>Ajouter Enseignant</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ajouter un Enseignant</h3>

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
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" name="prenom" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" name="adresse" class="form-control ">
                </div>
                <!-- /.form-group -->
            
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Numero de Telephone</label>
                    <input type="int" name="tel" class="form-control">
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

      
      
      
      </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  @endsection