<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seance;
use App\Etudiant;

class Absence extends Model
{
    //
    protected $fillable = [
        'status','justification','id_sea','id_etu'
    ];

    public function seanceabs(){
        return $this->belongsTo('App\Seance','id_sea');
    
    }
    public function etudiantabs(){
        return $this->belongsTo('App\Etudiant','id_etu');
    
    }

}
