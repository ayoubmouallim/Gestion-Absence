<?php

namespace App\Http\Controllers\Prof;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Matiere;
use App\Enseignant;
use App\Seance;
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
}
