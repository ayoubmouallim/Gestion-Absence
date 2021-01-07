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
              @if (Session::has('success'))
              <div class="col-md-8 offset-md-2">  
                <div class="alert  text-center alert-success"> {{ Session::get('success') }} </div>
              </div>
            @endif
            @if (Session::has('update'))
              
              <div class="col-md-8 offset-md-2">  
                <div class="alert  text-center alert-warning"> {{ Session::get('update') }} </div>
              </div>

            @endif
            @if (Session::has('delete'))
              <div class="col-md-8 offset-md-2">  
              <div class="alert  text-center alert-danger"> {{ Session::get('delete') }} </div>
            </div>
            @endif
            @if (Session::has('error'))
            <div class="col-md-8 offset-md-2">  
              <div class="alert  text-center alert-danger"> {{ Session::get('error') }} </div>
            </div>
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