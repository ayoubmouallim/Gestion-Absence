@extends('layouts.enseignant')

 @section('content')


     <section class="reclamation">
       <div class="conctainer-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">  
            @if (Session::has('delete'))
            <div class="alert alert-danger text-center"> {{ Session::get('delete') }} </div>
           @endif
            <div class="card">
              <div class="card-header">
                <h3 class=" text-center">Réclamation</h3>
              </div>
               
              <div class="card-body">
                <ul class="list-group">
                  @foreach ($recs as $rec)
                  <li class="list-group-item">
                    <div class="text-right">
                      <a href="{{ route('delete.rec',$rec->id) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                    </div>
                  <h5>{{$rec->reclamation_etu['nom_etu']}} {{$rec->reclamation_etu['prenom_etu']}} | {{$rec->reclamation_etu->filiere['nom_filiere']}}</h5>
                  <p class="lead">{{$rec->message}}</p>
                  <small>{{$rec->date}}</small>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>       
       </div>
       </div>
      </div>
     </section>

     
 @endsection