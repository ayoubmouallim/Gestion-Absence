<?php

use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Semestre::create([
            'id' => 1,
            'nom_sem' => 'S1',        
     ]);
     App\Semestre::create([
        'id' => 2,
        'nom_sem' => 'S2',        
 ]);

 App\Semestre::create([
    'id' => 3,
    'nom_sem' => 'S3',        
]);
App\Semestre::create([
    'id' => 4,
    'nom_sem' => 'S4',        
]);

App\Semestre::create([
    'id' => 5,
    'nom_sem' => 'S5',        
]);
App\Semestre::create([
    'id' => 6,
    'nom_sem' => 'S6',        
]);
    }
}
