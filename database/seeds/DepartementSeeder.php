<?php

use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     App\Departement::create([
            'id' => 1,
            'nom_dep' => 'Informatique',
        
     ]);


     App\Departement::create([
        'id' => 2,
        'nom_dep' => 'Mecanique',
    
 ]);
}
    
}
