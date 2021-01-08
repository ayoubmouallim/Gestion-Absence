<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matiere;
use App\Filiere;
use App\Semestre;
use App\Enseignant;

class matiereController extends Controller
{
   
    public function __construct()
{
    $this->middleware('auth');
}

    public function addMatiere()
    {
        $filieres=Filiere::select('id','nom_filiere')->get();
        $semestres=Semestre::select('id','nom_sem')->get();
        $profs=Enseignant::select('id','nom_ens')->get();

        return view('admin.matiere.addMatiere',compact('filieres','semestres','profs'));
    }
    public function showAllMatiere()
    {
        
        $matieres=Matiere::with('filieremat','semestre','enseignantMatiere')->get();
       // return $matieres;
        return view('admin.matiere.showAll',compact('matieres'));
    }

    public function saveMatiere(Request $request){
    
        // validation
        $request->validate([
            'nom' => 'required',
            ]);
            
        // save matiere in DB
        try {
            
            Matiere::create(
                [
                    'nom_mat' => $request->nom,
                    'id_filiere' => $request->filiere,
                    'id_sem' => $request->semestre,
                    'id_ens' => $request->prof,
                ]
                );
                   
                return redirect()->route('show.all.matiere')->with(['success' => 'Matiere est ajouté avec succès']);
                
            } catch (\Exception $ex) {
                
                
                return redirect()->route('add.matiere')->with(['error' => 'Erreur !']);
        }
        
      
    }

    public function editMatiere($id)
    {

        $matiere=Matiere::find($id);
        if(!$matiere)
          return redirect() -> route('show.all.matiere') -> with(['error' => "Matiere n'existe pas !"]);
         
           $filieres=Filiere::select('id','nom_filiere')->get();
           $semestres=Semestre::select('id','nom_sem')->get();
           $profs=Enseignant::select('id','nom_ens')->get();

           //return $matiere;
        return view('admin.matiere.update',compact('matiere','filieres','semestres','profs'));
    }

    public function updateMatiere(Request $request)
    {
        
     // validation
     $request->validate([
        'nom' => 'required',
        ]);
        
      // save changes  
      try {
            
        Matiere::where('id',$request ->id) -> update([
            'nom_mat' => $request->nom,
            'id_filiere' => $request->filiere,
            'id_sem' => $request->semestre,
            'id_ens' => $request->prof,
          ]);
               
            return redirect()->route('show.all.matiere')->with(['update' => 'Matiere est modifie avec succès']);
            
        } catch (\Exception $ex) {
            
            
            return redirect()->route('add.matiere')->with(['error' => 'Erreur !']);
    }
      
    }

    public function deleteMatiere($id)
    {
        $matiere=Matiere::find($id);
        if(!$matiere)
           return redirect() -> route('show.all.matiere') -> with(['error' => "Matiere n'existe pas !"]);

           Matiere::where('id',$id) -> delete();
           return redirect()->route('show.all.matiere')->with(['delete' => 'Matiere est supprimé avec succes']); 
    }

    


}
