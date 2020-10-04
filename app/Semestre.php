<?php

namespace App;
use App\Matiere;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    //
    protected $fillable = [
        'nom_sem'
    ];

    public function semestreMatiere()
{
    return $this->hasMany('App\Matiere')->withTimestamps();

}
}
