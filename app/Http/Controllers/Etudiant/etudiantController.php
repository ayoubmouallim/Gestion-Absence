<?php

namespace App\Http\Controllers\Etudiant;
use App\Etudiant;
use App\Absence;
use App\Matiere;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index()
    {
        return view('Etudiant.EspaceEtudiant');
    }

    public function listeAbsenceEtudiant(){
        $matieres= Matiere::all();
        //recuperer id de etudiant authentifie 
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        //recuperer les absences de etudiant concerne par ce ID mais juste les absenace pas les presences
        $absence = Absence::find($id_etu)
        ->where('etat',1)
        ->get();

        return view('Etudiant.listeAbsenceEtudiant',[
            'absences' => $absence,
            'matieres' => $matieres
        ]);
    }
    public function     GetDataProfil(){
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        $etudiant=Etudiant::find($id_etu);
        return view("Etudiant.profil",['e'=>$etudiant]);
    }

}
