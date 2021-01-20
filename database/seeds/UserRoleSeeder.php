<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $superadmin = App\User::create([
            'id_role' => 1,
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('admin')
     ]);

     $admin = App\User::create([
         'id_role' => 2,
        'name' => 'administration',
        'email' => 'administration@service.com',
        'password' => bcrypt('administration')
 ]);

 $prof = App\User::create([
    'id_role' => 3,
   'name' => 'prof',
   'email' => 'prof@prof.com',
   'password' => bcrypt('prof')
]);

$etudiant = App\User::create([
    'id_role' => 4,
   'name' => 'etudiant',
   'email' => 'etu@etudiant.com',
   'password' => bcrypt('etudiant')
]);
    }
}
