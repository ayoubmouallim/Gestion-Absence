<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filiere;

class Departement extends Model
{
    //
    protected $fillable = [
        'nom_dep'
    ];

    public function filieredepartement()
{
    return $this->hasMany('App\Filiere')->withTimestamps();

}

}
