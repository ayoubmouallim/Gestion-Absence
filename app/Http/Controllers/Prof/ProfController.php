<?php

namespace App\Http\Controllers\Prof;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Etudiant;
use App\Filiere;

use App\Matiere;
use App\Enseignant;
use App\Seance;
use App\Absence;
use Auth;

class ProfController extends Controller
{
    public function index()
    {
        return view('Enseignant.EspaceProf');
    }
    
    public function createSeance()
    {
        // get id of the current teacher
        $id_prof=Enseignant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        
        $matieres=Matiere::select('id','nom_mat')->where('id_ens','=',$id_prof)->get();
        
        return view('Enseignant.createSeance',compact('matieres','id_prof'));
    }

    public function saveSeance(Request $request)
    {
        //validation
  
        $request->validate([
            'date' => 'required',
            'H_debut' => 'required',
            'H_fin' => 'required',
        ]);
       
      // save into DB
  try {
   
        $seance = new Seance;
        $seance -> date = $request->input('date');
        $seance -> heure_debut = $request->input('H_debut');
        $seance -> heure_fin = $request->input('H_fin');
        $seance -> id_ens = $request->input('id_prof');
        $seance -> id_mat = $request->input('matiere');
        $seance -> type = $request->input('type_seance');
        $seance -> active = $request->input('active');

        $seance ->save();

        return redirect()->route('list.seance')->with(['success' => 'seance est Bien Ajoute']);
    
    } catch (\Exception $ex) {
    
        return redirect()->route('create.seance')->with(['error' => 'Erreur!!! ']);
    }

    }
// fonction permet d'afficher la liste des seances de l'ensaignant courant ayant le champ 'active=0'

    public function listSeance()
    {
       $id_prof=Enseignant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        $seances = Seance::with('seancematiere')->where('id_ens','=',$id_prof)->get();

        return view('Enseignant.listSeance',compact('seances'));
    }

// fonctions pour noter absence
public function PageNoteAbsence($id){
  
    //retourner id de la seance a partir du liste des seances
    $seance = Seance::findOrFail($id);
    $id_matiere = $seance->id_mat;//la matiere de cette seance
    //recuperer la filiere a partir du id_matiere
    $filiere = Matiere::find($id_matiere)->filieremat()->get();
  foreach($filiere as $f){

    $id_fil = $f->id;
    $etudiants = Etudiant::where('id_filiere',$id_fil)->get();
  }

    return view('Enseignant.NoterAbsence',compact('seance','etudiants','filiere'));
}
public function saveAbsence(Request $request)
{
   
     // validation
     $request -> validate([
         'absence.*.id_etu' => 'required |numeric',
         'absence.*.etat' => 'required |numeric|in:0,1',
     ]);

    $absences = $request->absence;
    $tableAbsence=[];
  try {
       foreach ($absences as $absence) {
        
          $tableAbsence[]= [
       
            'id_sea' => $request->id_sea,
            'id_etu' => $absence['id_etu'] ,
            'etat' => $absence['etat'] ,
            'justification' => $absence['justification'] , 
        ];
        
    }
     // inserer les absences dans la table absence
    Absence::insert($tableAbsence);
    // remplacer la valeur du champ 'active' par '1' pour ne pas re-enregistrer l'absence la deuxieme fois
    Seance::where('id',$request->id_sea)->update(['active' => 1]);

       return redirect()->route('list.seance')->with(['success' => 'absence est bien ajouter ']);
  } catch (\Exception $ex) {
      return $ex;
    return redirect()->route('list.seance')->with(['error' => 'Erreur!!! ']);
  }
 
}

// afficher l'historique d'absence 
public function historiqueAbsence()
{
    $id_prof= Enseignant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
    
    $matieres = Matiere::where('id_ens','=',$id_prof)->get();
    $seances = Seance::with('seancematiere')->where('id_ens','=',$id_prof)
    ->where('active',1)
    ->get();
    
    foreach($seances as $key=>$s){
        $absence[$key] = $s->absences()->get();   
    }

     
   return view('Enseignant.historiqueAbsence',compact('seances','absence','matieres'));
}

}

