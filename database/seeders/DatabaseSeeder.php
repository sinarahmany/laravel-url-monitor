<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Sina',
            'email' => 'info@sinarahmannejad.com',
            'password' => bcrypt('Kingsina22.'),
            'email_verified_at' => now(),
        ]);
        \App\Models\User::create([
            'name' => 'Example User',
            'email' => 'example@test.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
    }
}
