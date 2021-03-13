<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alvantesha Priliandu',
            'email' => 'palvantesha@gmail.com',
            'user_group' => 'super_admin',
            'dob' => '1993-08-27',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
