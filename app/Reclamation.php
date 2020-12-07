<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $fillable = [
        'id', 'message','date','id_etu','id_prof'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function reclamation_etu(){
      
        return $this->belongsTo('App\Etudiant','id_etu');
    }
    public function reclamation_prof(){

        return $this->belongsTo('App\Enseignant','id_prof');
    }
}
