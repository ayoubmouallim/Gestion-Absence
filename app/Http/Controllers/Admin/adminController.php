<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matiere;
use App\Filiere;
use App\Semestre;
use App\Enseignant;
use App\Etudiant;
use App\User;
use App\Departement;


class adminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
         $users = User::count();
         $etudiants = Etudiant::count();
         $enseignants = Enseignant::count();
         $matieres = Matiere::count();
         $filieres = Filiere::count();
         $semestres = Semestre::count();
         $departements = Departement::count();
        return view('admin.dashboard',compact('users','etudiants','enseignants','matieres','filieres','semestres','departements'));

    }

}
