<?php

namespace App\Http\Controllers\Administration;
use App\Absence;
use App\Matiere;
use App\Etudiant;
use App\Seance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class administrationController extends Controller
{
    //
    public function ListeEtudiantsAbs(){
$matieres  = Matiere::all();
    $absences = Absence::where('etat',1)->paginate(6);     
    return view('administration.listeEtudiantAbs',compact('absences','matieres'));
}
}
