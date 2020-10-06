<?php

namespace App;
use App\Matiere;
use App\Seance;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //
    protected $fillable = [
        'id','nom_ens','prenom_ens','phone_ens','adresse_ens','id_user'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function userprof(){
        return $this->belongsTo('App\User','id_user');
    
    }
    public function MatiereEnseignant()
    {
        return $this->hasMany('App\Matiere')->withTimestamps();
    
    }
    public function seance()
    {
        return $this->hasMany('App\Seance')->withTimestamps();
    
    }
}
