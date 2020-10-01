@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Matiere</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Matiere</li>
              <li class="breadcrumb-item active">Add Matiere</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Matiere</h3>

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
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Filiere</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option>GLSID</option>
                      <option>BDCC</option>
                    </select>
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Prof</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option>Naji</option>
                      <option>Daaif</option>
                      <option>Youssefi</option>
                    </select>
                  </div>
                
              </div>
              <!-- /.col -->
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