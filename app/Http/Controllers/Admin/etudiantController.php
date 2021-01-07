<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matiere;
use App\Filiere;
use App\Semestre;
use App\Enseignant;
use App\Etudiant;

class etudiantController extends Controller
{
    //la fonction qui permet de retourner le data du filiere u 
    public function addStudent()
    {    
        $filieres=Filiere::select('id','nom_filiere')->get();

        return view('admin.etudiant.addStudent',compact('filieres'));
      
    }
   // la fonction qui permet d'afficher les information  des etudiants 
    public function showAllStudent()
    {
        $students=Etudiant::with('filiere')->get();
         //return $matieres;
        return view('admin/etudiant/showAll',compact('students'));
    }
    //la fonction qui permet d'ajouter et enregistrer les etudiant 
    public function saveStudent(Request $request){
    
        // les données nesessaires dans l'ajoute 
        
        $request->validate([
            'nom' => 'required', 
            'cne'=> 'required ',
            'prenom'=>'required',
            'phone'=>'required',
            ]);         
        // enregistrer les données dans la base de données 
        try {
            Etudiant::create(
                [
                    'cne' => $request->cne,
                    'nom_etu' => $request->nom,
                    'prenom_etu' => $request->prenom,
                    'phone_etu' => $request->phone,
                    'id_filiere' => $request->filiere,
                    'id_user'=> 4,
                ]
                );
                //afficher un message de success si  les données des etudiants sont bein enregistrées 
                return redirect()->route('show.all.student')->with(['success' => 'Etudiant est ajouté avec succès']);
                
            } catch (\Exception $ex) {
                //afficher un message d'erreur  si  les données des etudiants ne sont pas bein enregistrées 
                //return $ex;
                return redirect()->route('add.student')->with(['error' => 'Erreur ! ']);
        }
    }
   //la fonction utilises dans la modification des données des étudiants 
    public function editStudent($id)
    {
        $etudiant=Etudiant::find($id);
        if(!$etudiant)
           return redirect() -> route('show.all.student') -> with(['error' => "Etudiant n'existe pas !"]);
         
           $filieres=Filiere::select('id','nom_filiere')->get();
        return view('admin.etudiant.update',compact('filieres','etudiant'));
    }

    //la fonction permet de modifier les données des étudiants
    public function updateStudent(Request $request)
    {
        
        $request->validate([
            'nom' => 'required', 
            'cne'=> 'required ',
            'prenom'=>'required'
            ]);         
        try {
            Etudiant::where('id',$request ->id) -> update(
                [
                    'cne' => $request->cne,
                    'nom_etu' => $request->nom,
                    'prenom_etu' => $request->prenom,
                    'phone_etu' => $request->phone,
                    'id_filiere' => $request->filiere,
                    'id_user'=> 4
                ]);
                // un message de success afficher si les données sont bein modifiées 
                return redirect()->route('show.all.student')->with(['update' => 'Etudiant est modifié avec succès  ']);
                
            } catch (\Exception $ex) {
                //  // un message d'erreur  s'il y a pas de modification 
                return redirect()->route('add.student')->with(['error' => 'Erreur !']);
        }
      
    }
  // la fonction qui permet de supprimer un étudiant 
    public function deleteStudent($id)
    {
        $student=Etudiant::find($id);
        if(!$student)
           return redirect() -> route('show.all.student') -> with(['error' => "Etudiant n'existe pas !"]);

           Etudiant::where('id',$id) -> delete();
           return redirect()->route('show.all.student')->with(['delete' => 'Etudiant est supprimé avec succes']); 
    }

}