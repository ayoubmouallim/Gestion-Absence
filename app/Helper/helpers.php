<?php 

use App\Record;
 
function calculerNombreTotalHeure($idStudent)
{
    $records=Record::where('id_etu',$idStudent)->get();
   $nombreHeure=0;
    foreach ($records as $record) {
        $nombreHeure = $nombreHeure + $record->nombre_Heure;
    }
   return $nombreHeure; 
}










