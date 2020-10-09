@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter Matiere</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ajouter Matiere</h3>

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

            <form action="{{ route("save.matiere") }}" method="post">
             
              @csrf
              @error('nom')
              <div class="alert alert-danger "> {{ $message }} </div>
          @enderror
            
             @if (Session::has('error'))
                 <div class="alert alert-danger"> {{ Session::get('error') }} </div>
             @endif
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control ">
                  
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Filiere</label>
                    <select class="form-control select2" style="width: 100%;" name="filiere">
                      @isset($filieres)
                      @foreach ($filieres as $filiere)
                    
                    <option value="{{ $filiere->id }}">{{ $filiere->nom_filiere }}</option>

                      @endforeach
                      @endisset
                  
                    </select>
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Prof</label>
                    <select class="form-control select2" style="width: 100%;" name="prof">
                      @isset($profs)
                      @foreach ($profs as $prof)
                        
                    <option value="{{ $prof->id }}">{{ $prof->nom_ens }}</option>
                    
                      @endforeach
                      @endisset
                    </select>
                  </div>
                <div class="form-group">
                    <label>Semestre</label>
                    <select class="form-control select2" style="width: 100%;" name="semestre">
                      @isset($semestres)
                      @foreach ($semestres as $semestre)
                    
                    <option value="{{ $semestre->id }}">{{ $semestre->nom_sem }}</option>

                      @endforeach
                      @endisset
                      
                      
                    </select>
                  </div>
                  
                </div>
                <!-- /.col -->
              </div>
              <input type="submit" value="ajouter" class="btn btn-primary">
          </form>
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