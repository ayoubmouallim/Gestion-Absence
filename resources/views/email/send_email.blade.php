@extends('layouts.administration')

@section('content')

<style>

.form4 {
    background-color: white;
    background-size: cover
}

.top {
    padding-top: 100px;
    padding-bottom: 100px
}

.form-bg {
    background: blue;
    padding: 20px
}

.form {
    background-color: white !important;
    padding: 20px
}

.form-group {
    margin-bottom: 20px
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0
}

.form-control {
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-bottom: 1px solid #61615e;
    background: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

button.btn {
    display: block;
    padding: 11px 32px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    margin: 30px 0px
}

.btn-blue {
    background-color: #4285f4;
    color: #fff;
    border: 1px solid #4285f4
}
</style>

  </section>
  <div class="form4 top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                <div class="form-bg">
                <h3 align="center">Envoyer un avertissement d'absence auz Etudiants</h3><br />

                    <form class="form" method="post"  action="{{ route('send')}}">
                    @csrf
                        <div class="form-group"> <label class="sr-only">Name</label> <input name="name" type="text" class="form-control"  placeholder="Enter le nom de Etudiant(e)"> </div>
                        <div class="form-group"> <label class="sr-only">Email</label> <input name="email" type="email" class="form-control"  placeholder="Entrer adresse Email"> </div>
                        <div class="form-group"> <label class="sr-only">Name</label> <textarea name="message" class="form-control"  rows="7" placeholder="Entrer le message"></textarea> </div>
                         <button type="submit" class="btn text-center btn-info">Envoyer Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

