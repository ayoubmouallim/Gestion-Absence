<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    
    //
    protected $fillable = [
        'id','nombre_Heure','id_mat','id_etu'
   ];
   protected $hidden =[
       'created_at','updated_at'
   ];


    public function etudiantrecord(){
        return $this->belongsTo('App\Etudiant','id_etu');

    
    }
    public function recordmatiere(){
        return $this->belongsTo('App\Matiere','id_mat');

    
    }
    
}
