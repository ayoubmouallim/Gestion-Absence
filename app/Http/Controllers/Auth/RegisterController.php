<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\User;
use App\Etudiant;
use App\Record;
use App\Matiere;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
           // 'role_id' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }

  //  redirection vers cne page 
    public function cnePage()
    {
        return view('auth.cnePage');
    }


    //  redirection vers register page si cne est valide 

    public function showRegistrationForm(Request $request)
    {
      //  return $request;
       // validation cne 
       $cne=$request ->cne;
       $etudiant =Etudiant::where('cne',$cne)->get();

      if(!$etudiant->all())
       {
         return redirect()->route('cne.page')->with(['error' => "Tu n'es pas un étudiant de l'ENSET"]);  
       } 
        return view('auth.register',compact('cne'));
    }


    public function register2(Request $request)
    {   
        // validation request
        $request -> validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
         ]);
         
         try {

       $user =new User;
             
       $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_role' => $request->id_role,
            'password' => Hash::make($request->password),
        ]);

        // affecter id de l'utilisateur a l'etudiant
        Etudiant::where('cne',$request->cne)->update([
            'id_user' =>$user->id,
       ]); 


              //-------------   to initialize record table  ----------------//
              $etudiant = Etudiant::select('id','id_filiere')->where('cne',$request->cne)->get();
              $id_etu = $etudiant[0]->id;
              $id_filiere = $etudiant[0]->id_filiere;
              $matieres=Matiere::select('id')->where('id_filiere',$id_filiere)->get();
              $tableARecords=[];
              foreach ($matieres as $matiere) {
              
              $tableARecords[]=[
               'id_etu' => $id_etu,
               'id_mat' => $matiere->id,
               'nombre_Heure' => 0,
              ];
           }
           
                Record::insert($tableARecords);
              
              //------------------------------------------------------------//

       return redirect()->route('login')->with(['success' => 'Vous êtes enregistré avec succès, connectez-vous pour continuer']);
    } catch (\Exception $ex) {
        return $ex;
        return redirect()->route('cne.page')->with(['error' => 'Erreur!!']);
    }
       
    }

}
