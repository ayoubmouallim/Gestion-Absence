<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
class profController extends Controller
{
   

    public function addProf()
    {
        return view('admin.prof.addProf');
    }
    public function showAllProf()
    {
        return view('admin.prof.showAll');
    }

    public function save(Request $request)
    {
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
        
        return redirect()->route('show.all.prof');
    }

}
