<?php
namespace App\Http\Controllers\Etudiant;
use App\Etudiant;
use App\Absence;
use App\Matiere;
use App\Reclamation;
use App\Enseignant;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
        $absence = Absence::where('id_etu',$id_etu)
        ->where('etat',1)
        ->get();

        return view('Etudiant.listeAbsenceEtudiant',[
            'absences' => $absence,
            'matieres' => $matieres
        ]);
    }
    public function   GetDataProfil(){
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        $etudiant=Etudiant::find($id_etu);
        return view("Etudiant.profil",['e'=>$etudiant]);
    }


    public function update(Request $request)
    {
     //  return public_path();
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        $et=Etudiant::find($id_etu);
        //returns true if request has the file
        if ($request->hasFile('photo')){
            // store permet de stocket de l'image dans le disks par default qui est 'local' (filesystem.php)
            $et->photo=$request->photo->store('images');// recuperer le path de images 
        }
          session()->flash('success','la photo est bien ajouter !!');
          $et->save(); 
        return redirect()->route('profil'); 

    }

    public function sendReclamation()
    {  $profs=Enseignant::all();
        
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        return view('Etudiant.reclamation',compact('profs','id_etu'));
    }
     // enregister la réclamations dans BD 
    public  function saveReclamation(Request $request){

      $request->validate([
          'date'=>'required',
          'message' => 'required',
      ]) ;

          $rec =new Reclamation;
          $rec->message=$request->input('message');
          $rec->date=$request->input("date");
          $rec->id_prof=$request->input('id_prof');
          $rec->id_etu=$request->input('id_etu');

        $rec->save();
        return redirect()->route('reclamation')->with(['success' => 'La réclamation est envoyé avec succès']);
    
}

}
