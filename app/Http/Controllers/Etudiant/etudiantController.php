<?php

namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index()
    {
        return view('Etudiant.EspaceEtudiant');
    }

}
