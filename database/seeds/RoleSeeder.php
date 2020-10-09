<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        App\Role::create([
            'id' => 1,
            'type' => 'superadmin'
        ]);
        App\Role::create([
            'id' => 2,
            'type' => 'admin'
        ]);
        App\Role::create([
            'id' => 3,
            'type' => 'prof'
        ]);
        App\Role::create([
            'id' => 4,
            'type' => 'etudiant'
        ]);
    }
}
