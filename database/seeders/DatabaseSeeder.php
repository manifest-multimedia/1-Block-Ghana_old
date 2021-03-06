<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'firstname' => 'Gabriel',
            'lastname' => 'Abiah',
           // 'user_role' => 'doctor',
            'role' => 'agent',
            'email' => 'gabriel@manifestghana.com',
            'mobile' => '0546747672',
            'password' => bcrypt('0546747672'),
        ],);
        $user = User::factory()->create([
            'firstname' => 'Erob',
            'lastname' => 'Osei',
           // 'user_role' => 'doctor',
            'role' => 'admin',
            'email' => 'info@1blockghana.com',
            'mobile' => '0546747672',
            'password' => bcrypt('1blockghana'),
        ]);
    }
}