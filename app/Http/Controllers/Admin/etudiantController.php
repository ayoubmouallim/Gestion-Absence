<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    

    public function addStudent()
    {
        return view('admin.etudiant.addStudent');
    }
    public function showAllStudent()
    {
        return view('admin.etudiant.showAll');
    }
}
