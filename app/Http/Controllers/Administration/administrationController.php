<?php

namespace App\Http\Controllers\Administration;
use App\Absence;
use App\Matiere;
use App\Etudiant;
use App\Seance;
use App\Record;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class administrationController extends Controller
{
    public function ListeEtudiantsAbs(){
 

        $etudiants=Etudiant::paginate(6);
        $matieres  = Matiere::all();
           
       return view('administration.listeEtudiantAbs',compact('etudiants','matieres'));
       }
   


       public function detailAbsence($id)
       {
         // verifier si etudiant est existe
         $etudiant=Etudiant::find($id);
           if(!$etudiant)
              redirect() -> route('adminiabs') -> with(['Erreur' => "Etudiant n'existe pas !!!"]);
         
         $nobreHeures=calculerNombreTotalHeure($id);
         $absenceParSeance = Absence::where('id_etu',$id)->where('etat',1)->get(); 
         $absenceParMatires=Record::where('id_etu',$id)->with('etudiantrecord','recordmatiere')->get();
            
         return view('administration.detailAbsence',compact('absenceParSeance','absenceParMatires','etudiant','nobreHeures'));
       }
}
