<?php

use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Filiere::create([
            'id' => 1,
            'nom_filiere' => 'GLSID2',
            'id_dep' => 1,
        
     ]);
     App\Filiere::create([
        'id' => 2,
        'nom_filiere' => 'BDCC2',
        'id_dep' => 1,
    
 ]);
    }
}
