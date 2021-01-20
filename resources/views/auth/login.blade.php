@extends('layouts.accueil')

@section('content')
<style>
    .form_bg{
   background-image: linear-gradient(128deg, #1074cd, #4939a5);

min-height: 100vh;
display: flex;
align-items: center;
padding-top: 20px;
padding-bottom: 20px;
}
.form_bg .feat{
   padding: 10%;
   margin-top: 30px;
   margin-bottom: 10%;
   border-radius: 10px;
   background: white;
   padding-top: 40px;
   padding-bottom: 30px
}
.form_bg .form_horizontal{
   font-family: 'lato',sans-serif;
   text-align: center;
}
.form_bg .form_horizontal .form_icon{
   color: rgb(102, 97, 97);
   font-size: 100px;
   line-height: 85px;
   margin: 0 0 13px ;
}
.form_bg .form_horizontal .title {
   color: rgb(29, 25, 25);
   font-size: 23px;
   font-weight:700;
   letter-spacing: 1px;
   text-transform: uppercase;
   margin: 0 0 35px 0;
}
.form_bg .form_horizontal .form-group {
   margin: 0 0 10px;
   position: relative;

}

.form_bg .form_horizontal .form-control {
   color: #555;
   background-color: #fff;
   font-size: 13px;
   letter-spacing: 1px;
   height: 37px;
   padding: 2px 15px 2px 35px;
   border-radius: 50px;
}
.form_bg .form_horizontal .form-control ::placeholder{
color:rgba(0,0, 0, 0.7) ;
font-size: 14px;
text-transform: capitalize;
}

.form_bg .form_horizontal .btn{

   color: #fff;
   font-size: 15px;
   font-weight: 600;
   letter-spacing: 1px;
   width: 100%;
   padding: 10px 20px;
   margin: 0 0 15px  0;
   border: none;
   border-radius: 20px;
   text-transform: uppercase;
}

   .form_bg .form_horizontal .form-options{
 margin: 0;
 padding: 0;
 list-style: none;
}
.form_bg .form_horizontal .form-options li a {
   color:blue ;
    text-transform: lowercase;
   letter-spacing: 0.5px;
   margin: 0 0 10px;
   display: block;
   }
  .form_bg .form_horizontal .form-options li a i {
   font-size: 12px;
    }






   </style>  
  <section class="form_bg">
     <div class="container">
      <div class="row">
         <div class=" offset-md-3 col-md-6   text-center">
            @if (Session::has('success'))
            <span class="alert alert-success">{{ Session::get('success') }}</span>
           @endif
          </div>
       </div>
       <div class="row">
        
         <div class=" offset-md-3 col-md-6   ">
      
           <div class="feat">
           <form class="form_horizontal"  method="POST" action="{{ route('login') }}">
            @csrf
             <div class="form_icon">
               <i class="fa fa-user-circle"></i>
             </div>
             <h3 class="title">Connecter</h3>

             <div class="form-group">
               <input id="email" type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
             @enderror
            </div>

             <div class="form-group">
               
               <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
               @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
            </div>
 
           
                <button  type="submit" class="btn btn-primary  ">{{ __('CONNECTER') }}</button>
                <ul class="form-options">
                  <li>
                  
                      @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}" >
                        Mot de passe oublié ?
                      </a>
                  @endif
                    </li>
                    <li><a href="{{route('cne.page')}}">Créer nouveau compte </a></li>
                 </ul> 
           </form>
         </div>
       </div>
     </div>
     </div>
  </section>
@endsection
