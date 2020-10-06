<?php

namespace App;
use App\Etudiant;
use App\User;
use App\Matiere;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    //
    protected $fillable = [
        'id', 'nom_filiere','id_dep'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function etudiantfiliere()
{
    return $this->hasMany('App\Etudiant')->withTimestamps();

}
public function departement(){
    return $this->belongsTo('App\User','id_dep');

}

public function matiere()
{
    return $this->hasMany('App\Matiere')->withTimestamps();

}
}
