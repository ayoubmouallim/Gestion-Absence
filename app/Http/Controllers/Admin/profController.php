<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
class profController extends Controller
{
   
    public function __construct()
{
    $this->middleware('auth');
}

    public function addProf()
    {
        return view('admin.prof.addProf');
    }
    public function showAllProf()
    {
        $profs = Enseignant::all();
        return view('admin.prof.showAll',compact('profs'));
    }

    public function save(Request $request)
    {  
         $request->validate([

            'tel' => 'required',

         ]);    
        //return $request;
        $user = new User;
        $email= $request->input('email');
        $password =  Hash::make($request->input('password'));
        $name= strstr($email,'@',true);
        $user->id_role = 3;
        $user->name = $name;
        $user->email = $email;
        $user->password =$password;

        $user->save();
        $iduser = $user->id;

        $prof = new Enseignant;
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $adresse = $request->input('adresse');
        $phone = $request->input('tel');

        $prof->nom_ens = $nom;          
        $prof->prenom_ens = $prenom;
        $prof->adresse_ens = $adresse;
        $prof->phone_ens = $phone;
        $prof->id_user = $iduser;
        $prof->save();
       
        return redirect()->route('show.all.prof')->with(['ajoute' => 'Enseignant est ajouté avec succès ']);

    }

    public function editProf($id)
    {
        $prof =Enseignant::find($id);
        if(!$prof)
          return redirect() -> route('show.all.prof') -> with(['error' => "Enseignant n'existe pas !"]);
         
        return view('admin.prof.update',compact('prof'));
    }

    public function updateprof(Request $request)
    {
    $request->validate([
        'nom' => 'required', 
        'prenom'=> 'required ',
        'adresse'=>'required',
        'tel'=>'required'

        ]);         
    try {
        Enseignant::where('id',$request ->id) -> update(
            [
                'nom_ens' => $request->nom,
                'prenom_ens' => $request->prenom,
                'adresse_ens' => $request->adresse,
                'phone_ens' => $request->tel,
            ]);
            // un message de success afficher si les données sont bein modifiées 
            return redirect()->route('show.all.prof')->with(['success' => ' Enseignant est ajouté avec succès']);
            
        } catch (\Exception $ex) {
            //  // un message d'erreur  s'il y a pas de modification 
            return redirect()->route('add.prof')->with(['error' => 'Erreur !']);
    }

   

  
}
public function deleteprof($id)
{
    $prof = Enseignant::find($id);
    if(!$prof)
       return redirect() -> route('show.all.prof') -> with(['error' => "Enseignant n'existe pas !"]);

       Enseignant::where('id',$id) -> delete();
       return redirect()->route('show.all.prof')->with(['delete' => 'Enseignant supprimé avec succès']); 
}

}
