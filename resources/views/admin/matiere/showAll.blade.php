@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Matiere</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (Session::has('success'))
         <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if (Session::has('update'))
         <div class="alert alert-warning"> {{ Session::get('update') }} </div>
        @endif
        @if (Session::has('delete'))
         <div class="alert alert-danger"> {{ Session::get('delete') }} </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Filiere</th>
                    <th>Prof</th>
                    <th>Semestre</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @isset($matieres)
                    @foreach ($matieres as $matiere)
                    <tr>
                      <td>{{$matiere->nom_mat}}</td>
                      <td>{{$matiere->filieremat->nom_filiere}}</td>
                      <td>{{$matiere->enseignantMatiere->nom_ens}}</td>
                      <td>{{$matiere->semestre->nom_sem}}</td>
                      <td>
                        <ul class="list-inline m-0">
                 
                          <li class="list-inline-item">
                          <a href="{{ route('edit.matiere',$matiere->id) }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ route('delete.matiere',$matiere->id) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                          </li>
                      </ul>
                      </td>
                    </tr>
                    @endforeach
                @endisset                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection