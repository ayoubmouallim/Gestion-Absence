<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class matiereController extends Controller
{
   

    public function addProf()
    {
        return view('admin.matiere.addMatiere');
    }
    public function showAllProf()
    {
        return view('admin.matiere.showAll');
    }
}
