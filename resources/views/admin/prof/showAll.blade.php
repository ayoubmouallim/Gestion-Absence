@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enseignant</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        @if (Session::has('success'))
         <div class="alert alert-warning"> {{ Session::get('success') }} </div>
        @endif
        @if (Session::has('ajoute'))
         <div class="alert alert-success"> {{ Session::get('ajoute') }} </div>
        @endif
        @if (Session::has('delete'))
         <div class="alert alert-danger"> {{ Session::get('delete') }} </div>
        @endif
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Numero de Telephone</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($profs as $p)
                  <tr>

                    <td>{{ $p->nom_ens }}</td>
                    <td>{{ $p->prenom_ens }}</td>

                    <td>{{ $p->adresse_ens }}</td>
                    <td>{{ $p->phone_ens }}</td>
                    <td> <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <a href="{{ route('editprof',$p->id)  }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ route('deleteprof',$p->id ) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                          </li>  
                        </ul></td>
                  </tr>

                   @endforeach
                  
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