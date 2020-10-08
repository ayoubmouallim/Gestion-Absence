@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion des étudiants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ajouter</li>
              <li class="breadcrumb-item active">Modifier</li>
            </ol>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Phone</th>
                    <th>Filière</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @isset($students)
                    @foreach ($students as $student)
                    <tr>
                      <td>{{$student->cne}}</td>
                      <td>{{$student->nom_etu}}</td>
                      <td>{{$student->prenom_etu}}</td>
                      <td>{{$student->phone_etu}}</td>
                      <td>{{$student->filiere->nom_filiere}}</td>
                    
                      <td>
                        <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <a href="{{ route('edit.student',$student->id) }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ route('delete.student',$student->id) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
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