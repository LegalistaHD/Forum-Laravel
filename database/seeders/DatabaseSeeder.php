<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Raihan',
            'email' => 'raihan@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Esa',
            'email' => 'esa@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Adi',
            'email' => 'adi@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Bisma',
            'email' => 'bisma@gmail.com',
        ]);
    }
}
