<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Nelson Ovidio',
            'lastname' => 'Vásquez Ventura',
            'username' => '5254',
            'email' => 'nelson.o.vasquez@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $user->assignRole('Admin');

        User::factory(399)->create();
    }
}
