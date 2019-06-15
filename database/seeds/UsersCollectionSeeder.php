<?php

use Illuminate\Database\Seeder;

class UsersCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 3)->create();

        $data = array([
            'name' => 'Frank',
            'lastname' => 'Cary',
            'email' => 'frank.cary@tecsup.edu.pe',
            'user' => 'franka107',
            'password' => bcrypt('dstecsup2'),
            'type' => 'admin',
            'active' => 1,
            'address' => 'Calle Don Bosco 107 - Arequipa - Peru',
            'email_verified_at' => now(),
            'remember_token' => 'abcdefghij',
        ]);
        App\User::insert($data);
    }
    
}
