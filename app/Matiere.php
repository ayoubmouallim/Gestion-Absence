<?php

namespace App;
use App\Filiere;
use App\Semestre;
use App\Enseignant;
use App\Seance;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    //

    protected $fillable = [
        'id','nom_mat','id_filiere','id_sem','id_ens'
    ];
protected $hidden = [
    'created_at','updated_at'
];

    public function filieremat(){
        return $this->belongsTo('App\Filiere','id_filiere');
    
    }
    public function semestre(){
        return $this->belongsTo('App\Semestre','id_sem');
    
    }
    public function enseignantMatiere(){
        return $this->belongsTo('App\Enseignant','id_ens');
    
    }
    public function seancematiere()
    {
        return $this->hasMany('App\Seance')->withTimestamps();
    
    }

}
