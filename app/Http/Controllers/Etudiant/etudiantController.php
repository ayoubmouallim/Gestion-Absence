<?php
namespace App\Http\Controllers\Etudiant;
use App\Etudiant;
use App\Absence;
use App\Matiere;

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
        $absence = Absence::find($id_etu)
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
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        $et=Etudiant::find($id_etu);
        if ($request->hasFile('photo')){
            $et->photo=$request->photo->store('images');// recuperer le path de images 
        }
          session()->flash('success','la photo est bein ajouter !!');
          $et->save(); 
        return redirect('profil'); 

    }

}
