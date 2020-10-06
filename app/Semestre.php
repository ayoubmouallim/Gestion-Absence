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
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function semestreMatiere()
{
    return $this->hasMany('App\Matiere')->withTimestamps();

}
}
