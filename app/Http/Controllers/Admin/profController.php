<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profController extends Controller
{
   

    public function addProf()
    {
        return view('admin.prof.addProf');
    }
    public function showAllProf()
    {
        return view('admin.prof.showAll');
    }
}
