<?php

namespace App;
use App\Enseignant;
use App\Matiere;
use App\Absence;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    //
    protected $fillable = [
        'id','date','heure_debut','heure_fin','id_mat','id_ens'
   ];
   protected $hidden =[
       'created_at','updated_at'
   ];
    public function enseignantseance(){
        return $this->belongsTo('App\Enseignant','id_ens');

    
    }
    public function seancematiere(){
        return $this->belongsTo('App\Matiere','id_mat');

    
    }
    public function absences()
    {
        return $this->hasMany('App\Absence','id_sea');
    
    }
}
