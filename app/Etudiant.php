<?php

namespace App;
use App\User;
use App\Filiere;
use App\Absence;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $fillable = [
        'id','cne', 'nom_etu', 'prenom_etu','phone_etu','id_filiere','id_user'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_user');

    }
    public function filiere(){
        return $this->belongsTo('App\Filiere','id_filiere');

    }
    public function absenceEtudiant()
    {
        return $this->hasMany('App\Absence')->withTimestamps();
    
    }
}
